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
    <title> Nail Art Preferences</title>
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
    <form class="form-default" action="editnailart.php" method="POST"  >
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Nail Art</h2>
            <input type="hidden" id="email" name="email" value="email">
            <div class="form-input">
            <label for="nail_service">Select your usual Nail service:</label><br>
            <select name="nail_service" id="nail_service">
                <option value="manicure">manicure</option>
                <option value="shellac">shellac</option>
                <option value="gel">gel</option>
                <option value="acrylics">acrylics</option>
                <option value="presson">press ons</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="nail_shape">Select your preferred nail shape:</label><br>
            <select name="nail_shape" id="nail_shape">
                <option value="oval">oval</option>
                <option value="almond">almond</option>
                <option value="square">square</option>
                <option value="squoval">squoval</option>
                <option value="coffin">coffin</option>
                <option value="stiletto">stiletto</option>
                <option value="round">round</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="nail_style">Select your preferred nail style:</label><br>
            <select name="nail_style" id="nail_style">
                <option value="simple">simple</option>
                <option value="frenchtip">french tip</option>
                <option value="someart">some art</option>
                <option value="embellished">embellished</option>
            </select>
            <br><br>
            </div>
            <br><br>
            <div class="form-input">
                <label for="nailart_notes">Nail art notes</label>
                <input  type="text" name="nailart_notes" placeholder="Favourite colour, nail inspiration etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="update" value="update">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['update'])) {
            $email = $_SESSION['email'];
            $nail_service = $_POST['nail_service'];
            $nail_shape = $_POST['nail_shape'];
            $nail_style = $_POST['nail_style'];
            $nailart_notes = $_POST['nailart_notes'];

                // Insert user data into database
                $result   = mysqli_query($con, "UPDATE nailart_pref SET nail_service='$nail_service', nail_shape='$nail_shape', nail_style='$nail_style', nail_notes='$nailart_notes' WHERE email='$email'");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Nail art preferences updated.";
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