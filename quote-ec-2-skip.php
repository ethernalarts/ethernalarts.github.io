<?php
    //let's start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    if(isset($_POST['notify_ec']))
        $_SESSION['notify_ec']=$_POST['notify_ec'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Domestic Shipping - Package Details)</title>

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
            background-image: url("images/ec-pic2.jpg");

            /* Set a specific height */
            min-height: 430px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 270px;
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

            .subheader-h2 {
                margin-top: 280px;
            }
        }

        /* On screens that are 700px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 750px) {
            .container {
                padding: 0 20px;
            }

            .subheader-h2 {
                margin-top: 280px;
            }

            .container-form input, .container-form select {
                width: 100%;
            }

            .w3-button.w3-red-cancel {
                margin-top: 12px;
                width: 40%;
            }

            .w3-button.w3-green-continue {
                width: 40%;
            }

            .w3-button.w3-black-previous {
                width: 40% !important;
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
        <div class="subheader-h2" style="width: 440px;">Quote - Domestic Shipping</div>
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
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 3 of 5)</span>
            </div>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-4">

                    <!-- Domestic Shipping Get a quote form -->
                    <form class="container-form"  style="padding-bottom: 0" method="post" action="quote-ec-3-skip.php">
                        <h3 class="h3-contactform">So, what are we looking at?</h3>
                        <div class="formtitle">Package Details</div>
                        <!-- 1st Package Details -->
                        <fieldset class="nofieldset" style="margin-bottom: 30px">
                            <legend class="legend-middle"><span class="required">*</span>&nbsp;&nbsp;Indicates required fields</legend>
                                <div class="row">
                                    <!-- Package Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-35 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="package_type" type="select" required>
                                                    <option disabled="disabled" selected="selected">Package Type  *</option>
                                                    <option value="Luggage">Luggage</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Laptop">Computer (Laptop)</option>
                                                    <option value="Desktop">Computer (Desktop)</option>
                                                    <option value="Document">Document</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delivery Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-35 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="delivery_options" type="select" required>
                                                    <option disabled="disabled" selected="selected">Delivery Option  *</option>
                                                    <option value="VLink Ground">VLink Ground</option>
                                                    <option value="VLink Next Day Air">VLink Next Day Air</option>
                                                    <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                                    <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                                    <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                                    <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                                    <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                                    <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                                    <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                                    <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Package Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="text" name="other">
                                            <span class="focus-input100" data-placeholder="If package type is 'OTHER', specify"></span>
                                        </div>
                                    </div>

                                    <!-- Package's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Package's worth">
                                            <input class="input100" type="number" name="worth" required>
                                            <span class="focus-input100" data-placeholder="Declared Value (USD)  *"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Weight">
                                            <input class="input100" type="number" name="weight" required>
                                            <span class="focus-input100" data-placeholder="Weight (inches)  *"></span>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Length">
                                            <input class="input100" type="number" name="length" required>
                                            <span class="focus-input100" data-placeholder="Length (inches) *"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Width">
                                            <input class="input100" type="number" name="width" required>
                                            <span class="focus-input100" data-placeholder="Width (inches)  *"></span>
                                        </div>
                                    </div>

                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Height">
                                            <input class="input100" type="number" name="height" required>
                                            <span class="focus-input100" data-placeholder="Height (inches) *"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Package Color">
                                            <input class="input100" name="colour" type="text" required>
                                            <span class="focus-input100" data-placeholder="Color  *"></span>
                                        </div>
                                    </div>

                                    <!-- Texture -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Package Texture">
                                            <input class="input100" name="texture" type="text" required>
                                            <span class="focus-input100" data-placeholder="Texture *"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <textarea class="input100" type="text" name="package_description"></textarea>
                                            <span class="focus-input100" data-placeholder="Anything else we should know about your package?"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Add 2nd package -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0" onclick="secondPackage()">
                                + Add a 2nd package
                            </span>
                        </div>

                        <!-- 2nd Package Details -->
                        <fieldset class="nofieldset" id="secondPackage" style="margin: 0 0 20px; display: none">
                            <legend class="legend-right">2nd Package Details</legend>
                                <div class="row">
                                    <!-- Package Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-25 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="package_type_2" type="select">
                                                    <option disabled="disabled" selected="selected">Package Type</option>
                                                    <option value="Luggage">Luggage</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Laptop">Computer (Laptop)</option>
                                                    <option value="Desktop">Computer (Desktop)</option>
                                                    <option value="Document">Document</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delivery Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-25 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="delivery_options_2" type="select">
                                                    <option disabled="disabled" selected="selected">Delivery Option</option>
                                                    <option value="VLink Ground">VLink Ground</option>
                                                    <option value="VLink Next Day Air">VLink Next Day Air</option>
                                                    <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                                    <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                                    <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                                    <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                                    <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                                    <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                                    <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                                    <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Package Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="text" name="other_2">
                                            <span class="focus-input100" data-placeholder="If package type is 'OTHER', specify"></span>
                                        </div>
                                    </div>

                                    <!-- Package's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="worth_2">
                                            <span class="focus-input100" data-placeholder="Declared Value (USD)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="weight_2">
                                            <span class="focus-input100" data-placeholder="Weight (inches)"></span>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="length_2">
                                            <span class="focus-input100" data-placeholder="Length (inches)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="width_2">
                                            <span class="focus-input100" data-placeholder="Width (inches)"></span>
                                        </div>
                                    </div>

                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="height_2">
                                            <span class="focus-input100" data-placeholder="Height (inches)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" name="colour_2" type="text">
                                            <span class="focus-input100" data-placeholder="Color"></span>
                                        </div>
                                    </div>

                                    <!-- Texture -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" name="texture_2" type="text">
                                            <span class="focus-input100" data-placeholder="Texture"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <textarea class="input100" type="text" name="package_description_2"></textarea>
                                            <span class="focus-input100" data-placeholder="Anything else we should know about your package?"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Add 3rd shipment -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0; display: none" id="add3rdPackage" onclick="thirdPackage()">
                                + Add a 3rd package
                            </span>
                        </div>

                        <!-- 3rd Package Details -->
                        <fieldset class="nofieldset" id="thirdPackage" style="margin: 0 0 20px; display: none">
                            <legend class="legend-right">3rd Package Details</legend>
                                <div class="row">
                                    <!-- Package Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-25 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="package_type_3" type="select">
                                                    <option disabled="disabled" selected="selected">Package Type</option>
                                                    <option value="Luggage">Luggage</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Laptop">Computer (Laptop)</option>
                                                    <option value="Desktop">Computer (Desktop)</option>
                                                    <option value="Document">Document</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delivery Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-25 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="delivery_options_3" type="select">
                                                    <option disabled="disabled" selected="selected">Delivery Option</option>
                                                    <option value="VLink Ground">VLink Ground</option>
                                                    <option value="VLink Next Day Air">VLink Next Day Air</option>
                                                    <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                                    <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                                    <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                                    <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                                    <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                                    <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                                    <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                                    <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Package Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="text" name="other_3">
                                            <span class="focus-input100" data-placeholder="If package type is 'OTHER', specify"></span>
                                        </div>
                                    </div>

                                    <!-- Package's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="worth_3">
                                            <span class="focus-input100" data-placeholder="Declared Value (USD)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="weight_3">
                                            <span class="focus-input100" data-placeholder="Weight (inches)"></span>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="length_3">
                                            <span class="focus-input100" data-placeholder="Length (inches)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="width_3">
                                            <span class="focus-input100" data-placeholder="Width (inches)"></span>
                                        </div>
                                    </div>

                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="height_3">
                                            <span class="focus-input100" data-placeholder="Height (inches)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" name="colour_3" type="text">
                                            <span class="focus-input100" data-placeholder="Color"></span>
                                        </div>
                                    </div>

                                    <!-- Texture -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" name="texture_3" type="text">
                                            <span class="focus-input100" data-placeholder="Texture"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <textarea class="input100" type="text" name="package_description_3"></textarea>
                                            <span class="focus-input100" data-placeholder="Anything else we should know about your package?"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <!-- Add 4th shipment -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0; display: none" id="add4thPackage" onclick="fourthPackage('fourthPackage')">
                                + Add a 4th package
                            </span>
                        </div>

                        <!-- 4th Package Details -->
                        <fieldset class="nofieldset" id="fourthPackage" style="margin: 0 0 20px; display: none">
                            <legend class="legend-right">4th Package Details</legend>
                                <div class="row">
                                    <!-- Package Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-25 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="package_type_4" type="select">
                                                    <option disabled="disabled" selected="selected">Package Type</option>
                                                    <option value="Luggage">Luggage</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Laptop">Computer (Laptop)</option>
                                                    <option value="Desktop">Computer (Desktop)</option>
                                                    <option value="Document">Document</option>
                                                    <option value="Battery">Battery</option>
                                                    <option value="Machine Parts">Machine Parts</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delivery Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-25 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="delivery_options_4" type="select">
                                                    <option disabled="disabled" selected="selected">Delivery Option</option>
                                                    <option value="VLink Ground">VLink Ground</option>
                                                    <option value="VLink Next Day Air">VLink Next Day Air</option>
                                                    <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                                    <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                                    <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                                    <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                                    <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                                    <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                                    <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                                    <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Package Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="text" name="other_4">
                                            <span class="focus-input100" data-placeholder="If package type is 'OTHER', specify"></span>
                                        </div>
                                    </div>

                                    <!-- Package's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="worth_4">
                                            <span class="focus-input100" data-placeholder="Declared Value (USD)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="weight_4">
                                            <span class="focus-input100" data-placeholder="Weight (inches)"></span>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="length_4">
                                            <span class="focus-input100" data-placeholder="Length (inches)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="width_4">
                                            <span class="focus-input100" data-placeholder="Width (inches)"></span>
                                        </div>
                                    </div>

                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" type="number" name="height_4">
                                            <span class="focus-input100" data-placeholder="Height (inches)"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" name="colour_4" type="text">
                                            <span class="focus-input100" data-placeholder="Color"></span>
                                        </div>
                                    </div>

                                    <!-- Texture -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <input class="input100" name="texture_4" type="text">
                                            <span class="focus-input100" data-placeholder="Texture"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <textarea class="input100" type="text" name="package_description_4"></textarea>
                                            <span class="focus-input100" data-placeholder="Anything else we should know about your package?"></span>
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

    <!-- Second Package toggle -->
    <script>
        var btn = document.querySelector('secondPackage');
        btn.addEventListener('click', secondPackage);

        function secondPackage() {
            var e = document.getElementById('secondPackage');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add3rdPackage');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- Third Package toggle -->
    <script>
        var btn = document.querySelector('thirdPackage');
        btn.addEventListener('click', thirdPackage);

        function thirdPackage() {
            var e = document.getElementById('thirdPackage');
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add4thPackage');
            e1.style.display = ((e1.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- 4th Shipment toggle -->
    <script>
        function fourthPackage(fourthPackage) {
            var e = document.getElementById(fourthPackage);
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <script src="js/main.js"></script>

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
