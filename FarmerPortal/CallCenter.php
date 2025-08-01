<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Call & SMS</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
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
    padding: 10px 20px;
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

          /* General Card Styling */
.card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
    overflow: hidden;
}

.card-header {
    background-color:rgb(255, 94, 0);
    color: white;
    padding: 15px;
    font-size: 20px;
    text-transform: uppercase;
}

.card-body {
    padding: 20px;
    background-color: #f8f9fa;
}

.card-title {
    color: #333;
    margin-bottom: 15px;
}

.card-text {
    font-size: 16px;
    color: #666;
    text-align: center;
}

.card-deck {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 20px;
}

.card-deck .card {
    flex: 1;
    min-width: 300px;
    max-width: 350px;
    background: white;
    transition: transform 0.3s;
}

.card-deck .card:hover {
    transform: scale(1.05);
}

.text-center {
    text-align: center;
}

.font-weight-bold {
    font-weight: bold;
}

/* table style*/
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

div {
    display: block;
    text-align: center;
}

.content_item label {
    font-size: 30px;
    text-shadow: 1px 1px 1px gray;
    font-weight: bold;
    color: #333;
}

h4 {
    color: #444;
}

.table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.table thead {
    background-color:rgb(255, 94, 0);
    color: white;
    text-transform: uppercase;
}

.table th, .table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

.table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tr:hover {
    background-color:rgb(245, 127, 9);
}

.thy {
    font-weight: bold;
}

.trow th {
    background: #f8f8f8;
    font-weight: normal;
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
/*contact us*/
.contact-section {
    margin: 20px auto;
    text-align: center;
    padding: 40px;
    background: #ffffff; /* Changed to white */
    border-radius: 12px;
    max-width: 800px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.contact-section:hover {
    transform: translateY(-5px);
}

.contact-section h2 {
    margin-bottom: 20px;
    font-size: 34px;
    color: #0d1b2a;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1.2px;
}

.contact-section form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    align-items: center;
}

.contact-section input,
.contact-section textarea {
    font-family: 'Georgia', serif;
    width: 90%;
    max-width: 600px;
    padding: 14px;
    border: 2px solid #007BFF;
    border-radius: 8px;
    font-size: 16px;
    background-color: #ffffff;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.contact-section input:focus,
.contact-section textarea:focus {
    outline: none;
    border-color: #f2f2f2;
    box-shadow: 0 0 8px rgba(233, 233, 233, 0.6);
}

.contact-section textarea {
    resize: none;
}

.contact-section button {
    background: linear-gradient(135deg, #da7c1d, #dd6e1a); /* White gradient */
    color: #000000; /* Dark text for contrast */
    border: 1px solid #ccc; /* Light border */
    padding: 14px 32px;
    font-size: 18px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-section button:hover {
    background: linear-gradient(135deg, #f97400, #f57b01); /* Slightly darker on hover */
    transform: scale(1.05);
}

.contact-section textarea {
    font-family: 'Georgia', serif;
    width: 90%;
    max-width: 600px;
    padding: 15px;
    border: 2px solid #000000;
    border-radius: 5px;
    font-size: 16px;
    background: url('image/contactus.webp') no-repeat center;
    background-size: 100% 100%;
    background-position: center;
    background-color: #ffffff; /* White background */
    resize: none;
}


     </style>

</head>

<body>





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
        
        <!-- Settings Dropdown -->
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

<!-- Navigation Row -->
<div class="row text-center my-3">
    <div class="col-md-3 col-sm-6 mb-2">
        <a href="farmerHomepage.php" class="nav-link text-dark">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-2">
        <a href="MyProducts.php" class="nav-link text-dark">
            <i class="fa fa-leaf"></i> <span>My Products</span>
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-2">
        <a href="Transactions.php" class="nav-link text-dark">
            <i class="fa fa-exchange"></i> <span>My Transactions</span>
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-2">
        <a href="CallCenter.php" class="nav-link text-dark">
            <i class="fa fa-phone"></i> <span>Call Centers/SMS</span>
        </a>
    </div>
</div>
<hr>


          <br>

          <div style="display:block;">

               <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Call Center , Location's & Langauges</b></label></div>
               <br>

               <br>
               <h4 align="center">Toll Free Number : 1800-180-1551</h4>
               <br>
                </div>

                <div class="contact-section" id="contact-section">
        <h2>Contact Us</h2>
        <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="27a1a427-8078-4ed3-9cb1-a60de2a89417">
            <input type="text" name="name" placeholder="Your Name" id="name" required>
            <input type="number" name="number" placeholder="Your Phone Number" id="Number" required>
            <input type="email" name="email" id="email" required placeholder="Email">
            <textarea name="message" rows="5" placeholder="Describe your problem..." required></textarea>
            <button type="submit">Submit</button>
        </form>

    </div>
    <div class="card">
               <h4 class="card-header text-center font-weight-bold">SMS System</h4>
               <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">You Can Upload Sms by using Following Syntax</h5>
                    <div class="card-deck">
                         <div class="card">

                              <div class="card-body">
                                   <h5 class="card-title font-weight-bold text-center">Insert Product</h5>
                                   <p class="card-text">*#*,insert,password,product title,product category , product type , product stock ,MRP,Base Price, product keywords , product description ,product delivery</p>

                              </div>
                         </div>
                         <div class="card">

                              <div class="card-body">
                                   <h5 class="card-title font-weight-bold text-center">Update Product</h5>
                                   <p class="card-text">*#*,update,password,product title,product category , product type , product stock ,MRP,Base Price, product keywords , product description ,product delivery</p>

                              </div>
                         </div>
                         <div class="card">

                              <div class="card-body">
                                   <h5 class="card-title font-weight-bold text-center">Delete Product</h5>
                                   <p class="card-text">*#*,delete,password,product title,MRP</p>
                                   <p></p>
                                   <p></p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <br> <br>
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