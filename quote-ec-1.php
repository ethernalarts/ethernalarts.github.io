<?php
    //let's start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name_ec']))
        $_SESSION['name_ec']=$_POST['name_ec'];
    if(isset($_POST['contactname_ec']))
        $_SESSION['contactname_ec']=$_POST['contactname_ec'];
    if(isset($_POST['gender_ec']))
        $_SESSION['gender_ec']=$_POST['gender_ec'];
    if(isset($_POST['title_ec']))
        $_SESSION['title_ec']=$_POST['title_ec'];
    if(isset($_POST['phone_ec']))
        $_SESSION['phone_ec']=$_POST['phone_ec'];
    if(isset($_POST['email_ec']))
        $_SESSION['email_ec']=$_POST['email_ec'];
    if(isset($_POST['country_ec']))
        $_SESSION['country_ec']=$_POST['country_ec'];
    if(isset($_POST['state_ec']))
        $_SESSION['state_ec']=$_POST['state_ec'];
    if(isset($_POST['city_ec']))
        $_SESSION['city_ec']=$_POST['city_ec'];
    if(isset($_POST['zipcode_ec']))
        $_SESSION['zipcode_ec']=$_POST['zipcode_ec'];
    if(isset($_POST['address_ec']))
        $_SESSION['address_ec']=$_POST['address_ec'];
    if(isset($_POST['apt_ec']))
        $_SESSION['apt_ec']=$_POST['apt_ec'];
    if(isset($_POST['dept_ec']))
        $_SESSION['dept_ec']=$_POST['dept_ec'];
    if(isset($_POST['pickupdate']))
        $_SESSION['pickupdate']=$_POST['pickupdate'];
    if(isset($_POST['pickuptime']))
        $_SESSION['pickuptime']=$_POST['pickuptime'];
    if(isset($_POST['resAdd_ec']))
        $_SESSION['resAdd_ec']=$_POST['resAdd_ec'];
    if(isset($_POST['pkg_update_ec']))
        $_SESSION['pkg_update_ec']=$_POST['pkg_update_ec'];

    // Sanitizing email field to remove unwanted characters.
    $_POST['email_ec'] = filter_var($_POST['email_ec'], FILTER_SANITIZE_EMAIL);

    // Validate email.
//    if (filter_var($_POST['email_ec'], FILTER_VALIDATE_EMAIL)){
//
//    } else {
//        $_SESSION['error'] = "Invalid Email Address";
//        header("location: quote-ec.php");//redirecting to first page
//    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Domestic Shipping - Return Address)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="./css/w3.css" type="text/css" rel="stylesheet">
    <link href="./css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="./css/vlink.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/statecity.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ec-pic1.jpg");

            /* Set a specific height */
            min-height: 430px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 260px;
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {

            .container {
                padding: 0 40px;
            }

            .subheader-h2 {
                margin-top: 270px;
            }

            .container-form {
                margin: 0;
                padding: 30px;
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

            .skip {
                font-size: 1.1em;
                margin-top: 30px;
            }

            .container {
                padding: 0 20px;
            }

            .subheader-h2 {
                margin-top: 270px;
            }

            .container-form input, .container-form select {
                width: 100%;
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
                            <a onclick="dropDownNav()" class="active dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></a>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php" class="active">Domestic Shipping</a>
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
        <div class="subheader-h2" style="width: 315px;">Quote - Domestic Shipping</div>
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
                        <a href="quote-is-1.php" style="padding-top: 0">International Shipping</a>
                        <a href="quote-ec.php" class="active">Domestic Shipping</a>
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
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 2 of 5)</span>
            </div>

            <h2 id="hi">Return Address</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span class="required">*</span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>


            <!-- Container for Return Address  -->
            <div class="w3-card-4">

                <!-- Toggle (different return address) -->
                <form method="post" style="text-align: center" action="quote-ec-2-skip.php">
                    <!-- Return notification? -->
                    <input name="notify_ec" value="Yes" type="hidden"/>

                    <button type="submit" class="skip w3-btn">
                        Skip and use package origin's details
                    </button>
                </form>

                    <!-- Return Address Form -->
                    <form class="container-form" method="post" action="quote-ec-2.php" style="padding: 30px 40px 5px">
                        <fieldset id="returnAdd" style="margin: 0 0 40px; padding-bottom: 20px">
                            <legend>Return Address</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_ec_ra"> Full Name (or Company) <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. Bruce Wayne (or Wayne Enterprises)"
                                           name="name_ec_ra" id="name_ec_ra" type="text" required>
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contactname_ec_ra"> Contact's Name <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. Alfred Pennyworth"
                                           name="contactname_ec_ra" id="contactname_ec_ra" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_ec_ra">Gender <span class="required">*</span></label>
                                    <select class="choice" name="gender_ec_ra" id="gender_ec_ra" required>
                                        <option value="0" selected="selected">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_ec_ra">Title</label>
                                    <input class="w3-light-gray" placeholder="e.g. Mr, Mrs, Cpt, Dr. etc." name="title_ec_ra" id="title_ec_ra" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_ec_ra">Telephone <span class="required">*</span></label>
                                    <input class="w3-light-gray" name="phone_ec_ra" id="phone_ec_ra" type="tel" required>
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_ec">Email <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. email@mail.com" name="email_ec" id="email_ec" type="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country</label>
                                    <input name="country_ec_ra" class="countries" value="Finland" disabled>
                                    <input type="hidden" name="country_ec_ra" id="countryId" value="FI"/>
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State <span class="required">*</span></label>
                                    <select name="state_ec_ra" class="choice states order-alpha" id="stateId" type="select" required>
                                        <option value="0" selected="selected">Select State</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City <span class="required">*</span></label>
                                    <select name="city_ec_ra" class="choice cities order-alpha" id="cityId" type="select" required>
                                        <option value="0" selected="selected">Select City</option>
                                    </select>
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zipcode_ec_ra">Zip Code <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="padding: 0.84em 13px" placeholder="e.g. 123456" name="zipcode_ec_ra" id="zipcode_ec_ra" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="address_ec_ra">Street Address <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. 3M, Microkatu, 70210 Kuopio" name="address_ec_ra" id="address_ec_ra" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="apt_ec_ra">Street Address 2</label>
                                    <input class="w3-light-gray" placeholder="Apartment, suite, floor, building, unit etc."
                                           name="apt_ec_ra" id="apt_ec_ra" type="text">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="dept_ec_ra">Department, c/o, etc.</label>
                                    <input class="w3-light-gray" placeholder="e.g. Sales (or c/o Clark Kent)" name="dept_ec_ra" id="dept_ec_ra" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="resAdd_ec_ra">Is this a residential address? <span class="required">*</span></label>
                                    <select name="resAdd_ec_ra" id="resAdd_ec_ra" class="choice" required>
                                        <option value="0" selected="selected">Select an answer</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <!-- Return Notification -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="notify_ec">Should we notify this person of return? <span class="required">*</span></label>
                                    <select  name="notify_ec" id="notify_ec" class="choice">
                                        <option value="0" selected="selected">Select an answer</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

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

    <!-- International Telephone Country Code -->
    <script src="js/intlTelInput.js"></script>
    <script>var input = document.querySelector("#phone_ec_ra");
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
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>