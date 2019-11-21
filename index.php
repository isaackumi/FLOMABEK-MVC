<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - FloMaBek</title>
  <link href="image/icon.png" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap css cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!-- bootstrap js cdn -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

  <!-- Custom styles for this template -->
  <link href="view/css/shop-homepage.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<!-- LOGIN MODAL ---->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login Here</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="email" id="form3" class="form-control validate" name="email">
          <label data-error="wrong" data-success="right" for="form3">Your Email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="password" id="form2" class="form-control validate" name="password">
          <label data-error="wrong" data-success="right" for="form2">Your Password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name='loginBtn' class="btn btn-success">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-custom fixed-top">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="images/icon.png" style="height: 50px; width: 120px;"></a>
       

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i>Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <button class="nav-link " href='#'  data-toggle="modal" data-target="#loginModal">Log In</button>
          </li>

          <li class="nav-item">
            <button class="nav-link " name="signBtn" href='#'  data-toggle="modal" data-target="#registrationModal">Sign Up</button>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4"> FLOMABEK</h1>
        <div class="list-group">
          <a href="view/laptops_loggedOut.php" class="list-group-item">Laptops</a>
          <a href="view/phones_loggedOut.php" class="list-group-item">Phones</a>
          <a href="view/accessories_loggedOut.php" class="list-group-item">Accessories</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/laptop_img/mac.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Hottest Devices!</h5>
              <p>Find New Releases here.</p>
            </div>
          </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/phones_img/s8.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Hottest Devices!</h5>
              <p>Find New Releases here.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/accessories_img/beats.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Hottest Devices!</h5>
              <p>Find New Releases here.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        <!--about us-->
        <div>
          <p class="h1">About us</p>
          <p>The company was established in 2019 by a couple of Ashesi students. Their realization of the difficulty in buying the latest tech goods due to currency fluctuation, low income and high cost of living in the capital, led to the establishment of the business. The primary purpose of the company is to develop very affordable payment plans for the latest technology to fit the budgets of the youth and working class in Accra to improve general modern technology proficiency in Accra.</p>
        </div>


        <!--Meet the team-->
        <div>
          <p class="h1">Meet the Team!</p>
          <p>We are a small team of talented professionals with a wide range of skills and experience. We love what we do, and we do it with passion. We look forward to working with you.</p>
        </div>




        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-custom">
    <div class="container">
      <!--Section: Contact v.2-->
      <section class="mb-4" style="color: #FFFFFF">

          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <label for="name" class="">Your name</label>
                                  <input type="text" id="name" name="name" class="form-control">
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <label for="email" class="">Your email</label>
                                  <input type="text" id="email" name="email" class="form-control">
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <label for="subject" class="">Subject</label>
                                  <input type="text" id="subject" name="subject" class="form-control">
                                  
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">
                                  <label for="message">Your message</label>
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>                                 
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                      <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                  </div>
                  <div class="status"></div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Accra, Ghana</p>
                      </li>

                      <li><i class= "fa fa-phone"></i>
                          <p>+ 01 234 567 89</p>
                      </li>

                      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>support@flomabek.com</p>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->

          </div>

      </section>

      <p style="color: #FFFFFF">Check us out on our social media pages:</p>

      <div>
         <a href="https://www.instagram.com/flomabek/" class="fa fa-instagram"></a>
         <a href="https://twitter.com/flomabek1" class="fa fa-twitter"></a>
         <a href="https://webtech740744964.wordpress.com/" class="fa fa-wordpress"></a>
      </div>
<!--Section: Contact v.2-->
      <p class="m-0 text-center text-white">Copyright &copy; FloMaBek 2019</p>
    </div>
    <!-- /.container -->
  </footer>


<!-- MODAL -->
<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="email" id="orangeForm-name" class="form-control validate" name="email">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your Email</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="tel" id="orangeForm-email" class="form-control validate" name="phoneNumber">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Phone Number</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate" name="address">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Address</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate" name="password">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate" name="password2">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Re-Enter password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Sign up</button>
      </div>
    </div>
  </div>
</div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
