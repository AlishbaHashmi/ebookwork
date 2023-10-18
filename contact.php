<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <?php
  include('header.php');

  ?>
    <!--================ End Header Menu Area =================-->

  

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
        <div
          id="mapBox"
          class="mapBox"
          data-lat="40.701083"
          data-lon="-74.1522848"
          data-zoom="13"
          data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
          data-mlat="40.701083"
          data-mlon="-74.1522848"
        ></div>
        <center>
    <h1>CONTACT HERE</h1>
</center>
<br>
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
              <i class="fa-solid fa-location-dot"></i>
                <h6>Karachi, Pakistan</h6>
                <p>DHA phase 11</p>
              </div>
              <div class="info_item">
              <i class="fa-solid fa-phone-volume"></i>
                <h6><a href="#">00 (440) 9865 562</a></h6>
                <p>Mon to sun 9am to 9pm</p>
              </div>
              <div class="info_item">
              <i class="fa-solid fa-globe"></i>     
                <h6><a href="#">onlinebookstore@gmail.com</a></h6>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
      
          <div class="col-lg-9">
          <form class="contact" action="" method="">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="FirstName" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name" name="LastName" required>
                 </div>
            </div>
            <div class="form-group row">
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required>
            </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Type msg" name="msg" required>
                 </div>
            </div>
            
           
            <hr>
                                
</form>
<input type="submit" class="btn btn-warning " name="register" >
      </div>
      
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <?php
  include('footer.php');
  ?>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
