<?php
  session_start();

  /* Attempt MySQL server connection. */
  $link = mysqli_connect("localhost", "root", "ragnarok", "vlinkcourier");

  // Check connection
  if($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  //Package Origin - EC (Express Courier)
  $name = $_SESSION['name_ec'];
  $contact_name = $_SESSION['contactname_ec'];
  $gender = $_SESSION['gender_ec'];
  $title = $_SESSION['title_ec'];
  $phone = $_SESSION['phone_ec'];
  $email = $_SESSION['email_ec'];
  $country = $_SESSION['country_ec'];
  $state = $_SESSION['state_ec'];
  $city = $_SESSION['city_ec'];
  $zip_code = $_SESSION['zipcode_ec'];
  $street_address = $_SESSION['address_ec'];
  $apartment_suite = $_SESSION['apt_ec'];
  $department = $_SESSION['dept_ec'];
  $pickupdate = $_SESSION['pickupdate'];
  $pickuptime = $_SESSION['pickuptime'];
  $residential_add = $_SESSION['resAdd_ec'];
  $package_upd8 = $_SESSION['pkg_update_ec'];

  //Return Address (EC)
  $name_ra = $_SESSION['name_ec'];
  $contactname_ra = $_SESSION['contactname_ec'];
  $gender_ra = $_SESSION['gender_ec'];
  $title_ra = $_SESSION['title_ec'];
  $phone_ra = $_SESSION['phone_ec'];
  $email_ra = $_SESSION['email_ec'];
  $country_ra = $_SESSION['country_ec'];
  $state_ra = $_SESSION['state_ec'];
  $city_ra = $_SESSION['city_ec'];
  $zipcode_ra = $_SESSION['zipcode_ec'];
  $street_address_ra = $_SESSION['address_eca'];
  $apartment_ra = $_SESSION['apt_ec'];
  $department_ra = $_SESSION['dept_ec'];
  $residen_add_ra = $_SESSION['resAdd_ec'];
  $notify = $_SESSION['notify_ec'];

  //Package Destination (EC)
  $name_dest = $_SESSION['name_ec_dest'];
  $contactname_dest = $_SESSION['contactname_ec_dest'];
  $gender_dest = $_SESSION['gender_ec_dest'];
  $title_dest = $_SESSION['title_ec_dest'];
  $phone_dest = $_SESSION['phone_ec_dest'];
  $email_dest = $_SESSION['email_ec_dest'];
  $country_dest = $_SESSION['country_ec_dest'];
  $state_dest = $_SESSION['state_ec_dest'];
  $city_dest = $_SESSION['city_ec_dest'];
  $zipcode_dest = $_SESSION['zipcode_ec_dest'];
  $street_address_dest = $_SESSION['address_ec_dest'];
  $apartment_dest = $_SESSION['apt_ec_dest'];
  $department_dest = $_SESSION['dept_ec_dest'];
  $residen_add_dest = $_SESSION['resAdd_ec_dest'];

  //Package Dimensions (IS)
  $weight = $_SESSION['weight'];
  $length = $_SESSION['length'];
  $width = $_SESSION['width'];
  $height = $_SESSION['height'];
  $worth = $_SESSION['worth'];
  $delivery_options = $_SESSION['delivery_options'];
  $package_descr = $_SESSION['pkg_descr'];


  // attempt insert query execution
  $sql = "INSERT INTO package_origin_EC (
          name, contact_name, gender, title, phone, email, country,
          state, city, zip_code, street_address, apartment, department,
          pickup_date, pickup_time, residential_add, package_update
          ) VALUES (
          '$name', '$contact_name', '$gender', '$title', '$phone', '$email',
          '$country', '$state', '$city', '$zip_code', '$street_address',
          '$apartment_suite', '$department', '$pickupdate', '$pickuptime',
          '$residential_add', '$package_upd8')";

  if (mysqli_query($link, $sql) === false) {
  //  echo "Shipment Origin Records added successfully.";
  //  echo "<br>";
      die ("ERROR: Could not execute $sql. " . mysqli_error($link));
  }

  // attempt insert query execution
  $sql2 = "INSERT INTO return_address_EC (
          name, contact_name, gender, title, phone, email, country,
          state, city, zip_code, street_address, apartment, department,
          residential_add, package_update
          ) VALUES (
          '$name_ra', '$contactname_ra', '$gender_ra', '$title_ra', '$phone_ra',
          '$email_ra', '$country_ra', '$state_ra', '$city_ra', '$zipcode_ra',
          '$street_address_ra', '$apartment_ra', '$department_ra', '$residen_add_ra',
          '$notify')";

    if (mysqli_query($link, $sql2) === false) {
        die ("ERROR: Could not execute $sql2. " . mysqli_error($link));
    }

    // attempt insert query execution
    $sql3 = "INSERT INTO package_destination_EC (
            name, contact_name, gender, title, phone, email, country,
            state, city, zip_code, street_address, apartment, department,
            residential_add
            ) VALUES (
            '$name_dest', '$contactname_dest', '$gender_dest', '$title_dest',
            '$phone_dest', '$email_dest', '$country_dest', '$state_dest', '$city_dest',
            '$zipcode_dest', '$street_address_dest', '$apartment_dest', '$department_dest',
            '$residential_add_dest')";

      if (mysqli_query($link, $sql3) === false) {
          die ("ERROR: Could not execute $sql3. " . mysqli_error($link));
      }

      // attempt insert query execution
      $sql4 = "INSERT INTO package_dimensions_EC (
              `weight(pounds)`, `length(inches)`, `width(inches)`, `height(inches)`, `worth(USD)`,
              delivery_options, package_description )
              VALUES (
              '$weight', '$length', '$width', '$height', '$worth', '$delivery_options', '$package_descr')";

      if (mysqli_query($link, $sql4)) {
          // header ("Location: sendmail-ec.php");
          print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-ec-final.html\">";
      } else {
          die ("ERROR: Could not execute $sql4. " . mysqli_error($link));
      }


  // close connection
  mysqli_close($link);
?>
