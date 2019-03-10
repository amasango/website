<?php
// src/Router/Document.php
namespace Amasango\Router;

use Slim\App;
use Amasango\Controller;

class Document extends Router
{
    private $controllers;
    private $names;

    public function route()
    {
        for ($index = 0; $index < count($this->controllers); $index++) {
            $this->register(
                $this->controllers[$index],
                "/documents/" . $this->names[$index] . "/",
                "pdf",
                "GET"
            );
        }
    }

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->controllers = [
            new Controller\Document("letters-of-authority"),
            new Controller\Document("trust-deed"),
            new Controller\Document("penny-whitford"),
            new Controller\Document("cecil-nonqane")
        ];
        $this->names = [
            "letters-of-authority",
            "trust-deed",
            "penny-whitford",
            "cecil-nonqane"
        ];
    }
}