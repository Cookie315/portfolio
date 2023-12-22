<?php
require_once("../libs/Smarty.class.php");
$smarty = new Smarty();
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$smarty->template_dir = "../templates/";
$smarty->compile_dir = "../templates_c/";

//登録内容確認ボタンを押した時
if(isset($_POST["name"])){
    $NAME =htmlspecialchars($_POST["name"]);//名前の取得
    $ID = htmlspecialchars($_POST["id"]);//IDの取得
    $PASS1 = htmlspecialchars($_POST["pass1"]);//パスワード一つ目取得
    $PASS2 = htmlspecialchars($_POST["pass2"]);//パスワード二つ目取得
    $ch = "";
    if(isset($_POST["ch"])){
    $ch = htmlspecialchars($_POST["ch"]);
    }
    $smarty->assign('text1',$NAME);
    $smarty->assign('text2',$ID);

    //重複確認用
    $r1 = $s -> query("SELECT COUNT(*) FROM mem WHERE name = '$NAME'");
    $r2 = $s -> query("SELECT COUNT(*) FROM mem WHERE id = '$ID'");


    //どれかに空欄がある場合
    if($ch == "ch"){
        $smarty->assign('msg','<br>');
        $smarty->display('../templates/registation.tpl');  
    }
    elseif($PASS1 == null || $PASS2 == null ||$ID == null ||$NAME == null){
        $smarty->assign('msg','記入していない欄があります。');
        $smarty->display('../templates/registation.tpl');
    }

    //パスワード同士の内容が違う場合
    elseif($PASS1 != $PASS2){
        $smarty->assign('msg','パスワードと確認用パスワードが一致ません。');
        $smarty->display('../templates/registation.tpl');
    }


    //IDにローマ字と数字以外がある場合
    elseif(preg_match("/[^A-Za-z0-9]/",$ID)){
        $smarty->assign('msg','使用できない文字があります。');
        $smarty->display('../templates/registation.tpl');
    }

    //名前が既に登録されていた場合
    elseif($r1 -> fetchColumn()!= "0"){
        $smarty->assign('msg','この名前は既に使われています。');
        $smarty->display('../templates/registation.tpl');
    }

    //IDが既に登録されていた場合
    elseif($r2->fetchColumn()!= "0"){
        $smarty->assign('msg','このIDは既に使われています。');
        $smarty->display('../templates/registation.tpl');
    }

    //上記に問題がない場合
    else{
            $smarty->assign('name',$NAME);
            $smarty->assign('id',$ID);
            $smarty->assign('pass',$PASS1);
            $smarty->assign('pass2',$PASS2);
            $smarty->display('../templates/check.tpl');
        }
    }

//初回画面
else{
    $smarty->assign('text1',"");
    $smarty->assign('text2',"");
    $smarty->assign('msg',"<br>");
    $smarty->display('../templates/registation.tpl');  
}       
?>
