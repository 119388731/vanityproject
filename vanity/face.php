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
    <title> Face Preferences</title>
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
    <form class="form-default" action="face.php" method="POST"  >
   
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Face</h2>
            <input type="hidden" id="email" name="email" value="email">
            <div class="form-input">
            <label for="foundation_type">Select your usual foundation type:</label><br>
            <select name="foundation_type" id="foundation_type">
                <option value="foundation_liquid">liquid</option>
                <option value="foundation_cream">cream</option>
                <option value="foundation_mousse">whipped mousse</option>
                <option value="foundation_stick">stick</option>
                <option value="foundation_powder">powder</option>
                <option value="foundation_tint">tinted moistuizer</option>
                <option value="foundation_bb">bb cream</option>
                <option value="foundation_cc">cc cream</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="foundation_finish">Select your preferred foundation finish:</label><br>
            <select name="foundation_finish" id="foundation_finish">
                <option value="sheer">sheer</option>
                <option value="dewy">dewy</option>
                <option value="natrual">natrual</option>
                <option value="satin">satin</option>
                <option value="radiant">radiant</option>
                <option value="matte">matte</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="coverage">Select your preferred coverage:</label><br>
            <select name="coverage" id="coverage">
                <option value="coverage_light">light</option>
                <option value="coverage_medium">medium</option>
                <option value="coverage_full">full</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="concealer_type">Select your usual concealer type:</label><br>
            <select name="concealer_type" id="concealer_type">
                <option value="concealer_liquid">liquid</option>
                <option value="concealer_cream">cream</option>
                <option value="concealer_stick">stick</option>
                <option value="concealer_powder">powder</option>
                <option value="concealer_ctp">cream to powder</option>
                <option value="concealer_cc">colour correcting</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="blush_type">Select your usual blush type:</label><br>
            <select name="blush_type" id="blush_type">
                <option value="blush_liquid">liquid</option>
                <option value="blush_cream">cream</option>
                <option value="blush_stick">stick</option>
                <option value="blush_powder">pressed powder</option>
                <option value="blush_lpowder">loose powder</option>
                <option value="blush_stain">stain</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="contour_type">Select your usual contour type:</label><br>
            <select name="contour_type" id="contour_type">
                <option value="contour_liquid">liquid</option>
                <option value="contour_cream">cream</option>
                <option value="contour_stick">stick</option>
                <option value="contour_powder"> powder</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
                <label for="face_brand">Please list your favourite foundation brands and shades:</label>
                <input type="text" name="face_brand" placeholder="EG: Fenty Pro Filt'r: 260 Neutral">
            </div>
            <div class="form-input">
                <label for="concealer_brand">Please list your favourite concealer brands and shades:</label>
                <input type="text" name="concealer_brand" placeholder="EG: MAC Select Cover-Up: NC30">
            </div>
            <div class="form-input">
                <label for="blush_brand">Please list your blush brands and shades:</label>
                <input type="text" name="blush_brand" placeholder="EG: Made By Mitchell Blursh Liquid Blusher: Peach Sugar">
            </div>
            <div class="form-input">
                <label for="contour_brand">Please list your contour brands and shades:</label>
                <input type="text" name="contour_brand" placeholder="EG: HUDA BEAUTY Tantour: Medium">
            </div>
            <div class="form-input">
                <label for="face_notes">Face makeup notes:</label>
                <input type="text" name="face_notes" placeholder="Allergies, concerns, etc">
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
            $foundation_type = $_POST['foundation_type'];
            $foundation_finish = $_POST['foundation_finish'];
            $coverage = $_POST['coverage'];
            $concealer_type = $_POST['concealer_type'];
            $blush_type = $_POST['blush_type'];
            $contour_type = $_POST['contour_type'];
            $face_brand = $_POST['face_brand'];
            $concealer_brand = $_POST['concealer_brand'];
            $blush_brand = $_POST['blush_brand'];
            $contour_brand = $_POST['contour_brand'];
            $face_notes = $_POST['face_notes'];

                // Insert user data into database
                $result   = mysqli_query($con, "INSERT INTO face_pref(email, foundation_type, foundation_finish, coverage, concealer_type, blush_type, contour_type, face_brand, concealer_brand, blush_brand, contour_brand, face_notes) 
                VALUES('$email', '$foundation_type','$foundation_finish','$coverage', '$concealer_type', '$blush_type','$contour_type','$face_brand', '$concealer_brand', '$blush_brand', '$contour_brand', '$face_notes')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Face preferences added.";
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