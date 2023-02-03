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
    <title> Nail Preferences</title>
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
    <form class="form-default" action="editeyes.php" method="POST"  >
   
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Eyes</h2>
            <input type="hidden" id="email" name="email" value="email">
            <div class="form-input">
            <label for="eye_shape">Select your eye shape:</label><br>
            <select name="eye_shape" id="eye_shape">
                <option value="almond">almond</option>
                <option value="round">round </option>
                <option value="downturned">downturned</option>
                <option value="upturned">upturned</option>
                <option value="hooded">hooded</option>
                <option value="monolid">monolid</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="eye_colour">Select your eye colour:</label><br>
            <select name="eye_colour" id="eye_colour">
                <option value="amber">amber</option>
                <option value="blue">blue</option>
                <option value="brown">brown</option>
                <option value="grey">grey</option>
                <option value="green">green</option>
                <option value="hazel">hazel</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="colourway">Select your preferred eyeshadow colourway:</label><br>
            <select name="colourway" id="colourway">
                <option value="neon">neon</option>
                <option value="warm">warm</option>
                <option value="cool">cool</option>
                <option value="nude">nude</option>
                <option value="pastel">pastel</option>
                <label for="colournotes">Other:</label>
                <input type="text" name="colourway" placeholder="Other">
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="liner_type">Select your Eyeliner Type:</label><br>
            <select name="liner_type" id="liner_type">
                <option value="pencil">pencil</option>
                <option value="liquid">liquid</option>
                <option value="marker">marker</option>
                <option value="gel">gel</option>
                <option value="shadow">shadow</option>
                <input type="text" name="colournotes" placeholder="Other">
            </select>
            </div>
            <br><br>
            <div class="form-input">
            <label for="lash_type">Select your lash Type:</label><br>
            <select name="lash_type" id="lash_type">
                <option value="classic">classic</option>
                <option value="volume">volume</option>
                <option value="hybrid">hybrid</option>
                <option value="dramatic">dramatic</option>
                <input type="text" name="colournotes" placeholder="Other">
            </select>
            </div>
            <br><br>
            <div class="form-input">
                <label for="eyeshadow_brand">Please list your favourite eyeshadow brands and palettes:</label>
                <input type="text" name="eyeshadow_brand" placeholder="EG: BeautyBay: Bright 42 Colour Palette">
            </div>
            <div class="form-input">
                <label for="eyeliner_brand">Please list your favourite eyeliner brands and shades:</label>
                <input type="text" name="eyeliner_brand" placeholder="EG: NYX Epic Wear Long Lasting Liner Stick - Pitch Black">
            </div>
            <div class="form-input">
                <label for="lash_brand">Please list your lash brands and shades:</label>
                <input type="text" name="lash_brand" placeholder="EG: BPerfect Power Universal Lash">
            </div>
            <div class="form-input">
                <label for="eye_notes">Eye notes</label>
                <input  type="text" name="eye_notes" placeholder="Sensivity, allergies etc">
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
            $eye_shape = $_POST['eye_shape'];
            $eye_colour = $_POST['eye_colour'];
            $colourway = $_POST['colourway'];
            $liner_type = $_POST['liner_type'];
            $lash_type = $_POST['lashtlash_typeype'];
            $eyeshadow_brand = $_POST['eyeshadow_brand'];
            $eyeliner_brand = $_POST['eyeliner_brand'];
            $lash_brand = $_POST['lash_brand'];
            $eye_notes = $_POST['eye_notes'];

                // Insert user data into database
                $result   = mysqli_query($con, "UPDATE eye_pref SET eye_shape='$eye_shape', eye_colour='$eye_colour', colourway='$colourway', liner_type= '$liner_type', lash_type='$lash_type', eyeshadow_brand='$eyeshadow_brand', eyeliner_brand='$eyeliner_brand', lash_brand='$lash_brand', eye_notes='$eye_notes' WHERE email='$email'");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Eye preferences updated.";
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