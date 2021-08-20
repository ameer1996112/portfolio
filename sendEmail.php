
<?php
    $to=$_POST["email"];
	$subject="Verify Code:";
  $message="Your Verify Code:"$_POST["code"];
    $headers = 'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
	?>
