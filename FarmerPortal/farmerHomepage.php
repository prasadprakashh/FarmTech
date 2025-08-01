 <?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Farmer Homepage</title>
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

/*images information */

/* General Styling */
.container {
    max-width: 1200px;
    margin: auto;
}

/* Carousel Styling */
.caros {
    margin-top: 20px;
    position: relative;
}

.carousel-inner img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
}

.carousel-control-prev, .carousel-control-next {
    width: 5%;
}

.carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    padding: 10px;
}


/* Features Section */
.features h1 {
    font-size: 2rem;
    margin-bottom: 20px;
}

.card-deck {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    width: 30%;
    min-width: 280px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
}

.card-img-top {
    padding: 10px;
    max-width: 100%;
    height: 200px;
    object-fit: contain;
}

.card-body {
    text-align: center;
    padding: 15px;
}

.card-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1rem;
    color: #555;
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
                    <a href="../homepage.html" class="dropdown-item">Homepage</a>
                    <a href="logout.php" class="dropdown-item text-danger">Logout</a>
                <?php else: ?>
                    <a href="../login/FarmerLogin.php" class="dropdown-item">Login</a>
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


<div class="container caros">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 resizing" src="../Images/Homepage/fruitsbasket.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 resizing" src="../Images/Homepage/farmer.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 resizing" src="../Images/Homepage/vegetables.webp" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br><br>

<div class="container my-4">
    <h2 class="text-center font-weight-bold">Current Weather</h2>
    <div class="d-flex justify-content-center">
        <iframe src="../Weather/index.html" width="100%" height="500" style="border:2px solid #ddd; border-radius:10px; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);" allowfullscreen></iframe>
    </div>
    <div class="text-center mt-3">
        <a href="../Weather/index.html" target="_blank" class="btn btn-primary">Weather details</a>
    </div>
</div>
</div>

           <br><br>
           <!-- <div class="features container">
                <h1 style="font-weight: bold;color:black; text-align:center">Standout Features</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/Homepage/sms.jpg" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Sms System </h4>
                               <br>
                               <h5 class="card-text">Upload and Edit Your Products via SMS </h5>
                          </div>
                     </div>
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/Homepage/handshake.png" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Buyer Connection</h4>
                               <br>
                               <h5 class="card-text">Get in direct touch with the buyer to satisfy its need </h5>
                          </div>
                     </div>
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/Homepage/farmer.png" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Farmer Group Formation</h4>
                               <br>
                               <h5 class="card-text">Get in touch with other farmers making your own community where you can ask for help</h5>
                          </div>
                     </div>
                </div>
           </div>
           </div> -->
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