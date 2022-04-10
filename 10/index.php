<?php
    $text = fopen("product.txt", "r");
    $array = null;
    if ($text) {
        while (($buffer = fgets($text)) !== false) {
            $array[] = $buffer;
        }
    }
    fclose($text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = 'assets/style.css'>
    <title>VK Товары</title>
</head>
<body id = "body">
    <div class="wrapper">
        <header class = "flex jcc">
            <h1 class = "header__title">VK Товары</h1>
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
                            85 руб.
                        </span>
                    </div>
                    <p class = "sell__description">
                        <?=$array[0]?>
                    </p>
                    <a href = "https://vk.com/lvchdv"><div class="sell__button flex jcc">Написать продавцу</div></a>
                </div>
                <div class="sell__picture flex">
                    <img src = "<?=$array[1]?>" class = "product__image">
                </div>
            </div>
        </div>
    </div>
</body>
</html>