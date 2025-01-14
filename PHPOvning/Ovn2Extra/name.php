<?php
$day = "Monday";
$numbers = [6, 9, 3, 10, 5];
$answer = $_POST['number1'] + $_POST['number2'];
?>
<html>
<body>

Välkommen <?php echo $_POST["name"]; ?><br>
Du är <?php echo $_POST["age"]; ?> år gammal.<br>
<br>
<?php
echo "Today is ";
switch ($day) {
    case "Monday":
        echo "Meds Monday";
        break;
    case "Tuesday":
        echo "Teriffic Tuesday";
        break;
    case "Wednesday":
        echo "Wacky Wednesday";
        break;
    case "Thursday":
        echo "Thirstyday";
        break;
    case "Friday":
        echo "Freestyle Friday";
        break;
    case "Saturday":
        echo "Sad Saturday";
        break;
    case "Sunday":
        echo "Sunny Sunday";
        break;
    default:
        echo "Invalid day";
};
echo "<br><br>";
sort($numbers);
echo implode(", ", $numbers);
echo "<br><br>";
switch ($_POST['operation']) {
    case '+':
        $answer = $_POST['number1'] + $_POST['number2'];
        break;
    case '-':
        $answer = $_POST['number1'] - $_POST['number2'];
        break;
    case '*':
        $answer = $_POST['number1'] * $_POST['number2'];
        break;
    case '/':
        $answer = $_POST['number1'] / $_POST['number2'];
        break;
}
echo "$answer";
?>
</body>
</html>
