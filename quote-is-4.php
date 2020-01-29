<?php
    //start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name_dest']))
        $_SESSION['name_dest']=$_POST['name_dest'];
    if(isset($_POST['contact_name_dest']))
        $_SESSION['contact_name_dest']=$_POST['contact_name_dest'];
    if(isset($_POST['gender_dest']))
        $_SESSION['gender_dest']=$_POST['gender_dest'];
    if(isset($_POST['title_dest']))
        $_SESSION['title_dest']=$_POST['title_dest'];
    if(isset($_POST['phone_dest']))
        $_SESSION['phone_dest']=$_POST['phone_dest'];
    if(isset($_POST['country_dest']))
        $_SESSION['country_dest']=$_POST['country_dest'];
    if(isset($_POST['state_dest']))
        $_SESSION['state_dest']=$_POST['state_dest'];
    if(isset($_POST['city_dest']))
        $_SESSION['city_dest']=$_POST['city_dest'];
    if(isset($_POST['zip_code_dest']))
        $_SESSION['zip_code_dest']=$_POST['zip_code_dest'];
    if(isset($_POST['street_add_dest']))
        $_SESSION['street_add_dest']=$_POST['street_add_dest'];
    if(isset($_POST['street_add2_dest']))
        $_SESSION['street_add2_dest']=$_POST['street_add2_dest'];
    if(isset($_POST['department_dest']))
        $_SESSION['department_dest']=$_POST['department_dest'];
    if(isset($_POST['email_dest']))
        $_SESSION['email_dest']=$_POST['email_dest'];
    if(isset($_POST['residential_add_dest']))
        $_SESSION['residential_add_dest']=$_POST['residential_add_dest'];
    if(isset($_POST['notify_dest']))
        $_SESSION['notify_dest']=$_POST['notify_dest'];

    // Sanitizing email field to remove unwanted characters.
    $_POST['email_dest'] = filter_var($_POST['email_dest'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_dest'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-is-3.php");     //redirecting to third page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier Ltd - Get a Quote (International Shipping - Shipment Details)</title>

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
            background-image: url("images/is-pic4.jpg");

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
            margin: 0;
            font-size: 18px;
            border: 0;
            padding: 0;
        }

        .container-form input[type="color"] {
            height: 50px;
            cursor: pointer;
            padding: 0.9em 0;
            border-radius: 0;
            border: 0 solid rgba(100, 150, 238, 0.51);
        }

        /* On screens that are 1200px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {
            .container {
                padding: 0 80px;
            }
        }

        /* On screens that are 1000px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1000px) {
            .container {
                padding: 0 50px;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 770px) {
            .container {
                padding: 0 25px;
            }

            .col-sm-6 {
                width: 100%;
            }

            button.w3-button.w3-red-cancel {
                margin: 5px 0 0;
                width: 40%;
            }

            button.w3-button.w3-green-continue {
                width: 40%;
            }

            button.w3-button.w3-black-previous {
                width: 40% !important;
            }
        }
    </style>
</head>

<body class="body">
    <div class="parallax">
        <!-- Header with logo and navbar -->
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
                        <a href="quote-is-1.php" style="padding-top: 0" class="active">International Shipping</a>
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
              <span class="step active"></span>
              <span class="step"></span><br><br>
              <span style="font: 1.25em Montserrat, sans-serif;">(Step 4 of 5)</span>
          </div>

            <!-- Container -->
            <div class="w3-card-4">

                <!-- Shipment Dimensions -->
                <form class="container-form" style="padding-bottom: 0" method="post" action="quote-is-review.php">
                    <h3 class="h3-contactform">So, what are we looking at?</h3>
                    <div class="formtitle">Shipment Description</div>

                    <!-- 1st shipment details -->
                    <fieldset class="nofieldset" style="margin-bottom: 20px">
                        <legend style="margin-bottom: 10px" class="legend-middle">
                            <span style="font-family: Roboto, serif">*</span>&nbsp;&nbsp;Indicates required fields
                        </legend>
                            <div class="row">
                                <!-- Shipment Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-39 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="shipment_type">Shipment Type <span class="required">*</span></label>
                                            <select name="shipment_type" id="shipment_type" required>
                                                <option disabled="disabled" selected="selected"></option>
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

                                <!-- Shipment's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Shipment's worth">
                                        <label for="worth"> Shipment's Worth (USD) <span class="required">*</span></label>
                                        <input class="input100" name="worth" id="worth" type="number" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipment Type (OTHER) -->
                                <div class="col-xs-12 col-sm-12">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                        <label for="other">If you selected 'other' as shipment type above, please specify</label>
                                        <textarea style="height: 50px; padding-left: 0" class="input100" name="other" id="other"></textarea>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Please enter its weight">
                                        <label for="weight">Weight (pounds) <span class="required">*</span></label>
                                        <input class="input100" name="weight" id="weight" type="number" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Please enter its length">
                                        <label for="length">Length (inches) <span class="required">*</span></label>
                                        <input class="input100" name="length" id="length" type="number" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Please enter its width">
                                        <label for="width">Width (inches) <span class="required">*</span></label>
                                        <input class="input100" name="width" id="width" type="number" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Please enter its height">
                                        <label for="height">Height (inches) <span class="required">*</span></label>
                                        <input class="input100" name="height" id="height" type="number" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Colour -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Please select its color">
                                        <label for="colour">Colour <span class="required">*</span></label>
                                        <input class="input100" name="colour" id="colour" type="color" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>

                                <!-- Texture -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-45 m-b-35" data-validate = "Please state the texture of the shipment">
                                        <label for="texture">Texture <span class="required">*</span></label>
                                        <input class="input100" name="texture" id="texture" type="text" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <div class="wrap-input100 validate-input m-t-48 m-b-35">
                                        <label for="shipment_description">Anything else we should know about your shipment?</label>
                                        <textarea style="height: 100px; padding-left: 0" class="input100" name="shipment_description" id="shipment_description"></textarea>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>
                    </fieldset>

                    <!-- Add 2nd shipment -->
                    <div class="sliderWrapper">
                        <span id="textchange" style="margin-left: 0" onclick="secondShipment()">
                            + Add a 2nd shipment
                        </span>
                    </div>

                    <!-- 2nd Shipment Details -->
                    <fieldset class="nofieldset" id="secondShipment" style="margin: 0 0 20px; display: none">
                        <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif">2nd Shipment Details</legend>
                        <div class="row">
                            <!-- Shipment Type -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-group m-t-39 m-b-35">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <label for="shipment_type">Shipment Type</label>
                                        <select name="shipment_type_2" id="shipment_type">
                                            <option disabled="disabled" selected="selected"></option>
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

                            <!-- Shipment's Worth -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="worth"> Shipment's Worth (USD)</label>
                                    <input class="input100" name="worth_2" id="worth" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Shipment Type (OTHER) -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="other">If you selected 'other' as shipment type above, please specify</label>
                                    <textarea style="height: 50px; padding-left: 0" class="input100" name="other_2" id="other"></textarea>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Weight -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="weight">Weight (pounds)</label>
                                    <input class="input100" name="weight_2" id="weight" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Length -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="length">Length (inches)</label>
                                    <input class="input100" name="length_2" id="length" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Width -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="width">Width (inches)</label>
                                    <input class="input100" name="width_2" id="width" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Height -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="height">Height (inches)</label>
                                    <input class="input100" name="height_2" id="height" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Colour -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="colour">Colour</label>
                                    <input class="input100" name="colour_2" id="colour" type="color">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Texture -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-45 m-b-35">
                                    <label for="texture">Texture</label>
                                    <input class="input100" name="texture_2" id="texture" type="text">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Additional Info -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-input100 validate-input m-t-48 m-b-35">
                                    <label for="shipment_description">Anything else we should know about your shipment?</label>
                                    <textarea style="height: 100px; padding-left: 0" class="input100" name="shipment_description_2" id="shipment_description"></textarea>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Add 3rd shipment -->
                    <div class="sliderWrapper">
                        <span style="margin-left: 0; display: none" id="add3rdShipment" onclick="thirdShipment()">
                            + Add a 3rd shipment
                        </span>
                    </div>

                    <!-- 3rd Shipment Details -->
                    <fieldset class="nofieldset" id="thirdShipment" style="margin: 0 0 20px; display: none">
                        <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif">3rd Shipment Details</legend>
                        <div class="row">
                            <!-- Shipment Type -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-group m-t-39 m-b-35">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <label for="shipment_type">Shipment Type</label>
                                        <select name="shipment_type_3" id="shipment_type">
                                            <option disabled="disabled" selected="selected"></option>
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

                            <!-- Shipment's Worth -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="worth"> Shipment's Worth (USD)</label>
                                    <input class="input100" name="worth_3" id="worth" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Shipment Type (OTHER) -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="other">If you selected 'other' as shipment type above, please specify</label>
                                    <textarea style="height: 50px; padding-left: 0" class="input100" name="other_3" id="other"></textarea>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Weight -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="weight">Weight (pounds)</label>
                                    <input class="input100" name="weight_3" id="weight" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Length -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="length">Length (inches)</label>
                                    <input class="input100" name="length_3" id="length" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Width -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="width">Width (inches)</label>
                                    <input class="input100" name="width_3" id="width" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Height -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="height">Height (inches)</label>
                                    <input class="input100" name="height_3" id="height" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Colour -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="colour">Colour</label>
                                    <input class="input100" name="colour_3" id="colour" type="color">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Texture -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-45 m-b-35">
                                    <label for="texture">Texture</label>
                                    <input class="input100" name="texture_3" id="texture" type="text">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Additional Info -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-input100 validate-input m-t-48 m-b-35">
                                    <label for="shipment_description">Anything else we should know about your shipment?</label>
                                    <textarea style="height: 100px; padding-left: 0" class="input100" name="shipment_description_3" id="shipment_description"></textarea>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Add 4th shipment -->
                    <div class="sliderWrapper">
                        <span style="margin-left: 0; display: none" id="add4thShipment" onclick="fourthShipment('fourthShipment')">
                            + Add a 4th shipment
                        </span>
                    </div>

                    <!-- 4th Shipment Details -->
                    <fieldset class="nofieldset" id="fourthShipment" style="margin: 0 0 20px; display: none">
                        <legend class="legend-middle" style="font: normal 500 1.2em Roboto, sans-serif">4th Shipment Details</legend>
                        <div class="row">
                            <!-- Shipment Type -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-group m-t-39 m-b-35">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <label for="shipment_type">Shipment Type</label>
                                        <select name="shipment_type_4" id="shipment_type">
                                            <option disabled="disabled" selected="selected"></option>
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

                            <!-- Shipment's Worth -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="worth"> Shipment's Worth (USD)</label>
                                    <input class="input100" name="worth_4" id="worth" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Shipment Type (OTHER) -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="other">If you selected 'other' as shipment type above, please specify</label>
                                    <textarea style="height: 50px; padding-left: 0" class="input100" name="other_4" id="other"></textarea>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Weight -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="weight">Weight (pounds)</label>
                                    <input class="input100" name="weight_4" id="weight" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Length -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="length">Length (inches)</label>
                                    <input class="input100" name="length_4" id="length" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Width -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="width">Width (inches)</label>
                                    <input class="input100" name="width_4" id="width" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Height -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="height">Height (inches)</label>
                                    <input class="input100" name="height_4" id="height" type="number">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Colour -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                    <label for="colour">Colour</label>
                                    <input class="input100" name="colour_4" id="colour" type="color">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <!-- Texture -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="wrap-input100 validate-input m-t-45 m-b-35">
                                    <label for="texture">Texture</label>
                                    <input class="input100" name="texture_4" id="texture" type="text">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Additional Info -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-input100 validate-input m-t-48 m-b-35">
                                    <label for="shipment_description">Anything else we should know about your shipment?</label>
                                    <textarea style="height: 100px; padding-left: 0" class="input100" name="shipment_description_4" id="shipment_description"></textarea>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar" style="margin: 20px 0 0; padding: 30px 0 40px">
                            <button value="Previous" onClick="history.go(-1)" class="w3-button w3-medium w3-black-previous">Previous</button>
                            <button value="Next" type="submit" class="w3-button w3-medium w3-green-continue">Next</button>
                            <button value="Reset" type="reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
                        </div>
                    </div>

                    <!-- End of form -->
                </form>
            </div>
        </div>
    </div>

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
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

    <!-- Second Shipment toggle -->
    <script>
        var btn = document.querySelector('secondShipment');
        btn.addEventListener('click', secondShipment);

        function secondShipment() {
            var e = document.getElementById('secondShipment');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var a = document.getElementById('textchange');
            a.innerText = ((a.innerText !== '+ Add a 2nd shipment') ?  '+ Add a 2nd shipment' : '- Add a 2nd shipment');

            var e1 = document.getElementById('add3rdShipment');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- Third Shipment toggle -->
    <script>
        var btn = document.querySelector('thirdShipment');
        btn.addEventListener('click', thirdShipment);

        function thirdShipment() {
            var e = document.getElementById('thirdShipment');
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');

            // var a = document.getElementById('textchange-3');
            // a.innerText = ((a.innerText !== '+ Add a 3rd shipment') ?  '+ Add a 3rd shipment' : '- Add a 3rd shipment');

            var e1 = document.getElementById('add4thShipment');
            e1.style.display = ((e1.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- 4th Shipment toggle -->
    <script>
        function fourthShipment(fourthShipment) {
            var e = document.getElementById(fourthShipment);
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <script src="js/main.js"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
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
