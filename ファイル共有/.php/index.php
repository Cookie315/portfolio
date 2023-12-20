<?php
require_once("../libs/Smarty.class.php");
$smarty = new Smarty();
$s = new PDO("mysql:host=localhost;dbname=member","root","");
$smarty->template_dir = "../templates/";
$smarty->compile_dir = "../templates_c/";

session_start();
    $NAME = $_SESSION['name'];
    $ID = $_SESSION['id'];
    $PASS = $_SESSION['pass'];
    $msg = $_SESSION['msg']; 
    $SORT = $_SESSION['sortnow'];
    $SORT2 = $_SESSION['sortnow2'];
    $pagenow = $_SESSION['pagenow'];
    $pagenam = $_SESSION['pagenam'];
    $MODE = $_SESSION['mode'];
    $NAM = "login";

    //名前４文字制限
    $limit = 4;
    $NAME2 = mb_substr($NAME,0,$limit);
    if(mb_strlen($NAME) > $limit) {    
        $NAME2 = $NAME2."...";
    }
    
    $smarty->assign('pagenow',$pagenow);
    $smarty->assign('pagenam',$pagenam);
    $smarty->assign('msg',$msg);
    $smarty->assign('name',$NAME);
    $smarty->assign('name2',$NAME2);
    $smarty->assign('id',$ID);
    $smarty->assign('pass',$PASS);
    $smarty->assign('nam',$NAM);    
    
    if(isset($_POST["mode"])){
        $MODE = $_POST["mode"];
        $_SESSION['mode'] = $MODE;
    }
    include "I_sort.php";
    //個人画面
    if($MODE =="only"){
        $form = "index.php";
        $filePath = "../file/Accounts/$ID/";
        $sqltable = "file";

        $c = $s -> query("SELECT COUNT(*) FROM $sqltable WHERE username='$NAME'");
        $c = $c->fetchColumn();

        //テーブルがない場合は全選択が押せなくなる。
        $smarty->assign('allcheck',' ');
        if($c == 0){
            $smarty->assign('allcheck','disabled');
        }

        $smarty->assign('form',$form);
        $smarty->assign('filePath',$filePath);
        $smarty->assign('sqltable',$sqltable);
        $smarty->assign('mode',$MODE);
        $smarty->display('../templates/index.tpl');

        //fileのデータベース内の表示
        $r = $s -> query("SELECT name,type,size,date FROM $sqltable WHERE username='$NAME' ORDER BY  $SORT $SORT2 ,name DESC  LIMIT 9 OFFSET $pagenow");
        $t =1;//ページ数

        while($re = $r -> fetch()){
            //文字最大数は20に設定
            $limit = 20;
            //21文字以上の場合
            $filename = mb_substr($re[0],0,$limit);
            if(mb_strlen($re[0]) > $limit) {    
                $filename = $filename."...";
            }
            else{
            $filename = $re[0];
            }

            $t++;//表示されているファイル数の格納  
            $size = $re[2];
            //サイズの表示方法設定  
            include 'I_size.php';
            $smarty->assign('filename',$re[0]);
            $smarty->assign('type',$re[1]);
            $smarty->assign('size',$size);
            $smarty->assign('date',$re[3]);
            $smarty->assign('filename2',$filename);
            //テーブル内表示                   
            $smarty->display('../templates/indextable.tpl');
        }
    }
    //共用画面
    else{
        $filePath = "../file/fileall/";
        $sqltable = "fileall";
        $form = "index.php";

        $c = $s -> query("SELECT COUNT(*) FROM $sqltable");
        $c = $c->fetchColumn(); 
         $smarty->assign('allcheck','');
         if($c == 0){
            $smarty->assign('allcheck','disabled');
        }
        
        $smarty->assign('form',$form);
        $smarty->assign('filePath',$filePath);
        $smarty->assign('sqltable',$sqltable);
        $smarty->assign('mode',$MODE);
        $smarty->display('../templates/index.tpl');

        $r = $s -> query("SELECT username,name,date,type,size FROM $sqltable ORDER BY  $SORT $SORT2 ,name DESC  LIMIT 9 OFFSET $pagenow");
        $t =1;

        while($re = $r -> fetch()){
            $t++; 
            $limit = 8;
            $filename=$re[1];
            if(mb_strlen($re[1]) > $limit) {
                $filename = mb_substr($re[1],0,$limit);
                $filename = $filename."...";
            }
            else{
                $filename = mb_substr($re[1],0,$limit);
            }

            $size = $re[4];
            include 'I_size.php';
            $smarty->assign('username',$re[2]);                               
            $smarty->assign('filename',$re[1]);
            $smarty->assign('type',$re[3]);
            $smarty->assign('size',$size);
            $smarty->assign('date',$re[0]);
            $smarty->assign('filename2',$filename);   

            $smarty->display('../templates/indextable.tpl'); 
        } 
    }
    //ページング機能部分
    include 'I_pagingch.php';

    //更新時の初期化処理
    $_SESSION['msg']="<h5><br></h5>";
    $_SESSION["sortnow"] = "id";
    $_SESSION["sortnow2"] = "DESC";
    $_SESSION['pagenam'] = 1;//何ページ目なのか
    $_SESSION['pagenow'] = 0;
?>

