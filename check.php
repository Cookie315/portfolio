<?php
$rc = $_POST["c"];
for($i = 0;$i < 3; $i++){
    print isset($rc[$i]) ? $rc[$i] : "";
} 
?>