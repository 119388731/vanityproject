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
    <title> Beauty Preferences</title>
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
    <form class="form-default" action="beauty.php" method="POST"  >
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Beauty</h2>
            <input type="hidden" id="email" name="email" value="email">
            <div class="form-input">
            <label for="skin_type">Select your skin type:</label><br>
            <select name="skin_type" id="skin_type">
                <option value="skin_dry">dry</option>
                <option value="skin_normal">normal</option>
                <option value="skin_oily">oily</option>
                <option value="skin_combination">combination</option>
                <option value="skin_sensitive">sensitive</option>
            </select>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="undertone">Select your undertone:</label><br>
            <select name="undertone" id="undertone">
                <option value="warm">warm</option>
                <option value="cold">cold</option>
                <option value="neutral">neutral</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="skintone">Select your skin tone:</label><br>
            <select name="skintone" id="skintone">
                <option value="porcelain">porcelain</option>
                <option value="light">light</option>
                <option value="medium">medium</option>
                <option value="mediumtan">medium tan</option>
                <option value="sienna">sienna</option>
                <option value="amber">amber</option>
                <option value="tan">tan</option>
                <option value="deep">deep</option>
                <option value="mocha">mocha</option>
                <option value="espresso">espresso</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="makeup_type">Usual makeup style:</label><br>
            <select name="makeup_type" id="makeup_type">
                <option value="simple">simple</option>
                <option value="dramatic">dramatic</option>
                <option value="other">other</option>
            </select>
            </div>
            <br><br>
            <div class="form-input">
                <label for="beauty_notes">Beauty notes</label>
                <input type="text" name="beauty_notes" placeholder="Allergies, skincare routine etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['submit'])) {
            $email = $_SESSION['email'];
            $skin_type = $_POST['skin_type'];
            $undertone = $_POST['undertone'];
            $skintone = $_POST['skintone'];
            $makeup_type = $_POST['makeup_type'];
            $beauty_notes = $_POST['beauty_notes'];

                // Insert user data into database
                $result   = mysqli_query($con, "INSERT INTO beauty_pref(email, skin_type, undertone, skintone, makeup_type, beauty_notes) VALUES('$email','$skin_type','$undertone','$skintone', '$makeup_type', '$beauty_notes')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Beauty preferences added.";
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