<?php
include("../Includes/db.php");
session_start();

if (!isset($_SESSION['phonenumber'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getting_prod = "SELECT * FROM products WHERE product_id = $id";
    $run = mysqli_query($con, $getting_prod);

    if ($details = mysqli_fetch_array($run)) {
        $product_title = $details['product_title'];
        $product_stock = $details['product_stock'];
        $product_cat = $details['product_cat'];
        $product_type = $details['product_type'];
        $product_expiry = $details['product_expiry'];
        $product_price = $details['product_price'];
        $product_desc = $details['product_desc'];
        $product_keywords = $details['product_keywords'];
        $product_delivery = $details['product_delivery'];
    } else {
        echo "<script>alert('Invalid Product ID');</script>";
        exit();
    }
} else {
    echo "<script>alert('No Product Selected');</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3">Edit Product</h2>
        <form action="UpdateProduct.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label>Product Title:</label>
                <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>" required>
            </div>

            <div class="form-group">
                <label>Product Stock (kg):</label>
                <input type="text" name="product_stock" class="form-control" value="<?php echo $product_stock; ?>" required>
            </div>

            <div class="form-group">
                <label>Product Categories:</label>
                <select name="product_cat" class="form-control" required>
                    <option value="<?php echo $product_cat; ?>">Current: <?php echo $product_cat; ?></option>
                    <?php
                    $get_cats = "SELECT * FROM categories";
                    $run_cats = mysqli_query($con, $get_cats);
                    while ($row_cats = mysqli_fetch_array($run_cats)) {
                        $cat_id = $row_cats['cat_id'];
                        $cat_title = $row_cats['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Product Type:</label>
                <input type="text" name="product_type" class="form-control" value="<?php echo $product_type; ?>" required>
            </div>

            <div class="form-group">
                <label>Product Expiry:</label>
                <input type="date" name="product_expiry" class="form-control" value="<?php echo $product_expiry; ?>" required>
            </div>

            <div class="form-group">
                <label>Product Price (Per kg):</label>
                <input type="text" name="product_price" class="form-control" value="<?php echo $product_price; ?>" required>
            </div>

            <div class="form-group">
                <label>Product Description:</label>
                <textarea name="product_desc" class="form-control" required><?php echo $product_desc; ?></textarea>
            </div>

            <div class="form-group">
                <label>Product Keywords:</label>
                <input type="text" name="product_keywords" class="form-control" value="<?php echo $product_keywords; ?>" required>
            </div>

            <div class="form-group">
                <label>Delivery:</label><br>
                <input type="radio" name="product_delivery" value="yes" <?php if ($product_delivery == 'yes') echo 'checked'; ?>> Yes
                <input type="radio" name="product_delivery" value="no" <?php if ($product_delivery == 'no') echo 'checked'; ?>> No
            </div>

            <button type="submit" name="update_pro" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</body>
</html>
