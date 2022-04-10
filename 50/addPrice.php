<?php
    require "config/db.php";

    $price = $_POST['price'];

    if(!empty($price))
    {
        $add = R::dispense('prices');
        $add->price = $price;
        R::store($add);
    }

    header('Location:/');
?>