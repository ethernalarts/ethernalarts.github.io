<?php
    //let's start the session
    session_start();

    //store posted values in the session variables
    $_SESSION['name_ec'] = $_POST['name_ec'];
    $_SESSION['contactname_ec'] = $_POST['contactname_ec'];
    $_SESSION['gender_ec'] = $_POST['gender_ec'];
    $_SESSION['title_ec'] = $_POST['title_ec'];
    $_SESSION['phone_ec'] = $_POST['phone_ec'];
    $_SESSION['email_ec'] = $_POST['email_ec'];
    $_SESSION['country_ec'] = $_POST['country_ec'];
    $_SESSION['state_ec'] = $_POST['state_ec'];
    $_SESSION['city_ec'] = $_POST['city_ec'];
    $_SESSION['zipcode_ec'] = $_POST['zipcode_ec'];
    $_SESSION['address_ec'] = $_POST['address_ec'];
    $_SESSION['apt_ec'] = $_POST['apt_ec'];
    $_SESSION['dept_ec'] = $_POST['dept_ec'];
    $_SESSION['pickupdate'] = $_POST['pickupdate'];
    $_SESSION['pickuptime'] = $_POST['pickuptime'];
    $_SESSION['resAdd_ec'] = $_POST['resAdd_ec'];
    $_SESSION['pkg_update_ec'] = $_POST['pkg_update_ec'];

    // Sanitizing email field to remove unwanted characters.
    $_POST['email_ec'] = filter_var($_POST['email_ec'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_ec'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-ec.php");//redirecting to first page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Express Courier - Return Address)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/statecity.js"></script>

    <div class="thetop"></div>

    <style>
        .body {
            width: 100%;
            max-width: 1440px;
            height: auto;
            margin: 0;
            background-image: none;
        }

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            border: 1px solid #afafaf;
            background-color: #f5f5f5;
        }

        .skip {
            margin: 40px 0 0;
            text-align: center;
            font-family: Verdana, serif;
            font-weight: 600;
            font-size: 1.2em;
            color: #555555;
            text-decoration: underline;
        }

        .w3-btn:hover {
            color: #414141 !important;
            background-color: transparent !important;
            box-shadow: none;
        }

        .countries, .states {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 0.95em;
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {

            .container {
                padding: 0 30px !important;
            }

            .container-form {
                margin: 0;
                padding: 30px;
            }

            .container-checkbox {
                text-align: center;
            }

            fieldset {
                padding: 30px;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.3em Verdana, sans-serif;
            }

            #skip {
                font-size: 1.1em;
            }

            .container {
                padding: 0 20px !important;
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
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php" class="active">Express Courier</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="about.html">About</a></li>
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
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 2 of 5)</span>
            </div>

            <h2 id="hi">Return Address</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span style="font-size: 16px"><i class="fas fa-asterisk"></i></span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>


            <!-- Container for Return Address  -->
            <div class="w3-card-4">

                <!-- Toggle (different return address) -->
                <form method="post" style="text-align: center" action="quote-ec-2-skip.php">
                    <button type="submit" class="skip w3-btn w3-medium">
                        Skip, use package's origin's address
                    </button>
                </form>

                    <!-- Return Address Form -->
                    <form class="container-form" method="post" action="quote-ec-2.php" style="padding-bottom: 5px">

                        <fieldset id="returnAdd" style="margin: 0 0 40px; padding-bottom: 20px">

                            <legend>Return Address</legend>

                                <!-- Full Name -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Full Name (or Company):  *" name="name_ec_ra" type="text" required>
                                </label>

                                <!-- Contact Name -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Contact's Name:  *"
                                           name="contactname_ec_ra" type="text" required>
                                </label>

                                <!-- Gender -->
                                <label>
                                    <select class="choice" name="gender_ec_ra" required>
                                        <option value="0" selected="selected">== Gender ==   *</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </label>

                                <!-- Title -->
                                <label>
                                    <input class="w3-light-gray" style="padding: 13px; float: right" placeholder="Title (Mr, Mrs, Dr. etc):   *"
                                           name="title_ec_ra" type="text" required>
                                </label>

                                <!-- Telephone -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Telephone:   *" name="phone_ec_ra" type="tel" required>
                                </label>

                                <!-- Email -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" name="email_ec_ra" placeholder="Email:  *"
                                           type="email" required>
                                </label>

                                <!-- Country (Finland) -->
                                <label>
                                    <input name="country_ec_ra" class="countries" value="Finland" disabled>
                                </label>
                                <input type="hidden" name="country_ec_ra" id="countryId" value="FI">

                                <!-- State -->
                                <label for="stateId">
                                    <select name="state_ec_ra" style="float: right" class="choice states order-alpha" id="stateId" required>
                                        <option value="0" selected="selected">State:  *</option>
                                    </select>
                                </label>

                                <!-- City -->
                                <label for="cityId">
                                    <select name="city_ec_ra" style="float: left" class="choice cities order-alpha" id="cityId" required>
                                        <option value="0" selected="selected">City:  *</option>
                                    </select>
                                </label>

                                <!-- Zip Code -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Zip Code:  *"
                                           name="zipcode_ec_ra" type="number" required>
                                </label>

                                <!-- Street Address -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Street Address:  *"
                                           name="address_ec_ra" type="text" required>
                                </label>

                                <!-- Apartment, Suite, Unit -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Apartment, unit, suite, building, floor, etc.:  "
                                           name="apt_ec_ra" type="text">
                                </label>

                                <!-- Department -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="float: right;" placeholder="Department, c/o, etc.: "
                                           name="dept_ec_ra" type="text">
                                </label>

                                <!-- Toggle (residential address?) -->
                                <div class="sliderWrapper" style="margin: 7px 0">
                                    <span style="margin-left: 3px;">Is this a residential address?</span>
                                    <label class="switch">
                                        <input type="checkbox" value="No" id="res" onclick="resAdd()" name="resAdd_ec_ra">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                        </fieldset>

                            <!-- Check Box (Email updates on shipment) -->
                            <label class="container-checkbox" style="font-size: 1.05em; margin: 5px 0 30px 0">
                                Notify of return using the email above
                                <input type="checkbox" value="No" id="stat" onclick="status()" name="notify_ec">
                                <span class="checkmark"></span>
                            </label>

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

    <!-- JS to change "value" text for residential address -->
    <script>
        function resAdd() {
            const res = document.getElementById("res");
            res.value = "Yes";
        }
    </script>

    <!-- JS to change "value" text for Package Updates -->
    <script>
        function status() {
            const x = document.getElementById("stat");
            x.value = "Yes";
        }
    </script>

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

    <!-- JavaScript to toggle return address ON/OFF -->
    <script>
        function toggle_visibility(returnAdd) {
            var e = document.getElementById(returnAdd);
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');
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