<?php

if (isset($_POST['submit'])) {
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['name']);
    // echo htmlspecialchars($_POST['ingridents']);

    if (empty($_POST['email'])) {
        echo 'an email is requried <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email is not vaild<br/>';
        }
    }

    if (empty($_POST['name'])) {
        echo 'a name is requried <br />';
    } else {
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
            echo 'name must be letters only<br/>';
        }
       
    }

    if (empty($_POST['ingridents'])) {
        echo 'ingridents are requried <br />';
    } else {
        $ingridents = $_POST['ingridents'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingridents)){
            echo 'ingridents must be letters only and comma separeted<br/>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<body>

    <?php include 'templates/header.php' ?>

    <section class="container">

        <h4 class="center">Add a Pizza</h4>
        <form action="" class="white" action="add.php" method='POST'>
            <label>Your Email:</label>
            <input type='text' name='email'>
            <label>Pizza name:</label>
            <input type='text' name='name'>
            <label>Ingridents:</label>
            <input type='text' name='ingridents'>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn">
            </div>
        </form>
    </section>

    <?php include 'templates/footer.php' ?>

</body>

</html>