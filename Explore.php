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
  <style>
    
body{
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
}
    form{
        margin-left: 300px;
        margin-right: 270px;
        border:1px solid black;
        padding: 50px;
      background-color: aqua;
      border-radius: 10px;
    }
    img{
      border-radius:10px;
      box-shadow: 9px 9px 9px 10px #b3b3b3;
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
    font-family: arial,Helvetica;
  }
  
  .footer .logo span {
    font-weight: normal;
  }
  
  .footer p {
    margin-top: 2rem;
    margin-bottom: 2rem;
    font-size: 1.7rem;
    color: white;
    font-family: arial, Helvetica;
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
      <li class="active"><a href="Index.php">Home</a></li>
      <li><a href="Explore.php">Explore</a></li>
      <li><a href="#"  data-toggle="modal" data-target="#exampleModal">Assitance</a></li>
      <li><a href="Post_Property.php">Post Property</a></li>
  
 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="row">
    <div class="col-md-4">
        <div class="card text-center">
            <img src="Images/property-7.jpg" class="card-img-top"
             style="width:400px;height: 300px;"> 
            <div class="card-body">
              <br>
                    <h5 class="card-title" style="font-size: 20px;">Villa</h5>
                    <p class="card-text" style="text-align:left; margin-left:20px;" > A villa is a fairly large house, especially one that is used for holidays in Mediterranean countries. He lives in a secluded five-bedroom luxury villa.</p>

                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <img src="Images/property-6.jpg" class="card-img-top"
             style="width:400px;height: 300px;">
            <div class="card-body">
              <br>
                    <h5 class="card-title" style="font-size: 20px;">Bungalow</h5>
                    <p class="card-text"  style="text-align:left; margin-left:20px;" > A villa is a fairly large house, especially one that is used for holidays in Mediterranean countries. He lives in a secluded five-bedroom luxury villa.</p>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <img src="Images/property-4.jpg" class="card-img-top"
             style="width:400px;height: 300px;">
            <div class="card-body">
              <br>
                    <h5 class="card-title" style="font-size: 20px;">House</h5>
                    <p class="card-text"  style="text-align:left; margin-left:20px;" > A villa is a fairly large house, especially one that is used for holidays in Mediterranean countries. He lives in a secluded five-bedroom luxury villa.</p>

             </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card text-center">
            <img src="Images/property-5.jpg" class="card-img-top"
             style="width:400px;height: 300px;"> 
            <div class="card-body">
              <br>
                    <h5 class="card-title" style="font-size: 20px;">Villa</h5>
                    <p class="card-text"  style="text-align:left; margin-left:20px;" > A villa is a fairly large house, especially one that is used for holidays in Mediterranean countries. He lives in a secluded five-bedroom luxury villa.</p>

                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <img src="Images/property-8.jpg" class="card-img-top"
             style="width:400px;height: 300px;">
            <div class="card-body">
              <br>
                    <h5 class="card-title" style="font-size: 20px;">Bungalow</h5>
                    <p class="card-text"  style="text-align:left; margin-left:20px;" > A villa is a fairly large house, especially one that is used for holidays in Mediterranean countries. He lives in a secluded five-bedroom luxury villa.</p>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <img src="Images/property-10.jpg" class="card-img-top"
             style="width:400px;height: 300px;">
            <div class="card-body">
              <br>
                    <h5 class="card-title" style="font-size: 20px;">House</h5>
                    <p class="card-text"  style="text-align:left; margin-left:20px;" > A villa is a fairly large house, especially one that is used for holidays in Mediterranean countries. He lives in a secluded five-bedroom luxury villa.</p>

             </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>
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
