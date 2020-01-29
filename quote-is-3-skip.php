<?php
    session_start(); // Session starts here.

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    if(isset($_POST['notify']))
        $_SESSION['notify']=$_POST['notify'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (International Shipping - Shipment Destination)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">

    <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
    <link href="css/misc.css" type="text/css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/regform2.css" rel="stylesheet" type="text/css">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

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

        .container {
            padding: 0 160px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/is-pic3.jpg");

            /* Set a specific height */
            min-height: 470px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-top {
            margin-top: 230px;
        }

        .subheader-bottom {
            margin: 10px auto 30px;
        }

        .container-form input {
            margin: 0;
            font-size: 18px;
            border: 0;
            padding: 0;
            vertical-align: middle;
        }

        /* On screens that are 1200px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {
            .container {
                padding: 0 80px;
            }
        }

        /* On screens that are 1000px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1000px) {
            .container {
                padding: 0 50px;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 770px) {
            .container {
                padding: 0 25px;
            }

            .col-sm-6 {
                 width: 100%;
            }

            /*.container-form input, .container-form select {*/
            /*    width: 100%;*/
            /*}*/

            button.w3-button.w3-red-cancel {
                margin: 5px 0 0;
                width: 40%;
            }

            button.w3-button.w3-green-continue {
                width: 40%;
            }

            button.w3-button.w3-black-previous {
                width: 40% !important;
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
                            <a onclick="dropDownNav()" class="active dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></a>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php" class="active">International Shipping</a>
                                <a href="quote-ec.php">Domestic Shipping</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="about.html">About</a></li>
                    <li class="navlistitem"><a href="contact.php">Contact</a></li>
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
        <div class="subheader-top" style="width: 130px">Quote</div>

        <!-- Subheader. Just below the navbar -->
        <div class="subheader-bottom" style="width: 380px">International Shipping</div>
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
                <a class="active w3-dropdown-click" style="padding-top: 0" onclick="myFunction()">
                    Get a Quote <i class="fas fa-caret-down"></i>
                    <div id="demo" class="dropdown">
                        <a href="quote-is-1.php" style="padding-top: 0" class="active">International Shipping</a>
                        <a href="quote-ec.php">Domestic Shipping</a>
                        <a href="quote-ss.php">Secure Storage</a>
                    </div>
                </a>
                <a href="about.html">About</a>
                <a href="contact.php">Contact</a>
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
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 3 of 5)</span>
            </div>

            <!-- Container for International Shipping Quote form  -->
            <div class="w3-card-4">

                <!-- International Shipping Quote form -->
                <form class="container-form" method="post" action="quote-is-4-skip.php" style="padding-bottom: 0">
                    <h3 class="h3-contactform">Where is it going?</h3>
                    <div class="formtitle">Shipment Destination</div>
                    <!-- Shipment Destination -->
                    <fieldset class="nofieldset" style="margin-bottom: 50px">
                        <legend style="margin-bottom: 10px" class="legend-middle">
                            <span style="font-family: Roboto, serif">*</span>&nbsp;&nbsp;Indicates required fields
                        </legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Name">
                                        <label for="name">Full Name (or Company) <span class="required">*</span></label>
                                        <input class="input100" type="text" name="name_dest"  id="name" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Contact Name">
                                        <label for="contact_name">Contact's Name <span class="required">*</span></label>
                                        <input class="input100" name="contact_name_dest" id="contact_name" type="text" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-39 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="gender">Gender <span class="required">*</span></label>
                                            <select name="gender_dest" id="gender" required>
                                                <option disabled="disabled" selected="selected"></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Title">
                                        <label for="title">Title <span class="required">*</span></label>
                                        <input class="input100" type="text" name="title_dest" id="title" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Telephone">
                                        <label for="phone">Telephone <span class="required">*</span></label>
                                        <input class="input100" type="tel" name="phone_dest" id="phone_dest" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input class="input100" type="email" name="email_dest" id="email" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-40 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="countryId">Country <span class="required">*</span></label>
                                            <select name="country_dest" class="countries" id="countryId" type="select" required>
                                                <option disabled="disabled" selected="selected"></option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-40 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="stateId">State <span class="required">*</span></label>
                                            <select name="state_dest" class="states" id="stateId" type="select" required>
                                                <option selected="selected"></option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-39 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="cityId">City <span class="required">*</span></label>
                                            <select name="city_dest" class="cities" id="cityId" type="select" required>
                                                <option selected="selected"></option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Zip Code">
                                        <label for="zip_code">Zip Code <span class="required">*</span></label>
                                        <input class="input100" name="zip_code_dest" id="zip_code" type="number" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Street Address">
                                        <label for="street_add">Street Address <span class="required">*</span></label>
                                        <input class="input100" name="street_add_dest" id="street_add" type="text" required>
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                        <label for="street_add2">Apartment, suite, floor, unit etc</label>
                                        <input class="input100" name="street_add2_dest" id="street_add2" type="text">
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35">
                                        <label for="department">Department, c/o, etc.</label>
                                        <input class="input100" name="department_dest" id="department" type="text">
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-39 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="residential_add">Is this a residential address? <span class="required">*</span></label>
                                            <select name="residential_add_dest" id="residential_add" required>
                                                <option disabled="disabled" selected="selected"></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email updates to recipient on shipment status? -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-group m-t-39 m-b-35">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <label for="notify">Send recipient shipment status <span class="required">*</span></label>
                                            <select name="notify_dest" id="notify">
                                                <option disabled="disabled" selected="selected"></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

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

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>

    <!-- International Telephone Country Code -->
    <script src="js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone_dest");
        window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "js/utils.js?1562189064761" // just for formatting/placeholders etc
        });
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

    <script src="js/main.js"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

    <!-- footer -->
    <footer>
        <!-- Address and Phone number -->
        <p class="footeradd">
            3M, Microkatu, 70210 Kuopio, Finland, +358 9 42453389
        </p>

        <!-- Copyright -->
        <p class="footercopyrite">
            Copyright <i class="copyright far fa-copyright"></i> 2019 VLink Express Courier Ltd. All Rights Reserved.
        </p>

        <!-- Social Media icons -->
        <div class="div-footer-followus">
            <p>
                <a target="_blank" href="https://www.facebook.com/vlinkexpresscourier">
                    <img src="images/facebook.png" class="footer-FB" alt="facebook icon">
                </a>
                <a target="_blank" href="https://www.instagram.com/vlinkexpresscourier">
                    <img src="images/instagram.png" class="footer-INSTA" alt="instagram icon">
                </a>
                <a target="_blank" href="https://www.twitter.com/vlinkexpresscourier">
                    <img src="images/twitter.png" class="footer-INSTA" alt="twitter icon">
                </a>
                <a target="_blank" href="https://www.linkedin.com/vlinkexpresscourier">
                    <img src="images/linkedin.png" class="footer-LI" alt="linkedin icon">
                </a>
            </p>
        </div>

        <!-- Footer Links -->
        <div>
            <ul class="footerlinks">
                <li style="padding-left: 0" class="footerlinkitem"><a href="privacy.html">Privacy Policy</a></li>
                <li class="footerlinkitem"><a href="terms.html">Terms</a></li>
                <li class="footerlinkitem"><a href="about.html">About</a></li>
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>
