<?php

/**
* hidden hyve
**/
class StudentLogin
{
    private $_stud_id;
    private $_password;

    public function __construct($c_stud_id, $c_password) {
        $this->_stud_id = $c_stud_id;
        $this->_password = $c_password;
    }

    public function StudLogin() {
        global $db;

        //Start session
        session_start();

        //Array to store error message
        $error_msg_array = array();

        //Error messages
        $error_msg = FALSE;

        if($this->_stud_id == "") {
            $error_msg_array[] = "Please input your Registration number.";
            $error_msg = TRUE;
        }

         if($this->_password == "") {
            $error_msg_array[] = "Please input your password";
            $error_msg = TRUE;
        }

        if($error_msg) {
            $_SESSION['ERROR_MSG_ARRAY'] = $error_msg_array;
            header("location: http://localhost/scpc/index.php");
            exit();
        }

        //sanitize username
        $creator = $this->_password;
                
        $this->_stud_id = $db->real_escape_string($this->_stud_id);

        $sql = "SELECT * FROM voters WHERE stud_id = ? LIMIT 1";
        if(!$stmt = $db->prepare($sql)) {
            echo $stmt->error;
        } else {
            $stmt->bind_param("s", $this->_stud_id);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if($result->num_rows > 0) {
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
            header("location: http://localhost/scpc/index.php");
            exit();
            }
            }

            //Create session

            session_regenerate_id();
            $_SESSION['ID']      = $row['id'];
            $_SESSION['NAME']    = $row['name'];
            $_SESSION['COURSE']  = $row['course'];
            $_SESSION['YEAR']    = $row['year'];
            $_SESSION['STUD_ID'] = $row['stud_id'];
            $_SESSION['PASSWORD']= $row['password'];
            session_write_close();

            header("location: http://localhost/scpc/user.php");

        } else {
            $error_msg_array[] = "Sorry this account doesnt exist.";
            $error_msg = TRUE;

            if($error_msg) {
                $_SESSION['ERROR_MSG_ARRAY'] = $error_msg_array;
                header("location: http://localhost/scpc/index.php");
                exit();
            }
            $stmt->free_result();
        }
        $result->free();
        return $result;
    }
}