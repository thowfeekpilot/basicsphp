<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my fifth php</title>
</head>
<body>
    <?php
    $ma=65;
    if ($ma<35) {
        echo "maths fail";
    }
    elseif ($ma>35 && $ma <60){
        echo "avg pass";
    }
    else{
        echo "pass";
    }

?>

</body>
</html>