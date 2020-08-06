<?php 
include("include/connection.php");
if (isset($_POST['sign_up'])) {
	$name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
	$mobile = htmlentities(mysqli_real_escape_string($con, $_POST['user_mob']));
	$pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));

	if($name == '') {
		echo"<script>alert('Username')</script>";
		exit();
	}
	if(strlen($pass)<8) {
		echo"<script>alert('Password must be atleast 8 characters long.')</script>";
		exit();
	}
	if(strlen($mobile) < 10 OR strlen($mobile) > 10) {
		echo"<script>alert('Enter correct mobile number.')</script>";
		exit();
	}

	$check_mob = "select * from users where phone_no = '$mobile'";
	$run_mob = mysqli_query($con, $check_mob);
	$check = mysqli_num_rows($run_mob);

	if ($check == 1) {
	 	echo "<script>alert('Mobile number already exist!')</script>";
	 	echo "<script>window.open('signup.php', '_self')</script>";
	 	exit();
	}

	if ($rand == 1)
	 	$profile_pic = "../img/male.png";
	elseif ($rand == 2)
		$profile_pic = "../img/female.jpg";
	
	$insert = "insert into users (user_name, phone_no, user_pass, user_profile) values('$name', '$mobile', '$pass', '$profile_pic')";
	$query = mysqli_query($con, $insert);

	if($query){
		echo "<script>alert('Account Created Successfully')</script>";
		echo "<script>window.open('signin.php', '_self')</script>";
	} 
	else{
		echo"<script>alert('Registration failed, Try again')</script>";
		echo "<script>window.open('signup.php', '_self')</script>";
	}

}

?>