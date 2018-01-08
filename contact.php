<?php
if(isset($_POST['SEND'])){
	$name=$_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$to ='aman76079@gmail.com';

	$subject = 'Form Submission';
         

	$message ="Email from Eagan Business solution"."\n"."Name:".$name."\n"."Email:".$email."\n"."Subject".$subject."\n"."Message".$message;
	$headers = "Form:".$email;

	if(mail($to, $subject, $message, $headers)){
		echo 'Contact Form Submitted Successfully!<a href="http://appaddindia.com">Goto Home</a>';
	}
	
}

?>