<?php

$pagetitle = '';
$keywords = '';
$description = '';

require_once 'php/settingsdata.php';

$request = (string) $_SERVER['REQUEST_URI'];

// NOTE Parameter
$urlneu = (string) $request;
if (str_contains($request, '?')) {
    $weg = (int) strpos($request, '?');
    $request = (string) substr($request, 0, $weg);
}

switch ($request) {
        //NOTE home
    case '':
    case '/':
    default:
        require_once('pages/home.php');
        break;
    case '/bhome':
        require_once('pages/bhome.php');
        break;
    case '/login':
        require_once('pages/login.php');
        break;
    case '/settings':
        require_once('pages/edit.php');
        break;
    case '/bilder':
        require_once('pages/bilder.php');
        break;
}
