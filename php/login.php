<?php
session_start();
if (isset($_GET['action'])) {
    session_unset();
    header('Location: /');
    exit;
}
