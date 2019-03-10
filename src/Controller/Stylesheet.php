<?php
// src/Controller/Stylesheet.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\Stream;

class Stylesheet extends File
{
    private $name;

    public function css(Request $request, Response $response, array $args)
    {
        $type = "text/css";
        $filename = __DIR__ . "/../../static/stylesheets/" . $this->name . ".css";
        $length = filesize($filename);
        $resource = fopen($filename, "r");
        $stream = new Stream($resource);
        $response = $response->withHeader("Content-Language", "en-GB");
        return $this->send(
            $request,
            $response,
            $stream,
            $type,
            $length
        );
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}