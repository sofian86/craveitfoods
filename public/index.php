<?php

// Load the autoloader
require "vendor/autoload.php";

// Override any server date with our own
date_default_timezone_set('America/New_York');

// Instantiate the Slim instance
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

// Instantiate the view class
$view = $app->view();

$view->parserOption = array(
    'debug' => true
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

// Home Page Route
$app->get('/', function() use($app){
    $app->render('about.twig');
})->name('home');

// Menu Page Route
$app->get('/menu', function() use($app){
    $app->render('menu.twig');
})->name('menu');

// Contact Page Route
$app->get('/contact', function() use($app){
    $app->render('contact.twig');
})->name('contact');

// Admin Page Route
$app->get('/admin', function() use($app){
    $app->render('admin.twig');
})->name('admin');