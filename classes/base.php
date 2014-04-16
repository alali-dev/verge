<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Base{
    
    protected $type;
    
    public function __construct($type) {
        $this->type = $type;
    }
    
    public function __get($property) {
        return $this->$property;
    }
    
    public function __set($property, $value) {
        $this->$property = $value;
    }
    
    public function to_json(){
        return json_encode(get_object_vars($this));
    }
}