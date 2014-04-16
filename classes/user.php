<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends Base{
    protected $name;
    protected $email;
    
    public function __construct() {
        parent::__construct('user');
    }
}