<?php
    //start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name_reAdd']))
        $_SESSION['name_reAdd']=$_POST['name_reAdd'];
    if(isset($_POST['contact_name_reAdd']))
        $_SESSION['contact_name_reAdd']=$_POST['contact_name_reAdd'];
    if(isset($_POST['gender_reAdd']))
        $_SESSION['gender_reAdd']=$_POST['gender_reAdd'];
    if(isset($_POST['title_reAdd']))
        $_SESSION['title_reAdd']=$_POST['title_reAdd'];
    if(isset($_POST['country_reAdd']))
        $_SESSION['country_reAdd']=$_POST['country_reAdd'];
    if(isset($_POST['state_reAdd']))
        $_SESSION['state_reAdd']=$_POST['state_reAdd'];
    if(isset($_POST['city_reAdd']))
        $_SESSION['city_reAdd']=$_POST['city_reAdd'];
    if(isset($_POST['zip_code_reAdd']))
        $_SESSION['zip_code_reAdd']=$_POST['zip_code_reAdd'];
    if(isset($_POST['street_add_reAdd']))
        $_SESSION['street_add_reAdd']=$_POST['street_add_reAdd'];
    if(isset($_POST['street_add2_reAdd']))
        $_SESSION['street_add2_reAdd']=$_POST['street_add2_reAdd'];
    if(isset($_POST['department_reAdd']))
        $_SESSION['department_reAdd']=$_POST['department_reAdd'];
    if(isset($_POST['phone_reAdd']))
        $_SESSION['phone_reAdd']=$_POST['phone_reAdd'];
    if(isset($_POST['email_reAdd']))
        $_SESSION['email_reAdd']=$_POST['email_reAdd'];
    if(isset($_POST['notify']))
        $_SESSION['notify']=$_POST['notify'];
    if(isset($_POST['residential_reAdd']))
        $_SESSION['residential_reAdd']=$_POST['residential_reAdd'];


    // Sanitizing email field to remove unwanted characters.
    $_POST['email_reAdd'] = filter_var($_POST['email_reAdd'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_reAdd'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-is-2.php");     //redirecting to second page
    }
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
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/countrystatecity.js"></script>
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
            background-image: url("images/is-pic3.jpg");

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

        .countries, .states {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 0.95em;
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {
            .container {
                padding: 0 50px;
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
                padding: 0 30px;
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
                                <a href="quote-is-1.php" class="active">International Shipping</a>
                                <a href="quote-ec.php">Domestic Shipping</a>
                                <a href="quote-ss.php">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="#">About</a></li>
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
                <span class="step finish"></span>
                <span class="step finish"></span>
                <span class="step active"></span>
                <span class="step"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 3 of 5)</span>
            </div>

            <h2 id="hi">Where is it going?</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span class="required">*</span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for International Shipping Quote form  -->
            <div class="w3-card-4">

                <!-- Shipment Destination -->
                <form class="container-form" method="post" action="quote-is-4.php" style="padding-bottom: 0">

                    <fieldset style="margin: 0 0 20px; padding-bottom: 20px">
                        <legend>Shipment Destination</legend>
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="name_dest"> Full Name (or Company) <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. Clark Kent (or Daily Planet)" name="name_dest" id="name_dest" type="text" required>
                                </div>

                                <!-- Contact's Name -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="contact_name_dest"> Contact's Name <span class="required">*</span></label>
                                    <input class="w3-light-gray"  placeholder="e.g. Lois Lane" name="contact_name_dest" id="contact_name_dest" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gender_dest">Gender <span class="required">*</span></label>
                                    <select class="choice" name="gender_dest" id="gender_dest" required>
                                        <option value="0" selected="selected">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <!-- Title -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="title_dest">Title</label>
                                    <input class="w3-light-gray"  placeholder="e.g. Mr, Mrs, Cpt, Dr. etc."
                                           name="title_dest" id="title_dest" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telephone -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="phone_dest">Telephone <span class="required">*</span></label>
                                    <input class="w3-light-gray" name="phone_dest" id="phone_dest" type="tel" required>
                                </div>

                                <!-- Email -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="email_dest">Email <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. email@mail.com" name="email_dest" id="email_dest" type="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Country -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="countryId">Country <span class="required">*</span></label>
                                    <select name="country_dest" class="choice countries" id="countryId" type="select" required>
                                        <option value="0" selected="selected">Select Country</option>
                                    </select>
                                </div>

                                <!-- State -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="stateId">State <span class="required">*</span></label>
                                    <select name="state_dest"  class="choice states" id="stateId" type="select" required>
                                        <option value="0" selected="selected">Select State</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- City -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="cityId">City <span class="required">*</span></label>
                                    <select name="city_dest" class="choice cities" id="cityId" type="select" required>
                                        <option value="0" selected="selected">Select City</option>
                                    </select>
                                </div>

                                <!-- Zip Code -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="zip_code_dest">Zip Code <span class="required">*</span></label>
                                    <input class="w3-light-gray" style="padding: 0.84em 13px" placeholder="e.g. 123456" name="zip_code_dest" id="zip_code_dest" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address -->
                                <div class="col-xs-12 col-sm-12">
                                    <label for="street_add_dest">Street Address <span class="required">*</span></label>
                                    <input class="w3-light-gray" placeholder="e.g. 3M, Microkatu, 70210 Kuopio" name="street_add_dest" id="street_add_dest" type="text" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Street Address 2 -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="street_add2_destreAdd">Street Address 2</label>
                                    <input class="w3-light-gray" placeholder="Apartment, suite, floor, building, unit etc."
                                           name="street_add2_dest" id="street_add2_dest" type="text">
                                </div>

                                <!-- Department -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="department_dest">Department, c/o, etc.</label>
                                    <input class="w3-light-gray"  placeholder="e.g. Editorial (or c/o Martha Lane)" name="department_dest" id="department_dest" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Residential Address? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="residential_add_dest">Is this a residential address? <span class="required">*</span></label>
                                    <select  name="residential_add_dest" id="residential_add_dest" class="choice" required>
                                        <option value="0" selected="selected">Select an answer</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <!-- Email updates to recipient on shipment status? -->
                                <div class="col-xs-12 col-sm-6">
                                    <label for="notify_dest">Should we send recipient shipment status? <span class="required">*</span></label>
                                    <select name="notify_dest" id="notify_dest" class="choice">
                                        <option value="0" selected="selected">Select an answer</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
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
