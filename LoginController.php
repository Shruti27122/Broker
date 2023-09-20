<?php
if($_POST){
    $name = $_POST['uname'];
    $pass = $_POST['pwd'];
    if($name == 'tejas' && $pass == 'tejas910'){
        header("Location:New_Home.php");
    } 
    else{
        echo"<h1 style='text-align: center; color:red; margin-top:100px;'>Wrong Credentials!...</h1>";
        echo"<h2 style='text-align: center; color:red; margin-top:100px;'>Try Again</h2>";
    }
}
?>