<?php
 require_once("../data/db_info.php");
 $s = new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);
 //トップ画面から指定されたスレッド番号の取得
 $tid_d = isset($_GET["tid"])?$_GET["tid"]:null;
 //スレッドタイトルの取得
 $r = $s -> query("SELECT title FROM tbj0 WHERE tid = $tid_d");
 $re = $r ->fetch();
 $title = $re['title'];
 //スレッドタイトルの表示
 print <<< eot1
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset = "UTF-8">
    <title>掲示板 $title</title>
    </head>
    <body>
    <h1>$title</h1>
eot1;
//入力メッセージの取得
$name_d = isset($_GET["name"])? htmlspecialchars($_GET["name"]):null;
$msg_d = isset($_GET["msg"])? htmlspecialchars($_GET["msg"]):null;
$msg_d = nl2br($msg_d);
if($name_d <> ""){
    //メッセージの登録
    $r = $s -> query(
        "SELECT IFNULL(MAX(mid),0)FROM tbj1 WHERE tid = $tid_d");
    $re = $r ->fetch();
    $mid = $re[0] + 1;
    $r = $s ->query(
        "INSERT INTO tbj1 value($tid_d,$mid,'$name_d','$msg_d',now())");
}
//メッセージ一覧の表示
$r = $s -> query(
    "SELECT mid, name,time,msg FROM tbj1 WHERE tid = $tid_d ORDER BY time");
    while($re=$r ->fetch()){
        print $re['mid'].":".$re['name'].":".$re['time']."<br>";
        print $re['msg']."<br><br>";
    }
//メッセージ入力フォーム
print <<< eot2
<hr>
<h2>メッセージの投稿</h2>
<form method="GET" action="keizi.php">
名前<input type="text" name="name"><br>
メッセージ<br><textarea name="msg" rows="10" cols="70"></textarea>
<input type ="hidden" name="tid" value=$tid_d><br>
<input type ="submit" value="投稿">
</form>
eot2;   
?>
<hr>
<a href='keizi_top.php'>スレッドに戻る</a>
</body>
</html>