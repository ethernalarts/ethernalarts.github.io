<?php
    //start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name_ec_dest']))
        $_SESSION['name_ec_dest']=$_POST['name_ec_dest'];
    if(isset($_POST['contactname_ec_dest']))
        $_SESSION['contactname_ec_dest']=$_POST['contactname_ec_dest'];
    if(isset($_POST['gender_ec_dest']))
        $_SESSION['gender_ec_dest']=$_POST['gender_ec_dest'];
    if(isset($_POST['title_ec_dest']))
        $_SESSION['title_ec_dest']=$_POST['title_ec_dest'];
    if(isset($_POST['phone_ec_dest']))
        $_SESSION['phone_ec_dest']=$_POST['phone_ec_dest'];
    if(isset($_POST['email_ec_dest']))
        $_SESSION['email_ec_dest']=$_POST['email_ec_dest'];
    if(isset($_POST['country_ec_dest']))
        $_SESSION['country_ec_dest']=$_POST['country_ec_dest'];
    if(isset($_POST['state_ec_dest']))
        $_SESSION['state_ec_dest']=$_POST['state_ec_dest'];
    if(isset($_POST['city_ec_dest']))
        $_SESSION['city_ec_dest']=$_POST['city_ec_dest'];
    if(isset($_POST['zipcode_ec_dest']))
        $_SESSION['zipcode_ec_dest']=$_POST['zipcode_ec_dest'];
    if(isset($_POST['address_ec_dest']))
        $_SESSION['address_ec_dest']=$_POST['address_ec_dest'];
    if(isset($_POST['apt_ec_dest']))
        $_SESSION['apt_ec_dest']=$_POST['apt_ec_dest'];
    if(isset($_POST['dept_ec_dest']))
        $_SESSION['dept_ec_dest']=$_POST['dept_ec_dest'];
    if(isset($_POST['resAdd_ec_dest']))
        $_SESSION['resAdd_ec_dest']=$_POST['resAdd_ec_dest'];
    if(isset($_POST['notify_dest']))
        $_SESSION['notify_dest']=$_POST['notify_dest'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Domestic Shipping - Review Details)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">

    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="./css/w3.css" type="text/css" rel="stylesheet">
    <link href="./css/mobile-menu-top.css" type="text/css" rel="stylesheet">

    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/statecity.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <div class="thetop"></div>

    <style>
        * {
            box-sizing: border-box;
        }

        .body {
            width: 100%;
            max-width: 1440px;
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 170px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ec-review.jpg");

            /* Set a specific height */
            min-height: 470px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-top {
            margin-top: 230px;
        }

        .subheader-bottom {
            margin: 10px auto 30px;
        }

        .container-form input {
            margin: 0 0 33px;
            font-size: 18px;
            border: 0;
            border-bottom: 2px solid #57b846;
            padding: 0 0 10px;
        }

        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #666;
            font-size: 19px;
            font-weight: 500;
            font-style: normal;
            opacity: 1; /* Firefox */
            font-family: Poppins-Medium, roboto, Verdana, Montserrat, serif;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #666;
        }
        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #666;
        }

        a.w3-button.w3-green-continue {
            font-family: "Montserrat Medium", sans-serif;
            margin: 0;
            font-size: 16px;
            color: #fff;
            padding: 13px 20px 17px;
            width: 25%;
            height: 50px;
            background-color: #57b846;
            border-radius: 25px;


            box-shadow: 0 10px 30px 0px rgba(87, 184, 70, 0.5);
            -moz-box-shadow: 0 10px 30px 0px rgba(87, 184, 70, 0.5);
            -webkit-box-shadow: 0 10px 30px 0px rgba(87, 184, 70, 0.5);
            -o-box-shadow: 0 10px 30px 0px rgba(87, 184, 70, 0.5);
            -ms-box-shadow: 0 10px 30px 0px rgba(87, 184, 70, 0.5);

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        a.w3-button.w3-green-continue:hover {

            box-shadow: 0 10px 30px 0px rgba(79, 155, 62, 0.96);
            -moz-box-shadow: 0 10px 30px 0px rgba(77, 155, 66, 0.96);
            -webkit-box-shadow: 0 10px 30px 0px rgba(80, 155, 59, 0.96);
            -o-box-shadow: 0 10px 30px 0px rgba(69, 155, 55, 0.95);
            -ms-box-shadow: 0 10px 30px 0px rgba(77, 155, 65, 0.95);

            -webkit-appearance: none;
            border: 0 solid transparent;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 40px;
            }
        }

        /* On screens that are 700px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 750px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.3em Verdana, sans-serif;
            }

            .container {
                padding: 0 20px;
            }

            .container-form input, .container-form select {
                width: 100%;
            }

            button.w3-button.w3-red-cancel {
                margin-top: 1px;
            }
        }
    </style>

</head>

<body class="body">
    <div class="parallax">
        <!-- Header with logo and navbar   -->
        <header>
            <a href="index.html">
                <img src="images/SVG/vlink-logo.svg" class="vlink-logo" alt="v-link logo"/>
            </a>
            <nav>
                <ul class="navlist">
                    <li class="navlistitem"><a href="index.html">Home</a></li>
                    <li class="navlistitem"><a href="services.html">Services</a></li>
                    <li>
                        <div class="dropdownnav">
                            <a onclick="dropDownNav()" class="active dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></a>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php" class="active">Domestic Shipping</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="about.html">About</a></li>
                    <li class="navlistitem"><a href="contact.php">Contact</a></li>
                    <li class="navlistitem"><a href="/package-tracker/" target="_blank">Track</a></li>
                </ul>
            </nav>
        </header>

        <!-- Use any element to open/show the overlay navigation menu -->
        <span>
            <button class="openbtn" onclick="openNav()">
                <i class="material-icons md-48">menu</i>
            </button>
        </span>

        <!-- Subheader. Just below the navbar -->
        <div class="subheader-top" style="width: 130px">Quote</div>

        <!-- Subheader. Just below the navbar -->
        <div class="subheader-bottom" style="width: 330px">Domestic Shipping</div>
    </div>

    <!-- Mobile Menu -->
        <!-- The overlay -->
        <div id="myNav" class="overlay">

            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="services.html">Services</a>
                <a class="active w3-dropdown-click" style="padding-top: 0" onclick="myFunction()">
                    Get a Quote <i class="fas fa-caret-down"></i>
                    <div id="demo" class="dropdown">
                        <a href="quote-is-1.php" style="padding-top: 0">International Shipping</a>
                        <a href="quote-ec.php" class="active">Domestic Shipping</a>
                        <a href="quote-ss.php">Secure Storage</a>
                    </div>
                </a>
                <a href="about.html">About</a>
                <a href="contact.php">Contact</a>
                <a href="/package-tracker/" target="_blank">Track</a>
            </div>
        </div>

    <!-- Outer Container that contains body content and pads it 300px left and right to <body> -->
    <div class="container">

        <!-- Inner Container -->
        <div class="body-content">

          <!-- Progress circles which indicates the steps of the form: -->
          <div style="text-align:center; margin-bottom: 40px;">
              <span class="step finish"></span>
              <span class="step finish"></span>
              <span class="step finish"></span>
              <span class="step finish"></span>
              <span class="step active"></span><br><br>
              <span style="font: 1.25em Montserrat, sans-serif;">(Step 5 of 5)</span>
          </div>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-4">

                <!-- Get a Quote form -->
                <form class="container-form" method="post" style="padding-bottom: 0" action="saveinfo-ec.php">
                    <h3 class="h3-contactform">And that's it. We are done.</h3>
                    <div class="formtitle">Review Your Details</div>
                    <!-- Package Origin Preview -->
                    <fieldset class="nofieldset" style="margin-bottom: 50px">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Package Origin Preview</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_ec"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name_ec'] ?>" class="w3-light-gray" id="name_ec">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contactname_ec"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contactname_ec'] ?>" id="contactname_ec">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_ec">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender_ec'] ?>" id="gender_ec">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_ec">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title_ec'] ?>" id="title_ec">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_ec">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone_ec'] ?>" id="phone_ec">
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_ec">Email</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['email_ec'] ?>" id="email_ec">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country</label>
                                    <input disabled class="w3-light-gray" placeholder="Finland" id="" >
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state_ec'] ?>" id="stateId">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city_ec'] ?>" id="cityId">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zipcode_ec">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zipcode_ec'] ?>" id="zipcode_ec">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="address_ec">Street Address</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['address_ec'] ?>" id="address_ec">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="apt_ec">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['apt_ec'] ?>" id="apt_ec">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="dept_ec">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['dept_ec'] ?>" id="dept_ec">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Pickup Date -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="pickupdate">Pickup Date</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['pickupdate'] ?>" id="pickupdate">
                                </div>

                                <!-- Pickup Time -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="pickuptime">Pickup Time</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['pickuptime'] ?>" id="pickuptime">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="resAdd_ec">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['resAdd_ec'] ?>" id="resAdd_ec">
                                </div>

                                <!-- Package Updates? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="pkg_update_ec">Should we send you package updates?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['pkg_update_ec'] ?>" id="pkg_update_ec">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%;" onClick="history.go(-4)" class="w3-button w3-medium w3-green-continue">Edit</a>
                            </div>
                    </fieldset>

                    <!-- Return Address Preview -->
                    <div class="formtitle">Return Address</div>
                    <fieldset class="nofieldset" style="padding-bottom: 30px; margin: 30px 0">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">In case nobody's home</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_ec_ra"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name_ec_ra'] ?>" class="w3-light-gray" id="name_ec_ra">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contactname_ec_ra"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contactname_ec_ra'] ?>" id="contactname_ec_ra">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_ec_ra">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender_ec_ra'] ?>" id="gender_ec_ra">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_ec_ra">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title_ec_ra'] ?>" id="title_ec_ra">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_ec_ra">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone_ec_ra'] ?>" id="phone_ec_ra">
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_ec_ra">Email</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['email_ec_ra'] ?>" id="email_ec_ra">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country</label>
                                    <input disabled class="w3-light-gray" placeholder="Finland" id="countryId">
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state_ec_ra'] ?>" id="stateId">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city_ec_ra'] ?>" id="cityId">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zipcode_ec_ra">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zipcode_ec_ra'] ?>" id="zipcode_ec_ra">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="address_ec_ra">Street Address</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['address_ec_ra'] ?>" id="address_ec_ra">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="apt_ec_ra">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['apt_ec_ra'] ?>" id="apt_ec_ra">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="dept_ec_ra">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['dept_ec_ra'] ?>" id="dept_ec_ra">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="resAdd_ec_ra">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['resAdd_ec_ra'] ?>" id="resAdd_ec_ra">
                                </div>

                                <!-- Return Notification -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="notify_ec">Should we notify this person of return?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['notify_ec'] ?>" id="notify_ec">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%" onClick="history.go(-3)" class="w3-button w3-medium w3-green-continue">Edit</a>
                            </div>
                    </fieldset>

                    <!-- Package Details Preview -->
                    <div class="formtitle">Package Details</div>
                    <fieldset class="nofieldset" style="padding-bottom: 30px; margin: 30px 0">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Package Dimensions</legend>
                            <div class="row">
                                <!-- Package Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="package_type">Package Type</label>
                                    <input disabled placeholder="<?php echo $_SESSION['package_type'] ?>" class="w3-light-gray" id="package_type">
                                </div>

                                <!-- Delivery Option -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="delivery_options">Delivery Option</label>
                                    <input disabled placeholder="<?php echo $_SESSION['delivery_options'] ?>" class="w3-light-gray" id="delivery_options">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Package Type (OTHER)-->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="other">Package Type (OTHER)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['other'] ?>" class="w3-light-gray" id="other">
                                </div>

                                <!-- Package's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth">Package's Worth (USD)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['worth'] ?>" class="w3-light-gray" id="worth">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="weight">Weight (pounds)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['weight'] ?>" class="w3-light-gray" id="weight">
                                </div>

                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="length">Length (inches)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['length'] ?>" class="w3-light-gray" id="length">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="width">Width (inches)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['width'] ?>" class="w3-light-gray" id="width">
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="height">Height (inches)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['height'] ?>" class="w3-light-gray" id="height">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Colour -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="colour">Colour</label>
                                    <input disabled placeholder="<?php echo $_SESSION['color'] ?>" class="w3-light-gray" id="colour">
                                </div>

                                <!-- Texture -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="texture">Texture</label>
                                    <input disabled placeholder="<?php echo $_SESSION['texture'] ?>" class="w3-light-gray" id="texture">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="package_description">Additional Information</label>
                                    <input disabled placeholder="<?php echo $_SESSION['package_description'] ?>" class="w3-light-gray" id="package_description">
                                </div>
                            </div>

                                <!-- Show other shipments -->
                                <div style="margin: 0 0 30px;" class="sliderWrapper">
                                    <span style="margin-left: 0" onclick="secondPackage()">
                                        + show other packages
                                    </span>
                                </div>

                                <!-- 2nd package -->
                                <fieldset id="secondPackage" class="nofieldset" style="margin: 10px 0 30px; display: none">
                                    <legend class="legend-right" style="font-size: 1.1em">2nd Package Details</legend>
                                        <div class="row">
                                            <!-- Package Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="package_type_2">Package Type</label>
                                                <input disabled placeholder="<?php echo $_SESSION['package_type_2'] ?>" class="w3-light-gray" id="package_type_2">
                                            </div>

                                            <!-- Delivery Option -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="delivery_options_2"> Shipment's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['delivery_options_2'] ?>" class="w3-light-gray" id="delivery_options_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Package Type (OTHER)-->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="other_2">Package Type (OTHER)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['other_2'] ?>" class="w3-light-gray" id="other_2">
                                            </div>

                                            <!-- Package's Worth -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="worth_2">Package's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['worth_2'] ?>" class="w3-light-gray" id="worth_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Weight -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="weight_2">Weight (pounds)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['weight_2'] ?>" class="w3-light-gray" id="weight_2">
                                            </div>

                                            <!-- Length -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="length_2">Length (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['length_2'] ?>" class="w3-light-gray" id="length_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Width -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="width_2">Width (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['width_2'] ?>" class="w3-light-gray" id="width_2">
                                            </div>

                                            <!-- Height -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="height_2">Height (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['height_2'] ?>" class="w3-light-gray" id="height_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Colour -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="colour_2">Colour</label>
                                                <input disabled placeholder="<?php echo $_SESSION['color_2'] ?>" class="w3-light-gray" id="colour_2">
                                            </div>

                                            <!-- Texture -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="texture_2">Texture</label>
                                                <input disabled placeholder="<?php echo $_SESSION['texture_2'] ?>" class="w3-light-gray" id="texture_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Additional Info -->
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="package_description_2">Additional Information</label>
                                                <input disabled placeholder="<?php echo $_SESSION['package_description_2'] ?>" class="w3-light-gray" id="package_description_2">
                                            </div>
                                        </div>
                                </fieldset>

                                <!-- 3rd package -->
                                <fieldset id="thirdPackage" class="nofieldset" style="margin: 10px 0 30px; display: none">
                                    <legend class="legend-right" style="font-size: 1.1em">3rd Package Details</legend>
                                        <div class="row">
                                            <!-- Package Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="package_type_3">Package Type</label>
                                                <input disabled placeholder="<?php echo $_SESSION['package_type_3'] ?>" class="w3-light-gray" id="package_type_3">
                                            </div>

                                            <!-- Delivery Option -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="delivery_options_3"> Shipment's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['delivery_options_3'] ?>" class="w3-light-gray" id="delivery_options_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Package Type (OTHER)-->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="other_3">Package Type (OTHER)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['other_3'] ?>" class="w3-light-gray" id="other_3">
                                            </div>

                                            <!-- Package's Worth -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="worth_3">Package's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['worth_3'] ?>" class="w3-light-gray" id="worth_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Weight -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="weight_3">Weight (pounds)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['weight_3'] ?>" class="w3-light-gray" id="weight_3">
                                            </div>

                                            <!-- Length -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="length_3">Length (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['length_3'] ?>" class="w3-light-gray" id="length_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Width -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="width_3">Width (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['width_3'] ?>" class="w3-light-gray" id="width_3">
                                            </div>

                                            <!-- Height -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="height_3">Height (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['height_3'] ?>" class="w3-light-gray" id="height_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Colour -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="colour_3">Colour</label>
                                                <input disabled placeholder="<?php echo $_SESSION['color_3'] ?>" class="w3-light-gray" id="colour_3">
                                            </div>

                                            <!-- Texture -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="texture_3">Texture</label>
                                                <input disabled placeholder="<?php echo $_SESSION['texture_3'] ?>" class="w3-light-gray" id="texture_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Additional Info -->
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="package_description_3">Additional Information</label>
                                                <input disabled placeholder="<?php echo $_SESSION['package_description_3'] ?>" class="w3-light-gray" id="package_description_3">
                                            </div>
                                        </div>
                                </fieldset>

                                <!-- 4th package -->
                                <fieldset id="fourthPackage" class="nofieldset" style="margin: 10px 0 30px; display: none">
                                    <legend class="legend-right" style="font-size: 1.1em">4th Package Details</legend>
                                        <div class="row">
                                            <!-- Package Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="package_type_4">Package Type</label>
                                                <input disabled placeholder="<?php echo $_SESSION['package_type_4'] ?>" class="w3-light-gray" id="package_type_4">
                                            </div>

                                            <!-- Delivery Option -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="delivery_options_4"> Shipment's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['delivery_options_4'] ?>" class="w3-light-gray" id="delivery_options_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Package Type (OTHER)-->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="other_4">Package Type (OTHER)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['other_4'] ?>" class="w3-light-gray" id="other_4">
                                            </div>

                                            <!-- Package's Worth -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="worth_4">Package's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['worth_4'] ?>" class="w3-light-gray" id="worth_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Weight -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="weight_4">Weight (pounds)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['weight_4'] ?>" class="w3-light-gray" id="weight_4">
                                            </div>

                                            <!-- Length -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="length_4">Length (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['length_4'] ?>" class="w3-light-gray" id="length_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Width -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="width_4">Width (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['width_4'] ?>" class="w3-light-gray" id="width_4">
                                            </div>

                                            <!-- Height -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="height_4">Height (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['height_4'] ?>" class="w3-light-gray" id="height_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Colour -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="colour_4">Colour</label>
                                                <input disabled placeholder="<?php echo $_SESSION['color_4'] ?>" class="w3-light-gray" id="colour_4">
                                            </div>

                                            <!-- Texture -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="texture_4">Texture</label>
                                                <input disabled placeholder="<?php echo $_SESSION['texture_4'] ?>" class="w3-light-gray" id="texture_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Additional Info -->
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="package_description_4">Additional Information</label>
                                                <input disabled placeholder="<?php echo $_SESSION['package_description_4'] ?>" class="w3-light-gray" id="package_description_4">
                                            </div>
                                        </div>

                                            <!-- hide other items -->
                                            <div style="margin: 0 0 7px;" class="sliderWrapper">
                                                <span id="fourthItem" style="margin-left: 0" onclick="hidePackages()">
                                                    - hide other packages
                                                </span>
                                            </div>
                                </fieldset>

                                <!-- Edit Button -->
                                <div>
                                    <a style="float: left; width: 15%" onClick="history.go(-2)" class="w3-button w3-medium w3-green-continue">Edit</a>
                                </div>
                    </fieldset>

                    <!-- Package Destination Preview -->
                    <div class="formtitle">Package Destination</div>
                    <fieldset class="nofieldset" style="padding-bottom: 30px; margin: 30px 0">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Where is it going?</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_ec_dest"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name_ec_dest'] ?>" class="w3-light-gray" id="name_ec_dest">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contactname_ec_dest"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contactname_ec_dest'] ?>" id="contactname_ec_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_ec_dest">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender_ec_dest'] ?>" id="gender_ec_dest">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_ec_dest">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title_ec_dest'] ?>" id="title_ec_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_ec_dest">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone_ec_dest'] ?>" id="phone_ec_dest">
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_ec_dest">Email</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['email_ec_dest'] ?>" id="email_ec_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country</label>
                                    <input disabled class="w3-light-gray" placeholder="Finland" id="countryId">
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state_ec_dest'] ?>" id="stateId">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city_ec_dest'] ?>" id="cityId">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zipcode_ec_dest">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zipcode_ec_dest'] ?>" id="zipcode_ec_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="address_ec_dest">Street Address</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['address_ec_dest'] ?>" id="address_ec_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="apt_ec_dest">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['apt_ec_dest'] ?>" id="apt_ec_dest">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="dept_ec_dest">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['dept_ec_dest'] ?>" id="dept_ec_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="resAdd_ec_dest">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['resAdd_ec_dest'] ?>" id="resAdd_ec_dest">
                                </div>

                                <!-- Package Updates? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="notify_dest">Should we send recipient package status?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['notify_dest'] ?>" id="notify_dest">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%" onClick="history.go(-1)" class="w3-button w3-medium w3-green-continue">Edit</a>
                            </div>
                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
                            <button name="submit" type="submit" class="w3-button w3-green-continue">Submit</button>
                        </div>
                    </div>

                <!-- End of form -->
              </form>

            </div>
        </div>
    </div>

    <!-- International Telephone Country Code -->
    <script src="js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "js/utils.js?1562189064761" // just for formatting/placeholders etc
        });
    </script>


    <!-- JavaScript Full Screen Overlay Nav -->
    <script>
        /* Open */
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        /* Close */
        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }
    </script>

    <!-- JavaScript for Top Nav Drop Down List for Get a Quote Link(for mobile menu) -->
    <script>
        function myFunction() {
            var x = document.getElementById("demo");
            if (x.className.indexOf("w3-show") === -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

    <!-- JavaScript for Top Nav Drop Down List for Get a Quote Link -->
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function dropDownNav() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdownnav-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>

    <!-- show other packages -->
    <script>
        var btn = document.querySelector('secondPackage');
        btn.addEventListener('click', secondPackage);

        function secondPackage() {
            var e = document.getElementById('secondPackage');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('thirdPackage');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');

            var e2 = document.getElementById('fourthPackage');
            e2.style.display = ((e2.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- hide other packages -->
    <script>
        var btn = document.querySelector('hidePackages');
        btn.addEventListener('click', hidePackages);

        function hidePackages() {
            var e = document.getElementById('secondPackage');
            e.style.display = 'none';

            var e1 = document.getElementById('thirdPackage');
            e1.style.display = 'none';

            var e2 = document.getElementById('fourthPackage');
            e2.style.display = 'none';
        }
    </script>
</body>

    <!-- footer -->
    <footer>
        <!-- Address and Phone number -->
        <p class="footeradd">
            3M, Microkatu, 70210 Kuopio, Finland, +358 9 42453389
        </p>

        <!-- Copyright -->
        <p class="footercopyrite">
            Copyright <i class="copyright far fa-copyright"></i> 2020 VLink Express Courier Ltd. All Rights Reserved.
        </p>

        <!-- Social Media icons -->
        <div class="div-footer-followus">
            <p>
                <a target="_blank" href="https://www.facebook.com/vlinkexpresscourier">
                    <img src="images/facebook.png" class="footer-FB" alt="facebook icon">
                </a>
                <a target="_blank" href="https://www.instagram.com/vlinkexpresscourier">
                    <img src="images/instagram.png" class="footer-INSTA" alt="instagram icon">
                </a>
                <a target="_blank" href="https://www.twitter.com/vlinkexpresscourier">
                    <img src="images/twitter.png" class="footer-INSTA" alt="twitter icon">
                </a>
                <a target="_blank" href="https://www.linkedin.com/vlinkexpresscourier">
                    <img src="images/linkedin.png" class="footer-LI" alt="linkedin icon">
                </a>
            </p>
        </div>

        <!-- Footer Links -->
        <div>
            <ul class="footerlinks">
                <li style="padding-left: 0" class="footerlinkitem"><a href="privacy.html">Privacy Policy</a></li>
                <li class="footerlinkitem"><a href="terms.html">Terms</a></li>
                <li class="footerlinkitem"><a href="about.html">About</a></li>
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>
