<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Filters the contents of the input fields with the name 'user-name', 'message' etc to prevent SQL injection 
        $name = trim(filter_input(INPUT_POST,'user-name',FILTER_SANITIZE_FULL_SPECIAL_CHARS)); //FILTER_SANITIZE_STRING used but is deprecated
        $company = trim(filter_input(INPUT_POST,'user-company',FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $telephone = trim(filter_input(INPUT_POST,'user-telephone',FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $email = trim(filter_input(INPUT_POST,'user-email',FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $message =trim(filter_input(INPUT_POST,'message',FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        if (empty($name) || empty($telephone) || empty($email) || empty($message)){
            //If one of these input fields is empty, the error message is assigned 
            //and is ready to be output in the relevant part of the HTML
            $error_message = 'Please fill in the required field: name, telephone, email and message';
            // echo "<p>name = $name<br></p>";
            // echo "<p>telephone = $telephone<br></p>";
            // echo "<p>email = $email<br></p>";
            // echo "<p>message = $message<br></p>";
        }
        else{
            $ready_for_submit = 1;
            $phone_regex = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";
            $match = preg_match($phone_regex,$telephone);
            echo "<p>match=$match</p>";
            echo "<p>telephone=$telephone</p>";
            if ($match === 0) {
                $ready_for_submit = 0;
            }
            $email_regex = "/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/";
            $match2 = preg_match($email_regex,$email);
            echo "<p>match2=$match2</p>";
            echo "<p>email=$email</p>";
            if ($match === 0) {
                $ready_for_submit = 0;
            }
            $message2 = strlen($message);
            if ($message2 < 5){
                echo "<p>too short</p>";
                $ready_for_submit = 0;
            }
            echo "<p>length=$message2</p>";
            echo "<p>$ready_for_submit</p>";
            if ($ready_for_submit === 1){
                echo "<p>Added to database!</p>";
                add_enquiry($name,$company,$telephone,$email,$message);
                //Triggers a function which uses SQL to add the variables to the database
                $ready_for_submit = 0;
            }

            
            echo "<p>name = $name<br></p>";
            echo "<p>telephone = $telephone<br></p>";
            echo "<p>email = $email<br></p>";
            echo "<p>message = $message<br></p>";
            //delete_enquiry(); Used to delete all rows from table

            
        }
    }
    ?>