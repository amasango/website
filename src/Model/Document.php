<?php
// src/Model/Document.php
namespace Amasango\Model;

class Document
{
    public $name;
    public $urn;
    public $filename;

    public function __construct(string $name, string $urn, string $filename)
    {
        $this->name = $name;
        $this->urn = $urn;
        $this->filename = $filename;
    }
}