<?php
    //let's start the session
    session_start();

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");

    //store posted values in the session variables
    if(isset($_POST['name_ec_ra']))
        $_SESSION['name_ec_ra']=$_POST['name_ec_ra'];
    if(isset($_POST['contactname_ec_ra']))
        $_SESSION['contactname_ec_ra']=$_POST['contactname_ec_ra'];
    if(isset($_POST['gender_ec_ra']))
        $_SESSION['gender_ec_ra']=$_POST['gender_ec_ra'];
    if(isset($_POST['title_ec_ra']))
        $_SESSION['title_ec_ra']=$_POST['title_ec_ra'];
    if(isset($_POST['phone_ec_ra']))
        $_SESSION['phone_ec_ra']=$_POST['phone_ec_ra'];
    if(isset($_POST['email_ec_ra']))
        $_SESSION['email_ec_ra']=$_POST['email_ec_ra'];
    if(isset($_POST['country_ec_ra']))
        $_SESSION['country_ec_ra']=$_POST['country_ec_ra'];
    if(isset($_POST['state_ec_ra']))
        $_SESSION['state_ec_ra']=$_POST['state_ec_ra'];
    if(isset($_POST['city_ec_ra']))
        $_SESSION['city_ec_ra']=$_POST['city_ec_ra'];
    if(isset($_POST['zipcode_ec_ra']))
        $_SESSION['zipcode_ec_ra']=$_POST['zipcode_ec_ra'];
    if(isset($_POST['address_ec_ra']))
        $_SESSION['address_ec_ra']=$_POST['address_ec_ra'];
    if(isset($_POST['apt_ec_ra']))
        $_SESSION['apt_ec_ra']=$_POST['apt_ec_ra'];
    if(isset($_POST['dept_ec_ra']))
        $_SESSION['dept_ec_ra']=$_POST['dept_ec_ra'];
    if(isset($_POST['resAdd_ec_ra']))
        $_SESSION['resAdd_ec_ra']=$_POST['resAdd_ec_ra'];
    if(isset($_POST['notify_ec']))
        $_SESSION['notify_ec']=$_POST['notify_ec'];


    // Sanitizing email field to remove unwanted characters.
    $_POST['email_ec_ra'] = filter_var($_POST['email_ec_ra'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_ec_ra'], FILTER_VALIDATE_EMAIL)) {

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-ec-1.php");//redirecting to first page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Domestic Shipping - Package Details)</title>

    <link href="fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/back-to-top.css" rel="stylesheet">
    <link href="css/misc.css" rel="stylesheet">
    <link href="css/mobile-menu-top.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
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

        .container {
            padding: 0 190px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ec-pic2.jpg");

            /* Set a specific height */
            min-height: 430px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 250px;
        }

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            width: 47%;
            border: none;
            border-bottom: 1px solid #2d2d2d;
        }

        /* On screens that are 1200px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 1200px) {
            .container {
            }

            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 50px;
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
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php" class="active">Domestic Shipping</a>
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
        <div class="subheader-h2" style="width: 320px;">Quote - Domestic Shipping</div>
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

            <h2 id="hi">Package Details</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span style="font-size: 13px"><i class="fas fa-asterisk"></i></span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                    <!-- Domestic Shipping Get a quote form -->
                    <form class="container-form"  style="padding-bottom: 0" method="post" action="quote-ec-3.php">

                        <!-- 1st Package Details -->
                        <fieldset style="margin: 0 0 20px; padding-bottom: 10px">
                            <legend>Package Details</legend>
                                <!-- Package type -->
                                <label>
                                    <select name="package_type" class="choice" type="select">
                                        <option value="0" selected="selected">Package type *</option>
                                        <option value="Luggage">Luggage</option>
                                        <option value="Jewellery">Jewellery</option>
                                        <option value="Electronic">Electronic</option>
                                        <option value="Laptop">Computer (Laptop)</option>
                                        <option value="Desktop">Computer (Desktop)</option>
                                        <option value="Document">Document</option>
                                        <option value="Battery">Battery</option>
                                        <option value="Machine Parts">Machine Parts</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- delivery options -->
                                <label>
                                    <select name="delivery_options" style="float: right" class="choice">
                                        <option value="0" selected="selected">Delivery option  *</option>
                                        <option value="VLink Ground">VLink Ground</option>
                                        <option value="VLink Next Day Air">VLink Next Day Air</option>
                                        <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                        <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                        <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                        <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                        <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                        <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                        <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                        <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                    </select>
                                </label>

                                <!-- Other (Package type) -->
                                <label>
                                    <input class="w3-light-gray" name="other" type="text"
                                           placeholder="If package type is OTHER, please specify: ">
                                </label>

                                <!-- Package's Worth -->
                                <label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (Package's worth) (USD):  *"
                                           name="worth" type="number" required>
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Weight (pounds):  *"
                                           name="weight" type="number" required>
                                </label>

                                <!-- Length -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Length (inches):  *"
                                           name="length" type="number" required>
                                </label>

                                <!-- Width -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Width (inches):  *"
                                           name="width" type="number" required>
                                </label>

                                <!-- Height -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Height (inches):  *"
                                           name="height" type="number" required>
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Color:  *" name="colour" type="text" required>
                                </label>

                                <!-- Texture -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Texture:  "
                                           name="texture" type="text">
                                </label>

                                <!-- Package Description -->
                                <label>
                                    <textarea style="height: 120px" class="w3-light-gray" name="package_description"
                                              placeholder="Additional information about package..."></textarea>
                                </label>
                        </fieldset>

                        <!-- Add 2nd package -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0" onclick="secondPackage()">
                                + Add a 2nd package
                            </span>
                        </div>

                        <!-- 2nd Package Details -->
                        <fieldset id="secondPackage" style="margin: 0 0 20px; display: none">

                            <legend>2nd Package Details</legend>
                                <!-- Package type -->
                                <label>
                                    <select name="package_type_2" class="choice" type="select">
                                        <option value="0" selected="selected">Package type</option>
                                        <option value="Luggage">Luggage</option>
                                        <option value="Jewellery">Jewellery</option>
                                        <option value="Electronic">Electronic</option>
                                        <option value="Laptop">Computer (Laptop)</option>
                                        <option value="Desktop">Computer (Desktop)</option>
                                        <option value="Document">Document</option>
                                        <option value="Battery">Battery</option>
                                        <option value="Machine Parts">Machine Parts</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- delivery options -->
                                <label>
                                    <select name="delivery_options_2" style="float: right" class="choice">
                                        <option value="0" selected="selected">Delivery option</option>
                                        <option value="VLink Ground">VLink Ground</option>
                                        <option value="VLink Next Day Air">VLink Next Day Air</option>
                                        <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                        <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                        <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                        <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                        <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                        <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                        <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                        <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                    </select>
                                </label>

                                <!-- Other (Package type) -->
                                <label>
                                    <input class="w3-light-gray" name="other_2" type="text"
                                           placeholder="If package type is OTHER, please specify: ">
                                </label>

                                <!-- Package's Worth -->
                                <label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (Package's worth) (USD): "
                                           name="worth_2" type="number">
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Weight (pounds):"
                                           name="weight_2" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Length (inches):"
                                           name="length_2" type="number">
                                </label>

                                <!-- Width -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Width (inches):"
                                           name="width_2" type="number">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Height (inches):"
                                           name="height_2" type="number">
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Color:" name="colour_2" type="text">
                                </label>

                                <!-- Texture -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Texture:  "
                                           name="texture_2" type="text">
                                </label>

                                <!-- Package Description -->
                                <label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="package_description_2"
                                                  placeholder="Additional information about package..."></textarea>
                                </label>
                        </fieldset>

                        <!-- Add 3rd shipment -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0; display: none" id="add3rdPackage" onclick="thirdPackage()">
                                + Add a 3rd package
                            </span>
                        </div>

                        <!-- 3rd Package Details -->
                        <fieldset id="thirdPackage" style="margin: 0 0 20px; display: none">

                            <legend>3rd Package Details</legend>
                                <!-- Package type -->
                                <label>
                                    <select name="package_type_3" class="choice" type="select">
                                        <option value="0" selected="selected">Package type</option>
                                        <option value="Luggage">Luggage</option>
                                        <option value="Jewellery">Jewellery</option>
                                        <option value="Electronic">Electronic</option>
                                        <option value="Laptop">Computer (Laptop)</option>
                                        <option value="Desktop">Computer (Desktop)</option>
                                        <option value="Document">Document</option>
                                        <option value="Battery">Battery</option>
                                        <option value="Machine Parts">Machine Parts</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- delivery options -->
                                <label>
                                    <select name="delivery_options_3" style="float: right" class="choice">
                                        <option value="0" selected="selected">Delivery option</option>
                                        <option value="VLink Ground">VLink Ground</option>
                                        <option value="VLink Next Day Air">VLink Next Day Air</option>
                                        <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                        <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                        <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                        <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                        <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                        <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                        <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                        <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                    </select>
                                </label>

                                <!-- Other (Package type) -->
                                <label>
                                    <input class="w3-light-gray" name="other_3" type="text"
                                           placeholder="If package type is OTHER, please specify: ">
                                </label>

                                <!-- Package's Worth -->
                                <label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (Package's worth) (USD): "
                                           name="worth_3" type="number">
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Weight (pounds):"
                                           name="weight_3" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Length (inches):"
                                           name="length_3" type="number">
                                </label>

                                <!-- Width -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Width (inches):"
                                           name="width_3" type="number">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Height (inches):"
                                           name="height_3" type="number">
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Color:" name="colour_3" type="text">
                                </label>

                                <!-- Texture -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Texture:  "
                                           name="texture_3" type="text">
                                </label>

                                <!-- Package Description -->
                                <label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="package_description_3"
                                                  placeholder="Additional information about package..."></textarea>
                                </label>
                        </fieldset>

                        <!-- Add 4th shipment -->
                        <div class="sliderWrapper">
                            <span style="margin-left: 0; display: none" id="add4thPackage" onclick="fourthPackage('fourthPackage')">
                                + Add a 4th package
                            </span>
                        </div>

                        <!-- 4th Package Details -->
                        <fieldset id="fourthPackage" style="margin: 0 0 20px; display: none">

                            <legend>4th Package Details</legend>
                                <!-- Package type -->
                                <label>
                                    <select name="package_type_4" class="choice" type="select">
                                        <option value="0" selected="selected">Package type</option>
                                        <option value="Luggage">Luggage</option>
                                        <option value="Jewellery">Jewellery</option>
                                        <option value="Electronic">Electronic</option>
                                        <option value="Laptop">Computer (Laptop)</option>
                                        <option value="Desktop">Computer (Desktop)</option>
                                        <option value="Document">Document</option>
                                        <option value="Battery">Battery</option>
                                        <option value="Machine Parts">Machine Parts</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- delivery options -->
                                <label>
                                    <select name="delivery_options_4" style="float: right" class="choice">
                                        <option value="0" selected="selected">Delivery option</option>
                                        <option value="VLink Ground">VLink Ground</option>
                                        <option value="VLink Next Day Air">VLink Next Day Air</option>
                                        <option value="VLink 2nd Day Air A.M.">VLink 2nd Day Air A.M.</option>
                                        <option value="VLink 2nd Day Air">VLink 2nd Day Air</option>
                                        <option value="VLink 3 Day Select">VLink 3 Day Select</option>
                                        <option value="S. Service(Dangerous Goods)">Special Service (Dangerous Goods)</option>
                                        <option value="S. Service(Secure Transport)">Special Service (Secure Transport)</option>
                                        <option value="S. Service(Clinical Exp.)">Special Service (Clinical Express)</option>
                                        <option value="T.C. Service(Dedicated Exp.)">Time Critical Service (VLink Dedicated Express)</option>
                                        <option value="T.C. Service(Special Exp.)">Time Critical Service (VLink Special Express)</option>
                                    </select>
                                </label>

                                <!-- Other (Package type) -->
                                <label>
                                    <input class="w3-light-gray" name="other_4" type="text"
                                           placeholder="If package type is OTHER, please specify: ">
                                </label>

                                <!-- Package's Worth -->
                                <label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Declared Value (Package's worth) (USD): "
                                           name="worth_4" type="number">
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Weight (pounds):"
                                           name="weight_4" type="number">
                                </label>

                                <!-- Length -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Length (inches):"
                                           name="length_4" type="number">
                                </label>

                                <!-- Width -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Width (inches):"
                                           name="width_4" type="number">
                                </label>

                                <!-- Height -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Height (inches):"
                                           name="height_4" type="number">
                                </label>

                                <!-- Colour -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Color:" name="colour_4" type="text">
                                </label>

                                <!-- Texture -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Texture:"
                                           name="texture_4" type="text">
                                </label>

                                <!-- Package Description -->
                                <label>
                                        <textarea style="height: 120px" class="w3-light-gray" name="package_description_4"
                                                  placeholder="Additional information about package..."></textarea>
                                </label>
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

    <!-- Second Package toggle -->
    <script>
        var btn = document.querySelector('secondPackage');
        btn.addEventListener('click', secondPackage);

        function secondPackage() {
            var e = document.getElementById('secondPackage');
            e.style.display = ((e.style.display !== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add3rdPackage');
            e1.style.display = ((e1.style.display !== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- Third Package toggle -->
    <script>
        var btn = document.querySelector('thirdPackage');
        btn.addEventListener('click', thirdPackage);

        function thirdPackage() {
            var e = document.getElementById('thirdPackage');
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');

            var e1 = document.getElementById('add4thPackage');
            e1.style.display = ((e1.style.display!== 'none') ?  'none' : 'block');
        }
    </script>

    <!-- 4th Shipment toggle -->
    <script>
        function fourthPackage(fourthPackage) {
            var e = document.getElementById(fourthPackage);
            e.style.display = ((e.style.display!== 'none') ?  'none' : 'block');
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
