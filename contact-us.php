<?php
# @Date:   2017-07-28T12:38:14+01:00
# @Last modified time: 2017-08-03T11:31:23+01:00
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 2goodtheme.net/html/kidcenter/layout/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2017 10:43:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kid Template for Children and child.">
    <meta name="keywords" content="child,children,school,childcare,colorful">
    <meta name="author" content="2goodtheme">

    <title>Rich Oak Montessori School</title>
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>

  <body>

<!--gt Wrapper Start-->
<div class="gt_wrapper">

<?php include "navbar.php"; ?>

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

<?php include "footer.php"; ?>
    <!--Back to Top Wrap Start-->
    <div class="back-to-top">
        <a href="#home"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--Back to Top Wrap Start-->

</div>
<!--gt Wrapper End-->



    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Map JavaScript-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>
    <!--Filter able JavaScript-->
    <script src="js/jquery-filterable.js"></script>
    <!--Contact Form Validation JavaScript-->
    <script src="js/pluginse209.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from 2goodtheme.net/html/kidcenter/layout/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2017 10:43:01 GMT -->
</html>
