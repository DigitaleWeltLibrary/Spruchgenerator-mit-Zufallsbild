<?php

$imgs = scandir('assets/content_img/');
$count = count($imgs) - 1;



if (isset($_GET['img']) && file_exists('assets/content_img/' . $_GET['img'])) {
    unlink('assets/content_img/' . $_GET['img']);
    header('Location: /bilder');
}
