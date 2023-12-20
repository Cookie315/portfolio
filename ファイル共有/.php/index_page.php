<?php

$NAM = $_POST["nam"];
$form = $_POST["form"];
$SORT = $_POST["sort"];
$SORT2 = $_POST["sort2"];
//ページング機能　ページ変更の場合
if(isset($_POST["namb"])){
    $pagenow= $_POST["namb"];
    $pagenam= $_POST["pgnam"];
    if($NAM == "next"){
        $pagenow = $pagenow +9;   
        $pagenam++;
    }
    if($NAM == "return"){
        $pagenow = $pagenow -9;
        $pagenam--;
    }
    session_start();
            $_SESSION['pagenow'] = $pagenow;
            $_SESSION['pagenam'] = $pagenam;
            $_SESSION['sortnow'] = $SORT;
            $_SESSION['sortnow2'] = $SORT2;
            header("Location:$form");

}
else{
    
    header("Location:$form");
}

?>