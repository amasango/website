<?php
// src/Model/Trustee.php
namespace Amasango\Model;

class Trustee
{
    public $name;
    public $image;
    public $cv;

    public function __construct($name, $image, $cv)
    {
        $this->name = $name;
        $this->image = $image;
        $this->cv = $cv;
    }
}