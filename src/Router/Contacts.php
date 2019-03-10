<?php
// src/Router/Contacts.php
namespace Amasango\Router;

use Slim\App;
use Amasango\Controller;

class Contacts extends Router
{
    public function route()
    {
        $this->register(
            $this->controller,
            "/contacts/",
            "index",
            "GET"
        );
    }

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->controller = new Controller\Contacts;
    }
}