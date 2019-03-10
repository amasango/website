<?php
// src/Model/Content.php
namespace Amasango\Model;

class Content
{
    public $urn;
    public $heading;
    public $body;

    public function __construct(string $urn, string $heading, string $body)
    {
        $this->urn = $urn;
        $this->heading = $heading;
        $this->body = $body;
    }
}