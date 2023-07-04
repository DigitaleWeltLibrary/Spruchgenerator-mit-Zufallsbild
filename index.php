<?php

require 'php/jsondata.php';

//NOTE nur bei neuer Installation
if ($user === "") {
    require_once('pages/register.php');
    exit;
}
if ($pagetitle === "") {
    require_once('pages/edit.php');
    exit;
}


$request = (string) $_SERVER['REQUEST_URI'];

// NOTE Parameter
$urlneu = (string) $request;
if (str_contains($request, '?')) {
    $weg = (int) strpos($request, '?');
    $request = (string) substr($request, 0, $weg);
}

//NOTE router

$page = match ($request) {
    '' => 'home.php',
    '/' => 'home.php',
    '/bhome' => 'bhome.php',
    '/login' => 'login.php',
    '/settings' => 'edit.php',
    '/imgs' => 'imgs.php',
    '/layout' => 'imgs.php',
    '/register' => 'register.php',
    default => 'home.php'
};

//NOTE Seite einfügen
require 'pages/' . $page;
