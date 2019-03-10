<?php
// src/Router/Style.php
namespace Amasango\Router;

use Slim\App;
use Amasango\Controller;

class Style extends Router
{
    private $controllers;
    private $names;

    public function route()
    {
        for ($index = 0; $index < 3; $index++) {
            $this->register(
                $this->controllers[$index],
                "/stylesheets/" . $this->names[$index] . "/",
                "css",
                "GET"
            );
        }
    }

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->controllers = [
            new Controller\Stylesheet("layout"),
            new Controller\Stylesheet("colour"),
            new Controller\Stylesheet("font")
        ];
        $this->names = [
            "layout",
            "colour",
            "font"
        ];
    }
}