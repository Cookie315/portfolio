<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0; url=./main.php">
</head>
<body>
<?php
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$NAME = $_POST["name"];
$ID = $_POST["id"];
$PASS = $_POST["pass"];
$s -> query("INSERT INTO mem VALUES('$NAME','$ID','$PASS')");
mkdir("../file/Accounts/".$ID);
?>
</body>