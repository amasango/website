<?php
// src/Controller/Image.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\Stream;

class Image extends File
{
    private $name;

    private function image(string $format, Request $request, Response $response, array $args)
    {
        $type = "image/" . $format;
        $filename = __DIR__ . "/../../static/images/" . $this->name . "." . $format;
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

    public function png(Request $request, Response $response, array $args)
    {
        return $this->image(
            "png",
            $request,
            $response,
            $args
        );
    }

    public function jpg(Request $request, Response $response, array $args)
    {
        return $this->image(
            "jpeg",
            $request,
            $response,
            $args
        );
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}