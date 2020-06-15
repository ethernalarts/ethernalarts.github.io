<?php
    //start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables

    //1st shipment variables
    if(isset($_POST['weight']))
        $_SESSION['weight']=$_POST['weight'];
    if(isset($_POST['length']))
        $_SESSION['length']=$_POST['length'];
    if(isset($_POST['width']))
        $_SESSION['width']=$_POST['width'];
    if(isset($_POST['height']))
        $_SESSION['height']=$_POST['height'];
    if(isset($_POST['colour']))
        $_SESSION['colour']=$_POST['colour'];
    if(isset($_POST['texture']))
        $_SESSION['texture']=$_POST['texture'];
    if(isset($_POST['worth']))
        $_SESSION['worth']=$_POST['worth'];
    if(isset($_POST['shipment_type']))
        $_SESSION['shipment_type']=$_POST['shipment_type'];
    if(isset($_POST['shipment_description']))
        $_SESSION['shipment_description']=$_POST['shipment_description'];


    //2nd shipment variables
    if(isset($_POST['weight_2']))
        $_SESSION['weight_2']=$_POST['weight_2'];
    if(isset($_POST['length_2']))
        $_SESSION['length_2']=$_POST['length_2'];
    if(isset($_POST['width_2']))
        $_SESSION['width_2']=$_POST['width_2'];
    if(isset($_POST['height_2']))
        $_SESSION['height_2']=$_POST['height_2'];
    if(isset($_POST['colour_2']))
        $_SESSION['colour_2']=$_POST['colour_2'];
    if(isset($_POST['texture_2']))
        $_SESSION['texture_2']=$_POST['texture_2'];
    if(isset($_POST['worth_2']))
        $_SESSION['worth_2']=$_POST['worth_2'];
    if(isset($_POST['shipment_type_2']))
        $_SESSION['shipment_type_2']=$_POST['shipment_type_2'];
    if(isset($_POST['shipment_description_2']))
        $_SESSION['shipment_description_2']=$_POST['shipment_description_2'];


    //3rd shipment variables
    if(isset($_POST['weight_3']))
        $_SESSION['weight_3']=$_POST['weight_3'];
    if(isset($_POST['length_3']))
        $_SESSION['length_3']=$_POST['length_3'];
    if(isset($_POST['width_3']))
        $_SESSION['width_3']=$_POST['width_3'];
    if(isset($_POST['height_3']))
        $_SESSION['height_3']=$_POST['height_3'];
    if(isset($_POST['colour_3']))
        $_SESSION['colour_3']=$_POST['colour_3'];
    if(isset($_POST['texture_3']))
        $_SESSION['texture_3']=$_POST['texture_3'];
    if(isset($_POST['worth_3']))
        $_SESSION['worth_3']=$_POST['worth_3'];
    if(isset($_POST['shipment_type_3']))
        $_SESSION['shipment_type_3']=$_POST['shipment_type_3'];
    if(isset($_POST['shipment_description_3']))
        $_SESSION['shipment_description_3']=$_POST['shipment_description_3'];

    //4th shipment variables
    if(isset($_POST['weight_4']))
        $_SESSION['weight_4']=$_POST['weight_4'];
    if(isset($_POST['length_4']))
        $_SESSION['length_4']=$_POST['length_4'];
    if(isset($_POST['width_4']))
        $_SESSION['width_4']=$_POST['width_4'];
    if(isset($_POST['height_4']))
        $_SESSION['height_4']=$_POST['height_4'];
    if(isset($_POST['colour_4']))
        $_SESSION['colour_4']=$_POST['colour_4'];
    if(isset($_POST['texture_4']))
        $_SESSION['texture_4']=$_POST['texture_4'];
    if(isset($_POST['worth_4']))
        $_SESSION['worth_4']=$_POST['worth_4'];
    if(isset($_POST['shipment_type_4']))
        $_SESSION['shipment_type_4']=$_POST['shipment_type_4'];
    if(isset($_POST['shipment_description_4']))
        $_SESSION['shipment_description_4']=$_POST['shipment_description_4'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (International Shipping - Review Details)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">

    <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
    <link href="css/misc.css" type="text/css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/regform2.css" rel="stylesheet" type="text/css">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/jquery.min.js"></script>

    <div class="thetop"></div>

    <style>
        * {
            box-sizing: border-box;
        }

        .body {
            width: 100%;
            max-width: 1440px;
            height: auto;
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 160px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/is-review.jpg");

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
            .container {
                padding: 0 80px;
            }

            a.w3-button.w3-green-continue {
                width: 25% !important;
            }
        }

        /* On screens that are 1000px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1000px) {
            .container {
                padding: 0 50px;
            }
        }

        /* On screens that are 700px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 770px) {
            .formtitle {
                font-size: 1.83em;
            }

            .container {
                padding: 0 25px;
            }

            .col-sm-6 {
                width: 100%;
            }

            a.w3-button.w3-green-continue {
                width: 40% !important;
            }

            button.w3-button.w3-green-continue {
                width: 40%;
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
                                <a href="quote-is-1.php" class="active">International Shipping</a>
                                <a href="quote-ec.php">Domestic Shipping</a>
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
        <div class="subheader-bottom" style="width: 380px">International Shipping</div>
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
                        <a href="quote-is-1.php" class="active" style="padding-top: 0">International Shipping</a>
                        <a href="quote-ec.php">Domestic Shipping</a>
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

            <!-- Container for Get a Quote form -->
            <div class="w3-card-4">

                <!-- International Shipping Quote Form Preview -->
                <form class="container-form" method="post" action="saveinfo-is.php" style="padding-bottom: 0">
                    <h3 class="h3-contactform">And that's it. We are done.</h3>
                    <div class="formtitle">Review Your Details</div>
                    <!-- Shipment Origin Preview -->
                    <fieldset class="nofieldset" style="margin-bottom: 40px">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Shipment Origin Preview</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name'] ?>" class="w3-light-gray" id="name">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contact_name"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contact_name'] ?>" id="contact_name">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender'] ?>" id="gender">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title'] ?>" id="title">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone'] ?>" id="phone">
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email">Email</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['email'] ?>" id="email">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['country'] ?>" id="">
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state'] ?>" id="stateId">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city'] ?>" id="cityId">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zip_code">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zip_code'] ?>" id="zip_code">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add">Street Address</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['street_add'] ?>" id="street_add">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add2">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['street_add2'] ?>" id="street_add2">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="department">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['department'] ?>" id="department">
                                </div>

                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="residential_add">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['residential_add'] ?>" id="residential_add">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipping Option -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipping_options">Shipping Service Option</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['shipping_options'] ?>" id="shipping_options">
                                </div>

                                <!-- Shipment Updates? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="status_updates">Should we send you shipment updates?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['status_updates'] ?>" id="status_updates">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%;" onClick="history.go(-4)" class="w3-button w3-medium w3-green-continue">
                                    Edit
                                </a>
                            </div>
                    </fieldset>

                    <!-- Return Address Preview -->
                    <div class="formtitle">Return Address</div>
                    <fieldset class="nofieldset" style="margin: 30px 0 40px">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">In case nobody's home</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_reAdd"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name_reAdd'] ?>" class="w3-light-gray" id="name_reAdd">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contact_name_reAdd"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contact_name_reAdd'] ?>" id="contact_name_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_reAdd">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender_reAdd'] ?>" id="gender_reAdd">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_reAdd">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title_reAdd'] ?>" id="title_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_reAdd">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone_reAdd'] ?>" id="phone_reAdd">
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_reAdd">Email</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['email_reAdd'] ?>" id="email_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId_reAdd">Country</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['country_reAdd'] ?>" id="countryId_reAdd">
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId_reAdd">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state_reAdd'] ?>" id="stateId_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId_reAdd">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city_reAdd'] ?>" id="cityId_reAdd">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zip_code_reAdd">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zip_code_reAdd'] ?>" id="zip_code_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add_reAdd">Street Address</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['street_add_reAdd'] ?>" id="street_add_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="street_add2_reAdd">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['street_add2_reAdd'] ?>" id="street_add2_reAdd">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="department_reAdd">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['department_reAdd'] ?>" id="department_reAdd">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="residential_reAdd">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['residential_reAdd'] ?>" id="residential_reAdd">
                                </div>

                                <!-- Notify of return? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="notify">Should we notify this person of return?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['notify'] ?>" id="notify">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%" onClick="history.go(-3)" class="w3-button w3-medium w3-green-continue">
                                    Edit
                                </a>
                            </div>
                    </fieldset>

                    <!-- Shipment Destination Preview -->
                    <div class="formtitle">Shipment Destination</div>
                    <fieldset class="nofieldset" style="padding-bottom: 30px; margin: 30px 0">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Where is it going?</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_dest"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name_dest'] ?>" class="w3-light-gray" id="name_dest">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contact_name_dest"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contact_name_dest'] ?>" id="contact_name_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_dest">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender_dest'] ?>" id="gender_dest">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_dest">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title_dest'] ?>" id="title_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_dest">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone_dest'] ?>" id="phone_dest">
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_dest">Email</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['email_dest'] ?>" id="email_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId_dest">Country</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['country_dest'] ?>" id="countryId_dest">
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId_dest">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state_dest'] ?>" id="stateId_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId_dest">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city_dest'] ?>" id="cityId_dest">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zip_code_dest">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zip_code_dest'] ?>" id="zip_code_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add_dest">Street Address</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['street_add_dest'] ?>" id="street_add_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="street_add2_dest">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['street_add2_dest'] ?>" id="street_add2_dest">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="department_dest">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['department_dest'] ?>" id="department_dest">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="residential_add_dest">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['residential_add_dest'] ?>" id="residential_add_dest">
                                </div>

                                <!-- Email updates to recipient on shipment status? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="notify_dest">Should we send recipient shipment status?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['notify_dest'] ?>" id="notify_dest">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%" onClick="history.go(-2)" class="w3-button w3-medium w3-green-continue">
                                    Edit
                                </a>
                            </div>
                    </fieldset>

                    <!-- Shipment Details Preview -->
                    <div class="formtitle">Shipment Details</div>
                    <fieldset class="nofieldset" style="margin: 30px 0 50px">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Shipment Dimensions</legend>
                            <div class="row">
                                <!-- Shipment Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipment_type">Shipment Type</label>
                                    <input disabled placeholder="<?php echo $_SESSION['shipment_type'] ?>" class="w3-light-gray" id="shipment_type">
                                </div>

                                <!-- Shipment's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth"> Shipment's Worth (USD)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['worth'] ?>" class="w3-light-gray" id="worth">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipment Type (OTHER) -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="other">Shipment Type (OTHER)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['other'] ?>" class="w3-light-gray" id="other">
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
                                    <input disabled placeholder="<?php echo $_SESSION['colour'] ?>" class="w3-light-gray" id="colour">
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
                                    <label for="shipment_description">Additional Information</label>
                                    <input disabled placeholder="<?php echo $_SESSION['shipment_description'] ?>" class="w3-light-gray" id="shipment_description">
                                </div>
                            </div>

                                <!-- Show other shipments -->
                                <div style="margin: 0 0 40px;" class="sliderWrapper">
                                    <span id="textchange" style="margin-left: 0" onclick="secondShipment()">
                                        + show other shipments
                                    </span>
                                </div>

                                <!-- 2nd shipment -->
                                <fieldset id="secondShipment" class="nofieldset" style="margin: 30px 0 10px; display: none">
                                    <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif; margin: 20px auto">2nd Shipment Details</legend>
                                    <div class="row">
                                        <!-- Shipment Type -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="shipment_type_2">Shipment Type</label>
                                            <input disabled placeholder="<?php echo $_SESSION['shipment_type_2'] ?>"
                                                   class="w3-light-gray" id="shipment_type_2">
                                        </div>

                                        <!-- Shipment's Worth -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="worth_2"> Shipment's Worth (USD)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['worth_2'] ?>"
                                                   class="w3-light-gray" id="worth_2">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Shipment Type (OTHER) -->
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="other_2">Shipment Type (OTHER)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['other_2'] ?>"
                                                   class="w3-light-gray" id="other_2">
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
                                            <input disabled placeholder="<?php echo $_SESSION['width_2'] ?>"
                                                   class="w3-light-gray" id="width_2">
                                        </div>

                                        <!-- Height -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="height_2">Height (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['height_2'] ?>"
                                                   class="w3-light-gray" id="height_2">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Colour -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="colour_2">Colour</label>
                                            <input disabled placeholder="<?php echo $_SESSION['colour_2'] ?>"
                                                   class="w3-light-gray" id="colour_2">
                                        </div>

                                        <!-- Texture -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="texture_2">Texture</label>
                                            <input disabled placeholder="<?php echo $_SESSION['texture_2'] ?>"
                                                   class="w3-light-gray" id="texture_2">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Additional Info -->
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="shipment_description_2">Additional Information</label>
                                            <input disabled placeholder="<?php echo $_SESSION['shipment_description_2'] ?>"
                                                   class="w3-light-gray" id="shipment_description_2">
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- 3rd Shipment Details -->
                                <fieldset id="thirdShipment" class="nofieldset" style="margin: 30px 0 10px; display: none">
                                  <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif; margin: 20px auto">3rd Shipment Details</legend>
                                    <div class="row">
                                        <!-- Shipment Type -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="shipment_type_3">Shipment Type</label>
                                            <input disabled placeholder="<?php echo $_SESSION['shipment_type_3'] ?>"
                                                   class="w3-light-gray" id="shipment_type_3">
                                        </div>

                                        <!-- Shipment's Worth -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="worth_3"> Shipment's Worth (USD)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['worth_3'] ?>"
                                                   class="w3-light-gray" id="worth_3">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Shipment Type (OTHER) -->
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="other_3">Shipment Type (OTHER)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['other_3'] ?>"
                                                   class="w3-light-gray" id="other_3">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Weight -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="weight_3">Weight (pounds)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['weight_3'] ?>"
                                                   class="w3-light-gray" id="weight_3">
                                        </div>

                                        <!-- Length -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="length_3">Length (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['length_3'] ?>"
                                                   class="w3-light-gray" id="length_3">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Width -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="width_3">Width (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['width_3'] ?>"
                                                   class="w3-light-gray" id="width_3">
                                        </div>

                                        <!-- Height -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="height_3">Height (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['height_3'] ?>"
                                                   class="w3-light-gray" id="height_3">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Colour -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="colour_3">Colour</label>
                                            <input disabled placeholder="<?php echo $_SESSION['colour_3'] ?>"
                                                   class="w3-light-gray" id="colour_3">
                                        </div>

                                        <!-- Texture -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="texture_3">Texture</label>
                                            <input disabled placeholder="<?php echo $_SESSION['texture_3'] ?>"
                                                   class="w3-light-gray" id="texture_3">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Additional Info -->
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="shipment_description_3">Additional Information</label>
                                            <input disabled placeholder="<?php echo $_SESSION['shipment_description_3'] ?>"
                                                   class="w3-light-gray" id="shipment_description_3">
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- 4th Shipment Details -->
                                <fieldset id="fourthShipment" class="nofieldset" style="margin: 30px 0 0; display: none">
                                <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif; margin: 20px auto">4th Shipment Details</legend>
                                    <div class="row">
                                        <!-- Shipment Type -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="shipment_type_4">Shipment Type</label>
                                            <input disabled placeholder="<?php echo $_SESSION['shipment_type_4'] ?>"
                                                   class="w3-light-gray" id="shipment_type_4">
                                        </div>

                                        <!-- Shipment's Worth -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="worth_4"> Shipment's Worth (USD)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['worth_4'] ?>"
                                                   class="w3-light-gray" id="worth_4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Shipment Type (OTHER) -->
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="other_4">Shipment Type (OTHER)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['other_4'] ?>"
                                                   class="w3-light-gray" id="other_4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Weight -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="weight_4">Weight (pounds)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['weight_4'] ?>"
                                                   class="w3-light-gray" id="weight_4">
                                        </div>

                                        <!-- Length -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="length_4">Length (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['length_4'] ?>"
                                                   class="w3-light-gray" id="length_4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Width -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="width_4">Width (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['width_4'] ?>"
                                                   class="w3-light-gray" id="width_4">
                                        </div>

                                        <!-- Height -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="height_4">Height (inches)</label>
                                            <input disabled placeholder="<?php echo $_SESSION['height_4'] ?>"
                                                   class="w3-light-gray" id="height_4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Colour -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="colour_4">Colour</label>
                                            <input disabled placeholder="<?php echo $_SESSION['colour_4'] ?>"
                                                   class="w3-light-gray" id="colour_4">
                                        </div>

                                        <!-- Texture -->
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="texture_4">Texture</label>
                                            <input disabled placeholder="<?php echo $_SESSION['texture_4'] ?>"
                                                   class="w3-light-gray" id="texture_4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Additional Info -->
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="shipment_description_4">Additional Information</label>
                                            <input disabled placeholder="<?php echo $_SESSION['shipment_description_4'] ?>" class="w3-light-gray" id="shipment_description_4">
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Edit Button -->
                                <div>
                                    <a style="float: left; width: 15%" onClick="history.go(-1)" class="w3-button w3-medium w3-green-continue">Edit</a>
                                </div>
                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
                            <button name="submit" type="submit" class="w3-button w3-medium w3-green-continue">Submit</button>
                        </div>
                    </div>

                <!-- End of form -->
              </form>
            </div>
        </div>
    </div>


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

    <!-- JavaScript for Top Nav Drop Down List for GetaQuote Link(for mobile menu) -->
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

    <!-- JavaScript for Top Nav Drop Down List for GetaQuote Link -->
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

    <!-- show other Shipment -->
    <script>
        var btn = document.querySelector('secondShipment');
        btn.addEventListener('click', secondShipment);

        function secondShipment() {
            var e = document.getElementById('secondShipment');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var a = document.getElementById('textchange');
            a.innerText = ((a.innerText !== '+ show other shipments') ?  '+ show other shipments' : '- hide other shipments');

            var e1 = document.getElementById('thirdShipment');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');

            var e2 = document.getElementById('fourthShipment');
            e2.style.display = ((e2.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- hide other shipments -->
    <script>
        var btn = document.querySelector('hideShipments');
        btn.addEventListener('click', hideShipments);

        function hideShipments() {
            var e = document.getElementById('secondShipment');
            e.style.display = 'none';

            var e1 = document.getElementById('thirdShipment');
            e1.style.display = 'none';

            var e2 = document.getElementById('fourthShipment');
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
            Copyright <i class="copyright far fa-copyright"></i> 2019 VLink Express Courier Ltd. All Rights Reserved.
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
