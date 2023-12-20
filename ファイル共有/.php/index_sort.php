<?php
    $form = $_POST["form"];
    $SORT = $_POST["sort"];
    $SORT2 = $_POST["sort2"];
    
//初期時
session_start();
$_SESSION['sortnow'] = $SORT;
$_SESSION['sortnow2'] = $SORT2;
header("Location: $form");
exit; 
?>