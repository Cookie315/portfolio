<?php
if(isset($_POST["id"])){
$ID = htmlspecialchars($_POST["id"]);
$smarty->assign('id',$ID);
}
if(isset($_POST["pass"])){
$PASS = htmlspecialchars($_POST["pass"]);
$smarty->assign('pass',$PASS);
}
if(isset($_POST["name"])){
$NAME = htmlspecialchars($_POST["name"]);
$smarty->assign('name',$NAME);
}
if(isset($_POST["nam"])){
$NAM = htmlspecialchars($_POST["nam"]);
$smarty->assign('nam',$NAM);
}
?>