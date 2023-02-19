<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Beauty Services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <div class="form">
    <form class="form-default" action="beautyservice.php" method="POST"  >
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Beauty Services</h2>
            <div class="form-input">
                <label for="customer">Customer email:</label>
                <input type="text" name="customer">
            </div>
            <div class="form-input">
                <label for="staff">Service provider:</label>
                <input type="text" name="staff">
            </div>
            <div class="form-input">
            <label for="makeup">Makeup:</label><br>
            <select name="makeup" id="makeup">
                <!-- adapted from https://www.christineoconnormua.com/onlinebooking.html -->
                <option value="makeup_null"> Select an option</option>
                <option value="glam"> Full Makeup</option>
                <option value="glam_lashes"> Full Makeup & Lashes</option>
                <option value="focus"> Focus Feature</option>
                <option value="halloween"> Halloween Makeup</option>
                <option value="bridal"> Bridal Look</option>
                <option value="bridal_trial"> Bridal Trial</option>
                <option value="lesson"> 1:1 Lesson</option>
                <option value="online_lesson"> 1:1 Online Lesson</option>
            </select>
            </select>
            <br><br>
            </div>
            <div class="form-input">
                <!-- lashes and brows adapted from https://www.royalashacademy.com/salon/services -->
            <label for="brows">Brows:</label><br>
            <select name="brows" id="brows">
                <option value="brows_null"> Select an option</option>
                <option value="threading"> Threading</option>
                <option value="brow_tint"> Tint</option>
                <option value="thread_tint"> Thread & Tint</option>
                <option value="wax"> Waxing</option>
                <option value="wax_tint"> Wax & Tint</option>
                <option value="lamination"> Lamination</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="lashes">Lashes:</label><br>
            <select name="lashes" id="lashes">
                <option value="lash_null"> Select an option</option>
                <option value="lash_tint"> Lash tint</option>
                <option value="lash_lift"> Lash lift</option>
                <option value="classics"> Classic Set</option>
                <option value="hybrid"> Hybrid Set</option>
                <option value="volume"> Volume Set</option>
                <option value="mega_volume"> Mega Volume Set</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="maintenance">Maintenance:</label><br>
            <select name="maintenance" id="maintenance">
                <option value="maintenace_null"> Select an option</option>
                <option value="class_refill"> Classic Set Refill</option>
                <option value="hybrid_refill"> Hybrid Set Refill</option>
                <option value="volume_refill"> Volume Set Refill</option>
                <option value="mega_volume_refill"> Mega Volume Set Refill</option>
                <option value="extension_removal"> Extension Removal</option>
            </select>
            </div>
            <br>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['submit'])) {
            $customer = $_POST['customer'];
            $staff = $_POST['staff'];
            $makeup = $_POST['makeup'];
            $brows = $_POST['brows'];
            $lashes = $_POST['lashes'];
            $maintenance = $_POST['maintenance'];

                // Insert user data into database
                $result   = mysqli_query($con, "INSERT INTO beauty_service(customer, staff, makeup, brows, lashes, maintenance) VALUES('$customer','$staff','$makeup','$brows', '$lashes', '$maintenance')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Beauty services added.";
                } else {
                    echo "Preference addition error. Please try again." . mysqli_error($con);
                }
            }
        

        ?>
    </form>
    </div>
    <!-- /end login form -->
</main>


    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="./assets/js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>