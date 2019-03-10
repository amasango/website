<?php
// src/Router/Governance.php
namespace Amasango\Router;

use Slim\App;
use Amasango\Controller;

class Governance extends Router
{
    public function route()
    {
        $this->register(
            $this->controller,
            "/governance/",
            "index",
            "GET"
        );
    }

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->controller = new Controller\Governance;
    }
}