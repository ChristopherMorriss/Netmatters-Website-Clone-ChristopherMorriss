<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=netmatters_php;port=3306","root","");
    var_dump($db);
}
catch(exception $e){
    echo "Unable to connect";
    exit;
}

try {
    $results = $db->query("SELECT telephone, company, email FROM enquiries");
    echo "Retrieved Results";
 } catch (Exception $e) {
    echo "Unable to retrieved results";
    exit;
 }
 
 var_dump($results->fetchAll(PDO::FETCH_ASSOC));
?>