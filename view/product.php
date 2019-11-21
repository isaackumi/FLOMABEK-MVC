<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Specifications - FloMaBek</title>
  <link href="../images/icon.png" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

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
            <a class="nav-link" href="index.html"><i class="fa fa-fw fa-home"></i>Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="view/login.php">Log In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="view/sign_up.php">Sign Up</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <span class="border border-primary">
  <h2>Dell XPS</h2>

  

  <form>
    <table border="1">
      <tr>
        <div class="radio"> <h4>Colour</h4>
          <label><input type="radio" name="optradio" checked>Black</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio">White</label>
        </div>
      </tr>

      <tr>
        <div class="radio"> <h4>Storage</h4>
          <label><input type="radio" name="optradio" checked>Below 500gb</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio">Above 500gb </label>
        </div>
      </tr>

      <tr>
        <div class="radio"> <h4>Size</h4>
          <label><input type="radio" name="optradio" checked>11 inches</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio">13 inches</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio">15 inches</label>
        </div>
      </tr>
      
    </table>
    <div>
      <h4>  Price: GHS3400.00</h4>
    </div>
    <button type="submit" class="btn btn-primary">Add to Cart</button>
  </form>
  </span>

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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
