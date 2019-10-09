<?php

include('config/db_connect.php');

if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo mysqli_error($conn);
    }
}

if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM pizzas WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}

?>

<html>

<?php include('templates/header.php'); ?>

<div class="container center">

    <?php if ($pizza) : ?>

        <h4>
            <ul>
                <?php foreach ($pizza as $label => $val) : ?>

                    <li><?php echo htmlspecialchars($label . " - " . $val) ?></li>

                <?php endforeach; ?>
                <form action="details.php" method="POST">
                    <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
                    <input type="submit" name="delete" value="Delete" class="btn">
                </form>
            </ul>
        </h4>
    <?php else : ?>

        <h4>Pizza doesn't exist</h4>

    <?php endif; ?>

</div>

<?php include('templates/footer.php'); ?>

</html>