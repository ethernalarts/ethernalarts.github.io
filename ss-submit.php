<?php
  session_start();

  /* Attempt MySQL server connection. */
  $link = mysqli_connect("localhost", "root", "ragnarok", "vlinkcourier");

  // Check connection
  if($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  //Basic Information - SS (Secure Storage)
  $name = $_SESSION['name_ss'];
  $contact_name = $_SESSION['contactname_ss'];
  $gender = $_SESSION['gender_ss'];
  $title = $_SESSION['title_ss'];
  $age = $_SESSION['age_ss'];
  $occupation = $_SESSION['occupation_ss'];
  $phone = $_SESSION['phone_ss'];
  $email = $_SESSION['email_ss'];
  $country = $_SESSION['country_ss'];
  $state = $_SESSION['state_ss'];
  $city = $_SESSION['city_ss'];
  $zip_code = $_SESSION['zipcode_ss'];
  $street_address = $_SESSION['address_ss'];
  $add2_apt = $_SESSION['apt_ss'];
  $department = $_SESSION['dept_ss'];
  $residential_add = $_SESSION['resAdd_ss'];
  $item_update = $_SESSION['item_update_ss'];

  //Item Details (SS)
  $storage_type = $_SESSION['storage_type_ss'];
  $item_type = $_SESSION['item_type_ss'];
  $worth = $_SESSION['worth_ss'];
  $duration = $_SESSION['duration_ss'];
  $weight = $_SESSION['weight_ss'];
  $length = $_SESSION['length_ss'];
  $width = $_SESSION['width_ss'];
  $height = $_SESSION['height_ss'];
  $item_descr = $_SESSION['item_descr_ss'];


  // attempt insert query execution
  $sql = "INSERT INTO basic_info_SS (
          name, contact_name, gender, title, age, occupation, phone, email, country,
          state, city, zip_code, street_address, apartment, department, residential_add,
          package_update )
          VALUES ('$name', '$contact_name', '$gender', '$age', '$occupation', '$title',
          '$phone', '$email', '$country', '$state', '$city', '$zip_code', '$street_address',
          '$add2_apt', '$department', '$residential_add', '$item_update')";

  if (mysqli_query($link, $sql) === false) {
  //  echo "Shipment Origin Records added successfully.";
  //  echo "<br>";
      die ("ERROR: Could not execute $sql. " . mysqli_error($link));
  }

  // attempt insert query execution
  $sql2 = "INSERT INTO item_details_SS (
           storage_type, item_type, `worth(USD)`, duration, `weight(pounds)`, `length(inches)`,
           `width(inches)`, `height(inches)`, item_description )
           VALUES ('$storage_type', '$item_type', '$worth', '$duration', '$weight', '$length',
           '$width', '$height', '$package_descr')";

  if (mysqli_query($link, $sql2)) {
      // header ("Location: sendmail-ss.php");
      print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-ss-final.html\">";
  } else {
      die ("ERROR: Could not execute $sql2. " . mysqli_error($link));
  }

  // close connection
  mysqli_close($link);
?>
