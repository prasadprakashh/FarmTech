<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>AgroCraft</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>
      <style>
        /* Navbar General Styling */
 .navbar {
    background-color: #ffffff !important; /* Ensure background is white */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 30px 40px;
    border-radius: 8px; /* Adds slight rounded corners */
}

/* Ensure Navbar Contents Are Inline */
.navbar .d-flex {
    flex-wrap: nowrap;
}

/* Adjusting the Logo */
.navbar-brand img {
    height: 80px;
    margin-right: 15px;
}

/* Fix the Dropdown Button */
.dropdown-toggle {
    border: none;
    background: transparent;
    font-size: 16px;
    font-weight: bold;
}

/* Remove unwanted spacing */
.navbar-expand-xl {
    margin: 0 auto;
    width: 100%;
    max-width: 1500px; /* Limits the width for a cleaner look */
}

/* Responsive Fixes */
@media (max-width: 768px) {
    .navbar-brand img {
        height: 60px;
    }
}

/* Navigation Row Styling */
.row.text-center {
    margin-top: 20px;
    margin-bottom: 20px;
}

.row .col-md-3 {
    transition: all 0.3s ease-in-out;
}

.row .col-md-3 a {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 10px;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.row .col-md-3 a i {
    font-size: 24px;
    margin-bottom: 5px;
    color: #28a745;
}

.row .col-md-3 a:hover {
    color: #28a745;
}

.row .col-md-3 a:hover i {
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .row .col-md-3 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (max-width: 576px) {
    .row .col-md-3 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}
/* General Page Styling */
body {
    background-color: #1a1a1a; /* Dark background for contrast */
    color: white;
    font-family: Arial, sans-serif;
}

/* Container */
.container {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
}

/* Product Image */
img.bord {
    border: 3px solid goldenrod;
    border-radius: 10px;
    display: block;
    margin: auto;
}

/* Product Details Box */
.blackgoldie {
    background-color: #333;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(255, 215, 0, 0.3);
}

/* Product Title */
h1 {
    font-size: 26px;
    text-align: center;
    font-weight: bold;
}

/* Product Price */
h3 {
    font-size: 20px;
    text-align: center;
}

/* In Stock / Out of Stock */
h3.text-center {
    font-weight: bold;
}

/* Product Delivery Icon */
.fa-truck {
    margin-right: 10px;
}

/* Buttons */
.btn-warning {
    display: block;
    width: 100%;
    padding: 10px;
    text-align: center;
    font-weight: bold;
    border-radius: 8px;
    margin-top: 10px;
    transition: 0.3s ease-in-out;
}

.btn-warning:hover {
    background-color: goldenrod;
    color: black;
}

/* Product Description */
.desc {
    background-color: #222;
    padding: 15px;
    border-radius: 8px;
    margin-top: 20px;
}

h5 span {
    font-style: italic;
    color: #ccc;
}

/* Responsive Design */
@media (max-width: 768px) {
    .col-md-6 {
        text-align: center;
    }

    img.bord {
        width: 100%;
        height: auto;
    }

    .blackgoldie {
        padding: 15px;
    }
}


/* Footer Styles */
.myfooter {
    background-color: #222;
    color: white;
    padding: 40px 0;
}

.myfooter h5 {
    color: #f8f9fa;
    font-size: 18px;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.myfooter .aligncenter {
    text-align: center;
}

.myfooter img {
    margin: 5px;
}

/* Social Media Icons */
.social .list-inline-item {
    margin: 0 10px;
}

.social .list-inline-item a {
    color: white;
    font-size: 20px;
    transition: 0.3s;
}

.social .list-inline-item a:hover {
    color: #28a745;
}

/* Footer Bottom */
.myfooter p {
    margin: 10px 0 0;
    font-size: 14px;
}

.myfooter a {
    color: #28a745;
    text-decoration: none;
}

.myfooter a:hover {
    text-decoration: underline;
} 
     </style>
</head>

<body>
<nav class="navbar navbar-expand-xl bg-light shadow-sm p-3">
    <div class="d-flex w-100 justify-content-between align-items-center">
        <!-- Logo -->
        <a href="farmerHomepage.php" class="navbar-brand d-flex align-items-center">
            <img src="logofinal.png" alt="Logo" style="height:100px;" class="mr-2">
        </a>
        
        <!-- Toggle Button -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"><i class="fas fa-bars text-success"></i></span>
        </button>

        
<!--  Settings Dropdown -->
        <div class="dropdown">
            <button class="btn dropdown-toggle text-success" data-toggle="dropdown">
                Settings
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <?php if (isset($_SESSION['phonenumber'])): ?>
                    <a href="FarmerProfile.php" class="dropdown-item">Profile</a>
                    <a href="Transactions.php" class="dropdown-item">Orders</a>
                    <a href="logout.php" class="dropdown-item text-danger">Logout</a>
                <?php else: ?>
                    <a href="../auth/FarmerLogin.php" class="dropdown-item">Login</a>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
</nav>
     <br>


     <?php
     include("../Includes/db.php");
     $sess_phone_number = $_SESSION['phonenumber'];
     // getFarmerProductDetails();
     global $con;
     if (isset($_GET['id'])) {
          $prod_id = $_GET['id'];
          $query = "select * from products where product_id=" . $prod_id;
          $run_query = mysqli_query($con, $query);
          $resultCheck = mysqli_num_rows($run_query);
          if ($resultCheck > 0) {
               while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_base_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];

                    // echo "<div class='row'>
                    //         <div class='col col-md-6'>
                    //             <img src='../Admin/product_images/$product_image' class='rounded mx-auto d-block bord' style='float:left;' height='250px' width='300px' >
                    //             <h4>$product_type</h4>
                    //         </div>
                    //         <div class='col col-md-6'><br>
                    //           <h3 style='font-weight:bold;'>" . $product_title."</h3><br>"  
                    //             . " product type  :  " . $product_type."<br>" 
                    //             . " product stock  :  " . $product_stock."<br>"
                    //             . " product Description  :  " . $product_description."<br>" 
                    //             . " product price  :  " . $product_price."<br>" 
                    //             . " product Delivery  :  " . $product_delivery."<br>"
                    //             . " product category  :  " . $product_cat ."<br>".
                    //         "</div> </div>";
                    if ($product_stock == 0) {
                         $str = "Not In Stock";
                    } else {
                         $str = "In Stock";
                    }
                    if ($product_delivery == "no") {
                         $del = "Not Applicable";
                    } else {
                         $del = "Yes,Applicable";
                    }

                    $space = "....";
                    echo "<div class='container'>
                                   <div class='row'>
                                        <div class='col-md-6' style='padding:7px; margin-top:15px;'>
                                             <img src='../Admin/product_images/$product_image' class='rounded mx-auto d-block bord' height='250px' width='300px' >      
                                             <br>
                                             <div class='row'>
                                                  <div class='col-md-12'>
                                                       <h3 class='text-center' style='font-weight:bold;'>$product_type</h3>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class='col-md-6 blackgoldie'>
                                             <div class='row'>
                                                  <div class='col-md-12 bottom-rule aligncenter'>
                                                       <h1 style='color:goldenrod;padding:10px;'>$product_title</h1>
                                                  </div>
                                             </div>
                                             <h3  style='color:white;padding:7px;'>Rs. " . $product_price . ".00 per Kg</h3>
                                             <hr/>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:green;padding:7px;'>$str<h3>
                                                  </div>
                                             </div>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:white;padding:7px;'><span class='monospaced'>product stock  : " . $product_stock . " Kgs" . "</span><h3>
                                                  </div>
                                             </div>
                                             <div class='row' style='padding:7px;'>
                                                  <div class='row text-center ml-4 mt-3' >
                                                       <i class='fa fa-truck fa-2x' aria-hidden='true' style='color:goldenrod;'> </i>
                                                       <h3 style='color:white;'>   Product Delivery : " . $del . "<h3>
                                                  </div>
                                             </div>

                                             <div class='row' style='padding:7px; margin-bottom:15px;' >
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='EditProduct.php?id=$prod_id' class='btn btn-warning border-secondary' style='color:black'><b>Edit Product</b></a></div>
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='Transactions.php' class='btn btn-warning border-secondary' style='color:black'><b>My Transaction</b></a></div>
                                             </div>
                                        </div>         
                                   </div>
                              </div>
                              <div class='container'>
                                   <div class='desc'>
                                        <div class='row'>
                                             <div class='col-md-12'>
                                             <h3><span class='monospaced'><u><b>Product Description:-</b></u></span><h3>
                                             </div>
                                        </div>
                                        <div class='row'>
                                                  <div class='col-md-12'>
                                                       <h5><span class='monospaced'>" . $space . $product_description . "</span><h5>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>";
               }
          }
     } else {
          echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
     }
     ?>



     <br><br>
     
     <section id="footer" class="myfooter">
               <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                         <div class="col aligncenter">
                              <br>
                              <h5>Payment Option</h5>
                              <center>
                              <img src="../Images/Website/paytm1.jpg" alt="paytm">
                              <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                              <center>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                              <ul class="list-unstyled list-inline social text-center">
                                   <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                              </ul>
                         </div>

                    </div>
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                              <p><u><a href="https://www.dackkms.gov.in/Account/aboutus.aspx#:~:text=A%20countrywide%20common%20eleven%20digit,allotted%20for%20Kisan%20Call%20Centre.">FarmTech Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                              <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.india.gov.in/topics/agriculture" target="_blank">FarmTech</a></p>
                         </div>
                         </hr>
                    </div>
               </div>
          </section>

</body>

</html>