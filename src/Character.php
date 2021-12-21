<?php

namespace App;

class Character {
    public $health;
    public $level;
    public $alive;
    public $damage;
    public $heal;

    
public function __construct(){
    $this->health=1000;
    $this->level=1;
    $this->alive=true;
    $this->damage=800;
    $this->heal=400;
    $this->nodamage=0;
    $this->healme=400;
        
}
public function gethealth(){ 
    return $this->health;
}
public function getlevel(){ 
    return $this->level;
}
public function getalive(){ 
    return $this->alive;
}
public function getdamage(){ 
    return $this->damage;
}
public function healdamage(){ 
    return $this->heal;
}
public function nodamage(){ 
    return $this->nodamage;
}
public function healowndamage(){ 
    return $this->healme;
}
//funcion deal_damage
public function deal_damage($character,$damage){
    $character->health=$character->health-$damage;
    if($character->health<1){
        $character->health=0;
        $character->alive=false;
    }
}
//funcion heal_damage
public function heal_damage($character,$heal){
    if($character->health>=1 && $character->health<=600){
        $character->health=$character->health+$heal;
    }
}
//function nodamage_character
public function nodamage_character($character,$nodamage){
    $character->health=$character->health;
    }
//funcion heal_onlyme
public function heal_onlyme($character,$healme){
    if($character->health>=1 && $character->health<=600){
        $character->health=$character->health+$healme;
    }
}
//funcion damage_character2
public function damage_character2($character,$damage){

    if ($character2[level]-$character1[level]>=5)
    {$character1->damage=$character2->damage/2;} 

    if ($character2[level]-$character1[level]<5)
    {$character1->damage=$character2->damage*3/2;} 
    
    $character2->health=$character2->health-$damage;
    if($character2->health<1){
        $character2->health=0;
        $character2->alive=false;
    }
}
}

?>