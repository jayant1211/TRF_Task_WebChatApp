<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");
if(!isset($_SESSION['phone_no']))
{
    header("location: signin.php");
}
else{
?>
<html>
    <head>
        <title>WebApp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/homepage.css">
    </head>
<body>
    <div id="chat-container">
        <div id="search-container">
            <input type="text" placeholder="Search"/>
        </div>
        <div id="conversation-list">
			<?php include("include/get_users_data.php"); ?>
        </div>   
        </div>
        <div id="new-message-container">
            <a href="#">+</a>
        </div>
        <div id="chat-title">
            <span>Jayant Meshram</span>
        </div>
        <div id="chat-message-list">

        </div>
        <div id="chat-form">
            <input type="text" placeholder="Type a message" />
        </div>
    </div>
</body>
</html>
<?php
};
?>