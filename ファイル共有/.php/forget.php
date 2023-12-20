
<?php
require_once("../libs/Smarty.class.php");
$smarty = new Smarty();
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$smarty->template_dir = "../templates/forget.tpl";
$smarty->compile_dir = "../templates_c/";

//パスワード表示ボタンを押した時
if(isset($_POST["name"])){
    $NAME =  htmlspecialchars($_POST["name"]);
    $ID = htmlspecialchars($_POST["id"]); 
    //$PASSに該当するパスワードを格納
    $r = $s -> query("SELECT pass FROM mem WHERE name = '$NAME' && id ='$ID'");
    while($re = $r -> fetch()){
        $re["pass"];
        $PASS =$re["pass"];
    }
    
    
    //未記入の場合
    if($NAME == null || $ID ==null){
        $smarty->assign('msg','記入してない欄があります。');
        $smarty->display('../templates/forget.tpl');
    }
    //IDまたはパスワードにローマ字以外を記入
    elseif(preg_match("/[^A-Za-z0-9]/",$ID)||preg_match("/[^A-Za-z0-9]/",$NAME)){
        $smarty->assign('msg','使用できない文字があります。');
        $smarty->display('../templates/forget.tpl');
    }
    //パスワードが発見された場合
    elseif(isset($PASS)){
        $smarty->assign('name',$NAME);
        $smarty->assign('pass',$PASS);
        $smarty->display('../templates/forgetanser.tpl');
    }

    //パスワードが発見されなかった場合
    else{
        $smarty->assign('msg','お名前、またはログインIDが違います。');
        $smarty->display('../templates/forget.tpl');
    }
}
//初回画面
else{
    $smarty->assign('msg',"<br>");
    $smarty->display('../templates/forget.tpl');
}
?>