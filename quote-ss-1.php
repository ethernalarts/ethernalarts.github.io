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
        header("location: quote-ss.php");   //redirecting to first page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Secure Storage - Item Details)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/statecity.js"></script>

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
            padding: 0 210px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ss-pic1.jpg");

            /* Set a specific height */
            min-height: 440px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 250px;
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
        <div class="subheader-h2" style="width: 290px;">Quote - Secure Storage</div>
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
                <span class="step active"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 2 of 3)</span>
            </div>

            <h2 id="hi">Item Details and Dimensions</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span class="required">*</span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                    <!-- Express Courier Get a quote form -->
                    <form class="container-form"  style="padding-bottom: 0" method="post" action="quote-ss-review.php">
                        <!-- 1st Item details -->
                        <fieldset style="margin: 0 0 20px; padding-bottom: 10px">
                            <legend>Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="storage_type_ss">Storage Option <span class="required">*</span></label>
                                        <select class="choice" name="storage_type_ss" id="storage_type_ss" type="select" required>
                                            <option value="0" selected="selected">Select Storage Option</option>
                                            <option value="Secure Storage">Secure Storage</option>
                                            <option value="Secure Storage plus">Secure Storage + (+$)</option>
                                        </select>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="item_type_ss">Item Type <span class="required">*</span></label>
                                        <select class="choice" name="item_type_ss" id="item_type_ss" required>
                                            <option value="0" selected="selected">Select Item Type</option>
                                            <option value="Document">Document</option>
                                            <option value="Jewellery">Jewellery</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="Fabric">Fabric</option>
                                            <option value="Battery">Battery</option>
                                            <option value="Wine">Wine and/or Cigars</option>
                                            <option value="Automobile">Automobile</option>
                                            <option value="Perishable">Perishable</option>
                                            <option value="Machine Parts">Machine Parts</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Item Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="other_ss">Item Type (OTHER)</label>
                                        <input class="w3-light-gray" placeholder="If package type is 'OTHER', please specify"
                                               name="other_ss" id="other_ss" type="text">
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="worth_ss">Item's Worth <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="Declared Value (USD)"
                                               name="worth_ss" id="worth_ss" type="number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="duration_ss">Storage Duration <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="duration_ss" placeholder="in weeks" id="duration_ss" type="number" required>
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="weight_ss">Weight <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="weight_ss" placeholder="in pounds" id="weight_ss" type="number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="length_ss">Length <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="length_ss" placeholder="in inches" id="length_ss" type="number" required>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="width_ss">Width <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="width_ss" placeholder="in inches" id="width_ss" type="number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="height_ss">Height <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="height_ss" placeholder="in inches" id="height_ss" type="number" required>
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="colour_ss">Colour <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="colour_ss" id="colour_ss" type="color" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="item_descr_ss">Additional Information</label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="item_descr_ss" id="item_descr_ss"
                                                  placeholder="Anything else we should know about your item?"></textarea>
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
                        <fieldset id="secondItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend>2nd Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="storage_type_ss_2">Storage Option</label>
                                        <select class="choice" name="storage_type_ss_2" id="storage_type_ss_2" type="select">
                                            <option value="0" selected="selected">Select Storage Option</option>
                                            <option value="Secure Storage">Secure Storage</option>
                                            <option value="Secure Storage plus">Secure Storage + (+$)</option>
                                        </select>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="item_type_ss_2">Item Type</label>
                                        <select class="choice" name="item_type_ss_2" id="item_type_ss_2">
                                            <option value="0" selected="selected">Select Item Type</option>
                                            <option value="Document">Document</option>
                                            <option value="Jewellery">Jewellery</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="Fabric">Fabric</option>
                                            <option value="Battery">Battery</option>
                                            <option value="Wine">Wine and/or Cigars</option>
                                            <option value="Automobile">Automobile</option>
                                            <option value="Perishable">Perishable</option>
                                            <option value="Machine Parts">Machine Parts</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Item Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="other_ss_2">Item Type (OTHER)</label>
                                        <input class="w3-light-gray" placeholder="If package type is 'OTHER', please specify"
                                               name="other_ss_2" id="other_ss_2" type="text">
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="worth_ss_2">Item's Worth</label>
                                        <input class="w3-light-gray" placeholder="Declared Value (USD)" name="worth_ss_2" id="worth_ss_2" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="duration_ss_2">Storage Duration</label>
                                        <input class="w3-light-gray" name="duration_ss_2" placeholder="in weeks" id="duration_ss_2" type="number">
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="weight_ss_2">Weight</label>
                                        <input class="w3-light-gray" name="weight_ss_2" placeholder="in pounds" id="weight_ss_2" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="length_ss_2">Length</label>
                                        <input class="w3-light-gray" name="length_ss_2" placeholder="in inches" id="length_ss_2" type="number">
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="width_ss_2">Width</label>
                                        <input class="w3-light-gray" name="width_ss_2" placeholder="in inches" id="width_ss_2" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="height_ss_2">Height</label>
                                        <input class="w3-light-gray" name="height_ss_2" placeholder="in inches" id="height_ss_2" type="number">
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="colour_ss_2">Colour</label>
                                        <input class="w3-light-gray" name="colour_ss_2" id="colour_ss_2" type="color">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="item_descr_ss_2">Additional Information</label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="item_descr_ss_2" id="item_descr_ss_2"
                                                  placeholder="Anything else we should know about your item?"></textarea>
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
                        <fieldset id="thirdItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend>3rd Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="storage_type_ss_3">Storage Option</label>
                                        <select class="choice" name="storage_type_ss_3" id="storage_type_ss_3" type="select">
                                            <option value="0" selected="selected">Select Storage Option</option>
                                            <option value="Secure Storage">Secure Storage</option>
                                            <option value="Secure Storage plus">Secure Storage + (+$)</option>
                                        </select>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="item_type_ss_3">Item Type</label>
                                        <select class="choice" name="item_type_ss_3" id="item_type_ss_3">
                                            <option value="0" selected="selected">Select Item Type</option>
                                            <option value="Document">Document</option>
                                            <option value="Jewellery">Jewellery</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="Fabric">Fabric</option>
                                            <option value="Battery">Battery</option>
                                            <option value="Wine">Wine and/or Cigars</option>
                                            <option value="Automobile">Automobile</option>
                                            <option value="Perishable">Perishable</option>
                                            <option value="Machine Parts">Machine Parts</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Item Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="other_ss_3">Item Type (OTHER)</label>
                                        <input class="w3-light-gray" placeholder="If package type is 'OTHER', please specify"
                                               name="other_ss_3" id="other_ss_3" type="text">
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="worth_ss_3">Item's Worth</label>
                                        <input class="w3-light-gray" placeholder="Declared Value (USD)"
                                               name="worth_ss_3" id="worth_ss_3" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="duration_ss_3">Storage Duration</label>
                                        <input class="w3-light-gray" name="duration_ss_3" placeholder="in weeks" id="duration_ss_3" type="number">
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="weight_ss_3">Weight</label>
                                        <input class="w3-light-gray" name="weight_ss_3" placeholder="in pounds" id="weight_ss_3" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="length_ss_3">Length</label>
                                        <input class="w3-light-gray" name="length_ss_3" placeholder="in inches" id="length_ss_3" type="number">
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="width_ss_3">Width</label>
                                        <input class="w3-light-gray" name="width_ss_3" placeholder="in inches" id="width_ss_3" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="height_ss_3">Height</label>
                                        <input class="w3-light-gray" name="height_ss_3" placeholder="in inches" id="height_ss_3" type="number">
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="colour_ss_3">Colour</label>
                                        <input class="w3-light-gray" name="colour_ss_3" id="colour_ss_3" type="color">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="item_descr_ss_3">Additional Information</label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="item_descr_ss_3" id="item_descr_ss_3"
                                                  placeholder="Anything else we should know about your item?"></textarea>
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
                        <fieldset id="fourthItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend>4th Item Details</legend>
                                <div class="row">
                                    <!-- Storage Option -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="storage_type_ss_4">Storage Option</label>
                                        <select class="choice" name="storage_type_ss_4" id="storage_type_ss_4" type="select">
                                            <option value="0" selected="selected">Select Storage Option</option>
                                            <option value="Secure Storage">Secure Storage</option>
                                            <option value="Secure Storage plus">Secure Storage + (+$)</option>
                                        </select>
                                    </div>

                                    <!-- Item Type -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="item_type_ss_4">Item Type</label>
                                        <select class="choice" name="item_type_ss_4" id="item_type_ss_4">
                                            <option value="0" selected="selected">Select Item Type</option>
                                            <option value="Document">Document</option>
                                            <option value="Jewellery">Jewellery</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="Fabric">Fabric</option>
                                            <option value="Battery">Battery</option>
                                            <option value="Wine">Wine and/or Cigars</option>
                                            <option value="Automobile">Automobile</option>
                                            <option value="Perishable">Perishable</option>
                                            <option value="Machine Parts">Machine Parts</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Item Type (OTHER) -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="other_ss_4">Item Type (OTHER)</label>
                                        <input class="w3-light-gray" placeholder="If package type is 'OTHER', please specify"
                                               name="other_ss_4" id="other_ss_4" type="text">
                                    </div>

                                    <!-- Item's Worth -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="worth_ss_4">Item's Worth</label>
                                        <input class="w3-light-gray" placeholder="Declared Value (USD)"
                                               name="worth_ss_4" id="worth_ss_4" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Storage Duration -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="duration_ss_4">Storage Duration</label>
                                        <input class="w3-light-gray" name="duration_ss_4" placeholder="in weeks" id="duration_ss_4" type="number">
                                    </div>

                                    <!-- Weight -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="weight_ss_4">Weight</label>
                                        <input class="w3-light-gray" name="weight_ss_4" placeholder="in pounds" id="weight_ss_4" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Length -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="length_ss_4">Length</label>
                                        <input class="w3-light-gray" name="length_ss_4" placeholder="in inches" id="length_ss_4" type="number">
                                    </div>

                                    <!-- Width -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="width_ss_4">Width</label>
                                        <input class="w3-light-gray" name="width_ss_4" placeholder="in inches" id="width_ss_4" type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Height -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="height_ss_4">Height</label>
                                        <input class="w3-light-gray" name="height_ss_4" placeholder="in inches" id="height_ss_4" type="number">
                                    </div>

                                    <!-- Colour -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="colour_ss_4">Colour</label>
                                        <input class="w3-light-gray" name="colour_ss_4" id="colour_ss_4" type="color">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Additional Info -->
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="item_descr_ss_4">Additional Information</label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="item_descr_ss_4" id="item_descr_ss_4"
                                                  placeholder="Anything else we should know about your item?"></textarea>
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


    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>
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
