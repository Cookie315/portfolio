<?php
$m["一月"] = "睦月";
$m["二月"] = "如月";
$m["三月"] = "弥生";
$i = 2;
print $i."月は";
 switch ($i){
    case 1:
        print $m["一月"];
        break;
    case 2:
        print $m["二月"];
        break;
    case 3:
        print $m["三月"];
        break;
    default:
        print "卯月～師走";
        break;       
 }
?>
