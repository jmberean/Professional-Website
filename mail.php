<?php

$result = false;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['subject'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "jmberean@gmail.com";
    $mailheader = "From: $email \r\n";
    $result = mail($recipient, $subject, $content, $mailheader);

}

session_start();

if($result == true) {
    $_SESSION['message']= "Message sent!";
} else {
    $msg = "Message could not be sent. Please go back and try again or email me directly!"
    die($msg);
    $_SESSION['message']= $msg;
}

header("location:contact.php");

?>