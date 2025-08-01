<?php
include("includes/db.php");

if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_size = $_POST['product_size'];
    $product_description = $_POST['product_description'];

    // Image upload
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    $image_path = "clothing_images/$product_image";

    move_uploaded_file($product_image_tmp, $image_path);

    $insert_product = "INSERT INTO clothing_products (product_title, product_description, product_price, product_category, product_size, product_image)
                       VALUES ('$product_title', '$product_description', '$product_price', '$product_category', '$product_size', '$product_image')";

    $run_product = mysqli_query($con, $insert_product);

    if ($run_product) {
        echo "<script>alert('Clothing product has been inserted successfully!')</script>";
    } else {
        echo "<script>alert('Error inserting product.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Clothing Product</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { max-width: 600px; margin: auto; background: #f4f4f4; padding: 20px; border-radius: 8px; }
        input, textarea, select { width: 100%; padding: 10px; margin-bottom: 15px; }
        input[type="submit"] { background: #28a745; color: white; cursor: pointer; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Insert New Clothing Product</h2>

<form method="post" action="insert_product.php" enctype="multipart/form-data">
    <label>Product Title:</label>
    <input type="text" name="product_title" required>

    <label>Product Description:</label>
    <textarea name="product_description" required></textarea>

    <label>Product Price (INR):</label>
    <input type="number" name="product_price" required>

    <label>Product Category:</label>
    <select name="product_category" required>
        <option value="T-Shirts">T-Shirts</option>
        <option value="Jeans">Jeans</option>
        <option value="Hoodies">Hoodies</option>
        <option value="Jackets">Jackets</option>
        <option value="Kurtis">Kurtis</option>
    </select>

    <label>Product Size:</label>
    <select name="product_size" required>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
    </select>

    <label>Product Image:</label>
    <input type="file" name="product_image" required>

    <input type="submit" name="insert_product" value="Insert Product">
</form>

</body>
</html>
