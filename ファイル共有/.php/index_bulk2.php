<?php
$s = new PDO("mysql:host=localhost;dbname=member","root","");

$NAME = $_POST['name'];
$form = $_POST["form"];
$filePath =  $_POST["filePath"];
$sqltable = $_POST["sqltable"];
$CHECK = $_POST["c"];
//一括削除の場合
if($CHECK == null){
    header("Location: $form");
    exit; 
}
    foreach($CHECK as $c){
        $f = $s -> query("SELECT COUNT(*) FROM $sqltable WHERE name = '$c' && username = '$NAME'");
        $f = $f->fetchColumn();
        if($sqltable == "fileall"){
                $s -> query("DELETE FROM $sqltable WHERE name = '$c'");
                $s -> query("ALTER TABLE $sqltable auto_increment = 1");
                $file = $filePath."/".$c;               
                //ファイルを削除する
                unlink($file);
        }else{        
        if($f != "0"){
            $s -> query("DELETE FROM $sqltable WHERE name = '$c' && username = '$NAME'");
            $s -> query("ALTER TABLE $sqltable auto_increment = 1");
            $file = $filePath."/".$c;               
            //ファイルを削除する
            unlink($file);
        }    
        }
    }
header("Location: $form");
exit; 

?>