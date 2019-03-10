<?php
// src/Model/Page.php
namespace Amasango\Model;

class Page
{
    public $stylesheets = [
        "/stylesheets/layout/",
        "/stylesheets/colour/",
        "/stylesheets/font/"
    ];
    public $icon = "/images/icon/";
    public $header = [
        "urn" => "/",
        "image" => [
            "src" => "/images/header/",
            "alt" => "Friends of Amasango"
        ]
    ];
    public $nav = [
        "Governance" => "/governance/",
        "Contacts" => "/contacts/"
    ];
    public $heading;
    public $main;
    public $footer = [
        "nav" => [
            "Back to Top" => "#content",
            "Home" => "/",
            "Accessibility" => "/accessibility/",
            "Privacy" => "/privacy/"
        ],
        "small" => "Amasango Charity Trust 158-594NPO"
    ];

    public function __construct($heading, $main)
    {
        $this->heading = $heading;
        $this->main = $main;
    }
}