<?php
// src/Router/Router.php
namespace Amasango\Router;

abstract class Router
{
    protected $app;
    protected $controller;

    abstract public function route();

    protected function register($controller, $pattern, $command, $method)
    {
        $command = [$controller, $command];
        $this->app->map([$method], $pattern, $command);
    }
}