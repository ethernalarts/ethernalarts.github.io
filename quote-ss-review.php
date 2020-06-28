<?php
    //start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables

    //1st item variables
    if(isset($_POST['storage_type_ss']))
        $_SESSION['storage_type_ss']=$_POST['storage_type_ss'];
    if(isset($_POST['item_type_ss']))
        $_SESSION['item_type_ss']=$_POST['item_type_ss'];
    if(isset($_POST['worth_ss']))
        $_SESSION['worth_ss']=$_POST['worth_ss'];
    if(isset($_POST['other_ss']))
        $_SESSION['other_ss']=$_POST['other_ss'];
    if(isset($_POST['duration_ss']))
        $_SESSION['duration_ss']=$_POST['duration_ss'];
    if(isset($_POST['weight_ss']))
        $_SESSION['weight_ss']=$_POST['weight_ss'];
    if(isset($_POST['length_ss']))
        $_SESSION['length_ss']=$_POST['length_ss'];
    if(isset($_POST['width_ss']))
        $_SESSION['width_ss']=$_POST['width_ss'];
    if(isset($_POST['color_ss']))
        $_SESSION['color_ss']=$_POST['color_ss'];
    if(isset($_POST['height_ss']))
        $_SESSION['height_ss']=$_POST['height_ss'];
    if(isset($_POST['item_descr_ss']))
        $_SESSION['item_descr_ss']=$_POST['item_descr_ss'];


    //2nd item variables
    if(isset($_POST['storage_type_ss_2']))
        $_SESSION['storage_type_ss_2']=$_POST['storage_type_ss_2'];
    if(isset($_POST['item_type_ss_2']))
        $_SESSION['item_type_ss_2']=$_POST['item_type_ss_2'];
    if(isset($_POST['worth_ss_2']))
        $_SESSION['worth_ss_2']=$_POST['worth_ss_2'];
    if(isset($_POST['other_ss_2']))
        $_SESSION['other_ss_2']=$_POST['other_ss_2'];
    if(isset($_POST['duration_ss_2']))
        $_SESSION['duration_ss_2']=$_POST['duration_ss_2'];
    if(isset($_POST['weight_ss_2']))
        $_SESSION['weight_ss_2']=$_POST['weight_ss_2'];
    if(isset($_POST['length_ss_2']))
        $_SESSION['length_ss_2']=$_POST['length_ss_2'];
    if(isset($_POST['width_ss_2']))
        $_SESSION['width_ss_2']=$_POST['width_ss_2'];
    if(isset($_POST['color_ss_2']))
        $_SESSION['color_ss_2']=$_POST['color_ss_2'];
    if(isset($_POST['height_ss_2']))
        $_SESSION['height_ss_2']=$_POST['height_ss_2'];
    if(isset($_POST['item_descr_ss_2']))
        $_SESSION['item_descr_ss_2']=$_POST['item_descr_ss_2'];


    //3rd item variables
    if(isset($_POST['storage_type_ss_3']))
        $_SESSION['storage_type_ss_3']=$_POST['storage_type_ss_3'];
    if(isset($_POST['item_type_ss_3']))
        $_SESSION['item_type_ss_3']=$_POST['item_type_ss_3'];
    if(isset($_POST['worth_ss_3']))
        $_SESSION['worth_ss_3']=$_POST['worth_ss_3'];
    if(isset($_POST['other_ss_3']))
        $_SESSION['other_ss_3']=$_POST['other_ss_3'];
    if(isset($_POST['duration_ss_3']))
        $_SESSION['duration_ss_3']=$_POST['duration_ss_3'];
    if(isset($_POST['weight_ss_3']))
        $_SESSION['weight_ss_3']=$_POST['weight_ss_3'];
    if(isset($_POST['length_ss_3']))
        $_SESSION['length_ss_3']=$_POST['length_ss_3'];
    if(isset($_POST['width_ss_3']))
        $_SESSION['width_ss_3']=$_POST['width_ss_3'];
    if(isset($_POST['color_ss_3']))
        $_SESSION['color_ss_3']=$_POST['color_ss_3'];
    if(isset($_POST['height_ss_3']))
        $_SESSION['height_ss_3']=$_POST['height_ss_3'];
    if(isset($_POST['item_descr_ss_3']))
        $_SESSION['item_descr_ss_3']=$_POST['item_descr_ss_3'];


    //4th item variables
    if(isset($_POST['storage_type_ss_4']))
        $_SESSION['storage_type_ss_4']=$_POST['storage_type_ss_4'];
    if(isset($_POST['item_type_ss_4']))
        $_SESSION['item_type_ss_4']=$_POST['item_type_ss_4'];
    if(isset($_POST['worth_ss_4']))
        $_SESSION['worth_ss_4']=$_POST['worth_ss_4'];
    if(isset($_POST['other_ss_4']))
        $_SESSION['other_ss_4']=$_POST['other_ss_4'];
    if(isset($_POST['duration_ss_4']))
        $_SESSION['duration_ss_4']=$_POST['duration_ss_4'];
    if(isset($_POST['weight_ss_4']))
        $_SESSION['weight_ss_4']=$_POST['weight_ss_4'];
    if(isset($_POST['length_ss_4']))
        $_SESSION['length_ss_4']=$_POST['length_ss_4'];
    if(isset($_POST['width_ss_4']))
        $_SESSION['width_ss_4']=$_POST['width_ss_4'];
    if(isset($_POST['color_ss_4']))
        $_SESSION['color_ss_4']=$_POST['color_ss_4'];
    if(isset($_POST['height_ss_4']))
        $_SESSION['height_ss_4']=$_POST['height_ss_4'];
    if(isset($_POST['item_descr_ss_4']))
        $_SESSION['item_descr_ss_4']=$_POST['item_descr_ss_4'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Secure Storage - Review Details)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">

    <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
    <link href="css/misc.css" type="text/css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">

    <link href="css/regform2.css" rel="stylesheet" type="text/css">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 160px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ss-review.jpg");

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
            margin: 0 0 35px;
            font-size: 18px;
            border: 0;
            border-bottom: 2px solid lightgreen;
            padding: 7px 0 10px;
        }

        .container-form textarea {
            font-family: Poppins-Medium, roboto, Verdana, Montserrat, serif;
            margin: 0 0 33px;
            font-size: 18px;
            width: 100%;
            height: 100px;
            resize: none;
            padding: 7px 0;
            border-bottom: 2px solid lightgreen;
            color: #666;
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
            margin: 10px 0 0;
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

            a.w3-button.w3-green-continue {
                width: 23% !important;
            }

            .container {
                padding: 0 30px;
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
                                <a href="quote-ec.php">Domestic Shipping</a>
                                <a href="quote-ss.php" class="active">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="about.html">About</a></li>
                    <li class="navlistitem"><a href="contact.php">Contact</a></li>
                    <li class="navlistitem"><a href="track.html">Track</a></li>
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
        <div class="subheader-bottom" style="width: 270px">Secure Storage</div>
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
                        <a href="quote-ec.php">Domestic Shipping</a>
                        <a href="quote-ss.php" class="active">Secure Storage</a>
                    </div>
                </a>
                <a href="about.html">About</a>
                <a href="contact.php">Contact</a>
                <a href="track.html">Track</a>
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
              <span class="step active"></span><br><br>
              <span style="font: 1.25em Montserrat, sans-serif;">(Step 3 of 3)</span>
          </div>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-4">

                <!-- Get a Quote form -->
                <form class="container-form" method="post" style="padding-bottom: 0" action="saveinfo-ss.php">
                    <h3 class="h3-contactform">And that's it. We are done.</h3>
                    <div class="formtitle">Review Your Details</div>
                    <!-- Package Origin Preview -->
                    <fieldset class="nofieldset" style="padding-bottom: 30px; margin: 0 0 30px">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Basic Details</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_ss"> Full Name (or Company)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['name_ss'] ?>" class="w3-light-gray" id="name_ss">
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contactname_ss"> Contact's Name</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['contactname_ss'] ?>" id="contactname_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_ss">Gender</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['gender_ss'] ?>" id="gender_ss">
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_ss">Title</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['title_ss'] ?>" id="title_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Age -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="age_ss">Age</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['age_ss'] ?>" id="age_ss">
                                </div>

                                <!-- Occupation -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="occupation_ss">Occupation</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['occupation_ss'] ?>" id="occupation_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_ss">Telephone</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['phone_ss'] ?>" id="phone_ss">
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
                                    <input disabled class="w3-light-gray" placeholder="Finland" id="">
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['state_ss'] ?>" id="stateId">
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['city_ss'] ?>" id="cityId">
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zipcode_ss">Zip Code</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['zipcode_ss'] ?>" id="zipcode_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="address_ss">Street Address</label>
                                    <textarea disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['address_ss'] ?>" id="address_ss"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="apt_ss">Street Address 2 (or Apartment, suite, floor, unit etc)</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['apt_ss'] ?>" id="apt_ss">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="dept_ss">Department, c/o, etc.</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['dept_ss'] ?>" id="dept_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="resAdd_ss">Is this a residential address?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['resAdd_ss'] ?>" id="resAdd_ss">
                                </div>

                                <!-- Item Updates? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="item_update_ss">Should we send you item status updates?</label>
                                    <input disabled class="w3-light-gray" placeholder="<?php echo $_SESSION['item_update_ss'] ?>" id="item_update_ss">
                                </div>
                            </div>

                            <!-- Edit Button -->
                            <div>
                                <a style="float: left; width: 15%;" onClick="history.go(-2)" class="w3-button w3-medium w3-green-continue">Edit</a>
                            </div>
                    </fieldset>

                    <!-- Item Details Preview -->
                    <div class="formtitle">Item Details</div>
                    <fieldset class="nofieldset" style="margin: 30px 0 50px">
                        <legend class="legend-middle" style="font-style: normal; margin-bottom: 20px">Item Dimensions</legend>
                            <div class="row">
                                <!-- Storage Option -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="storage_type_ss">Storage Option</label>
                                    <input disabled placeholder="<?php echo $_SESSION['storage_type_ss'] ?>" class="w3-light-gray" id="storage_type_ss">
                                </div>

                                <!-- Item Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="item_type_ss">Item Type</label>
                                    <input disabled placeholder="<?php echo $_SESSION['item_type_ss'] ?>" class="w3-light-gray" id="item_type_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Briefly Describe 'Item Type' -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="other_ss">'Item Type' Description</label>
                                    <input disabled placeholder="<?php echo $_SESSION['other_ss'] ?>" class="w3-light-gray" id="other_ss">
                                </div>

                                <!-- Items Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth_ss">Item's Worth (USD)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['worth_ss'] ?>" class="w3-light-gray" id="worth_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Storage Duration -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="duration_ss">Storage Duration (weeks)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['duration_ss'] ?>" class="w3-light-gray" id="duration_ss">
                                </div>

                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="weight_ss">Weight (pounds)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['weight_ss'] ?>" class="w3-light-gray" id="weight_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="length_ss">Length (inches)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['length_ss'] ?>" class="w3-light-gray" id="length_ss">
                                </div>

                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="width_ss">Width (inches)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['width_ss'] ?>" class="w3-light-gray" id="width_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Color -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="color_ss">Colour</label>
                                    <input disabled placeholder="<?php echo $_SESSION['color_ss'] ?>" class="w3-light-gray" id="color_ss">
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="height_ss">Height (inches)</label>
                                    <input disabled placeholder="<?php echo $_SESSION['height_ss'] ?>" class="w3-light-gray" id="height_ss">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="item_descr_ss">Additional Information about item</label>
                                    <textarea disabled placeholder="<?php echo $_SESSION['item_descr_ss'] ?>" class="w3-light-gray" id="item_descr_ss"></textarea>
                                </div>
                            </div>

                                <!-- Show other shipments -->
                                <div style="margin: 0 0 40px;" class="sliderWrapper">
                                    <span id="textchange" style="margin-left: 0" onclick="secondItem()">
                                        + show other items
                                    </span>
                                </div>

                                <!-- 2nd item -->
                                <fieldset id="secondItem" class="nofieldset" style="margin: 30px 0 10px; display: none">
                                    <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif; margin: 20px auto">2nd Item Details</legend>
                                        <div class="row">
                                            <!-- Storage Option -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="storage_type_ss_2">Storage Option</label>
                                                <input disabled placeholder="<?php echo $_SESSION['storage_type_ss_2'] ?>" class="w3-light-gray" id="storage_type_ss_2">
                                            </div>

                                            <!-- Item Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="item_type_ss_2">Item Type</label>
                                                <input disabled placeholder="<?php echo $_SESSION['item_type_ss_2'] ?>" class="w3-light-gray" id="item_type_ss_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Briefly Describe 'Item Type' -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="other_ss_2">'Item Type' Description</label>
                                                <input disabled placeholder="<?php echo $_SESSION['other_ss_2'] ?>" class="w3-light-gray" id="other_ss_2">
                                            </div>

                                            <!-- Items Worth -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="worth_ss_2">Item's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['worth_ss_2'] ?>" class="w3-light-gray" id="worth_ss_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Storage Duration -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="duration_ss_2">Storage Duration (weeks)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['duration_ss_2'] ?>" class="w3-light-gray" id="duration_ss_2">
                                            </div>

                                            <!-- Weight -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="weight_ss_2">Weight (pounds)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['weight_ss_2'] ?>" class="w3-light-gray" id="weight_ss_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Length -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="length_ss_2">Length (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['length_ss_2'] ?>" class="w3-light-gray" id="length_ss_2">
                                            </div>

                                            <!-- Width -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="width_ss_2">Width (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['width_ss_2'] ?>" class="w3-light-gray" id="width_ss_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Colour -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="colour_ss_2">Colour</label>
                                                <input disabled placeholder="<?php echo $_SESSION['color_ss_2'] ?>" class="w3-light-gray" id="colour_ss_2">
                                            </div>

                                            <!-- Height -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="height_ss_2">Height (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['height_ss_2'] ?>" class="w3-light-gray" id="height_ss_2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Additional Info -->
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="item_descr_ss_2">Additional Information about item</label>
                                                <textarea disabled placeholder="<?php echo $_SESSION['item_descr_ss_2'] ?>" class="w3-light-gray" id="item_descr_ss_2"></textarea>
                                            </div>
                                        </div>
                                </fieldset>

                                <!-- 3rd item -->
                                <fieldset id="thirdItem" class="nofieldset" style="margin: 30px 0 10px; display: none">
                                    <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif; margin: 20px auto">3rd Item Details</legend>
                                        <div class="row">
                                            <!-- Storage Option -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="storage_type_ss_3">Storage Option</label>
                                                <input disabled placeholder="<?php echo $_SESSION['storage_type_ss_3'] ?>" class="w3-light-gray" id="storage_type_ss_3">
                                            </div>

                                            <!-- Item Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="item_type_ss_3">Item Type</label>
                                                <input disabled placeholder="<?php echo $_SESSION['item_type_ss_3'] ?>" class="w3-light-gray" id="item_type_ss_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Briefly Describe 'Item Type' -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="other_ss_3">'Item Type' Description</label>
                                                <input disabled placeholder="<?php echo $_SESSION['other_ss_3'] ?>" class="w3-light-gray" id="other_ss_3">
                                            </div>

                                            <!-- Items Worth -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="worth_ss_3">Item's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['worth_ss_3'] ?>" class="w3-light-gray" id="worth_ss_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Storage Duration -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="duration_ss_3">Storage Duration (weeks)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['duration_ss_3'] ?>" class="w3-light-gray" id="duration_ss_3">
                                            </div>

                                            <!-- Weight -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="weight_ss_3">Weight (pounds)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['weight_ss_3'] ?>" class="w3-light-gray" id="weight_ss_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Length -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="length_ss_3">Length (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['length_ss_3'] ?>" class="w3-light-gray" id="length_ss_3">
                                            </div>

                                            <!-- Width -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="width_ss_3">Width (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['width_ss_3'] ?>" class="w3-light-gray" id="width_ss_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Colour -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="colour_ss_3">Colour</label>
                                                <input disabled placeholder="<?php echo $_SESSION['color_ss_3'] ?>" class="w3-light-gray" id="colour_ss_3">
                                            </div>

                                            <!-- Height -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="height_ss_3">Height (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['height_ss_3'] ?>" class="w3-light-gray" id="height_ss_3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Additional Info -->
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="item_descr_ss_3">Additional Information about item</label>
                                                <textarea disabled placeholder="<?php echo $_SESSION['item_descr_ss_3'] ?>" class="w3-light-gray" id="item_descr_ss_3"></textarea>
                                            </div>
                                        </div>
                                </fieldset>

                                <!-- 4th item -->
                                <fieldset id="fourthItem" class="nofieldset" style="margin: 30px 0 0; display: none">
                                    <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif; margin: 20px auto">4th Item Details</legend>
                                        <div class="row">
                                            <!-- Storage Option -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="storage_type_ss_4">Storage Option</label>
                                                <input disabled placeholder="<?php echo $_SESSION['storage_type_ss_4'] ?>" class="w3-light-gray" id="storage_type_ss_4">
                                            </div>

                                            <!-- Item Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="item_type_ss_4">Item Type</label>
                                                <input disabled placeholder="<?php echo $_SESSION['item_type_ss_4'] ?>" class="w3-light-gray" id="item_type_ss_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Briefly Describe Item Type -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="other_ss_4">'Item Type' Description</label>
                                                <input disabled placeholder="<?php echo $_SESSION['other_ss_4'] ?>" class="w3-light-gray" id="other_ss_4">
                                            </div>

                                            <!-- Items Worth -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="worth_ss_4">Item's Worth (USD)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['worth_ss_4'] ?>" class="w3-light-gray" id="worth_ss_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Storage Duration -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="duration_ss_4">Storage Duration (weeks)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['duration_ss_4'] ?>" class="w3-light-gray" id="duration_ss_4">
                                            </div>

                                            <!-- Weight -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="weight_ss_4">Weight (pounds)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['weight_ss_4'] ?>" class="w3-light-gray" id="weight_ss_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Length -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="length_ss_4">Length (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['length_ss_4'] ?>" class="w3-light-gray" id="length_ss_4">
                                            </div>

                                            <!-- Width -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="width_ss_4">Width (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['width_ss_4'] ?>" class="w3-light-gray" id="width_ss_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Colour -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="colour_ss_4">Colour</label>
                                                <input disabled placeholder="<?php echo $_SESSION['color_ss_4'] ?>" class="w3-light-gray" id="colour_ss_4">
                                            </div>

                                            <!-- Height -->
                                            <div class="col-xs-12 col-sm-6">
                                                <label for="height_ss_4">Height (inches)</label>
                                                <input disabled placeholder="<?php echo $_SESSION['height_ss_4'] ?>" class="w3-light-gray" id="height_ss_4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Additional Info -->
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="item_descr_ss_4">Additional Information about the item</label>
                                                <textarea disabled placeholder="<?php echo $_SESSION['item_descr_ss_4'] ?>" class="w3-light-gray" id="item_descr_ss_4"></textarea>
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
<!--                            <button type="reset" class="w3-button w3-medium w3-red-cancel">Cancel</button>-->
                        </div>
                    </div>

                <!-- End of form -->
              </form>
            </div>
        </div>
    </div>


    <!-- Edit button -->
    <script>
        let but = document.querySelector('editInfo');
        but.addEventListener('click', editInfo);

        function editInfo() {
            let e = document.getElementById('edit');
            e.disabled = ((e.disabled !== true));

            let b = document.getElementById('info');
            b.innerHTML = ((b.innerHTML !== 'Edit (ON)') ?  'Edit (ON)' : 'Edit (OFF)');
        }
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

    <!-- show other items -->
    <script>
        var btn = document.querySelector('secondItem');
        btn.addEventListener('click', secondItem);

        function secondItem() {
            var e = document.getElementById('secondItem');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var a = document.getElementById('textchange');
            a.innerText = ((a.innerText !== '+ show other items') ?  '+ show other items' : '- hide other items');

            var e1 = document.getElementById('thirdItem');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');

            var e2 = document.getElementById('fourthItem');
            e2.style.display = ((e2.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- hide other items -->
    <script>
        var btn = document.querySelector('hideItems');
        btn.addEventListener('click', hideItems);

        function hideItems() {
            var e = document.getElementById('secondItem');
            e.style.display = 'none';

            var e1 = document.getElementById('thirdItem');
            e1.style.display = 'none';

            var e2 = document.getElementById('fourthItem');
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
