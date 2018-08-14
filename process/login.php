<?php
//Include database connection
require("../config/db.php");

//Include class StudentLogin
require("../classes/StudentLogin.php");

if(isset($_POST['submit'])) {


    $stud_id = trim($_POST['stud_id']);
    $password = trim($_POST['password']);

    $loginStud = new StudentLogin($stud_id, $password);
    $rtnLogin = $loginStud->StudLogin();

}
$db->close();