<?php
    //let's start the session
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //store posted values in the session variables
        $_SESSION['name_ss'] = $_POST['name_ss'];
        $_SESSION['contactname_ss'] = $_POST['contactname_ss'];
        $_SESSION['gender_ss'] = $_POST['gender_ss'];
        $_SESSION['title_ss'] = $_POST['title_ss'];
        $_SESSION['age_ss'] = $_POST['age_ss'];
        $_SESSION['occupation_ss'] = $_POST['occupation_ss'];
        $_SESSION['phone_ss'] = $_POST['phone_ss'];
        $_SESSION['email_ss'] = $_POST['email_ss'];
        $_SESSION['country_ss'] = $_POST['country_ss'];
        $_SESSION['state_ss'] = $_POST['state_ss'];
        $_SESSION['city_ss'] = $_POST['city_ss'];
        $_SESSION['zipcode_ss'] = $_POST['zipcode_ss'];
        $_SESSION['address_ss'] = $_POST['address_ss'];
        $_SESSION['apt_ss'] = $_POST['apt_ss'];
        $_SESSION['dept_ss'] = $_POST['dept_ss'];
        $_SESSION['resAdd_ss'] = $_POST['resAdd_ss'];
        $_SESSION['item_update_ss'] = $_POST['item_update_ss'];
   }


    // Sanitizing email field to remove unwanted characters.
    $_SESSION['email_ss'] = filter_var($_SESSION['email_ss'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_SESSION['email_ss'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-ss.php");//redirecting to first page
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

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>

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

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            width: 47%;
            border: none;
            border-bottom: 1px solid #2d2d2d;
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
                            <button onclick="dropDownNav()" class="dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></button>
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
        <div class="subheader-h2" style="width: 300px;">Quote - Secure Storage</div>
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
                <a class="w3-dropdown-click" style="padding-top: 0" onclick="myFunction()">
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
                    <span style="font-size: 13px"><i class="fas fa-asterisk"></i></span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                    <!-- Express Courier Get a quote form -->
                    <form class="container-form"  style="padding-bottom: 0" method="post" action="quote-ss-review.php">

                        <!-- 1st Item details -->
                        <fieldset style="margin: 0 0 20px; padding-bottom: 10px">
                            <legend>Item Details</legend>
                                <!-- Storage option -->
                                <label>
                                    <select class="choice" name="storage_type_ss" type="select" required>
                                        <option <?php echo in_array($_SESSION['storage_type_ss'], ['Secure Storage', 'Secure Storage plus']) ? '': 'selected="selected"'; ?> value="0" selected="selected">Storage option  *</option>
                                        <option <?php echo $_SESSION['storage_type_ss'] == 'Secure Storage' ? 'selected="selected"': ''; ?> value="Secure Storage">Secure Storage</option>
                                        <option <?php echo $_SESSION['storage_type_ss'] == 'Secure Storage plus' ? 'selected="selected"': ''; ?> value="Secure Storage plus">Secure Storage + (+$)</option>
                                    </select>
                                </label>

                                <!-- Item type -->
                                <label>
                                    <select style="float: right" class="choice" name="item_type_ss" required>
                                        <option <?php echo !isset($_SESSION['item_type_ss']) || empty($_SESSION['item_type_ss']) || $_SESSION['item_type_ss'] == "0" ? 'selected="selected"': ''; ?> value="0" selected="selected">Item Type  *</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Document' ? 'selected="selected"': ''; ?> value="Document">Document</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Jewellery' ? 'selected="selected"': ''; ?> value="Jewellery">Jewellery</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Electronic' ? 'selected="selected"': ''; ?> value="Electronic">Electronic</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Fabric' ? 'selected="selected"': ''; ?> value="Fabric">Fabric</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Battery' ? 'selected="selected"': ''; ?> value="Battery">Battery</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Wine' ? 'selected="selected"': ''; ?> value="Wine">Wine and/or Cigars</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Automobile' ? 'selected="selected"': ''; ?> value="Automobile">Automobile</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Perishable' ? 'selected="selected"': ''; ?> value="Perishable">Perishable</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Machine' ? 'selected="selected"': ''; ?> value="Machine Parts">Machine Parts</option>
                                        <option <?php echo $_SESSION['item_type_ss'] == 'Other' ? 'selected="selected"': ''; ?> value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- Item's Worth -->
                                <label>
                                    <input value="<?php echo $_SESSION['worth_ss'] ?>" class="w3-light-gray" placeholder="Declared Value (Item's worth) (USD):  *"
                                           name="worth_ss" type="number" required>
                                </label>

                                <!-- Other (Item type) -->
                                <label>
                                    <input value="<?php echo $_SESSION['other_ss'] ?>" style="float: right" class="w3-light-gray" name="other_ss" type="text"
                                           placeholder="If item type is OTHER, please specify: ">
                                </label>

                                <!-- Storage Duration -->
                                <label>
                                    <input value="<?php echo $_SESSION['duration_ss'] ?>" class="w3-light-gray" placeholder="Storage Duration (weeks):  *"
                                           name="duration_ss" type="number" required>
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input value="<?php echo $_SESSION['weight_ss'] ?>" style="float: right" class="w3-light-gray" placeholder="Weight (pounds):  "
                                           name="weight_ss" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input value="<?php echo $_SESSION['length_ss'] ?>" class="w3-light-gray" placeholder="Length (inches):  *"
                                           name="length_ss" type="number" required>
                                </label>

                                <!-- Width -->
                                <label>
                                    <input value="<?php echo $_SESSION['width_ss'] ?>" style="float: right" class="w3-light-gray" placeholder="Width (inches):  *"
                                           name="width_ss" type="number" required>
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input value="<?php echo $_SESSION['colour_ss'] ?>" class="w3-light-gray" placeholder="Color:  *" name="colour_ss" type="text">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input value="<?php echo $_SESSION['height_ss'] ?>" class="w3-light-gray" style="float: right" placeholder="Height (inches):  "
                                           name="height_ss" type="number">
                                </label>

                                <!-- Item Description -->
                                <label>
                                    <textarea style="height: 120px" class="w3-light-gray"
                                              name="item_descr_ss" placeholder="Additional information about item..."><?php echo $_SESSION['item_descr_ss'] ?></textarea>
                                </label>
                        </fieldset>

                        <!-- Add 2nd shipment -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0" onclick="secondItem()">
                            <?php echo $_SESSION['worth_ss_2'] ? 'Edit' : '+ Add a' ?> 2nd item
                            </span>
                        </div>

                        <!-- 2nd Item details -->
                        <fieldset id="secondItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend>2nd Item Details</legend>
                                <!-- Storage option -->
                                <label>
                                    <select class="choice" name="storage_type_ss_2" type="select">
                                        <option <?php echo in_array($_SESSION['storage_type_ss_2'], ['Secure Storage', 'Secure Storage plus']) ? '': 'selected="selected"'; ?> value="0" selected="selected">Storage option  *</option>
                                        <option <?php echo $_SESSION['storage_type_ss_2'] == 'Secure Storage' ? 'selected="selected"': ''; ?> value="Secure Storage">Secure Storage</option>
                                        <option <?php echo $_SESSION['storage_type_ss_2'] == 'Secure Storage plus' ? 'selected="selected"': ''; ?> value="Secure Storage plus">Secure Storage + (+$)</option>
                                    </select>
                                </label>

                                <!-- Item type -->
                                <label>
                                    <select style="float: right" class="choice" name="item_type_ss_2">
                                        <option <?php echo !isset($_SESSION['item_type_ss_2']) || empty($_SESSION['item_type_ss_2']) || $_SESSION['item_type_ss_2'] == "0" ? 'selected="selected"': ''; ?> value="0" selected="selected">Item Type  *</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Document' ? 'selected="selected"': ''; ?> value="Document">Document</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Jewellery' ? 'selected="selected"': ''; ?> value="Jewellery">Jewellery</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Electronic' ? 'selected="selected"': ''; ?> value="Electronic">Electronic</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Fabric' ? 'selected="selected"': ''; ?> value="Fabric">Fabric</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Battery' ? 'selected="selected"': ''; ?> value="Battery">Battery</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Wine' ? 'selected="selected"': ''; ?> value="Wine">Wine and/or Cigars</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Automobile' ? 'selected="selected"': ''; ?> value="Automobile">Automobile</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Perishable' ? 'selected="selected"': ''; ?> value="Perishable">Perishable</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Machine' ? 'selected="selected"': ''; ?> value="Machine Parts">Machine Parts</option>
                                        <option <?php echo $_SESSION['item_type_ss_2'] == 'Other' ? 'selected="selected"': ''; ?> value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- Item's Worth -->
                                <label>
                                    <input value="<?php echo $_SESSION['worth_ss_2'] ?>" class="w3-light-gray" placeholder="Declared Value (Item's worth) (USD):  *"
                                           name="worth_ss_2" type="number">
                                </label>

                                <!-- Other (Item type) -->
                                <label>
                                    <input value="<?php echo $_SESSION['other_ss_2'] ?>" style="float: right" class="w3-light-gray" name="other_ss_2" type="text"
                                           placeholder="If item type is OTHER, please specify: ">
                                </label>

                                <!-- Storage Duration -->
                                <label>
                                    <input value="<?php echo $_SESSION['duration_ss_2'] ?>" class="w3-light-gray" placeholder="Storage Duration (weeks):  *"
                                           name="duration_ss_2" type="number">
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input value="<?php echo $_SESSION['weight_ss_2'] ?>" style="float: right" class="w3-light-gray" placeholder="Weight (pounds):  "
                                           name="weight_ss_2" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input value="<?php echo $_SESSION['length_ss_2'] ?>" class="w3-light-gray" placeholder="Length (inches):  *"
                                           name="length_ss_2" type="number">
                                </label>

                                <!-- Width -->
                                <label>
                                    <input value="<?php echo $_SESSION['width_ss_2'] ?>" style="float: right" class="w3-light-gray" placeholder="Width (inches):  *"
                                           name="width_ss_2" type="number">
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input value="<?php echo $_SESSION['colour_ss_2'] ?>" class="w3-light-gray" placeholder="Color:  *" name="colour_ss_2" type="text">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input value="<?php echo $_SESSION['height_ss_2'] ?>" class="w3-light-gray" style="float: right" placeholder="Height (inches):  "
                                           name="height_ss_2" type="number">
                                </label>

                                <!-- Item Description -->
                                <label>
                                    <textarea style="height: 120px" class="w3-light-gray"
                                              name="item_descr_ss_2" placeholder="Additional information about item..."><?php echo $_SESSION['item_descr_ss_2'] ?></textarea>
                                </label>
                        </fieldset>

                        <!-- Add 3rd shipment -->
                        <div class="sliderWrapper">
                            <span id="add3rdItem" style="margin-left: 0; display: none" onclick="thirdItem()">
                            <?php echo $_SESSION['worth_ss_3'] ? 'Edit' : '+ Add a' ?> 3rd item
                            </span>
                        </div>

                        <!-- 3rd Item details -->
                        <fieldset id="thirdItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend>3rd Item Details</legend>
                                <!-- Storage option -->
                                <label>
                                    <select class="choice" name="storage_type_ss_3" type="select">
                                        <option <?php echo in_array($_SESSION['storage_type_ss_3'], ['Secure Storage', 'Secure Storage plus']) ? '': 'selected="selected"'; ?> value="0" selected="selected">Storage option  *</option>
                                        <option <?php echo $_SESSION['storage_type_ss_3'] == 'Secure Storage' ? 'selected="selected"': ''; ?> value="Secure Storage">Secure Storage</option>
                                        <option <?php echo $_SESSION['storage_type_ss_3'] == 'Secure Storage plus' ? 'selected="selected"': ''; ?> value="Secure Storage plus">Secure Storage + (+$)</option>
                                    </select>
                                </label>

                                <!-- Item type -->
                                <label>
                                    <select style="float: right" class="choice" name="item_type_ss_3">
                                        <option <?php echo !isset($_SESSION['item_type_ss_3']) || empty($_SESSION['item_type_ss_3']) || $_SESSION['item_type_ss_3'] == "0" ? 'selected="selected"': ''; ?> value="0" selected="selected">Item Type  *</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Document' ? 'selected="selected"': ''; ?> value="Document">Document</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Jewellery' ? 'selected="selected"': ''; ?> value="Jewellery">Jewellery</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Electronic' ? 'selected="selected"': ''; ?> value="Electronic">Electronic</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Fabric' ? 'selected="selected"': ''; ?> value="Fabric">Fabric</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Battery' ? 'selected="selected"': ''; ?> value="Battery">Battery</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Wine' ? 'selected="selected"': ''; ?> value="Wine">Wine and/or Cigars</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Automobile' ? 'selected="selected"': ''; ?> value="Automobile">Automobile</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Perishable' ? 'selected="selected"': ''; ?> value="Perishable">Perishable</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Machine' ? 'selected="selected"': ''; ?> value="Machine Parts">Machine Parts</option>
                                        <option <?php echo $_SESSION['item_type_ss_3'] == 'Other' ? 'selected="selected"': ''; ?> value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- Item's Worth -->
                                <label>
                                    <input value="<?php echo $_SESSION['worth_ss_3'] ?>" class="w3-light-gray" placeholder="Declared Value (Item's worth) (USD):  *"
                                           name="worth_ss_3" type="number">
                                </label>

                                <!-- Other (Item type) -->
                                <label>
                                    <input value="<?php echo $_SESSION['other_ss_3'] ?>" style="float: right" class="w3-light-gray" name="other_ss_3" type="text"
                                           placeholder="If item type is OTHER, please specify: ">
                                </label>

                                <!-- Storage Duration -->
                                <label>
                                    <input value="<?php echo $_SESSION['duration_ss_3'] ?>" class="w3-light-gray" placeholder="Storage Duration (weeks):  *"
                                           name="duration_ss_3" type="number">
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input value="<?php echo $_SESSION['weight_ss_3'] ?>" style="float: right" class="w3-light-gray" placeholder="Weight (pounds):  "
                                           name="weight_ss_3" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input value="<?php echo $_SESSION['length_ss_3'] ?>" class="w3-light-gray" placeholder="Length (inches):  *"
                                           name="length_ss_3" type="number">
                                </label>

                                <!-- Width -->
                                <label>
                                    <input value="<?php echo $_SESSION['width_ss_3'] ?>" style="float: right" class="w3-light-gray" placeholder="Width (inches):  *"
                                           name="width_ss_3" type="number">
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input value="<?php echo $_SESSION['colour_ss_3'] ?>" class="w3-light-gray" placeholder="Color:  *" name="colour_ss_3" type="text">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input value="<?php echo $_SESSION['height_ss_3'] ?>" class="w3-light-gray" style="float: right" placeholder="Height (inches):  "
                                           name="height_ss_3" type="number">
                                </label>

                                <!-- Item Description -->
                                <label>
                                    <textarea style="height: 120px" class="w3-light-gray"
                                              name="item_descr_ss_3" placeholder="Additional information about item..."><?php echo $_SESSION['item_descr_ss_3'] ?></textarea>
                                </label>
                        </fieldset>

                        <!-- Add 4th shipment -->
                        <div class="sliderWrapper">
                            <span id="add4thItem" style="margin-left: 0; display: none" onclick="fourthItem()">
                                <?php echo $_SESSION['worth_ss_4'] ? 'Edit' : '+ Add a' ?> 4th item
                            </span>
                        </div>

                        <!-- 4th Item details -->
                        <fieldset id="fourthItem" style="margin: 0 0 20px; padding-bottom: 10px; display: none">
                            <legend>4th Item Details</legend>
                                <!-- Storage option -->
                                <label>
                                    <select class="choice" name="storage_type_ss_4" type="select">
                                        <option <?php echo in_array($_SESSION['storage_type_ss_4'], ['Secure Storage', 'Secure Storage plus']) ? '': 'selected="selected"'; ?> value="0" selected="selected">Storage option  *</option>
                                        <option <?php echo $_SESSION['storage_type_ss_4'] == 'Secure Storage' ? 'selected="selected"': ''; ?> value="Secure Storage">Secure Storage</option>
                                        <option <?php echo $_SESSION['storage_type_ss_4'] == 'Secure Storage plus' ? 'selected="selected"': ''; ?> value="Secure Storage plus">Secure Storage + (+$)</option>
                                    </select>
                                </label>

                                <!-- Item type -->
                                <label>
                                    <select style="float: right" class="choice" name="item_type_ss_4">
                                        <option <?php echo !isset($_SESSION['item_type_ss_4']) || empty($_SESSION['item_type_ss_4']) || $_SESSION['item_type_ss_4'] == "0" ? 'selected="selected"': ''; ?> value="0" selected="selected">Item Type  *</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Document' ? 'selected="selected"': ''; ?> value="Document">Document</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Jewellery' ? 'selected="selected"': ''; ?> value="Jewellery">Jewellery</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Electronic' ? 'selected="selected"': ''; ?> value="Electronic">Electronic</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Fabric' ? 'selected="selected"': ''; ?> value="Fabric">Fabric</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Battery' ? 'selected="selected"': ''; ?> value="Battery">Battery</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Wine' ? 'selected="selected"': ''; ?> value="Wine">Wine and/or Cigars</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Automobile' ? 'selected="selected"': ''; ?> value="Automobile">Automobile</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Perishable' ? 'selected="selected"': ''; ?> value="Perishable">Perishable</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Machine' ? 'selected="selected"': ''; ?> value="Machine Parts">Machine Parts</option>
                                        <option <?php echo $_SESSION['item_type_ss_4'] == 'Other' ? 'selected="selected"': ''; ?> value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- Item's Worth -->
                                <label>
                                    <input value="<?php echo $_SESSION['worth_ss_4'] ?>" class="w3-light-gray" placeholder="Declared Value (Item's worth) (USD):  *"
                                           name="worth_ss_4" type="number">
                                </label>

                                <!-- Other (Item type) -->
                                <label>
                                    <input value="<?php echo $_SESSION['other_ss_4'] ?>" style="float: right" class="w3-light-gray" name="other_ss_4" type="text"
                                           placeholder="If item type is OTHER, please specify: ">
                                </label>

                                <!-- Storage Duration -->
                                <label>
                                    <input value="<?php echo $_SESSION['duration_ss_4'] ?>" class="w3-light-gray" placeholder="Storage Duration (weeks):  *"
                                           name="duration_ss_4" type="number">
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input value="<?php echo $_SESSION['weight_ss_4'] ?>" style="float: right" class="w3-light-gray" placeholder="Weight (pounds):  "
                                           name="weight_ss_4" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input value="<?php echo $_SESSION['length_ss_4'] ?>" class="w3-light-gray" placeholder="Length (inches):  *"
                                           name="length_ss_4" type="number">
                                </label>

                                <!-- Width -->
                                <label>
                                    <input value="<?php echo $_SESSION['width_ss_4'] ?>" style="float: right" class="w3-light-gray" placeholder="Width (inches):  *"
                                           name="width_ss_4" type="number">
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input value="<?php echo $_SESSION['colour_ss_4'] ?>" class="w3-light-gray" placeholder="Color:  *" name="colour_ss_4" type="text">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input value="<?php echo $_SESSION['height_ss_4'] ?>" class="w3-light-gray" style="float: right" placeholder="Height (inches):  "
                                           name="height_ss_4" type="number">
                                </label>

                                <!-- Item Description -->
                                <label>
                                    <textarea style="height: 120px" class="w3-light-gray"
                                              name="item_descr_ss_4" placeholder="Additional information about item..."><?php echo $_SESSION['item_descr_ss_4'] ?></textarea>
                                </label>
                        </fieldset>


                        <!-- Continue and Cancel Button -->
                        <div class="w3-center">
                            <div class="w3-bar">
                                <button type="button" onClick="location.href='quote-ss.php'" class="w3-button w3-medium w3-black-previous">Previous</button>
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

    <!-- Second Shipment toggle -->
    <script>
        function secondItem() {
            var e = document.getElementById('secondItem');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add3rdItem');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- Third Shipment toggle -->
    <script>
        function thirdItem() {
            var e = document.getElementById('thirdItem');
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add4thItem');
            e1.style.display = ((e1.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- 4th Shipment toggle -->
    <script>
        function fourthItem() {
            var e = document.getElementById('fourthItem');
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
        <p class="footeradd">
            3M, Microkatu, 70210 Kuopio, Finland, +358 9 42453389
        </p>
        <p class="footercopyrite">
            Copyright <i class="copyright far fa-copyright"></i> 2019 VLink Express Courier Ltd. All Rights Reserved.
        </p>

        <div class="div-footer-followus">
            <p>
                <a target="_blank" href="https://www.facebook.com/vlinkexpresscourier">
                    <i class="footer-FB fab fa-facebook-f"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/vlinkexpresscourier">
                    <i class="footer-INSTA fab fa-instagram"></i>
                </a>
                <a target="_blank" href="https://www.twitter.com/vlinkexpresscourier">
                    <i class="footer-TWITTER fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/vlinkexpresscourier">
                    <i class="footer-INSTA fab fa-linkedin"></i>
                </a>
            </p>
        </div>

        <!-- Footer Links   -->
        <div>
            <ul class="footerlinks">
                <li class="footerlinkitem"><a href="privacy.html">Privacy Policy</a></li>
                <li class="footerlinkitem"><a href="terms.html">Terms</a></li>
                <li class="footerlinkitem"><a href="about.html">About</a></li>
                <li class="footerlinkitem"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>
