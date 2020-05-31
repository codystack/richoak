<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Richoak Montessori Nursery and Primary School was established in JUNE 2015 to offer excellent, superior and high-quality nursery and primary education.">
    <meta name="keywords" content="child,children,school,childcare,colorful,Rich Oak,Rich Oak Montessori School,Montessori,School">
    <meta name="author" content="WebifyNG">

    <title>Contact Us :: Rich Oak Montessori School&trade;</title>
    <link rel="shortcut icon" href="/images/favicon.png">
    <!-- Swiper Slider CSS -->
    <link href="css/swiper.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <link href="css/color_custom.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>

  <body>

<!--gt Wrapper Start-->
<div class="gt_wrapper">

<?php include "./components/navbar.php"; ?>

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Contact Us</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <section class="gt_c_bg">
            <!--Contact Info Wrap Start-->
            <div class="container">
                <div class="gt_contact_info_outer_wrap">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap">
                                <i class="fa fa-map-marker"></i>
                                <h5>ADDRESS</h5>
                                <p>No. 65 East-West Road Opp Okmas, Near Eliozu Fly-over, Port Harcourt. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap active">
                                <i class="fa fa-phone"></i>
                                <h5>Phone Number</h5>
                                <p>+234-069-543-522</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap">
                                <i class="fa fa-envelope-o"></i>
                                <h5>Email Address</h5>
                                <a href="#">info@richoakschools.com</a>&nbsp;&nbsp;&nbsp;
                                <a href="#">Support@richoakschools.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact Info Wrap End-->

            <!--Map Wrap Start-->
            <div class="default_width">
                <div class="map-canvas gt_contact_us_map" id="map-canvas"></div>
                <!--Map Wrap End-->
                <div class="gt_form_map">
                    <div class="gt_hdg_1">
                        <h3>Send Us a Message</h3>
                    </div>
                    <form class="gt_contact_form" method="post" action="email/email.php">
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Full Name" id="name" name="fname" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="email" placeholder="Email Adress" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Phone Number" id="subject" name="tel" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <textarea class="gt_c_bg" name="msg" id="message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <input  type="submit" value="Send Now" name="submit_msg">
                            </div>
                            <!--Alert Message-->
                            <div id="contact-result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->

<?php include "./components/footer.php"; ?>
