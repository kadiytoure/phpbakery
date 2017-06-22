<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cakeorange
 *
 * @author toure
 */
class Cakeorange extends Cake {
    public $image;
    public $ingredients;
    
    function __construct($image, $ingredients) {
        parent::__construct($name, $price);
        $this->image = './gateauorange.jpg';
        $this->ingredients = ["orange","sugar",];
    }
    function __toString() {
        parent::__toString($name,$price);
    }
}
