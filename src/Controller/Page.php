<?php
// src/Controller/Page.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Twig as Template;
use Slim\Http\Stream;
use Amasango\Model;

abstract class Page extends File
{
    protected $environment;

    protected function html(Request $request, Response $response, string $heading, array $main)
    {
        $page = $this
            ->environment
            ->render("page.html.twig", [
            "page" => new Model\Page($heading, $main)
        ]);
        $type = "text/html";
        $length = strlen($page);
        $response = $response->withHeader("Content-Language", "en-GB");
        $resource = fopen("php://temp", "+r");
        fwrite($resource, $page);
        rewind($resource);
        $stream = new Stream($resource);
        return $this->send(
            $request,
            $response,
            $stream,
            $type,
            $length
        );
    }

    public function __construct()
    {
        $loader = new Template\Loader\FilesystemLoader([__DIR__ . "/../View"]);
        $this->environment = new Template\Environment($loader, [
            "cache" => __DIR__ . "/../View/Cache"
        ]);
    }
}