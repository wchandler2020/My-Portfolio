<?php
if(isset($_POST["submit"])){
    $fName = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $mailTo = "william.chandler21@yahoo.com";
    $headers = "From: ".$fName;
    $txt = "you have recieved an appointment request from " .$fName." ".$lemail.".\n\n".$message;

    mail($mailTo, $fName, $txt, $headers);
    header("Location: contact.html");
}
?>