<?php
//Start session
session_start();

session_destroy();
header("location: http://localhost/scpc/sandbox/index.php");
exit();