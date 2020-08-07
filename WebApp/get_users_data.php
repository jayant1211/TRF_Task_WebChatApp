<?php
$con = mysqli_connect("localhost", "root","","trf_task_webapp");
$users = "select * from users";
$run_user = mysqli_query($con, $users);
while($row_user=mysqli_fetch_array($run_user))
{
    $user_id = $row_user['user_id'];
    $user_name = $row_user['user_name'];
    $user_profile = $row_user['user_profile'];
    $login = $row_user['status'];
    
    if($user_name!=$_SESSION['user_name'])
    {
        $last_msg_q="SELECT * FROM users_chat WHERE (sender_username='$user_name' AND receiver_username='$_SESSION[user_name]') OR (receiver_username='$user_name' AND sender_username='$_SESSION[user_name]') ORDER BY 1 DESC limit 1 ";
        if($run_msg=mysqli_query($con, $last_msg_q))
        {
            if($msg_row=mysqli_fetch_array($run_msg))
            {
                $last_msg=$msg_row['msg_content'];
                $last_time=$msg_row['msg_date'];
            }
            else{
                $last_time="Send your First message to $user_name!!";
            }
        }
    else{echo"fail";}
    echo
    "
    <li class='person'>
        <div class='user'>
            <img src='images/$user_profile' height='48px' width='48px' alt='$user_name'>
        </div>
        <p class='name-time'>
            <span class='name' name='name'><a href='homepage.php?user_name=$user_name'>$user_name</a></span>
            <span class='time'>$last_time </span>
        </p>
    </li>
    ";
    }
}
?>



