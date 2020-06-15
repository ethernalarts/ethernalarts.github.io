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

    <title>VLink Express Courier - Contact Us</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>

    <div class="thetop"></div>

    <style>
        .body {
            width: 100%;
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 180px;
        }

        .w3-card-4 {
            margin: 65px 0 80px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/contact-pic.jpg");

            /* Set a specific height */
            min-height: 440px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-top {
            margin-top: 260px;
        }

        #required code {
            font-family: Lato, sans-serif;
            font-style: italic;
            font-size: 0.85em;
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {
            .container {
                padding: 0 40px;
            }

            .container-form {
                margin: 0;
                padding: 40px;
            }
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 900px) {
            .container {
                padding: 0 20px;
            }

            .container-form {
                margin: 0;
                padding: 30px;
            }
        }

        /* On screens that are 600px wide or less */
        @media screen and (max-width: 600px) {
            .container {
                padding: 0 20px;
            }

            .container-form input {
                padding: 14px;
                margin: 0;
                width: 100%;
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
                            <a onclick="dropDownNav()" class="dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></a>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php">Domestic Shipping</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="about.html">About</a></li>
                    <li class="navlistitem"><a href="contact.php" class="active">Contact</a></li>
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
        <div class="subheader-top" style="width: 225px;">Contact Us</div>
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
                        <a href="quote-is-1.php" style="">International Shipping</a>
                        <a href="quote-ec.php">Domestic Shipping</a>
                        <a href="quote-ss.php">Secure Storage</a>
                    </div>
                </a>
                <a href="about.html">About</a>
                <a href="contact.php" class="active">Contact</a>
                <a href="/package-tracker/" target="_blank">Track</a>
            </div>
        </div>


    <!-- Outer Container that contains body content and pads it 300px left and right to <body> -->
    <div class="container">

        <!-- Inner Container -->
        <div class="body-content" style="padding-top: 30px">

            <!-- Container for Contact form  -->
            <div class="w3-card-4">

                <!-- Contact Form -->
                <form class="container-form" style="padding-bottom: 10px" method="post" action="contact-form.php">
                    <h3 class="h3-contactform">Questions? Problems? Please tell us about it.</h3>
                    <div class="formtitle">We'd love to hear from you</div>

                        <fieldset class="nofieldset">
                            <legend class="legend-middle"><span style="font-family: Roboto, serif">*</span>&nbsp;&nbsp;Indicates required fields</legend>

                            <div class="row">
                                <!-- First Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter First Name">
                                        <input class="input100" type="text" name="firstname" required>
                                        <span class="focus-input100" data-placeholder="First Name  *"></span>
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Last Name">
                                        <input class="input100" type="text" name="lastname" required>
                                        <span class="focus-input100" data-placeholder="Last Name  *"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Title">
                                        <input class="input100" type="text" name="title" required>
                                        <span class="focus-input100" data-placeholder="Title  *"></span>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Email">
                                        <input class="input100" type="email" name="email" required>
                                        <span class="focus-input100" data-placeholder="Email  *"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Phone Number">
                                        <input class="input100" type="tel" name="phone" required>
                                        <span class="focus-input100" data-placeholder="Telephone  *"></span>
                                    </div>
                                </div>

                                <!-- Subject -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter a Subject">
                                        <input class="input100" type="text" name="subject" required>
                                        <span class="focus-input100" data-placeholder="Subject  *"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Text Area -->
                                <div class="col-xs-12 col-sm-12">
                                    <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "What's the problem?">
                                        <textarea class="input100" type="text" name="message" required></textarea>
                                        <span class="focus-input100" data-placeholder="Your Message"></span>
                                </div>
                            </div>
                    </fieldset>

                        <!-- Submit and Reset Button -->
                        <div class="w3-center">
                            <div class="w3-bar container-login100-form-btn">
                                <button type="submit" value="Submit" name="submit" class="w3-button w3-medium w3-green-continue">Submit</button>
                                <button type="reset" value="Reset" class="w3-button w3-red-cancel">Reset</button>
                            </div>
                        </div>
                </form>
            </div>

            <div>
                <!-- Contact Address -->
                <fieldset style="display: block; margin: 65px auto 30px;">
                    <legend>Drop by for a cup of coffee</legend>
                    <div>
                        <p class="w3-center" style="font: 1.12em Poppins-Regular, sans-serif; line-height: 1.5em">
                            <span style="font: italic 500 1.03em 'Quicksand Bold', serif; color: blue">Address</span><br>
                            No 3M, Microkatu, 70210<br>
                            Kuopio, Finland.<br><br>
                            <span style="font: italic 1.03em 'Quicksand Bold', serif; color: blue">Phone</span><br>
                            +358 9 42453389
                        </p>
                    </div>
                </fieldset>
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

    <!-- International Telephone Country Code -->
    <script src="js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
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

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

    <!-- footer -->
    <footer>
        <!-- Address and Phone number -->
        <p class="footeradd">
            3M, Microkatu, 70210 Kuopio, Finland, +358 9 42453389
        </p>

        <!-- Copyright -->
        <p class="footercopyrite">
            Copyright <i class="copyright far fa-copyright"></i> 2020 VLink Express Courier Ltd. All Rights Reserved.
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
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>