<?php
// index.php

require __DIR__ . "/vendor/autoload.php";

use Amasango\Router;
use Slim\App;

function main()
{
    $app = new App();
    (new Router\Article($app))->route();
    (new Router\Governance($app))->route();
    (new Router\Contacts($app))->route();
    (new Router\Style($app))->route();
    (new Router\Image($app))->route();
    (new Router\Document($app))->route();
    $app->run();
}

main();