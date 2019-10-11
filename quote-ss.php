<?php
session_start(); // Session starts here.
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Secure Storage - Basic Details)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
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
            padding: 0 210px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ss-pic.jpg");

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

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            width: 47%;
            border: 1px solid #afafaf;
            background-color: #f5f5f5;
        }

        .countries, .states, .cities {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 0.95em;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 40px;
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
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 1 of 3)</span>
            </div>

            <h2 id="hi">Basic Details</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span style="font-size: 13px"><i class="fas fa-asterisk"></i></span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                <!-- Express Courier Quote form -->
                <form class="container-form" style="padding-bottom: 0"  method="post" action="quote-ss-1.php">

                        <!-- Basic Details -->
                        <fieldset style="margin: 0 0 20px; padding-bottom: 20px">

                            <legend>Basic Information</legend>

                                <!-- Full Name -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Full Name (or Company):  *" name="name_ss" type="text" required>
                                </label>

                                <!-- Contact Name -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Contact's Name:  *"
                                           name="contactname_ss" type="text" required>
                                </label>

                                <!-- Gender -->
                                <label>
                                    <select class="choice" name="gender_ss" required>
                                        <option value="0" selected="selected">Gender   *</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </label>

                                <!-- Title -->
                                <label>
                                    <input class="w3-light-gray" style="padding: 13px; float: right" placeholder="Title (Mr, Mrs, Dr. etc):   *"
                                           name="title_ss" type="text" required>
                                </label>

                                <!-- Age -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Age:  *"
                                           name="age_ss" type="text" required>
                                </label>

                                <!-- Occupation -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Occupation:  *" style="float: right"
                                           name="occupation_ss" type="text" required>
                                </label>

                                <!-- Telephone -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Telephone:   *" name="phone_ss" type="tel" required>
                                </label>

                                <!-- Email -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" name="email_ss" placeholder="Email:  *"
                                           type="email" required>
                                </label>

                                <!-- Country (Finland) -->
                                <label>
                                    <input name="country_ss" class="countries" value="Finland" disabled>
                                </label>
                                <input type="hidden" name="country_ss" id="countryId" value="FI"/>

                                <!-- State -->
                                <label for="stateId">
                                    <select name="state_ss" style="float: right" class="choice states order-alpha" id="stateId" required>
                                        <option value="0" selected="selected">State:  *</option>
                                    </select>
                                </label><br>

                                <!-- City -->
                                <label for="cityId">
                                    <select name="city_ss" style="float: left" class="choice cities order-alpha" id="cityId" required>
                                        <option value="0" selected="selected">City:  *</option>
                                    </select>
                                </label>

                                <!-- Zip Code -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Zip Code:  *"
                                           name="zipcode_ss" type="number" required>
                                </label>

                                <!-- Street Address -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Street Address:  *"
                                           name="address_ss" type="text" required>
                                </label>

                                <!-- Apartment, Suite, Unit -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Apartment, unit, suite, building, floor, etc.:  "
                                           name="apt_ss" type="text">
                                </label>

                                <!-- Department -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="float: right;" placeholder="Department, c/o, etc.: "
                                           name="dept_ss" type="text">
                                </label>

                                <!-- Residential address? -->
                                <label>
                                    <select  name="resAdd_ss" class="choice">
                                        <option value="0" selected="selected">Is this a residential address?  *</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </label>

                                <!-- Storage Status on Item -->
                                <label>
                                    <select  style="float: right" name="item_update_ss" class="choice">
                                        <option value="0" selected="selected">Should we email you storage status? </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </label>

                        </fieldset>

                            <!-- Continue and Cancel Button -->
                            <div class="w3-center">
                                <div class="w3-bar">
                                    <button value="Next" type="submit" class="w3-button w3-medium w3-green-continue">Next</button>
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
            document.getElementsByClassName("dropbtn").style.backgroundColor = "#b93131";
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                let dropdowns = document.getElementsByClassName("dropdownnav-content");
                let i;
                for (i = 0; i < dropdowns.length; i++) {
                    let openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function hiLite() {
            document.getElementById("hiLite").style.backgroundColor = "#b93131";
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
