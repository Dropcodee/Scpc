<?php

//$stud_id = $_POST['stud_id'];

//This line of code connects to mysql database
define("HOST_NAME", "localhost");
define("HOST_USER", "root");
define("HOST_PASS", "");
define("HOST_DB", "convo");

$db = new mysqli(HOST_NAME, HOST_USER, HOST_PASS, HOST_DB);

//$stud_id = $db->real_escape_string($stud_id);
/**
 * This line of code checks if connection error exists.

if($db->connect_error) {
    echo $db->connect_errno . " " . $db->connect_error;
} else {
    echo "Connection successful.";
}
 */