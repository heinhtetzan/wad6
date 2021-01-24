<?php

$data = file_get_contents("https://forex.cbm.gov.mm/api/latest");
//json to php arr
$data = json_decode($data);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency</title>
</head>
<body>

<h1><?php echo $data->info; ?></h1>
<p><?php echo $data->description; ?></p>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Currency</th>
        <th>Rates</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data->rates as $k=>$c){ ?>
        <tr>
            <td><?php echo $k; ?></td>
            <td><?php echo $c; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
