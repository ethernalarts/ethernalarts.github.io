<?php

  //let's start the session

  session_start();

  //now, let's register our session variables

  //Return Address

  session_register('name_reAdd');
  session_register('contact_name_reAdd');
  session_register('country_reAdd');
  session_register('state_reAdd');
  session_register('city_reAdd');
  session_register('zip_code_reAdd');
  session_register('street_address_reAdd');
  session_register('apartment_suite_reAdd');
  session_register('department_c/o_reAdd');
  session_register('phone_reAdd');
  session_register('email_reAdd');

  
  //Store Return Address values in the session variables

  $_SESSION['name_reAdd'] = $_POST['name_reAdd'];
  $_SESSION['contact_name_reAdd'] = $_POST['contact_name_reAdd'];
  $_SESSION['country_reAdd'] = $_POST['country_reAdd'];
  $_SESSION['state_reAdd'] = $_POST['state_reAdd'];
  $_SESSION['city_reAdd'] = $_POST['city_reAdd'];
  $_SESSION['zip_code_reAdd'] = $_POST['zip_code_reAdd'];
  $_SESSION['street_address_reAdd'] = $_POST['street_address_reAdd'];
  $_SESSION['apartment_suite_reAdd'] = $_POST['apartment_suite_reAdd'];
  $_SESSION['department_c/o_reAdd'] = $_POST['department_c/o_reAdd'];
  $_SESSION['phone_reAdd'] = $_POST['phone_reAdd'];
  $_SESSION['email_reAdd'] = $_POST['email_reAdd'];

?>
