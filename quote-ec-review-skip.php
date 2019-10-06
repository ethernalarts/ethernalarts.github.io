<?php
    //start the session
    session_start();

    //store posted values in the session variables
    $_SESSION['name_ec_dest'] = $_POST['name_ec_dest'];
    $_SESSION['contactname_ec_dest'] = $_POST['contactname_ec_dest'];
    $_SESSION['gender_ec_dest'] = $_POST['gender_ec_dest'];
    $_SESSION['title_ec_dest'] = $_POST['title_ec_dest'];
    $_SESSION['phone_ec_dest'] = $_POST['phone_ec_dest'];
    $_SESSION['email_ec_dest'] = $_POST['email_ec_dest'];
    $_SESSION['country_ec_dest'] = $_POST['country_ec_dest'];
    $_SESSION['state_ec_dest'] = $_POST['state_ec_dest'];
    $_SESSION['city_ec_dest'] = $_POST['city_ec_dest'];
    $_SESSION['zipcode_ec_dest'] = $_POST['zipcode_ec_dest'];
    $_SESSION['address_ec_dest'] = $_POST['address_ec_dest'];
    $_SESSION['apt_ec_dest'] = $_POST['apt_ec_dest'];
    $_SESSION['dept_ec_dest'] = $_POST['dept_ec_dest'];
    $_SESSION['resadd_dest'] = $_POST['resadd_dest'];
    $_SESSION['notify_dest'] = $_POST['notify_dest'];
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Domestic Shipping - Review Details)</title>

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
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ec-review.jpg");

            /* Set a specific height */
            min-height: 430px;

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
                padding: 0 0px;
            }
        }

        /* On screens that are 700px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 750px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.3em Verdana, sans-serif;
            }

            #edit {
                width: 40%;
                padding: 12px;
            }

            .container {
                padding: 0 40px;
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
                                <a href="quote-ec.php" class="active">Domestic Shipping</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="#">About</a></li>
                    <li class="navlistitem"><a href="contact.html">Contact</a></li>
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
        <div class="subheader-h2" style="width: 330px;">Quote - Domestic Shipping</div>
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
                        <a href="quote-ec.php" class="active">Domestic Shipping</a>
                        <a href="quote-ss.php">Secure Storage</a>
                    </div>
                </a>
                <a href="#">About</a>
                <a href="contact.html">Contact</a>
                <a href="track.html">Track</a>
            </div>
        </div>

    <!-- Outer Container that contains body content and pads it 300px left and right to <body> -->
    <div class="container" style="padding: 0 200px">

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
            <div class="w3-card-quote-is">

                <!-- Get a Quote form -->
                <form class="container-form" method="post" style="padding-bottom: 0" action="saveinfo-ec-skip.php">

                    <!-- Package Origin Preview -->
                    <fieldset style="padding-bottom: 30px; margin: 0 0 30px">

                        <legend>Package Origin</legend>

                                <!-- Name -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Full Name: <?php echo $_SESSION['name_ec'] ?> ">
                                </label>

                                <!-- Contact Name -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Contact Name: <?php echo $_SESSION['contactname_ec'] ?> ">
                                </label>

                                <!-- Gender -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Gender: <?php echo $_SESSION['gender_ec'] ?> ">
                                </label>

                                <!-- Title -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Title: <?php echo $_SESSION['title_ec'] ?> ">
                                </label>

                                <!-- Phone Number -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Phone Number: <?php echo $_SESSION['phone_ec'] ?> ">
                                </label>

                                <!-- Email -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Email: <?php echo $_SESSION['email_ec'] ?> ">
                                </label>

                                <!-- Country -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Country: Finland">
                                </label>

                                <!-- State -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="State: <?php echo $_SESSION['state_ec'] ?> ">
                                </label>

                                <!-- City -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="City: <?php echo $_SESSION['city_ec'] ?> ">
                                </label>

                                <!-- Zip Code -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Zip Code: <?php echo $_SESSION['zipcode_ec'] ?> ">
                                </label>

                                <!-- Street Address -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray" style="width: 100%"
                                           placeholder="Street Address: <?php echo $_SESSION['address_ec'] ?> ">
                                </label>

                                <!-- Apartment -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Apartment: <?php echo $_SESSION['apt_ec'] ?> ">
                                </label>

                                <!-- Department -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Department: <?php echo $_SESSION['dept_ec'] ?> ">
                                </label>

                                <!-- Pickup Date -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Pickup Date: <?php echo $_SESSION['pickupdate'] ?> ">
                                </label>

                                <!-- Pickup Time -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray" style="float: right"
                                           placeholder="Pickup Time: <?php echo $_SESSION['pickuptime'] ?> ">
                                </label>

                                <!-- Residential Address -->
                                <label>
                                    <input disabled class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Residential Address? <?php echo $_SESSION['resAdd_ec'] ?> ">
                                </label>

                                <!-- Package Updates -->
                                <label>
                                    <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                           placeholder="Email Package Updates? <?php echo $_SESSION['pkg_update_ec'] ?> ">
                                </label>

                                <!-- Edit Button -->
                                <label>
                                    <button style="float: left" onClick="history.go(-3)" id="edit"
                                            class="w3-button w3-medium w3-green-continue">Edit
                                    </button>
                                </label>
                    </fieldset>

                    <!-- Return Address Preview -->
                    <fieldset style="padding-bottom: 30px; margin: 50px 0 30px">
                        <legend>Return Address</legend>
                            <!-- Name -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Full Name: <?php echo $_SESSION['name_ec'] ?> ">
                            </label>

                            <!-- Contact Name -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Contact Name: <?php echo $_SESSION['contactname_ec'] ?> ">
                            </label>

                            <!-- Gender -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Gender: <?php echo $_SESSION['gender_ec'] ?> ">
                            </label>

                            <!-- Title -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Title: <?php echo $_SESSION['title_ec'] ?> ">
                            </label>

                            <!-- Phone Number -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Phone Number: <?php echo $_SESSION['phone_ec'] ?> ">
                            </label>

                            <!-- Email -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Email: <?php echo $_SESSION['email_ec'] ?> ">
                            </label>

                            <!-- Country -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Country: Finland">
                            </label>

                            <!-- State -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="State: <?php echo $_SESSION['state_ec'] ?> ">
                            </label>

                            <!-- City -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="City: <?php echo $_SESSION['city_ec'] ?> ">
                            </label>

                            <!-- Zip Code -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Zip Code: <?php echo $_SESSION['zipcode_ec'] ?> ">
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray" style="width: 100%"
                                       placeholder="Street Address: <?php echo $_SESSION['address_ec'] ?> ">
                            </label>

                            <!-- Apartment -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Apartment: <?php echo $_SESSION['apt_ec'] ?> ">
                            </label>

                            <!-- Department -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Department: <?php echo $_SESSION['dept_ec'] ?> ">
                            </label>

                            <!-- Notify of Return -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Notify of Return? <?php echo $_SESSION['notify_ec'] ?> ">
                            </label>

                            <!-- Residential Address -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Residential Address? <?php echo $_SESSION['resAdd_ec'] ?> ">
                            </label>

                            <!-- Edit Button -->
                            <label>
                                <button style="float: left" onClick="history.go(-3)"
                                        id="edit" class="w3-button w3-medium w3-green-continue">Edit
                                </button>
                            </label>
                    </fieldset>

                    <!-- Package Details Preview -->
                    <fieldset style="margin: 50px 0 30px">
                        <legend>Package Details</legend>
                        <!-- Package Type -->
                        <label>
                            <input disabled class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Package Type: <?php echo $_SESSION['package_type'] ?> ">
                        </label>

                        <!-- Delivery Options -->
                        <label>
                            <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Delivery option: <?php echo $_SESSION['delivery_options'] ?> ">
                        </label>

                        <!-- Package Type (Other) -->
                        <label>
                            <input disabled class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Package Type (Other): <?php echo $_SESSION['other'] ?> ">
                        </label>

                        <!-- Package's Worth (USD) -->
                        <label>
                            <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Package's Worth (USD): <?php echo $_SESSION['worth'] ?> ">
                        </label>

                        <!-- Weight -->
                        <label>
                            <input disabled class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Weight (pounds): <?php echo $_SESSION['weight'] ?>">
                        </label>

                        <!-- Length -->
                        <label>
                            <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Length (inches): <?php echo $_SESSION['length'] ?>">
                        </label>

                        <!-- Width -->
                        <label>
                            <input disabled class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Width (inches): <?php echo $_SESSION['width'] ?>">
                        </label>

                        <!-- Height -->
                        <label>
                            <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Height (inches): <?php echo $_SESSION['height'] ?>">
                        </label>

                        <!-- Colour -->
                        <label>
                            <input disabled class="w3-light-gray"
                                   placeholder="Colour: <?php echo $_SESSION['colour'] ?> ">
                        </label>

                        <!-- Texture -->
                        <label>
                            <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Texture: <?php echo $_SESSION['texture'] ?> ">
                        </label>

                        <!-- Brief Package Description -->
                        <label>
                            <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                   placeholder="Additional info about package: <?php echo $_SESSION['package_description'] ?> ">
                        </label>

                        <!-- Show other shipments -->
                        <div style="margin: 0 0 30px;" class="sliderWrapper">
                                    <span style="margin-left: 0" onclick="secondPackage()">
                                        + show other packages
                                    </span>
                        </div>

                        <!-- 2nd package -->
                        <fieldset id="secondPackage" style="margin: 10px 0 30px; display: none">
                            <legend>2nd Package Details</legend>
                            <!-- Package Type -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package Type: <?php echo $_SESSION['package_type_2'] ?> ">
                            </label>

                            <!-- Delivery Options -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Delivery option: <?php echo $_SESSION['delivery_options_2'] ?> ">
                            </label>

                            <!-- Package Type (Other) -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package Type (Other): <?php echo $_SESSION['other_2'] ?> ">
                            </label>

                            <!-- Package's Worth (USD) -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package's Worth (USD): <?php echo $_SESSION['worth_2'] ?> ">
                            </label>

                            <!-- Weight -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Weight (pounds): <?php echo $_SESSION['weight_2'] ?>">
                            </label>

                            <!-- Length -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Length (inches): <?php echo $_SESSION['length_2'] ?>">
                            </label>

                            <!-- Width -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Width (inches): <?php echo $_SESSION['width_2'] ?>">
                            </label>

                            <!-- Height -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Height (inches): <?php echo $_SESSION['height_2'] ?>">
                            </label>

                            <!-- Colour -->
                            <label>
                                <input disabled class="w3-light-gray"
                                       placeholder="Colour: <?php echo $_SESSION['colour_2'] ?> ">
                            </label>

                            <!-- Texture -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Texture: <?php echo $_SESSION['texture_2'] ?> ">
                            </label>

                            <!-- Brief Package Description -->
                            <label>
                                <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Additional info about package: <?php echo $_SESSION['package_description_2'] ?> ">
                            </label>
                        </fieldset>

                        <!-- 3rd package -->
                        <fieldset id="thirdPackage" style="margin: 10px 0 30px; display: none">
                            <legend>3rd Package Details</legend>
                            <!-- Package Type -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package Type: <?php echo $_SESSION['package_type_3'] ?> ">
                            </label>

                            <!-- Delivery Options -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Delivery option: <?php echo $_SESSION['delivery_options_3'] ?> ">
                            </label>

                            <!-- Package Type (Other) -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package Type (Other): <?php echo $_SESSION['other_3'] ?> ">
                            </label>

                            <!-- Package's Worth (USD) -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package's Worth (USD): <?php echo $_SESSION['worth_3'] ?> ">
                            </label>

                            <!-- Weight -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Weight (pounds): <?php echo $_SESSION['weight_3'] ?>">
                            </label>

                            <!-- Length -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Length (inches): <?php echo $_SESSION['length_3'] ?>">
                            </label>

                            <!-- Width -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Width (inches): <?php echo $_SESSION['width_3'] ?>">
                            </label>

                            <!-- Height -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Height (inches): <?php echo $_SESSION['height_3'] ?>">
                            </label>

                            <!-- Colour -->
                            <label>
                                <input disabled class="w3-light-gray"
                                       placeholder="Colour: <?php echo $_SESSION['colour_3'] ?> ">
                            </label>

                            <!-- Texture -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Texture: <?php echo $_SESSION['texture_3'] ?> ">
                            </label>

                            <!-- Brief Package Description -->
                            <label>
                                <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Additional info about package: <?php echo $_SESSION['package_description_3'] ?> ">
                            </label>
                        </fieldset>

                        <!-- 4th package -->
                        <fieldset id="fourthPackage" style="margin: 10px 0 30px; display: none">
                            <legend>4th Package Details</legend>
                            <!-- Package Type -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package Type: <?php echo $_SESSION['package_type_4'] ?> ">
                            </label>

                            <!-- Delivery Options -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Delivery option: <?php echo $_SESSION['delivery_options_4'] ?> ">
                            </label>

                            <!-- Package Type (Other) -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package Type (Other): <?php echo $_SESSION['other_4'] ?> ">
                            </label>

                            <!-- Package's Worth (USD) -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package's Worth (USD): <?php echo $_SESSION['worth_4'] ?> ">
                            </label>

                            <!-- Weight -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Weight (pounds): <?php echo $_SESSION['weight_4'] ?>">
                            </label>

                            <!-- Length -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Length (inches): <?php echo $_SESSION['length_4'] ?>">
                            </label>

                            <!-- Width -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Width (inches): <?php echo $_SESSION['width_4'] ?>">
                            </label>

                            <!-- Height -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Height (inches): <?php echo $_SESSION['height_4'] ?>">
                            </label>

                            <!-- Colour -->
                            <label>
                                <input disabled class="w3-light-gray"
                                       placeholder="Colour: <?php echo $_SESSION['colour_4'] ?> ">
                            </label>

                            <!-- Texture -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Texture: <?php echo $_SESSION['texture_4'] ?> ">
                            </label>

                            <!-- Brief Package Description -->
                            <label>
                                <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Additional info about package: <?php echo $_SESSION['package_description_4'] ?> ">
                            </label>

                            <!-- hide other items -->
                            <div style="margin: 0 0 7px;" class="sliderWrapper">
                                                <span id="fourthItem" style="margin-left: 0" onclick="hidePackages()">
                                                    - hide other packages
                                                </span>
                            </div>
                        </fieldset>

                        <!-- Edit Button -->
                        <label>
                            <button style="float: left" onClick="history.go(-2)" class="w3-button w3-medium w3-green-continue">Edit</button>
                        </label>
                    </fieldset>

                    <!-- Package Destination Preview -->
                    <fieldset style="padding-bottom: 30px; margin: 50px 0 30px">
                        <legend>Package Destination</legend>
                            <!-- Name -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Full Name: <?php echo $_SESSION['name_ec_dest'] ?> ">
                            </label>

                            <!-- Contact Name -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Contact Name: <?php echo $_SESSION['contactname_ec_dest'] ?> ">
                            </label>

                            <!-- Gender -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Gender: <?php echo $_SESSION['gender_ec_dest'] ?> ">
                            </label>

                            <!-- Title -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Title: <?php echo $_SESSION['title_ec_dest'] ?> ">
                            </label>

                            <!-- Phone Number -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Phone Number: <?php echo $_SESSION['phone_ec_dest'] ?> ">
                            </label>

                            <!-- Email -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Email: <?php echo $_SESSION['email_ec_dest'] ?> ">
                            </label>

                            <!-- Country -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Country: Finland">
                            </label>

                            <!-- State -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="State: <?php echo $_SESSION['state_ec_dest'] ?> ">
                            </label>

                            <!-- City -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="City: <?php echo $_SESSION['city_ec_dest'] ?> ">
                            </label>

                            <!-- Zip Code -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Zip Code: <?php echo $_SESSION['zipcode_ec_dest'] ?> ">
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray" style="width: 100%"
                                       placeholder="Street Address: <?php echo $_SESSION['address_ec_dest'] ?> ">
                            </label>

                            <!-- Apartment -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Apartment: <?php echo $_SESSION['apt_ec_dest'] ?> ">
                            </label>

                            <!-- Department -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Department: <?php echo $_SESSION['dept_ec_dest'] ?> ">
                            </label>

                            <!-- Residential Address -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Residential Address? <?php echo $_SESSION['resAdd_ec_dest'] ?> ">
                            </label>

                            <!-- Notify Receiver? -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Notify Receiver? <?php echo $_SESSION['notify_dest'] ?> ">
                            </label>

                            <!-- Edit Button -->
                            <label>
                                <button style="float: left" onClick="history.go(-3)" id="edit"
                                        class="w3-button w3-medium w3-green-continue">Edit
                                </button>
                            </label>
                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
                            <button name="submit" type="submit" class="w3-button w3-medium w3-green-continue">Submit</button>
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
