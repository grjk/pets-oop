<?php

class Pet {
    private $_name;
    private $_color;


    // Default constructor / Parameterized constructor
    function __construct($name="unknown", $color="?") {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat() {
        echo $this->_name . " is eating<br>";
    }

    function talking() {
        echo "Pet is talking<br>";
    }
}