<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
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
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#causes">Causes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.html">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#contact">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-color:orange;">
              <img src="./img/donationbanner.gif" class="d-block w-100" alt="Donate">
          </div>
        </div>
      </div>
      <div class="container">
      <?php 
      if (isset($_REQUEST['form_submitted']))
    {
        /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "donor_details");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$donor_name = mysqli_real_escape_string($link, $_REQUEST['donor_name']);
$donor_email = mysqli_real_escape_string($link, $_REQUEST['donor_email']);
$donor_phoneno = mysqli_real_escape_string($link, $_REQUEST['donor_phoneno']);
$payment_amount = mysqli_real_escape_string($link, $_REQUEST['payment_amount']);
$donor_firstname = mysqli_real_escape_string($link, $_REQUEST['donor_firstname']);
$donor_lastname = mysqli_real_escape_string($link, $_REQUEST['donor_lastname']);
$donor_Address = mysqli_real_escape_string($link, $_REQUEST['donor_Address']);
$donor_Address2 = mysqli_real_escape_string($link, $_REQUEST['donor_Address2']);
$donor_city = mysqli_real_escape_string($link, $_REQUEST['donor_city']);
$donor_state = mysqli_real_escape_string($link, $_REQUEST['donor_state']);
$donor_zipcode = mysqli_real_escape_string($link, $_REQUEST['donor_zipcode']);
$donor_date = mysqli_real_escape_string($link, $_REQUEST['donor_date']);
$donor_paymentmethod = mysqli_real_escape_string($link, $_REQUEST['donor_paymentmethod']);
  //Payment receipt
    echo '<div class="card">
  <h2 class="card-header" style="background-color:orangered;color:black;">Payment receipt</h2>
  <div class="card-body" style="font-size:medium;font-weight:bold;">
    <p class="card-text"></p>
    <h3 class="card-title" style="margin-bottom:30px;">Personal info</h3>
    <ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item col-md-4">Name: '.$donor_name.'</li>
  <li class="list-group-item col-md-4">Email Address: '.$donor_email.'</li>
  <li class="list-group-item col-md-4">Phone Number: '.$donor_phoneno.'</li>
  </ul>
  <h3 class="card-title" style="margin-bottom:30px; margin-top:40px;">Payment Info</h3>
  <ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item col-md-6"> First Name: '.$donor_firstname.'</li>
  <li class="list-group-item col-md-6">Last Name: '.$donor_lastname.'</li>
  </ul>
  <ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item col-md-6">Amount Paid: ₹'.$payment_amount.'</li>
  <li class="list-group-item col-md-6">Payment method: '.$donor_paymentmethod.'</li>
  </ul>
  <ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item col-md-12">Address: '.$donor_Address.'</li>
  </ul>
  <ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item col-md-4">City: '.$donor_city.'</li>
  <li class="list-group-item col-md-4">State: '.$donor_state.'</li>
  <li class="list-group-item col-md-4">Postal Code: '.$donor_zipcode.'</li>
  </ul>

    <a href="donate.html" class="btn btn-lg btn-success" style="margin-top:30px; text-align:center;">Donate more!!</a>
  </div>
</div>
';
    }
    //Inserting into database
    $sql1="INSERT INTO personal_info(donor_name, donor_email, donor_phoneno) VALUES ('$donor_name','$donor_email','$donor_phoneno')";
    $sql2="INSERT INTO payment_details(amount_paid,donor_firstname, donor_lastname, donor_Address, donor_Address2, donor_city, donor_state, donor_zipcode, donor_date, donor_paymentmethod) VALUES ('$payment_amount','$donor_firstname','$donor_lastname','$donor_Address','$donor_Address2','$donor_city','$donor_state','$donor_zipcode','$donor_date','$donor_paymentmethod')";
    if(!(mysqli_query($link, $sql1)&&mysqli_query($link,$sql2))){
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
      ?>
      <img src="./img/thankyou.gif" alt="donate" width="100%" height="200px" style="margin-top:30px;">
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
    </script>
</body>
</html>