<?php
    //let's start the session
    session_start();

    //store posted values in the session variables
    $_SESSION['weight'] = $_POST['weight'];
    $_SESSION['length'] = $_POST['length'];
    $_SESSION['width'] = $_POST['width'];
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['worth'] = $_POST['worth'];
    $_SESSION['delivery_options'] = $_POST['delivery_options'];
    $_SESSION['pkg_descr'] = $_POST['pkg_descr'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Express Courier - Package Destination)</title>

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

        .parallax {
            /* The image used */
            background-image: url("images/ec-pic3.jpg");

            /* Set a specific height */
            min-height: 480px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 290px;
        }

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            width: 47%;
            border: 1px solid #afafaf;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 90px !important;
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
                padding: 0 30px !important;
            }

            .container-form input, .container-form select{
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
                    <li class="navlistitem"><a href="/package-tracker/">Track</a></li>
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
        <div class="subheader-h2" style="width: 300px;">Quote - Express Courier</div>
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
                        <a href="quote-ec.php" class="active">Express Courier</a>
                        <a href="quote-ss-1.php">Secure Storage</a>
                    </div>
                </a>
                <a href="#">About</a>
                <a href="contact.html">Contact</a>
                <a href="/package-tracker/">Track</a>
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
                <span class="step finish"></span>
                <span class="step active"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 4 of 5)</span>
            </div>

            <h2 id="hi">Where is it going?</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span style="font-size: 16px"><i class="fas fa-asterisk"></i></span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                <!-- Package Destination -->
                <form class="container-form" method="post" action="quote-ec-review.php" style="padding-bottom: 0">

                    <fieldset id="returnAdd" style="margin: 0 0 30px; padding-bottom: 30px"">

                    <legend>Package Destination</legend>

                            <!-- Full Name -->
                            <label>
                                <input class="w3-light-gray" placeholder="Full Name (or Company):  *" name="name_ec_dest" type="text" required>
                            </label>

                            <!-- Contact Name -->
                            <label>
                                <input class="w3-light-gray" style="float: right" placeholder="Contact's Name:  *"
                                       name="contactname_ec_dest" type="text" required>
                            </label>

                            <!-- Gender -->
                            <label>
                                <select class="choice" name="gender_ec_dest" required>
                                    <option value="0" selected="selected">== Gender ==  *</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </label>

                            <!-- Title -->
                            <label>
                                <input class="w3-light-gray" style="padding: 13px; float: right" placeholder="Title (Mr, Mrs, Dr. etc):   *"
                                       name="title_ec_dest" type="text" required>
                            </label>

                            <!-- Telephone -->
                            <label>
                                <input class="w3-light-gray" placeholder="Telephone:   *" name="phone_ec_dest" type="tel" required>
                            </label>

                            <!-- Email -->
                            <label>
                                <input class="w3-light-gray" style="float: right" name="email_ec_dest" placeholder="Email:  *"
                                       type="email" required>
                            </label>

                            <!-- Country (Finland) -->
                            <label>
                                <input name="country_ec_dest" class="countries" value="Finland" disabled>
                            </label>
                            <input type="hidden" name="country_ec_dest" id="countryId" value="FI"/>

                            <!-- State -->
                            <label for="stateId">
                                <select name="state_ec_dest" style="float: right" class="choice states order-alpha" id="stateId" required>
                                    <option value="0" selected="selected">State:  *</option>
                                </select>
                            </label><br>

                            <!-- City -->
                            <label for="cityId">
                                <select name="city_ec_dest" style="float: left" class="choice cities order-alpha" id="cityId" required>
                                    <option value="0" selected="selected">City:  *</option>
                                </select>
                            </label>

                            <!-- Zip Code -->
                            <label>
                                <input class="w3-light-gray" style="float: right" placeholder="Zip Code:  *"
                                       name="zipcode_ec_dest" type="number" required>
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Street Address:  *"
                                       name="address_ec_dest" type="text" required>
                            </label>

                            <!-- Apartment, Suite, Unit -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Apartment, unit, suite, building, floor, etc.:  "
                                       name="apt_ec_dest" type="text">
                            </label>

                            <!-- Department -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right;" placeholder="Department, c/o, etc.: "
                                       name="dept_ec_dest" type="text">
                            </label>

                            <!-- Toggle (Residential Address?) -->
                            <div class="sliderWrapper" style="margin: 7px 0">
                                <span style="margin-left: 3px;">Is this a residential address?</span>
                                <label class="switch">
                                    <input type="checkbox" value="No" id="res" onclick="resAdd()" name="resAdd_ec_dest">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </fieldset>

                            <!-- Continue and Cancel Button -->
                            <div class="w3-center">
                                <div class="w3-bar">
                                    <button onClick="history.go(-1)" class="w3-button w3-medium w3-black-previous">Previous</button>
                                    <button type="submit" value="Next" class="w3-button w3-medium w3-green-continue">
                                        Next</button>
                                    <button type="reset" value="Reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
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

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
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
