<?php
    session_start(); // Session starts here.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
    <link href="css/progressbar.css" type="text/css" rel="stylesheet">
    <link href="./css/misc.css" type="text/css" rel="stylesheet">
    <link href="./css/w3.css" type="text/css" rel="stylesheet">
    <link href="./css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="./css/vlink.css" type="text/css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/countrystatecity.js"></script>

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

        #returnAdd {
            margin: 40px 0 0;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        .countries, .states, .cities {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 1.03em;
        }

        #stateId, #state_Id {
            float: right;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {

            #hi {
                margin: 40px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 30px !important;
            }
        }

        /* On screens that are 700px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            #hi {
                margin: 40px 0 0;
                text-align: center;
                font-size: 1.3em;
            }

            .container {
                padding: 0 30px !important;
            }

            .container-form input {
                width: 100%;
            }

            .container-form select {
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
                                <a href="quote-is-1.html" class="active">International Shipping</a>
                                <a href="quote-ec.html">Express Courier</a>
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
                <i class="material-icons md-48">menu</i><br>
                    <span>Menu</span>
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
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 1 of 5)</span>
            </div>

            <h2 id="hi">Hi. Please tell us about your Shipment.</h2>

            <h3 id="required"><code class="w3-code">* Indicates required fields</code></h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">


                <!--- Initializing Session for errors --->
                <span id="error">
                    <?php
                         if (!empty($_SESSION['error'])) {
                         echo $_SESSION['error'];
                         unset($_SESSION['error']);
                         }
                     ?>
                </span>


                <!-- International Shipping Quote form -->
                <form class="container-form" method="post" style="padding-bottom: 0" action="quote-is-2.php">

                    <!-- Shipment Origin -->
                    <div class="tab">
                        <fieldset style="margin: 0 0 20px; padding-bottom: 0">
                            <legend>Shipment Origin:</legend>
                            <!-- Full Name -->
                            <label>
                                <input class="w3-light-gray" placeholder="Full Name (or Company):  *" name="name" type="text" required>
                            </label>

                            <!-- Contact Name -->
                            <label>
                                <input class="w3-light-gray" placeholder="Contact Name:  *" style="float: right;" name="contact_name" type="text" required>
                            </label>

                            <!-- Country -->
                            <label for="countryId">
                                <select name="country" class="countries" id="countryId" type="select" required>
                                    <option value="">Country:  *</option>
                                </select>
                            </label>

                            <!-- State -->
                            <label for="stateId">
                                <select name="state" class="states" id="stateId" type="select" required>
                                    <option value="">State:  *</option>
                                </select>
                            </label>

                            <!-- City -->
                            <label for="cityId">
                                <select name="city" class="cities" id="cityId" type="select" required>
                                    <option value="">City:  *</option>
                                </select>
                            </label>

                            <!-- Zip Code -->
                            <label>
                                <input class="w3-light-gray" style="float: right" placeholder="Zip Code:  *"
                                       name="zip_code" type="number" required>
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input class="w3-light-gray" style="width: 100%"
                                       placeholder="Street Address:  *" name="street_address" type="text" required>
                            </label>

                            <!-- Apartment, suite, building -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" name="apartment_suite"
                                       placeholder="Apartment, unit, suite, building, floor, etc.:  *" type="text" required>
                            </label>

                            <!-- Department -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" name="department_c/o"
                                       placeholder="Department, c/o, etc.: " type="text">
                            </label>

                            <!-- Telephone -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right" name="phone"
                                       placeholder="Telephone:  *" type="number" required>
                            </label>

                            <!-- Email -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" name="email"
                                       placeholder="Email:  *" type="email" required>
                            </label>
                        </fieldset>


                        <!-- Check Box (Email updates on shipment) -->
                        <label class="container-checkbox">
                            <span style="margin-bottom: 2px">Send status updates on this shipment using the email above</span>
                            <input type="checkbox" name="status_updates">
                            <span class="checkmark"></span>
                        </label>

                    </div>

                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
                            <button type="submit" value="Next" class="w3-button w3-medium w3-green-continue">
                                Next
                            </button>
                            <button type="reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
                        </div>
                    </div>

                <!-- End of form -->
                </form>
            </div>
        </div>
    </div>


    <!-- JavaScript to loop through quote form -->
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n === 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n === (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n === 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value === "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

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

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-arrow-circle-up"></i>
        </div>
    </div>
</body>

<!-- footer   -->
<footer>
    <div>
        Copyright <i class="copyright far fa-copyright"></i> 2019 V-Link Express Courier. All Rights Reserved.
    </div>
</footer>
</html>
