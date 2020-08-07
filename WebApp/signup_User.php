<?php 
include("include/connection.php");
if (isset($_POST['sign_up'])) {
	$name = mysqli_real_escape_string($con, $_POST['user_name']);
	$mobile = mysqli_real_escape_string($con, $_POST['user_mob']);
	$pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
	$image_name = $_FILES['imageupload']['name'];  
    $temp_name  = $_FILES['imageupload']['tmp_name'];
	if(isset($image_name) and !empty($image_name)){
		$location = 'images/';      
		if(move_uploaded_file($temp_name, $location.$image_name)){
			//echo 'File uploaded successfully';
		}
	}
	else{
		echo"Select image!!";
	}

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
	 	echo "<script>window.open('signin.php', '_self')</script>";
	 	exit();
	}

	
	$insert = "insert into users (user_name, phone_no, user_pass, user_profile) values('$name', '$mobile', '$pass', '$image_name')";
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
