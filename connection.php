<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=netmatters_php;port=3306","root","");
    var_dump($db);
}
catch(exception $e){
    echo "Unable to connect";
    exit;
}
?>