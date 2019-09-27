<?php
    session_start();

    $to = 'pnnwokoro@gmail.com';
    $subject = 'New Order - Express Courier';
    $from = $_SESSION['email_ec'];
    $name = $_SESSION['name_ec'];
    $country = $_SESSION['country_ec'];
    $state = $_SESSION['state_ec'];
    $city = $_SESSION['city_ec'];
    $delivery_option = $_SESSION['delivery_options'];
    $country_dest = $_SESSION['country_ec_dest'];
    $state_dest = $_SESSION['state_ec_dest'];
    $city_dest = $_SESSION['city_ec_dest'];
    $pickupdate = $_SESSION['pickupdate'];
    $pickuptime = $_SESSION['pickuptime'];

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<h1 style="color:#f40;">VLink Express Couriers</h1>';
    $message .= '<p style="color:#080;font-size:18px;">You have a new Express Courier Order. "<br>".
                Client: '$name'."<br>"
                Package Origin: Country: '$country', State: '$state', City: '$city'."<br>"
                Delivery type: '$delivery_option'."<br>"
                pickup date: '$pickupdate'."<br>"
                pickup time: '$pickuptime'."<br>"
                Package Destination: Country: '$country_dest', State: '$state_dest', City: '$city_dest'."<br><br>"
                Please connect to your database to view the full details of this order.</p>';
    $message .= '</body></html>';

    // Sending email
    if(mail($to, $subject, $message, $headers)){
        // echo 'Your mail has been sent successfully.';
        print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-ec-final.html\">";
    } else{
        echo 'Unable to send email. Please try again.';
    }
?>
