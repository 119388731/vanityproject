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
    <title> Makeup Products</title>
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
                        <td> Customer </td>
                        <td> Staff </td>
                        <td> Primer </td>
                        <td> Foundation </td>
                        <td> Powder </td>
                        <td> Contour </td>
                        <td> Concealer </td>
                        <td> Blush </td>
                        <td> Eyeshadow </td>
                        <td> Eyeliner </td>
                        <td> Eyelashes </td>
                        <td> Lipstick </td>
                        <td> Lipliner </td>
                        <td> Lipgloss </td>
                        <td> Other </td>
                    </tr>

                    <?php 

                        include('db-config.php');
                    $query = "SELECT * FROM makeup_products";
                    
                    $result = mysqli_query($con, $query);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                $customer = $row['customer'];
                                $staff = $row['staff'];
                                $primer = $row['primer'];
                                $foundation = $row['foundation'];
                                $powder = $row['powder'];
                                $contour = $row['contour'];
                                $concealer = $row['concealer'];
                                $blush = $row['blush'];
                                $eyeshadow = $row['eyeshadow'];
                                $liner = $row['liner'];
                                $lashes = $row['lashes'];
                                $lipstick = $row['lipstick'];
                                $lipliner = $row['lipliner'];
                                $lipgloss = $row['lipgloss'];
                                $makeup_other = $row['makeup_other'];
                    ?>
                            <tr>
                                <td><?php echo $customer ?></td>
                                <td><?php echo $staff ?></td>
                                <td><?php echo $primer ?></td>
                                <td><?php echo $foundation ?></td>
                                <td><?php echo $powder ?></td>
                                <td><?php echo $contour ?></td>
                                <td><?php echo $concealer ?></td>
                                <td><?php echo $blush ?></td>
                                <td><?php echo $eyeshadow ?></td>
                                <td><?php echo $liner ?></td>
                                <td><?php echo $lashes ?></td>
                                <td><?php echo $lipstick ?></td>
                                <td><?php echo $lipliner ?></td>
                                <td><?php echo $lipgloss ?></td>
                                <td><?php echo $makeup_other ?></td>
                                <td><a href="editmakeupproducts.php" class="btn btn-pencil">Edit</a></td>
                                <td><a href="deletehair.php" class="btn btn-danger">Delete</a></td>
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