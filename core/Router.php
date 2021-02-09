<?php

class Router
{
    public array $register;

    public function __construct()
    {
    }

    public function get(string $path, $callback) {
        $this->register["GET"][$path] = $callback;
    }

    public function post(string $path, $callback) {
        $this->register["POST"][$path] = $callback;
    }
}