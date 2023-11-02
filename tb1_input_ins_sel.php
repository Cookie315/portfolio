<form method = "POST" action = "tb1_ins_sel.php">
    <p>番号:<input type = "text" name = "bang"></p>
    <p>氏名:<input type = "text" name = "nama"></p>
    <p>年齢:<input type = "text" name = "tosi"></p>
    <input type = "hidden" name = "ins" value = "yes">
    <input type = "submit" value = "送信">
    
</form>
<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
if(isset($_POST["ins"])){
$b = $_POST["bang"];
$n = $_POST["nama"];
$t = $_POST["tosi"];
$s -> query("INSERT INTO tb1 VALUES('$b','$n','$t')");
}
if(isset($_POST["del"])){
    $d = $_POST["sakuzyo"];
    $s -> query("DELETE FROM tb1 WHERE bang='$d'");
}
$r = $s -> query("SELECT * FROM tb1");
while($re = $r -> fetch()){
    print $re['bang'].":".$re['nama'].":".$re['tosi']."<br>";
}
?>