<?php
  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost", "root", "ragnarok", "vlinkcourier");

  // Check connection
  if($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // Escape user inputs for security

  //Shipment Origin - IS (International Shipping)
  $name = mysqli_real_escape_string($link, $_REQUEST['name']);
  $contact_name = mysqli_real_escape_string($link, $_REQUEST['contact_name']);
  $gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
  $country = mysqli_real_escape_string($link, $_REQUEST['country']);
  $state = mysqli_real_escape_string($link, $_REQUEST['state']);
  $city = mysqli_real_escape_string($link, $_REQUEST['city']);
  $zip_code = mysqli_real_escape_string($link, $_REQUEST['zip_code']);
  $street_address = mysqli_real_escape_string($link, $_REQUEST['street_address']);
  $apartment_suite = mysqli_real_escape_string($link, $_REQUEST['apartment_suite']);
  $department = mysqli_real_escape_string($link, $_REQUEST['department']);
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);
  $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
  $residential_add = mysqli_real_escape_string($link, $_REQUEST['residential_add']);

  //Return Address (IS)
  $name_reAdd = mysqli_real_escape_string($link, $_REQUEST['name_reAdd']);
  $contact_name_reAdd = mysqli_real_escape_string($link, $_REQUEST['contact_name_reAdd']);
  $gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
  $country_reAdd = mysqli_real_escape_string($link, $_REQUEST['country_reAdd']);
  $state_reAdd = mysqli_real_escape_string($link, $_REQUEST['state_reAdd']);
  $city_reAdd = mysqli_real_escape_string($link, $_REQUEST['city_reAdd']);
  $zip_code_reAdd = mysqli_real_escape_string($link, $_REQUEST['zip_code_reAdd']);
  $street_address_reAdd = mysqli_real_escape_string($link, $_REQUEST['street_address_reAdd']);
  $apartment_suite_reAdd = mysqli_real_escape_string($link, $_REQUEST['apartment_suite_reAdd']);
  $department_reAdd = mysqli_real_escape_string($link, $_REQUEST['department_reAdd']);
  $email_reAdd = mysqli_real_escape_string($link, $_REQUEST['email_reAdd']);
  $phone_reAdd = mysqli_real_escape_string($link, $_REQUEST['phone_reAdd']);
  $residential_reAdd = mysqli_real_escape_string($link, $_REQUEST['residential_reAdd']);

  //Shipment Destination (IS)
  $name_dest = mysqli_real_escape_string($link, $_REQUEST['name_dest']);
  $contact_name_dest = mysqli_real_escape_string($link, $_REQUEST['contact_name_dest']);
  $gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
  $country_dest = mysqli_real_escape_string($link, $_REQUEST['country_dest']);
  $state_dest = mysqli_real_escape_string($link, $_REQUEST['state_dest']);
  $city_dest = mysqli_real_escape_string($link, $_REQUEST['city_dest']);
  $zip_code_dest = mysqli_real_escape_string($link, $_REQUEST['zip_code_dest']);
  $street_address_dest = mysqli_real_escape_string($link, $_REQUEST['street_address_dest']);
  $apartment_suite_dest = mysqli_real_escape_string($link, $_REQUEST['apartment_suite_dest']);
  $department_dest = mysqli_real_escape_string($link, $_REQUEST['department_dest']);
  $email_dest = mysqli_real_escape_string($link, $_REQUEST['email_dest']);
  $phone_dest = mysqli_real_escape_string($link, $_REQUEST['phone_dest']);
  $residential_add_dest = mysqli_real_escape_string($link, $_REQUEST['residential_add_dest']);

  //Shipment Dimensions (IS)
  $weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
  $length = mysqli_real_escape_string($link, $_REQUEST['length']);
  $width = mysqli_real_escape_string($link, $_REQUEST['width']);
  $height = mysqli_real_escape_string($link, $_REQUEST['height']);
  $worth = mysqli_real_escape_string($link, $_REQUEST['worth']);
  $package_type = mysqli_real_escape_string($link, $_REQUEST['package_type']);
  $shipment_description = mysqli_real_escape_string($link, $_REQUEST['shipment_description']);


  // attempt insert query execution
    $sql = "INSERT INTO shipment_origin_IS (
            name, contact_name, gender, country,
            state, city, zip_code, street_address,
            apartment_suite, department, email, phone, residential_add
            ) VALUES (
            '$name', '$contact_name', '$gender', '$country',
            '$state', '$city', '$zip_code', '$street_address',
            '$apartment_suite', '$department', '$email', '$phone',
            '$residential_add');

            INSERT INTO return_address_IS (
            name_reAdd, contact_name_reAdd, gender, country_reAdd,
            state_reAdd, city_reAdd, zip_code_reAdd, street_address_reAdd,
            apartment_suite_reAdd, department_reAdd, email_reAdd, phone_reAdd,
            residential_reAdd
            ) VALUES (
            '$name_reAdd', '$contact_name_reAdd', '$gender', '$country_reAdd',
            '$state_reAdd', '$city_reAdd', '$zip_code_reAdd', '$street_address_reAdd',
            '$apartment_suite_reAdd', '$department_reAdd', '$email_reAdd', '$phone_reAdd',
            '$residential_reAdd');

            INSERT INTO shipment_destination_IS (
            name_dest, contact_name_dest, gender, country_dest,
            state_dest, city_dest, zip_code_dest, street_address_dest,
            apartment_suite_dest, department_dest, email_dest, phone_dest,
            residential_add_dest
            ) VALUES (
            '$name_dest', '$contact_name_dest', '$gender', '$country_dest',
            '$state_dest', '$city_dest', '$zip_code_dest', '$street_address_dest',
            '$apartment_suite_dest', '$department_dest', '$email_dest', '$phone_dest',
            '$residential_add_dest');

            INSERT INTO shipment_dimensions_IS (
            weight, length, width, height, worth, package_type, shipment_description
            ) VALUES (
            '$weight', '$length', '$width', '$height',
            '$worth', '$package_type', '$shipment_description')";

  if(mysqli_query($link, $sql)) {
      echo "Records added successfully.";
  } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  // close connection
  mysqli_close($link);
?>
