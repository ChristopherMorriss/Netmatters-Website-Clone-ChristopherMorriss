<?php
//Connection for the localhost
include "php/phpenv.php";
try{
    $db = new PDO("mysql:host=localhost;dbname=netmatters_php;port=3306","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //var_dump($db);
}
catch(exception $e){
    echo "Unable to connect";
    exit;
}

// $servername = $_ENV['MySQL_DB_HOST'];

// $database = $_ENV['MySQL_DB_NAME'];

// $username = $_ENV['MySQL_DB_USER_NAME'];

// $password = $_ENV['MySQL_DB_PASSWORD'];


 
// // Create connection
 
// $conn = mysqli_connect($servername, $username, $password, $database);
 
// // Check connection
 
// if (!$conn) {
 
//     die("Connection failed: " . mysqli_connect_error());
 
// }
// echo "Connected successfully";
// mysqli_close($conn);


// try {
//     $results = $db->query("SELECT telephone, company, email FROM enquiries");
//     //echo "Retrieved Results ";
//  } catch (Exception $e) {
//     echo "Unable to retrieve results ";
//     exit;
//  }
// var_dump($results);
// var_dump($results->fetchAll(PDO::FETCH_ASSOC));
?>