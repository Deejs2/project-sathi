<?php

class Router {
    private array $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
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

    public function resolve() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $this->formatPath($_SERVER['REQUEST_URI']);
        $callback = $this->routes[$method][$path] ?? null;

        if (is_null($callback)) {
            http_response_code(404);
            header('Location: view/404.php');
            return;
        }

        if ($this->isAdminRoute($path) && !$this->checkAuth()) {
            http_response_code(403);
            header('Location: view/403.php');
            return;
        }

        call_user_func($callback);
    }

    private function formatPath($path): string
    {
        $path = explode('?', $path)[0];
        return rtrim($path, '/');
    }

    private function isAdminRoute($path): bool
    {
        return strpos($path, '/admin') === 0;
    }

    private function checkAuth(): bool
    {
//        check authentication
        return isset($_SESSION['user']);
    }
}