<?php
include("../Includes/db.php");
session_start();

if (!isset($_SESSION['phonenumber'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['update_pro'])) {
    $product_id = $_POST['product_id'];
    $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
    $product_stock = mysqli_real_escape_string($con, $_POST['product_stock']);
    $product_cat = mysqli_real_escape_string($con, $_POST['product_cat']);
    $product_type = mysqli_real_escape_string($con, $_POST['product_type']);
    $product_expiry = $_POST['product_expiry'];
    $product_price = mysqli_real_escape_string($con, $_POST['product_price']);
    $product_desc = mysqli_real_escape_string($con, $_POST['product_desc']);
    $product_keywords = mysqli_real_escape_string($con, $_POST['product_keywords']);
    $product_delivery = mysqli_real_escape_string($con, $_POST['product_delivery']);

    // SQL Query to Update Product
    $update_product = "UPDATE products SET 
        product_title = '$product_title',
        product_stock = '$product_stock',
        product_cat = '$product_cat',
        product_type = '$product_type',
        product_expiry = '$product_expiry',
        product_price = '$product_price',
        product_desc = '$product_desc',
        product_keywords = '$product_keywords',
        product_delivery = '$product_delivery'
        WHERE product_id = '$product_id'";

    $run_update = mysqli_query($con, $update_product);

    if ($run_update) {
        echo "<script>alert('Product Updated Successfully!');</script>";
        echo "<script>window.location.href='FarmerProductDetails.php?id=$product_id';</script>";
    } else {
        echo "<script>alert('Error updating product. Try again!');</script>";
    }
}
?>
