<?php
session_start();

include("include/connection.php");

if(isset($_POST['sign_in']))
{
    $phone_no = htmlentities(mysqli_real_escape_string($con,$_POST['phone_no']));
    $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
    
    $select_user = "SELECT * from users where phone_no='$phone_no' AND user_pass='$pass'";

    $query = mysqli_query($con,$select_user);
    $check_user = mysqli_num_rows($query);

    if($check_user==1)
    {
        $_SESSION['phone_no']=$phone_no;

        $update_msg = mysqli_query($con,"UPDATE users SET status='Online' where phone_no='$phone_no'" );
        $user = $_SESSION['phone_no'];
        $get_user="SELECT * from users where phone_no='$phone_no'";
        $run_user=mysqli_query($con,$get_user);
        $rows = mysqli_fetch_array($run_user);

        $_SESSION['user_name'] = $rows['user_name'];
        //$logged_in_username = $_SESSION['user_name'];
        $_SESSION['user_profile'] = $rows['user_profile'];

        
        echo"<script>window.open('homepage.php?user_name=$_SESSION[user_name]','_self')</script>";
    }
    else{
        echo"
        <div class='alert alert-danger'>
            <strong>check your credentials</strong>
        </div>";
    }
}
?>