<?php

    $conn = mysqli_connect('localhost', 'Jakub', '1234', 'pizza_portal');

    if(!$conn){
        echo 'no connection ';
        echo mysqli_connect_error();
    }

    $sql = 'SELECT title, ingredients, id FROM pizzas';

    $result = mysqli_query($conn, $sql);

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);

    print_r($pizzas);

?>

<!DOCTYPE html>

    <?php include 'templates/header.php' ?>
    <?php include 'templates/footer.php' ?>

</html>