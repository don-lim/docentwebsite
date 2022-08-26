<html>
<?php


//if($responseKeys->success == false){
//}

//else
//{
	$nameFrom  = $_REQUEST['name'];
	$mailFrom = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$msg = $_REQUEST['message'];;    

	if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
		echo "<script>alert('$mailFrom is not a valid email address format!');window.history.back();</script>";
		exit;
	}

	$domain = substr($mailFrom, strpos($mailFrom, '@') + 1);
	if  (checkdnsrr($domain, "MX") !== TRUE) {
		echo "<script>alert('MX record is not found in $domain domain! Please, enter a valid domain name in your email address.');window.history.back();</script>";
		exit;
	}

	$con = mysqli_connect("localhost","docentc1_webdb12","b%)S,d2(?t[(","docentc1_web");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_set_charset($con,"utf8");

	$nameFrom = mysqli_real_escape_string($con, trim($nameFrom));
	$mailFrom = mysqli_real_escape_string($con, trim($mailFrom));
	$subject = mysqli_real_escape_string($con, trim($subject));
	$msg = mysqli_real_escape_string($con, trim($msg));

	$sql = "
		INSERT INTO email_tosend 
			(name, email, subject, msg)
		VALUES 
			('$nameFrom', '$mailFrom', '$subject', '$msg');";


echo $sql;
echo "<br><br>";


	if (mysqli_query($con, $sql)) 
	{
		echo "successfully inserted! " . mysqli_affected_rows($con) . " row(s)\n\n";
	} else 
	{
		echo "Error occurred while inserting: " . mysqli_error($con) . "\n\n";
	}

	mysqli_close($con);



//}
?>