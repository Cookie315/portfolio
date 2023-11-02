<form method="POST" action = "radio.php">
<?php
for($i = 1;$i <= 3;$i++){
    print <<< eot
    <input type = "radio" name = "r" value = "R$i">$i
    eot; 
}
?>
<input type = "submit" value = "Send">
</from>   