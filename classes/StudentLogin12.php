<?php

/**
hidden hyve
**/
class StudentLogin
{
    private $_stud_id;
    private $_password;

    public function __construct($c_stud_id, $c_password) {
        $this->_stud_id = $c_stud_id;
        $this->_password = $c_password;

        global $db;

        $query = "SELECT password, salt
                FROM voters
                WHERE stud_id = '$this->_stud_id;";
         
        $result = $db->query($query);
          
        $userData = mysqli_fetch_array($result, MYSQL_ASSOC);
        $hash = hash('sha256', $userData['salt'] . hash('sha256', $this->_password) );

        $pass = $hash;
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
            $error_msg_array[] = "Please input your registration number.";
            $error_msg = TRUE;
        }

        if($this->_password == "") {
            $error_msg_array[] = "Please input your password.";
            $error_msg = TRUE;
        }

        if($error_msg) {
            $_SESSION['ERROR_MSG_ARRAY'] = $error_msg_array;
            header("location: http://localhost/scpc/index.php");
            exit();
        }


        $query = "SELECT password, salt
                FROM voters
                WHERE stud_id = '$this->_stud_id;";
         
        $res = $db->query($query);
          
        $userData = mysqli_fetch_array($res, MYSQL_ASSOC);
        $hash = hash('sha256', $userData['salt'] . hash('sha256', $this->_password) );

        $pass = $hash;


        $sql = "SELECT * FROM voters WHERE stud_id = ? AND password = '$pass'; LIMIT 1";
        if(!$stmt = $db->prepare($sql)) {
            echo $stmt->error;
        } else {
            $stmt->bind_param("ss", $this->_stud_id, $this->_password);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        /**$query = "SELECT password, salt
                FROM voters
                WHERE stud_id = $this->_stud_id;";
         
        $res = $db->query($query);

        $userData = mysqli_fetch_array($res, MYSQL_ASSOC);
        $hash = hash('sha256', $userData['salt'] . hash('sha256', $this->_password) );
         
        if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
        {
              $error_msg_array[] = "Incorrect password.";
            $error_msg = TRUE;

        if($error_msg) {
            $_SESSION['ERROR_MSG_ARRAY'] = $error_msg_array;
            header("location: http://localhost/scpc/index.php");
            exit();
        }
        }**/

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            //Create session
            session_regenerate_id();
            $_SESSION['ID']      = $row['id'];
            $_SESSION['NAME']    = $row['name'];
            $_SESSION['COURSE']  = $row['course'];
            $_SESSION['YEAR']    = $row['year'];
            $_SESSION['STUD_ID'] = $row['stud_id'];
            session_write_close();

            header("location: http://localhost/scpc/stud_page.php");

        } else {
            $error_msg_array[] = "Sorry the details you entered are Incorrect.";
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