<?php
    session_start();
    // Checking first page values for empty,If it finds any blank field then redirected to first page.
    if (isset($_POST['name'])){
         if (empty($_POST['name'])
         || empty($_POST['contact_name'])
         || empty($_POST['country'])
         || empty($_POST['state'])
         || empty($_POST['city'])
         || empty($_POST['zip_code'])
         || empty($_POST['street_address'])
         || empty($_POST['apartment_suite'])
         || empty($_POST['department_c/o'])
         || empty($_POST['phone'])
         || empty($_POST['email'])){

     // Setting error message
     $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it";
     header("location: quote-is-1.php"); // Redirecting to first page
     } else {

     // Sanitizing email field to remove unwanted characters.
     $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

     // After sanitization Validation is performed.
     if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

       // // Validating Contact Field using regex.
       // if (!preg_match("/^[0-9]{10}$/", $_POST['phone'])){
       //   $_SESSION['error'] = "10 digit contact number is required.";
       //   header("location: quote-is-1.php");
       // }
     } else {
       $_SESSION['error'] = "Invalid Email Address";
       header("location: quote-is-1.php");//redirecting to first page
     }
     }
    } else {
     if (empty($_SESSION['error_page2'])) {
     header("location: quote-is-1.php");//redirecting to first page
     }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote</title>

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

            .container {
                padding: 0 20px !important;
            }

            .container-checkbox {
                text-align: center;
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
                                <a href="quote-is-1.html" class="active">International Shipping</a>
                                <a href="quote-ec.html">Local Shipping</a>
                                <a href="quote-ss.html">Secure Storage</a>
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
                        <a href="quote-is-1.html" style="padding-top: 0" class="active">International Shipping</a>
                        <a href="quote-ec.html">Express Courier</a>
                        <a href="quote-ss.html">Secure Storage</a>
                    </div>
                </a>
                <a href="#">About</a>
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

            <h3 id="required"><code class="w3-code">* Indicates required fields</code></h3>


            <!-- Container for Return Address  -->
            <div style="padding: 40px 0 0" class="w3-card-4">

                <!-- Toggle (different return address) -->
                <div style="margin: 0 0 30px; text-align: center" class="sliderWrapper">
                    Use a different return address?
                    <label class="switch">
                        <input type="checkbox" onclick="toggle_visibility('returnAdd')">
                        <span class="slider"></span>
                    </label>
                </div>


                <!-- Return Address -->
                    <form class="container-form" method="post" action="quote-is-3.php" style="padding: 0 50px">
                        <fieldset id="returnAdd" style="margin: 0 0 40px; padding-bottom: 0; display: none">
                            <legend>Return Address:</legend>
                            <!-- Full Name -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Full Name (or Company):  *"
                                       name="name_reAdd" type="text" required>
                            </label>

                            <!-- Contact Name -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right"
                                       placeholder="Contact Name:  *" name="contact_name_reAdd" type="text" required>
                            </label>

                            <!-- Country -->
                            <label for="countryId">
                                <select name="country_reAdd" class="countries" id="countryId" required>
                                    <option value="">Country:  *</option>
                                </select>
                            </label>

                            <!-- State -->
                            <label for="stateId">
                                <select name="state_reAdd" class="states" id="stateId" required>
                                    <option value="">State:  *</option>
                                </select>
                            </label>

                            <!-- City -->
                            <label for="cityId">
                                <select name="city_reAdd" class="cities" id="cityId" required>
                                    <option value="">City:  *</option>
                                </select>
                            </label>

                            <!-- Zip Code -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right"
                                       placeholder="Zip Code:  *" name="zip_code_reAdd" type="number" required>
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%"
                                       placeholder="Street Address:  *" name="street_address_reAdd" type="text" required>
                            </label>

                            <!-- Apartment, suite -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" name="apartment_suite_reAdd"
                                       placeholder="Apartment, unit, suite, building, floor, etc.:  *" type="text" required>
                            </label>

                            <!-- Department -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%"
                                       placeholder="Department, c/o, etc.: " name="department_c/o_reAdd" type="text">
                            </label>

                            <!-- Email -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Email:  *"
                                       name="email_reAdd" type="email" required>
                            </label>

                            <!-- Telephone -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right"
                                       name="phone_reAdd" placeholder="Telephone:  *" type="number" required>
                            </label>
                        </fieldset>


                        <!-- Continue and Cancel Button -->
                        <div class="w3-center">
                            <div class="w3-bar">
                                <button class="w3-button w3-medium w3-black-previous">Previous</button>
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
            <i class="scroll-icon fas fa-3x fa-arrow-circle-up"></i>
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
