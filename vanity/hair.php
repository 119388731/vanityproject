<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
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
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <div class="form">
    <form class="form-default" action="hair.php" method="POST"  >
   
        
        <div class="user-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>Hair</h2>

            <div class="form-input">
            <label for="hytpe">Choose a Hair Type:</label>
            <select name="htype" id="hytpe">
                <option value="straight">straight</option>
                <option value="wavy">wavy</option>
                <option value="curly">curly</option>
                <option value="kinky">kinky</option>
                <option value="coily">coily</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <select name="hthick" id="hthick">
                <option value="fine">fine</option>
                <option value="medium">medium</option>
                <option value="coarse">coarse</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <select name="scalp" id="scalp">
                <option value="dry">dry</option>
                <option value="normal">normal</option>
                <option value="oily">oily</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <select name="hlength" id="hlength">
                <option value="vshort">very short</option>
                <option value="short">short</option>
                <option value="medium">medium</option>
                <option value="long">long</option>
                <option value="vlong">very long</option>
            </select>
            </div>
            <div class="form-input">
                <label for="hnotes">Hair notes</label>
                <input  type="text" name="hnotes" placeholder="Hair goals, concerns, etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="hpref" value="Submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['hpref'])) {
            $htype = $_POST['htype'];
            $hthick = $_POST['hthick'];
            $scalp = $_POST['scalp'];
            $hlength = $_POST['hlength'];
            $hnotes = $_POST['hnotes'];

                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO hairpref(htype, hthick, scalp, hlength, hnotes) VALUES('$htype','$hthick','$scalp', '$hlength', '$hnotes')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Hair preferences added.";
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