<?php

$conn = mysqli_connect('localhost', 'Jakub', '1234', 'pizza_portal');

if (!$conn) {
    echo 'no connection ';
    echo mysqli_connect_error();
}
?>