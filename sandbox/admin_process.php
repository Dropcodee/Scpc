<?php

class Admins
{
    public function INSERT_ADMIN($username, $name, $password, $email, $salt) {
        global $db;

        //Check to see if the admin exists
        $sql = "SELECT *
                FROM admin
                WHERE name = ?
                LIMIT 1";
        if(!$stmt = $db->prepare($sql)) {
            echo $stmt->error;
        } else {
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if($result->num_rows > 0) {
            echo "<div class='alert alert-danger'>Sorry this admin already exists in the database.</div>";
        } else {
            //Insert admin
            $sql = "INSERT INTO admin(username, name, password, email, salt)VALUES(?, ?, ?, ?, ?)";
            if(!$stmt = $db->prepare($sql)) {
                echo $stmt->error;
            } else {
                $stmt->bind_param("sssss", $username, $name, $password, $email, $salt);
            }
            if($stmt->execute()) {
                echo "<div class='alert alert-success'>Admin added successfully.</div>";
            }
            $stmt->free_result();
        }
        return $stmt;
    }
}
 
 ?>