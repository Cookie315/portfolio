<?php
$h = date("G");
print "現在".$h."時";
switch ($h){
    case 7:
        print "朝ごはん";
        break;
    case 12:
        print "昼ごはん";
        break;
    case 18:
        print "夕ご飯";
    default:
    print "食事時間外";
    break;
}
?>