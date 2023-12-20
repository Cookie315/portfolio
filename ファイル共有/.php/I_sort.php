<?php
    $ASC = '<option value="ASC">昇順</option>';
    $DESC = '<option value="DESC">降順</option>';

    switch($SORT){
        case "id": $smarty->assign('default1',"アップロード順");
                     $smarty->assign('sortname',"");         
                     break;                 
        case "name": $smarty->assign('default1',"ファイル名順"); 
                     $smarty->assign('sortname','<option value="id">アップロード順</option>'); 
                     break;                     
        case "type":$smarty->assign('default1',"種類順"); 
                    $smarty->assign('sortname','<option value="id">アップロード順</option>');  
                    break;                    
        case "size":$smarty->assign('default1',"サイズ順"); 
                     $smarty->assign('sortname','<option value="id">アップロード順</option>');         
                     break;                    
        case "date":$smarty->assign('default1',"アップロード日順");
                    $smarty->assign('sortname','<option value="id">アップロード順</option>');  
                     break;
        case "username": $smarty->assign('default1',"アップロード者"); 
                         $smarty->assign('sortname','<option value="id">アップロード順</option>'); 
                         break;                                      
    }
    if($SORT2 == "ASC"){    
        $smarty->assign('SORTAD',$ASC);
        $smarty->assign('SORTDA',$DESC);   
    }
    else{
        $smarty->assign('SORTAD',$DESC);
        $smarty->assign('SORTDA',$ASC); 
    }
 
        $smarty->assign('sortnow',$SORT);
        $smarty->assign('sortnow2',$SORT2);


?>