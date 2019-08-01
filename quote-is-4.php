<?php
    session_start();
    // Checking third page values for empty,If it finds any blank field then redirected to third page.
    if (isset($_POST['name_dest'])){
         if (empty($_POST['name_dest'])
         || empty($_POST['contact_name_dest'])
         || empty($_POST['country_dest'])
         || empty($_POST['state_dest'])
         || empty($_POST['city_dest'])
         || empty($_POST['post_code_dest'])
         || empty($_POST['street_address_dest'])
         || empty($_POST['apartment_suite_dest'])
         || empty($_POST['department_c/o_dest'])
         || empty($_POST['phone_dest'])
         || empty($_POST['email_dest'])){

     // Setting error message
     $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it";
     header("location: quote-is-3.php"); // Redirecting to third page
     } else {

     // Sanitizing email field to remove unwanted characters.
     $_POST['email'] = filter_var($_POST['email_dest'], FILTER_SANITIZE_EMAIL);

     // After sanitization Validation is performed.
     if (filter_var($_POST['email_dest'], FILTER_VALIDATE_EMAIL)){

     // Validating Contact Field using regex.
     if (!preg_match("/^[0-9]{11}$/", $_POST['phone_dest'])){
       $_SESSION['error'] = "11 digit contact number is required.";
       header("location: quote-is-3.php");
     } else {
        // Fetching all values posted from third page and storing it in variable.
         foreach ($_POST as $key => $value) {
           $_SESSION['post'][$key] = $value;
         }
       }
     } else {
       $_SESSION['error'] = "Invalid Email Address";
       header("location: quote-is-3.php");//redirecting to third page
     }
     }
    } else {
       if (empty($_SESSION['error_page4'])) {
         header("location: quote-is-3.php");//redirecting to third page
       }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Int'l Shipping)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/vlink.css" rel="stylesheet" type="text/css">

    <script defer src="fontawesome-free-5.7.2-web/js/all.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/w3.js"></script>
    <script src="js/jquery.min.js"></script>

    <div class="thetop"></div>

    <style>
        .body {
            width: 100%;
            max-width: 1440px;
            height: auto;
            margin: 0;
            background-image: none;
        }

        #oversizedPackage {
        }

        /* On screens that are 992px wide or less, go from three columns to two columns */
        @media screen and (max-width: 1200px) {

            .container {
                padding: 0 90px !important;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 750px) {

            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.3em Verdana, sans-serif;
            }

            .container {
                padding: 0 50px !important;
            }

            .container-form input {
                padding: 10px;
                margin: 0 0 33px;
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
                            <button onclick="dropDownNav()" class="dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php" class="active">International Shipping</a>
                                <a href="quote-ec.html">Express Courier</a>
                                <a href="quote-ss.html">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="#">About</a></li>
                    <li class="navlistitem"><a href="contact.html">Contact</a></li>
                    <li class="navlistitem"><a href="track.html">Track</a></li>
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
        <div class="subheader-h2" style="width: 380px;">Quote - International Shipping</div>
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
                        <a href="quote-is-1.php" style="padding-top: 0" class="active">International Shipping</a>
                        <a href="quote-ec.html">Express Courier</a>
                        <a href="quote-ss.html">Secure Storage</a>
                    </div>
                </a>
                <a href="#">About</a>
                <a href="contact.html">Contact</a>
                <a href="track.html">Track</a>
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

            <h2 id="hi">Almost done. Package Description</h2>

            <h3 id="required"><code class="w3-code">* Indicates required fields</code></h3>

            <!-- Container -->
            <div class="w3-card-4">

                <!-- Shipment Dimensions -->
                <form class="container-form" style="padding-bottom: 0">
                    <fieldset style="margin: 0">
                        <legend>Shipment Details:</legend>
                            <!-- Weight -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Weight (lbs):  *"
                                name="weight" type="number" required>
                            </label>

                            <!-- Length -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right" placeholder="Length (in):  *"
                                name="length" type="number" required>
                            </label>

                            <!-- Width -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Width (in):  *"
                                name="width" type="number" required>
                            </label>

                            <!-- Height -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" style="float: right" placeholder="Height (in):  *"
                                name="height" type="number" required>
                            </label>

                            <!-- Shipment's worth -->
                            <label>
                                <input class="w3-input w3-border-0 w3-light-gray" placeholder="Declared Value (Shipment's worth) (USD): "
                                name="worth" type="number">
                            </label>

                            <!-- Package type -->
                                <label>
                                    <select style="float: right" name="package_type" class="w3-input w3-border-0 w3-light-gray">
                                        <option value="1" selected disabled>Package type  *</option>
                                        <option value="2">Luggage</option>
                                        <option value="3">Jewellery</option>
                                        <option value="4">Electronic</option>
                                        <option value="5">Document</option>
                                        <option value="6">Battery</option>
                                        <option value="7">Machine Parts</option>
                                        <option value="8">Other</option>
                                    </select>
                                </label>

                            <!-- Toggle (Oversize Shipment) -->
                            <div class="sliderWrapper" style="margin: 7px 0">
                                <span style="margin-left: 11px">Oversized Package (+$)</span>
                                <label class="switch">
                                    <input type="checkbox" onclick="toggle_visibility('oversizePackage')">
                                    <span class="slider"></span>
                                </label>
                            </div>


                            <!-- oversize Shipment options -->
                            <label id="oversizePackage" style="display: none; margin: 20px 0 0">
                                <select class="w3-input w3-border-0 w3-light-gray">
                                    <option value="1" selected disabled>Select a packaging option</option>
                                    <option value="2">Additional Handling</option>
                                </select>
                            </label>
                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar" style="margin: 40px 0 0">
                            <button value="Previous" class="w3-button w3-medium w3-black-previous">Previous</button>
                            <button value="Next" type="submit" class="w3-button w3-medium w3-green-continue">Next</button>
                            <button value="Reset" type="reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
                        </div>
                    </div>

                    <!-- Oversized Package toggle -->
                    <script type="text/javascript">
                        function toggle_visibility(oversizedPackage) {
                            var e = document.getElementById(oversizedPackage);
                            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');
                        }
                    </script>

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
</body>

<!-- footer   -->
<footer>
    <div>
        Copyright <i class="copyright far fa-copyright"></i> 2019 V-Link Express Courier. All Rights Reserved.
    </div>
</footer>
</html>
