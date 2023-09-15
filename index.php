<?php
include('db_con/db_conn.php');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saurav Thakur</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/icon2.2.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="white-version home-sticky spybody" data-spy="scroll" data-bs-target=".navbar-example2" data-offset="150">

    <!-- start Header -->
    <div class="d-none d-xl-block">
        <header class="rn-header-area d-flex align-items-start flex-column left-header-style">
            <div class="logo-area">
                <a href="index.php">
                    <img src="assets/images/logo/me_laptop.png" alt="personal-logo">
                </a>
            </div>
            <nav id="sideNavs" class="mainmenu-nav navbar-example2 onepagenav">
                <ul class="primary-menu nav nav-pills">
                    <li class="nav-item current"><a class="nav-link smoth-animation-two" href="#home"><i
                                data-feather="home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#features"> <i
                                data-feather="briefcase"></i>Services</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#portfolio"><i
                                data-feather="layers"></i>Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#resume"><i
                                data-feather="users"></i>Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#contacts"><i
                                data-feather="message-circle"></i>Contact</a></li>
                </ul>
            </nav>
            <div class="footer">
                <div class="social-share-style-1">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="https://www.linkedin.com/in/saurav--thakur/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
    <!-- start Header end -->

    <!-- Mobile Header Bar start  -->
    <div class="header-style-2 d-block d-xl-none">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo/pic.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-right text-end">
                    <div class="hamberger-menu">
                        <i id="menuBtn" class="feather-menu humberger-menu"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header Bar end  -->

    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.php">
                        <img src="assets/images/logo/me_laptop.png" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation-two" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#features">Services</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#contacts">Contact</a></li>
                </ul>
                <!-- social media area start -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="https://www.linkedin.com/in/saurav--thakur/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- social media area end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->

    <main class="page-wrapper-two">

        <!-- start slider in the main section -->
        <section id="home" class="slider-style-6 web-developer height--100 rn-section-gap align-items-center with-particles bg_image--11 bg_image" data-black-overlay="5">
            <div id="particles-js"></div>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="banner-inner text-center">
                            <h1 class="fs--100">SAURAV THAKUR</h1>
                            <!-- type fix headline start-->
                            <span class="cd-headline clip is-full-width">
                                <span>I am a</span>
                            <!-- ROTATING TEXT -->
                            <span class="cd-words-wrapper">
                                    <b class="is-visible">Software Developer.</b>
                                    <b class="is-hidden">Software Engineer.</b>
                                    <b class="is-hidden">Debugger and Tester.</b>
                                    <b class="is-hidden">Web Developer.</b>
                                </span>
                            </span>
                            <!-- type headline end -->
                            <div class="button-area">
                                <a class="rn-btn shadow-none" href="#contacts"><span>CONTACT ME</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider area End -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap " id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Services</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">
                    <?php
                        $query="SELECT * FROM `services` where status = '1'";
                        $result=mysqli_query($connect,$query);
                        while($rs=mysqli_fetch_assoc($result)){
                    ?>
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service" data-bs-toggle="modal" data-bs-target="#serviceModal"  onclick="serviceModal(<?php echo $rs['id'];?>)">
                            <div class="inner">
                                <div class="icon">
                                <img src="assets/admin_assets/service_img/<?php echo $rs['services_icon'];?>" width="100" height="120" >
                                </div>
                                <div class="content">
                                    <h4 class="title"><?php echo $rs['services_name'];?></h4>
                                    <p class="description"><?php echo $rs['services_description'];?></p>
                                    <a class="read-more-button" ><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link"></a>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <?php } ?>
                   
                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->
                    <?php
                    $query="SELECT * FROM `portfolio` where status = '1'";
                    $result=mysqli_query($connect,$query);
                    while($rs=mysqli_fetch_assoc($result)){
                    ?>
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="portfolioModal(<?php echo $rs['id'];?>)">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="assets/admin_assets/portfolio_img/<?php echo $rs['portfolio_icon'];?>" width="350" height="300" >
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a class="title"><?php echo $rs['portfolio_name'];?></a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a><?php echo $rs['tag_line'];?><i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php } ?>
                    <!-- End Single Portfolio -->
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2015 - 2024</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Secondary  Schooling</h4>
                                                                    <span>Govt. Boys Senior Secondary School (2013 - 2015)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>6/10</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">I completed my secondary schooling, demonstrating a strong academic foundation and a commitment to learning. Throughout my time in secondary school, I actively participated in extracurricular activities, fostering teamwork and leadership skills.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Senior Secondary </h4>
                                                                    <span>Servodya Bal Vidyalya No-01 (2015 - 2017)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>6.5/10</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">I successfully completed my senior secondary education, demonstrating a solid understanding of the curriculum and meeting the necessary requirements for graduation. During this time, I focused on subjects that aligned with my interests and career goals, preparing me for further academic pursuits or entry into the workforce.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <div>
                                                <span class="subtitle">&nbsp;</span>
                                                <h4 class="maintitle">&nbsp;</h4>
                                                </div>
                                                <div class="experience-list">
                                                      <!-- Start Single List  -->
                                                      <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Electronics and Communication</h4>
                                                                    <span>Pusa Instituite of Technology (2017 - 2019)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">Despite my Diploma in Electronics and Communication, I have developed a deep interest in computer science and programming. I am actively expanding my knowledge and skills in computer-related subjects to pursue a career in software development or other computer-focused roles.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> B.Tech in Information Technology</h4>
                                                                    <span>Bhagwan Parshuram Institute of Technology (2020 - 2024)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">I am currently pursuing Bachelor of Technology in Information Technology, actively developing my knowledge and skills in areas such as software development, database management and web development. This degree program is equipping me with the expertise needed to excel in the dynamic field of Information Technology..</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <!-- <span class="subtitle">Features</span> -->
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML5</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Bootstrap</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Canva</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <!-- <span class="subtitle">Features</span> -->
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">jquery</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                      <!-- Start Single Progress Charts -->
                                                      <div class="progress-charts">
                                                        <h6 class="heading heading-h6">AJAX</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">MySQL</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHP</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Codeigniter</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">SOFTWARE</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2021-till</span>
                                                <h4 class="maintitle">Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Web Development</h4>
                                                                    <!-- <span>BSE In CSE (2004 - 2008)</span> -->
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">With a solid foundation in HTML, CSS, and JavaScript, I have developed dynamic and user-friendly websites for  over the past one years. I am skilled in front-end frameworks like Bootstrap, and have experience working with back-end technologies such as mysql and PHP and I am skilled in Back-end frameworks like CodeIgniter.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">&nbsp;</span>
                                                <h4 class="maintitle">&nbsp;</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Web Portals</h4>
                                                                    <!-- <span>Job at Rainbow-Themes (2008 - 2016)</span> -->
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">Leveraging our expertise in back-end technologies such as PHP, And using back-end frameworks like CodeIgniter, I've developed robust and scalable web portals that handle complex data processing and database management. These portals integrate with APIs, third-party services and include advanced functionalities such as user management and real-time notifications.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
       
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Saurav Thakur</h4>
                                <span>Software Developer</span>
                            </div>
                            <div class="description">
                                <p>I am a skilled software developer with expertise in designing and developing robust applications that meet client needs and deliver exceptional user experiences. Connect with me via and call in to my account.
                                </p>
                                <span class="phone">Phone: <a href="tel:07291979454">+91-7291979454</a></span>
                                <span class="mail">Email: <a href="mailto:sauravthakurzxcv@gmail.com">sauravthakurzxcv@gmail.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/saurav--thakur/"><i data-feather="linkedin"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="row" id="contact-form">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="number">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <!-- <a href="admin/thanku_page.php"> -->
                                        <button name="submit" type="submit"  class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                        <!-- </a> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        
        <!-- Start Footer Area -->
        <div class="rn-footer-area rn-section-gap section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-area text-center">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                            <p class="description mt--30">© 2022. All rights reserved by <a target="_blank" href="#">Saurav Thakur.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="" id="portfolioicon" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3 id="portfoliohd"> </h3>
                                    <p class="mb--30" id="portfolioname"></p>
                                    <p class="mb--30" id="portfoliodesc"></p>

                                </div>
                            <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
          <!-- Modal service Body area Start -->
          <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="" alt="slide"  id="serviceicon">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3 id="servicehd"> </h3>
                                    <p class="mb--30" id="servicedesc">
                                        
                                    </p>
                                </div>
                            <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->
    </main>

    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>

    <script>
        particlesJS('particles-js',

            {
                "particles": {
                    "number": {
                        "value": 20,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": ["#ffffff", ]
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 4
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.8,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 4,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": false,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 800,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }

        );
        
        function serviceModal(dataId){
            $.ajax({ 
                // alert("oops");
                type:"POST",
                url:"service_query.php",
                data:{dataId:dataId},
                success:function(response){
                    // console.log(text(JSON.stringify(response.id)));
                    var result = JSON.parse(response);
                    // console.log(test.id);
                    $("#servicedesc").text(result.services_description);
                    $("#serviceicon").attr('src','assets/admin_assets/service_img/'+result.services_icon);
                    $("#servicehd").text(result.services_name);

                }
            });
        }

        function portfolioModal(arrow){
            $.ajax({
                type:"POST",
                url:"portfolio_query.php",
                data:{arrow:arrow},
                success:function(response){
                    var result = JSON.parse(response);
                    $("#portfolioname").text(result.portfolio_name);
                    $("#portfoliohd").text(result.tag_line);
                    $("#portfolioicon").attr('src','assets/admin_assets/portfolio_img/'+result.portfolio_icon);
                    $("#portfoliodesc").text(result.description);
                }
            });
        }

        $(document).ready(function(){
            $("#contact-form").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"app_pages/admin/contact_insert.php",
                    data:$(this).serialize(),
                    success:function(data){
                        // alert(data);
                        if(data=="success"){
                            swal({title: "Thankyou!",text: "Submitted! successfully",icon: "success"}).then(function() {window.location ="index.php";});
                        }else{
                            swal({title: "sorry!",text: "Not Submitted!",icon: "error"}).then(function() {window.location ="index.php";});
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>


