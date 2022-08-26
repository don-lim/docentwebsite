<html>
    <head>

<?php
// Check Captcha
	$post_data = "secret=***&response=".
	$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR'] ;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, 
	array('Content-Type: application/x-www-form-urlencoded; charset=utf-8', 
	'Content-Length: ' . strlen($post_data)));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); 
	$googresp = curl_exec($ch);       
	$responseKeys = json_decode($googresp);
	curl_close($ch);
	
	if($responseKeys->success == false){
	?>
		<script>
			alert('Captcha verification failed! Please try again.');
			window.history.back();
			//parent.location.href='/#contact';
		</script>
	<?php			
	}
	else{
		$nameFrom  = $_POST['name'];
		$mailFrom = $_POST['email'];

		if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
			echo "<script>alert('$mailFrom is not a valid email address format!');window.history.back();</script>";
			exit;
		}

		$domain = substr($mailFrom, strpos($mailFrom, '@') + 1);
		if  (checkdnsrr($domain, "MX") !== TRUE) {
			echo "<script>alert('MX record is not found in $domain domain! Please, enter a valid domain name in your email address.');window.history.back();</script>";
			exit;
		}
		
		$nameTo  = "Docent Corp";//
		$mailTo = ""; 
		$cc = "";
		$bcc = "";
		$subject = "DEMO REQUEST";
		$content = $_POST['message'];;    
		$content = "Sender: ".$nameFrom." \r\nEmail: ".$mailFrom." \r\n\r\n".$content;    

		$charset = "UTF-8";

//		$nameFrom   = "=?$charset?B?".base64_encode($nameFrom)."?=";
//		$nameTo   = "=?$charset?B?".base64_encode($nameTo)."?=";
		$subject = "=?$charset?B?".base64_encode($subject)."?=";

		$header  = "Content-Type: text/plain; charset=utf-8\r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Return-Path: <". $mailFrom .">\r\n";

//		$header .= "From: ". $nameFrom ." <". $mailFrom .">\r\n";
		$header .= 'From: Docent Web <>' . "\r\n"; // This account must exist on the sending server, even though you are not using this server as a mail recipient. So, create a fake account on this server with cPanel or something. If you are sending emails to the same domain address hosted on a different mail server, you need to disable the local email delivery on the this server. Eg. change Email Routing option on cPanel from Local Mail Exchanger to Remote Mail Exchanger. Check Track Delivery on cPanel or the mail log to see where the emails went.

		$header .= "Reply-To: <". $mailFrom .">\r\n";
		if ($cc)  $header .= "Cc: ". $cc ."\r\n";
		if ($bcc) $header .= "Bcc: ". $bcc ."\r\n";

		$result = mail($mailTo, $subject, $content, $header, $mailFrom);

		if(!$result) {
	 ?>
			<script>
					alert('Sending mail failed. Please fill all the fields and try again.');
					//window.history.back();
			</script>

	 <?php
		} else {
	 ?>

			<script>					
					alert('Thank you! We have received your enquiry. We will get back to you shortly. If you entered wrong information, resubmit the form. We\'ll disregard the previous information.');
					parent.location.href='/';
			</script>

	 <?php
    }}
 ?>

    </head>
    <body></body>
</html>