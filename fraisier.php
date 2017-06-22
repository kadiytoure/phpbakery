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
   
   function __construct() {
       parent::__construct("fraisier", 30);
       $this->image= './fraisier.jpg';
       
   }
}
