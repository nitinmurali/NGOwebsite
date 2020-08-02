<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NGO Website</title>
 
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <!-- Custom styles for this template -->
    <link href="./css/carousel.css" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  </head>
  <!--Start Navigation bar-->
  <body>
    <?php
     if(isset($_REQUEST['Yes']))
   { 
   echo '<div class="loader">
    </div> ';
            $link = mysqli_connect("localhost", "root", "", "subscription");
 
            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
             
            // Escape user inputs for security
            $subscription = mysqli_real_escape_string($link, $_GET['subscription']);
             
            // Attempt insert query execution
            $sql = "INSERT INTO subscribers(email) VALUES ('$subscription')";
            if(!mysqli_query($link, $sql)){
                echo '<h2 style="color:white;">Oops!!Something went wrong</h2>';
            }
             
            // Close connection
            mysqli_close($link);
           }
    ?>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" style="display:inline-flex;">
        <a class="navbar-brand" href="index.html"><img src="./img/websitelogo.jpg" width="100px" height="60px" style="max-width: 100%;"></a>
        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#causes">Causes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.html">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-lg btn-info my-2 my-sm-0"  id="donate-button" type="button"><img src="./icons/donation.png">
            <a href="donate.html"  id="donate-button" style="color: black;text-transform: uppercase; text-decoration: none;"> Donate</a></button>
          </form>
        </div>
      </nav>
    </header>
    <!--End Navigation bar-->
    <!--Start Carousel-->
    <main role="main">

      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" data-interval="5000">
            <img class="first slide" src="./img/banner1.jpg" alt="First slide" width="1200px" height="400px" style="width: 100%;">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 id="carousel-heading">Give a hand</h1>
                <h1 id="carousel-heading">To make a better world</h1>
                <p id="carousel-text">Providing relief to more than
                  3 lakh people
                </p>
                <p><a class="btn btn-lg btn-primary" id="carousel-button" href="donate.html" role="button">Donate</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-interval="2000">
            <img class="second-slide" src="./img/banner2.jpg" alt="Second slide" style="width: 100%;">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 id="carousel-heading">All lives matter</h1>
                <p id="carousel-text">Education is all a matter of building bridges</p>
                <p><a class="btn btn-lg btn-primary" id="carousel-button" href="donate.html" role="button">Donate</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="2000">
            <img class="third-slide" src="./img/banner3.jpg" width="800px" alt="Third slide" style="width: 100%;">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 id="carousel-heading">One more for good measure.</h1>
                <p id="carousel-text">Our lives begin to end the day we become silent
                  about things that matter.
                </p>
                <p><a class="btn btn-lg btn-primary" id="carousel-button" href="donate.html" role="button">Donate</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--End Carousel-->
        <!-- START THE FEATURETTES -->
        <!--About us section start-->
        <div class="container" id="about">
        <div class="row featurette">
          <div class="col-md-7">
            <div class="card" id="card-content">
              <div class="card-header">
                <h1>About us</h1>
              </div>
              <div class="card-body">
                <h5 class="card-title">We are nonprofit team
                  and work worldwide</h5>
                <p class="card-text">Our NGO has been working around the world for 70 years, focusing on alleviating poverty and social exclusion. We do this through well-planned and comprehensive programmes in health, education, livelihoods and disaster preparedness and response. Currently we are collaborating with development partners in fighting COVID-19 health crisis. We are helping frontline workers stay safe with PPE, distributing dry rations to feed the needy, raising awareness in our programme areas. We are part of the CARE International Confederation working in over 100 countries for a world where all people live with dignity and security

                  health icon.</p>
                <a href="blog.html" class="btn btn-primary btn-lg" id="card-button">Know More</a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" style="margin-top: 80px;" src="./img/about.webp" width="792px" height="514px" alt="Generic placeholder image">
          </div>
        </div>
      </div>
       <!--About us section end-->
       <!--Causes section start-->
        <hr class="featurette-divider">
        <div class="container" id="causes">
        <div class="row featurette" style="margin-top: -50px;">
          <div class="col-md-12">
            <h1 id="feature-heading">Our major causes</h1>
            <p class="lead" style="margin-top: 20px; font-weight: 400;">Our NGO has made a considerable shift in its programming approach over the years. From direct service provision to enabling poor and vulnerable groups, it has evolved into a rights-based organisation in order to address underlying causes of poverty. 
              Our focus is explicitly on the well-being, social position and rights of women and girls from marginalised communities.
              As we move ahead our key programming approach will continue to include social analysis and action, gender transformative value chain approaches, leadership and life skills strengthening, building capacities and leadership roles at multiple levels, advocacy on national and international platforms and facilitating links and dialogues between public, private and civil society.
            </p>
          </div>
          <div class="col-md-12">
          <h2 style="text-align: center;text-transform: uppercase; margin-top: 20px; color: green;">Featured Causes</h2>
        </div>
          <div class="row row-cols-1 row-cols-md-2" style="margin-top: 30px;">
            <div class="col mb-4">
              <div class="card">
                <div class="inner">
                <img src="./img/education.webp" class="card-img-top" alt="education" width="250px" height="250px">
              </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Education for every child</h5>
                  <p class="card-text">Believing in and appreciating the dignity and potential of all human beings.
                    Every last child deserves the opportunity to learn. Together, we are achieving breakthroughs in education for children.
                  </p>
                  <span class="text-muted">Raised:&dollar;1500</span>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <div class="inner">
                  <img src="./img/hunger.webp" class="card-img-top" alt="health" width="250px" height="250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Feeding the hungry people</h5>
                  <p class="card-text">Our network is the nation’s largest domestic hunger-relief organization, working to connect people with food and end hunger. Donors, staff, and volunteers all play an important role in our efforts to end hunger</p>
                  <span class="text-muted">Raised:&dollar;1500</span>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <div class="inner">
                  <img src="./img/cloth.webp" class="card-img-top" alt="cloth" width="250px" height="250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Providing cloth for people</h5>
                  <p class="card-text">Your generous contributions of gently used clothes and household goods, provided they are in fairly good condition, can help low income and needy people. This will be the case though you may consider your clothes as being out of fashion or old.</p>
                  <span class="text-muted">Raised:&dollar;1500</span>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <div class="inner">
                  <img src="./img/shelter.webp" class="card-img-top" alt="shelter" width="250px" height="250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Helping the homeless</h5>
                  <p class="card-text">For those with no place to go or in need of emergency shelter, local Salvation Army homeless shelters provide a warm, safe place for men, women, and – whenever possible – families to stay.
                    Your small donations make a big difference to the entire society and to alleviate poverty.
                  </p>
                  <span class="text-muted">Raised:&dollar;1500</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!--Causes section ends-->
        <!--Changemakers section starts-->
        <hr class="featurette-divider">
         <div class="container">
        <div class="row featurette" style="margin-top: -50px;">
          <div class="col-md-12 order-md-2">
            <h1 id="feature-heading">Changemakers</h1>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active"  data-interval="10000"> 
                  <img src="./img/changemaker1.jpg" class="d-block w-100" alt="Changemaker1">
                  <div class="carousel-caption d-none d-md-block" id="changemaker-content">
                    <h3>Seema Yadav</h3>
                    <blockquote class="blockquote mb-0">
                      <p>“Going against my family was hard yet important for my daughter’s survival. Now I want others also to realize the importance of proper health check-ups and correct medical advice for expecting mothers and their newborn babies”</p>
                    </blockquote>
                  </div>
                </div>
                <div class="carousel-item"  data-interval="2000">
                  <img src="./img/changemaker2.jpg" class="d-block w-100" alt="Changemaker2">
                  <div class="carousel-caption d-none d-md-block" id="changemaker-content">
                    <h3>Sweta Verma</h3>
                    <blockquote class="blockquote mb-0">
                      <p>“My mother got married when she was 12-years-old. But that’s not me. I don’t want to get married until I complete my education and achieve my dream of becoming a doctor.”</p>
                    </blockquote>
                  </div>
                </div>
                <div class="carousel-item"  data-interval="2000">
                  <img src="./img/changemaker3.jpg" class="d-block w-100" alt="Changemaker3">
                  <div class="carousel-caption d-none d-md-block"  id="changemaker-content">
                    <h3>ANURADHA YADAV</h3>
                    <blockquote class="blockquote mb-0">
                      <p>“People in my village need to understand the menace of malnutrition and its impact on their children’s health. I will not stop till I achieve my dream of a village with zero malnutrition among children”</p>
                    </blockquote>
                  </div>
                </div>
                <div class="carousel-item"  data-interval="2000">
                  <img src="./img/changemaker4.jpg" class="d-block w-100" alt="Changemaker4">
                  <div class="carousel-caption d-none d-md-block" id="changemaker-content">
                    <h3>ARNA MAJHI</h3>
                    <blockquote class="blockquote mb-0">
                      <p>“Even when it was difficult to earn enough for two meals a day, I always dreamt of doing something bigger in life. I now focus on encouraging people to adopt better farming practices and improve their livelihoods.”</p>
                    </blockquote>
                  </div>
                </div>
                <div class="carousel-item"  data-interval="2000">
                  <img src="./img/changemaker5.jpg" class="d-block w-100" alt="Changemaker5">
                  <div class="carousel-caption d-none d-md-block" id="changemaker-content">
                    <h3>RAJU MISHRA</h3>
                    <blockquote class="blockquote mb-0">
                      <p>“I want men to appreciate the amount of effort women put in while doing household chores. My mission is to make every man understand that lending a helping hand is the least we can do” </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
        <!--Changemaker section ends-->
        <hr class="featurette-divider">
        <!--Contact section start-->
        <div class="container" id="contact">
        <div class="row featurette" style="margin-top: -150px;">
          <div class="col-md-7">
            <h2 class="featurette-heading" style="text-transform: uppercase; color: orangered;">Contact</h2>
            <p class="lead">If you would like to volunteer in our events please fill your details here:</p>
            <form action="contact.php" role="form" method="GET">
              <div class="form-group">
                <input type="text" class="form-control" name="first_name" placeholder="First Name*" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name*" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email Address*" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="address" rows="3" placeholder="Address*" required></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="telephone" placeholder="Mobile*" required>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Keep me updated</label>
              </div>
              <button type="submit" class="btn btn-success">Register</button>
            </form>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" style="margin-top: 215px;" src="./img/contactpic.jpg" alt="Contact">
          </div>
        </div>
         <h5 style="margin-top: 10px; margin-bottom: 20px;">For other related queries:</h5>
         <ul class="list-group">
          <li class="list-group-item list-group-item-success"><img src="./icons/mail.png" alt="Mail"> <a href="https:/accounts.google.com" target="_blank" id="contact-link">tequedlabs@gmail.com</a></li>
          <li class="list-group-item list-group-item-success"><img src="./icons/phone.png" alt="Phone"> <a href="tel:8217884293"  id="contact-link">8867903178</a></li>
          <li class="list-group-item list-group-item-success"><img src="./icons/location.png" alt="Location"> Tequed Labs,Bangalore,Karnataka,India<br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d124444.93921601733!2d77.643776!3d12.9138688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1595255894733!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:1px solid black; margin-top: 30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </li>
        </ul>
        </div>
      </div>
      <!--Contact section end-->
        
        <hr>
        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
<footer class="page-footer font-small" style="background-color:darkblue;">

  <!-- Footer Links -->
  <div class="container" id="footer-content">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#about" id="footer-link">About</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#causes" id="footer-link">causes</a>
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
          <a href="#contact" id="footer-link">Contact</a>
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
    /*Pre-loader*/
             window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
/*Pop Over*/
    </script>
  </body>
</html>
