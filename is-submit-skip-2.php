<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "ragnarok";
    $dbname = "vlinkcourier";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = 'INSERT INTO `shipment_origin_IS` (name, contact_name, gender, country,
            state, city, zip_code, street_address, apartment_suite, department, email,
            phone, residential_add)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param ('sssssssssssss', $_SESSION['name'], $_SESSION['contact_name'], $_SESSION['gender'],
                      $_SESSION['country'], $_SESSION['state'], $_SESSION['city'], $_SESSION['zip_code'],
                      $_SESSION['street_address'], $_SESSION['apartment_suite'], $_SESSION['department'],
                      $_SESSION['email'], $_SESSION['phone'], $_SESSION['residential_add']);

    if ($stmt->execute()) {
        //echo "New record created successfully";
        print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-is-final.html\">";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
