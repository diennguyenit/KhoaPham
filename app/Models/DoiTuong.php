<?php

namespace App\Models;

class DoiTuong {
    private $name;
    private $weight;
    private $language;

    public function __construct($name, $weight, $language)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->language = $language;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getweight()
    {
        return $this->weight;
    }

    public function getlanguage()
    {
        return $this->language;
    }
}
