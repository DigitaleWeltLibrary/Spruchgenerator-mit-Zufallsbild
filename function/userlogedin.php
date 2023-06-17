<?php

session_start();

if($_SESSION['ip'] !== $_SERVER['REMOTE_ADDR'] && !isset($_SESSION['user'])){
    header('Location: /');
    exit;
}