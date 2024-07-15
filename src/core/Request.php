<?php

namespace core;

class Request {
    public static function capture(): Request
    {
        $request = new self();
        $request->data = array_merge($_GET, $_POST);
        return $request;
    }

    public function all(): array
    {
        return $this->data;
    }

    private array $data = [];
}