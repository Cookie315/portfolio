<?php

//$c に合計ファイル数の格納
$smarty->assign('form',$form);
$smarty->assign('count',$c);
$smarty->assign('pagenam',$pagenam);                
$smarty->assign('pagenow',$pagenow); 

if($pagenam==1){
    //11件目以降ない場合
    if($t != "10"||$c==9){
        $smarty->assign('paging',1);
        $smarty->display('../templates/paging.tpl');
    //11件目以降もある場合
    }else{
        $smarty->assign('paging',2);
        $smarty->display('../templates/paging.tpl');
    }     
}
//２ページ目以降
//次のページがない場合
elseif($t != "10"||$c==$pagenow+9){
    $smarty->assign('paging',3);
    $smarty->display('../templates/paging.tpl');
}
//次のページがある場合
else{
    $smarty->assign('paging',4);
    $smarty->display('../templates/paging.tpl');  
}
?>