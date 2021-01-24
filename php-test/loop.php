<?php

$arr = ["apple","orange","mango"];

$assoc = [
    "name" => "hein htet zan",
    "job" => "web dev",
    "age" => 26,
];

$multi = [
    [
        "name" => "hein htet zan",
        "job" => "web dev",
        "age" => 26,
    ],
    [
        "name" => "hein htet zan",
        "job" => "web dev",
        "age" => 26,
    ],
    [
        "name" => "hein htet zan",
        "job" => "web dev",
        "age" => 26,
    ],
    [
        "name" => "hein htet zan",
        "job" => "web dev",
        "age" => 26,
    ],

];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            border : 1px solid black;
            padding: 10px 15px;
        }
    </style>
</head>
<body>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Job</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($multi as $k=>$m){ ?>
        <tr>
            <td><?php echo $k+1; ?></td>
            <td><?php echo $m['name']; ?></td>
            <td><?php echo $m['job']; ?></td>
            <td><?php echo $m['age']; ?></td>
        </tr>
    <?php } ?>



    </tbody>
</table>



<hr>

<ul>
    <?php foreach ($multi as $k=>$m){ ?>
        <li>
            User Info <?php echo $k; ?>
            <ul>
                <?php foreach ($m as $x=>$y) { ?>
                    <li> <?php echo $x ?> - <?php echo $y ?></li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
</ul>


</body>
</html>