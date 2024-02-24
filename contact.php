<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Contact</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="classes.php">CLASSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shows.php">SHOWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">FEEDBACK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
          </ul>                                          
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
    <!-- header section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
      <div class="container-fluid">
        <h1 class="ballet_text">Testimonial</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div class="contact_section2" >
          <form class="row"  method="POST" action="">
            <div class="col-md-6 padding_left_0">
              <div class="mail_section">
                <input type="" class="mail_text" placeholder="Name" name="name" id="name">
                <input type="" class="mail_text" placeholder="Contactno" name="contact" id="contact">
                <input type="" class="mail_text" placeholder="Email" name="email" id="email">
                <textarea class="form-control" placeholder="Message" id="mag" rows="3" name="msgus"></textarea>
                <div class="send_bt">
                  <input type="submit" class="btn btn-primary" id="btn" name="contactus" value="Contact us">
                </div>
              </div>
            </div>

            <?php
          
              include("mymethods.php");
        
              if(isset($_POST['contactus']))
                {
                  $respose =contactus($_POST);
                  echo $respose;
                }
            ?>

            <div class="col-md-6 padding_0">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text">Adderss</h1>
            <?php
            $res = getdetailsaddress();
            $records= mysqli_num_rows($res);
            if ($records>0)
                {
                  while ($data = mysqli_fetch_array($res))
                    {
                      echo'
                      <div class="map_icon"><img src="images/map-icon.png"><span class="paddlin_left_0">'.$data["address"].'</span></div>
                      <div class="map_icon"><img src="images/call-icon.png"><span class="paddlin_left_0">'.$data["contactno"].'</span></div>
                      <div class="map_icon"><img src="images/mail-icon.png"><span class="paddlin_left_0">'.$data["emailid"].'</span></div>
                      ';
                    }
                }
            ?>
            
          </div>
          
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text">Opeing time</h1>
            <?php
              $res = scheduledetails();
              $records=mysqli_num_rows($res);
              if($records>0)
                {
                  while($data=mysqli_fetch_assoc($res))
                    {

                      echo'
                      <div class="hiphop_text_1">'.$data["formname"].' <span style="text-align: right; float: right;"> '.$data["days"].' '.$data['timming'].' </span></div>                   
                      
                      ';

                    }
                }
            
            ?>
            
          </div>
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text">Newsletter</h1>
            <input type="text" class="Enter_text" placeholder="Enter your Email" name="Enter your Email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->

    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</body>
</html>