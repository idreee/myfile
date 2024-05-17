<?php 
session_start();
require_once "admin/db.php";
?>
<head>
<style>
  
/* Header Styles */
header {
    background-color: #f0f0f0; 
    padding: 50px 0; 
    text-align: center; 
}

h1 {
    font-size: 36px; 
    color: #333;
    margin-bottom: 20px; 
}

p {
    font-size: 18px; 
    color: #666; 
    margin-bottom: 30px; 
}

/* About Section Styles */



/* Heading styles */
.heading {
  margin-bottom: 3rem;
}

.heading span {
  text-transform: uppercase;
  font-size: 4rem;
  border-bottom: var(--border-bold); 
}

/* Biography paragraph styles */
.biography p {
  margin: 1rem auto;
  max-width: 70rem;
  line-height: 1.5;
  font-size: 1.7rem;
}

/* Bio details styles */
.bio {
  margin: 1rem 0;
}

.bio h3 {
  padding: 1rem 1.5rem;
  display: inline-block;
  margin: 1rem;
  background-color: white;
  border: var(--border-light); 
  word-break: break-all;
  font-size: 2.5rem;
  font-weight: normal;
  text-transform: none;
}

.bio h3 span {
  font-weight: lighter;
}

/* Button styles */
.btn {
  display: inline-block;
  padding: 1rem 2rem;
  margin-top: 2rem;
  font-size: 1.5rem;
  text-decoration: none;
  background-color: #007bff; 
  color: white;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3; 
}

/* Biography paragraph styles */
.biography p {
  margin: 1rem auto;
  max-width: 70rem;
  line-height: 1.8;
  font-size: 1.6rem;
  color: #555; 
  padding: 2rem; 
  background-color: #f4f4f4; 
  border-radius: 10px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease; 
}

.biography p:hover {
  transform: translateY(-5px);
}

/* Optional: Add a border */
.biography p::before {
  content: "";
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  border: 2px solid #007bff; 
  border-radius: 12px; 
  opacity: 0; 
  transition: opacity 0.3s ease;
}

.biography p:hover::before {
  opacity: 1; 
}

.services {
  padding: 50px 0;
  background-color: #f8f9fa;
}

/* Style the heading */
.heading {
  text-align: center;
  margin-bottom: 40px; 
}

.heading span {
  font-size: 32px;
  font-weight: 700;
  color: #333; 
}


.box-container {
  text-align: center;
  white-space: nowrap; 
  overflow-x: auto; 
}


.box {
  display: inline-block; 
  text-align: center;
  background-color: #fff; 
  padding: 20px; 
  border-radius: 8px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); 
  transition: all 0.3s ease;
  width: 250px; 
  margin: 0 10px;
}

.box:hover {
  transform: translateY(-5px);
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
}


.box i {
  font-size: 36px;
  color: #007bff; 
  margin-bottom: 15px; 
}


.box h3 {
  font-size: 20px; 
  font-weight: 700;
  color: #333; 
  margin-bottom: 10px;
}


.box p {
  font-size: 14px; 
  color: #666; 
}

.services {
  padding: 50px 0;
  background-color: #f8f9fa; 
}


.heading {
  text-align: center;
  margin-bottom: 40px; 
}

.heading span {
  font-size: 32px;
  font-weight: 700;
  color: green; 
}


.box-container {
  text-align: center;
  white-space: nowrap; 
  overflow-x: auto; 
}


.box {
  display: inline-block; 
  text-align: center;
  background-color: #fff; 
  padding: 20px; 
  border-radius: 8px; 
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); 
  transition: all 0.3s ease;
  width: 250px; 
  margin: 0 10px; 
}


.box:hover {
  transform: translateY(-5px);
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
}


.box i {
  font-size: 36px; 
  color: #007bff; 
  margin-bottom: 15px; 
}


.box h3 {
  font-size: 20px; 
  font-weight: 700;
  color: #333; 
  margin-bottom: 10px;
}


.box p {
  font-size: 14px; 
  color: #666; 
}
/* About Section Styles */
#about {
    padding: 50px 0;
    background-color: #f9f9f9; 
    border: 2px solid #ccc; 
    border-radius: 10px; 
}

.profile-pic {
    width: 200px;
    height: 200px;
    border-radius: 50%; 
    border: 2px solid #ccc; 
}

/* Main Column Styles */
.main-col {
    padding-left: 20px; 
}


#about_me {
    margin-top: 20px; 
}


.contact-details {
    margin-bottom: 20px; 
}

/* Download Button Styles */
.download a.button {
    background-color: #007bff; 
    color: #fff; 
    padding: 10px 20px; 
    border-radius: 5px; 
    text-decoration: none;
    display: inline-block; 
}

.download a.button:hover {
    background-color: #0056b3; 
}
.banner-text {
  padding: 50px;
  background-color: gray;
  border: 2px solid #007bff; 
  border-radius: 10px; 
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  animation: moveBannerText 2s ease-in-out infinite alternate; 
}


@keyframes moveBannerText {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(10px); 
  }
}
.home {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 50px;
    background: linear-gradient(to right, red, blue);
}

.image {
    max-width: 50%;
    margin-right: 50px;
    animation: slideInLeft 2s ease-in-out;
}

.image img {
    width: 80%;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

.content {
    max-width: 50%;
    animation: fadeInRight 2s ease-in-out;
    border: 2px solid #007bff; /* Add border */
    border-radius: 10px; /* Add border radius */
    padding: 20px; /* Add padding */
    background-color: #f8f9fa; /* Add background color */
}

.content h3 {
    font-size: 2.5rem;
    color: #333;
    animation: fadeInLeft 2s ease-in-out;
}

.content span {
    font-size: 1.2rem;
    color: #007bff;
    animation: fadeInLeft 2s ease-in-out;
}

.content p {
    font-size: 2rem;
    color: #555;
    margin-top: 20px;
    animation: fadeInLeft 2s ease-in-out;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

@keyframes slideInLeft {
    from {
        transform: translateX(-50%);
    }
    to {
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

#testimonials {
  margin: 0;
  padding: 0;
  font-family: "montserrat", sans-serif;
}

.testimonials {
  padding: 40px 0;
  background: linear-gradient(to right, red, blue);
  color: #434343;
  text-align: center;
}

.inner {
  max-width: 1200px;
  margin: auto;
  overflow: hidden;
  padding: 0 20px;
}

.border {
  width: 160px;
  height: 10px;
  background: #6ab04c;
  margin: 26px auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.col {
  flex: 0 0 33.33%;
  max-width: 33.33%;
  box-sizing: border-box;
  padding: 15px;
}

.testimonial {
  background: #fff;
  padding: 30px;
}

.testimonial img {
  width: 30%;
  height: 30%;
  border-radius: 50%;
  margin: 0 auto 20px; /* Center the image */
}

.name {
  font-size: 20px;
  text-transform: uppercase;
  margin: 20px 0;
}

.stars {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center; /* Center stars horizontally */
}

.star-icon {
  color: #FFD700;
  font-size: 30px;
  margin: 0 5px; /* Add space between stars */
}
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

.testimonial {
  animation: slideInFromLeft 0.5s ease-in-out forwards;
}
@keyframes moveFrame {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(50px); /* Adjust the distance the frame moves */
  }
  100% {
    transform: translateX(0);
  }
}

.border {
  width: 160px;
  height: 5px;
  background: #6ab04c;
  margin: 26px auto;
  animation: moveFrame 4s ease infinite; /* Adjust duration and timing function */
}

/* Reset default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Style for the portfolio section */
.portfolio {
  padding: 50px;
  background-color: #f0f0f0;
}

/* Heading style */
.heading {
  text-align: center;
  margin-bottom: 30px;
}

.heading span {
  color: #333;
}

/* Box container style */
.box-container {
  display: flex;
  flex-wrap: nowrap; /* Prevent wrapping */
  overflow-x: hidden; /* Hide overflow */
}

/* Box style */
.box {
  width: 300px;
  margin: 20px;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  text-align: center;
  animation: slide 5s infinite alternate; /* Apply animation */
}

/* Image style */
.box img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 15px;
}

/* Title style */
.box h3 {
  color: #333;
  font-size: 20px;
  margin-bottom: 10px;
}

/* Date style */
.box span {
  color: #999;
  font-size: 16px;
}

/* Animation */
@keyframes slide {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(50px); /* Adjust distance of movement */
  }
}

.port {
  padding: 50px;
  background-color: gray;
}

.portfolio-content {
  display: grid;
  grid-template-columns: repeat(3, 2fr);
  gap: 2rem;
  margin-top: 5rem;
}

.row {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  cursor: pointer;
}

.row img {
  width: 100%;
  border-radius: 8px;
  display: block;
  transition: transform 0.5s;
}

.layer {
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  transition: height 0.5s;
  transform: translateY(100%);
}

.layer h5 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #fff;
}

.layer p {
  font-size: 14px;
  line-height: 1.5;
  color: #fff;
}

.layer i {
  font-size: 20px;
  color: #fff;
  margin-top: 20px;
}

.row:hover img {
  transform: scale(1.05);
}

.row:hover .layer {
  transform: translateY(0);
}

/* Additional styling for links */
.layer a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s;
}

.layer a:hover {
  color: #00a6ff;
}
/* Styling for the main text container */
.main-text {
  text-align: center; /* Center align the text */
}

/* Styling for the heading inside main text */
.main-text h2 {
  font-family: Arial, sans-serif; /* Choose a suitable font family */
  font-size: 24px; /* Adjust font size as needed */
  color: #333; /* Set heading color */
  margin-bottom: 20px; /* Add some space below the heading */
}

/* Styling for the span inside the heading */
.main-text h2 span {
  font-weight: bold; /* Make the text bold */
  color: #00f; /* Change color of the span text */
}

.row.education {
    max-width: 800px;
    margin: 0 auto;
}
/* Apply a horizontal layout to the boxes */
.hr {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Style for the image containers */
.zurag {
  width: 100%;
  margin: 0 auto;
}

/* Style for individual image boxes */
.box {
  width: 20%; /* Each box occupies 20% of the container width */
}

/* Style for images inside the boxes */
.box img {
  width: 100%; /* Make the images fill the entire box */
  display: block; /* Remove any default inline spacing */
  border: 2px solid #ddd; /* Add a border around the images */
  border-radius: 5px; /* Add some border radius for rounded corners */
  margin-bottom: 10px; /* Add some spacing between images */
}

</style>
</head>
<!doctype html>
<html class="no-js" lang="en">


<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="front_end_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="front_end_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="front_end_assets/css/animate.min.css">
        <link rel="stylesheet" href="front_end_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="front_end_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="front_end_assets/css/flaticon.css">
        <link rel="stylesheet" href="front_end_assets/css/slick.css">
        <link rel="stylesheet" href="front_end_assets/css/aos.css">
        <link rel="stylesheet" href="front_end_assets/css/default.css">
        <link rel="stylesheet" href="front_end_assets/css/style.css">
        <link rel="stylesheet" href="front_end_assets/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none">Portfolio</a>
                                    <a href="index.php" class="navbar-brand s-logo-none">Portfolio</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a class="nav-link" href="#home">Нүүр</a></li>
    <li class="nav-item"><a class="nav-link" href="#about">Миний тухай</a></li>
    <li class="nav-item"><a class="nav-link" href="#service">Үйлчилгээ</a></li>
    <li class="nav-item"><a class="nav-link" href="#portfolio">Прожектууд</a></li>
    <li class="nav-item"><a class="nav-link" href="#contact">Холбоо барих</a></li>
</ul>

                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
<br>
<br>
            <section class="home" id="home">
    <div class="image">
        <img src="mi.jpg" alt="">
    </div>
    <div class="content">
        <h3>Сайн уу, намайг Идэрмөнх гэдэг</h3>
        <span>Вэб дизайнер ба хөгжүүлэгч</span>
        <p>Намайг Сарангэрэл Идэрмөнх гэдэг. 2003 оны 9 сарын 25 төрсөн 2021 онд би ахлах сургуулиа төгссөн Оюутан байх хугацаандаа IT чиглэлээр олон сонирхолтой төслүүдэд гар бие оролцож илүү ихийг мэдэж авсан нь аз завшаан юм.
        </p>
    </div>
</section>
<br>
<section class="hr">
<div class="zurag">
    <div class="box">
         <img src="bi1.jpg">
    </div>
    <div class="box">
         <img src="bi2.jpg">
    </div>
    <div class="box">
         <img src="bi3.jpg">
    </div>
    <div class="box">
         <img src="bi4.jpg">
    </div>
    </section>
    <br>
    <br>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                


                 <!--side view and contact information area  -->

                <?php 
                  $information_query = $dbcon->query("SELECT * FROM contact_information");
                  $contact_information = $information_query->fetch_assoc();
                ?>

                <!-- end contact information -->

                <!-- about me query start -->

                <?php 
                  $about_me_query = $dbcon->query("SELECT * FROM about_me");
                  $about_me = $about_me_query -> fetch_assoc();

                ?>

                <!-- about me query end  -->
                

                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$contact_information['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$contact_information['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$contact_information['email']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$about_me['twitter_link']?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a>
                    <a href="<?=$about_me['linkedin_link']?>"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>
              
            <!-- php code for about me -->

           <!-- you can find about me query  in side view part -->

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">Сайн уу?</h6>
                                <h2 style="font-size: 3em;" class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$about_me['name']?> </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$about_me['intro']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$about_me['twitter_link']?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$about_me['linkedin_link']?>"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="admin/image/profile/<?=$about_me['photo']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="front_end_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="front_end_assets/img/banner/banner_img3.jpg" style="height: auto; width:15cm;"me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
    <span>Танилцуулга</span>
    <h2>Бидний тухай</h2>
</div>
<div class="about-content">
    <p><?=$about_me['details']?></p>
    <h3>Боловсрол:</h3>
</div>

                          


                            <!-- Education Item -->

                            <!-- php code for education -->

                            <?php 
                            $education_query = $dbcon->query("SELECT * FROM education_informations");
                            foreach ($education_query as $education) {
                            ?>





                            <div class="education">
                                <div class="year"><?=$education['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$education['degree_name']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end foreach -->
                          <?php } ?>
                            <!-- End Education Item -->
                            
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->

            <!-- php code for services area -->

            <?php

            $services_query = $dbcon->query("SELECT * FROM services ORDER BY id DESC LIMIT 6");

            ?>

            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
    <span>БИ ЮУ ХИЙДЭГ ВЭ?</span>
    <h2>Үйлчилгээ ба шийдэл</h2>
</div>

                        </div>
                    </div>
					<div class="row">

              <!-- foreach code -->

              <?php
               foreach ($services_query as $service) {
                
              ?>

						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$service['icon']?>"></i>
								<h3><?=$service['title']?></h3>
								<p><?=$service['some_text']?></p>
							</div>
						</div>

            <!-- foreach end -->
          <?php } ?>
						
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
    <span>Төслийн үзэл</span>
    <h2>Миний сүүлд хийсэн сайн ажилууд</h2>
</div>

                        </div>
                    </div>

                    
                    <div class="row">

            <!-- php code for my best works -->
                    <?php
                      $my_best_works_query = $dbcon->query("SELECT * FROM my_best_works ORDER BY id DESC LIMIT 6");
                      foreach($my_best_works_query as $row){
                    ?>

                      <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
      								<div class="speaker-thumb">
      									<img src="admin/image/my_best_works/<?=$row['photo']?>" alt="img" >
      								</div>
      								<div class="speaker-overlay">
      									<span><?=$row['catagory']?></span>
      									<h4><a href="portfolio-single.html"><?=$row['works_name']?></a></h4>
      									<a href="portfolio-single.html" class="arrow-btn">Нэмэлт мэдээлэл <span></span></a>
      								</div>
      							</div>
                  </div>

                  <!-- foreach end -->
                <?php } ?>

                </div>
        </div>
    </section>
            <!-- services-area-end -->


            <!-- fact-area -->

          <!-- php code for fact area -->
          <?php 
            $fact_query = $dbcon -> query("SELECT * FROM stastistics");
            $fact_information = $fact_query->fetch_assoc();

          ?>

            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                    <div class="row justify-content-between">
    <div class="col-xl-2 col-lg-3 col-sm-6">
        <div class="fact-box text-center mb-50">
            <div class="fact-icon">
                <i class="flaticon-award"></i>
            </div>
            <div class="fact-content">
                <h2><span class="count"><?=$fact_information['feature_item']?> </span></h2>
                <span>Онцлох зүйл</span>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-sm-6">
        <div class="fact-box text-center mb-50">
            <div class="fact-icon">
                <i class="flaticon-like"></i>
            </div>
            <div class="fact-content">
                <h2><span class="count"><?=$fact_information['active_products']?></span></h2>
                <span>Идэвхтэй бараа</span>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-sm-6">
        <div class="fact-box text-center mb-50">
            <div class="fact-icon">
                <i class="flaticon-event"></i>
            </div>
            <div class="fact-content">
                <h2><span class="count"><?=$fact_information['experience']?></span></h2>
                <span>Жилийн туршлага</span>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-sm-6">
        <div class="fact-box text-center mb-50">
            <div class="fact-icon">
                <i class="flaticon-woman"></i>
            </div>
            <div class="fact-content">
                <h2><span class="count"><?=$fact_information['clients']?></span></h2>
                <span>Бидний харилцагчид</span>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </section>
            <!-- fact-area-end -->



            <!-- testimonial-area -->

             <!-- php code -->
            <?php 
              $testimonial_query = $dbcon->query("SELECT * FROM testimonials");
            ?>

            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
    <span>Сэтгэгдэл</span>
    <h2>Магтаал</h2>
</div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">


                              <!-- php code-forech for testimonial -->
                              <?php foreach($testimonial_query as $row){ ?>

                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img style="width:100px;height: 100px;border-radius: 50%;" src="admin/image/customers/<?=$row['photo']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$row['customer_comment']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$row['customer_name']?></h5>
                                            <span><?=$row['customer_desegnation']?></span>
                                        </div>
                                    </div>
                                </div>

                  <!-- php code-forech end -->
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">

                       
               <!-- contact information query in side view part -->
                        

                        <div class="col-lg-6">
                        <div class="section-title mb-20">
    <span>Мэдээлэл</span>
    <h2>Холбоо барих мэдээлэл</h2>
</div>

                            <div class="contact-content">
                                <p><?=$contact_information['small_text']?></p>
                                <h5>OFFICE IN : <span><?=$contact_information['office']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$contact_information['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$contact_information['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$contact_information['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <!-- contact information area end -->

                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="guest_message.php" method="post">

                                  <!-- message send error  -->

                                  <?php if(isset($_SESSION['guest_message_error'])) { ?>
                                    <div class="alert alert-danger">
                                      <?=$_SESSION['guest_message_error']?>
                                    </div>
                                  <?php }
                                  // unset error message

                                  unset($_SESSION['guest_message_error']);
                                  ?>
                                  <!-- error end -->

                                  <!-- message send success -->

                                  <?php if(isset($_SESSION['message_send'])) { ?>
                                    <div class="alert alert-success">
                                      <?=$_SESSION['message_send']?>
                                    </div>
                                  <?php }
                                  // unset success message

                                  unset($_SESSION['message_send']);
                                  ?>

                                  <!-- end alert -->

                                    <input type="text" placeholder="Таны Нэр? "name='guest_name'>
                                    <input type="email" placeholder="Таны И-мэйл?" name='guest_email'>
                                    <textarea name="guest_message" id="message" placeholder="Таны мессеж?"></textarea>
                                    <button class="btn">Илгээх</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Миний сайт <span>Идэрмөнх</span> 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="front_end_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="front_end_assets/js/popper.min.js"></script>
        <script src="front_end_assets/js/bootstrap.min.js"></script>
        <script src="front_end_assets/js/isotope.pkgd.min.js"></script>
        <script src="front_end_assets/js/one-page-nav-min.js"></script>
        <script src="front_end_assets/js/slick.min.js"></script>
        <script src="front_end_assets/js/ajax-form.js"></script>
        <script src="front_end_assets/js/wow.min.js"></script>
        <script src="front_end_assets/js/aos.js"></script>
        <script src="front_end_assets/js/jquery.waypoints.min.js"></script>
        <script src="front_end_assets/js/jquery.counterup.min.js"></script>
        <script src="front_end_assets/js/jquery.scrollUp.min.js"></script>
        <script src="front_end_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="front_end_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="front_end_assets/js/plugins.js"></script>
        <script src="front_end_assets/js/main.js"></script>
    </body>

</html>
