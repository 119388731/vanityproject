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
    <title> Beauty Products</title>
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

<main class="login-body">
    <!-- Login Admin -->
    <div class="form">
    <form class="form-default" action="makeupproducts.php" method="POST"  >
          
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Beauty Products</h2>
            <div class="form-input">
                <label for="customer">Customer email:</label>
                <input type="text" name="customer">
            </div>
            <div class="form-input">
                <label for="staff">Service provider:</label>
                <input type="text" name="staff">
            </div>
            <div class="form-input">
                <label for="primer">Primer:</label>
                <input type="text" name="primer">
            </div>
            <div class="form-input">
                <label for="foundation">Foundation:</label>
                <input type="text" name="foundation">
            </div>
            <div class="form-input">
                <label for="powder">Powder:</label>
                <input type="text" name="powder">
            </div>
            <div class="form-input">
                <label for="contour">Contour:</label>
                <input type="text" name="contour">
            </div>
            <div class="form-input">
                <label for="concealer">Concealer:</label>
                <input type="text" name="concealer">
            </div>
            <div class="form-input">
                <label for="blush">Blush:</label>
                <input type="text" name="blush">
            </div>
            <div class="form-input">
                <label for="eyeshadow">Eyeshadow:</label>
                <input type="text" name="eyeshadow">
            </div>
            <div class="form-input">
                <label for="liner">Eyeliner:</label>
                <input type="text" name="liner">
            </div>
            <div class="form-input">
                <label for="lashes">Lashes:</label>
                <input type="text" name="lashes">
            </div>
            <div class="form-input">
                <label for="lipstick">Lipstick:</label>
                <input type="text" name="lipstick">
            </div>
            <div class="form-input">
                <label for="lipliner">Lipliner:</label>
                <input type="text" name="lipliner">
            </div>
            <div class="form-input">
                <label for="lipgloss">Lipgloss:</label>
                <input type="text" name="lipgloss">
            </div>
            <div class="form-input">
                <label for="makeup_other">Other:</label>
                <input type="text" name="makeup_other" placeholder="Setting Spray, gems, etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check if form submitted, insert user data into database - adapted from https://gitlab.com/tutorialsclass/php-simple-login-registration-script
        if (isset($_POST['submit'])) {
            $customer = $_POST['customer'];
            $staff = $_POST['staff'];
            $primer = $_POST['primer'];
            $foundation = $_POST['foundation'];
            $powder = $_POST['powder'];
            $contour = $_POST['contour'];
            $concealer = $_POST['concealer'];
            $blush = $_POST['nail_treatment'];
            $eyeshadow = $_POST['eyeshadow'];
            $liner = $_POST['liner'];
            $lashes = $_POST['lashes'];
            $lipstick = $_POST['lipstick'];
            $lipliner = $_POST['lipliner'];
            $lipgloss = $_POST['lipgloss'];
            $makeup_other = $_POST['makeup_other'];

                // Insert user data into database
                $result   = mysqli_query($con, "UPDATE makeup_products SET customer='$customer', staff='$staff', primer='$primer', foundation='$foundation', powder='$powder', contour='$contour', concealer='$concealer', blush='$blush, 
                eyeshadow='$eyeshadow', liner='$liner', lashes='$lashes', lipstick='$lipstick', lipliner='$lipliner', lipgloss='$lipgloss', makeup_other='$makeup_other'");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Hair services added.";
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