<?php


if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}


$email_from = $visitor_email;
$email_subject = "New Message from $name";
$email_body = "You have received a new message from the user $name. \n".
"email adress: $visitor_email\n".
"Here is the message: \n $message \n";

// $to = "bragaelenaisabella@yahoo.com";
$to = "dancro1122@gmail.com";
$headers = "From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);


echo '<a href ="index.php" style="text-decoration: none; font-size: 500%;">Inapoi la prima pagina</a>';

?>