<?php
    //let's start our session, so we have access to stored data
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);    

    $servername = "localhost";
    $username = "root";
    $password = "ragnarok";
    $dbname = "vlinkcourier";


    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // begin the transaction
        $conn->beginTransaction();

        // our SQL statements
        $conn->exec("INSERT INTO shipment_origin_IS (name, contact_name, gender, country,
                    state, city, zip_code, street_address, apartment_suite, department, email,
                    phone, residential_add)
                VALUES (".$_SESSION['name'].", ".$_SESSION['contact_name'].", ".$_SESSION['gender'].",
                    ".$_SESSION['country'].", ".$_SESSION['state'].", ".$_SESSION['city'].", ".$_SESSION['zip_code'].",
                    ".$_SESSION['street_address'].", ".$_SESSION['apartment_suite'].", ".$_SESSION['department'].",
                    ".$_SESSION['email'].", ".$_SESSION['phone'].", ".$_SESSION['residential_add'].")");

        $conn->exec("INSERT INTO return_address_IS (name_reAdd, contact_name_reAdd, gender, country_reAdd,
                    state_reAdd, city_reAdd, zip_code_reAdd, street_address_reAdd, apartment_suite_reAdd,
                    department_reAdd, email_reAdd, phone_reAdd, residential_reAdd)
                VALUES (".$_SESSION['name'].", ".$_SESSION['contact_name'].", ".$_SESSION['gender'].",
                    ".$_SESSION['country'].", ".$_SESSION['state'].", ".$_SESSION['city'].", ".$_SESSION['zip_code'].",
                    ".$_SESSION['street_address'].", ".$_SESSION['apartment_suite'].", ".$_SESSION['department'].",
                    ".$_SESSION['email'].", ".$_SESSION['phone'].", ".$_SESSION['residential_add'].")");

        $conn->exec("INSERT INTO shipment_destination_IS (name_dest, contact_name_dest, gender, country_dest,
                    state_dest, city_dest, zip_code_dest, street_address_dest, apartment_suite_dest, department_dest,
                    email_dest, phone_dest, residential_add_dest)
                VALUES (".$_SESSION['name_dest'].", ".$_SESSION['contact_name_dest'].", ".$_SESSION['gender'].",
                    ".$_SESSION['country_dest'].", ".$_SESSION['state_dest'].", ".$_SESSION['city_dest'].", ".$_SESSION['zip_code_dest'].",
                    ".$_SESSION['street_address_dest'].", ".$_SESSION['apartment_suite_dest'].", ".$_SESSION['department_dest'].",
                    ".$_SESSION['email_dest'].", ".$_SESSION['phone_dest'].", ".$_SESSION['residential_add_dest'].")");

        // commit the transaction
        $conn->commit();
        echo "New records created successfully";
        }
    catch(PDOException $e)
        {
        // roll back the transaction if something failed
        $conn->rollback();
        echo "Error: " . $e->getMessage();
        }

    $conn = null;
?>
