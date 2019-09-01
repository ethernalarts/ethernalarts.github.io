<?php
    session_start();

    $to = 'pnnwokoro@gmail.com';
    $subject = 'New Order - International Shipping!';
    $from = $_SESSION['email'];
    $name = $_SESSION['name'];
    $country = $_SESSION['country'];
    $country_dest = $_SESSION['$country_dest'];

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
    $message .= '<p style="color:#080;font-size:18px;">You have a new International Shipping Order. "<br>".
                Client: '$name'."<br>"
                Shipment Origin: '$country'."<br>"
                Shipment Destination: '$country_dest'."<br><br>"
                Please connect to your database to view this order.</p>';
    $message .= '</body></html>';

    // Sending email
    if(mail($to, $subject, $message, $headers)){
        // echo 'Your mail has been sent successfully.';
        print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-is-final.html\">";
    } else{
        echo 'Unable to send email. Please try again.';
    }
?>
