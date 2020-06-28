<?php
    //let's start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name_ss']))
        $_SESSION['name_ss']=$_POST['name_ss'];
    if(isset($_POST['contactname_ss']))
        $_SESSION['contactname_ss']=$_POST['contactname_ss'];
    if(isset($_POST['gender_ss']))
        $_SESSION['gender_ss']=$_POST['gender_ss'];
    if(isset($_POST['title_ss']))
        $_SESSION['title_ss']=$_POST['title_ss'];
    if(isset($_POST['age_ss']))
        $_SESSION['age_ss']=$_POST['age_ss'];
    if(isset($_POST['occupation_ss']))
        $_SESSION['occupation_ss']=$_POST['occupation_ss'];
    if(isset($_POST['phone_ss']))
        $_SESSION['phone_ss']=$_POST['phone_ss'];
    if(isset($_POST['email_ss']))
        $_SESSION['email_ss']=$_POST['email_ss'];
    if(isset($_POST['country_ss']))
        $_SESSION['country_ss']=$_POST['country_ss'];
    if(isset($_POST['state_ss']))
        $_SESSION['state_ss']=$_POST['state_ss'];
    if(isset($_POST['city_ss']))
        $_SESSION['city_ss']=$_POST['city_ss'];
    if(isset($_POST['zipcode_ss']))
        $_SESSION['zipcode_ss']=$_POST['zipcode_ss'];
    if(isset($_POST['address_ss']))
        $_SESSION['address_ss']=$_POST['address_ss'];
    if(isset($_POST['apt_ss']))
        $_SESSION['apt_ss']=$_POST['apt_ss'];
    if(isset($_POST['dept_ss']))
        $_SESSION['dept_ss']=$_POST['dept_ss'];
    if(isset($_POST['resAdd_ss']))
        $_SESSION['resAdd_ss']=$_POST['resAdd_ss'];
    if(isset($_POST['item_update_ss']))
        $_SESSION['item_update_ss']=$_POST['item_update_ss'];

    // Sanitizing email field to remove unwanted characters.
    $_POST['email_ss'] = filter_var($_POST['email_ss'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_ss'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        //header("location: quote-ss.php");   //redirecting to first page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Secure Storage - Item Details)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">

    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="./css/w3.css" type="text/css" rel="stylesheet">
    <link href="./css/mobile-menu-top.css" type="text/css" rel="stylesheet">

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
            background-image: url("images/ss-pic1.jpg");

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

        .container-form input[type="color"] {
            height: 50px;
            cursor: pointer;
            padding: 0.9em 0;
            border-radius: 0;
            border: 0 solid rgba(100, 150, 238, 0.51);
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 30px;
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
                <span class="step active"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 2 of 3)</span>
            </div>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                    <!-- Express Courier Get a quote form -->
                    <form class="container-form"  style="padding-bottom: 0" method="post" action="quote-ss-review.php">
                        <h3 class="h3-contactform">So, what are we looking at?</h3>
                        <div class="formtitle">Item Details</div>

                        <!-- 1st Item details -->
                        <fieldset class="nofieldset" style="padding-bottom: 50px">
                            <legend class="legend-middle"><span style="font-family: Roboto, serif">*</span>&nbsp;&nbsp;Indicates required fields</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="storage_type_ss">Storage Option <span class="required">*</span></label>
                                                <select name="storage_type_ss" id="storage_type_ss" type="select" required>
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Secure Storage">Secure Storage</option>
                                                    <option value="Secure Storage plus">Secure Storage + </option>
                                                    <option value="Secure Storage plus plus">Secure Storage ++ </option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="item_type_ss">Select Item Type <span class="required">*</span></label>
                                                <select name="item_type_ss" id="item_type_ss" type="select" required>
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Document">Document</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Mobile Phone">Mobile Phone</option>
                                                    <option value="Computer">Computer</option>
                                                    <option value="Fabric">Fabric</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Wine">Wine and/or Cigars</option>
                                                    <option value="Perishable">Perishables</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Briefly Describe Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Describe Item type">
                                            <label for="other_ss">'Item Type' Description <span class="required">*</span></label>
                                            <input class="input100" type="text" id="other_ss" name="other_ss" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Item's worth">
                                            <label for="worth_ss">Declared Value (USD) <span class="required">*</span></label>
                                            <input class="input100" type="number" name="worth_ss" id="worth_ss" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Storage duration">
                                            <label for="duration_ss">Storage Duration (in weeks) <span class="required">*</span></label>
                                            <input class="input100" type="number" name="duration_ss" id="duration_ss" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Weight">
                                            <label for="weight_ss">Weight (pounds) <span class="required">*</span></label>
                                            <input class="input100" type="number" name="weight_ss"  id="weight_ss" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Length">
                                            <label for="length_ss">Length (inches) <span class="required">*</span></label>
                                            <input class="input100" type="number" name="length_ss"  id="length_ss" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Width">
                                            <label for="width_ss">Width (inches) <span class="required">*</span></label>
                                            <input class="input100" name="width_ss" id="width_ss" type="number" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Height">
                                            <label for="height_ss">Height (inches) <span class="required">*</span></label>
                                            <input class="input100" type="number" name="height_ss" id="height_ss" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Color -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-26 m-b-35" data-validate = "Enter Item Color">
                                            <label for="color_ss">Colour <span class="required">*</span></label>
                                            <input class="input100" name="color_ss" id="color_ss" type="color" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-48 m-b-35" data-validate = "">
                                            <label for="item_descr_ss">Anything else we should know about your item?</label>
                                            <textarea style="height: 120px" class="input100" type="text" name="item_descr_ss" id="item_descr_ss"></textarea>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Add 2nd shipment -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0" onclick="secondItem()">
                                + Add a 2nd item
                            </span>
                        </div>

                        <!-- 2nd Item details -->
                        <fieldset class="nofieldset" id="secondItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif">2nd Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="storage_type_ss_2">Storage Option</label>
                                                <select name="storage_type_ss_2" id="storage_type_ss_2" type="select">
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Secure Storage">Secure Storage</option>
                                                    <option value="Secure Storage plus">Secure Storage +</option>
                                                    <option value="Secure Storage plus plus">Secure Storage ++</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="item_type_ss_2">Select Item Type</label>
                                                <select name="item_type_ss_2" id="item_type_ss_2" type="select">
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Document">Document</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Mobile Phone">Mobile Phone</option>
                                                    <option value="Computer">Computer</option>
                                                    <option value="Fabric">Fabric</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Wine">Wine and/or Cigars</option>
                                                    <option value="Perishable">Perishables</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Briefly Describe Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Describe Item type">
                                            <label for="other_ss_2">'Item Type' Description</label>
                                            <input class="input100" type="text" id="other_ss_2" name="other_ss_2">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Item's worth">
                                            <label for="worth_ss_2">Declared Value (USD) </label>
                                            <input class="input100" type="number" name="worth_ss_2" id="worth_ss_2">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter storage duration">
                                            <label for="duration_ss_2">Storage Duration (in weeks) </label>
                                            <input class="input100" type="number" name="duration_ss_2" id="duration_ss_2">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Weight">
                                            <label for="weight_ss_2">Weight (pounds) </label>
                                            <input class="input100" type="number" name="weight_ss_2"  id="weight_ss_2">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Length">
                                            <label for="length_ss_2">Length (inches) </label>
                                            <input class="input100" type="number" name="length_ss_2"  id="length_ss_2">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Width">
                                            <label for="width_ss_2">Width (inches) </label>
                                            <input class="input100" name="width_ss_2" id="width_ss_2" type="number">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Height">
                                            <label for="height_ss_2">Height (inches) </label>
                                            <input class="input100" type="number" name="height_ss_2" id="height_ss_2">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-26 m-b-35" data-validate = "Enter Item Color">
                                            <label for="color_ss_2">Colour </label>
                                            <input class="input100" name="color_ss_2" id="color_ss_2" type="color">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-48 m-b-35" data-validate = "">
                                            <label for="item_descr_ss_2">Anything else we should know about your item?</label>
                                            <textarea style="height: 120px" class="input100" type="text" name="item_descr_ss_2" id="item_descr_ss_2"></textarea>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Add 3rd shipment -->
                        <div class="sliderWrapper">
                            <span id="add3rdItem" style="margin-left: 0; display: none" onclick="thirdItem()">
                                + Add a 3rd item
                            </span>
                        </div>

                        <!-- 3rd Item details -->
                        <fieldset class="nofieldset" id="thirdItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif">3rd Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="storage_type_ss_3">Storage Option</label>
                                                <select name="storage_type_ss_3" id="storage_type_ss_3" type="select">
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Secure Storage">Secure Storage</option>
                                                    <option value="Secure Storage plus">Secure Storage + </option>
                                                    <option value="Secure Storage plus plus">Secure Storage ++ </option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="item_type_ss_3">Select Item Type</label>
                                                <select name="item_type_ss_3" id="item_type_ss_3" type="select">
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Document">Document</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Mobile Phone">Mobile Phone</option>
                                                    <option value="Computer">Computer</option>
                                                    <option value="Fabric">Fabric</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Wine">Wine and/or Cigars</option>
                                                    <option value="Perishable">Perishables</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Briefly Describe Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Describe Item type">
                                            <label for="other_ss_3">'Item Type' Description</label>
                                            <input class="input100" type="text" id="other_ss_3" name="other_ss_3">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Item's worth">
                                            <label for="worth_ss_3">Declared Value (USD)</label>
                                            <input class="input100" type="number" name="worth_ss_3" id="worth_ss_3">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter storage duration">
                                            <label for="duration_ss_3">Storage Duration (in weeks)</label>
                                            <input class="input100" type="number" name="duration_ss_3" id="duration_ss_3">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Weight">
                                            <label for="weight_ss_3">Weight (pounds)</label>
                                            <input class="input100" type="number" name="weight_ss_3"  id="weight_ss_3">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Length">
                                            <label for="length_ss_3">Length (inches)</label>
                                            <input class="input100" type="number" name="length_ss_3"  id="length_ss_3">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Width">
                                            <label for="width_ss_3">Width (inches)</label>
                                            <input class="input100" name="width_ss_3" id="width_ss_3" type="number">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Height">
                                            <label for="height_ss_3">Height (inches)</label>
                                            <input class="input100" type="number" name="height_ss_3" id="height_ss_3">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-26 m-b-35" data-validate = "Enter Item Color">
                                            <label for="color_ss_3">Color</label>
                                            <input class="input100" name="color_ss_3" id="color_ss_3" type="color">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-48 m-b-35" data-validate = "">
                                            <label for="item_descr_ss_3">Anything else we should know about your item?</label>
                                            <textarea style="height: 120px" class="input100" type="text" name="item_descr_ss_3" id="item_descr_ss_3"></textarea>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Add 4th shipment -->
                        <div class="sliderWrapper">
                            <span id="add4thItem" style="margin-left: 0; display: none" onclick="fourthItem('fourthItem')">
                                + Add a 4th item
                            </span>
                        </div>

                        <!-- 4th Item details -->
                        <fieldset class="nofieldset" id="fourthItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif">4th Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="storage_type_ss_4">Storage Option </label>
                                                <select name="storage_type_ss_4" id="storage_type_ss_4" type="select">
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Secure Storage">Secure Storage</option>
                                                    <option value="Secure Storage plus">Secure Storage + </option>
                                                    <option value="Secure Storage plus plus">Secure Storage ++ </option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="item_type_ss_4">Select Item Type </label>
                                                <select name="item_type_ss_4" id="item_type_ss_4" type="select">
                                                    <option value="" disabled="disabled" selected="selected"></option>
                                                    <option value="Document">Document</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Mobile Phone">Mobile Phone</option>
                                                    <option value="Computer">Computer</option>
                                                    <option value="Fabric">Fabric</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Wine">Wine and/or Cigars</option>
                                                    <option value="Perishable">Perishables</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Briefly Describe Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Describe Item type">
                                            <label for="other_ss_4">'Item Type' Description </label>
                                            <input class="input100" type="text" id="other_ss_4" name="other_ss_4">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Item's worth">
                                            <label for="worth_ss_4">Declared Value (USD) </label>
                                            <input class="input100" type="number" name="worth_ss_4" id="worth_ss_4">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter storage duration">
                                            <label for="duration_ss_4">Storage Duration (in weeks) </label>
                                            <input class="input100" type="number" name="duration_ss_4" id="duration_ss_4">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Weight">
                                            <label for="weight_ss_4">Weight (pounds) </label>
                                            <input class="input100" type="number" name="weight_ss_4"  id="weight_ss_4">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Length">
                                            <label for="length_ss_4">Length (inches) </label>
                                            <input class="input100" type="number" name="length_ss_4"  id="length_ss_4">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Width">
                                            <label for="width_ss_4">Width (inches) </label>
                                            <input class="input100" name="width_ss_4" id="width_ss_4" type="number">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Height">
                                            <label for="height_ss_4">Height (inches) </label>
                                            <input class="input100" type="number" name="height_ss_4" id="height_ss_4">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-26 m-b-35" data-validate = "Enter Item Color">
                                            <label for="color_ss_4">Colour </label>
                                            <input class="input100" name="color_ss_4" id="color_ss_4" type="color">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-48 m-b-35" data-validate = "">
                                            <label for="item_descr_ss_4">Anything else we should know about your item?</label>
                                            <textarea style="height: 120px" class="input100" type="text" name="item_descr_ss_4" id="item_descr_ss_4"></textarea>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Continue and Cancel Button -->
                        <div class="w3-center">
                            <div class="w3-bar">
                                <button onClick="history.go(-1)" class="w3-button w3-medium w3-black-previous">Previous</button>
                                <button type="submit" value="Next" class="w3-button w3-medium w3-green-continue">Next</button>
                                <button type="reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
                            </div>
                        </div>

                <!-- End of form -->
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript to change color of <option selected> -->
    <script>
        $(".choice").change(function () {
            if($(this).val() === "0") $(this).addClass("empty");
            else $(this).removeClass("empty")
        });

        $(".choice").change();
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

    <!-- JavaScript for Top Nav Drop Down List for Get a Quote Link (for mobile menu) -->
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

    <!-- Second Shipment toggle -->
    <script>
        var btn = document.querySelector('secondItem');
        btn.addEventListener('click', secondItem);

        function secondItem() {
            var e = document.getElementById('secondItem');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add3rdItem');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- Third Shipment toggle -->
    <script>
        var btn = document.querySelector('thirdItem');
        btn.addEventListener('click', thirdItem);

        function thirdItem() {
            var e = document.getElementById('thirdItem');
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add4thItem');
            e1.style.display = ((e1.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- 4th Shipment toggle -->
    <script>
        function fourthItem(fourthItem) {
            var e = document.getElementById(fourthItem);
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <script src="js/main.js"></script>

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



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
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>
