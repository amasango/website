<?php
// src/Controller/File.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\StreamInterface as Stream;

abstract class File
{
    protected function send(Request $request, Response $response, Stream $stream, string $type, int $length)
    {
        return $response
            ->withStatus(200, 'OK')
            ->withHeader('Content-Type', $type)
            ->withHeader('Content-Length', $length)
            ->withBody($stream);
    }
}