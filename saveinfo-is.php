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
        $gender = 'Gender = '.$_SESSION['gender_dest']."\r\n";   //gender
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
        $dimensions = 'SHIPMENT DIMENSIONS'."\r\n\r\n";
        fwrite($myfile, $dimensions);

        $firstshipdeets = '1ST SHIPMENT DETAILS:'."\r\n";
        fwrite($myfile, $firstshipdeets);
        $weight = 'Weight = '.$_SESSION['weight']."\r\n";   //Name
        fwrite($myfile, $weight);
        $length = 'Length = '.$_SESSION['length']."\r\n";    //Contact name
        fwrite($myfile, $length);
        $width = 'Width = '.$_SESSION['width']."\r\n";   //Gender
        fwrite($myfile, $width);
        $height = 'Height = '.$_SESSION['height']."\r\n";   //Title
        fwrite($myfile, $height);
        $worth = 'Shipment Worth = '.$_SESSION['worth']."\r\n";   //Country code
        fwrite($myfile, $worth);
        $shipment_type = 'Shipment Type = '.$_SESSION['shipment_type']."\r\n";   //Shipment Type
        fwrite($myfile, $shipment_type);
        $other = 'Shipment Type (Other) = '.$_SESSION['other']."\r\n";   //Shipment Type (Other)
        fwrite($myfile, $other);
        $colour = 'Colour = '.$_SESSION['colour']."\r\n";   //Colour
        fwrite($myfile, $colour);
        $texture = 'Texture = '.$_SESSION['texture']."\r\n";   //Texture
        fwrite($myfile, $texture);
        $shipment_description = 'Shipment Description = '.$_SESSION['shipment_description']."\r\n\r\n";   //Shipment Description
        fwrite($myfile, $shipment_description);


        $secondshipdeets = '2ND SHIPMENT DETAILS:'."\r\n";
        fwrite($myfile, $secondshipdeets);
        $weight = 'Weight = '.$_SESSION['weight_2']."\r\n";   //Name
        fwrite($myfile, $weight);
        $length = 'Length = '.$_SESSION['length_2']."\r\n";    //Contact name
        fwrite($myfile, $length);
        $width = 'Width = '.$_SESSION['width_2']."\r\n";   //Gender
        fwrite($myfile, $width);
        $height = 'Height = '.$_SESSION['height_2']."\r\n";   //Title
        fwrite($myfile, $height);
        $worth = 'Shipment Worth = '.$_SESSION['worth_2']."\r\n";   //Country code
        fwrite($myfile, $worth);
        $shipment_type = 'Shipment Type = '.$_SESSION['shipment_type_2']."\r\n";   //Shipment Type
        fwrite($myfile, $shipment_type);
        $other = 'Shipment Type (Other) = '.$_SESSION['other_2']."\r\n";   //Shipment Type (Other)
        fwrite($myfile, $other);
        $colour = 'Colour = '.$_SESSION['colour_2']."\r\n";   //Colour
        fwrite($myfile, $colour);
        $texture = 'Texture = '.$_SESSION['texture_2']."\r\n";   //Texture
        fwrite($myfile, $texture);
        $shipment_description = 'Shipment Description = '.$_SESSION['shipment_description_2']."\r\n\r\n";   //Shipment Description
        fwrite($myfile, $shipment_description);


        $thirdshipdeets = '3RD SHIPMENT DETAILS:'."\r\n";
        fwrite($myfile, $thirdshipdeets);
        $weight = 'Weight = '.$_SESSION['weight_3']."\r\n";   //Name
        fwrite($myfile, $weight);
        $length = 'Length = '.$_SESSION['length_3']."\r\n";    //Contact name
        fwrite($myfile, $length);
        $width = 'Width = '.$_SESSION['width_3']."\r\n";   //Gender
        fwrite($myfile, $width);
        $height = 'Height = '.$_SESSION['height_3']."\r\n";   //Title
        fwrite($myfile, $height);
        $worth = 'Shipment Worth = '.$_SESSION['worth_3']."\r\n";   //Country code
        fwrite($myfile, $worth);
        $shipment_type = 'Shipment Type = '.$_SESSION['shipment_type_3']."\r\n";   //Shipment Type
        fwrite($myfile, $shipment_type);
        $other = 'Shipment Type (Other) = '.$_SESSION['other_3']."\r\n";   //Shipment Type (Other)
        fwrite($myfile, $other);
        $colour = 'Colour = '.$_SESSION['colour_3']."\r\n";   //Colour
        fwrite($myfile, $colour);
        $texture = 'Texture = '.$_SESSION['texture_3']."\r\n";   //Texture
        fwrite($myfile, $texture);
        $shipment_description = 'Shipment Description = '.$_SESSION['shipment_description_3']."\r\n\r\n";   //Shipment Description
        fwrite($myfile, $shipment_description);


        $fourthshipdeets = '4TH SHIPMENT DETAILS:'."\r\n";
        fwrite($myfile, $fourthshipdeets);
        $weight = 'Weight = '.$_SESSION['weight_4']."\r\n";   //Name
        fwrite($myfile, $weight);
        $length = 'Length = '.$_SESSION['length_4']."\r\n";    //Contact name
        fwrite($myfile, $length);
        $width = 'Width = '.$_SESSION['width_4']."\r\n";   //Gender
        fwrite($myfile, $width);
        $height = 'Height = '.$_SESSION['height_4']."\r\n";   //Title
        fwrite($myfile, $height);
        $worth = 'Shipment Worth = '.$_SESSION['worth_4']."\r\n";   //Country code
        fwrite($myfile, $worth);
        $shipment_type = 'Shipment Type = '.$_SESSION['shipment_type_4']."\r\n";   //Shipment Type
        fwrite($myfile, $shipment_type);
        $other = 'Shipment Type (Other) = '.$_SESSION['other_4']."\r\n";   //Shipment Type (Other)
        fwrite($myfile, $other);
        $colour = 'Colour = '.$_SESSION['colour_4']."\r\n";   //Colour
        fwrite($myfile, $colour);
        $texture = 'Texture = '.$_SESSION['texture_4']."\r\n";   //Texture
        fwrite($myfile, $texture);
        $shipment_description = 'Shipment Description = '.$_SESSION['shipment_description_4']."\r\n\r\n";   //Shipment Description
        fwrite($myfile, $shipment_description);

        fclose($myfile);
    }

    // echo 'Data has been saved successfully.';
    header ("Location: attach-is.php");
?>
