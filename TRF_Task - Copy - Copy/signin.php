 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>WebChat</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<link rel="stylesheet" type="text/css" href="css/SignIn.css">
 </head>
 <body>
 	<div class="signin">
 		<div class="left-section">
 			<div class="form-header">
 				<h1>WebChat!</h1>
 				<p>SignIn to your account!</p>
 			</div>
 			<div class="form-group">
 				<form class="sign in box" action="signin_user.php" method="post">
		            <input type="tel" name="phone_no" placeholder="Mobile" required>
		            <input type="password" name="pass" placeholder="Password" required>
		            <span class="floatleft"><input type="checkbox"> Remember me</span>
		            <span class="floatright"><a href="#">Forgot Password?</a></span>
		            <input type="submit" name="sign_in" value="Sign n">
		        </form>
 			    <!-- <?php include("signin_user.php"); ?> -->
 			    <div class="account">Don't Have an Account? <a href="signup.php">Create</a></div>
 			</div>
 		</div> 
	 	<div class="right-section">
	 		<div class="welcome-text">
		        <h1>Welcome Back</h1>
		        <p>Quisque ultricies aliquam pellentesque. Aliquam libero orci, efficitur et maximus eget, porttitor vel ex. Sed imperdiet lacus non ipsum pharetra, non sagittis felis semper.</p>
	        </div>
	    </div>
    </div>
</body>
</html>