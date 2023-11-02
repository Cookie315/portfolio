<DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<title>掲示板 検索</title>
</head>
<body>
<h2>【メッセージ検索】</h2>
<!--検索キーワード入力フォーム-->
<form method="GET" action="keizi_search.php">
検索する文字列:<input type ="text" name="key"><br>
<input type="submit" value="検索">
</form>
<br>
<?php
  require_once("../data/db_info.php");
  $s = new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);
  //検索SQLの発行
  $key_d = isset($_GET["key"])?htmlspecialchars($_GET["key"]):null;
  if($key_d<>""){
    $str = <<<eot1
    SELECT tbj0.title,tbj1.mid,tbj1.name,tbj1.msg
    FROM tbj1 JOIN tbj0
    ON tbj1.tid = tbj0.tid
    WHERE tbj1.msg LIKE "%$key_d%"
    eot1;
    //検索結果一覧の表示
    $r = $s -> query($str);
    while($re = $r ->fetch()){
        print"($re[0]):$re[1] : $re[2]<br>";
        print "$re[3]<br><br>";
    }
  }
?>
<hr>
<!--トップ画面の呼び出し-->
<a href="keizi_top.php">トップ画面に戻る</a>
</body>
</html>    