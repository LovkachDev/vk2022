<?php
    require "config/db.php";
    $prices = R::findAll('prices',' ORDER BY price DESC LIMIT 1 ');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = 'assets/style.css'>
    <title>VK Аукцион</title>
</head>
<body id = "body">
    <div class="end flex jcc aic" id = "end_wrap">
        <div class="end__area flex jcc aic">
            <div class="end__title">
                Аукцион окончен
            </div>
            <div class="end__info">
                Товар будет продан за : <br>
                <span class = "strong">
                    <?php
                        if($prices)
                        {
                            foreach($prices as $price)
                            {
                                echo $price->price." "."руб.";
                            }
                        }
                        else
                        {
                            echo "0 руб.";
                        }
                    ?>
                </span> 
            </div>
        </div>
    </div>
    <div class="wrapper">
        <header class = "flex jcc">
            <h1 class = "header__title">VK Аукцион</h1>
        </header>
        <div class="container">
            <div class="sell__area flex">
                <div class="sell__info">
                    <div class="sell__title">
                        Плюшевая игрушка Персик.
                    </div>
                    <div class="sell__price">
                        Текущая цена : 
                        <span class = "strong">
                            <?php
                                if($prices)
                                {
                                    foreach($prices as $price)
                                    {
                                        echo $price->price." "."руб.";
                                    }
                                }
                                else
                                {
                                    echo "0 руб.";
                                }
                            ?>
                        </span>
                        
                    </div>
                    <p class = "sell__description">
                        Высота :  18см <br>
                        Ширина :  20см
                    </p>
                    <form action = "addPrice.php" method = "POST" class = "sell__form flex">
                        <input placeholder="Предложите цену в рублях" class = "sell__input" name = "price" type="number">
                        <button class = "sell__button">Предложить</button>
                    </form>
                    <a href = "https://vk.com/lvchdv"><div class="sell__button flex jcc">Написать продавцу</div></a>
                    <p class = "sell__timer">До конца аукциона: <span class = "strong" id = "timer"></span></p>
                </div>
                <div class="sell__picture flex">
                    <img src = "assets/product.png" class = "product__image">
                </div>
            </div>
        </div>
    </div>
<script src = "assets/timer.js"></script>
</body>
</html>