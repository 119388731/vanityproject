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
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col m-auto">
            <div class="card mt-5">
                <table class="table table-bordered">
                    <!--adapted from https://www.onlineittuts.com/fetch-data-database-in-php.html -->
                    <tr>
                        <td> Email </td>
                        <td> Foundation Type </td>
                        <td> Foundation Finish </td>
                        <td> Foundation Coverage </td>
                        <td> Concealer Type </td>
                        <td> Blush Type </td>
                        <td> Contour Type </td>
                        <td> Face Brand/Shades </td>
                        <td> Concealer Brand/Style </td>
                        <td> Blush Brand/Shades </td>
                        <td> Contour Brand/Style </td>
                        <td> Notes </td>
                    </tr>

                    <?php 

                        include('db-config.php');
                        $query = "SELECT * FROM face_pref";

                    $result = mysqli_query($con, $query);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                $email = $row['email'];
                                $foundation_type = $row['foundation_type'];
                                $foundation_finish = $row['foundation_finish'];
                                $coverage = $row['coverage'];
                                $liner_type = $row['liner_type'];
                                $concealer_type = $row['concealer_type'];
                                $blush_type = $row['blush_type'];
                                $contour_type = $row['contour_type'];
                                $face_brand = $row['face_brand'];
                                $concealer_brand = $row['concealer_brand'];
                                $blush_brand = $row['blush_brand'];
                                $contour_brand = $row['contour_brand'];
                                $face_notes = $row['face_notes'];
                    ?>
                            <tr>
                                <td><?php echo $email ?></td>
                                <td><?php echo $foundation_type ?></td>
                                <td><?php echo $foundation_finish ?></td>
                                <td><?php echo $coverage ?></td>
                                <td><?php echo $concealer_type ?></td>
                                <td><?php echo $blush_type ?></td>
                                <td><?php echo $concealer_type ?></td>
                                <td><?php echo $face_brand ?></td>
                                <td><?php echo $concealer_brand ?></td>
                                <td><?php echo $blush_brand ?></td>
                                <td><?php echo $contour_brand ?></td>
                                <td><?php echo $face_notes ?></td>
                                <td><a href="editface.php" class="btn btn-pencil">Edit</a></td>
                            </tr>        
                    <?php 
                            }  
                    ?>                                                                    
                           

                </table>
            </div>
        </div>
    </div>
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