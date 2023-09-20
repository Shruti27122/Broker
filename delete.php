<?php
 require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $brokerdb = $client->selectDatabase('brokerdb');
    $Property = $brokerdb->selectCollection('Property'); 
    $id = $_GET['id'];
    $Property->deleteOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
    header("Location: View_Details.php");

?>