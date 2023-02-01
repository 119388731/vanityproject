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
            <label for="ftype">Select your usual foundation type:</label><br>
            <select name="ftype" id="ftype">
                <option value="liquid">liquid</option>
                <option value="fcream">cream</option>
                <option value="mousse">whipped mousse</option>
                <option value="fstick">stick</option>
                <option value="fpowder">powder</option>
                <option value="tint">tinted moistuizer</option>
                <option value="bb">bb cream</option>
                <option value="cc">cc cream</option>
                <label for="ftype">Other:</label>
                <input type="text" name="ftype" placeholder="Please explain here">
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="finish">Select your preferred foundation finish:</label><br>
            <select name="finish" id="finish">
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
                <option value="light">light</option>
                <option value="medium">medium</option>
                <option value="full">full</option>
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="ctype">Select your usual concealer type:</label><br>
            <select name="ctype" id="ctype">
                <option value="cliquid">liquid</option>
                <option value="ccream">cream</option>
                <option value="cstick">stick</option>
                <option value="cpowder">powder</option>
                <option value="ctp">cream to powder</option>
                <option value="colcor">colour correcting</option>
                <label for="ctype">Other:</label>
                <input type="text" name="ctype" placeholder="Please explain here">
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="btype">Select your usual blush type:</label><br>
            <select name="btype" id="btype">
                <option value="bliquid">liquid</option>
                <option value="bcream">cream</option>
                <option value="bstick">stick</option>
                <option value="ppowder">pressed powder</option>
                <option value="lpowder">loose powder</option>
                <option value="stain">stain</option>
                <label for="btype">Other:</label>
                <input type="text" name="btype" placeholder="Please explain here">
            </select>
            <br><br>
            </div>
            <div class="form-input">
            <label for="cntype">Select your usual contour type:</label><br>
            <select name="cntype" id="cntype">
                <option value="cnliquid">liquid</option>
                <option value="cncream">cream</option>
                <option value="cnstick">stick</option>
                <option value="cnpowder"> powder</option>
                <label for="cntype">Other:</label>
                <input type="text" name="cntype" placeholder="Please explain here">
            </select>
            <br><br>
            </div>
            <div class="form-input">
                <label for="fbs">Please list your favourite foundation brands and shades:</label>
                <input type="text" name="fbs" placeholder="EG: Fenty Pro Filt'r: 260 Neutral<br>
                NARS All Day Luminous Weightless Foundation: Sante Fe Medium 2 etc">
            </div>
            <div class="form-input">
                <label for="cbs">Please list your favourite concealer brands and shades:</label>
                <input type="text" name="cbs" placeholder="EG: MAC Select Cover-Up: NC30<br>
                Tarte SEA Hydroconcealer: 53N Deep Neutral etc">
            </div>
            <div class="form-input">
                <label for="bbs">Please list your blush brands and shades:</label>
                <input type="text" name="fbs" placeholder="EG: Made By Mitchell Blursh Liquid Blusher: Peach Sugar<br>
                KASH Beauty Powder Blush: Sun Dance etc">
            </div>
            
            <div class="form-input">
                <label for="cnbs">Please list your contour brands and shades:</label>
                <input type="text" name="fbs" placeholder="EG: HUDA BEAUTY Tantour: Medium<br>
                Charlotte Tilbury Airbrush Bronzer: Deep etc">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="facepref" value="Submit">
            </div>
        </div>
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['facepref'])) {
            $ftype = $_POST['ftype'];
            $ffinish = $_POST['ffinish'];
            $coverage = $_POST['coverage'];
            $ctype = $_POST['ctype'];
            $btype = $_POST['btype'];
            $cntype = $_POST['cntype'];
            $fbs = $_POST['fbs'];
            $cbs = $_POST['cbs'];
            $bbs = $_POST['bbs'];
            $cnbs = $_POST['cnbs'];

                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO facepref(ftype, ffinish, coverage, ctype, btype, cntype, fbs, cbs, bbs, cnbs) VALUES('$ftype','$ffinish','$coverage', '$ctype', '$btype','$cntype','$fbs', '$cbs', '$bbs', '$cnbs')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/> Face preferences added.";
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