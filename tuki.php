<?php
$m = array("","睦月","如月","弥生");
$i = 2;
print $i.'月は';
switch ($i){
    case 1:
        print $m[$i];
        break;
    case 2:
        print $m[$i];
        break;
    case 3:
        print $m[$i];
        break;
    default:
    print "卯月～師走";
    break;             
}
?>