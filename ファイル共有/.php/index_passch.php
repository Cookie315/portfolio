<?php

require_once("../libs/Smarty.class.php");
$smarty = new Smarty();
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$smarty->template_dir = "../templates/passch.tpl";
$smarty->compile_dir = "../templates_c/";

 //受け取り処理
session_start();
    $NAM = $_POST["nam"];
    $FORM = $_POST["form"];
    $NAME = $_SESSION['name'];
    $PASS = $_SESSION['pass'];

    $smarty->assign('name',$NAME);
    $smarty->assign('pass',$PASS);
    $smarty->assign('nam',$NAM);
    $smarty->assign('form',$FORM);
    $smarty->assign('msg',"<br>");

    if($NAM == "chenge"){
    $NAM = "login"; 

    $N_PASS1 = $_POST["pass0"];
    $N_PASS2 = $_POST["pass1"];
    $N_PASS3 = $_POST["pass2"];

    //空欄がある場合
    if($N_PASS1 ==null || $N_PASS2 == null ||$N_PASS3 ==null){
        $smarty->assign('msg','記入してない欄があります。');
    }
    //使用不可能な文字の場合
    elseif(preg_match("/[^A-Za-z0-9]/",$N_PASS1)||preg_match("/[^A-Za-z0-9]/",$N_PASS2)||preg_match("/[^A-Za-z0-9]/",$N_PASS3)){
        $smarty->assign('msg','使用できない文字があります。');
    }
    //新しいパスワードと確認用の新しいパスワードが一致する場合 
    elseif($N_PASS2 == $N_PASS3){
        //パスワードが一致した場合
        if($N_PASS1 == $PASS){  
            $s -> query("UPDATE mem SET pass = '$N_PASS2'  WHERE pass = '$N_PASS1' && name = '$NAME'"); //パス変更
            $_SESSION['pass'] = $N_PASS2;
            $smarty->assign('msg',"パスワードを変更しました。");  
        }
        else{
            $smarty->assign('msg','入力したパスワードが違います。');
        }
    }
    else{
        $smarty->assign('msg','新しいパスワードと確認用パスワードが違います。');
    }
    }

    $smarty->display('../templates/passch.tpl');

?>
