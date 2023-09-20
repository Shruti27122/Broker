<?php
 require 'vendor/autoload.php';
 $client = new MongoDB\Client;

        $brokerdb = $client->selectDatabase('brokerdb');
    
        $Property = $brokerdb->selectCollection('Property');
     
        $id = $_GET['id'];
    if($_GET['id']){
        $res = $Property->findOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]); 
    }
    if(isset($_POST['submit'])){
        $Property->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)],
            ['$set'=>['Property_Type'=> $_POST['protype'], 'Flat_Details'=>$_POST['flatde'],
            'Preferred_Tenant'=>$_POST['tenant'], 'Parking'=>$_POST['parking' ]]]
        );
        header("Location: View_Details.php");
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
    form{
        margin-left: 350px;
        margin-right: 450px;
        border:1px solid black;
        padding: 50px;
      background-color: white;
      border-radius: 10px;
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
      <li><a href="insertProperty.php">View Users</a></li>    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span>Tejas</a></li>

    </ul>
  </div>
</nav>
  <br>
  <div class="container">
  <h3 style="  margin-left:545px;">Update</h3>
  
 
        <form  method="POST">
 
        <div class="form-group">
          <label for="pwd">Property Type:</label>
          <input type="text" class="form-control" required=" " id="pwd" value="<?php echo"$res->Property_Type"?>"  name="protype" style="width: 400px; border:1px solid #16161d;">
        </div>
        <div class="form-group">
            <label for="pwd">Flat Details:</label>
            <input type="text" class="form-control" value="<?php echo"$res->Flat_Details"?>" required=" " id="pwd"  name="flatde" style="width: 400px; border:1px solid #16161d;">
          </div>
          <div class="form-group">
            <label for="pwd">Preferred Tenant:</label>
            <input type="text" class="form-control" value=" <?php echo"$res->Preferred_Tenant"?>" id="pwd" required=" "  name="tenant" style="width: 400px; border:1px solid #16161d;">
          </div>
          <div class="form-group">
            <label for="pwd">Parking:</label>
            <input type="text" class="form-control" value="<?php echo"$res->Parking"?>" id="pwd" required=" "  name="parking" style="width: 400px; border:1px solid #16161d;">
          </div>
          
        <button  name = "submit" type="submit" class="btn btn-primary">Submit</button>
      </form>

  
</div>

<!--footer section starts-->
<br><br><br><br>
<br>
  <section class="footer">
    <a href="#" class="logo">Go&nbsp;<span>Property🏬</span></a>
    <p>
      ©2022-2023 Go Property
    </p>

  </section>
  <!-- footer section ends -->

  
</body>
</html>
