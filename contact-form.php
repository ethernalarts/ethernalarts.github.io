
<?php
    //let's start the session
    session_start();

    // Initialize variables to null.

    if(isset($_POST['firstname']))
      $_SESSION['firstname']=$_POST['firstname'];
    if(isset($_POST['lastname']))
      $_SESSION['lastname']=$_POST['lastname'];
    if(isset($_POST['title']))
      $_SESSION['title']=$_POST['title'];
    if(isset($_POST['email']))
      $_SESSION['email']=$_POST['email'];
    if(isset($_POST['phone']))
      $_SESSION['phone']=$_POST['phone'];
    if(isset($_POST['subject']))
      $_SESSION['subject']=$_POST['subject'];
    if(isset($_POST['message']))
      $_SESSION['message']=$_POST['message'];

    $firstname =""; // Sender First Name
    $lastname =""; // Sender Last Name
    $title ="";   // Title
    $email =""; // Sender's email ID
    $phone =""; // Sender's phone number
    $subject =""; // Subject of mail
    $message =""; // Sender's Message

    $firstnameError ="";
    $lastnameError ="";
    $titleError ="";
    $emailError ="";
    $phoneError ="";
    $subjectError ="";
    $messageError ="";
    $successMessage =""; // On submitting form below function will execute.

    if(isset($_POST['submit'])) { // Checking null values in message.
      if (empty($_POST["firstname"])){
        $firstnameError = "First Name is required";
      }
      else
      {
        $firstname = test_input($_POST["firstname"]); // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
        {
          $firstnameError = "Only letters and white space allowed";
        }
      } // Checking null values in the message.

      if (empty($_POST["lastname"])){
        $lastnameError = "Last Name is required";
      }
      else
      {
        $lastname = test_input($_POST["lastname"]); // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
        {
          $lastnameError = "Only letters and white space allowed";
        }
      } // Checking null values in the message.

      if (empty($_POST["title"])){
        $titleError = "Title is required";
      }
      else
      {
        $title = test_input($_POST["title"]); // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$title))
        {
          $titleError = "Only letters and white space allowed";
        }
      } // Checking null values in the message.

      if (empty($_POST["phone"])){
        $phoneError = "Phone Number is required";
      }
      else
      {
        $phone = test_input($_POST["phone"]); // check name only contains letters and whitespace
        if (!preg_match("/^[0-9]*$/",$phone))
        {
          $phoneError = "Only numbers are allowed";
        }
      } // Checking null values in the message.

      if (empty($_POST["email"]))
      {
        $emailError = "Email is required";
      }
      else
      {
        $email = test_input($_POST["email"]);
      } // Checking null values in message.

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

      if( !($firstname=='') && !($lastname=='') && !($title=='') && !($phone=='') && !($email=='') && !($subject=='') && !($message=='') )
      { // Checking valid email.
        if (preg_match("/([w-]+@[w-]+.[w-]+)/",$email))
        {
          $header= $firstname." ".$lastname."<". $email .">";
          $headers = "VLink Express Courier"; /* Let's prepare the message for the e-mail */
          $msg = "Hello $title $firstname $lastname! Thank you for contacting us.
          First Name: $firstname
          Last Name: $lastname
          Title: $title
          Phone: $phone
          E-mail: $email
          Purpose: $subject
          Message: $message
          This is a Contact Confirmation mail. We will get back to you as soon as possible.";

          $msg1 = "$title $firstname $lastname Contacted Us. Here is some information about the client.
          First Name: $firstname
          Last Name: $lastname
          Title: $title
          Phone: $phone
          E-mail: $email
          Purpose: $subject
          Message: $message "; /* Send the message using mail() function */
          if(mail($email, $headers, $msg ) && mail("pnnwokoro@gmail.com", $header, $msg1 ))
          {
            $successMessage = print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-success.php\">";
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
