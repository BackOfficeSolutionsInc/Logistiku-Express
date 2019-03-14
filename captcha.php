<?php

$a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxzy1234567890";
$str=str_shuffle($a);
$str=substr ($str,0,6);
/*$str="";
for ($i=1;$i<=6;$i++)
{
    $str = $str.substr ($a,rand(0,61),1);
}*/
$img=imagecreate(100,40);
imagecolorallocate($img,0,0,0);



header("content-type:image/jpeg");
imagejpeg ($img);
imagedestroy($img);
