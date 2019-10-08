<?php

function sayHello($name = "Adam")
{
    echo 'hello  $name  <br/>';
}

function printProduct($product)
{
    return "{$product['name']} costs {$product['price']} <br/>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php sayHello('Janusz');
    sayHello();
    echo printProduct(['name' => 'produkt', 'price' => 20]);
    ?>

</body>

</html>