<?php

    $server = 'localhost';
    $dbname = 'Convodb';
    $username = 'root';
    $password = 'mysql1network';

    // CHECKING FOR CONNECTION
    try
    {
        
        $conn = new PDO("mysql:host = $server; dbname = $dbname", "$username", "$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $e)
    {
        die("Oops something went wrong in the database". $e-> getMessage() );

    }

