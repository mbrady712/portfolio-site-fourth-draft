<?php 
if(isset($_POST['submit'])){
    $to = "michaelbrady712@gmail.com"; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$subject = "Form Submission";
	$text = "Someone filled out your contact form.
		\nName: " . $name . 
		"\nEmail: " . $email .
		"\nMessage: " . $message;
    $headers = 'From: michaelbrady712@example.com' . "\r\n" .
    'Reply-To: michaelbrady712@example.com' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to,$subject,$text,$headers);
    header("Location: index.html#contact");
    }
?>
