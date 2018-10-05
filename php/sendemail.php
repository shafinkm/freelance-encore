<?php
//if "email" variable is filled out, send email
  
  
  //Email information
  //$admin_email = "nafiskeshwani@outlook.com";
  $admin_email = "info@cloughenercore.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $comment = $_REQUEST['message'];
  // Always set content-type when sending HTML email


$header = 'From:web@fidatotech.ca'."\r\n";
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n"; 



$body = "Name ".$name."<br>";
$body.= "Email ".$email."<br>";
$body.= "Message ".$comment."<br>";



//echo $body;

mail($admin_email,"Contact Form  - Clough Enercore Website",$body, $header,'-finfo@cloughenercore.com');  
//  return sucess; 

  

  
  
?>