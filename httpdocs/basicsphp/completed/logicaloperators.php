<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logicaloperators</title>
</head>
<body>
<?php
    echo "Logical operators" ."<br>";
$ta=37;
$en=57;
$ma=78;
$sc=67;
$ss=47;
    echo "Total " .($ta+$en+$ma+$sc+$ss) ."<br>";
    echo "Average " .($ta+$en+$ma+$sc+$ss)/5 ."<br>";
if ($ta>=35 && $en>=35 && $ma>=35 && $sc>=35 && $ss>=35){
    echo "All pass";
}
else {
    echo "fail";

}
?>
  
</body>
</html>