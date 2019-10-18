<?php
    //start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name']))
        $_SESSION['name']=$_POST['name'];
    if(isset($_POST['contact_name']))
        $_SESSION['contact_name']=$_POST['contact_name'];
    if(isset($_POST['gender']))
        $_SESSION['gender']=$_POST['gender'];
    if(isset($_POST['title']))
        $_SESSION['title']=$_POST['title'];
    if(isset($_POST['phone']))
        $_SESSION['phone']=$_POST['phone'];
    if(isset($_POST['country']))
        $_SESSION['country']=$_POST['country'];
    if(isset($_POST['state']))
        $_SESSION['state']=$_POST['state'];
    if(isset($_POST['city']))
        $_SESSION['city']=$_POST['city'];
    if(isset($_POST['zip_code']))
        $_SESSION['zip_code']=$_POST['zip_code'];
    if(isset($_POST['street_add']))
        $_SESSION['street_add']=$_POST['street_add'];
    if(isset($_POST['street_add2']))
        $_SESSION['street_add2']=$_POST['street_add2'];
    if(isset($_POST['shipping_options']))
        $_SESSION['shipping_options']=$_POST['shipping_options'];
    if(isset($_POST['department']))
        $_SESSION['department']=$_POST['department'];
    if(isset($_POST['email']))
        $_SESSION['email']=$_POST['email'];
    if(isset($_POST['residential_add']))
        $_SESSION['residential_add']=$_POST['residential_add'];
    if(isset($_POST['status_updates']))
        $_SESSION['status_updates']=$_POST['status_updates'];

    // Sanitizing email field to remove unwanted characters.
    $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-is-1.php");//redirecting to first page
    }
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (International Shipping - Return Address)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/is-pic2.jpg");

            /* Set a specific height */
            min-height: 440px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 255px;
        }

        .countries, .states {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 0.95em;
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {

            .container {
                padding: 0 30px;
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
                font-size: 0.9em;
                margin-top: 30px;
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

                <!-- Toggle (use shipment's origin address) -->
                <form method="post" style="text-align: center" action="quote-is-3-skip.php" >
                    <!-- Notify of Return? -->
                    <input type="hidden" name="notify" value="Yes"/>

                    <button type="submit" class="skip w3-btn">
                        Skip. Use Shipment's Origin's Details
                    </button>
                </form>

                    <!-- Return Address Form -->
                    <form class="container-form" method="post" action="quote-is-3.php" style="padding-bottom: 0">
                        <fieldset style="margin: 0 0 40px; padding-bottom: 20px">
                            <legend>Return Address</legend>
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="name_reAdd"> Full Name (or Company) <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. Bruce Wayne (or Wayne Enterprises)"
                                               name="name_reAdd" id="name_reAdd" type="text" required>
                                    </div>

                                    <!-- Contact's Name -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="contact_name_reAdd"> Contact's Name <span class="required">*</span></label>
                                        <input class="w3-light-gray"  placeholder="e.g. Alfred Pennyworth" name="contact_name_reAdd" id="contact_name_reAdd" type="text" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Gender -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="gender_reAdd">Gender <span class="required">*</span></label>
                                        <select class="choice" name="gender_reAdd" id="gender_reAdd" required>
                                            <option value="0" selected="selected">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <!-- Title -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="title_reAdd">Title</label>
                                        <input class="w3-light-gray" placeholder="e.g. Mr, Mrs, Cpt, Dr. etc." name="title_reAdd" id="title_reAdd" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Telephone -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="phone_reAdd">Telephone <span class="required">*</span></label>
                                        <input class="w3-light-gray" name="phone_reAdd" id="phone_reAdd" type="tel" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="email_reAdd">Email <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. email@mail.com" name="email_reAdd" id="email_reAdd" type="email" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Country -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="countryId">Country <span class="required">*</span></label>
                                        <select name="country_reAdd" class="choice countries" id="countryId" type="select" required>
                                            <option value="0" selected="selected">Select Country</option>
                                        </select>
                                    </div>

                                    <!-- State -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="stateId">State <span class="required">*</span></label>
                                        <select name="state_reAdd" class="choice states" id="stateId" type="select" required>
                                            <option value="0" selected="selected">Select State</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- City -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="cityId">City <span class="required">*</span></label>
                                        <select name="city_reAdd" class="choice cities" id="cityId" type="select" required>
                                            <option value="0" selected="selected">Select City</option>
                                        </select>
                                    </div>

                                    <!-- Zip Code -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="zip_code_reAdd">Zip Code <span class="required">*</span></label>
                                        <input class="w3-light-gray" style="padding: 0.84em 13px" placeholder="e.g. 123456" name="zip_code_reAdd" id="zip_code_reAdd" type="number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Street Address -->
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="street_add_reAdd">Street Address <span class="required">*</span></label>
                                        <input class="w3-light-gray" placeholder="e.g. 3M, Microkatu, 70210 Kuopio" name="street_add_reAdd" id="street_add_reAdd" type="text" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Street Address 2 -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="street_add2_reAdd">Street Address 2</label>
                                        <input class="w3-light-gray" placeholder="Apartment, suite, floor, building, unit etc."
                                               name="street_add2_reAdd" id="street_add2_reAdd" type="text">
                                    </div>

                                    <!-- Department -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="department_reAdd">Department, c/o, etc.</label>
                                        <input class="w3-light-gray" placeholder="e.g. Sales (or c/o Clark Kent)" name="department_reAdd" id="department_reAdd" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Residential Address? -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="residential_reAdd">Is this a residential address? <span class="required">*</span></label>
                                        <select  name="residential_reAdd" id="residential_reAdd" class="choice" required>
                                            <option value="0" selected="selected">Select an answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>

                                    <!-- Notify of Return? -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="notify">Should we notify this person of return? <span class="required">*</span></label>
                                        <select name="notify" id="notify" class="choice">
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
    <script>
        var input = document.querySelector("#phone_reAdd");
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

    <!-- toggle (return address fieldset) -->
    <script>
        var btn = document.querySelector('showReturn');
        btn.addEventListener('click', showReturn);

        function showReturn() {
            var e = document.getElementById('returnAdd');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');
        }
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
