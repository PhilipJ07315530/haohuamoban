<?php

/* Enter your recieving email and the "do not reply" email for the automated copy that goes to the requesting person */
$recipient_email = "youremail@YOURWEBSITE.com";
$donotreply_email = "DoNotReply@YOURWEBSITE.com";

$your_name = $_REQUEST['nametxt'];
$email = $_REQUEST['emailtxt'];
$message = $_REQUEST['messagetxt'];

/* Subject of the email YOU recieve */
$subject = 'Contact form email from ' . $your_name;

/* Subject of the email the CUSTOMER recieves */
$subjectnoreply = 'You send a request via YOURWEBSITE.com';

/* Header of the email YOU recieve */
$header = "From: $recipient_email\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=utf-8\n";

/* Header of the email the CUSTOMER recieves */
$headernoreply = "From: $donotreply_email\nReply-To: $donotreply_email" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=utf-8\n";

/* The email you recieve */
$forwardingmessage = "$me

Has received the below message:

--------------------------------------------------
Name: $your_name
Email: $email

Message:

$message

--------------------------------------------------

end of message";

/* The email the CUSTOMER recieves */
$replymessage = "Hi $your_name

Thank you for your email.

We will follow up shortly.

Please DO NOT reply to this email.

Below is a copy of the message you submitted:

--------------------------------------------------
Name: $your_name
Email: $email

Message:

$message

--------------------------------------------------

Best regards
YOURWEBSITE.com";

mail($recipient_email,$subject,$forwardingmessage,$header);
mail($email,$subjectnoreply,$replymessage,$headernoreply);

?>