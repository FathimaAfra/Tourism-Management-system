<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en"><!--This is to identify the website written language attribute -->
<head>
	<title>Aziz Lanka Travels | Registration</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/registration_style.css">
</head>

<body>
	
<div class="main_container" id="home">
	<div class="navbar">
		<div class="logocreation">
		 	<a href="#">Aziz Lanka Travels</a>
		</div>
  		<div class="navbar_items">
  			<ul>
		  		<li><a href="#">Home</a></li>
		  		<li><a href="#withus">With Us</a></li>
		  		<li><a href="#accomodation">Accomodation</a></li>
		  		<li><a href="#activity">Activity</a></li>
		  		<li><a href="#packages">Packages</a></li>
		  		<!--<li><a href="#">Transport</a></li>--->
		  		<li><a href="#testimonial">Testimonial</a></li>
		  		<li><a href="#EnquireUs">Inquire Us</a></li>
		  		<li><a href="#">Sign In</a></li>
  			</ul>
 		 </div>
	</div>
	
	<div class="banner_image"></div>
</div>
<div class="header">
	<h2 class="Registartn"></h2>
</div>

<form method="post" action="register_php">
	<?php include('errors.php');
	?>
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name">
    </div>
    <div class="input-group">
		<label>Mobile</label>
		<input type="text" name="mobile">
    </div>
    <div class="input-group">
		<label>Country</label>
		<input type="text" name="country">
    </div>
    <div class="input-group">
		<label>Children</label>
		<input type="text" name="children">
    </div>	
    <div class="input-group">
		<label>Adults</label>
		<input type="text" name="adults">
    </div>
    <div class="input-group">
		<label>Arrival Date</label>
		<input type="text" name="arrival">
    </div>
    <div class="input-group">
		<label>Departure Date</label>
		<input type="text" name="departure">
    </div>
    <div class="input-group">
		<label>Transport Mode</label>
		<input type="text" name="transportmode">
    </div>
    <div class="input-group">
		<label>Email</label>
		<input type="text" name="email">
    </div>
    <div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
    </div>
    <div class="input-group">
		<label>Password</label>
		<input type="password" name="password1">
    </div>
    <div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="confirmpassword">
    </div>
        <div class="input-group">
		<button class="submit" name="register" class="btn">Register</button>
    </div>
    <p>
    	Are you an Existing Member? <a href="login.php">Sign In</a>
    </p>
</form>

	<div class="uparrow">
						<a href="#home"><img src="images/up-arrow-png-20.png"alt="uparrow_img"></a>
					</div>
</body>
</html>