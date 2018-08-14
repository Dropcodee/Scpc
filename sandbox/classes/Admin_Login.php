<?php

/**
 * hidden hyve
 */
class Admin_Login
{
    private $_username;
    private $_password;

    public function __construct($c_username, $c_password) {
        $this->_username = $c_username;
        $this->_password = $c_password;
    }

    public function AdminLogin() {
        global $db;

        //Start session
        session_start();

        //Array to validate errors
        $error_msg_array = array();

        //Error messages
        $error_msg = FALSE;

        if($this->_username == "") {
            $error_msg_array[] = "Please input your username";
            $error_msg = TRUE;
        }

        if($this->_password == "") {
            $error_msg_array[] = "Please input your password";
            $error_msg = TRUE;
        }

        if($error_msg) {
            $_SESSION['ERROR_MSG_ARR'] = $error_msg_array;
            header("location: http://localhost/scpc/sandbox/index.php.php");
            exit();
        }

        //sanitize username
        $creator = $this->_password;
                
        $this->_username = $db->real_escape_string($this->_username);

        $sql = "SELECT * FROM admin WHERE username = ? LIMIT 1";
        if(!$stmt = $db->prepare($sql)) {
            echo $stmt->error;
        } else {
            $stmt->bind_param("s", $this->_username);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if($result->num_rows > 0) {
            //Login successful
            $row = $result->fetch_assoc();

             $hash = hash('sha256', $row['salt'] . hash('sha256', $this->_password) );

            $salt = $row['salt'];

            $hash = hash('sha256', $creator);

            $password = hash('sha256', $salt . $hash);


            if($password != $row['password']) 
            // Incorrect password. So, redirect to login_form again.
            {
              $error_msg_array[] = "Incorrect password. $salt $hash $password";
              $error_msg = TRUE;

            if($error_msg) {
            $_SESSION['ERROR_MSG_ARRAY'] = $error_msg_array;
            header("location: http://localhost/scpc/sandbox/index.php");
            exit();
            }
            }

            //Create session
            session_regenerate_id();
            $_SESSION['ADMIN_ID']   = $row["id"];
            $_SESSION['ADMIN_NAME'] = $row["name"];
            session_write_close();

            header("location: http://localhost/scpc/sandbox/admin_page.php");

        } else {
            //Login failed
            $error_msg_array[] = "The username and password you entered is incorrect.";
            $error_msg = TRUE;

            if($error_msg) {
                $_SESSION['ERROR_MSG_ARR'] = $error_msg_array;
                header("location: http://localhost/scpc/sandbox/index.php");
                exit();
            }
            $stmt->free_result();
        }
        $result->free();
        return $result;
    }
}