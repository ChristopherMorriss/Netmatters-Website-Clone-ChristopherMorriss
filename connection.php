<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=netmatters_php;port=3306","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //var_dump($db);
}
catch(exception $e){
    echo "Unable to connect";
    exit;
}

try {
    $results = $db->query("SELECT telephone, company, email FROM enquiries");
    //echo "Retrieved Results ";
 } catch (Exception $e) {
    echo "Unable to retrieve results ";
    exit;
 }
//  $db->query("INSERT INTO enquiries VALUES () Trying to add the submission form variables into the database
//  var_dump($results);
//  var_dump($results->fetchAll(PDO::FETCH_ASSOC));
?>