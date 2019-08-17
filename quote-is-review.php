<?php
    //start the session
    session_start();

    //store posted values in the session variables
    $_SESSION['weight'] = $_POST['weight'];
    $_SESSION['length'] = $_POST['length'];
    $_SESSION['width'] = $_POST['width'];
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['worth'] = $_POST['worth'];
    $_SESSION['package_type'] = $_POST['package_type'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Express Courier - Review Details)</title>

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

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            width: 47%;
            border: none;
            border-bottom: 1px solid #2d2d2d;
        }

        .sub-legend {
            background-color: #72b7e1;
            color: white;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 40px !important;
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

            fieldset {
                font-size: 98%;
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
                            <button onclick="dropDownNav()" class="dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php" class="active">Express Courier</a>
                                <a href="quote-ss.php">Secure Storage</a>
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
        <div class="subheader-h2" style="width: 370px;">Quote - Express Courier</div>
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
                        <a href="quote-ss.php">Secure Storage</a>
                    </div>
                </a>
                <a href="#">About</a>
                <a href="contact.html">Contact</a>
                <a href="track.html">Track</a>
            </div>
        </div>


    <!-- Outer Container that contains body content and pads it 300px left and right to <body> -->
    <div class="container" style="padding: 0 200px">

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

            <h2 id="hi">Please review your details</h2>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                <!-- Get a Quote form -->
                <form class="container-form" method="post" style="padding-bottom: 0">
                    <!-- International Shipping Quote Form Preview -->
                    <fieldset style="padding-bottom: 50px; margin: 0 0 30px">
                        <legend>Shipment Origin</legend>
                            <!-- Shipment Origin Preview -->
                            <fieldset>
                                <legend class="sub-legend">Basic Details</legend>
                                    <!-- Full Name -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Full Name: <?php echo $_SESSION['name'] ?> ">
                                    </label>

                                    <!-- Contact Name -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Contact Name: <?php echo $_SESSION['contact_name'] ?> ">
                                    </label>

                                    <!-- Country -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country: <?php echo $_SESSION['country'] ?> ">
                                    </label>

                                    <!-- State -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="State: <?php echo $_SESSION['state'] ?> ">
                                    </label>

                                    <!-- City -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="City: <?php echo $_SESSION['city'] ?> ">
                                    </label>

                                    <!-- Zip Code -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Zip Code: <?php echo $_SESSION['zip_code'] ?> ">
                                    </label>

                                    <!-- Street Address -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Street Address: <?php echo $_SESSION['street_address'] ?> ">
                                    </label>

                                    <!-- Apartment -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Apartment: <?php echo $_SESSION['apartment_suite'] ?> ">
                                    </label>

                                    <!-- Department -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Department: <?php echo $_SESSION['department_c/o'] ?> ">
                                    </label>

                                    <!-- Email -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Email: <?php echo $_SESSION['email'] ?> ">
                                    </label>

                                    <!-- Phone Number -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Phone Number: <?php echo $_SESSION['phone'] ?> ">
                                    </label>

                                    <!-- Edit Button -->
                                    <label>
                                        <button style="float: left" onClick="javascript:history.go(-3)" class="w3-button w3-medium w3-green-continue">Edit</button>
                                    </label>
                            </fieldset>

                            <!-- Return Address Preview -->
                            <fieldset style="margin: 50px 0 0">
                                <legend class="sub-legend">Return Address</legend>
                                    <!-- Full Name -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Full Name: <?php echo $_SESSION['name_reAdd'] ?> ">
                                    </label>

                                    <!-- Contact Name -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Contact Name: <?php echo $_SESSION['contact_name_reAdd'] ?> ">
                                    </label>

                                    <!-- Country -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Country: <?php echo $_SESSION['country_reAdd'] ?> ">
                                    </label>

                                    <!-- State -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="State: <?php echo $_SESSION['state_reAdd'] ?> ">
                                    </label>

                                    <!-- City -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="City: <?php echo $_SESSION['city_reAdd'] ?> ">
                                    </label>

                                    <!-- Zip Code -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Zip Code: <?php echo $_SESSION['zip_code_reAdd'] ?> ">
                                    </label>

                                    <!-- Street Address -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Street Address: <?php echo $_SESSION['street_address_reAdd'] ?> ">
                                    </label>

                                    <!-- Apartment -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Apartment: <?php echo $_SESSION['apartment_suite_reAdd'] ?> ">
                                    </label>

                                    <!-- Department -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Department: <?php echo $_SESSION['department_c/o_reAdd'] ?> ">
                                    </label>

                                    <!-- Email -->
                                    <label>
                                        <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Email: <?php echo $_SESSION['email_reAdd'] ?> ">
                                    </label>

                                    <!-- Phone Number -->
                                    <label>
                                        <input disabled class="w3-input w3-border-0 w3-light-gray"
                                               placeholder="Phone Number: <?php echo $_SESSION['phone_reAdd'] ?> ">
                                    </label>

                                    <!-- Edit Button -->
                                    <label>
                                        <button style="float: left" onClick="javascript:history.go(-3)" class="w3-button w3-medium w3-green-continue">Edit</button>
                                    </label>
                            </fieldset>
                    </fieldset>

                    <!-- Package Details Preview -->
                    <fieldset style="margin: 50px 0 30px">
                        <legend>Package Details</legend>

                            <!-- Weight -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Weight: <?php echo $_SESSION['weight'] ?> inches">
                            </label>

                            <!-- Length -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Length: <?php echo $_SESSION['length'] ?> inches">
                            </label>

                            <!-- Width -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Width: <?php echo $_SESSION['width'] ?> inches">
                            </label>

                            <!-- Height -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Height: <?php echo $_SESSION['height'] ?> inches">
                            </label>

                            <!-- Package's Worth (USD) -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Package's Worth (USD): $<?php echo $_SESSION['worth'] ?> ">
                            </label>

                            <!-- Delivery Options -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Delivery Type: <?php echo $_SESSION['delivery_options'] ?> ">
                            </label>

                            <!-- Brief Package Description -->
                            <label>
                                <input disabled style="width: 100%" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Brief Package Description: <?php echo $_SESSION['package_description'] ?> ">
                            </label>

                            <!-- Edit Button -->
                            <label>
                                <button style="float: left" onClick="javascript:history.go(-2)" class="w3-button w3-medium w3-green-continue">Edit</button>
                            </label>
                    </fieldset>

                    <!-- Package Destination Preview -->
                    <fieldset style="margin: 50px 0 30px">
                        <legend>Package Destination</legend>

                            <!-- Contact's Name -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Contact's Name: <?php echo $_SESSION['contact_name_dest'] ?> ">
                            </label>

                            <!-- Contact's Phone Number -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Contact's Phone Number: <?php echo $_SESSION['contact_phone_dest'] ?> ">
                            </label>

                            <!-- Country -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Country: Finland">
                            </label>

                            <!-- State -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="State: <?php echo $_SESSION['state'] ?> ">
                            </label>

                            <!-- City -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="City: <?php echo $_SESSION['city'] ?> ">
                            </label>

                            <!-- Zip Code -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Zip Code: <?php echo $_SESSION['zip_code_dest'] ?> ">
                            </label>

                            <!-- Street Address -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Street Address: <?php echo $_SESSION['street_address_dest'] ?> ">
                            </label>

                            <!-- Apartment -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Apartment, Suite, Unit: <?php echo $_SESSION['apartment_dest'] ?> ">
                            </label>

                            <!-- Department -->
                            <label>
                                <input disabled class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Department: <?php echo $_SESSION['department_dest'] ?> ">
                            </label>

                            <!-- Residential Address -->
                            <label>
                                <input disabled style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                       placeholder="Residential Address? <?php echo $_SESSION['residential_add_dest'] ?> ">
                            </label>

                            <!-- Edit Button -->
                            <label>
                                <button style="float: left" onClick="javascript:history.go(-1)" class="w3-button w3-medium w3-green-continue">Edit</button>
                            </label>

                    </fieldset>


                    <!-- Continue and Cancel Button -->
                    <div class="w3-center">
                        <div class="w3-bar">
<!--                            <button onClick="javascript:history.go(-1)" class="w3-button w3-medium w3-black-previous">Previous</button>-->
                            <button value="Next" type="submit" class="w3-button w3-medium w3-green-continue">
                                Submit</button>
                            <button type="reset" class="w3-button w3-medium w3-red-cancel">Cancel</button>
                        </div>
                    </div>

                <!-- End of form -->
              </form>

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
