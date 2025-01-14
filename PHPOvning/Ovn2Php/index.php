<!DOCTYPE html>
<html>
<body>
 
<?php
$i = 7;
if ($i == 2) { // Kollar om i är lika med 2
    echo "variablen 'i' är lika med 2 "; 
} elseif ($i > 2) { // Kollar om i är störren än 2 
echo "variablen 'i' är störren än 2";
} elseif ($i < 2) { // Kollar om i är mindre än 2
    echo "variablen 'i' är mindre än 2 ";
}
?>
<br>
<?php
$kallejobb = "svetsare";
if ($kallejobb == "kodare") {
    echo "Kalle är en kodare";
} elseif ($kallejobb == "svetsare") {
    echo "Kalle är en svetsare";
} elseif ($kallejobb == "kock") {
    echo "Kalle är en kock";
}
?>
<br>
<?php 
switch ($kallejobb) {
    case "kodare":
        echo "Kalle är en kodare";
        break;
    case "svetsare":
        echo "Kalle är en svetsare";
        break;
    case "kock":
        echo "Kalle är en kock";
}
?>
<br>
<?php 
$x = 5;
if ($x > 2 && $x < 10) {
    echo "x är större än 2 och mindre än 10";
} else {
    echo "x är inte större än 2 och mindre än 10";
}
?>
<br>
<?php
echo date("d");
?>
<br>
<?php
$today = date("D");
switch ($today) {
    case "Mon":
        echo "Det är Måndag";
        break;
    case "Tue":
        echo "Det är Tisdag";
        break;
    case "Wed":
        echo "Det är Onsdag";
        break;
    case "Tur":
        echo "Det är Torsdag";
        break;
    case "Fri":
        echo "Det är Fredag";
        break;
    case "Sat":
        echo "Det är Lördag";
        break;
    case "Sun":
        echo "Det är Söndag";
}
?>
</body>
</html>