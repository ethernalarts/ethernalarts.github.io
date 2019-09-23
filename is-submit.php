<?php
  session_start();

  /* Attempt MySQL server connection. */
  $link = mysqli_connect("localhost", "root", "ragnarok", "vlinkcourier");

  // Check connection
  if($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  //Shipment Origin - IS (International Shipping)
  $name = $_SESSION['name'];
  $contact_name = $_SESSION['contact_name'];
  $gender = $_SESSION['gender'];
  $title = $_SESSION['title'];
  $country_code = $_SESSION['countryCode'];
  $phone = $_SESSION['phone'];
  $country = $_SESSION['country'];
  $state = $_SESSION['state'];
  $city = $_SESSION['city'];
  $zip_code = $_SESSION['zip_code'];
  $street_address = $_SESSION['street_add'];
  $address2_apt = $_SESSION['street_add2'];
  $department = $_SESSION['department'];
  $email = $_SESSION['email'];
  $residential_add = $_SESSION['residential_add'];
  $status_update = $_SESSION['status_updates'];

  //Return Address (IS)
  $name_reAdd = $_SESSION['name_reAdd'];
  $contact_name_reAdd = $_SESSION['contact_name_reAdd'];
  $gender = $_SESSION['gender'];
  $title_reAdd = $_SESSION['title_reAdd'];
  $country_code_reAdd = $_SESSION['countryCode_reAdd'];
  $phone_reAdd = $_SESSION['phone_reAdd'];
  $country_reAdd = $_SESSION['country_reAdd'];
  $state_reAdd = $_SESSION['state_reAdd'];
  $city_reAdd = $_SESSION['city_reAdd'];
  $zip_code_reAdd = $_SESSION['zip_code_reAdd'];
  $street_add_reAdd = $_SESSION['street_add_reAdd'];
  $add2_apt_reAdd = $_SESSION['street_add2_reAdd'];
  $department_reAdd = $_SESSION['department_reAdd'];
  $email_reAdd = $_SESSION['email_reAdd'];
  $residen_add_reAdd = $_SESSION['residential_reAdd'];
  $notify = $_SESSION['notify'];

  //Shipment Destination (IS)
  $name_dest = $_SESSION['name_dest'];
  $contact_name_dest = $_SESSION['contact_name_dest'];
  $gender = $_SESSION['gender'];
  $title_dest = $_SESSION['title_dest'];
  $countryCode_dest = $_SESSION['countryCode_dest'];
  $phone_dest = $_SESSION['phone_dest'];
  $country_dest = $_SESSION['country_dest'];
  $state_dest = $_SESSION['state_dest'];
  $city_dest = $_SESSION['city_dest'];
  $zip_code_dest = $_SESSION['zip_code_dest'];
  $street_add_dest = $_SESSION['street_add_dest'];
  $add2_apt_dest = $_SESSION['street_add2_dest'];
  $department_dest = $_SESSION['department_dest'];
  $email_dest = $_SESSION['email_dest'];
  $residential_add_dest = $_SESSION['residential_add_dest'];
  $notify_receiver = $_SESSION['notify_dest']

  //Shipment Dimensions (IS)
  $weight = $_SESSION['weight'];
  $length = $_SESSION['length'];
  $width = $_SESSION['width'];
  $height = $_SESSION['height'];
  $worth = $_SESSION['worth'];
  $package_type = $_SESSION['package_type'];
  $shipment_description = $_SESSION['shipment_description'];


  // attempt insert query execution
  $sql = "INSERT INTO shipment_origin_IS (
          name, contact_name, gender, title, countryCode, phone, country,
          state, city, zip_code, street_address, address2_apt, department,
          email, residential_add, status_updates
          ) VALUES (
          '$name', '$contact_name', '$gender', '$title', '$country_code', '$phone',
          '$country', $state', '$city', '$zip_code', '$street_address', '$address2_apt',
          '$department', '$email', '$residential_add', '$status_update')";

  if (mysqli_query($link, $sql) === false) {
  //  echo "Shipment Origin Records added successfully.";
  //  echo "<br>";
      die ("ERROR: Could not execute $sql. " . mysqli_error($link));
  }

  // attempt insert query execution
  $sql2 = "INSERT INTO return_address_IS (
          name_reAdd, contact_name_reAdd, gender, title_reAdd, countryCode_reAdd,
          phone_reAdd, country_reAdd, state_reAdd, city_reAdd, zip_code_reAdd, street_address_reAdd,
          address2_apt_reAdd, department_reAdd, email_reAdd, residential_reAdd, notify
          ) VALUES (
          '$name_reAdd', '$contact_name_reAdd', '$gender', '$title', '$country_code_reAdd',
          '$phone_reAdd', '$country_reAdd', '$state_reAdd', '$city_reAdd', '$zip_code_reAdd',
          '$street_add_reAdd', '$add2_apt_reAdd', '$department_reAdd', '$email_reAdd',
          '$residen_add_reAdd', '$notify')";

    if (mysqli_query($link, $sql2) === false) {
        die ("ERROR: Could not execute $sql2. " . mysqli_error($link));
    }

    // attempt insert query execution
    $sql3 = "INSERT INTO shipment_destination_IS (
            name_dest, contact_name_dest, gender, title_dest, countryCode_dest, phone_dest, country_dest,
            state_dest, city_dest, zip_code_dest, street_address_dest, address2_apt_dest, department_dest, email_dest,
            residential_add_dest, notify_receiver
            ) VALUES (
            '$name_dest', '$contact_name_dest', '$gender', '$country_dest',
            '$state_dest', '$city_dest', '$zip_code_dest', '$street_address_dest',
            '$apartment_suite_dest', '$department_dest', '$email_dest', '$phone_dest',
            '$residential_add_dest', '$notify_receiver')";

      if (mysqli_query($link, $sql3) === false) {
          die ("ERROR: Could not execute $sql3. " . mysqli_error($link));
      }

      // attempt insert query execution
      $sql4 = "INSERT INTO shipment_dimensions_IS (
              `weight(pounds)`, `length(inches)`, `width(inches)`, `height(inches)`, `worth(USD)`,
              package_type, shipment_description )
              VALUES (
              '$weight', '$length', '$width', '$height', '$worth', '$package_type', '$shipment_description')";

      if (mysqli_query($link, $sql4)) {
          // header ("Location: sendmail.php");
          print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-is-final.html\">";
      } else {
          die ("ERROR: Could not execute $sql4. " . mysqli_error($link));
      }


  // close connection
  mysqli_close($link);
?>
