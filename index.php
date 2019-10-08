<?php

    $conn = mysqli_connect('localhost', 'Jakub', '1234', 'pizza_portal');

    if(!$conn){
        echo 'no connection ';
        echo mysqli_connect_error();
    }

?>

<!DOCTYPE html>

    <?php include 'templates/header.php' ?>
    <?php include 'templates/footer.php' ?>

</html>