 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/SignIn.css">
 </head>
 <body>
 	<div class="signin-form">
 		<form action="" method="Post">
 			<div class="form-header">
 				<h2>Sign In</h2>
 				<p>Login To WebChat</p>
 			</div>
 			<div class="form-group">
 				<label for="phone">Mobile No</label>
 				<input class="form-control" type="tel" name="mobile" placeholder="Enter mobile number..." autocomplete="off" required>
 			</div>
 			<div class="form-group">
 				<label>Password</label>
 				<input class="form-control" type="password" name="password" placeholder="Enter password..." autocomplete="off" required>
 			</div>
 			<div class="small">Forgot Password? <a href="forgot_pass.php">Click Here</a></div><br>
 			<div class="form-group">
 				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">SignIn</button>
 			</div>

 			<!-- <?php include("signin_user.php"); ?> -->
 			<div class="text-center small" style="color: #674288;">Don't have account?<a href="signup.php">Create One</a></div>
 		</form>
 	</div> 
 </body>
 </html>