<?php

//NOTE function bilder
function tapicon(array $tapicon):string
{
    $type = explode('.', $tapicon[2]);
    if ($type === 'tapicon') return $tapicon[2];
    return $tapicon[3];
}


//NOTE tapicon img
$imgdir = scandir('assets/layout_img/');
$tapicon = tapicon($imgdir);


