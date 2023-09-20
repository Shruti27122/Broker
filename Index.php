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
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
  }
  
  .footer .logo span {
    font-weight: normal;
  }
  
  .footer p {
    margin-top: 2rem;
    margin-bottom: 2rem;
    font-size: 1.7rem;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="Explore.php">Explore</a></li>
      <li><a href="#" data-toggle="modal" data-target="#exampleModal">Assitance</a></li>
      <li><a href="Post_Property.php">Post Property</a></li>
      
<div style="justify-content: center; margin-left:450px;">
    <form class="navbar-form navbar-left" action="">
    <div class="form-group">
      <input type="text" class="form-control"    placeholder="Search" style="border: 1px solid black;" name="search">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<center><h2>Let's Get You Home!......</h2></center>

<div class="container" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="Images/slide-1.jpg" alt="Los Angeles" style="width:100%;  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 27%, rgba(0, 0, 0, 0.65) 90%);
          ">
          <div class="carousel-caption" style="justify-content: center; color: white;">
            <p class="intro-title-top" style="font-size: 30px;">Swargate, Pune
                <br> 411009
              </p>
              <h1 class="intro-title mb-4 ">
                <span class="color-b"></span>
                <br> Bibvewadi Phata, Pune
              </h1>

          </div>
        </div>
  
        <div class="item">
          <img src="Images/slide-2.jpg" alt="Chicago" style="width:100%;  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 27%, rgba(0, 0, 0, 0.65) 90%);">
          <div class="carousel-caption">
            <p class="intro-title-top" style="font-size: 30px;">Wakad, Pune
                <br> 412402
              </p>
              <h1 class="intro-title mb-4 ">
                <span class="color-b"></span>
                <br> Wakad Road, Pune
              </h1>

          </div>
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br>
<!--footer section starts-->
  <section class="footer">
    <a href="#" class="logo" style="    font-family: 'Poppins', sans-serif;">Go&nbsp;<span>Property🏬</span></a>
    <p>
      ©2022-2023 Go Property
    </p>

  </section>
  <!-- footer section ends -->

  
</body>
</html>
