<?php


//Include database connection
require("../config/db.php");

//Include class Voters
require("register2a.php");

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
                $name       = trim($_POST['name']);
                $course     = trim($_POST['course']);
                $year       = trim($_POST['year']);
                $stud_id    = trim($_POST['stud_id']);
                $password1  = trim($_POST['password1']);
				$password2  = trim($_POST['password2']);
				$email      = trim($_POST['email']);

                if($password1 != $password2)
				    header('Location: registration.php');
				 
				if(strlen($name) > 30)
				    header('Location: registration.php');
				 
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

                $insertVoter = new Voters();
                $rtnInsertVoter = $insertVoter->INSERT_VOTER($name, $course, $year, $stud_id, $password, $email, $salt);

               // $db->query($sql);
 
				//$db->close();

            }
            ?>


            <h4>Add Voters</h4><hr>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" role="form">
                <div class="form-group-sm">
                    <label for="name">Name</label>
                    <input required type="text" name="name" class="form-control" placeholder="LName, FName MI.">
                </div>
                <div class="form-group-sm">
                    <label for="course">Course</label>
                    <select required name="course" class="form-control">
                        <option value="">*****Select Course*****</option>
                        <option value="BSIT">BSIT</option>
                        <option value="COE">COE</option>
                        <option value="BEE">BEE</option>
                        <option value="BSE">BSE</option>
                        <option value="BSA">BSA</option>
                        <option value="BSF">BSF</option>
                        <option value="BHRM">BHRM</option>
                        <option value="BSHT">BSHT</option>
                        <option value="CRIMINOLOGY">CRIMINOLOGY</option>
                        <option value="MIDWIFERY">MIDWIFERY</option>
                    </select>
                </div>
                <div class="form-group-sm">
                    <label for="year">Year</label>
                    <select required name="year" class="form-control">
                        <option value="">*****Select Year*****</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                </div>
                <div class="form-group-sm">
                    <label for="stud_id">Student ID No.</label>
                    <input required type="text" name="stud_id" class="form-control">
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