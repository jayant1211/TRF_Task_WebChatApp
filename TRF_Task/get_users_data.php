<?php
$con = mysqli_connect("localhost", "root","","trf_task_webapp");
$user = "select * from users";
$run_user = mysqli_query($con, $user);
while($row_user=mysqli_fetch_array($run_user))
{
    $user_id = $row_user['user_id'];
    $user_name = $row_user['user_name'];
    $user_profile = $row_user['user_profile'];
    $login = $row_user['status'];

    echo
    "<div id='chat-container>
    <li>
        <div class='chat-left-img'>
        <img src='$user_profile' alt='$user_name'>
        </div>

        <div class='title-text'>
        <a href='homepage.php?user_name=$user_name>$user_name</a>";
    if($login == "Online")
    {
        echo"<span><i class='fa fa-circle' aria-hidden='true'></i>Online</span>";
    }
    else
    {
        echo"<span><i class='fa fa-circle-o' aria-hidden='true'></i>Offline</span>";
    }
    "
    </div></li></div>
    ";
}
?>
