<?php

    $s = new PDO("mysql:host=localhost;dbname=member","root","");

    $form = $_POST["form"];
    $filePath =  $_POST["filePath"];
    $sqltable = $_POST["sqltable"];   
    $FILE = $_POST["file"];

    $f = $s -> query("SELECT COUNT(*) FROM $sqltable WHERE name = '$FILE'");
    $f = $f->fetchColumn();
    
    if($f != "0"){
        $s -> query("DELETE FROM $sqltable WHERE name = '$FILE'"); //個人用削除
        $s -> query("ALTER TABLE $sqltable auto_increment = 1");
        $file = $filePath."/".$FILE;
        unlink($file);//ファイルを削除する
    }
    header("Location: $form");
    exit; 
?>