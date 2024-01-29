<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $msg = $_POST["msg"];

    $to = "sowmipavi02@gmail.com";
    $subject = "portfolio";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone number: $number\n";
    $message .= "Message: $msg\n";
    
    mail($to, $subject, $message);

    echo "<p>Messsage is sent successfully!!</p>";
 }
?>
action="process_form.php"