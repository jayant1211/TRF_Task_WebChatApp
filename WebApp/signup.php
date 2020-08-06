 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>WebChat</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<link rel="stylesheet" type="text/css" href="css/signup.css">
 </head>
 <body>
 	<div class="signin">
 		<div class="left-section">
 			<div class="form-header">
 				<h1>WebChat!</h1>
 				<p>Create your account!</p>
 			</div>
 			<div class="form-group">
 				<form class="" action="" method="post">
 					<input autocomplete="off" type="text" name="user_name" placeholder="Username" required>
		            <input autocomplete="off" type="tel" name="user_mob" placeholder="Mobile" required>
		            <input type="password" name="user_pass" placeholder="Password" required>
		            <input type="submit" name="sign_up" value="Sign Up">
		        </form>
 			    <?php include("signup_User.php"); ?>
 			    <div class="account">Have an Account? <a href="signin.php">LogIn</a></div>
 			</div>
 		</div> 
	 	<div class="right-section">
	 		<div class="welcome-text">
		        <h1><b><i>Welcome Mate!</i></b></h1>
		        <p>Fill this form and start chatting with your friends. Quisque ultricies aliquam pellentesque. Aliquam libero orci,</p>
	        </div>
	    </div>
    </div>
</body>
</html>