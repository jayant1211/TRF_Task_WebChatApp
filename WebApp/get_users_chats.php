<?php
$con = mysqli_connect("localhost", "root","","trf_task_webapp");
global $con;


$logged_in_username=$_SESSION['user_name'];
$total_chats = "SELECT * from users_chat where (sender_username='$logged_in_username' AND receiver_username='$temp_username') OR (sender_username='$temp_username' AND receiver_username='$user_name') ORDER by 1 ASC";
$run_chats = mysqli_query($con, $total_chats);
    

while($row_chats=mysqli_fetch_array($run_chats))
{
    $sender_username = $row_chats['sender_username'];
    $receiver_username = $row_chats['receiver_username'];
    $msg_content = $row_chats['msg_content'];
    $msg_date = $row_chats['msg_date'];

    if($sender_username==$temp_username AND $receiver_username=$logged_in_username)
    {
    echo
    "
    <li class='chat-left'>
    <div class='chat-avatar'>
        <img src='https://www.bootdey.com/img/Content/avatar/avatar3.png' alt='Retail Admin'>
        <div class='chat-name'>$sender_username</div>
    </div>
    <div class='chat-text'>$msg_content</div>
    <div class='chat-hour'>$msg_date <span class='fa fa-check-circle'></span></div>
    </li>
    ";
    }

    else if($sender_username==$logged_in_username AND $receiver_username=$temp_username)
    {
        echo"
        <li class='chat-right'>
        <div class='chat-hour'>$msg_date <span class='fa fa-check-circle'></span></div>
        <div class='chat-text'>$msg_content</div>
        <div class='chat-avatar'>
        <img src='https://www.bootdey.com/img/Content/avatar/avatar5.png' alt='Retail Admin'>
        <div class='chat-name'>$sender_username</div>
        </div>
        </li>
        ";
    }
}
?>
