<?php
    //let's start the session
    session_start();

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
    if(isset($_POST['package_type_3']))
        $_SESSION['package_type_3']=$_POST['package_type_3'];
    if(isset($_POST['delivery_options_3']))
        $_SESSION['delivery_options_3']=$_POST['delivery_options_3'];
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
    if(isset($_POST['delivery_options_4']))
        $_SESSION['delivery_options_4']=$_POST['delivery_options_4'];
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

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" type="text/css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" type="text/css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
            margin: 0;
            background-image: none;
        }

        .container {
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ec-pic3.jpg");

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

            <h2 id="hi">Where is it going?</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span class="required">*</span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                <!-- Package Destination -->
                <form class="container-form" method="post" action="quote-ec-review-skip.php" style="padding-bottom: 0">

                    <fieldset id="returnAdd" style="margin: 0 0 30px; padding-bottom: 30px">
                        <legend>Package Destination</legend>
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="name_ec_dest"> Full Name (or Company) <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. Bruce Wayne (or Wayne Enterprises)"
                                               name="name_ec_dest" id="name_ec_dest" type="text" required>
                                    </div>

                                    <!-- Contact's Name -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="contactname_ec_dest"> Contact's Name <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. Alfred Pennyworth"
                                               name="contactname_ec_dest" id="contactname_ec_dest" type="text" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Gender -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="gender_ec_dest">Gender <span class="required">*</span></label>
                                        <select class="choice" name="gender_ec_dest" id="gender_ec_dest" required>
                                            <option value="0" selected="selected">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <!-- Title -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="title_ec_dest">Title</label>
                                        <input class="w3-light-gray" placeholder="e.g. Mr, Mrs, Cpt, Dr. etc." name="title_ec_dest" id="title_ec_dest" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Telephone -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="phone_ec_dest">Telephone <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="phone_ec_dest" id="phone_ec_dest" type="tel" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="email_ec_dest">Email <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. email@mail.com" name="email_ec_dest" id="email_ec_dest" type="email" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Country -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="countryId">Country</label>
                                        <input name="country_ec_dest" class="countries" value="Finland" disabled>
                                        <input type="hidden" name="country_ec_dest" id="countryId" value="FI"/>
                                    </div>

                                    <!-- State -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="stateId">State <span class="required">*</span></label>
                                        <select name="state_ec_dest" class="choice states order-alpha" id="stateId" type="select" required>
                                            <option value="0" selected="selected">Select State</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- City -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="cityId">City <span class="required">*</span></label>
                                        <select name="city_ec_dest" class="choice cities order-alpha" id="cityId" type="select" required>
                                            <option value="0" selected="selected">Select City</option>
                                        </select>
                                    </div>

                                    <!-- Zip Code -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="zipcode_ec_dest">Zip Code <span class="required">*</span></label>
                                        <input class="w3-light-gray" style="padding: 0.84em 13px" placeholder="e.g. 123456" name="zipcode_ec_dest" id="zipcode_ec_dest" type="number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Street Address -->
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="address_ec_dest">Street Address <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. 3M, Microkatu, 70210 Kuopio" name="address_ec_dest" id="address_ec_dest" type="text" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Street Address 2 -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="apt_ec_dest">Street Address 2</label>
                                        <input class="w3-light-gray" placeholder="Apartment, suite, floor, building, unit etc."
                                               name="apt_ec_dest" id="apt_ec_dest" type="text">
                                    </div>

                                    <!-- Department -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="dept_ec_dest">Department, c/o, etc.</label>
                                        <input class="w3-light-gray" placeholder="e.g. Sales (or c/o Clark Kent)" name="dept_ec_dest" id="dept_ec_dest" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Residential Address? -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="resAdd_ec_dest">Is this a residential address? <span class="required">*</span></label>
                                        <select name="resAdd_ec_dest" id="resAdd_ec_dest" class="choice" required>
                                            <option value="0" selected="selected">Select an answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>

                                    <!-- Package Updates? -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="notify_dest">Should we send recipient package status? <span class="required">*</span></label>
                                        <select  name="notify_dest" id="notify_dest" class="choice">
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
