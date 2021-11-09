<?php
if(isset($_POST[ 'submit' ]))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to="yashpatel.cse@gmail.com";
  $subject= $subject;
  $message="Name: ".$name."\n". "Message: "."\n\n".$message;
  $headers="From: ".$email;
  
  if (mail($to, $subject, $message, $headers))
  {
    echo "<h1>Sent Successfully! Thank you"." ".$name.", I will contact you soon! </h1>";

  }
  else{
    echo "Something went wrong!":
  }
}
?>