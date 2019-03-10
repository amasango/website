<?php
// src/Router/Image.php
namespace Amasango\Router;

use Slim\App;
use Amasango\Controller;

class Image extends Router
{
    private $controllers;
    private $names;
    private $formats;

    public function route()
    {
        for ($index = 0; $index < count($this->controllers); $index++) {
            $this->register(
                $this->controllers[$index],
                "/images/" . $this->names[$index] . "/",
                $this->formats[$index],
                "GET"
            );
        }
    }

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->controllers = [
            new Controller\Image("header"),
            new Controller\Image("penny-whitford"),
            new Controller\Image("jane-bradshaw"),
            new Controller\Image("cecil-nonqane"),
            new Controller\Image("icon"),
            new Controller\Image("sun"),
            new Controller\Image("flower"),
            new Controller\Image("butterfly"),
        ];
        $this->names = [
            "header",
            "penny-whitford",
            "jane-bradshaw",
            "cecil-nonqane",
            "icon",
            "sun",
            "flower",
            "butterfly"
        ];
        $this->formats = [
            "png",
            "png",
            "png",
            "png",
            "png",
            "png",
            "png",
            "png"
        ];
    }
}