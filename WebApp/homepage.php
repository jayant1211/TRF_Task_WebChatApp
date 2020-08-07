<!DOCTYPE html>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
<?php
session_start();
include("include/connection.php");
if(!isset($_SESSION['phone_no']))
{
    header("location: signin.php");
}
else{
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TRF_WebApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">

    
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

    <!-- Page header start -->
    <div class="page-title">
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h5 class="title"><img src="images/<?php echo"$_SESSION[user_profile]"; ?>" alt="picture" height="48px" width="48px" style="border-radius: 30px;"> Hello<?php echo" $_SESSION[user_name]";?>, Welcome to Chat App</h5>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="align-self: center;"> 
                    <div style="float: right;"><a href="signin.php" target="_self" style="font-size: larger; ">Logout</a></div>
            </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card m-0">

                    <!-- Row start -->
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="users-container">
                                <div class="chat-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="myInput" onkeyup="SearchFunction()" autocomplete="off" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-info">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="users" id="users_list">
                                    <?php include 'get_users_data.php';?>
                                </ul>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET['user_name']))
                            {
                                global $con;
                        
                                $get_username = $_GET['user_name'];
                                $get_user = "SELECT * from users where user_name='$get_username'";
                        
                                $run_user = mysqli_query($con,$get_user);
                        
                                $row_user = mysqli_fetch_array($run_user);
                        
                                $temp_username = $row_user['user_name'];
                                $temp_profile = $row_user['user_profile'];

                            } 
                        ?>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                            <div class="selected-user">
                                <span id="right"><img src="images/<?php echo"$temp_profile"; ?>" alt="picture" height="48px" width="48px" style="border-radius: 30px;"> <span class="name"><?php
						                                      echo"$temp_username:";  ?></span></span>
                            </div>
                            <div id="scrolling_to_bottom" class="chat-container">
                                <ul class="chat-box chatContainerScroll">
                                    <?php include 'get_users_chats.php';?>
                                </ul>
                                <ul>
                                <div class="form-group mt-3 mb-0"  style= "position: fixed; top: 785px; right: 420px; width: 720px;">
                                    <form method="post">
                                    <input class="form-control" name="message"  autocomplete="off" type="text" rows="3" placeholder="Type your message here...">
                                    <button class="btn" name="submit"><i class="fa fa-telegram" aria-hidden="true"></i></button>

                                    </form>
                                </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->

</div>

<?php   
        if(isset($_POST['submit']))
        {
            $msg = htmlentities($_POST['message']);
            if($msg=='')
            {
                echo"
                <div class='alert alert-danger'>
                    <strong><center>Type something</center></stron>
                </div>";
            }
            else
            {
                $logged_in_username=$_SESSION['user_name'];
                $insert = "INSERT INTO users_chat(sender_username,receiver_username,msg_content,msg_status,msg_date) VALUES ('$logged_in_username','$temp_username','$msg','unread',NOW())";
                if(mysqli_query($con,$insert))
                {
                    //echo"message sent";
                }
                else
                {
                    echo"not sent";
                }

            }
        }
    ?>
<script>
function SearchFunction()
{
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("users_list");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
</body>
</html>
<?php
}
?>