<?php
// src/Controller/Article.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Amasango\Model;

class Article extends Page
{
    public function home(Request $request, Response $response, array $args)
    {
        return $this->html(
            $request,
            $response,
            "We are friends of Amasango, are you?",
            [
                new Model\Content("who-are-we", "Who Are We?", "<p>We are the friends of Amasango and we would 
                    like our efforts to centre on friendship.</p>"),
                new Model\Content("mission", "Mission", "<p>To provide assistance, patron and support to the 
                    beneficiaries of the Amasango SA Charitable Trust.</p>"),
                new Model\Content("vision", "Vision", "<p>We aim to bring hope and joy to the children at Amasango, 
                    to alter the course of a hopelessness.</p>")
            ]
        );
    }

    public function privacy(Request $request, Response $response, array $args)
    {

        return $this->html(
            $request,
            $response,
            "Privacy",
            [
                new Model\Content(
                    "collection", 
                    "Collection", 
                    "<p>We do not collect any personal information using this website.</p>"
                ),
                new Model\Content(
                    "storage", 
                    "Storage", 
                    "<p>We do not store any personal information from the use of our website.</p>"
                ),
                new Model\Content(
                    "security", 
                    "Security", 
                    "<p>We protect the private access of our website by only availing it via HTTPS.</p>"
                ),
                new Model\Content(
                    "issues",
                    "Issues",
                    "<p>Where you find any privacy issues with our website,
                        please <a href = \"/contacts/\">contact us</a>.</p>"
                )
            ]
        );
    }

    public function accessibility(Request $request, Response $response, array $args)
    {
        return $this->html(
            $request,
            $response,
            "Accessibility",
            [
                new Model\Content(
                    "a11y", 
                    "A11y", 
                    "<p>Our website has been written to conform to the A11y project's 
                        recommendations as much as possible.</p>"
                ),
                new Model\Content(
                    "issues", 
                    "Issues", 
                    "<p>Where you experience or find accessibility issues with our website, 
                        please <a href = \"/contacts/\">contact us</a>.</p>"
                )
            ]
        );
    }
}