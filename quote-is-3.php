<?php
    //start the session
    session_start();

    $_SESSION['name_reAdd'] = $_POST['name_reAdd'];
    $_SESSION['contact_name_reAdd'] = $_POST['contact_name_reAdd'];
    $_SESSION['country_reAdd'] = $_POST['country_reAdd'];
    $_SESSION['state_reAdd'] = $_POST['state_reAdd'];
    $_SESSION['city_reAdd'] = $_POST['city_reAdd'];
    $_SESSION['zip_code_reAdd'] = $_POST['zip_code_reAdd'];
    $_SESSION['street_address_reAdd'] = $_POST['street_address_reAdd'];
    $_SESSION['apartment_suite_reAdd'] = $_POST['apartment_suite_reAdd'];
    $_SESSION['department_c/o_reAdd'] = $_POST['department_c/o_reAdd'];
    $_SESSION['phone_reAdd'] = $_POST['phone_reAdd'];
    $_SESSION['email_reAdd'] = $_POST['email_reAdd'];

    // Sanitizing email field to remove unwanted characters.
    $_POST['email_reAdd'] = filter_var($_POST['email_reAdd'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_reAdd'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-is-2.php");     //redirecting to second page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (International Shipping - Shipment Destination)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
    <link href="css/progressbar.css" type="text/css" rel="stylesheet">
    <link href="css/misc.css" type="text/css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/countrystatecity.js"></script>

    <div class="thetop"></div>

    <style>
        .body {
            width: 100%;
            max-width: 1440px;
            height: auto;
            margin: 0;
            background-image: none;
        }

        .countries, .states {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 0.95em;
            color: #2A2A2A;
        }

        #stateId {
            float: right;
        }
        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {
            .container {
                padding: 0 50px !important;
            }

            .container-checkbox {
                text-align: justify;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.3em Verdana, sans-serif;
            }

            .container {
                padding: 0 30px !important;
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
                            <button onclick="dropDownNav()" class="dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php" class="active">International Shipping</a>
                                <a href="quote-ec.php">Express Courier</a>
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
        <div class="subheader-h2" style="width: 380px;">Quote - International Shipping</div>
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
                        <a href="quote-is-1.php" style="padding-top: 0" class="active">International Shipping</a>
                        <a href="quote-ec.php">Express Courier</a>
                        <a href="quote-ss.php">Secure Storage</a>
                    </div>
                </a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="track.html">Track</a>
            </div>
        </div>

    <!-- Outer Container that contains body content and pads it 300px left and right to <body> -->
    <div class="container" style="padding: 0 210px">

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

            <h2 id="hi">Where is it going?</h2>

            <h3 id="required"><code class="w3-code">* Indicates required fields</code></h3>


            <!-- Container for International Shipping Quote form  -->
            <div class="w3-card-4">


                <!-- Shipment Destination -->
                <form class="container-form" method="post" action="quote-is-4.php" style="padding-bottom: 0">
                    <fieldset style="margin: 0 0 20px">
                        <legend>Shipment Destination:</legend>
                            <!-- Full Name -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Full Name (or Company):  *"
                                       name="name_dest" type="text" required>
                            </label>

                            <!-- Contact Person -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right"
                                       name="contact_name_dest" placeholder="Contact Name:  *" type="text" required>
                            </label>

                            <!-- Country -->
                            <label for="countryId">
                                <select name="country_dest" class="countries" id="countryId" required>
                                    <option value="">Country:  *</option>
                                </select>
                            </label>

                            <!-- State -->
                            <label for="stateId">
                                <select name="state_dest" class="states" id="stateId" required>
                                    <option value="">State:  *</option>
                                </select>
                            </label>

                            <!-- City -->
                            <label for="cityId">
                                <select name="city_dest" class="cities" id="cityId" type="select" required>
                                    <option value="">City:  *</option>
                                </select>
                            </label>

                            <!-- Post Code -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right" placeholder="Post Code: "
                                name="post_code_dest"type="number">
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Street Address:  *"
                                name="street_address_dest"type="text" required>
                            </label>

                            <!-- Apartment, unit, suite -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Apartment, unit, suite, building, floor, etc.:  *"
                                name="apartment_suite_dest"type="text" required>
                            </label>

                            <!-- Department -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Department, c/o, etc.: "
                                name="department_c/o_dest"type="text">
                            </label>

                            <!-- Telephone -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right" placeholder="Telephone: "
                                name="phone_dest"type="number">
                            </label>

                            <!-- Email -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Email: " name="email_dest" type="email">
                            </label>


                            <!-- Toggle (residential address?) -->
                            <div class="sliderWrapper" style="margin: 7px 0">
                                <span style="margin-left: 12px;">Is this a residential address?</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                    </fieldset>

                    <!-- Email updates to recipient on shipment status -->
                    <label class="container-checkbox" style="padding-left: 0; margin: 30px 0; font-size: 1em; cursor: initial">
                        <p>
                           We may use the email and/or phone number provided to update
                           your receiver about the status of their package.
                        </p>
                    </label>

                    <!-- Previous, Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
                            <button onClick="javascript:history.go(-1)" class="w3-button w3-medium w3-black-previous">Previous</button>
                            <button type="submit" value="Next" class="w3-button w3-medium w3-green-continue">Next</button>
                            <button type="reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
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
</body>

<!-- footer   -->
<footer>
    <div>
        Copyright <i class="copyright far fa-copyright"></i> 2019 V-Link Express Courier. All Rights Reserved.
    </div>
</footer>
</html>
