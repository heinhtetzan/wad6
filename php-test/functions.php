<?php

$name = "hein Htet zan";//local

function aa($x = "x"){
    global $name;
    return "this is aa - $x - $name";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p><?php echo aa(); ?></p>

    <p><?php echo strlen($name); ?></p>
    <p><?php echo str_word_count($name); ?></p>
    <p><?php echo strrev($name); ?></p>
    <p><?php echo strpos($name,"kyaw"); ?></p>
    <p><?php echo str_replace("zan","kyaw",$name); ?></p>



</body>
</html>
