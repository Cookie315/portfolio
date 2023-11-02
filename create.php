<?php
    require('db_connect.php');

    $title = $_POST["title"];
    $content = $_POST["content"];
    $submit = $_POST["submit"];

    if(!empty($submit)){

        $pdo = db_connect();

        try{
            $sql = "insert into posts (title,content) values(:title,:content)";
            $stmt = $pdo -> prepare($sql);
            $stmt -> bindParam(":title",$title);
            $stmt -> bindParam(":content",$content);
            $stmt -> execute();

            header("Location:main.php");
        }catch(PDOException $e){
            echo $e -> getMessage();
            die();
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>新規登録</title>
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div class="title-area">
          <h1>新規登録</h1>
          <a class="main-return" href="main.php" >メイン画面に戻る</a>         //この行を追加
      </div>
      <form action="" method="POST">
        <input type="text" class="input-area" name="title" placeholder="Title" required><br>
        <input type="text" class="input-area" name="content" placeholder="Content" required><br>
        <input type="submit" class="input-area submit" name="submit" value="登録"> 
      </form>
  </body>
</html>