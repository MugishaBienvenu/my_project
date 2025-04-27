<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Search the product list for the given ID.
    foreach ($_SESSION['products'] as $key => $product) {
        if ($product['id'] == $id) {
            // Delete the image file if it exists.
            if (file_exists($product['image_path'])) {
                unlink($product['image_path']);
            }
            // Remove the product from the session array.
            unset($_SESSION['products'][$key]);
            // Re-index the array.
            $_SESSION['products'] = array_values($_SESSION['products']);
            break;
        }
    }
}
header("Location: index.php");
exit();
?>
