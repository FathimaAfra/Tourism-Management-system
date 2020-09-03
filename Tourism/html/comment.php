<?php include('server.php');?>
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
<div class="logincontainer">
	<h2>Login></h2>
</div>

<div class="content">
	<?php if(isset($_SESSION['Success'])):?>
		<div class="Error Success">
			<h3>
				<?php
				echo $_SESSION['Success'];
				unset($_SESSION['Success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<?php if(isset($_SESSION['username'])):
		?>
		<p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
		<p><a href="comment.php?Logout='1'" style="color: red;">Logout</a></p>
	<?php endif?>
</div>


</body>
</html>