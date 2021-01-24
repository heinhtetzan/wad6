<?php

    $x = 2;
    $y = 5;
    $z = 6;
    $stock = 5;

    if($stock > 10){
        echo "In stock";
    }else if($stock <= 10){
        echo "almost out of stock";
    } else{
        echo "out of stock";
    }