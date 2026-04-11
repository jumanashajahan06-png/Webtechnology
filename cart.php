<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Your Cart</h2>

<?php
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        echo $item . "<br>";
    }
} else {
    echo "Cart is empty!";
}
?>

<br><br>
<a href="index.php">Back to Home</a>

</body>
</html>