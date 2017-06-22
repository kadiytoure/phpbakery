<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fraisier
 *
 * @author toure
 */
class Fraisier extends Cake {
   public $image;
   public $ingredients;
   
   function __construct($image, $ingredients) {
       parent::__construct($name, $price);
       $this->image = "./fraisier.jpg";
       $this->ingredients = ["sugar","strawberry","cream"];
   }
 
   function __toString() {
       parent::__toString($name, $price);
   }
}


