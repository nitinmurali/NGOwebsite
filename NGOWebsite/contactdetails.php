<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <!-- Custom styles for this template -->
    <link href="./css/carousel.css" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <body> 
    <div class="loader">
    </div>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
          <a class="navbar-brand" href="#"><img src="./img/websitelogo.jpg" width="100px" height="60px" style="max-width: 100%;"></a>
          <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link disabled" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="index.html#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="index.html#causes">Causes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="blog.html">Blog</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="index.html#contact">Contact</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-lg btn-info my-2 my-sm-0" type="button"><img src="./icons/donation.png"><a href="donate.html" style="color: black;text-transform: uppercase; text-decoration: none;"> Donate </a></button>
            </form>
          </div>
        </nav>
      </header>
    <div class="jumbotron text-center"style="background-color:orangered;  box-shadow: 0 50vh 0 50vh orangered;">
    <div class="row">
    <?php 
    $username = "root"; 
    $password = ""; 
    $database = "contact_details"; 
    $mysqli =mysqli_connect("localhost", $username, $password, $database); 
    $query= "select* from contact";

   echo ('<div class="container" style="margin-top:-5px;">
   <h1 style="color:black;align-content:center;text-transform:uppercase;margin-bottom:35px;">Contact Information</h1>
   </div>
   <div class="table responsive">
   <table class="table table-striped table-dark" style="margin-bottom:50px;">
   <thead>
     <tr>
     <th scope="col">First Name</th>
       <th scope="col">Last Name</th>
       <th scope="col">Email Address</th>
       <th scope="col">Address</th>
       <th scope="col">Mobile Number</th>
    
     </tr>
   </thead>
   ');
     
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["first_name"];
            $field2name = $row["last_name"];
            $field3name = $row["email"];
            $field4name = $row["address"];
            $field5name = $row["telephone"];
        
     
            echo '
            <tbody>
            <tr>
              <th scope="row">'.$field1name.'</th>
              <td>'.$field2name.'</td>
              <td>'.$field3name.'</td>
              <td>'.$field4name.'</td>
              <td>'.$field5name.'</td>
              </tr>
            ';
        }
        echo '</tbody>
        </table>
        </div>';
        $result->free();
    } 
     
    
 
        echo '
      <button type="button" class="btn btn-lg btn-block btn-success">
      <a href="adminSignInpage.php" style="color:white;text-decoration:none;text-transform:uppercase;">Go Back</a>
      </button>
      <button id="logout" type="button" class="btn btn-lg btn-block btn-dark">
      <a href="adminSignOut.php" style="color:white;text-decoration:none;text-transform:uppercase;">Log Out</a></button>
      </div>'; 

    ?>   
 </div>   
</div>
<!-- FOOTER -->
<footer class="page-footer font-small" style="background-color:darkblue;">

  <!-- Footer Links -->
  <div class="container" id="footer-content">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="index.html#about" id="footer-link">About</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="index.html#causes" id="footer-link">causes</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="blog.html" id="footer-link">Blog</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="index.html#contact" id="footer-link">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5" style="color: white;margin-bottom: 20px;">
        <h3>Our vision</h3>
        <p style="line-height: 1.7rem">"We seek a world of hope, tolerance and social justice, where poverty has been overcome and people live in dignity and security."</p>
        <h3>Our mission</h3>
        <p style="line-height: 1.7rem">Our NGO helps alleviate poverty and social exclusion by facilitating empowerment of women and girls from poor and marginalised communities.</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center text-center" style="color: white;">
          <div>Connect with us through:</div>
          <!-- Facebook -->
          <a class="fb-ic" href="https:/www.facebook.com" target="_blank">
           <img src="./icons/facebook.png" alt="facebook">
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="https:/www.twitter.com" target="_blank">
            <img src="./icons/twitter.png" alt="twitter">
          </a>
          <!-- Google +-->
          <a class="gplus-ic" href="https:/www.plus.google.com" target="_blank">
            <img src="./icons/google-plus.png" alt="google-plus">
          </a>
          <!--Linkedin -->
          <a class="li-ic" href="https:/www.linkedin.com" target="_blank">
            <img src="./icons/linkedin.png" alt="linkedin">
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https:/www.instagram.com" target="_blank">
            <img src="./icons/instagram.png" alt="instagram">
          </a>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: whitesmoke;">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" style="text-decoration: none; color: whitesmoke;"> MDBootstrap.com</a>
    <span>|All rights reserved|Project Website @Tequed Labs</span>
  </div>

</footer>
<!-- Footer -->
    
<!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
           window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
      $(document).ready(function(){
             $("#logout").click(function(){
                 confirm("Are you sure you want to log out??");
                 alert("Successfully logged out")
                 });
          });
    </script>
</body>
</html>