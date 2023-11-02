<?php
$rc = $_POST["c"];
    print "You study  ";
// for($i = 0;$i < 6; $i++){
//     print isset($rc[$i]) ? $rc[$i] : "";
//     print " ";
// } 
foreach($rc as $c){
    print $c." "; 
}
?>