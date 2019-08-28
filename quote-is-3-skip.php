<?php
    //start the session
    session_start();
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
                <form class="container-form" method="post" action="quote-is-4-skip.php" style="padding-bottom: 0">
                    <fieldset style="margin: 0 0 20px; padding-bottom: 20px">
                        <legend>Shipment Destination:</legend>
                            <!-- Full Name -->
                            <label>
                                <input class="w3-light-gray" placeholder="Full Name (or Company):  *" name="name_dest" type="text" required>
                            </label>

                            <!-- Contact Name -->
                            <label>
                                <input class="w3-light-gray" placeholder="Contact Name:  *" style="float: right;" name="contact_name_dest" type="text" required>
                            </label>

                            <!-- Gender -->
                            <label>
                                <select class="choice" name="gender" required>
                                    <option value="0" selected="selected">Gender:   *</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </label>

                            <!-- Country -->
                            <label for="countryId">
                                <select name="country_dest" style="float: right" class="choice countries" id="countryId" type="select" required>
                                    <option value="0" selected="selected">Country:  *</option>
                                </select>
                            </label>

                            <!-- State -->
                            <label for="stateId">
                                <select name="state_dest" class="choice states" id="stateId" type="select" required>
                                    <option value="0" selected="selected">State:  *</option>
                                </select>
                            </label>

                            <!-- City -->
                            <label for="cityId">
                                <select name="city_dest" style="float: right" class="choice cities" id="cityId" type="select" required>
                                    <option value="0" selected="selected">City:  *</option>
                                </select>
                            </label>

                            <!-- Post Code -->
                            <label>
                                <input class="w3-light-gray" placeholder="Post Code:  *"
                                       name="post_code_dest" type="number" required>
                            </label>

                            <!-- Email -->
                            <label>
                                <input style="float: right" class="w3-input w3-border-0 w3-light-gray" name="email_dest"
                                       placeholder="Email:  *" type="email" required>
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input class="w3-light-gray" style="width: 100%"
                                       placeholder="Street Address:  *" name="street_address_dest" type="text" required>
                            </label>

                            <!-- Apartment, suite, building -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" name="apartment_suite_dest"
                                       placeholder="Apartment, unit, suite, building, floor, etc.:  " type="text">
                            </label>

                            <!-- Department -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right" name="department_dest"
                                       placeholder="Department, c/o, etc.: " type="text">
                            </label>

                            <!-- Telephone -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" name="phone_dest"
                                       placeholder="Telephone:  *" type="number" required>
                            </label>

                            <!-- Residential Address -->
                            <label>
                                <select  style="float: right" name="residential_add_dest" class="choice" required>
                                    <option value="0" selected="selected">Is this a residential address?   *</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </label>


                            <!-- Toggle (residential address?) -->
<!--                            <div class="sliderWrapper" style="margin: 7px 0">-->
<!--                                <span style="margin-left: 12px;">Is this a residential address?</span>-->
<!--                                <label class="switch">-->
<!--                                    <input type="checkbox">-->
<!--                                    <span class="slider"></span>-->
<!--                                </label>-->
<!--                            </div>-->
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
