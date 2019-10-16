<?php
    session_start(); // Session starts here.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (International Shipping - Shipment Origin)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
    <link href="css/progressbar.css" type="text/css" rel="stylesheet">
    <link href="./css/misc.css" type="text/css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="./css/w3.css" type="text/css" rel="stylesheet">
    <link href="./css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="./css/vlink.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

        .container {
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/is-pic.jpg");

            /* Set a specific height */
            min-height: 440px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 260px;
        }

        .countries, .states, .cities {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 1.03em;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            #hi {
                margin: 40px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 50px;
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
                padding: 0 30px;
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
        <div class="subheader-h2" style="width: 360px;">Quote - International Shipping</div>
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
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 1 of 5)</span>
            </div>

            <h2 id="hi">Please tell us about your Shipment.</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span class="required">*</span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                <!-- International Shipping Quote form -->
                <form class="container-form" method="post" style="padding-bottom: 0" action="quote-is-2.php">
                    <!-- Shipment Origin -->
                    <fieldset style="margin: 0 0 20px; padding-bottom: 20px">
                        <legend>Shipment Origin</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name"> Full Name (or Company) <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. Bruce Wayne (or Wayne Enterprises)"
                                           name="name" id="name" type="text" required>
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contact_name"> Contact's Name <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. Alfred Pennyworth" name="contact_name" id="contact_name" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender">Gender <span class="required">*</span></label>
                                    <select class="choice" name="gender" id="gender" required>
                                        <option value="0" selected="selected">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title">Title</label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. Mr, Mrs, Cpt, Dr. etc." name="title" id="title" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone">Telephone <span class="required">*</span></label>
                                    <input class="w3-light-gray" name="phone" id="phone" type="tel" required>
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. email@mail.com" name="email" id="email" type="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country <span class="required">*</span></label>
                                    <select name="country" class="choice countries" id="countryId" type="select" required>
                                        <option value="0" selected="selected">Select Country</option>
                                    </select>
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State <span class="required">*</span></label>
                                    <select name="state" style="float: right" class="choice states" id="stateId" type="select" required>
                                        <option value="0" selected="selected">Select State</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City <span class="required">*</span></label>
                                    <select name="city" class="choice cities" id="cityId" type="select" required>
                                        <option value="0" selected="selected">Select City</option>
                                    </select>
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zip_code">Zip Code <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="float: right" placeholder="e.g. 123456" name="zip_code" id="zip_code" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add">Street Address <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. 3M, Microkatu, 70210 Kuopio" name="street_add" id="street_add" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add2">Street Address 2</label>
                                    <input class="w3-light-gray" placeholder="Apartment, suite, floor, building, unit etc."
                                           name="street_add2" id="street_add2" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="department">Department, c/o, etc.</label>
                                    <input class="w3-light-gray" placeholder="e.g. Sales (or c/o Clark Kent)" name="department" id="department" type="text">
                                </div>

                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="residential_add">Is this a residential address? <span class="required">*</span></label>
                                    <select style="float: right" name="residential_add" id="residential_add" class="choice" required>
                                        <option value="0" selected="selected">Select an answer</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Shipping Option -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="shipping_options">Shipping Service Option <span class="required">*</span></label>
                                    <select class="choice" name="shipping_options" id="shipping_options" required>
                                        <option value="0" selected="selected">Select Shipping Option</option>
                                        <option value="VLink Standard">VLink Standard</option>
                                        <option value="VLink Worldwide Express">VLink Worldwide Express</option>
                                        <option value="VLink Worldwide Express Plus">VLink Worldwide Express Plus</option>
                                        <option value="VLink Worldwide TimeSaver">VLink Worldwide TimeSaver</option>
                                    </select>
                                </div>

                                <!-- Shipment Updates? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="status_updates">Should we send you shipment updates? <span class="required">*</span></label>
                                    <select  style="float: right" name="status_updates" id="status_updates" class="choice">
                                        <option value="0" selected="selected">Select an answer </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <!-- Continue and Cancel Button -->
                        <div class="w3-center">
                            <div class="w3-bar">
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

    <!-- International Telephone Country Code -->
    <script src="js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "js/utils.js?1562189064761"
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

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>
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
                    <i class="footer-FB fab fa-facebook-f"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/vlinkexpresscourier">
                    <i class="footer-INSTA fab fa-instagram"></i>
                </a>
                <a target="_blank" href="https://www.twitter.com/vlinkexpresscourier">
                    <i class="footer-INSTA fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/vlinkexpresscourier">
                    <i class="footer-LI fab fa-linkedin"></i>
                </a>
            </p>
        </div>

        <!-- Footer Links -->
        <div>
            <ul class="footerlinks">
                <li style="padding-left: 0" class="footerlinkitem"><a href="privacy.html">Privacy Policy</a></li>
                <li class="footerlinkitem"><a href="terms.html">Terms</a></li>
                <li class="footerlinkitem"><a href="about.html">About</a></li>
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>
