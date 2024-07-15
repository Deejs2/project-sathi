<?php

namespace core;

use Exception;

class Router {
    private static ?Router $instance = null;
    private array $routes = [];
    private ?string $basePath = null;

    private function __construct() {}

    public static function getInstance(): self {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function group(string $basePath, \Closure $routesClosure) {
        $this->basePath = $basePath;
        call_user_func($routesClosure, $this);
        $this->basePath = null;
    }

    private function formatPath($path): string {
        $path = explode('?', $path)[0];
        $path = rtrim($path, '/');
        return $path === '' ? '/' : $path;
    }

    private function addRoute(string $method, string $path, $callback) {
        if ($this->basePath !== null) {
            $path = rtrim($this->basePath, '/') . ($path ? '/' . ltrim($path, '/') : '');
        }
        $this->routes[strtoupper($method)][$path] = $callback;
    }


    public function get($path, $callback) {
        $this->addRoute('GET', $path, $callback);
    }

    public function post($path, $callback) {
        $this->addRoute('POST', $path, $callback);
    }

    public function put($path, $callback) {
        $this->routes['PUT'][$path] = $callback;
    }

    public function delete($path, $callback) {
        $this->routes['DELETE'][$path] = $callback;
    }


    public function patch($path, $callback) {
        $this->routes['PATCH'][$path] = $callback;
    }

    /**
     * @throws Exception
     */
    public function resolve() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $this->formatPath($_SERVER['REQUEST_URI']);
        $callback = $this->routes[$method][$path] ?? null;

        //test code to check if the router is working correctly
        error_log("Requested path: $path with method: $method. Callback: " . var_export($callback, true));
        if (is_null($callback)) {
            http_response_code(404);
            include_once __DIR__ . '/../../app/Views/errors/404.php';
            return;
        }

        if (is_array($callback)) {
            [$controllerClass, $method] = $callback;
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $method)) {
                    call_user_func([$controller, $method]);
                } else {
                    throw new Exception("Method $method not found in $controllerClass");
                }
            } else {
                throw new Exception("Controller class $controllerClass not found");
            }
        } else {
            call_user_func($callback);
        }
    }

}