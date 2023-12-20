<?php
$zipName = '../file/up_load_file'; // 圧縮するフォルダ名

$dist = $zipName.'.zip'; // 生成する圧縮ファイル名
$path = $zipName; // 圧縮するフォルダのパス

//DLするファイルのフォルダ構成を維持するか否か　0:しない／1:する
//維持する場合、ダウンロードしたファイルは $path の構成になります
$filePath = 0;
//DLファイルが１つの場合、フォルダに入れるか否か　0:いれない／1:いれる
$folderIn = 1;

$zip = new ZipArchive();
$zip->open($dist, ZipArchive::CREATE | ZipArchive::OVERWRITE);

if (is_dir($path)) {
    $files = array_diff(scandir($path), ['.', '..']);
    $filesNum = count($files);
    foreach ($files as $file){
        if($filePath >= 1){ //フォルダ構成を維持する
            $zip->addFile($path.'/'.$file);
        }else{ //維持しない
            if(($folderIn >= 1) && ($filesNum <= 1)){ //ファイルが１つの時、フォルダに収める場合の処理
                $localFile = $zipName.'/';
            }else{
                $localFile = '';
            }
            $zip->addFile($path.'/'.$file, $localFile.$file);
        }
    }
}
$zip->close();

// ストリームに出力
header('Content-Type: application/zip; name="' . $dist . '"');
header('Content-Disposition: attachment; filename="' . $dist . '"');
header('Content-Length: '.filesize($dist));
//echo file_get_contents($dist);
readfile($dist);

// 一時ファイルを削除しておく
unlink($dist);

exit;

?>
