<?php
    session_start();

    //recipient
    $to = 'pnnwokoro@gmail.com';

    //sender
    $sender = $_SESSION['email_ss'];
    $senderName = $_SESSION['name_ss'];

    //email subject
    $subject = 'New Domestic Shipping Order';

    //attachment file path
    $file = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "SS-quote.txt";

    //email body content
    $htmlContent = '<h1>Secure Storage Quote Request</h1>
        <p>
          Hi. Please find attached my details for an item(s) for Secure Storage.
          I await your response with an invoice.
          Thank you.
        </p>';

    //header for sender info
    $headers = "From: $senderName"." <".$sender.">";

    //boundary
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    //headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    //multipart boundary
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

    //preparing attachment
    if(!empty($file) > 0){
        if(is_file($file)){
            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file,"rb");
            $data =  @fread($fp,filesize($file));

            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
            "Content-Description: ".basename($file)."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $sender;

    //send email
    $mail = @mail($to, $subject, $message, $headers, $returnpath);

    //email sending status
    // echo $mail?"<h1>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";

    if ($mail) {
        print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-ss-success.html\">";
    }
    else {
        print "<meta http-equiv=\"refresh\" content=\"0;URL=quote-ss-error.html\">";
        // die("Sorry but the email could not be sent. Please go back and try again!");
    }
?>
