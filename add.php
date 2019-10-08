<?php

    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['name']);
        // echo htmlspecialchars($_POST['ingridents']);

        if(empty($_POST['email'])){
            echo 'an email is requried <br />';
        } else {
            echo htmlspecialchars($_POST['email']);
        }

        if(empty($_POST['name'])){
            echo 'a name is requried <br />';
        } else {
            echo htmlspecialchars($_POST['name']);
        }
        
        if(empty($_POST['ingridents'])){
            echo 'ingridents are requried <br />';
        } else {
            echo htmlspecialchars($_POST['ingridents']);
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