<?php
 require 'vendor/autoload.php';
 $client = new MongoDB\Client;

        if(isset($_POST['submit'])){
          
        $brokerdb = $client->selectDatabase('brokerdb');
        $image = $brokerdb->selectCollection('Image');
          if($_FILES['file']){
            if(move_uploaded_file($_FILES['file']['tmp_name'],'Images/'.$_FILES['file']['name'])){
              $data['filename'] = $_FILES['file']['name'];  
            }
          }  
          $image->insertOne($data);
          header("Location:New_added_Property.php");
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Go Property</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

 <style>
    *{
        font-family: 'Poppins', sans-serif;

     }
    
   
    .container{
        width: 100%;
        margin-top: 0px;
        
    }
    
    /* Create four equal columns that floats next to each other */
    .column {
    float: left;
    width: 50%;
    padding: 40px;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
  
    /* Create four equal columns that floats next to each other */
.innercolumn {
  float: left;
  width: 39%;
  padding: 10px;
  margin-left: 30px;
}

/* Clear floats after the columns */
.innerrow:after {
  content: "";
  display: table;
  clear: both;

  
}
    /* footer */
    .footer {
        
        text-align: center;
        background-color: #16161d;
        padding: 10px;
    }
    
    .footer .logo {
        text-decoration: none;
        font-size: 3rem;
        color: skyblue;
        font-weight: 700;
    }
    
    .footer .logo span {
        font-weight: normal;
    }
    
    .footer p {
        margin-top: 2rem;
        margin-bottom: 2rem;
        font-size: 1.7rem;
        color: white;

    }
    .formupload{
    text-align: center;
  }
  </style>
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel" >Assistance</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="assisted"> 
        <h3 >Assisted Buying</h3>
        <ul>
          <li>
        <span style="font-family: Arial, Helvetica, sans-serif;">Dedicated Property Search Manager</span>
     &nbsp;     <button class="btn btn-primary">Enquiry Now</button>
    </li><br>
      <li>   <span style="font-family: Arial, Helvetica, sans-serif;">Post our requirement and find home.</span>
   &nbsp;<button class="btn btn-primary">Post Now</button>
 </li>
</div>
  </ul>
  <hr style="height:1px;border:none;color:#333;background-color:#333;" />
  <div class="loan">
    <h3 >Home Loans and Insurance</h3>
    <ul>
      <li><span style="font-family: Arial, Helvetica, sans-serif;">Home Loan Eligibility and apply online.</span>
            &nbsp;<button class="btn btn-primary">Home Loan</button>
      </li><br>
      <li><span style="font-family: Arial, Helvetica, sans-serif;">Request For Home Insurance.</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Home Protect</button>
      </li><br>
      <li><span style="font-family: Arial, Helvetica, sans-serif;">Calculate your monthly EMI.</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary">EMI Calculator</button>
      </li><br>
    </ul>
  </div>
  <hr style="height:1px;border:none;color:#333;background-color:#333;" />
  <div class="contact">
    <h3 >Contact</h3>
      <a href="">User Support</a>&nbsp;&nbsp;&nbsp;<a href="">Contact Us</a>&nbsp;&nbsp;&nbsp;<a href="">Live Chat</a>&nbsp;&nbsp;&nbsp;<a href="">Help Guide</a>
      <h5>India Helpline Number:- +91 9235721020</h5>
      <h5>International Helpline Number:- +12027953213</h5>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-success">OK</button>
      </div>
    </div>
  </div>
</div>
  
<nav class="navbar navbar-inverse" style="padding:10px; font-size: large;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">🏬Go Property</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="New_Home.php">Home</a></li>
      <li><a href="Explore_Login.php">Explore</a></li>
      <li><a href="#" data-toggle="modal" data-target="#exampleModal">Assitance</a></li>
      <li><a href="Post_Property_new.php">Post Property</a></li>
      <li><a href="View_Details.php">View Details</a></li>
     <li><a href="View_User.php">View Users</a></li>  
     <li><a href="insertProperty.php">Insert Property</a></li>  
     <li><a href="New_added_Property.php">BluePrint</a></li>   
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span>Tejas</a></li>

    </ul>
  </div>
</nav>
  <br>

  <form  class="formupload" method="POST" enctype="multipart/form-data">
    <h3>Upload your Property.</h3><br>
    <input type="file" id="myFile" name="file" style="text-align: center; margin-left:580px;"><br>
    <button name="submit" class="btn btn-success" onclick="alert('Property uploaded Successfully')">Upload</button>
  </form>


  <div class="row">
    <div class="column">
        <div class="innerrow">
            <div class="innercolumn" >
                <img src="Images/1.png" style="width: 250px; height:200px">
            </div>
            <div class="innercolumn" >
                <img src="Images/2.jpg" style="width: 250px; height:200px" >
            </div>
        </div>
        <div class="innerrow">
            <div class="innercolumn" >
                <img src="Images/3.jpg" style="width: 250px; height:200px">
            </div>
            <div class="innercolumn" >
                <img src="Images/4.jpg" style="width: 250px; height:200px">
            </div>
        </div>
          
    </div>
    <div class="column">
        <div class="innerrow">
            <div class="innercolumn" >
                <h4>1. Flat Details</h4>
                <p>3 BHK</p>
            </div>
            <div class="innercolumn" >
                <h4>2. Property Type</h4>
                <p>Apartment</p>
            </div>
        </div>
        <br>
        <div class="innerrow">
            <div class="innercolumn" >
                <h4>3. Preferred Tenant</h4>
                <p>Family</p>
            </div>
            <div class="innercolumn" >
                <h4>4. Immediately</h4>
                <p>Possession</p>
            </div>
        </div>
        <br>
        <div class="innerrow">
            <div class="innercolumn" >
                <h4>5. Parking</h4>
                <p>Bike and Car</p>
            </div>
            <div class="innercolumn" >
                <h4>6. Age of Building</h4>
                <p>More than 1 year</p>
            </div>
        </div>
        <br>
        <div class="innerrow">
            <div class="innercolumn" >
                <h4>7. Balcony</h4>
                <p>Yes</p>
            </div>
            <div class="innercolumn" >
                <h4>8. Posted on</h4>
                <p>Sep 23, 2022</p>
            </div>
        </div>
    </div>
  </div>
  
  
<br>
<!--footer section starts-->
  <section class="footer">
    <a href="#" class="logo">Go&nbsp;<span>Property🏬</span></a>
    <p>
      ©2022-2023 Go Property
    </p>

  </section>
  <!-- footer section ends -->

  
</body>
</html>
