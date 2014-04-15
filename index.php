<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo $_GET['request'];
include 'lib/bones.php';

get('/', function($app) {
  $app->set('message', 'Welcome Back');
  $app->render('home');
});
get('/signup', function($app) {
  
  $app->render('signup');
});

get('/say/:message', function($app){
    $app->set('message', $app->request('message'));
    $app->render('home');
});

post('/signup', function($app){
    $app->set('message', 'Thanks for Signing Up' . $app->form('name') . '!');
    $app->render('home');
});