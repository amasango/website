<?php
// src/Controller/Contacts.php
namespace Amasango\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Amasango\Model;

class Contacts extends Page
{
    function index(Request $request, Response $response, array $args)
    {
        $general = $this
            ->environment
            ->render(
                "contacts.html.twig",
                [
                    "contacts" => [
                        new Model\Contact(
                            "Address",
                            "2A Pear Lane,<br>Grahamstown,<br>6139", 
                            "https://goo.gl/maps/zcn28pUnghD2")
                    ]
                ]
            );
        $chair = $this
            ->environment
            ->render(
                "contacts.html.twig",
                [
                    "contacts" => [
                        new Model\Contact("Email", "kim@kimwebber.co.za", "mailto:kim@kimwebber.co.za")
                    ]
                ]
            );
        /*$founder = $this
            ->environment
            ->render(
                "contacts.html.twig",
                [
                    "contacts" => [
                        new Model\Contact("Email", "jane.bradshaw@amasango.org.za", "mailto:"),
                        new Model\Contact("Telephone", "0466223511", "tel:")
                    ]
                ]
            );*/
        return $this
            ->html(
                $request,
                $response,
                "Contacts",
                [
                    new Model\Content("general", "General", $general),
                    new Model\Content("chairperson", "Chairperson", $chair)
                ]
            );
    }
}