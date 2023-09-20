<?php
require 'vendor/autoload.php';

    $client = new MongoDB\Client;

    $brokerdb = $client->selectDatabase('brokerdb');

    $register = $brokerdb->selectCollection('register');

    $document = array( 
        'password' => $_POST['pwd'],
        'comfirm_pass' => $_POST['cfpwd'],
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname']
    );
 
    $register->insertOne($document);
    echo "successfully";

    echo"<center><h1 style='margin-top:100px;'>You are registered Successfully!...</h1></center>"  ;
 
 header("Location:Login.php");
?>
