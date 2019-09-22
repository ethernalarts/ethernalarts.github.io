<?php
    //let's start the session
    session_start();

    //store posted values in the session variables
    $_SESSION['name_ss'] = $_POST['name_ss'];
    $_SESSION['contactname_ss'] = $_POST['contactname_ss'];
    $_SESSION['gender_ss'] = $_POST['gender_ss'];
    $_SESSION['title_ss'] = $_POST['title_ss'];
    $_SESSION['age_ss'] = $_POST['age_ss'];
    $_SESSION['occupation_ss'] = $_POST['occupation_ss'];
    $_SESSION['phone_ss'] = $_POST['phone_ss'];
    $_SESSION['email_ss'] = $_POST['email_ss'];
    $_SESSION['country_ss'] = $_POST['country_ss'];
    $_SESSION['state_ss'] = $_POST['state_ss'];
    $_SESSION['city_ss'] = $_POST['city_ss'];
    $_SESSION['zipcode_ss'] = $_POST['zipcode_ss'];
    $_SESSION['address_ss'] = $_POST['address_ss'];
    $_SESSION['apt_ss'] = $_POST['apt_ss'];
    $_SESSION['dept_ss'] = $_POST['dept_ss'];
    $_SESSION['resAdd_ss'] = $_POST['resAdd_ss'];
    $_SESSION['item_update_ss'] = $_POST['item_update_ss'];


    // Sanitizing email field to remove unwanted characters.
    $_POST['email_ss'] = filter_var($_POST['email_ss'], FILTER_SANITIZE_EMAIL);

    // Validate email.
    if (filter_var($_POST['email_ss'], FILTER_VALIDATE_EMAIL)){

    } else {
        $_SESSION['error'] = "Invalid Email Address";
        header("location: quote-ss.php");//redirecting to first page
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Secure Storage - Item Details)</title>

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
            padding: 0 210px;
        }

        .parallax {
            /* The image used */
            background-image: url("images/ss-pic1.jpg");

            /* Set a specific height */
            min-height: 480px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .subheader-h2 {
            margin-top: 290px;
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
            #hi {
                margin: 60px 0 0;
                text-align: center;
                font: 1.4em Verdana, sans-serif;
            }

            .container {
                padding: 0 30px;
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
                            <button onclick="dropDownNav()" class="dropbtn">
                                Get a Quote <i class="fas fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdownnav-content">
                                <a href="quote-is-1.php">International Shipping</a>
                                <a href="quote-ec.php">Express Courier</a>
                                <a href="quote-ss.php" class="active">Secure Storage</a>
                            </div>
                        </div>
                    </li>
                    <li class="navlistitem"><a href="about.html">About</a></li>
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
        <div class="subheader-h2" style="width: 300px;">Quote - Secure Storage</div>
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
                        <a href="quote-ec.php">Express Courier</a>
                        <a href="quote-ss.php" class="active">Secure Storage</a>
                    </div>
                </a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="track.html">Track</a>
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
                <span class="step"></span><br><br>
                <span style="font: 1.25em Montserrat, sans-serif;">(Step 2 of 3)</span>
            </div>

            <h2 id="hi">Item Details and Dimensions</h2>

            <h3 id="required">
                <code class="w3-code">
                    <span style="font-size: 13px"><i class="fas fa-asterisk"></i></span>&nbsp;&nbsp;Indicates required fields
                </code>
            </h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">

                    <!-- Express Courier Get a quote form -->
                    <form class="container-form"  style="padding-bottom: 0" method="post" action="quote-ss-review.php">

                        <fieldset style="margin: 0 0 20px; padding-bottom: 10px">

                            <legend>Item Details</legend>

                                <!-- Storage type -->
                                <label>
                                    <select class="choice" name="storage_type_ss" type="select" required>
                                        <option value="0" selected="selected">Storage Type  *</option>
                                        <option value="Secure Storage">Secure Storage</option>
                                        <option value="Secure Storage plus">Secure Storage + (+$)</option>
                                    </select>
                                </label>

                                <!-- Item type -->
                                <label>
                                    <select style="float: right" class="choice" name="item_type_ss" required>
                                        <option value="0" selected="selected">Item Type  *</option>
                                        <option value="Document">Document</option>
                                        <option value="Jewellery">Jewellery</option>
                                        <option value="Electronic">Electronic</option>
                                        <option value="Fabric">Fabric</option>
                                        <option value="Battery">Battery</option>
                                        <option value="Machine Parts">Machine Parts</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </label>

                                <!-- Item's Worth -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Declared Value (Item's worth) (USD):  *"
                                           name="worth_ss" type="number" required>
                                </label>

                                <!-- Storage Duration -->
                                <label>
                                    <input style="float: right" class="w3-light-gray" placeholder="Storage Duration (weeks):  *"
                                           name="duration_ss" type="number" required>
                                </label>

                                <!-- Weight -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Weight (pounds):  *"
                                           name="weight_ss" type="number" required>
                                </label>

                                <!-- Length -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Length (inches):  *"
                                           name="length_ss" type="number" required>
                                </label>

                                <!-- Width -->
                                <label>
                                    <input class="w3-light-gray" placeholder="Width (inches):  *"
                                           name="width_ss" type="number" required>
                                </label>

                                <!-- Height -->
                                <label>
                                    <input class="w3-light-gray" style="float: right" placeholder="Height (inches):  *"
                                           name="height_ss" type="number" required>
                                </label>

                                <!-- Package Description -->
                                <label>
                                    <textarea style="height: 120px" class="w3-light-gray"
                                              name="item_descr_ss" placeholder="Briefly describe item..."></textarea>
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
