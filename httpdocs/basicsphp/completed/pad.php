<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>arraypad</title>
</head>
<body>
    <?php
    $cars =array("volvo","bmw","toyota");
    print_r (array_pad($cars,4,"bmw"));
    ?>
    
</body>
</html>