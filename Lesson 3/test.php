<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$greeting = "hi";

    if($greeting = "hi") {
        echo "Hi";
    } elseif($greeting != "hi") {
        echo "Bye";
    }


    for($counter = 0; $counter <= 4; $counter++;) {
        echo "Hi";
    }

$cats = "Mjau";

    switch($cats) {
        case mjau:
            echo "mjau";
            break;
    }


?>
</body>
</html>