<?php

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
    <form class="form-default" action="eyes.php" method="POST"  >
   
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Eyes</h2>
            <input type="hidden" id="email" name="email" value="email">
            <div class="form-input">
            <label for="eshape">Select your eye shape:</label><br>
            <select name="eshape" id="eshape">
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
            <label for="ecolour">Select your eye colour:</label><br>
            <select name="ecolour" id="ecolour">
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
            <label for="linertype">Select your Eyeliner Type:</label><br>
            <select name="linertype" id="linertype">
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
            <label for="lashtype">Select your lash Type:</label><br>
            <select name="lashtype" id="lashtype">
                <option value="classic">classic</option>
                <option value="volume">volume</option>
                <option value="hybrid">hybrid</option>
                <option value="dramatic">dramatic</option>
                <input type="text" name="colournotes" placeholder="Other">
            </select>
            </div>
            <br><br>
            <div class="form-input">
                <label for="ebs">Please list your favourite eyeshadow brands and palettes:</label>
                <input type="text" name="ebs" placeholder="EG: BeautyBay: Bright 42 Colour Palette">
            </div>
            <div class="form-input">
                <label for="elbs">Please list your favourite eyeliner brands and shades:</label>
                <input type="text" name="elbs" placeholder="EG: NYX Epic Wear Long Lasting Liner Stick - Pitch Black">
            </div>
            <div class="form-input">
                <label for="eybs">Please list your lash brands and shades:</label>
                <input type="text" name="eybs" placeholder="EG: BPerfect Power Universal Lash">
            </div>
            <div class="form-input">
                <label for="enotes">Eye notes</label>
                <input  type="text" name="enotes" placeholder="Sensivity, allergires etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="eyepref" value="Submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['eyepref'])) {
            $eshape = $_POST['eshape'];
            $ecolour = $_POST['ecolour'];
            $colourway = $_POST['colourway'];
            $linertype = $_POST['linertype'];
            $lashtype = $_POST['lashtype'];
            $ebs = $_POST['ebs'];
            $elbs = $_POST['elbs'];
            $eybs = $_POST['eybs'];
            $enotes = $_POST['enotes'];

                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO eyepref(eshape, ecolour, colourway, linertype, lashtype, ebs, elbs, eybs, enotes) VALUES('$eshape','$ecolour','$colourway', '$linertype', '$lashtype', '$ebs','$elbs','$eybs', '$enotes')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Eye preferences added.";
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