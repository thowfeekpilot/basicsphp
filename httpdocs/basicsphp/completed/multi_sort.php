<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>multiarray</title>
</head>
<body>
<?php
$fruit1=array("orange","apple","mango");
$fruit2=array("banana","grapes","cherry");
array_multisort($fruit1,$fruit2);
print_r($fruit1);
print_r($fruit2);
?>
    
</body>
</html>