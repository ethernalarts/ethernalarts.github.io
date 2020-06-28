<?php
    //start the session
    session_start();

    $package_type_3 = "";
    $delivery_options_3 = "";
    $package_type_4 = "";
    $delivery_options_4 = "";

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables

    //1st package details
    if(isset($_POST['package_type']))
        $_SESSION['package_type']=$_POST['package_type'];
    if(isset($_POST['delivery_options']))
        $_SESSION['delivery_options']=$_POST['delivery_options'];
    if(isset($_POST['other']))
        $_SESSION['other']=$_POST['other'];
    if(isset($_POST['worth']))
        $_SESSION['worth']=$_POST['worth'];
    if(isset($_POST['weight']))
        $_SESSION['weight']=$_POST['weight'];
    if(isset($_POST['length']))
        $_SESSION['length']=$_POST['length'];
    if(isset($_POST['width']))
        $_SESSION['width']=$_POST['width'];
    if(isset($_POST['height']))
        $_SESSION['height']=$_POST['height'];
    if(isset($_POST['color']))
        $_SESSION['color']=$_POST['color'];
    if(isset($_POST['texture']))
        $_SESSION['texture']=$_POST['texture'];
    if(isset($_POST['package_description']))
        $_SESSION['package_description']=$_POST['package_description'];


    //2nd package details
    if(isset($_POST['package_type_2']))
        $_SESSION['package_type_2']=$_POST['package_type_2'];
    if(isset($_POST['delivery_options_2']))
        $_SESSION['delivery_options_2']=$_POST['delivery_options_2'];
    if(isset($_POST['other_2']))
        $_SESSION['other_2']=$_POST['other_2'];
    if(isset($_POST['worth_2']))
        $_SESSION['worth_2']=$_POST['worth_2'];
    if(isset($_POST['weight_2']))
        $_SESSION['weight_2']=$_POST['weight_2'];
    if(isset($_POST['length_2']))
        $_SESSION['length_2']=$_POST['length_2'];
    if(isset($_POST['width_2']))
        $_SESSION['width_2']=$_POST['width_2'];
    if(isset($_POST['height_2']))
        $_SESSION['height_2']=$_POST['height_2'];
    if(isset($_POST['color_2']))
        $_SESSION['color_2']=$_POST['color_2'];
    if(isset($_POST['texture_2']))
        $_SESSION['texture_2']=$_POST['texture_2'];
    if(isset($_POST['package_description_2']))
        $_SESSION['package_description_2']=$_POST['package_description_2'];


    //3rd package details
    if(isset($_POST['package_type_3'])) {
        $_SESSION['package_type_3']=$_POST['package_type_3'];
    } else {
        $package_type_3 = "";
    }
    if(isset($_POST['delivery_options_3'])) {
        $_SESSION['delivery_options_3']=$_POST['delivery_options_3'];
    } else {
        $delivery_options_3 = "";
    }
    if(isset($_POST['other_3']))
        $_SESSION['other_3']=$_POST['other_3'];
    if(isset($_POST['worth_3']))
        $_SESSION['worth_3']=$_POST['worth_3'];
    if(isset($_POST['weight_3']))
        $_SESSION['weight_3']=$_POST['weight_3'];
    if(isset($_POST['length_3']))
        $_SESSION['length_3']=$_POST['length_3'];
    if(isset($_POST['width_3']))
        $_SESSION['width_3']=$_POST['width_3'];
    if(isset($_POST['height_3']))
        $_SESSION['height_3']=$_POST['height_3'];
    if(isset($_POST['color_3']))
        $_SESSION['color_3']=$_POST['color_3'];
    if(isset($_POST['texture_3']))
        $_SESSION['texture_3']=$_POST['texture_3'];
    if(isset($_POST['package_description_3']))
        $_SESSION['package_description_3']=$_POST['package_description_3'];


    //4th package details
    if(isset($_POST['package_type_4']))
        $_SESSION['package_type_4']=$_POST['package_type_4'];

    if(isset($_POST['delivery_options_4'])) {
        $_SESSION['delivery_options_4']=$_POST['delivery_options_4'];
    } else {
        $delivery_options_4 = "";
    }

    if(isset($_POST['other_4']))
        $_SESSION['other_4']=$_POST['other_4'];
    if(isset($_POST['worth_4']))
        $_SESSION['worth_4']=$_POST['worth_4'];
    if(isset($_POST['weight_4']))
        $_SESSION['weight_4']=$_POST['weight_4'];
    if(isset($_POST['length_4']))
        $_SESSION['length_4']=$_POST['length_4'];
    if(isset($_POST['width_4']))
        $_SESSION['width_4']=$_POST['width_4'];
    if(isset($_POST['height_4']))
        $_SESSION['height_4']=$_POST['height_4'];
    if(isset($_POST['color_4']))
        $_SESSION['color_4']=$_POST['color_4'];
    if(isset($_POST['texture_4']))
        $_SESSION['texture_4']=$_POST['texture_4'];
    if(isset($_POST['package_description_4']))
        $_SESSION['package_description_4']=$_POST['package_description_4'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Domestic Shipping - Package Destination)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">

    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="./css/w3.css" type="text/css" rel="stylesheet">
    <link href="./css/mobile-menu-top.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/regform2.css" rel="stylesheet" type="text/css">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/statecity.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <div class="thetop"></div>

    <style>
        * {
            box-sizing: border-box;
        }

        .body {
            width: 100%;
            max-width: 1440px;
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 170px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ec-pic3.jpg");

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

        input:disabled {
            padding-left: 0;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            .container {
                padding: 0 40px;
            }

            .subheader-h2 {
                margin-top: 270px;
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
                padding: 0 30px;
            }

            .subheader-h2 {
                margin-top: 270px;
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
        <div class="subheader-top" style="width: 130px">Quote</div>

        <!-- Subheader. Just below the navbar -->
        <div class="subheader-bottom" style="width: 310px">Domestic Shipping</div>
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
                        <a href="quote-ss-1.php">Secure Storage</a>
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
                <span class="step finish"></span>
                <span class="step active"></span>
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 4 of 5)</span>
            </div>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-4">

                <!-- Package Destination -->
                    <form class="container-form" method="post" action="quote-ec-review-skip.php" style="padding-bottom: 0">
                        <h3 class="h3-contactform">Where is it going?</h3>
                        <div class="formtitle">Package Destination</div>
                        <fieldset class="nofieldset" style="margin-bottom: 30px">
                            <legend class="legend-middle"><span style="font-family: Roboto, serif">*</span>&nbsp;&nbsp;Indicates required fields</legend>
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Name">
                                            <label for="name_ec_dest">Full Name (or Company) <span class="required">*</span></label>
                                            <input class="input100" type="text" name="name_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Contact's Name -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Contact's Name">
                                            <label for="contactname_ec_dest">Contact's Name <span class="required">*</span></label>
                                            <input class="input100" type="text" name="contactname_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Gender -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-39 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="gender_ec_dest">Gender <span class="required">*</span></label>
                                                <select name="gender_ec_dest" required>
                                                    <option disabled="disabled" selected="selected"></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Title">
                                            <label for="title_ec_dest">Title <span class="required">*</span></label>
                                            <input class="input100" type="text" name="title_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Telephone -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Telephone Number">
                                            <label for="phone_ec_dest">Telephone <span class="required">*</span></label>
                                            <input class="input100" type="tel" name="phone_ec_dest" id="phone_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Email Address">
                                            <label for="email_ec_dest">Email <span class="required">*</span></label>
                                            <input class="input100" type="email" name="email_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Country -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" style="color: #ebebeb">
                                            <label for="countryId">Country </label>
                                            <input type="hidden" name="country_ec_dest" id="countryId" value="FI"/>
                                            <input disabled placeholder="Finland" id="country_ec_dest"/>
                                        </div>
                                    </div>

                                    <!-- State -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-47 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="stateId">State <span class="required">*</span></label>
                                                <select class="states order-alpha" name="state_ec_dest" id="stateId" type="select" required>
                                                    <option disabled="disabled" selected="selected"></option>
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
                                                <select class="cities order-alpha" name="city_ec_dest" id="cityId" type="select" required>
                                                    <option disabled="disabled" selected="selected"></option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zip Code -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Zip Code">
                                            <label for="zipcode_ec_dest">Zip Code <span class="required">*</span></label>
                                            <input class="input100" type="number" name="zipcode_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Street Address -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Street">
                                            <label for="address_ec_dest">Street Address <span class="required">*</span></label>
                                            <input class="input100" type="text" name="address_ec_dest" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Street Address 2 -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <label for="apt_ec_dest">Apartment, Suite, Building, Unit etc.</label>
                                            <input class="input100" type="text" name="apt_ec_dest">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>

                                    <!-- Department -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "">
                                            <label for="dept_ec_dest">Department</label>
                                            <input class="input100" type="text" name="dept_ec_dest">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Residential Address? -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-51 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="resAdd_ec_dest">Is this a residential address? <span class="required">*</span></label>
                                                <select name="resAdd_ec_dest" type="select" required>
                                                    <option disabled="disabled" selected="selected"></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Return Notification -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group m-t-51 m-b-35">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="notify_dest">Should we send recipient shipment status? <span class="required">*</span></label>
                                                <select name="notify_dest" type="select" required>
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

    <!-- International Telephone Country Code -->
    <script src="js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone_ec_dest");
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

    <!-- Scroll back to the top -->
    <div class="scrolltop">
        <div class="scroll icon">
            <i class="scroll-icon fas fa-3x fa-angle-up"></i>
        </div>
    </div>

    <script src="js/main.js"></script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

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
                <li style="padding-right: 0" class="footerlinkitem"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </footer>
</html>