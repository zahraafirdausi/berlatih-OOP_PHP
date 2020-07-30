<?php 

class Animal{
    public $legs = 2;
    public $cold_blooded = 'false';
    public $name;
    public function __construct($name){
        //return $this->name;
       $this->name = $name;
    }
    public function get_legs(){
        return $this->legs;
        //$this->legs = $legs;
    }
    public function get_cold_blooded(){
        return $this->cold_blooded;
    }
}


?>