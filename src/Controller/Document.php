<?php
// src/Controller/Image.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\Stream;

class Document extends File
{
    private $name;

    public function pdf(Request $request, Response $response, array $args)
    {
        $format = "pdf";
        $type = "application/" . $format;
        $filename = __DIR__ . "/../../static/documents/" . $this->name . "." . $format;
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