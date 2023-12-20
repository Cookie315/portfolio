<?php

require_once("../libs/Smarty.class.php");
$smarty = new Smarty();
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$smarty->template_dir = "../templates/main.tpl";
$smarty->compile_dir = "../templates_c";

$smarty->assign('text',"");
//ログインボタンを押した時
if(isset($_POST["id"])){
    $ID = htmlspecialchars($_POST["id"]);     
    $PASS = htmlspecialchars($_POST["pass"]);       

    //パスワードとIDと連携された名前があるかの確認
    $r = $s -> query("SELECT name FROM mem WHERE pass = '$PASS' && id ='$ID'"); 
    while($re = $r -> fetch()){
                $NAME = $re["name"];
            }
    //記入してない欄がある場合
    if($PASS == null||$ID == null){ 
        if(isset($_POST["id"])){
            $smarty->assign('text',$ID);
        }else{
            $smarty->assign('text',"");
        }
        $smarty->assign('msg',"記入していない欄があります。");
        $smarty->display('../templates/main.tpl');
    }
    //IDまたはパスワードにローマ字以外を記入
    elseif(preg_match("/[^A-Za-z0-9]/",$ID)||preg_match("/[^A-Za-z0-9]/",$PASS)){
        $smarty->assign('msg','使用できない文字があります。');
        $smarty->assign('text',$ID);
        $smarty->display('../templates/main.tpl');
    }
    //アカウント発見時
    elseif(isset($NAME)){
        session_destroy();
        session_start();
            $_SESSION['msg'] = "<br>";
            $_SESSION['msg1'] = "<br>";
            $_SESSION['name'] = $NAME;
            $_SESSION['id'] = $ID;
            $_SESSION['pass'] = $PASS;
            $_SESSION['mode'] = "only";
            $_SESSION['pagenam'] = 1;//何ページ目なのか
            $_SESSION['pagenow'] = 0;
            $_SESSION['sortnow'] = "id";
            $_SESSION['sortnow2'] = "DESC";
            header('Location: index.php');
        exit; 
    }
    //アカウント未発見時
    else{
        $smarty->assign('msg',"ログインID,またパスワードが違います。");
        $smarty->assign('text',$ID);
        $smarty->display('../templates/main.tpl');
    }
}
//初回画面時
else{
    session_start();
$smarty->assign('msg',"<br>");
$smarty->assign('text',"");
$smarty->display('../templates/main.tpl');
}
?>