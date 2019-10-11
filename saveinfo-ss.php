<?php
    session_start();

    if (isset($_POST['submit']))
    {
        $myfile = fopen(__DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "SS-quote.txt", "w") or die("Unable to open file");

        $h1 = 'NEW SECURE STORAGE ORDER!'."\r\n\r\n";
        fwrite($myfile, $h1);

        //Basic Information
        $origin = 'BASIC INFORMATION'."\r\n";
        fwrite($myfile, $origin);

        $name = 'Name = '.$_SESSION['name_ss']."\r\n";   //name
        fwrite($myfile, $name);
        $contactname = 'Contact Name = '.$_SESSION['contactname_ss']."\r\n";    //contact name
        fwrite($myfile, $contactname);
        $gender = 'Gender = '.$_SESSION['gender_ss']."\r\n";   //gender
        fwrite($myfile, $gender);
        $title = 'Title = '.$_SESSION['title_ss']."\r\n";   //title
        fwrite($myfile, $title);
        $phone = 'Phone = '.$_SESSION['phone_ss']."\r\n";   //phone
        fwrite($myfile, $phone);
        $age = 'Age = '.$_SESSION['age_ss']."\r\n";   //Age
        fwrite($myfile, $age);
        $occupation = 'Occupation = '.$_SESSION['occupation_ss']."\r\n";   //Occupation
        fwrite($myfile, $occupation);
        $country = 'Country = '.$_SESSION['country_ss']."\r\n";   //country
        fwrite($myfile, $country);
        $state = 'State = '.$_SESSION['state_ss']."\r\n";   //state
        fwrite($myfile, $state);
        $city = 'City = '.$_SESSION['city_ss']."\r\n";   //city
        fwrite($myfile, $city);
        $zipcode = 'Zip Code = '.$_SESSION['zipcode_ss']."\r\n";   //zip code
        fwrite($myfile, $zipcode);
        $street_address = 'Street Address = '.$_SESSION['address_ss']."\r\n";   //street address
        fwrite($myfile, $street_address);
        $address2_apt = 'Street Address 2/Apartment, Suite, Floor etc = '.$_SESSION['apt_ss']."\r\n";   //Apartment, Suite, Floor etc
        fwrite($myfile, $address2_apt);
        $department = 'Department = '.$_SESSION['dept_ss']."\r\n";   //department
        fwrite($myfile, $department);
        $email = 'Email = '.$_SESSION['email_ss']."\r\n";   //email
        fwrite($myfile, $email);
        $residential_add = 'Residential Address? = '.$_SESSION['resAdd_ss']."\r\n";   //residential address
        fwrite($myfile, $residential_add);
        $package_upd8 = 'Item status updates? = '.$_SESSION['item_update_ss']."\r\n\r\n\r\n";   //Package updates
        fwrite($myfile, $package_upd8);


        //Item Details
        $dimensions = 'ITEM DETAILS'."\r\n\r\n";
        fwrite($myfile, $dimensions);

        $firstitem = '1ST ITEM DETAILS:'."\r\n";
        fwrite($myfile, $firstitem);
        $storage_option = 'Storage option = '.$_SESSION['storage_type_ss']."\r\n";   //storage option
        fwrite($myfile, $storage_option);
        $item_type = 'Item Type = '.$_SESSION['item_type_ss']."\r\n";   //item type
        fwrite($myfile, $item_type);
        $worth = 'Item Worth = '.$_SESSION['worth_ss']."\r\n";   //worth
        fwrite($myfile, $worth);
        $type_other = 'Item Type (other) = '.$_SESSION['other_ss']."\r\n";   //other
        fwrite($myfile, $type_other);
        $duration = 'Storage Duration = '.$_SESSION['duration_ss']."\r\n";   //duration
        fwrite($myfile, $duration);
        $weight = 'Weight (inches) = '.$_SESSION['weight_ss']."\r\n";   //weight
        fwrite($myfile, $weight);
        $length = 'Length (inches) = '.$_SESSION['length_ss']."\r\n";    //length
        fwrite($myfile, $length);
        $width = 'Width (inches)= '.$_SESSION['width_ss']."\r\n";   //width
        fwrite($myfile, $width);
        $colour = 'Colour = '.$_SESSION['colour_ss']."\r\n";   //colour
        fwrite($myfile, $colour);
        $height = 'Height (inches)= '.$_SESSION['height_ss']."\r\n";   //height
        fwrite($myfile, $height);
        $package_description = 'Item Description = '.$_SESSION['item_descr_ss']."\r\n\r\n";   //package description
        fwrite($myfile, $package_description);


        $seconditem = '2ND ITEM DETAILS:'."\r\n";
        fwrite($myfile, $seconditem);
        $storage_option = 'Storage option = '.$_SESSION['storage_type_ss_2']."\r\n";   //storage option
        fwrite($myfile, $storage_option);
        $item_type = 'Item Type = '.$_SESSION['item_type_ss_2']."\r\n";   //item type
        fwrite($myfile, $item_type);
        $worth = 'Item Worth = '.$_SESSION['worth_ss_2']."\r\n";   //worth
        fwrite($myfile, $worth);
        $type_other = 'Item Type (other) = '.$_SESSION['other_ss_2']."\r\n";   //other
        fwrite($myfile, $type_other);
        $duration = 'Storage Duration = '.$_SESSION['duration_ss_2']."\r\n";   //duration
        fwrite($myfile, $duration);
        $weight = 'Weight (inches) = '.$_SESSION['weight_ss_2']."\r\n";   //weight
        fwrite($myfile, $weight);
        $length = 'Length (inches) = '.$_SESSION['length_ss_2']."\r\n";    //length
        fwrite($myfile, $length);
        $width = 'Width (inches)= '.$_SESSION['width_ss_2']."\r\n";   //width
        fwrite($myfile, $width);
        $colour = 'Colour = '.$_SESSION['colour_ss_2']."\r\n";   //colour
        fwrite($myfile, $colour);
        $height = 'Height (inches)= '.$_SESSION['height_ss_2']."\r\n";   //height
        fwrite($myfile, $height);
        $item_description = 'Item Description = '.$_SESSION['item_descr_ss_2']."\r\n\r\n";   //item description
        fwrite($myfile, $item_description);


        $thirditem = '3RD ITEM DETAILS:'."\r\n";
        fwrite($myfile, $thirditem);
        $storage_option = 'Storage option = '.$_SESSION['storage_type_ss_3']."\r\n";   //storage option
        fwrite($myfile, $storage_option);
        $item_type = 'Item Type = '.$_SESSION['item_type_ss_3']."\r\n";   //item type
        fwrite($myfile, $item_type);
        $worth = 'Item Worth = '.$_SESSION['worth_ss_3']."\r\n";   //worth
        fwrite($myfile, $worth);
        $type_other = 'Item Type (other) = '.$_SESSION['other_ss_3']."\r\n";   //other
        fwrite($myfile, $type_other);
        $duration = 'Storage Duration = '.$_SESSION['duration_ss_3']."\r\n";   //duration
        fwrite($myfile, $duration);
        $weight = 'Weight (inches) = '.$_SESSION['weight_ss_3']."\r\n";   //weight
        fwrite($myfile, $weight);
        $length = 'Length (inches) = '.$_SESSION['length_ss_3']."\r\n";    //length
        fwrite($myfile, $length);
        $width = 'Width (inches)= '.$_SESSION['width_ss_3']."\r\n";   //width
        fwrite($myfile, $width);
        $colour = 'Colour = '.$_SESSION['colour_ss_3']."\r\n";   //colour
        fwrite($myfile, $colour);
        $height = 'Height (inches)= '.$_SESSION['height_ss_3']."\r\n";   //height
        fwrite($myfile, $height);
        $item_description = 'Item Description = '.$_SESSION['item_descr_ss_3']."\r\n\r\n";   //item description
        fwrite($myfile, $item_description);


        $fourthitem = '4TH ITEM DETAILS:'."\r\n";
        fwrite($myfile, $fourthitem);
        $storage_option = 'Storage option = '.$_SESSION['storage_type_ss_4']."\r\n";   //storage option
        fwrite($myfile, $storage_option);
        $item_type = 'Item Type = '.$_SESSION['item_type_ss_4']."\r\n";   //item type
        fwrite($myfile, $item_type);
        $worth = 'Item Worth = '.$_SESSION['worth_ss_4']."\r\n";   //worth
        fwrite($myfile, $worth);
        $type_other = 'Item Type (other) = '.$_SESSION['other_ss_4']."\r\n";   //other
        fwrite($myfile, $type_other);
        $duration = 'Storage Duration = '.$_SESSION['duration_ss_4']."\r\n";   //duration
        fwrite($myfile, $duration);
        $weight = 'Weight (inches) = '.$_SESSION['weight_ss_4']."\r\n";   //weight
        fwrite($myfile, $weight);
        $length = 'Length (inches) = '.$_SESSION['length_ss_4']."\r\n";    //length
        fwrite($myfile, $length);
        $width = 'Width (inches)= '.$_SESSION['width_ss_4']."\r\n";   //width
        fwrite($myfile, $width);
        $colour = 'Colour = '.$_SESSION['colour_ss_4']."\r\n";   //colour
        fwrite($myfile, $colour);
        $height = 'Height (inches)= '.$_SESSION['height_ss_4']."\r\n";   //height
        fwrite($myfile, $height);
        $item_description = 'Item Description = '.$_SESSION['item_descr_ss_4']."\r\n\r\n";   //item description
        fwrite($myfile, $item_description);

        fclose($myfile);
    }

    // echo 'Data has been saved successfully.';
    header("Location: attach-ss.php");
?>
