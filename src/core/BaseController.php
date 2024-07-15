<?php

namespace core;

class BaseController {
    protected function view($view, $data = [], $layout = 'main') {
        $data['view'] = $view;
        extract($data);
        include_once __DIR__ . '/../../app/Views/layout/' . $layout . '.php';
    }

    protected function render($view, $data = []) {
        extract($data);
        include_once __DIR__ . '/../../app/Views/' . $view . '.php';
    }
}