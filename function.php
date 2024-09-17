<?php

    function add_enquiry($name,$company,$telephone,$email,$message){
        include "connection.php";
        $sql ='INSERT INTO enquiries(your_name, company, telephone, email, your_message) VALUES (?,?,?,?,?)';
        try{
            $results= $db -> prepare($sql);
            $results->bindValue(1, $name, PDO::PARAM_STR);
            $results->bindValue(2, $company, PDO::PARAM_STR);
            $results->bindValue(3, $telephone, PDO::PARAM_STR);
            $results->bindValue(4, $email, PDO::PARAM_STR);
            $results->bindValue(5, $message, PDO::PARAM_STR);
            $results->execute();
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }

    function delete_enquiry(){
        include "connection.php";
        $sql ='DELETE FROM enquiries';
        try{
            $results= $db -> prepare($sql);
            $results->execute();
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }
?>