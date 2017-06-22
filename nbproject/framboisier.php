<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of framboisier
 *
 * @author toure
 */
class Framboisier extends Cake {
    public $image;
    public $ingredients;
    
    function __construct($image, $ingredients) {
        parent::__construct($name, $price);
        $this->image = './gateauframboise.jpeg';
        $this->ingredients = ["sugar", "cream"];
    }
    
    function __toString() {
        parent::__toString($name, $price);
    }
}
