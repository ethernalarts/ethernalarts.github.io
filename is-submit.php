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
  $country = $_SESSION['country'];
  $state = $_SESSION['state'];
  $city = $_SESSION['city'];
  $zip_code = $_SESSION['zip_code'];
  $street_address = $_SESSION['street_address'];
  $apartment_suite = $_SESSION['apartment_suite'];
  $department = $_SESSION['department'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];
  $residential_add = $_SESSION['residential_add'];

  //Return Address (IS)
  $name_reAdd = $_SESSION['name_reAdd'];
  $contact_name_reAdd = $_SESSION['contact_name_reAdd'];
  $gender = $_SESSION['gender'];
  $country_reAdd = $_SESSION['country_reAdd'];
  $state_reAdd = $_SESSION['state_reAdd'];
  $city_reAdd = $_SESSION['city_reAdd'];
  $zip_code_reAdd = $_SESSION['zip_code_reAdd'];
  $street_address_reAdd = $_SESSION['street_address_reAdd'];
  $apartment_suite_reAdd = $_SESSION['apartment_suite_reAdd'];
  $department_reAdd = $_SESSION['department_reAdd'];
  $email_reAdd = $_SESSION['email_reAdd'];
  $phone_reAdd = $_SESSION['phone_reAdd'];
  $residential_reAdd = $_SESSION['residential_reAdd'];

  //Shipment Destination (IS)
  $name_dest = $_SESSION['name_dest'];
  $contact_name_dest = $_SESSION['contact_name_dest'];
  $gender = $_SESSION['gender'];
  $country_dest = $_SESSION['country_dest'];
  $state_dest = $_SESSION['state_dest'];
  $city_dest = $_SESSION['city_dest'];
  $zip_code_dest = $_SESSION['zip_code_dest'];
  $street_address_dest = $_SESSION['street_address_dest'];
  $apartment_suite_dest = $_SESSION['apartment_suite_dest'];
  $department_dest = $_SESSION['department_dest'];
  $email_dest = $_SESSION['email_dest'];
  $phone_dest = $_SESSION['phone_dest'];
  $residential_add_dest = $_SESSION['residential_add_dest'];

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
          name, contact_name, gender, country,
          state, city, zip_code, street_address,
          apartment_suite, department, email, phone, residential_add
          ) VALUES (
          '$name', '$contact_name', '$gender', '$country',
          '$state', '$city', '$zip_code', '$street_address',
          '$apartment_suite', '$department', '$email', '$phone',
          '$residential_add')";

  if (mysqli_query($link, $sql) === false) {
  //  echo "Shipment Origin Records added successfully.";
  //  echo "<br>";
      die ("ERROR: Could not execute $sql. " . mysqli_error($link));
  }

  // attempt insert query execution
  $sql2 = "INSERT INTO return_address_IS (
          name_reAdd, contact_name_reAdd, gender, country_reAdd,
          state_reAdd, city_reAdd, zip_code_reAdd, street_address_reAdd,
          apartment_suite_reAdd, department_reAdd, email_reAdd, phone_reAdd,
          residential_reAdd
          ) VALUES (
          '$name_reAdd', '$contact_name_reAdd', '$gender', '$country_reAdd',
          '$state', '$city', '$zip_code', '$street_address',
          '$apartment_suite', '$department', '$email', '$phone',
          '$residential_add')";

    if (mysqli_query($link, $sql2) === false) {
        die ("ERROR: Could not execute $sql2. " . mysqli_error($link));
    }

    // attempt insert query execution
    $sql3 = "INSERT INTO shipment_destination_IS (
            name_dest, contact_name_dest, gender, country_dest,
            state_dest, city_dest, zip_code_dest, street_address_dest,
            apartment_suite_dest, department_dest, email_dest, phone_dest,
            residential_add_dest
            ) VALUES (
            '$name_dest', '$contact_name_dest', '$gender', '$country_dest',
            '$state_dest', '$city_dest', '$zip_code_dest', '$street_address_dest',
            '$apartment_suite_dest', '$department_dest', '$email_dest', '$phone_dest',
            '$residential_add_dest')";

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
