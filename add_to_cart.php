<<<<<<< HEAD

    <?php
=======
<?php
>>>>>>> 016e5b0e08e9afeda19a96ce54a6bccd61657a92
session_start();
include "connection.php";

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = intval($_POST['id']);
    
<<<<<<< HEAD
    $q = "SELECT * FROM record WHERE id = $id";
=======
    $q = "SELECT * FROM `record` WHERE id = $id";
>>>>>>> 016e5b0e08e9afeda19a96ce54a6bccd61657a92
    $res = mysqli_query($con,$q);

    if ($res && $res->num_rows > 0) {
        $row = $res->fetch_assoc();

        $item = [
            'id' => $row['id'],
            'name' => $row['name'],
            'image' => $row['file'],
            'price' => $row['price'],
            'qty' => 1
        ];

        // Check if cart session already exists
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $found = false;
        foreach ($_SESSION['cart'] as &$cartItem) {
            if ($cartItem['id'] == $item['id']) {
                $cartItem['qty'] += 1;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['cart'][] = $item;
        }

        // Redirect to cart or product page
        header("Location: http://localhost/LAPPY WALLA/show_cart.php");
        exit;
    } else {
        echo "Item not found.";
    }
} else {
    echo "Invalid item ID.";
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 016e5b0e08e9afeda19a96ce54a6bccd61657a92
