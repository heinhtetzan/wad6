<?php

$url = "https://fakestoreapi.com/products";
$data = file_get_contents($url);
$arr = json_decode($data);
//print_r($arr);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <?php foreach ($arr as $a) { ?>
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-header"><?php echo $a->title; ?></div>
                    <img src="<?php echo $a->image; ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <?php echo $a->description; ?>
                        <div class="d-flex justify-content-between align-item-center">
                            <h4><?php echo $a->price; ?></h4>
                            <span class="badge rounded-pill bg-primary"><?php echo $a->category ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>



</body>
</html>

