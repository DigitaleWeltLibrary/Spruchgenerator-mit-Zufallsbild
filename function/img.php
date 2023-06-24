<?php

//NOTE function bilder
function getpicture($dir, $imgwant)
{
    if (file_exists($dir . $imgwant . '.jpg')) return $imgwant . '.jpg';
    if (file_exists($dir . $imgwant . '.png')) return $imgwant . '.png';
}



//NOTE tapicon img
 $tapicon = getpicture('assets/layout_img/', 'tapicon');
