<?php
$h = date("G");
print "現在".$h."時";
if($h < 12){
    print "午前です";
}
else{
    print "午後です";
}
?>