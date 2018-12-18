<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checkdate</title>
</head>
<body>
    <?php
    if(checkdate(2018,18,12)){
        echo "Date is matched";
    }
    else{
        echo "date is mismatched";
    }
    ?>
    
</body>
</html>