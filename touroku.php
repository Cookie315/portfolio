<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>
<body>
<?php
$s = new PDO("mysql:host=localhost;dbname=upload","root","root");
$N1_d = $_POST["name"];
$N1_s = $_POST["seibetu"];
$N1_p = $_POST["pass"];
$N1_m = $_POST["mail"];
$a='<a href="new.html">登録画面に戻る</a>';
try {
    $s -> query("INSERT INTO data VALUES('$N1_d','$N1_p','$N1_m','$N1_s')");
}
catch(PDOException $e){
    die("だめだぁ".$a); 
}
    


    $msg = '登録ありがとうございます！<br>登録完了しました！'
?>
<div class="container m-5">
    <div class="row justify-content-center m-5">
        <div class="col-auto m-5">
                <br>
                <br>
                <?php print $msg; ?>
                <a href="otamesi.php"><h3>ログインページに戻る</h3></a>
        </div>
    </div>
</div>

</body>
    