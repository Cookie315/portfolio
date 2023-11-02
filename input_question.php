<form method = "POST" action = "question.php">
<?php
print "what do you study?"."<br>";
print <<<eot
<input type = "checkbox" name = "c[]" value = "C">C
<input type = "checkbox" name = "c[]" value = "java">java 
<input type = "checkbox" name = "c[]" value = "SQL">SQL
<input type = "checkbox" name = "c[]" value = "HTML">HTML
<input type = "checkbox" name = "c[]" value = "Linux">Linux
<input type = "checkbox" name = "c[]" value = "PHP">PHP
<input type = "submit" value = "Send">
</form>
eot;
?>