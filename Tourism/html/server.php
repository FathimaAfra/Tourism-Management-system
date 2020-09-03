<?php
$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root','123456','TravelsDB');

if(isset($_POST['register'])) {
	$name = mysql_real_escape_string($_POST['departure']);
	$mobile = mysql_real_escape_string($_POST['mobile']);
	$country = mysql_real_escape_string($_POST['country']);
	$children = mysql_real_escape_string($_POST['children']);
	$adults = mysql_real_escape_string($_POST['adults']);
	$arrival = mysql_real_escape_string($_POST['arrival']);
	$departure = mysql_real_escape_string($_POST['departure']);
	$transportmode = mysql_real_escape_string($_POST['transportmode']);
	$email = mysql_real_escape_string($_POST['email']);
	$username = mysql_real_escape_string($_POST['username']);
	$password1 = mysql_real_escape_string($_POST['password1']);
	$confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);

	if(empty($name)){
		array_push($errors,"name is required"); //

	}
	if(empty($mobile)){
		array_push($errors,"mobile is required"); //

	}
	if(empty($arrival)){
		array_push($errors,"arrival is required"); //

	}
	if(empty($adults)){
		array_push($errors,"adults is required"); //

	}
	if(empty($departure)){
		array_push($errors,"departure is required"); //

	}
	if(empty($transportmode)){
		array_push($errors,"transportmode is required"); //

	}
	if(empty($email)){
		array_push($errors,"email is required"); //

	}
	if(empty($username)){
		array_push($errors,"username is required"); //

	}
	if(empty($password1)){
		array_push($errors,"password is required"); //

	}
	if($password1 != $confirmpassword){
		array_push($errors,"Password did not match"); //

	}
	if(empty($transportmode)){
		array_push($errors,"Mode of Transport is required"); //

	}

	if(count($errors) == 0){
		$password1 =md5($password1);
		$sql = "INSERT INTO tbl_customer(cu_name,cu_mobile,cu_location,cu_email,cu_password,cu_username,cu_child,cu_adults,cu_arrival,cu_departure,cu_travelmode,) VALUES ('$name','$mobile','$country','$email','$password1'.'$username','$children','$adults','$arrival','$departure','$transportmode')";
		mysqli_master_query($db, $sql);
		$_SESSION['username']= $username;
		$_SESSION['success'] = "Your Logged In";
		header('location: comment.php');
	}
}

if(isset($_POST['login'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password1 = mysql_real_escape_string($_POST['password1']);

if(empty($username)){
		array_push($errors,"username is required"); //

	}
	if(empty($password1)){
		array_push($errors,"password is required"); //

	}
}
 


    if(count($errors) ==0){
    	$password1=md5($password1);
    	$query = "SELECT * FROM tbl_customer WHERE cu_password='$username' AND cu_username='$password1'";
    	$result = mysqli_master_query($db, $query);
    	if (mysqli_num_rows($result)==1) {

    		$_SESSION['username'] = $username;
    		$_SESSION['success'] = "Your Logged in";
    		header(location: comment.php);

    		# code...
    	}else{
    		array_push($errors, "The username / Password combination")
    		header()
    	}
    }

	if (isset($GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');

		# code...
	}
}
?>