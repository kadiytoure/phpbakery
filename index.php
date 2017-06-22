<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor
 * 
 */
include_once './cake.php';
include_once './fraisier.php';
include_once './framboisier.php';
include_once './gateauorange.php';
$gateau = [new Cake("fraisier", 30)];
$gateau [] = new Cake("framboisier", 45);
$gateau [] = new Cake("fraisier", 56);
$gateau [] = new Cake("gateauorange", 48);
$gateau [] = new Framboisier("./gateauframboise.jpeg", "sucre");
$gateau [] = new Gateauorange("./gateauorange.jpg", "farine");
$gateau [] = new Fraisier("./fraisier.jpg", "cream");

foreach ($gateau as $c) {
    echo $c->name .  $c->price ; 
    echo '<img src="' . $c->image . '"><br/>';
  
    
}

