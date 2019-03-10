<?php
// src/Router/Article.php
namespace Amasango\Router;

use Slim\App;
use Amasango\Controller;

class Article extends Router
{
    public function route()
    {
        $urls = ["/", "/privacy/", "/accessibility/"];
        $commands = ["home", "privacy", "accessibility"];
        for ($index = 0; $index < count($urls); $index++) {
            $this->register(
                $this->controller,
                $urls[$index],
                $commands[$index],
                "GET"
            );
        }
    }

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->controller = new Controller\Article;
    }
}