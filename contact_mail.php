<?php

if (isset($_POST['submit'])) {
    $to = "ssoil.mills@ssgroup.pk"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "SS Group Contact Query";
    $message = $first_name . "  wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    } else {
        echo "Mail Not Sent";
        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");
    }
    mail($from, $subject, $message2, $headers2); // sends a copy of the message to the sender

}
?>
