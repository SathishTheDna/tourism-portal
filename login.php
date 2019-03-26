<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page Tourism portal</title>
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
    <body class="skin-blue login-page" background="images/bgb.jpg">
        <div class="box-login">
            <div class="box-login-body">
                <h3><span><b>Tourism portal</b></span></h3>

                <form class="login-form" action="login.php" method="post">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" type="text" name="username" placeholder="Username" autofocus/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group input-group">
                        <div class="checkbox">
                            <label for="terms" style="padding-left: 12px;">
                                <input class="icheck_flat_20" type="checkbox" id="terms"> Remember Me
                            </label>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-block btn-default">Sign In</button>
						
                    </div>
                   
                </form>
				<a href="register.php"><button  name="register" class="btn btn-block btn-default">Register</button></a>
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

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin_query = "select * from users where username='$username' AND password='$password' ";
    $run = mysqli_query($connect,$admin_query);

    if(mysqli_num_rows($run)>0)
    {
      $_SESSION['username']=$username;
      echo "<script>window.open('index.php','_self')</script>";
    }
    else {
      echo "<script>alert('Login UnSuccessful!')</script>";
    }
}
?>

<?php
	include('connect.php');
	if (isset($_POST['register'])) {
		echo "<script>window.open('register.php','_self')</script>";
	}
?>
</html>