<?php
//Create authentication

//Start session
session_start();

if(!isset($_SESSION['ADMIN_ID']) || count($_SESSION['ADMIN_ID']) == 0) {
    header("location: http://localhost/scpc/sandbox/index.php");
    exit();
}