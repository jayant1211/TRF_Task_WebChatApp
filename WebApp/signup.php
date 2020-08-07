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
 				<h1>Web ChatApp</h1><br>
 				<p>Create your account!</p>
 			</div>
 			<div class="form-group">
 				<form class="" action="" method="post" enctype="multipart/form-data">
 					<input autocomplete="off" type="text" name="user_name" placeholder="Username" required>
		            <input autocomplete="off" type="tel" name="user_mob" placeholder="Mobile" required>
					<input type="password" name="user_pass" placeholder="Password" required>
					<div class="image"><p style="text-align: left; font-weight:400; font-size:medium;">&nbsp&nbspSelect your avatar:</p><input type="file" name="imageupload" accept="image/*" ></div>
		            <input type="submit" name="sign_up" value="Sign Up">
		        </form>
 			    <?php include("signup_User.php"); ?>
 			    <div class="account">Have an Account? <a href="signin.php">LogIn</a></div>
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