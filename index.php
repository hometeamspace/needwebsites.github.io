<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Need Websites</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/f748d773c8.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/logo1.png" alt="image" width="100"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <!--------

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      ------>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1 class="text-uppercase"> We are a global <br>  <span>IT Service Provider</span></h1>
            <p class="lead text-white font-weight-bold"> Need Websites is a leading IT solution provider.
              Our huge range of IT services varies from website design & website development and
              application development to <span>digital marketing.</span> </p>
            <div class="text-center text-lg-start">
              <a href="#contact" class="btn-get-started scrollto">Contact us now</a>
            </div>
          </div>
        </div>

        <!--------
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>

        ---->

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">

        <div class="card shadow">
          <div class="card-header text-white">
        
           
            
            <h5 class = "font-weight-bold"> <i class="fas fa-phone-alt"></i> &nbsp;Let's discuss your project : (08)61024749</h5>
          </div>
          <div class="card-body">
            <h2 class="card-title text-danger">Make an obligation-free inquiry</h2>
        
    <?php
    $a = date('Y');
    if (isset($_POST['submit'])) {
    $to = 'indrashishofficial@gmail.com';
    $subject = "Contact Form :: Need Websites";

    $message ='<body>
<table width="650" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; border:2px solid #1d1d1d;">
  <tr>
    <td height="35px" colspan="2" style="padding-left:10px; border-top:1px solid #1d1d1d; border-bottom:1px solid #1d1d1d;"><p>Hello, ' . $_REQUEST['fname'] . '</p>
    <p>Thanks for your interest in Need Websites, we received your application with below information. We will get back to you soon.<br />

    </p></td>
  </tr>
  <tr>
    <td width="231" height="35px" style="padding-left:10px;">Email :</td>
    <td width="419" height="35px" style="padding-left:10px;">'.$_REQUEST['email'].'</td>
  </tr>
  <tr>
    <td width="231" height="35px" style="padding-left:10px;">Phone No. :</td>
    <td height="35px" style="padding-left:10px;">'.$_REQUEST['phone'].'</td>
  </tr>
  <tr>
    <td height="35px" style="padding-left:10px;">Message :</td>
    <td height="35px" style="padding-left:10px;">'.$_REQUEST['message'].'</td>
  </tr>

  <tr>
    <td height="40" colspan="2" align="center" valign="middle" bgcolor="#1d1d1d" style="font-size:12px; color:#fff;">© '.$a.' Need Websites. All rights reserved.</td>
  </tr>
</table>
</body>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <indrashishofficial@gmail.com>' . "\r\n";



$to1 = $_REQUEST['email'];
$subject1 = "Need Websites-Contact Form :: Confirmation Email";

$message1 = '
<body style="margin:0; padding:0;">
<table width="650" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px";><p>Hi, ' . $_REQUEST['fname'] . '</p>
      <p>Thanks for your enquiry, We will get back to you soon.</p>
      <p>Thanks & regards</p><br>
      <p>Need Websites</p>
      
  </tr>

  <tr>
    <td height="50" align="center" valign="middle" bgcolor="#000000" style="color:#e2cd8d; font: Trebuchet MS, Arial, Helvetica, sans-serif;">'.$a.' by Need Websites.</td>
  </tr>
</table>
</body>'
;

// Always set content-type when sending HTML email
$headers1 = "MIME-Version: 1.0" . "\r\n";
$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers1 .= 'From: <indrashishofficial@gmail.com>' . "\r\n";	


if(mail($to,$subject,$message,$headers) && mail($to1,$subject1,$message1,$headers1)){
//$thankYou="<script>alert('<p style='color:green;font-size:14px;'>Thank you for contacting with us. We will get back to you soon!</p>');";
//echo '<script>window.location.href="attention.php";</script>';
echo "<script>alert('Thank you for contacting with us. We will get back to you soon!'); location.href='index.php';</script>";
} else {
        echo 'no';
    }

	}	
?>
            <form method="POST" action="">
              <div class="form-group">
              
                <input type="text" class="form-control" name="fname" placeholder="Your Name Here*" required>
              </div>
              <div class="form-group">
                
                <input type="tel" class="form-control" name="phone" placeholder="Contact No.*" required>
              </div>
        
        
              <div class="form-group">
                
                <input type="email" class="form-control" name="email" placeholder="Email Address*" required>
              </div>
        
        
              <div class="form-group">
                
                <textarea class="form-control" name="message" rows="3" placeholder="How can we help you?"></textarea>
              </div>
              
              <input type="submit" value="Enquire Now" name="submit" class="btn btn-danger enqr-btn">
        
            </form>
        
        
           
            
            
          </div>
        </div>

      </div>

      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section>------->


    <!---------- services----->

    <section class="services">

      <div class="container">

        <div class="row">

          <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Check our Services</p>
          </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="section-title mb-4 pb-2">
                    
                    <p class="text-muted para-desc mx-auto mb-0 lead">We are renowned <span class="text-danger">website development</span>,<span class="text-danger">website design</span> , <span class="text-danger">SEO agency</span>, <span class="text-danger">social media agency</span>,<span class="text-danger">eCommerce website design company</span>  in <span class="text-danger">Melbourne</span>,<span class="text-danger">Victoria</span> .Need Websites is one of the best company for <span class="text-danger">website design Melbourne</span> ,<span class="text-danger">website design victoria </span>and <span class="text-danger">website development melbourne</span>  and <span class="text-danger">website development victoria</span> in Australia.In the era of digitization, Need Websites provides you the best <span class="text-danger">seo agency melbourne</span>, <span class="text-danger">seo agency victoria</span>, <span class="text-danger">social media agency melbourne</span>, <span class="text-danger">social media agency victoria</span> in digital marketing solutions.The modern world is slowly shifting towards establishing their trades online with <span class="text-danger">Ecommerce Solutions & Need websites can give you the best support on ecommerce website design melbourne, ecommerce website design victoria. </span></p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">
                      <i class="fas fa-file-code"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Web Development</h5>
                        
                        <div class="mt-3">
                            <a href="https://needwebsites.com.au/website-development/" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                      <i class="fas fa-file-code"></i>
                    </div>
                </div>
            </div><!--end col-->
    
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">

                      <i class="fas fa-mobile"></i>

                      <!---
                        <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M15,2c-3.3772,0.00142-6.27155,2.41462-6.88025,5.73651c2.90693-1.59074,6.553-0.52375,8.14374,2.38317c0.98206,1.79462,0.98206,3.96594,0,5.76057c3.8013-0.69634,6.31837-4.3424,5.62202-8.14369C21.27662,4.41261,18.37925,1.99872,15,2z"></path><circle cx="7" cy="17" r="5" class="uim-primary"></circle><path class="uim-tertiary" d="M11,7c-3.08339,0.00031-5.66461,2.33759-5.97,5.40582c2.5358-1.08949,5.47469,0.08297,6.56418,2.61877c0.54113,1.25947,0.54113,2.68593,0,3.94541c3.29729-0.32786,5.7045-3.26663,5.37664-6.56392C16.66569,9.33735,14.08386,6.99972,11,7z"></path></svg></span>

                        ----->
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Mobile Applications</h5>
                        
                        <div class="mt-3">
                            <a href="https://needwebsites.com.au/application-development/" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                      <i class="fas fa-mobile"></i>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">
                      <i class="fas fa-ad"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Digital Marketing</h5>
                        
                        <div class="mt-3">
                            <a href="https://needwebsites.com.au/digital-marketing/" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                      <i class="fas fa-ad"></i>
                    </div>
                </div>
            </div><!--end col-->


            <!-------
            
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">

                      <i class="fas fa-highlighter"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Logo Design</h5>
                        
                        <div class="mt-3">
                            <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                      <i class="fas fa-highlighter"></i>
                    </div>
                </div>
            </div>

            ------>

            <!------
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">
                        <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path><polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon><path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path><path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path></svg></span>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Unique Features</h5>
                        <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                        <div class="mt-3">
                            <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path><polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon><path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path><path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path></svg></span>
                    </div>
                </div>
            </div> end col-->


            <!----------
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">
                        <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path><path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path></svg></span>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Support 24/7</h5>
                        <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                        <div class="mt-3">
                            <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path><path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path></svg></span>
                    </div>
                </div>
            </div> end col-->


        </div><!--end row-->
    </div>
    
    
    </section>


    <!------ /services-------->

    <!-- ======= Features Section
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section> End Features Section -->


    <!-------- partners----->
    <section class="partners">

      <div class="py-10">
        <div class="container">
           <div class="row">
            <div class="section-title" data-aos="fade-up">
              <h2>Partners</h2>
              <p>Check our Partners</p>
            </div>
           </div>
           <div class="row">
              <div class="col-lg-2 col-md-4 col-6">
                 <div class="mb-4 text-center">
                    <img src="assets/img/partners/partner2.png" alt="image" class="img-fluid">
                 </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                 <div class="mb-4 text-center mt-50">
                    <img src="assets/img/partners/partner3.png" alt="image" class="img-fluid">
                 </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                 <div class="mb-4 text-center">
                    <img src="assets/img/partners/partner4.jpg" alt="image" class="img-fluid">
                 </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                 <div class="mb-4 text-center mt-50">
                    <img src="assets/img/partners/partner5.png" alt="image" class="img-fluid">
                 </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                 <div class="mb-4 text-center mt-21">
                    <img src="assets/img/partners/partner6.png" alt="image" class="img-fluid">
                 </div>
              </div>

              <div class="col-lg-2 col-md-4 col-6">
                <div class="mb-4 text-center mt-50">
                   <img src="assets/img/partners/partner7.png" alt="image" class="img-fluid">
                </div>
             </div>
              
           
           </div>
        </div>
     </div>
    </section>
        

    <!----- /partners----->

    <!-- ======= Counts Section
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>-->


    <!---------- counter ------>

    <section class="counter-up">

      <div class="container">
    
        <div class="row">
    
      <div class="four col-md-3">
        <div class="counter-box colored">
          <i class="fas fa-thumbs-up"></i>
          <span class="counter">2147</span>
          <p>Happy Customers</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box">
          <i class="fas fa-users"></i>
          <span class="counter">3275</span>
          <p>Registered Members</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box">
          <i class="fa  fa-shopping-cart"></i>
          <span class="counter">289</span>
          <p>Happy Clients</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box">
          <i class="fa  fa-user"></i>
          <span class="counter">1563</span>
          <p>Projects</p>
        </div>
      </div>
      </div>	
    </div>

 
    </section>

    <!-------- /counter--------->

    <!-- ======= Details Section
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
              <li><i class="bi bi-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
            </ul>
            <p>
              Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p>
              Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
            <p>
              Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
            </p>
            <p>
              Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="bi bi-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

      </div>
    </section>  End Details Section -->

    
   
 

    <!--------- portfolio---->

    <section class="portfolio">
      <div class="container">

        <div class="row">

          <div class="section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check our Gallery</p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-1.jpg" class="card-img-top" alt="image">
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-2.jpg" class="card-img-top" alt="...">


              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-3.jpg" class="card-img-top" alt="...">
              
              
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>


          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-4.jpg" class="card-img-top" alt="...">
              
              
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>


          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-5.jpg" class="card-img-top" alt="...">
              
              
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>


          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-6.jpg" class="card-img-top" alt="...">
              
              
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>


          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-7.jpg" class="card-img-top" alt="...">
              
              
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>




          <div class="col mb-4">
            <div class="card">
              <img src="assets/img/gallery/gallery-8.jpg" class="card-img-top" alt="...">
              
              
              <div class="card-footer bg-danger">
               
                <a href="https://needwebsites.com.au/portfolio/" class="btn btn-view btn-outline-light">View More</a>
              </div>


            </div>
          </div>




        </div>


      </div>

      
    </section>


    <!------- /portfolio------>

    <!--
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> End Testimonials Section -->

    <!-- 
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!--
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- ======= F.A.Q Section
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> End F.A.Q Section -->

    <!-- ======= Contact Section 
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4 class="text-danger">Location: India</h4>
                <p class="text-muted">Webel IT Park, 3rd Floor, Newtown, Rajarhat,Kolkata: 700156, India</p>

             
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4 class="text-danger">Email:</h4>
                <p><a href="#" class="text-muted">sales@need-websites.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4 class="text-danger">Call:</h4>
                <p><a href="#" class="text-muted">+91 33 2986 0264 </a></p>
              </div>

            </div>
            

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>


      </div>
    </section>  End Contact Section -->

  


    <!---------- contact ---------->

    
    <section class="Material-contact-section section-padding section-dark" id="contact">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us for a <b>Free</b> quote</p>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 mt-3 contact-widget-section2 wow animated fadeInLeft text-center" data-wow-delay=".2s">
                <p> Need Websites is a leading IT solution provider.
                  Our huge range of IT services varies from website design & website development and
                  application development to  digital marketing.</p>

                 

                  <!-------

                <div class="find-widget">

                 
                 Company:  <a href="https://hostriver.ro">HostRiver</a>
                </div>
                ----->


                <div class="aus-contact">

                  <h5 class="font-weight-bold text-danger"><u>Australia Office</u></h5>


                  <div class="find-widget">
                    Address: <span class="text-danger"> P.O Box 1146, Wangara, WA 6947</span> 
                   </div>
                   <div class="find-widget">
                     Phone:  <a href="#">(08)61024749  </a>
                   </div>

               
                   
                   <div class="find-widget">
                     Email:  <a href="#">inquiry@needwebsites.com.au</a>
                   </div>

                </div>
             
              </div>
              <!-- contact form 
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>

              ----->

              <!----------

              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                

                <div class="card shadow-sm">
  <div class="card-header text-white">

   
    
    <h5 class = "font-weight-bold"> <i class="fas fa-phone-alt"></i> &nbsp;Let's discuss your project : (08)61024749</h5>
  </div>
  <div class="card-body">
    <h2 class="card-title text-danger">Make an obligation-free inquiry</h2>


    <form>
      <div class="form-group">
      
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name Here*" required>
      </div>
      <div class="form-group">
        
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Contact No.*" required>
      </div>


      <div class="form-group">
        
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Address*" required>
      </div>


      <div class="form-group">
        
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="How can we help you?"></textarea>
      </div>

    </form>


    <a href="#" class="btn btn-danger enqr-btn">Enquire Now</a>
  </div>
</div>
              </div>

              ----->

          </div>
      </div>
    </section>


    <!----------- /contact-------->

  </main><!-- End #main -->

  <!-- ======= Footer 
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info bg-transparent">
              <img src="assets/img/logo1.png" alt="image" class="img-fluid">
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Need Websites</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
         All the links in the footer should remain intact.
         You can delete the links only if you purchased the pro version. 
         Licensing information: https://bootstrapmade.com/license/ 
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
        Designed by <a href="#">Need Websites</a>
      </div>
    </div>
  </footer>End Footer -->


  <!------- footer----->

  <footer class="footer d-flex flex-column pt-3">

    <div id="page-content">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <img src="assets/img/logo1.png" alt="image" class="img-fluid">

            <!------
            <p class="lead text-white-50">Use just two Bootstrap utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>

            ------>
          </div>
        </div>
      </div>
    </div>

    </footer>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 copy-footer text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; Need Websites</small>
      </div>
  </footer>


  <!----- /footer-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>

$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
    $(this).text(Math.ceil(now));
}
});
});

});  


  </script>

</body>

</html>