<?php
require_once("../libs/Smarty.class.php");
$smarty = new Smarty();
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$smarty->template_dir = "../templates/delete.tpl";
$smarty->compile_dir = "../templates_c/";

//受け取り処理
$ID = htmlspecialchars($_POST["id"]);
$PASS = htmlspecialchars($_POST["pass"]);
$NAME = htmlspecialchars($_POST["name"]);
$FORM = $_POST["form"];


$smarty->assign('form',$FORM);
$smarty->assign('name',$NAME);
$smarty->assign('id',$ID);
$smarty->assign('pass',$PASS);

//入力されてるか確認
if(isset($_POST["pass2"])){
    $PASS2 =htmlspecialchars($_POST["pass2"]);  
    //パスワードがあってる場合
    if($PASS == $PASS2){
       $s -> query("DELETE FROM mem WHERE name = '$NAME' AND id = '$ID'");
       $r = $s -> query("SELECT name FROM file WHERE username='$NAME'");
       while($re = $r -> fetch()){
           $s -> query("DELETE FROM file WHERE name = '$re[0]'");
       }      
       $files = scandir("../file/Accounts/".$ID);
       // ディレクトリ内のファイルを全て削除する
       foreach( $files as $file_name ) {   
           if( !preg_match( '/^\.(.*)/', $file_name) ) {
               unlink("../file/Accounts/".$ID."/".$file_name);
           }
       }
       rmdir("../file/Accounts/".$ID);
       session_start();
           header('Location: main.php');
       exit;
    }

    //何も記入がない場合
    elseif($PASS2 == null){
       $smarty->assign('msg','パスワードを記入してください。');
       $smarty->display('../templates/delete.tpl'); 
     }
    //ローマ字以外を記入
    elseif(preg_match("/[^a-z0-9]/",$PASS2)){
        $smarty->assign('msg','使用できない文字があります。');
        $smarty->display('../templates/delete.tpl');
    }

    //パスワードが間違っている場合
    else{
       $smarty->assign('msg','パスワードが違います。');
      $smarty->display('../templates/delete.tpl'); 
    }
}

   //最初に開いた画面
else{
    $smarty->assign('msg',"<br>");
    $smarty->display('../templates/delete.tpl');
}
?>