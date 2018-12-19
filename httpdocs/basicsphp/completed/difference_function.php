<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>differencefunction</title>
</head>
<body>
    <?php
    $profession1 =array("engineer","lawer","doctor");
    $profession2 =array("teacher","lawer","doctor");
    $res=array_diff( $profession1, $profession2);
    print_r($res);
    ?>
</body>
</html>