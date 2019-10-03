<?php
    session_start();

    if (isset($_POST['submit']))
    {
        $myfile = fopen("data\EC-quote.txt", "w") or die("Unable to open file");

        $h1 = 'NEW DOMESTIC SHIPPING ORDER!'."\r\n\r\n";
        fwrite($myfile, $h1);

        //Package Origin - EC (Express Courier)
        'PACKAGE ORIGIN'."\r\n"
        $name = 'Name = '.$_SESSION['name_ec']."\r\n";   //name
        fwrite($myfile, $name);
        $contactname = 'Contact Name = '.$_SESSION['contactname_ec']."\r\n";    //contact name
        fwrite($myfile, $contactname);
        $gender = 'Gender = '.$_SESSION['gender_ec']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title = 'Title = '.$_SESSION['title_ec']."\r\n";   //title
        fwrite($myfile, $title);
        $phone = 'Phone = '.$_SESSION['phone_ec']."\r\n";   //phone
        fwrite($myfile, $phone);
        $country = 'Country = '.$_SESSION['country_ec']."\r\n";   //country
        fwrite($myfile, $country);
        $state = 'State = '.$_SESSION['state_ec']."\r\n";   //state
        fwrite($myfile, $state);
        $city = 'City = '.$_SESSION['city_ec']."\r\n";   //city
        fwrite($myfile, $city);
        $zipcode = 'Zip Code = '.$_SESSION['zipcode_ec']."\r\n";   //zip code
        fwrite($myfile, $zipcode);
        $street_address = 'Street Address = '.$_SESSION['address_ec']."\r\n";   //street address
        fwrite($myfile, $street_address);
        $address2_apt = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['apt_ec']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $address2_apt);
        $department = 'Department = '.$_SESSION['dept_ec']."\r\n";   //department
        fwrite($myfile, $department);
        $email = 'Email = '.$_SESSION['email_ec']."\r\n";   //email
        fwrite($myfile, $email);
        $pickupdate = 'Pickup Date = '.$_SESSION['pickupdate']."\r\n";   //Pickup Date
        fwrite($myfile, $pickupdate);
        $pickuptime = 'Pickup Time = '.$_SESSION['pickuptime']."\r\n";   //Pickup Time
        fwrite($myfile, $pickuptime);
        $residential_add = 'Residential Address? = '.$_SESSION['resAdd_ec']."\r\n";   //residential address
        fwrite($myfile, $residential_add);
        $package_upd8 = 'Package Updates? = '.$_SESSION['pkg_update_ec']."\r\n\r\n\r\n";   //Package updates
        fwrite($myfile, $package_upd8);


        //Return Address - EC (Express Courier)
        'RETURN ADDRESS'."\r\n"
        $name_reAdd = 'Name = '.$_SESSION['name_ec_ra']."\r\n";   //name
        fwrite($myfile, $name_reAdd);
        $contactname_reAdd = 'Contact Name = '.$_SESSION['contactname_ec_ra']."\r\n";    //contact name
        fwrite($myfile, $contactname_reAdd);
        $gender = 'Gender = '.$_SESSION['gender_ec_ra']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title_reAdd = 'Title = '.$_SESSION['title_ec_ra']."\r\n";   //title
        fwrite($myfile, $title_reAdd);
        $phone_reAdd = 'Phone = '.$_SESSION['phone_ec_ra']."\r\n";   //phone
        fwrite($myfile, $phone_reAdd);
        $country_reAdd = 'Country = '.$_SESSION['country_ec_ra']."\r\n";   //country
        fwrite($myfile, $country_reAdd);
        $state_reAdd = 'State = '.$_SESSION['state_ec_ra']."\r\n";   //state
        fwrite($myfile, $state_reAdd);
        $city_reAdd = 'City = '.$_SESSION['city_ec_ra']."\r\n";   //city
        fwrite($myfile, $city_reAdd);
        $zipcode_reAdd = 'Zip Code = '.$_SESSION['zipcode_ec_ra']."\r\n";   //zip code
        fwrite($myfile, $zipcode_reAdd);
        $street_reAddress = 'Street Address = '.$_SESSION['address_ec_ra']."\r\n";   //street address
        fwrite($myfile, $street_reAddress);
        $readdress2_apt = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['apt_ec_ra']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $readdress2_apt);
        $department_reAdd = 'Department = '.$_SESSION['dept_ec_ra']."\r\n";   //department
        fwrite($myfile, $department_reAdd);
        $email_reAdd = 'Email = '.$_SESSION['email_ec_ra']."\r\n";   //email
        fwrite($myfile, $email_reAdd);
        $residential_reAdd = 'Residential Address? = '.$_SESSION['resAdd_ec']."\r\n";   //residential address
        fwrite($myfile, $residential_reAdd);
        $notify = 'Notify of return? = '.$_SESSION['notify_ec']."\r\n\r\n\r\n";   //status updates
        fwrite($myfile, $notify);


        //Package Destination - EC (Express Courier)
        'PACKAGE DESTINATION'."\r\n"
        $name_dest = 'Name = '.$_SESSION['name_ec_dest']."\r\n";   //name
        fwrite($myfile, $name_dest);
        $contactname_dest = 'Contact Name = '.$_SESSION['contactname_ec_dest']."\r\n";    //contact name
        fwrite($myfile, $contactname_dest);
        $gender = 'Gender = '.$_SESSION['gender_ec_dest']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title_dest = 'Title = '.$_SESSION['title_ec_dest']."\r\n";   //title
        fwrite($myfile, $title_dest);
        $phone_dest = 'Phone = '.$_SESSION['phone_ec_dest']."\r\n";   //phone
        fwrite($myfile, $phone_dest);
        $country_dest = 'Country = '.$_SESSION['country_ec_dest']."\r\n";   //country
        fwrite($myfile, $country_dest);
        $state_dest = 'State = '.$_SESSION['state_ec_dest']."\r\n";   //state
        fwrite($myfile, $state_dest);
        $city_dest = 'City = '.$_SESSION['city_ec_dest']."\r\n";   //city
        fwrite($myfile, $city_dest);
        $zipcode_dest = 'Zip Code = '.$_SESSION['zipcode_ec_dest']."\r\n";   //zip code
        fwrite($myfile, $zipcode_dest);
        $streetadd_dest = 'Street Address = '.$_SESSION['address_ec_dest']."\r\n";   //street address
        fwrite($myfile, $streetadd_dest);
        $streetadd2_dest = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['apt_ec_dest']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $streetadd2_dest);
        $department_dest = 'Department = '.$_SESSION['dept_ec_dest']."\r\n";   //department
        fwrite($myfile, $department_dest);
        $email_dest = 'Email = '.$_SESSION['email_dest']."\r\n";   //email
        fwrite($myfile, $email_dest);
        $residential_dest = 'Residential Address? = '.$_SESSION['resadd_dest']."\r\n";   //residential address
        fwrite($myfile, $residential_dest);
        $notify_receiver = 'Notify Receiver? = '.$_SESSION['notify_dest']."\r\n\r\n\r\n";   //status updates
        fwrite($myfile, $notify_receiver);


        //Package Dimensions - EC (Express Courier)
        'PACKAGE DIMENSIONS'."\r\n"
        $weight = 'Weight = '.$_SESSION['weight']."\r\n";   //weight
        fwrite($myfile, $weight);
        $length = 'Length = '.$_SESSION['length']."\r\n";    //length
        fwrite($myfile, $length);
        $width = 'Width = '.$_SESSION['width']."\r\n";   //width
        fwrite($myfile, $width);
        $height = 'Height = '.$_SESSION['height']."\r\n";   //height
        fwrite($myfile, $height);
        $worth = 'Shipment Worth = '.$_SESSION['worth']."\r\n";   //worth
        fwrite($myfile, $worth);
        $delivery_option = 'Delivery Type = '.$_SESSION['delivery_options']."\r\n";   //delivery options
        fwrite($myfile, $delivery_option);
        $package_description = 'Package Description = '.$_SESSION['pkg_descr']."\r\n";   //package description
        fwrite($myfile, $package_description);

        fclose($myfile);
    }

    // echo 'Data has been saved successfully.';
    header ("Location: attach-ec.php");
?>
