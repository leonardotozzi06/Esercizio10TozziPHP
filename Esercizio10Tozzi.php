<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    $size = 10;

    $numParagrafi = 5;

    for($i = 0; $i < $numParagrafi; $i++){

        echo "<p style='font-size:{$size}px;'>Ciao mi chiamo ikone</p>";

        $size = $size + 2;

    }


?>

</body>
</html>