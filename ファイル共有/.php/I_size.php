<?php
if($size == "0"){
    $size = "0KB";
}

elseif($size < 1000){
    $size ="1KB";
}
elseif($size >= 1000000){
    $size = $size/1000000;
    $size = number_format($size, 1, '.', '');
    $size = $size."MB";
}
elseif($size >= 1000){
    $size = $size/1000;
    $size = number_format($size, 1, '.', '');
    $size = $size."KB";
}
?>