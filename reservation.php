
<?php

/* Enter your recieving email and the "do not reply" email for the automated copy that goes to the requesting person */
$recipient_email = "youremail@YOURWEBSITE.com";
$donotreply_email = "DoNotReply@YOURWEBSITE.com";

/* For each form field you setup in the reservation.xml you have to add a variable according to the fieldvar attribute */
$datevar = $_REQUEST['datevar'];
$timevar = $_REQUEST['timevar'];
$guestsvar = $_REQUEST['guestsvar'];
$occasionvar = $_REQUEST['occasionvar'];
$firstnamevar = $_REQUEST['firstnamevar'];
$lastnamevar = $_REQUEST['lastnamevar'];
$streetvar = $_REQUEST['streetvar'];
$cityvar = $_REQUEST['cityvar'];
$postalvar = $_REQUEST['postalvar'];
$phonevar = $_REQUEST['phonevar'];
$emailvar = $_REQUEST['emailvar'];
$mobilevar = $_REQUEST['mobilevar'];

/* Subject of the email YOU recieve */
$subject = 'Table Reservation Email from ' . $lastnamevar;

/* Subject of the email the CUSTOMER recieves */
$subjectnoreply = 'You reserved a table on YOURWEBSITE.com';

/* Header of the email YOU recieve */
$header = "From: $recipient_email\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=utf-8\n";

/* Header of the email the CUSTOMER recieves */
$headernoreply = "From: $donotreply_email\nReply-To: $donotreply_email" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=utf-8\n";

/* The email the YOU recieve (you need to list the field value in the body text of the email) */
$forwardingmessage = "You recieved a table reservation request from $firstnamevar $lastnamevar

--------------------------------------------------
Date: $datevar
Time: $timevar
Guests: $guestsvar
Occasion: $occasionvar
First Name: $firstnamevar
Last Name: $lastnamevar
Street: $streetvar
City: $cityvar
Postal Code: $postalvar
Phone: $phonevar
Email: $emailvar
Mobile: $mobilevar
--------------------------------------------------

end of message";

/* The email the CUSTOMER recieves you also need to add the variables like above */
$replymessage = "Hello $firstnamevar $lastnamevar

Thank you for your reservation request.

We will follow up shortly.

Please DO NOT reply to this email.

Below is a copy of the reservation request you submitted:
--------------------------------------------------
Date: $datevar
Time: $timevar
Guests: $guestsvar
Occasion: $occasionvar
First Name: $firstnamevar
Last Name: $lastnamevar
Street: $streetvar
City: $cityvar
Postal Code: $postalvar
Phone: $phonevar
Email: $emailvar
Mobile: $mobilevar
--------------------------------------------------

Best regards
YOURWEBSITE.com";

mail($recipient_email,$subject,$forwardingmessage,$header);
mail($emailvar,$subjectnoreply,$replymessage,$headernoreply);

?>

