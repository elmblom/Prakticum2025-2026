<?php 
$text = "tomosarts future crypto site";
$str1 = "Future";
$str2 = "future";
$file = "./tomosarts.txt";
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
echo strlen($text);  
echo "<br>";
echo str_replace("future","past", $text);
echo "<br>";
if ($str1 == $str2){
    echo "String 1 och 2 är lika";
} else{
    echo "String 1 och 2 är inte lika";
}
echo "<br>";
echo file_get_contents($file);
?>
<br>
<form action="name.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
