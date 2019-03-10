<?php
// src/Controller/Governance.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Amasango\Model;

class Governance extends Page
{
    public function index(Request $request, Response $response, array $args)
    {
        $board = $this
            ->environment
            ->render(
                "board.html.twig",
                [
                    "board" => [
                        new Model\Trustee("Penny Whitford", "/images/penny-whitford/", "/documents/penny-whitford/"),
                        new Model\Trustee("Jane Bradshaw", "/images/jane-bradshaw/", "/documents/jane-bradshaw/"),
                        new Model\Trustee("Cecil Nonqane", "/images/cecil-nonqane/", "/documents/cecil-nonqane/")
                    ]
                ]
            );
        $documents = $this
            ->environment
            ->render(
                "documents.html.twig",
                [
                    "documents" => [
                        new Model\Document(
                            "Letters of Authority", 
                            "/documents/letters-of-authority/",
                             "Letters of Authority.pdf"
                        ),
                        new Model\Document(
                            "Trust Deed", 
                            "/documents/trust-deed/", 
                            "Trust Deed.pdf"
                        )
                    ]
                ]
            );
        return $this
            ->html(
                $request,
                $response,
                "Governance",
                [
                    new Model\Content("board-of-trustees", "Board of Trustees", $board),
                    new Model\Content("documents", "Documents", $documents)
                ]
            );
    }
}