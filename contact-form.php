
<?php // Initialize variables to null.
    $name =""; // Sender Name
    $email =""; // Sender's email ID
    $phone =""; // Sender's phone number
    $subject =""; // Subject of mail
    $message =""; // Sender's Message

    $nameError ="";
    $emailError ="";
    $phoneError ="";
    $subjectError ="";
    $messageError ="";
    $successMessage =""; // On submittingform below function will execute.

    if(isset($_POST['submit'])) { // Checking null values in message.
      if (empty($_POST["name"])){
        $nameError = "Name is required";
      }
      else
      {
        $name = test_input($_POST["name"]); // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
        {
          $nameError = "Only letters and white space allowed";
        }
      } // Checking null values inthe message.

      if (empty($_POST["email"]))
      {
        $emailError = "Email is required";
      }
      else
      {
        $email = test_input($_POST["email"]);
      } // Checking null values inmessage.

      if (empty($_POST["subject"]))
      {
        $subjectError = "Subject is required";
      }
      else
      {
        $subject = test_input($_POST["subject"]);
      } // Checking null values inmessage.

      if (empty($_POST["message"]))
      {
        $messageError = "Message is required";
      }
      else
      {
        $message = test_input($_POST["message"]);
      } // Checking null values inthe message.

      if( !($name=='') && !($email=='') && !($subject=='') &&!($message=='') )
      { // Checking valid email.
        if (preg_match("/([w-]+@[w-]+.[w-]+)/",$email))
        {
          $header= $name."<". $email .">";
          $headers = "VLink Express Courier"; /* Let's prepare the message for the e-mail */
          $msg = "Hello $name! Thank you for contacting us.
          Name: $name
          Phone: $phone
          E-mail: $email
          Purpose: $subject
          Message: $message
          This is a Contact Confirmation mail. We will get back to you as soon as possible.";

          $msg1 = "$name Contacted Us. Here is some information about $name.
          Name: $name
          Phone: $phone
          E-mail: $email
          Purpose: $subject
          Message: $message "; /* Send the message using mail() function */
          if(mail($email, $headers, $msg ) && mail("pnnwokoro@gmail.com", $header, $msg1 ))
          {
            $successMessage = print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-success.html\">";
          }
        }
        else
        {
          $emailError = print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.html\">";
        }
       }
    } // Function for filtering input values.

    function test_input($data)
    {
      $data = trim($data);
      $data =stripslashes($data);
      $data =htmlspecialchars($data);
      return $data;
    }
?>
