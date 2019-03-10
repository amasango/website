<?php
// src/Model/Contact.php
namespace Amasango\Model;

class Contact
{
    public $type;
    public $url;
    public $display;


    public function __construct($type, $display, $url)
    {
        $this->type = $type;
        $this->display = $display;
        $this->url = $url;
    }
}