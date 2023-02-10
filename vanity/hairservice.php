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
    <title> Hair Service</title>
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
    <form class="form-default" action="hairservice.php" method="POST"  >
          
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <h2>Hair Services</h2>
            <div class="form-input">
                <label for="customer">Customer email:</label>
                <input type="text" name="customer">
            </div>
            <div class="form-input">
                <label for="staff">Service provider:</label>
                <input type="text" name="staff">
            </div>
            <div class="form-input">
                <!-- hair options from: https://unisalon1.gettimely.com/Booking/Location/60422?mobile=True -->
            <label>Cut and Blowdry:</label><br>
            </div>
            <div>
            <input type="checkbox" name="cut_dry" value="cutblow" />Cut and Blowdry<br />
            <input type="checkbox" name="cut_dry" value="blowdry" />Short - Med blowdry<br />
            <input type="checkbox" name="cut_dry" value="blowdrylong" />Long Blowdry<br />
            <input type="checkbox" name="cut_dry" value="blowdrycurly" />Curly Blowdry<br />
            </div>
            <div class="form-input">
            <label>Colour:</label><br>
            </div>
            <div>
            <input type="checkbox" name="colour" value="fullcolour" />Full colour<br />
            <input type="checkbox" name="colour" value="root" />Root touch up<br />
            <input type="checkbox" name="colour" value="fullmeche" />Full meche<br />
            <input type="checkbox" name="colour" value="halfmeche" />Half meche<br />
            <input type="checkbox" name="colour" value="balayage" />Balayage<br />
            </div>
            <div class="form-input">
            <label>Gents:</label><br>
            </div>
            <div>
            <input type="checkbox" name="gents" value="blowdrygents" />Gents<br />
            <input type="checkbox" name="gents" value="dye" />Colour<br />
            <input type="checkbox" name="gents" value="fade" />Fade<br />
            <input type="checkbox" name="gents" value="haircut" />Cut<br />
            </div>
            <div class="form-input">
                <label for="hairservice_other">Other:</label>
                <input type="text" name="hairservice_other" placeholder="Treatments etc">
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
            $cut_dry = $_POST['cut_dry'];
            $colour = $_POST['colour'];
            $gents = $_POST['gents'];
            $hairservice_other = $_POST['hairservice_other'];

                // Insert user data into database
                $result   = mysqli_query($con, "INSERT INTO hair_service(customer, staff, cut_dry, colour, gents, hairservice_other) VALUES('$customer', '$staff', '$cut_dry', '$colour', '$gents', '$hairservice_other')");

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