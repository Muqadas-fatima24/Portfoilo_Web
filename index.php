
<!-- <?php
  $home = "active"; 
  $pageTitle = "Home | Portfolio Website";
  include_once "head.php";   
?> -->







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- link for icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- You need to include Font Awesome CSS -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJd44d18zY8nC7eS74tGkF1PZ1/F4e9y7R/eF4Zt6yM5K3T4C1x1O1A1A1A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!-- carousel files -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" /> -->
    <!-- links for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
    <!-- links for css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
    <!-- font families -->
    <link href="https://fonts.cdnfonts.com/css/tex-gyre-adventor" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
     <!-- animate css -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->



    <!-- ------- -->
</head>

<body style="overflow-x: hidden;">

<div class="page-wrapper" id="home-section" >
    <!--  -->
<div class="preloader"></div>
<header class="main-header menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container container-1620 clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="index.html">
                                    <!-- <img src="assets/my-final2.PNG" alt="Logo" title="Logo"> -->
                                     <img src="assets/mynamelogo.png" alt="Logo" title="Logo">
                                    
                                </a>
                                    </div>
                        </div>

                        <div class="nav-outer clearfix mx-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo my-15">
                                        <a href="index.html">
                                            <img src="assets/logo.webp" alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul
                                                style="height: 90px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                <li class="dropdown"><a href="#">MultiPage</a>
                                                    <ul
                                                        style="height: 90px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                        <li><a href="index.html">Home One</a></li>
                                                        <li><a href="index2.html">Home Two</a></li>
                                                    </ul>
                                                    <div class="dropdown-btn"><span class="fas fa-chevron-down"></span>
                                                    </div>
                                                </li>
                                                <li class="dropdown"><a href="#">OnePage</a>
                                                    <ul
                                                        style="height: 90px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                        <li><a href="indexonepage.html">Home One</a></li>
                                                        <li><a href="index2onepage.html">Home Two</a></li>
                                                    </ul>
                                                    <div class="dropdown-btn"><span class="fas fa-chevron-down"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fas fa-chevron-down"></span></div>
                                        </li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li class="dropdown"><a href="#">projects</a>
                                            <ul
                                                style="padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                <li><a href="projects.html">project Grid</a></li>
                                                <li><a href="projects-masonry.html">projects masonry</a></li>
                                                <li><a href="project-details.html">projects details</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fas fa-chevron-down"></span></div>
                                        </li>
                                        <li class="dropdown"><a href="#">blog</a>
                                            <ul
                                                style="height: 90px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                <li><a href="blog.html">blog standard</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fas fa-chevron-down"></span></div>
                                        </li>
                                        <li class="dropdown"><a href="#">pages</a>
                                            <ul
                                                style="padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                <li><a href="404.html">Error Page</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fas fa-chevron-down"></span></div>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns">
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <img src="assets/sidebar-tottler.svg" alt="Toggler">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
</header>

<!-- off canvas -->
<div class="offcanvas hidden-bar offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-body" style="padding: 0px;">
    <div class="inner-box text-center">
                <div class="cross-icon" data-bs-dismiss="offcanvas"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4 class="offcanvas-title" id="offcanvasRightLabel">Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required="">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
  </div>
</div>

<!-- 2 -->
<!-- HERO SECTION -->
<section class="main-hero-area pt-150 pb-80 rel z-1">
            <div class="container container-1620">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-7">
                        <!-- wow fadeInUp delay-0-2s" -->
                        <div class="hero-content rmb-55 fadeInUp1">
                            <span class="h2">Hello, i’m </span>
                            <h1><b>Muqades</b> 
                            </br>
                            web designer</h1>
                            <p>We denounce with righteous indignation dislike demoralized by the charms of pleasure</p>
                            <div class="hero-btns">
                                <a href="#contact" class="theme-btn">Hire Me <i class="fas fa-angle-right"></i></a>
                                <a href="assets/CV.pdf" download class="read-more">Download Resume <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 order-lg-3">
                        <div class="hero-counter-wrap ms-lg-auto rmb-55 fadeInUp2">
                            <div class="counter-item counter-text-wrap counted">
                                <span class="count-text plus" data-speed="3000" data-stop="13">13</span>
                                <span class="counter-title">Years Of Experience</span>
                            </div>
                            <div class="counter-item counter-text-wrap counted">
                                <span class="count-text k-plus" data-speed="3000" data-stop="8">8</span>
                                <span class="counter-title">Project Complete</span>
                            </div>
                            <div class="counter-item counter-text-wrap counted">
                                <span class="count-text percent" data-speed="3000" data-stop="99">99</span>
                                <span class="counter-title">Client Satisfactions</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="author-image-part fadeIn delay-0-3s pati-my">
                            <div class="bg-circle"></div>
                            <div class="img">
                            <!-- <img src="assets/mybest.png" alt="Author"> -->
                             <!-- <img src="assets/inshallah.png" alt="Author"> -->
                              <img src="assets/Untitled.png" alt="Author">
                              <!-- <img src="assets/mytwo.png" alt="Author"> -->
                             <!-- <img src="assets/my bs.png" alt="Author"> -->
                               <!-- <img src="assets/my bs.png" alt="Author"> -->
                                  <!-- <img src="assets/mu.png" alt="Author"> -->
                            </div>
                            <div class="progress-shape">
                                <img src="assets/progress-shape.webp" alt="Progress">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
</section>
</div>


<!-- 2 -->
<section class="about-area rel">
            <div class="for-bgc-black py-130 rpy-100">
                <div class="container">
                    <div class="row gap-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="about-content-part rel z-2 rmb-55">
                                <div class="section-title mb-35 box">
                                    <span class="sub-title mb-15">About Me</span>
                                    <h2>Professional <span>Problem Solutions</span> For Digital Products</h2>
                                    <p>At vero eos et accusamus etodio dignissimos ducimus praesentium voluptatum corrupti quos dolores quas molestias excepturi sint occaecati cupiditate provident qui officia deserunt mollitia animi, id est laborum et dolorum</p>
                                </div>
                                <ul class="list-style-one two-column box">
                                    <li>Branding &amp; Design</li>
                                    <li>Digital Marketing</li>
                                    <li>Web Development</li>
                                    <li>Product Design</li>
                                </ul>
                                <div class="about-info-box mt-25 box">
                                    <div class="info-box-item">
                                        <i class="fas fa-envelope"></i>
                                        <div class="content">
                                            <span>Email Us</span><br>
                                            <a href="mailto:support@gmail.com">support@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <i class="fas fa-phone"></i>
                                        <div class="content">
                                            <span>Make A Call</span><br>
                                            <a href="callto:+000(123)45688">+880 (123) 456 88</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-image-part box" style="animation-delay:.3s;">
                                <img src="assets/about.webp" alt="About Me">
                                <div class="about-btn btn-one box1" style="visibility: visible; animation-delay:.4s;">
                                    <img src="assets/btn-image1.webp" alt="Image">
                                    <h6>Experience Designer</h6>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="about-btn btn-two box1" style="visibility: visible; animation-delay: .5s;">
                                    <img src="assets/btn-image2.webp" alt="Image">
                                    <h6>Mark J. Collins</h6>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="dot-shape">
                                    <img src="assets/about-dot.webp" alt="Shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
</section>

<!-- 3 -->
<section class="resume-area pt-130 rpt-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="big-icon mt-85 rmt-0 rmb-55 box" style="visibility: visible; animation-delay: .2s;">
                            <!-- <i class="flaticon-asterisk-1"></i> -->
                             <i class="fas fa-asterisk"></i>

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9">
                                <div class="section-title mb-60 box" style="visibility: visible; animation-delay:.2s;">
                                    <span class="sub-title mb-15">My Resume</span>
                                    <h2>Real <span>Problem Solutions</span> Experience</h2>
                                </div>
                            </div>
                        </div>
                        <div class="resume-items-wrap">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item box" style="visibility: visible; animation-delay: .3s;">
                                        <div class="icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2021 - Present</span>
                                            <h4>Lead Product Designer</h4>
                                            <span class="company">Google</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item box" style="visibility: visible; animation-delay: .4s;">
                                        <div class="icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2016 - 2018</span>
                                            <h4>Junior UX/UI Designer</h4>
                                            <span class="company">LinkedIn</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item box" style="visibility: visible; animation-delay:.3s;">
                                        <div class="icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2018 - 2021</span>
                                            <h4>Senior Product Designer</h4>
                                            <span class="company">Webflow</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item box" style="visibility: visible; animation-delay: .4s;">
                                        <div class="icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2014 - 2016</span>
                                            <h4>Graphics Designer</h4>
                                            <span class="company">Apple</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
</section>
<!-- services area alert  -->
<section class="services-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-60 box" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title mb-15">Popular Services</span>
                            <h2>My <span>Special Service</span> For your Business Development</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-item box" style="visibility: visible; animation-delay: .2s;">
                            <div class="number">01.</div>
                            <div class="content">
                                <h4>Brand Identity Design</h4>
                                <p>Dignissimos ducimus blanditiis praesen</p>
                            </div>
                            <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item box" style="visibility: visible; animation-delay: .4s;">
                            <div class="number">02.</div>
                            <div class="content">
                                <h4>Website Design</h4>
                                <p>Dignissimos ducimus blanditiis praesen</p>
                            </div>
                            <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item box" style="visibility: visible; animation-delay: .2s;">
                            <div class="number">03.</div>
                            <div class="content">
                                <h4>Mobile Application Design</h4>
                                <p>Dignissimos ducimus blanditiis praesen</p>
                            </div>
                            <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item box" style="visibility: visible; animation-delay: .4s;">
                            <div class="number">04.</div>
                            <div class="content">
                                <h4>Motion Graphics Design</h4>
                                <p>Dignissimos ducimus blanditiis praesen</p>
                            </div>
                            <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item box" style="visibility: visible; animation-delay: .2s;">
                            <div class="number">05.</div>
                            <div class="content">
                                <h4>Website Development</h4>
                                <p>Dignissimos ducimus blanditiis praesen</p>
                            </div>
                            <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item box" style="visibility: visible; animation-delay: .4s;">
                            <div class="number">06.</div>
                            <div class="content">
                                <h4>SEO &amp; Digital Marketing</h4>
                                <p>Dignissimos ducimus blanditiis praesen</p>
                            </div>
                            <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
</section>

<!-- silk area start -->
 <section class="skill-area rel z-1">
            <div class="for-bgc-black pt-130 rpt-100 pb-100 rpb-70">
                <div class="container">
                    <div class="row gap-100">
                        <div class="col-lg-5">
                            <div class="skill-content-part rel z-2 rmb-55 box" style="visibility: visible; animation-delay:.2s;">
                                <div class="section-title mb-40">
                                    <span class="sub-title mb-15">My Skills</span>
                                    <h2>Let’s Explore Popular <span>Skills &amp; Experience</span></h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus to voluptatem accusantium doloremque laudantium, totam rem aperiamc eaque ipsa quae ab illo inventore veritatis</p>
                                </div>
                                <a href="about.html" class="theme-btn">Learn More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="skill-items-wrap">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.2s;">
                                            <img src="assets/skill1.webp" alt="Skill">
                                            <h5>Figma</h5>
                                            <span class="percent">95%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.3s;">
                                            <img src="assets/skill2.webp" alt="Skill">
                                            <h5>Framer</h5>
                                            <span class="percent">83</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.4s;">
                                            <img src="assets/skill3.webp" alt="Skill">
                                            <h5>Figma</h5>
                                            <span class="percent">93%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.5s;">
                                            <img src="assets/skill4.webp" alt="Skill">
                                            <h5>Wordpress</h5>
                                            <span class="percent">84%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.2s;">
                                            <img src="assets/skill5.webp" alt="Skill">
                                            <h5>Figma</h5>
                                            <span class="percent">65%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.3s;">
                                            <img src="assets/skill6.webp" alt="Skill">
                                            <h5>Webflow</h5>
                                            <span class="percent">86%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.4s;">
                                            <img src="assets/skill7.webp" alt="Skill">
                                            <h5>Figma</h5>
                                            <span class="percent">62%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item box" style="visibility: visible; animation-delay:.5s;">
                                            <img src="assets/skill8.webp" alt="Skill">
                                            <h5>Sketch</h5>
                                            <span class="percent">94%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
 </section>


 <!-- skil part2 -->
  <section class="projects-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <!-- 1 -->
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60 box" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title mb-15">Latest Works</span>
                            <h2>Explore My <span>Projects</span></h2>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6">
                        <div class="project-image box2" style="visibility: visible; animation-delay: .2s;">
                            <!-- <img src="assets/project1.webp" alt="Project"> -->
                            <img src="assets/project1.png" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="project-content box1" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title">Website Design</span>
                            <h2><a href="https://muqadescodes.com/Dimension-digital">Dimension Digital Website Clone</a></h2>
                            <p>Recreated the Dimension Digital website with a focus on responsive design and clean UI.</p>
                            <a href="https://muqadescodes.com/Dimension-digital" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6 order-lg-2">
                        <div class="project-image box1" style="visibility: visible; animation-delay: .2s;">
                            <img src="assets/modern_lusia.png" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ms-auto">
                        <div class="project-content box1" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title">Website Design</span>
                            <h2><a href="https://muqadescodes.com/Dr-Lusia">Dr. Lusia Website Clone</a></h2>
                            <p>Developed a responsive Dr. Lusia website clone to strengthen front-end development and design skills.</p>
                            <a href="https://muqadescodes.com/Dr-Lusia" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6">
                        <div class="project-image box2" style="visibility: visible; animation-delay: .2s;">
                            <img src="assets/project3.png" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="project-content box1" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title">Website Design</span>
                            <h2><a href="https://muqadescodes.com/Dr-Meenal">Dr. Meenal Patel Website Clone</a></h2>
                            <p>A modern clone of the Dr. Meenal Patel website emphasizing simplicity, responsiveness, and user-friendly interface.</p>
                            <a href="https://muqadescodes.com/Dr-Meenal" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6 order-lg-2">
                        <div class="project-image box2" style="visibility: visible; animation-delay: .2s;">
                            <img src="assets/project4.png" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ms-auto">
                        <div class="project-content box1" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title">Website Design</span>
                            <h2><a href="https://muqadescodes.com/Russel-street">Russel Street Website Clone</a></h2>
                            <p>Built a responsive clone of the Russel Street website to enhance front-end development and styling expertise.</p>
                            <a href="https://muqadescodes.com/Russel-street" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                 <div class="row align-items-center pb-25">
                    <div class="col-lg-6">
                        <div class="project-image box2" style="visibility: visible; animation-delay: .2s;">
                            <img src="assets/project5.png" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="project-content box1" style="visibility: visible; animation-delay: .2s;">
                            <span class="sub-title">Website Design</span>
                            <h2><a href="https://muqadescodes.com/Kingtondental">Kingtondental Website Clone</a></h2>
                            <p>Crafted a responsive clone of the Kington Dental website with a focus on clean structure and patient-friendly interface.</p>
                            <a href="https://muqadescodes.com/Kingtondental" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- <div class="project-btn text-center box" style="visibility: visible; animation-delay: .2s;">
                    <a href="projects.html" class="theme-btn">View More Projects <i class="fas fa-angle-right"></i></a>
                </div> -->
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
  </section>
<!-- ..contact form. -->
 <section id="contact" class="contact-area pt-95 pb-130 rpt-70 rpb-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-content-part pt-5 rpt-0 rmb-55 box" style="visibility: visible; animation-delay: .2s;">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">Get In Touch</span>
                                <h2>Let’s Talk For your <span>Next Projects</span></h2>
                                <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis</p>
                            </div>
                            <ul class="list-style-two">
                                <li>5+ Years Of Experience</li>
                                <li>Professional Web Designer</li>
                                <li>Mobile Apps Design</li>
                                <li>Custom Design Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form contact-form-wrap form-style-one box" style="visibility: visible; animation-delay: .4s;">
                            <form id="contactForm" class="contactForm" name="contactForm" action="send_email.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Richard D. Hammond" required="" data-error="Please enter your Name">
                                            <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="support@gmail.com" required="" data-error="Please enter your Email">
                                            <label for="email" class="for-icon"><i class="fas fa-envelope"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="+880 (123) 456 88" required="" data-error="Please enter your Phone Number">
                                            <label for="phone_number" class="for-icon"><i class="fas fa-phone"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required="" data-error="Please enter your Subject">
                                            <label for="subject" class="for-icon"><i class="fas fa-text">T</i>
</label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="write message" required="" data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn disabled" style="pointer-events: all; cursor: pointer;">Send Us Message <i class="fas fa-angle-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
 </section>


<!-- ..blog -->
 <section class="blog-area rel z-1">
            <div class="for-bgc-black pt-130 pb-100 rpt-100 rpb-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="section-title text-center mb-60 box" style="visibility: visible; animation-delay: .2s;">
                                <span class="sub-title mb-15">News &amp; Blog</span>
                                <h2>Latest News &amp; <span>Blog</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-item box" style="visibility: visible; animation-delay: .2s;">
                                <div class="image">
                                    <img src="assets/blog1.webp" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta mb-35">
                                        <a class="tag" href="blog.html">Design</a>
                                        <a class="tag" href="blog.html">Figma</a>
                                    </div>
                                    <h5><a href="blog-details.html">Tips For Conductin See Usability Studies</a></h5>
                                    <hr>
                                    <div class="blog-meta mt-35">
                                        <a class="date" href="#"><i class="fas fa-calendar-alt"></i> September 25, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item box" style="visibility: visible; animation-delay: .2s;">
                                <div class="image">
                                    <img src="assets/blog2.webp" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta mb-35">
                                        <a class="tag" href="blog.html">Design</a>
                                        <a class="tag" href="blog.html">Figma</a>
                                    </div>
                                    <h5><a href="blog-details.html">Keyboard-Only Suppor Assistive Technology</a></h5>
                                    <hr>
                                    <div class="blog-meta mt-35">
                                        <a class="date" href="#"><i class="fas fa-calendar-alt"></i> September 25, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>

<!-- .logos.. -->
 <div class="client-logo-area rel z-1 pt-130 rpt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center pt-5 mb-65 box" style="visibility: visible; animation-delay:.2s;">
                            <h6>I’ve <span>1253+ Global Clients</span> &amp; lot’s of Project Complete</h6>
                        </div>
                    </div>
                </div>
                <div class="client-logo-wrap">
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .2s">
                        <img src="assets/client-logo1.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .3s">
                        <img src="assets/client-logo5.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .4s">
                        <img src="assets/client-logo4.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .5s">
                        <img src="assets/client-logo3.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .6s">
                        <img src="assets/client-logo2.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .2s">
                        <img src="assets/client-logo10.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .3s">
                        <img src="assets/client-logo6.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .4s">
                        <img src="assets/client-logo7.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .5s">
                        <img src="assets/client-logo8.webp" alt="Client Logo">
                    </a>
                    <a class="client-logo-item box" href="contact.html" style="visibility: visible; animation-delay: .6s">
                        <img src="assets/client-logo9.webp" alt="Client Logo">
                    </a>
                </div>
            </div>
            <div class="bg-lines background">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
 </div>
<!-- for last contact -->
 <!-- footer -->

 <!-- <section>
<?php include_once "footer.php" ?>
</section> -->

  <footer class="main-footer rel z-1">
            <div class="footer-top-wrap bgc-black pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <div class="footer-widget widget_logo box" style="visibility: visible; animation-delay:.2s;">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="assets/logo.webp" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="footer-widget widget_nav_menu box" style="visibility: visible; animation-delay:.4s;">
                                <h6 class="footer-title">Quick Link</h6>
                                <ul>
                                    <li><a href="services.html">Service</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="services.html#pricing">Pricing</a></li>
                                    <li><a href="about.html#faqs">Faqs</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget widget_newsletter box" style="visibility: visible; animation-delay:.4s;">
                                <form action="#">
                                    <label for="email-address"><i class="far fa-envelope"></i></label>
                                    <input id="email-address" type="email" placeholder="Email Address" required="">
                                    <button>Sign Up <i class="fas fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-widget widget_contact_info box" style="visibility: visible; animation-delay: .6s;">
                                <h6 class="footer-title">Address</h6>
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i> 55 Main Street, 2nd block, New York City</li>
                                    <li><i class="fas fa-envelope"></i> <a href="mailto:support@gmail.com">support@gmail.com</a></li>
                                    <li><i class="fas fa-phone"></i> <a href="callto:+880(123)45688">+880 (123) 456 88</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-5 rpt-25">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright @2025, <a href="index.html">Muqadescodes</a> All Rights Reserved</p>
                            </div>
                       </div>
                       <div class="col-lg-6 text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="https://www.facebook.com/profile.php?id=61582365151043">Facebook</a></li>
                               <li><a href="https://x.com/muqades532003">Twitter</a></li>
                               <li><a href="https://www.instagram.com/muqadescodes">Instagram</a></li>
                               <li><a href="https://www.linkedin.com/in/muqades-fatima/">LinkedIn</a></li>
                           </ul>
                       </div>
                   </div>
                   <!-- Scroll Top Button -->
                    <a class="scroll-top scroll-to-target" href="#" style="display: inline-block;"><span class="fas fa-angle-double-up"></span></a>
                </div>
                <div class="bg-lines background">
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                </div>
            </div>
        </footer>



    <!-- JAVASCRIPT FILES LINK -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
    <!-- wow animation -->
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW().init();
</script> -->

</body>

</html>













