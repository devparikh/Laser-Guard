<?php

if (isset($_POST['name'])) && isset(($_POST['email'])) {


    echo "error, you need to submit the form"

}
$order = $_POST['Items']
$name = $_POST['First Name'];
$to = 'chauhanvansh555@gmail.com'
$subject = 'Laser Guard 1 Order';
$fields = array('First Name' => 'Name', 'subject' => 'Subject', 'email' => 'Email', 'message' => 'Message');

$email_from = $_POST['First Name']

	$email_subject = "New  order Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".


mail($to,$email_subject,$name,$order);


?>