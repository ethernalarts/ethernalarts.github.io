<?php
    //start the session
    session_start();

    //store posted values in the session variables
    //1st shipment variables
    $_SESSION['weight'] = $_POST['weight'];
    $_SESSION['length'] = $_POST['length'];
    $_SESSION['width'] = $_POST['width'];
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['colour'] = $_POST['colour'];
    $_SESSION['texture'] = $_POST['texture'];
    $_SESSION['worth'] = $_POST['worth'];
    $_SESSION['shipment_type'] = $_POST['shipment_type'];
    $_SESSION['shipment_description'] = $_POST['shipment_description'];

    //2nd shipment variables
    $_SESSION['weight_2'] = $_POST['weight_2'];
    $_SESSION['length_2'] = $_POST['length_2'];
    $_SESSION['width_2'] = $_POST['width_2'];
    $_SESSION['height_2'] = $_POST['height_2'];
    $_SESSION['colour_2'] = $_POST['colour_2'];
    $_SESSION['texture_2'] = $_POST['texture_2'];
    $_SESSION['worth_2'] = $_POST['worth_2'];
    $_SESSION['shipment_type_2'] = $_POST['shipment_type_2'];
    $_SESSION['shipment_description_2'] = $_POST['shipment_description_2'];

    //3rd shipment variables
    $_SESSION['weight_3'] = $_POST['weight_3'];
    $_SESSION['length_3'] = $_POST['length_3'];
    $_SESSION['width_3'] = $_POST['width_3'];
    $_SESSION['height_3'] = $_POST['height_3'];
    $_SESSION['colour_3'] = $_POST['colour_3'];
    $_SESSION['texture_3'] = $_POST['texture_3'];
    $_SESSION['worth_3'] = $_POST['worth_3'];
    $_SESSION['shipment_type_3'] = $_POST['shipment_type_3'];
    $_SESSION['shipment_description_3'] = $_POST['shipment_description_3'];

    //4th shipment variables
    $_SESSION['weight_4'] = $_POST['weight_4'];
    $_SESSION['length_4'] = $_POST['length_4'];
    $_SESSION['width_4'] = $_POST['width_4'];
    $_SESSION['height_4'] = $_POST['height_4'];
    $_SESSION['colour_4'] = $_POST['colour_4'];
    $_SESSION['texture_4'] = $_POST['texture_4'];
    $_SESSION['worth_4'] = $_POST['worth_4'];
    $_SESSION['shipment_type_4'] = $_POST['shipment_type_4'];
    $_SESSION['shipment_description_4'] = $_POST['shipment_description_4'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (International Shipping - Review Details)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet">

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
            padding: 0 180px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/is-review.jpg");

            /* Set a specific height */
            min-height: 440px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 260px;
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
                padding: 0 50px;
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
                                <a href="quote-is-1.php" class="active">International Shipping</a>
                                <a href="quote-ec.php">Domestic Shipping</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="#">About</a></li>
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
        <div class="subheader-h2" style="width: 370px;">Quote - International Shipping</div>
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
                        <a href="quote-is-1.php" class="active" style="padding-top: 0">International Shipping</a>
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
              <span class="step finish"></span>
              <span class="step active"></span><br><br>
              <span style="font: 1.25em Montserrat, sans-serif;">(Step 5 of 5)</span>
          </div>

            <h2 id="hi">Please review your details</h2>

            <!-- Container for Get a Quote form  -->
            <idiv class="w3-card-quote-is">

                <!-- International Shipping Quote Form Preview -->
                <form class="container-form" method="post" action="saveinfo-is.php" style="padding-bottom: 0">

                    <!-- Shipment Origin Preview -->
                    <fieldset style="margin: 0 0 30px">
                                <legend>Shipment Origin</legend>
                                    <!-- Full Name -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Full Name (Company): <?php echo $_SESSION['name'] ?> ">
                                    </label>

                                    <!-- Contact Name -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Contact Name: <?php echo $_SESSION['contact_name'] ?> ">
                                    </label>

                                    <!-- Gender -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Gender: <?php echo $_SESSION['gender'] ?> ">
                                    </label>

                                    <!-- Title -->
                                    <label>
                                        <input style="float: right" disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Title: <?php echo $_SESSION['title'] ?> ">
                                    </label>

                                    <!-- Country Dialing Code -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country Dialing Code: <?php echo $_SESSION['countryCode'] ?> ">
                                    </label>

                                    <!-- Phone Number -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Phone Number: <?php echo $_SESSION['phone'] ?> ">
                                    </label>

                                    <!-- Country -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country: <?php echo $_SESSION['country'] ?> ">
                                    </label>

                                    <!-- State -->
                                    <label>
                                        <input disabled  style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="State: <?php echo $_SESSION['state'] ?> ">
                                    </label>

                                    <!-- City -->
                                    <label>
                                        <input disabled  class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="City: <?php echo $_SESSION['city'] ?> ">
                                    </label>

                                    <!-- Zip Code -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Zip Code: <?php echo $_SESSION['zip_code'] ?> ">
                                    </label>

                                    <!-- Street Address -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Street Address: <?php echo $_SESSION['street_add'] ?> ">
                                    </label>

                                    <!-- Street Address 2 -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Apt, Suite, Unit etc: <?php echo $_SESSION['street_add2'] ?> ">
                                    </label>

                                    <!-- Shipping Service Option -->
                                    <label>
                                        <input style="float: right" disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Shipping Option: <?php echo $_SESSION['shipping_options'] ?> ">
                                    </label>

                                    <!-- Department -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Department: <?php echo $_SESSION['department'] ?> ">
                                    </label>

                                    <!-- Email -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Email: <?php echo $_SESSION['email'] ?> ">
                                    </label>

                                    <!-- Residential Address? -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Residential Address? <?php echo $_SESSION['residential_add'] ?> ">
                                    </label>

                                    <!-- Status Updates? -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Status Updates? <?php echo $_SESSION['status_updates'] ?> ">
                                    </label>

                                    <!-- Edit Button -->
                                    <label>
                                        <button style="float: left" onClick="history.go(-3)" class="w3-button w3-medium w3-green-continue">Edit</button>
                                    </label>
                            </fieldset>

                    <!-- Return Address Preview -->
                    <fieldset style="margin: 50px 0 0">
                                <legend>Return Address</legend>
                                    <!-- Full Name -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Full Name (Company): <?php echo $_SESSION['name_reAdd'] ?> ">
                                    </label>

                                    <!-- Contact Name -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Contact Name: <?php echo $_SESSION['contact_name_reAdd'] ?> ">
                                    </label>

                                    <!-- Gender -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Gender: <?php echo $_SESSION['gender_reAdd'] ?> ">
                                    </label>

                                    <!-- Title -->
                                    <label>
                                        <input style="float: right" disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Title: <?php echo $_SESSION['title_reAdd'] ?> ">
                                    </label>

                                    <!-- Country Dialing Code -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country Dialing Code: <?php echo $_SESSION['countryCode_reAdd'] ?> ">
                                    </label>

                                    <!-- Phone Number -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Phone Number: <?php echo $_SESSION['phone_reAdd'] ?> ">
                                    </label>

                                    <!-- Country -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country: <?php echo $_SESSION['country_reAdd'] ?> ">
                                    </label>

                                    <!-- State -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="State: <?php echo $_SESSION['state_reAdd'] ?> ">
                                    </label>

                                    <!-- City -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="City: <?php echo $_SESSION['city_reAdd'] ?> ">
                                    </label>

                                    <!-- Zip Code -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Zip Code: <?php echo $_SESSION['zip_code_reAdd'] ?> ">
                                    </label>

                                    <!-- Street Address -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Street Address: <?php echo $_SESSION['street_add_reAdd'] ?> ">
                                    </label>

                                    <!-- Street Address 2 -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Apt, Blding, Suite, Unit etc: <?php echo $_SESSION['street_add2_reAdd'] ?> ">
                                    </label>

                                    <!-- Department -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Department: <?php echo $_SESSION['department_reAdd'] ?> ">
                                    </label>

                                    <!-- Email -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Email: <?php echo $_SESSION['email_reAdd'] ?> ">
                                    </label>

                                    <!-- Notify of Return -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Notify of Return? <?php echo $_SESSION['notify'] ?> ">
                                    </label>

                                    <!-- Residential Address? -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Residential Address? <?php echo $_SESSION['residential_reAdd'] ?> ">
                                    </label>

                                    <!-- Edit Button -->
                                    <label>
                                        <button style="float: left" onClick="history.go(-3)" class="w3-button w3-medium w3-green-continue">Edit</button>
                                    </label>
                            </fieldset>

                    <!-- Shipment Destination Preview -->
                    <fieldset style="margin: 50px 0 30px">
                                <legend>Shipment Destination</legend>
                                    <!-- Full Name -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Full Name (Company): <?php echo $_SESSION['name_dest'] ?> ">
                                    </label>

                                    <!-- Contact Name -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Contact Name: <?php echo $_SESSION['contact_name_dest'] ?> ">
                                    </label>

                                    <!-- Gender -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Gender: <?php echo $_SESSION['gender'] ?> ">
                                    </label>

                                    <!-- Title -->
                                    <label>
                                        <input style="float: right" disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Title: <?php echo $_SESSION['title_dest'] ?> ">
                                    </label>

                                    <!-- Country Dialing Code -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country Dialing Code: <?php echo $_SESSION['countryCode_dest'] ?> ">
                                    </label>

                                    <!-- Phone Number -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Phone Number: <?php echo $_SESSION['phone_dest'] ?> ">
                                    </label>

                                    <!-- Country -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country: <?php echo $_SESSION['country_dest'] ?> ">
                                    </label>

                                    <!-- State -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="State: <?php echo $_SESSION['state_dest'] ?> ">
                                    </label>

                                    <!-- City -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="City: <?php echo $_SESSION['city_dest'] ?> ">
                                    </label>

                                    <!-- Zip Code -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Zip Code: <?php echo $_SESSION['zip_code_dest'] ?> ">
                                    </label>

                                    <!-- Street Address -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Street Address: <?php echo $_SESSION['street_add_dest'] ?> ">
                                    </label>

                                    <!-- Street Address/Apartment -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Street Address/Apartment, Building, Suite, Unit etc: <?php echo $_SESSION['street_add2_dest'] ?> ">
                                    </label>

                                    <!-- Department -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Department: <?php echo $_SESSION['department_dest'] ?> ">
                                    </label>

                                    <!-- Email -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Email: <?php echo $_SESSION['email_dest'] ?> ">
                                    </label>

                                    <!-- Residential Address? -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Residential Address? <?php echo $_SESSION['residential_add_dest'] ?> ">
                                    </label>

                                    <!-- Notify Receiver? -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Notify Receiver? <?php echo $_SESSION['notify_dest'] ?> ">
                                    </label>

                                    <!-- Edit Button -->
                                    <label>
                                        <button style="float: left" onClick="history.go(-1)" class="w3-button w3-medium w3-green-continue">Edit</button>
                                    </label>
                        </fieldset>

                    <!-- Shipment Details Preview -->
                    <fieldset style="margin: 50px 0 30px">
                                <legend>Shipment Details</legend>
                                    <!-- Weight -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Weight: <?php echo $_SESSION['weight'] ?> inches">
                                    </label>

                                    <!-- Length -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Length: <?php echo $_SESSION['length'] ?> inches">
                                    </label>

                                    <!-- Width -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Width: <?php echo $_SESSION['width'] ?> inches">
                                    </label>

                                    <!-- Height -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Height: <?php echo $_SESSION['height'] ?> inches">
                                    </label>

                                    <!-- Shipment's Worth (USD) -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Shipment's Worth (USD): $<?php echo $_SESSION['worth'] ?> ">
                                    </label>

                                    <!-- Shipment Type -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Shipment Type: <?php echo $_SESSION['shipment_type'] ?> ">
                                    </label>

                                    <!-- Shipment Type (Other) -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Shipment Type (Other): <?php echo $_SESSION['other'] ?> ">
                                    </label>

                                    <!-- Colour -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Colour: <?php echo $_SESSION['colour'] ?> ">
                                    </label>

                                    <!-- Texture -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Texture: <?php echo $_SESSION['texture'] ?> ">
                                    </label>

                                    <!-- Brief Shipment Description -->
                                    <label>
                                        <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Shipment Description: <?php echo $_SESSION['shipment_description'] ?> ">
                                    </label>

                                        <!-- Show other shipments -->
                                        <div style="margin: 0 0 30px;" class="sliderWrapper">
                                            <span style="margin-left: 0" onclick="secondShipment()">
                                                + show other shipments
                                            </span>
                                        </div>

                                        <!-- 2nd shipment -->
                                        <fieldset id="secondShipment" style="margin: 10px 0 30px; display: none">
                                            <legend>2nd Shipment Details</legend>
                                                <!-- Weight -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Weight: <?php echo $_SESSION['weight_2'] ?> inches">
                                                </label>

                                                <!-- Length -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Length: <?php echo $_SESSION['length_2'] ?> inches">
                                                </label>

                                                <!-- Width -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Width: <?php echo $_SESSION['width_2'] ?> inches">
                                                </label>

                                                <!-- Height -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Height: <?php echo $_SESSION['height_2'] ?> inches">
                                                </label>

                                                <!-- Shipment's Worth (USD) -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment's Worth (USD): $<?php echo $_SESSION['worth_2'] ?> ">
                                                </label>

                                                <!-- Shipment Type -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Type: <?php echo $_SESSION['shipment_type_2'] ?> ">
                                                </label>

                                                <!-- Shipment Type (Other) -->
                                                <label>
                                                    <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Type (Other): <?php echo $_SESSION['other_2'] ?> ">
                                                </label>

                                                <!-- Colour -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Colour: <?php echo $_SESSION['colour_2'] ?> ">
                                                </label>

                                                <!-- Texture -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Texture: <?php echo $_SESSION['texture_2'] ?> ">
                                                </label>

                                                <!-- Brief Shipment Description -->
                                                <label>
                                                    <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Description: <?php echo $_SESSION['shipment_description_2'] ?> ">
                                                </label>
                                        </fieldset>

                                        <!-- 3rd Shipment Details -->
                                        <fieldset id="thirdShipment" style="margin: 0 0 30px; display: none">

                                            <legend>3rd Shipment Details</legend>
                                                <!-- Weight -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Weight: <?php echo $_SESSION['weight_3'] ?> inches">
                                                </label>

                                                <!-- Length -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Length: <?php echo $_SESSION['length_3'] ?> inches">
                                                </label>

                                                <!-- Width -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Width: <?php echo $_SESSION['width_3'] ?> inches">
                                                </label>

                                                <!-- Height -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Height: <?php echo $_SESSION['height_3'] ?> inches">
                                                </label>

                                                <!-- Shipment's Worth (USD) -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment's Worth (USD): $<?php echo $_SESSION['worth_3'] ?> ">
                                                </label>

                                                <!-- Shipment Type -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Type: <?php echo $_SESSION['shipment_type_3'] ?> ">
                                                </label>

                                                <!-- Shipment Type (Other) -->
                                                <label>
                                                    <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Type (Other): <?php echo $_SESSION['other_3'] ?> ">
                                                </label>

                                                <!-- Colour -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Colour: <?php echo $_SESSION['colour_3'] ?> ">
                                                </label>

                                                <!-- Texture -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Texture: <?php echo $_SESSION['texture_3'] ?> ">
                                                </label>

                                                <!-- Brief Shipment Description -->
                                                <label>
                                                    <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Description: <?php echo $_SESSION['shipment_description_3'] ?> ">
                                                </label>
                                        </fieldset>

                                        <!-- 4th Shipment Details -->
                                        <fieldset id="fourthShipment" style="margin: 0 0 30px; display: none">

                                            <legend>4th Shipment Details</legend>
                                                <!-- Weight -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Weight: <?php echo $_SESSION['weight_4'] ?> inches">
                                                </label>

                                                <!-- Length -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Length: <?php echo $_SESSION['length_4'] ?> inches">
                                                </label>

                                                <!-- Width -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Width: <?php echo $_SESSION['width_4'] ?> inches">
                                                </label>

                                                <!-- Height -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Height: <?php echo $_SESSION['height_4'] ?> inches">
                                                </label>

                                                <!-- Shipment's Worth (USD) -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment's Worth (USD): $<?php echo $_SESSION['worth_4'] ?> ">
                                                </label>

                                                <!-- Shipment Type -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Type: <?php echo $_SESSION['shipment_type_4'] ?> ">
                                                </label>

                                                <!-- Shipment Type (Other) -->
                                                <label>
                                                    <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Type (Other): <?php echo $_SESSION['other_4'] ?> ">
                                                </label>

                                                <!-- Colour -->
                                                <label>
                                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Colour: <?php echo $_SESSION['colour_4'] ?> ">
                                                </label>

                                                <!-- Texture -->
                                                <label>
                                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Texture: <?php echo $_SESSION['texture_4'] ?> ">
                                                </label>

                                                <!-- Brief Shipment Description -->
                                                <label>
                                                    <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                                           placeholder="Shipment Description: <?php echo $_SESSION['shipment_description_4'] ?> ">
                                                </label>
                                        </fieldset>

                                    <!-- Edit Button -->
                                    <label>
                                        <button style="float: left" onClick="history.go(-2)" class="w3-button w3-medium w3-green-continue">Edit</button>
                                    </label>
                            </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
                            <!-- <button onClick="javascript:history.go(-1)" class="w3-button w3-medium w3-black-previous">Previous</button> -->
                            <button value="Next" type="submit" class="w3-button w3-medium w3-green-continue">
                                Submit</button>
                            <button type="reset" class="w3-button w3-medium w3-red-cancel">Cancel</button>
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

    <!-- other Shipment toggle -->
    <script>
        var btn = document.querySelector('secondShipment');
        btn.addEventListener('click', secondShipment);

        function secondShipment() {
            var e = document.getElementById('secondShipment');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('thirdShipment');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');

            var e2 = document.getElementById('fourthShipment');
            e2.style.display = ((e2.style.display !== 'none') ?  'none' : 'block');
        }
    </script>
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
