<?php
    session_start();

    if (isset($_POST['submit']))
    {
        $myfile = fopen("data\IS-quote.txt", "w") or die("Unable to open file");

        $h1 = 'NEW INTERNATIONAL SHIPPING ORDER!'."\r\n\r\n";
        fwrite($myfile, $h1);

        //Shipment Origin - IS (International Shipping)
        $origin = 'SHIPMENT ORIGIN'."\r\n";
        fwrite($myfile, $origin);

        $name = 'Name = '.$_SESSION['name']."\r\n";   //name
        fwrite($myfile, $name);
        $contactname = 'Contact Name = '.$_SESSION['contact_name']."\r\n";    //contact name
        fwrite($myfile, $contactname);
        $gender = 'Gender = '.$_SESSION['gender']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title = 'Title = '.$_SESSION['title']."\r\n";   //title
        fwrite($myfile, $title);
        $country_code = 'Country Code = '.$_SESSION['countryCode']."\r\n";   //country code
        fwrite($myfile, $country_code);
        $phone = 'Phone = '.$_SESSION['phone']."\r\n";   //phone
        fwrite($myfile, $phone);
        $country = 'Country = '.$_SESSION['country']."\r\n";   //country
        fwrite($myfile, $country);
        $state = 'State = '.$_SESSION['state']."\r\n";   //state
        fwrite($myfile, $state);
        $city = 'City = '.$_SESSION['city']."\r\n";   //city
        fwrite($myfile, $city);
        $zipcode = 'Zip Code = '.$_SESSION['zip_code']."\r\n";   //zip code
        fwrite($myfile, $zipcode);
        $street_address = 'Street Address = '.$_SESSION['street_add']."\r\n";   //street address
        fwrite($myfile, $street_address);
        $address2_apt = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['street_add2']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $address2_apt);
        $shippingoption = 'Shipping Option = '.$_SESSION['shipping_options']."\r\n";   //Shipping Options
        fwrite($myfile, $shippingoption);
        $department = 'Department = '.$_SESSION['department']."\r\n";   //department
        fwrite($myfile, $department);
        $email = 'Email = '.$_SESSION['email']."\r\n";   //email
        fwrite($myfile, $email);
        $residential_add = 'Residential Address? = '.$_SESSION['residential_add']."\r\n";   //residential address
        fwrite($myfile, $residential_add);
        $status_update = 'Status Updates? = '.$_SESSION['status_updates']."\r\n\r\n\r\n";   //status updates
        fwrite($myfile, $status_update);


        //Return Address - IS (International Shipping)
        $return = 'RETURN ADDRESS'."\r\n";
        fwrite($myfile, $return);

        $name_reAdd = 'Name = '.$_SESSION['name_reAdd']."\r\n";   //name
        fwrite($myfile, $name_reAdd);
        $contactname_reAdd = 'Contact Name = '.$_SESSION['contact_name_reAdd']."\r\n";    //contact name
        fwrite($myfile, $contactname_reAdd);
        $gender = 'Gender = '.$_SESSION['gender']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title_reAdd = 'Title = '.$_SESSION['title_reAdd']."\r\n";   //title
        fwrite($myfile, $title_reAdd);
        $country_code_reAdd = 'Country Code = '.$_SESSION['countryCode_reAdd']."\r\n";   //country code
        fwrite($myfile, $country_code_reAdd);
        $phone_reAdd = 'Phone = '.$_SESSION['phone_reAdd']."\r\n";   //phone
        fwrite($myfile, $phone_reAdd);
        $country_reAdd = 'Country = '.$_SESSION['country_reAdd']."\r\n";   //country
        fwrite($myfile, $country_reAdd);
        $state_reAdd = 'State = '.$_SESSION['state_reAdd']."\r\n";   //state
        fwrite($myfile, $state_reAdd);
        $city_reAdd = 'City = '.$_SESSION['city_reAdd']."\r\n";   //city
        fwrite($myfile, $city_reAdd);
        $zipcode_reAdd = 'Zip Code = '.$_SESSION['zip_code_reAdd']."\r\n";   //zip code
        fwrite($myfile, $zipcode_reAdd);
        $street_reAddress = 'Street Address = '.$_SESSION['street_add_reAdd']."\r\n";   //street address
        fwrite($myfile, $street_reAddress);
        $readdress2_apt = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['street_add2_reAdd']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $readdress2_apt);
        $department_reAdd = 'Department = '.$_SESSION['department_reAdd']."\r\n";   //department
        fwrite($myfile, $department_reAdd);
        $email_reAdd = 'Email = '.$_SESSION['email_reAdd']."\r\n";   //email
        fwrite($myfile, $email_reAdd);
        $residential_reAdd = 'Residential Address? = '.$_SESSION['residential_reAdd']."\r\n";   //residential address
        fwrite($myfile, $residential_reAdd);
        $notify = 'Notify of return? = '.$_SESSION['notify']."\r\n\r\n\r\n";   //status updates
        fwrite($myfile, $notify);


        //Shipment Destination - IS (International Shipping)
        $dest = 'SHIPMENT DESTINATION'."\r\n";
        fwrite($myfile, $dest);

        $name_dest = 'Name = '.$_SESSION['name_dest']."\r\n";   //name
        fwrite($myfile, $name_dest);
        $contactname_dest = 'Contact Name = '.$_SESSION['contact_name_dest']."\r\n";    //contact name
        fwrite($myfile, $contactname_dest);
        $gender = 'Gender = '.$_SESSION['gender']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title_dest = 'Title = '.$_SESSION['title_dest']."\r\n";   //title
        fwrite($myfile, $title_dest);
        $country_code_dest = 'Country Code = '.$_SESSION['countryCode_dest']."\r\n";   //country code
        fwrite($myfile, $country_code_dest);
        $phone_dest = 'Phone = '.$_SESSION['phone_dest']."\r\n";   //phone
        fwrite($myfile, $phone_dest);
        $country_dest = 'Country = '.$_SESSION['country_dest']."\r\n";   //country
        fwrite($myfile, $country_dest);
        $state_dest = 'State = '.$_SESSION['state_dest']."\r\n";   //state
        fwrite($myfile, $state_dest);
        $city_dest = 'City = '.$_SESSION['city_dest']."\r\n";   //city
        fwrite($myfile, $city_dest);
        $zipcode_dest = 'Zip Code = '.$_SESSION['zip_code_dest']."\r\n";   //zip code
        fwrite($myfile, $zipcode_dest);
        $streetadd_dest = 'Street Address = '.$_SESSION['street_add_dest']."\r\n";   //street address
        fwrite($myfile, $streetadd_dest);
        $streetadd2_dest = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['street_add2_dest']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $streetadd2_dest);
        $department_dest = 'Department = '.$_SESSION['department_dest']."\r\n";   //department
        fwrite($myfile, $department_dest);
        $email_dest = 'Email = '.$_SESSION['email_dest']."\r\n";   //email
        fwrite($myfile, $email_dest);
        $residential_dest = 'Residential Address? = '.$_SESSION['residential_add_dest']."\r\n";   //residential address
        fwrite($myfile, $residential_dest);
        $notify_receiver = 'Notify of return? = '.$_SESSION['notify_dest']."\r\n\r\n\r\n";   //status updates
        fwrite($myfile, $notify_receiver);


        //Shipment Dimensions - IS (International Shipping)
        $dimensions = 'SHIPMENT DIMENSIONS'."\r\n";
        fwrite($myfile, $dimensions);

        $weight = 'Weight = '.$_SESSION['weight']."\r\n";   //name
        fwrite($myfile, $weight);
        $length = 'Length = '.$_SESSION['length']."\r\n";    //contact name
        fwrite($myfile, $length);
        $width = 'Width = '.$_SESSION['width']."\r\n";   //gender
        fwrite($myfile, $width);
        $height = 'Height = '.$_SESSION['height']."\r\n";   //title
        fwrite($myfile, $height);
        $worth = 'Shipment Worth = '.$_SESSION['worth']."\r\n";   //country code
        fwrite($myfile, $worth);
        $package_type = 'Package Type = '.$_SESSION['package_type']."\r\n";   //phone
        fwrite($myfile, $package_type);
        $shipment_description = 'Shipment Description = '.$_SESSION['shipment_description']."\r\n";   //country
        fwrite($myfile, $shipment_description);

        fclose($myfile);
    }

    // Sending email
    if(mail($to, $subject, $message, $headers)){
        // echo 'Your mail has been sent successfully.';
        print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-is-final.html\">";
    } else{
        echo 'Unable to send email. Please try again.';
    }

    // echo 'Data has been saved successfully.';
    include('attach-is.php');
?>
