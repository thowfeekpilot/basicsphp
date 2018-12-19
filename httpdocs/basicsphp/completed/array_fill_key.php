<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>arrayfillkey</title>
</head>
<body>
<?php
$point=array("a","b","c","d","e");
$result=array_fill_keys($point,"pilot");
print_r($result);
?>

    
</body>
</html>