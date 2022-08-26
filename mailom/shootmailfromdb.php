<html>
<?php


//if($responseKeys->success == false){
//}

//else
//{
	$nameFrom  = $_POST['name'];
	$mailFrom = $_POST['email'];

	$nameTo  = "General_Inquiry";//
	$mailTo = ""; 
	$cc = "";
	$bcc = "";
	$subject = $_POST['subject'];
	$content = $_POST['message'];;    
	$content = "Sender: ".$nameFrom." \r\nEmail: ".$mailFrom." \r\n\r\n".$content;    
	
	$charset = "UTF-8";

	$nameFrom   = "=?$charset?B?".base64_encode($nameFrom)."?=";
	$nameTo   = "=?$charset?B?".base64_encode($nameTo)."?=";
	$subject = "=?$charset?B?".base64_encode($subject)."?=";

	$header  = "Content-Type: text/plain; charset=utf-8\r\n";
	$header .= "MIME-Version: 1.0\r\n";

	$header .= "Return-Path: <". $mailFrom .">\r\n";
//	$header .= "Return-Path: Docent Web <noreply@docentcorp.com>\r\n";

//	$header .= "From: <". $mailFrom .">\r\n";
//	$header .= "From: ". $nameFrom ." <". $mailFrom .">\r\n";
	$header .= 'From: Docent Web <>' . "\r\n";	//  This acount must exist on the sending server, even though you are not using this server as a mail recipient. So, create a fake account on this server with cPanel or something. If you are sending emails to the same domain address hosted on a different mail server, you need to disable the local email delivery on the this server. Eg. change Email Routing option on cPanel from Local Mail Exchanger to Remote Mail Exchanger. Check Track Delivery on cPanel or the mail log to see where the emails went.
	
	$header .= "Reply-To: <". $mailFrom .">\r\n";
	if ($cc)  $header .= "Cc: ". $cc ."\r\n";
	if ($bcc) $header .= "Bcc: ". $bcc ."\r\n";

	echo "View the source to see hidden texts.<br>".$header;
//exit;


	$result = mail($mailTo, $subject, $content, $header, $mailFrom);

	if(!$result) 
	{
	    $errorMessage = error_get_last()['message'];
		echo '<script>alert("'.$errorMessage.'");</script>';
 ?>
		<script>
			alert('Sending mail failed. Please fill all the fields and try again.' );
			//window.history.back();
		</script>
 <?php
	} 
	
	else 
	{
//		echo "<script>alert($result);</script>";
 ?>
		<script>
			alert('Thank you! We have received your enquiry. We will get back to you shortly.');
//			window.history.back();
		</script>
<?php
	}
//}
?>
    <body></body>
</html>