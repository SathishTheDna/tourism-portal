<?php
  session_start();
  if(isset($_SESSION['username']))
    $username= $_SESSION['username'];
  else 
    $username = null;
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration Form</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="resources/img/favicon.ico" />
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/iCheck/all.css" /> 

        <!-- Icons -->
        <link href="resources/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="resources/icons/themify-icons/themify-icons.css" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="resources/css/main-style.min.css">
        <link rel="stylesheet" href="resources/css/skins/all-skins.min.css">

        <link rel="stylesheet" href="resources/css/demo.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112423372-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112423372-2');
</script>

</head>
    <body class="skin-blue login-page"background="images/bgb.jpg">
        <div class="box-login">
            <div class="box-login-body">
                <h3><span><b>Registration Form</b></span></h3>
				<h3><span><b>Tourism Portal</b></span></h3>
               
                <form class="login-form" action="register.php" method="post">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" type="text" name="username" placeholder="Username" autofocus/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
					<div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-iphone"></i></span>
                        <input class="form-control" type="text" name="mobile_number" placeholder="Mobile Number" />
                    </div>
					<div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-iphone"></i></span>
                        <input class="form-control" type="text" name="email" placeholder="Email ID" />
                    </div>

                    <div class="form-group">
                        <button type="submit" name="register" class="btn btn-block btn-default">Register</button>
						
                    </div>

                </form>
			<!--	<a href="register.php"><button  name="Home" class="btn btn-block btn-default">Register</button></a> --!>
            </div>
        </div>
       
<!-- JS scripts -->
        <script src="vendor/jQuery/jquery-2.2.3.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/iCheck/icheck.min.js"></script>
        <script src="resources/js/pages/jquery-icheck.js"></script>
        <script src="vendor/fastclick/fastclick.min.js"></script>
        <script src="resources/js/demo.js"></script>
    </body>

<?php

include('connect.php');
if (isset($_POST['register'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $mobilenumber = $_POST['mobile_number'];
   $email = $_POST['email'];
   $admin_query = "INSERT INTO users VALUES('$username', '$password','$mobilenumber', '$email');";
   $run = mysqli_query($connect,$admin_query);
   if($run == 1) {
        echo "<script>alert('Registration Successful!')</script>";
        echo "<script>window.open('login.php','_self')</script>";
   }
   else {
    echo "<script>alert('Registration UnSuccessful! Mobile Number must be Unique...')</script>";
   }
}
?>
</html>