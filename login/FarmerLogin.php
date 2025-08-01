<?php
include("../Includes/db.php");
//session_start();
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Farmer Login portal</title>
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

    body {
        margin: 0;
        padding: 0;
        font-family: 'Georgia', serif;
        height: 100vh;
        display: flex;
        background-color: #0f172a;
        justify-content: center;
        align-items: center;
        line-height: 1.8; /* Increased line spacing for better readability */
    }

    .container {
        display: flex;
        width: 100%;
        height: 80vh;
        max-height: 800px;
    }

    .login-section {
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #1e293b;
        border-top-right-radius: 15px; 
        border-bottom-right-radius: 15px; 
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; 
    }

    .image-section {
        width: 50%;
        position: relative; 
        background: url('images/farmer.jpeg') no-repeat center center;
        background-size: cover;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px; 
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; 
    }

    .image-section .welcome-text {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem; 
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); 
        font-weight: bold;
        text-align: center;
    }

    form {
        width: 100%;
        max-width: 400px;
        color: white;
        line-height: 1.8; /* Increased line spacing for the form content */
    }

    .form-control {
        border: 1px solid #4a5568;
        border-radius: 5px;
        background-color: #4a5568;
        color: white;
        line-height: 1.6; /* Line spacing for input fields */
    }

    .btn {
        border-radius: 5px;
        background-color: #292b2c;
        color: goldenrod;
    }

    .btn:hover {
        background-color: #292b2c;
        color: goldenrod;
    }

    label {
        color: white;
        line-height: 1.8; /* Line spacing for labels */
    }

    a {
        color: #fbbf24;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    .login-header {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            text-align: center;
            margin-bottom: 1.5rem;
        }
</style>

</head>

<body>
	<div class="container">
		<!-- Image Section -->
		<div class="image-section"> 
        <div class="welcome-text">WELCOME</div>
      </div>
		<!-- Login Form Section -->
		<div class="login-section">
			<h2 class="mb-4 text-white">Login</h2>
			<form name="my-form" action="FarmerLogin.php" method="post">
				<div class="form-group">
					<label for="phone_number">
						<b>Phone Number</b>
					</label>
					<input type="text" id="phone_number" class="form-control" name="phonenumber" placeholder="Phone Number" required>
				</div>
				<div class="form-group">
					<label for="p1">
						<b>Password</b>
					</label>
					<input id="p1" class="form-control" type="password" name="password" placeholder="Password" required>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary w-100" name="login" value="Login">
						Login
					</button>
				</div>
				<div class="form-group text-center">
					<a href="FarmerForgotPassword.php">Forgot your password?</a><br>
					<a href="FarmerRegister.php">Create New Account</a>
				</div>
			</form>
		</div>
   

	</div>
</body>

</html>

<?php
if (isset($_POST['login'])) {

	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '2345678910111211';
	$encryption_key = "DE";
	$encryption = openssl_encrypt(
		$password,
		$ciphering,
		$encryption_key,
		$options,
		$encryption_iv
	);

	$query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_password = '$encryption'";
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);

	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('FarmerLogin.php','_self')</script>";
	}

	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['farmer_id'];
	}

	$_SESSION['phonenumber'] = $phonenumber;
	echo "<script>window.open('../FarmerPortal/farmerHomepage.php','_self')</script>";
}
?>
