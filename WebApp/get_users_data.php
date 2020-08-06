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
    echo
    "
    <li class='person'>
        <div class='user'>
            <img src='https://www.bootdey.com/img/Content/avatar/avatar3.png' alt='Retail Admin'>
            <span class='status busy'></span>
        </div>
        <p class='name-time'>
            <span class='name' name='name'><a href='homepage.php?user_name=$user_name'>$user_name</a></span>
            <span class='time'>11/02/2019</span>
        </p>
    </li>
    ";
    }
}
?>



