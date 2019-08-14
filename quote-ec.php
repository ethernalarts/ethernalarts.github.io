<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLink Express Courier - Get a Quote (Express Courier - Package Origin)</title>

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

        #returnAdd {
            margin: 40px 0 0;
        }

        input:disabled {
            padding: 15px;
            margin: 0 0 33px;
            width: 47%;
            border: 1px solid #afafaf;
        }

        .countries, .states, .cities {
            background-color: white;
            border-bottom: 1px solid #878787;
            font-size: 0.95em;
        }

        #stateId {
            float: right;
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
    <div class="container" style="padding: 0 210px">

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

            <h2 id="hi">Hi. Please tell us about your Package</h2>

            <h3 id="required"><code class="w3-code">* Indicates required fields</code></h3>

            <!-- Container for Get a Quote form  -->
            <div class="w3-card-quote-is">


                <!-- Express Courier Quote form -->
                <form class="container-form" style="padding-bottom: 0" action="quote-ec-2.php" method="post">
                    <fieldset style="margin: 0 0 20px; padding-bottom: 20px">
                        <legend>Basic Details</legend>

                        <!-- Full Name -->
                        <label>
                            <input class="w3-light-gray" placeholder="Full Name (or Company):  *" name="name" type="text" required>
                        </label>

                        <!-- Title -->
                        <label>
                            <input style="float: right" class="w3-input w3-border-0 w3-light-gray"
                                   name="title" placeholder="Title (Mr, Mrs, Dr. etc):  " type="text">
                        </label>

                        <!-- Gender -->
                        <select class="choice" name="gender" required>
                            <option value="0" selected="selected">Gender:   *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <!-- Marital Status -->
                        <label>
                            <select style="float: right" name="marital_status" class="choice" required>
                                <option value="0" selected="selected">Marital Status:   *</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </label>

                        <!-- Age -->
                        <label>
                            <input name="age" class="w3-input w3-border-0 w3-light-gray" placeholder="Age:  *"
                                   type="number" required>
                        </label>

                        <!-- Email -->
                        <label>
                            <input style="float: right" class="w3-input w3-border-0 w3-light-gray" name="email"
                                   placeholder="Email:  *" type="email" required>
                        </label>

                        <!-- Telephone -->
                        <label>
                            <input class="w3-input w3-border-0 w3-light-gray" name="phone"
                                   placeholder="Telephone:  *" type="number" required>
                        </label>

                        <!-- Occupation -->
                        <label>
                            <input style="float: right" class="w3-light-gray" placeholder="Occupation:  *" name="occupation" type="text" required>
                        </label>
                    </fieldset>


                    <!-- Check Box (Email updates on shipment) -->
                    <label class="container-checkbox" style="font-size: 1.05em; margin: 10px 0 20px 0">
                        Send status updates on this package using the email above
                        <input type="checkbox" name="status-updates"/>
                        <span class="checkmark"></span>
                    </label>


                        <!-- Pickup Address -->
                        <fieldset id="returnAdd" style="display: block; margin-bottom: 20px; padding-bottom: 20px">
                            <legend>Pickup Address:</legend>
                                <!-- Contact Name -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Contact's Name:  *"
                                           name="contact_name" type="text" required>
                                </label>

                                <!-- Contact's Phone Number -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="float: right" placeholder="Contact's Phone Number:  *"
                                           name="contact_phone" type="number" required>
                                </label>

                                <!-- Country (Finland) -->
                                <label>
                                    <input name="country" class="countries" value="Finland" disabled>
                                </label>

                                <input type="hidden" name="country" id="countryId" value="FI"/>

                                <!-- State -->
                                <label for="stateId">
                                    <select name="state" class="choice states order-alpha" id="stateId" required>
                                        <option value="0" selected="selected">State:  *</option>
                                    </select>
                                </label>

                                <!-- City -->
                                <label for="cityId">
                                    <select name="city" class="choice cities order-alpha" id="cityId" required>
                                        <option value="0" selected="selected">City:  *</option>
                                    </select>
                                </label>

                                <!-- Zip Code -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="float: right" placeholder="Zip Code:  *"
                                           name="zip_code" type="number" required>
                                </label>

                                <!-- Street Address -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Street Address:  *"
                                           name="street_address" type="text" required>
                                </label>

                                <!-- Apartment, Suite, Unit -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Apartment, unit, suite, building, floor, etc.:  *"
                                           name="apartment" type="text" required>
                                </label>

                                <!-- Department -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" style="width: 100%" placeholder="Department, c/o, etc.: "
                                           name="department" type="text">
                                </label>

                                <!-- Pickup date -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Pickup date "
                                           name="pickup_date" type="text" onfocus="(this.type='date')" id="d8" required>
                                </label>

                                <!-- Pickup time -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" placeholder="Pickup time " style="float: right"
                                           name="pickup_time" type="text" onfocus="(this.type='time')" id="time" required>
                                </label>

                                <!-- Email (Pickup Address) -->
                                <label>
                                    <input class="w3-input w3-border-0 w3-light-gray" name="email_pickupAdd"
                                           placeholder="Email:  *" type="email" required>
                                </label>

                                <!-- Residential Address -->
                                <label>
                                    <select  style="float: right" name="residential_add" class="choice">
                                        <option value="0" selected="selected">Is this a residential address?   *</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </label>

                                <!-- Toggle (residential address?) -->
<!--                                <div class="sliderWrapper" style="margin: 7px 0">-->
<!--                                    <span style="margin-left: 5px;">Is this a residential address?</span>-->
<!--                                    <label class="switch">-->
<!--                                        <input type="seheckbox" name="residential_add">-->
<!--                                        <span class="slider"></span>-->
<!--                                    </label>-->
<!--                                </div>-->
                        </fieldset>


                            <!-- Contact Address to send package to -->
                            <fieldset id="contactAddress" style="display: block; margin: 60px 0 40px">
                                <legend>If convenient, you could bring the package to us</legend>
                                <div >
                                    <p class="w3-center">
                                        No. 3M, Microkatu, 70210<br>
                                        Kuopio, Finland.<br><br>
                                        Phone: +358 9 42453389
                                    </p>
                                </div>
                            </fieldset>

                                <!-- Continue and Cancel Button -->
                                <div class="w3-center">
                                    <div class="w3-bar">
                                        <button value="Next" type="submit" class="w3-button w3-medium w3-green-continue">Next</button>
                                        <button type="reset" class="w3-button w3-medium w3-red-cancel">Reset</button>
                                    </div>
                                </div>

                <!-- End of form -->
                </form>
            </div>
        </div>
    </div>


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
