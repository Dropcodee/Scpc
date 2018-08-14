<?php

class Voters
{
    public function INSERT_VOTER($name, $course, $year, $stud_id, $password, $email, $salt) {
        global $db;

        //Check to see if the voter exists
        $sql = "SELECT *
                FROM voters
                WHERE stud_id = ?
                LIMIT 1";
        if(!$stmt = $db->prepare($sql)) {
            echo $stmt->error;
        } else {
            $stmt->bind_param("s", $stud_id);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if($result->num_rows > 0) {
            echo "<div class='alert alert-danger'>Sorry this account already exists in the database.</div>";
        } else {
            //Insert voter
            $sql = "INSERT INTO voters(name, course, year, stud_id, password, email, salt)VALUES(?, ?, ?, ?, ?, ?, ?)";
            if(!$stmt = $db->prepare($sql)) {
                echo $stmt->error;
            } else {
                $stmt->bind_param("sssssss", $name, $course, $year, $stud_id, $password, $email, $salt);
            }
            if($stmt->execute()) {
                header('Location: ../index.php');
            }
            $stmt->free_result();
        }
        return $stmt;
    }
}
 
 ?>