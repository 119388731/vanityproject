<?php
/*
// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from users
        where email='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {
        $_SESSION["email"] = $email;
        header("location: page-2.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}*/
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
            <label for="hytpe">Select your Skin Type:</label><br>
            <select name="stype" id="stype">
                <option value="dry">dry</option>
                <option value="normal">normal</option>
                <option value="oily">oily</option>
                <option value="combination">combination</option>
                <option value="sensitive">sensitive</option>
            </select>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="utone">Select your undertone:</label><br>
            <select name="utone" id="utone">
                <option value="warm">warm</option>
                <option value="cold">cold</option>
                <option value="neutral">neutral</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="stone">Select your skin tone:</label><br>
            <select name="stone" id="stone">
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
            <label for="hytpe">Usual makeup style:</label><br>
            <select name="mstyle" id="mstyle">
                <option value="simple">simple</option>
                <option value="dramatic">dramatic</option>
                <option value="other">other</option>
            </select>
            </div>
            <br><br>
            <div class="form-input">
                <label for="bnotes">Beauty notes</label>
                <input type="text" name="bnotes" placeholder="Allergies, skincare routine etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="beautypref" value="Submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['beautypref'])) {
            $stype = $_POST['stype'];
            $utone = $_POST['utone'];
            $stone = $_POST['stone'];
            $mstyle = $_POST['mstyle'];
            $bnotes = $_POST['bnotes'];

                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO beautypref(stype, utone, stone, mstyle, bnotes) VALUES('$stype','$utone','$stone', '$mstyle', '$bnotes')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Beauty preferences added.";
                } else {
                    echo "Preference addition error. Please try again." . mysqli_error($mysqli);
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