<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>intersectarray</title>
</head>
<body>
<?php
    $name =array("habeeb","kafoor","abdul");
    $name1 =array("habeeb","kafoor","rahim");
    $res = array_intersect($name,$name1);
    print_r ($res);
    ?>
    
</body>
</html>