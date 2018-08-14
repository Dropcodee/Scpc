<?php

 // alert messages for either success or not successful
    $msg = '';
    $msgClass = '';

    if(filter_has_var(INPUT_POST, 'send'))
    {
    // GET FORM DATA OR INPUTS
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $uheader = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        if(!empty($name) && !empty($email) && !empty($uheader) && !empty($message))
        {
         // ALL FILLED FIELDS THEN VALIDATE
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
            {
                $msg = 'Please Enter a valid email';
                $msgClass = 'alert-danger';
            }
            else
            {
            // after validation send mail to and d structure of the mail.
                $toEmail = "owolabi.oluwasegun@lmu.edu.ng";
                $subject = $uheader;
                $body = '<h2>NEW STUDENT COMPLAINT !</h2>
                <h4>STUDENTS NAME: </h4> <p>'. $name . '</p>
                <h4>STUDENTS EMAIL: </h4> <p>'. $email . '</p>
                <h4>STUDENTS COMPLAIN: </h4> <p> '. $message . '</p>
                ';
                // EMAIL HEADERS
                $headers .= "From:" . $name . "<". $email . ">". "\r\n";

                // ADDITIONAL HEADERS
                $headers .= "from ". $name . "<". $email .">"."\r\n";

                // if mail sent or not
                if(mail($toEmail, $subject, $body, $headers))
                {
                    $msg = 'Your email has been recieved, you will be contacted shortly.';
                    $msgClass = 'alert-success';
                }
                else
                {
                    $msg = 'Sorry your mail was not sent, please try again';
                    $msgClass = 'alert-danger';
                }

            }
        }
        else
        {
        // ERROR MSG WHEN ALL FIELDS ARE EMPTY

            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }