<?php

//Include authentication
require("process/auth.php");

//Include database connection
require("../config/db.php");

//Include class Admins
require("admin_process.php");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_admin.css">
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Voting Sytem</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin_page.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="add_org.php"><span class="glyphicon glyphicon-plus-sign"></span>Add Organization</a></li>
                <li><a href="add_pos.php"><span class="glyphicon glyphicon-plus-sign"></span>Add Position</a></li>
                <li><a href="add_nominees.php"><span class="glyphicon glyphicon-plus-sign"></span>Add Nominees</a></li>
                <li class="active"><a href="add_voters.php"><span class="glyphicon glyphicon-plus-sign"></span>Add Voters</a></li>
                <li><a href="vote_result.php"><span class="glyphicon glyphicon-plus-sign"></span>Vote Result</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="process/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->




<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?php
                if(isset($_POST['submit'])) {
                $username   = trim($_POST['username']);
                $name       = trim($_POST['name']);
                $password1  = trim($_POST['password1']);
				$password2  = trim($_POST['password2']);
				$email      = trim($_POST['email']);

                if($password1 != $password2){

                echo "<div class='alert alert-danger'>Sorry this admin already exists in the database.</div>";
                   header("location: http://localhost/scpc/sandbox/add_admin.php");
                }

                if(strlen($name) > 30)
				    {

                echo "<div class='alert alert-danger'>Sorry this admin already exists in the database.</div>";
                    header("location: http://localhost/scpc/sandbox/add_admin.php");
                }

				$hash = hash('sha256', $password1);
				 
				function createSalt()
				{
				    $text = md5(uniqid(rand(), true));
				    return substr($text, 0, 3);
				}
				 
				$salt = createSalt();
				$password = hash('sha256', $salt . $hash);
				 
				//sanitize username
				
				$name = $db->real_escape_string($name);
				
				//$name = mysql_real_escape_string($name);

                $insertAdmin = new Admins();
                $rtnInsertAdmin = $insertAdmin->INSERT_ADMIN($username, $name, $password, $email, $salt);

               // $db->query($sql);
 
				//$db->close();

            }
            ?>

           <!-- <?php
                /*if(isset($_SESSION['ERROR_MSG_ARRAY']) && is_array($_SESSION['ERROR_MSG_ARRAY']) && COUNT($_SESSION['ERROR_MSG_ARRAY']) > 0) {
                    foreach($_SESSION['ERROR_MSG_ARRAY'] as $msg) {
                        echo "<div class='alert alert-danger'>";
                        echo $msg;
                        echo "</div>";
                    }
                    unset($_SESSION['ERROR_MSG_ARRAY']);
                }*/
                ?>
            -->

            <h4>Add Admin</h4><hr>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" role="form">
                <div class="form-group-sm">
                    <label for="username">User Name</label>
                    <input required type="text" name="username" class="form-control" placeholder="username">
                </div>
                <div class="form-group-sm">
                    <label for="name">Name</label>
                    <input required type="text" name="name" class="form-control">
                </div><hr>
               <div class="form-group-sm">
                    <label for="password1">password.</label>
                    <input required type="password" name="password1" class="form-control">
                </div><hr>
		<div class="form-group-sm">
                    <label for="password2">Confirm Password</label>
                    <input required type="password" name="password2" class="form-control">
                </div><hr>
		<div class="form-group-sm">
                    <label for="email">Email.</label>
                    <input required type="text" name="email" class="form-control">
                </div><hr>
                </div>
                <div class="form-group-sm">
                    <input type="submit" name="submit" value="Register" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>






<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    <div class="container">
        <div class="navbar-text pull-left">
            Copyright 2018 @ IFSU Potia Campus
        </div>
    </div>

</nav>
<!-- End Footer -->

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>