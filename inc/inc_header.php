
<?php

if (!ini_get('date.timezone')) {

        ini_set('date.timezone', 'America/New_York');

}
function getRealIpAddr2()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$tmpstr = file_get_contents("https://ip2c.org/".getRealIpAddr2());

if (strpos($tmpstr, 'Korea') == true ){
	$tmpstr2 = file_get_contents("https://www.docentcorp.com/err/");
//	echo $tmpstr2;
//	exit;
} else if (strpos($tmpstr, 'China') == true ){
	$tmpstr2 = file_get_contents("https://www.docentcorp.com/err/");
	echo $tmpstr2;
	exit;
} else if (strpos($tmpstr, 'India') == true ){
	$tmpstr2 = file_get_contents("https://www.docentcorp.com/err/");
	echo $tmpstr2;
	exit;
}
?>


<html xmlns="http://www.w3.org/1999/xhtml">

<!--<title><?php print $_SERVER['SERVER_NAME']; ?></title>-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1">
<meta name="theme-color" content="#000000">
<!--title>DOCENT CORP | One Stop Solutions for Indoor and Outdoor Spaces</title-->
<title><?php echo $seo_title; ?> | DOCENT CORP</title>
<meta name="description" content="<?php echo $meta_descrip; ?>">
<meta name="keywords" content="<?php echo $meta_keyword; ?>">
<meta property="og:title" content="<?php echo $seo_title; ?> | DOCENT CORP">
<meta property="og:url" content="https://docentcorp.com/">
<meta property="og:image" content="https://docentcorp.com/img/meta_logo.png">
<meta property="og:description" content="<?php echo $meta_descrip; ?>">
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="/img/favicon.ico" type="img/x-icon">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="/css/bootstrap.css?2" rel="stylesheet" type="text/css">
<link href="/css/style.css?2" rel="stylesheet" type="text/css">
<link href="/css/style_add.css?2" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.css?2" rel="stylesheet" type="text/css">
<link href="/css/responsive.css?3" rel="stylesheet" type="text/css">
<link href="/css/animate.css?" rel="stylesheet" type="text/css">
<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<script type="text/javascript" src="/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.js"></script>
<script type="text/javascript" src="/js/wow.js"></script>
<script type="text/javascript" src="/js/classie.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>