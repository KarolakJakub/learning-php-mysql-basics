<?php

include('config/db_connect.php');

$errors = array('email' => '', 'name' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {


    if (empty($_POST['email'])) {
        $errors['email'] = 'email is requried<br/>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email is not vaild<br/>';
        }
    }

    if (empty($_POST['name'])) {
        $errors['name'] = 'a name is requried <br />';
    } else {
        $name = $_POST['name'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $errors['name'] =  'name must be letters only<br/>';
        }
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'ingredients are requried <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'ingredients must be letters only and comma separeted<br/>';
        }
    }
    if (!array_filter($errors)) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['name']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

        if (mysqli_query($conn, $sql)) {
            echo 'success';
        } else {
            echo 'failed' . mysqli_error($conn);
        }

        header('Location: index.php');
    }
} else {
    $name = $email = $ingredients = '';
}



?>

<!DOCTYPE html>



<?php include 'templates/header.php' ?>

<section class="container">

    <h4 class="center">Add a Pizza</h4>
    <form action="" class="white" action="add.php" method='POST'>
        <label>Your Email:</label>
        <input type='text' name='email' value='<?php echo htmlspecialchars($email) ?>'>
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza name:</label>
        <input type='text' name='name' value='<?php echo htmlspecialchars($name) ?>'>
        <div class="red-text"><?php echo $errors['name'] ?></div>
        <label>Ingridents:</label>
        <input type='text' name='ingredients' value='<?php echo htmlspecialchars($ingredients) ?>'>
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn">
        </div>
    </form>
</section>

<?php include 'templates/footer.php' ?>