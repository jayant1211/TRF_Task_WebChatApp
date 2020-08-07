<?php
$con = mysqli_connect("localhost", "root","","trf_task_webapp");
global $con;
$total_chats = "SELECT * from users_chat where (sender_username='$_SESSION[user_name]' AND receiver_username='$temp_username') OR (sender_username='$temp_username' AND receiver_username='$_SESSION[user_name]') ORDER by 1 ASC";
$run_chats = mysqli_query($con, $total_chats);
$temp_img_query ="SELECT `user_profile` FROM `users` WHERE `user_name`='$temp_username'";

$temp_img = mysqli_fetch_array(mysqli_query($con,$temp_img_query));
   
while($row_chats=mysqli_fetch_array($run_chats))
{
    $sender_username = $row_chats['sender_username'];
    $receiver_username = $row_chats['receiver_username'];
    $msg_content = $row_chats['msg_content'];
    $msg_date = $row_chats['msg_date'];

    
    if($sender_username==$temp_username AND $receiver_username=$_SESSION['user_name'])
    {
    echo
    "
    <li class='chat-left'>
    <div class='chat-avatar'>
        <img src='images/$temp_img[0]' height='48px' width='48px' alt='$sender_username'>
        <div class='chat-name'>$sender_username</div>
    </div>
    <div class='chat-text'>$msg_content</div>
    <div class='chat-hour'>$msg_date <span class='fa fa-check-circle'></span></div>
    </li>
    ";
    }

    else if($sender_username==$_SESSION['user_name'] AND $receiver_username=$temp_username)
    {
        echo"
        <li class='chat-right'>
        <div class='chat-hour'>$msg_date <span class='fa fa-check-circle'></span></div>
        <div class='chat-text'>$msg_content</div>
        <div class='chat-avatar'>
        <img src='images/$_SESSION[user_profile]' alt='$_SESSION[user_name]'>
        <div class='chat-name'>$sender_username</div>
        </div>
        </li>
        ";
    }
}
?>
