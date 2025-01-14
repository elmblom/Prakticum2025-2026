<?php 
$text = "tomosarts future crypto site";
$str1 = "Future";
$str2 = "future";
$file = "./tomosarts.txt";
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="./Form.css">
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
Namn: <input type="text" name="name"><br>
Ålder: <input type="text" name="age"><br>
Nummer 1: <input type="number" name="number1" id="number1"><br>
Nummer 2: <input type="number" name="number2" id="number2"><br>
Operation: <select type="dropdown" name="operation" id="operation">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<br>
<input type="submit" id="submit">
</form>
</body>
</html>
