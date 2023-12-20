<?php
    $s = new PDO("mysql:host=localhost;dbname=member","root","");

    $NAME = $_POST['name'];
    $form = $_POST["form"];
    $filePath =  $_POST["filePath"];
    $sqltable = $_POST["sqltable"];
    $msg ="<h5><br></h5>";
    $pagenow = $_POST["namb"];
    $pagenam = $_POST["pgnam"];
    $sortnow = $_POST["sort"];
    $sortnow2 = $_POST["sort2"];
    //アップロードの処理
    if(isset($_FILES["image"])){
        $DATE = date('Y-m-d');
        // アップロードされたファイル件を処理
        for($i = 0; $i < count($_FILES["image"]["name"]); $i++ ){
            $k = 1;
            // アップロードされたファイルか検査
            if(is_uploaded_file($_FILES["image"]["tmp_name"][$i])){
                $fileName =  $_FILES["image"]["name"][$i];
                $fileName2 = $fileName;
                //重複がないかの確認
                while(file_exists($filePath. $fileName2)){
                    $fileName2 = $fileName;
                    $fNAME = mb_substr($fileName2, ($iti=(mb_strpos($fileName2,0))), (mb_strpos($fileName2,'.'))-$iti);//ファイルの名前部分
                    $TYPE =mb_substr($fileName2, mb_strrpos($fileName2, '.') + 1, mb_strlen($fileName2));//ファイルの種類部分
                    $fNAME = basename($filepath."/".$fileName2,".$TYPE");
                    $fileName2 = $fNAME."($k).".$TYPE;
                    $k++;
                    if($k>100){
                        break;
                    }
                }
                // ファイルを移動
                move_uploaded_file($_FILES["image"]["tmp_name"][$i], $filePath . $fileName2);
                $FILEsize = $_FILES['image']['size'][$i];
                $FILE =$fileName2; 
                $TYPE = mb_substr($fileName, mb_strrpos($fileName, '.') + 1, mb_strlen($fileName));
                $s -> query("INSERT INTO $sqltable (username,name,type,size,date)VALUES('$NAME','$FILE','$TYPE',$FILEsize,'$DATE')");
                $sortnow = "id";
                $sortnow2 = "DESC";
                $pagenow = 0;
                $pagenam = 1;
            }
            else{
                $msg = '<h5 class="text-danger"style="text-align:center">ファイルが選択されていません。</h5>';

                
            }
        }
    }
    session_start();
    $_SESSION['msg'] = $msg;
    $_SESSION['pagenow'] = $pagenow;
    $_SESSION['pagenam'] = $pagenam;
    $_SESSION['sortnow'] = $sortnow;
    $_SESSION['sortnow2'] = $sortnow2;
    header("Location: $form");
    exit; 
?>