<?php

  //let's start the session

  session_start();

  //now, let's register our session variables

  session_register('name');
  session_register('contact_name');
  session_register('country');
  session_register('state');
  session_register('city');
  session_register('zip_code');
  session_register('street_address');
  session_register('apartment_suite');
  session_register('department_c/o');
  session_register('phone');
  session_register('email');
  session_register('status_updates');

  //finally, let's store our posted values in the session variables

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['contact_name'] = $_POST['contact_name'];
  $_SESSION['country'] = $_POST['country'];
  $_SESSION['state'] = $_POST['state'];
  $_SESSION['city'] = $_POST['city'];
  $_SESSION['zip_code'] = $_POST['zip_code'];
  $_SESSION['street_address'] = $_POST['street_address'];
  $_SESSION['apartment_suite'] = $_POST['apartment_suite'];
  $_SESSION['department_c/o'] = $_POST['department_c/o'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['status_updates'] = $_POST['status_updates'];
  
?>
