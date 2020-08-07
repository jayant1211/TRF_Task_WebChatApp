
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Web ChatApp</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<link rel="stylesheet" type="text/css" href="css/SignIn.css">
 </head>
 <body>
 	<div class="signin">
 		<div class="left-section">
 			<div class="form-header">
 				<h1>Web ChatApp</h1><br>
 				<p>SignIn to your account!</p>
 			</div>
 			<div class="form-group">
 				<form class="sign in box" action="signin_user.php" method="post">
		            <input type="tel" name="phone_no" autocomplete="off" placeholder="Mobile" required>
					<input type="password" name="pass" autocomplete="off" placeholder="Password" required><br><br>
					<input type="submit" name="sign_in" value="Sign n">
		        </form>
 			    <!-- <?php include("signin_user.php"); ?> -->
 			    <div class="account">Don't Have an Account? <a href="signup.php" target="_self">Create</a></div>
 			</div>
 		</div> 
	 	<div class="right-section">
	 		<div class="welcome-text">
		        <h1 style="font-weight:400">Welcome!!</h1><br>
		        <p id="intro">This Web ChatApp is a project with an intend to acheive absic functionality of chat an application,
				ie. creating an UI which lets you chat with othere registered user and display your previous conversations.
				In order to implement thisbasic chat functionality, we have used PHP.
				One can register if they are not the existing user, and can start sending messages to other users.<br><br><p style="font-size: 17px;">Created by:<br> Jayant, Khushboo and Siddhi.</p></p>
	        </div>
	    </div>
    </div>
</body>
</html>
