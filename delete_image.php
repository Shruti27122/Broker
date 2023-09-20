<?php
 require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $brokerdb = $client->selectDatabase('brokerdb');
    $image = $brokerdb->selectCollection('Image'); 
    $id = $_GET['id'];
    $image->deleteOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
    header("Location: New_added_Property.php");

?>