<?php
$form = $_POST["form"];
$filePath =  $_POST["filePath"];
if(isset($_POST["c"])){
$CHECK = $_POST["c"];
    //2つ以上選択があった場合 
    if(isset( $CHECK[1])){
        array_map('unlink', glob('../file/up_load_file/*.*'));
        foreach($CHECK as $c){
            copy($filePath.'/'.$c,'../file/up_load_file/'.$c);
        }
            header('Location: zip.php');
    }
    //1つしか選択がなかった場合
    else{
        $filepath = $filePath."/".$CHECK[0];
        // リネーム後のファイル名
        $filename = "$CHECK[0]";
        
        // ファイルタイプを指定
        header('Content-Type: application/force-download');
        
        // ファイルサイズを取得し、ダウンロードの進捗を表示
        header('Content-Length: '.filesize($filepath));
        
        // ファイルのダウンロード、リネームを指示
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        
        // ファイルを読み込みダウンロードを実行
        readfile($filepath);
    }

}
else{

        header("Location: $form");
        exit; 
}
?>