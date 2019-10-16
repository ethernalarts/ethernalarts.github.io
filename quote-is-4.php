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

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/jquery.min.js"></script>

    <div class="thetop"></div>

    <style>
        .body {
            width: 100%;
            height: auto;
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/is-pic4.jpg");

            /* Set a specific height */
            min-height: 430px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 250px;
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {

            .container {
                padding: 0 50px;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
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
                margin-top: 12px;
            }

            button.w3-button.w3-green-continue {
                margin-top: 12px;
                margin-right: 1px;
            }

            button.w3-button.w3-black-previous {
                margin: 12px 7px 0 0;
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
                    <li class="navlistitem"><a href="contact.html">Contact</a></li>
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
        <div class="subheader-h2" style="width: 360px;">Quote - International Shipping</div>
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
                <a href="contact.html">Contact</a>
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

            <h2 id="hi">Almost done. Shipment Description</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span class="required">*</span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container -->
            <div class="w3-card-4">

                <!-- Shipment Dimensions -->
                <form class="container-form" style="padding-bottom: 0" method="post" action="quote-is-review.php">

                    <!-- 1st shipment details -->
                    <fieldset style="margin: 0 0 20px">
                        <legend>Shipment Details</legend>
                            <div class="row">
                                <!-- Shipment Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipment_type"> Shipment Type <span class="required">*</span></label>
                                    <select name="shipment_type" id="shipment_type" class="choice" type="select" required>
                                        <option value="0" selected="selected">Select Shipment type</option>
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
                                </div>

                                <!-- Shipment's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth"> Shipment's Worth <span class="required">*</span></label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (USD)"
                                           name="worth" id="worth" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipment Type (OTHER) -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="other">Shipment Type (OTHER)</label>
                                    <input class="w3-light-gray" placeholder="If shipment type selected above is 'OTHER', please specify: "
                                           name="other" id="other" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="weight">Weight <span class="required">*</span></label>
                                    <input class="w3-light-gray" name="weight" placeholder="in pounds" id="weight" type="number" required>
                                </div>

                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="length">Length <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="float: right" name="length" placeholder="in inches" id="length" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="width">Width <span class="required">*</span></label>
                                    <input class="w3-light-gray" name="width" placeholder="in inches" id="width" type="number" required>
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="height">Height <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="float: right" name="height" placeholder="in inches" id="height" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Colour -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="colour">Colour <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. Red" name="colour" id="colour" type="text" required>
                                </div>

                                <!-- Texture -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="texture">Texture <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. Fur, Leather etc" name="texture" id="texture" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="shipment_description">Additional Information</label>
                                    <textarea style="height: 120px" class="w3-light-gray" name="shipment_description" id="shipment_description"
                                              placeholder="Anything else we should know about your shipment?"></textarea>
                                </div>
                            </div>
                    </fieldset>

                    <!-- Add 2nd shipment -->
                    <div class="sliderWrapper">
                        <span style="margin-left: 0" onclick="secondShipment()">
                            + Add a 2nd shipment
                        </span>
                    </div>

                    <!-- 2nd Shipment Details -->
                    <fieldset id="secondShipment" style="margin: 0 0 20px; display: none">
                        <legend>Shipment Details</legend>
                            <div class="row">
                                <!-- Shipment Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipment_type_2">Shipment Type</label>
                                    <select name="shipment_type_2" id="shipment_type_2" class="choice" type="select">
                                        <option value="0" selected="selected">Select Shipment type</option>
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
                                </div>

                                <!-- Shipment's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth_2">Shipment's Worth</label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (USD)"
                                           name="worth_2" id="worth_2" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipment Type (OTHER) -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="other_2">Shipment Type (OTHER)</label>
                                    <input class="w3-light-gray" placeholder="If shipment type selected above is 'OTHER', please specify: "
                                           name="other_2" id="other_2" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="weight_2">Weight</label>
                                    <input class="w3-light-gray" name="weight_2" placeholder="in pounds" id="weight_2" type="number">
                                </div>

                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="length_2">Length</label>
                                    <input class="w3-light-gray" style="float: right" name="length_2" placeholder="in inches" id="length_2" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="width_2">Width</label>
                                    <input class="w3-light-gray" name="width_2" placeholder="in inches" id="width_2" type="number">
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="height_2">Height</label>
                                    <input class="w3-light-gray" style="float: right" name="height_2" placeholder="in inches" id="height_2" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Colour -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="colour_2">Colour</label>
                                    <input class="w3-light-gray" placeholder="e.g. Red" name="colour_2" id="colour_2" type="text">
                                </div>

                                <!-- Texture -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="texture_2">Texture</label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. Fur, Leather etc." name="texture_2" id="texture_2" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="shipment_description_2">Additional Information</label>
                                    <textarea style="height: 120px" class="w3-light-gray" name="shipment_description_2" id="shipment_description_2"
                                              placeholder="Anything else we should know about your shipment?"></textarea>
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
                    <fieldset id="thirdShipment" style="margin: 0 0 20px; display: none">
                        <legend>Shipment Details</legend>
                            <div class="row">
                                <!-- Shipment Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipment_type_3">Shipment Type</label>
                                    <select name="shipment_type_3" id="shipment_type_3" class="choice" type="select">
                                        <option value="0" selected="selected">Select Shipment type</option>
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
                                </div>

                                <!-- Shipment's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth_3">Shipment's Worth</label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (USD)"
                                           name="worth_3" id="worth_3" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipment Type (OTHER) -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="other_3">Shipment Type (OTHER)</label>
                                    <input class="w3-light-gray" placeholder="If shipment type selected above is 'OTHER', please specify: "
                                           name="other_3" id="other_3" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="weight_3">Weight</label>
                                    <input class="w3-light-gray" name="weight_3" placeholder="in pounds" id="weight_3" type="number">
                                </div>

                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="length_3">Length</label>
                                    <input class="w3-light-gray" style="float: right" name="length_3" placeholder="in inches" id="length_3" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="width_3">Width</label>
                                    <input class="w3-light-gray" name="width_3" placeholder="in inches" id="width_3" type="number">
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="height_3">Height</label>
                                    <input class="w3-light-gray" style="float: right" name="height_3" placeholder="in inches" id="height_3" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Colour -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="colour_3">Colour</label>
                                    <input class="w3-light-gray" placeholder="e.g. Blue" name="colour_3" id="colour_3" type="text">
                                </div>

                                <!-- Texture -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="texture_3">Texture</label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. Fur, Leather etc." name="texture_3" id="texture_3" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="shipment_description_3">Additional Information</label>
                                    <textarea style="height: 120px" class="w3-light-gray" name="shipment_description_3" id="shipment_description_3"
                                              placeholder="Anything else we should know about your shipment?"></textarea>
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
                    <fieldset id="fourthShipment" style="margin: 0 0 20px; display: none">
                        <legend>Shipment Details</legend>
                            <div class="row">
                                <!-- Shipment Type -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipment_type_4">Shipment Type</label>
                                    <select name="shipment_type_4" id="shipment_type_4" class="choice" type="select">
                                        <option value="0" selected="selected">Select Shipment type</option>
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
                                </div>

                                <!-- Shipment's Worth -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="worth_4">Shipment's Worth</label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (USD)"
                                           name="worth_4" id="worth_4" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipment Type (OTHER) -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="other_4">Shipment Type (OTHER)</label>
                                    <input class="w3-light-gray" placeholder="If shipment type selected above is 'OTHER', please specify: "
                                           name="other_4" id="other_4" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Weight -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="weight_4">Weight</label>
                                    <input class="w3-light-gray" name="weight_4" placeholder="in pounds" id="weight_4" type="number">
                                </div>

                                <!-- Length -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="length_4">Length</label>
                                    <input class="w3-light-gray" style="float: right" name="length_4" placeholder="in inches" id="length_4" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="width_4">Width</label>
                                    <input class="w3-light-gray" name="width_4" placeholder="in inches" id="width_4" type="number">
                                </div>

                                <!-- Height -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="height_4">Height</label>
                                    <input class="w3-light-gray" style="float: right" name="height_4" placeholder="in inches" id="height_4" type="number">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Colour -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="colour_4">Colour</label>
                                    <input class="w3-light-gray" placeholder="e.g. Green" name="colour_4" id="colour_4" type="text">
                                </div>

                                <!-- Texture -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="texture_4">Texture</label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. Fur, Leather etc." name="texture_4" id="texture_4" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Additional Info -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="shipment_description_4">Additional Information</label>
                                    <textarea style="height: 120px" class="w3-light-gray" name="shipment_description_4" id="shipment_description_4"
                                              placeholder="Anything else we should know about your shipment?"></textarea>
                                </div>
                            </div>
                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar" style="margin: 20px 0 0; padding: 0 0 40px">
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

    <!-- JavaScript to change color of <option selected> -->
    <script>
        $(".choice").change(function () {
            if($(this).val() === "0") $(this).addClass("empty");
            else $(this).removeClass("empty")
        });

        $(".choice").change();
    </script>

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
                    <i class="footer-FB fab fa-facebook-f"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/vlinkexpresscourier">
                    <i class="footer-INSTA fab fa-instagram"></i>
                </a>
                <a target="_blank" href="https://www.twitter.com/vlinkexpresscourier">
                    <i class="footer-INSTA fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/vlinkexpresscourier">
                    <i class="footer-LI fab fa-linkedin"></i>
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
