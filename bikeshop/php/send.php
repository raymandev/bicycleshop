<?php

$name=$_POST['name'];
$email=$_post['email'];
$message=$_post['message'];
$to='natalyramones@gmail.com';
$title='BIKESHOP WEBSITE enquiry';
$header='From: ' . $email;
$msgMail="Name $name\n Email:$email\n message: \n $message";

if($_POST['submit']){
	
	
	if(mail($to, $title,$msgMail,$header)){
		
		echo"<script language='javascript'>
		
		alert('Your message has been sent, Thanks.');
		
		window.location.href= 'http://www.holmesglen.edu.au';
		</script>";
	} else {
		echo"There is something wrong";
	}
	
	
}


?>