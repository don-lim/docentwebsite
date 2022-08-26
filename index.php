<?php
if (!ini_get('date.timezone')) {
        ini_set('date.timezone', 'America/New_York');
}

function getRealIpAddr()
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
$tmpstr = file_get_contents("https://ip2c.org/".getRealIpAddr());

if (strpos($tmpstr, 'Korea') == true ){
	$tmpstr2 = file_get_contents("https://www.docentcorp.com/err/");
//	echo $tmpstr2;
//	header("Location:https://www.docentcorp.com/err"); 
//	exit;
} else if (strpos($tmpstr, 'China') == true ){
//	header("Location:https://www.docentcorp.com/err"); 
	$tmpstr2 = file_get_contents("https://www.docentcorp.com/err/");
	echo $tmpstr2;
	exit;
} else if (strpos($tmpstr, 'India') == true ){
	$tmpstr2 = file_get_contents("https://www.docentcorp.com/err/");
	echo $tmpstr2;
	header("Location:https://www.docentcorp.com/err"); 
	exit;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--<title><?php print $_SERVER['SERVER_NAME']; ?></title>-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1">
<meta name="theme-color" content="#000000">
<meta name="google" content="notranslate">
<title>Docent Corp: A Leader in Location-based Services &amp; Positioning Systems.</title>
<meta name="description" content="Docent Corp offers location-based technologies for retail, museums, hospitals & more – see how our solutions benefit customers and drive smarter decisions.">
<meta property="og:title" content="Docent Corp: A Leader in Location-based Services &amp; Positioning Systems.">
<meta property="og:url" content="https://www.docentcorp.com/">
<!--meta property="og:image" content="https://docentcorp.com/img/meta_logo.png"-->
<meta property="og:description" content="Docent Corp offers location-based technologies for retail, museums, hospitals & more – see how our solutions benefit customers and drive smarter decisions.">
<!--link rel="icon" href="favicon.png" type="image/png"-->
<link rel="shortcut icon" href="/favicon2.ico" type="image/x-icon">
<!--link rel="shortcut icon" href="/favicon.ico" type="img/x-icon"-->
<link href="https://www.docentcorp.com/" rel="canonical" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css?2" rel="stylesheet" type="text/css">
<link href="css/style.css?2" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css?2" rel="stylesheet" type="text/css">
<link href="css/responsive.css?3" rel="stylesheet" type="text/css">
<link href="css/animate.css?2" rel="stylesheet" type="text/css">
<link href="css/hover.css?4" rel="stylesheet" type="text/css">
<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<!--script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script-->


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<!--CAPTCHA-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
	.request_link {position:absolute; top:-60px; right:0px}
	.request_link .input-btn {font-size:13px; width:114px; height:28px; line-height:26px; font-family:inherit}
	.request_link .icon_free {position:absolute; top:-15px; right:38px}
	
	@media only screen and (max-width :992px) {
		.request_link {position:absolute; top:-60px; right:0px}
		.request_link .input-btn {font-size:13px; width:114px; height:28px; line-height:26px; font-family:inherit}
	}
	@media only screen and (max-width: 767px) {
		.request_link {position:absolute; top:20px; right:20px}
		.request_link .input-btn {font-size:11px; width:106px; height:26px; line-height:24px; font-family:inherit}
	}
	@media only screen and (max-width :600px) {
		.request_link {position:absolute; top:20px; right:20px}
		.request_link .input-btn {font-size:11px; width:106px; height:26px; line-height:24px; font-family:inherit}
		.request_link .icon_free {position:absolute; top:-15px; right:34px}
	}
</style>
</head>
<body>
<!--div id="google_translate_element" style="text-align:right"></div-->
<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<figure class="logo animated fadeInDown delay-07s">
       	<a href="/"><img src="img/logo.png" alt=""></a>	
    </figure>
	<div class="container" style="position:relative">
	<div class="request_link">
		<div class="icon_free"><img src="/img/icon_free.png" width="37" height="22" /></div>
		<button type="submit" class="input-btn" onClick="location.href='/request-demo/'">Request Demo</button>
	</div>
    <div class="top_left_txt" style=" position:fixed !important; overflow:hidden;">
    	<span style="font-size:14px; font-weight:bold; color:#fff">One Stop Solutions<br>for Indoor and Outdoor Spaces</span><br>SoftwareㆍHardwareㆍManagement Tools
    </div>
        <ul class="main-nav" >
        	<li><a href="#about">About Docent</a></li>
            <li><a href="#why">Why Docent</a></li>
            <li><a href="/use-cases/">Use cases</a></li>
            <!-- li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li-->
            <li><a href="/solutions/">Solutions</a></li>
            <li><a href="/case_studies">Case Studies</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->
<header class="header" id="header"><!--header-start-->
<div style="overflow:hidden;">
	<div class="container"> 
    <figure class="logo_m animated fadeInDown delay-07s">
       	<a href="#header"><img src="img/logo.png" alt=""></a>	
    </figure>
	<div class="top_left_txt_m" >
    	<span style="font-size:14px; font-weight:bold; color:#fff">One Stop Solutions<br>for Indoor and Outdoor Spaces</span><br>SoftwareㆍHardwareㆍManagement Tools
    </div>
        <h3 class="animated fadeInDown delay-07s" style="font-size:24px">Bring Your Customer Experience to the Real World!</h3>
		<br><br>
		  <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">

                        <h6 style="text-align:left"><p>Today, customers expect more. They want you to find where things are, facilitate their navigation, empower them with instant recommendations according to their preferences, and alert them to special sales, points of interest, and events based on their location.</p></h6>
            <div class="about_txt">
            <h3>Among many other solutions, DOCENT provides :</h3>
                <ul class="list_style">
                    <li>Interactive Map Platform with Camview™ (since 2014)</li>
                    <li>Content Management Systems for Stores/Objects</li>
                    <li>High-Precision Indoor Positioning System Using Sound Waves (US Patent granted; Priority Date - March 12, 2013)</li>
                    <li>Location-based Promotions</li>
                    <li>Location-based Games</li>
                    <li>Unique Visitor Counters</li>
                    <li>Real-Time Tracking Systems</li>
                </ul>
           
             </div>   
          </div>      
         <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-12s animated" style="visibility: visible; animation-name: fadeInUp">
	      <img src="img/main_top_phone.png" alt="">
    	 </figure>  
     </div>
</div>
</header><!--header-end-->

<section class="main-section service" id="about"><!--main-section-start-->
	<div class="container">
    	<h1>About Docent</h1>
        <h6>Docent is a leading international developer of indoor/outdoor navigation solutions used in large-scale venues.</h6>
    	<div class="row">
			<div class="col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<div class="about_txt">
            	<P>At Docent, we deliver end-to-end management and consumer-facing location, navigation, and access control solutions including hardware, software, websites, apps, and consulting. With offices around the world, our international team works with a broad spectrum of customers including major shopping centers, airports, theme parks, performance venues, museums, emergency responders, hospitals, and other private and public institutions and venues. 

				<br><br>Our mission is to deliver world-class products that facilitate, locate, manage, and engage while guiding you every step of the way. 

				<br><br>Docent is backed by a strong lineage that includes our sister company, Culturetech. Founded in 2002, Culturetech has over 14 years of successful alliances, partnerships, and client relationships with more than 400 public and private companies, nonprofits, and government institutions.

				</P>
				</div>
            </div>
            <figure class="col-sm-6  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/iphone.png">
            </figure>
        </div>
	</div>
</section>


<section class="main-section way_docent paddind" id="why"><!--main-section-start-->
	<div class="container">
    	<h1>Why Choose Us</h1>
        <h6>With Docent, you will have a partner that will guide you every step of the way.</h6>
    	<div class="row">
			<div class="col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<div class="about_txt">
            	<h3>At Docent you will get :</h3>
					<ul class="list_style">
						<li>A client-minded team that will start with your goals in mind </li>
						<li>A team that loves technology, has a passion for excellence, and understands the importance of user-experience</li>
						<li>State-of-the-art, patented technologies no one else can offer </li>
						<li>A company with over 14 years of lineage serving hundreds of satisfied clients</li>
						<li>Proven methods and best practices </li>
						<li>On-time and on-budget delivery</li>
						<li>A partner to guide you every step of the way</li>
					</ul>
				</div>
            </div>
            <figure class="col-sm-6 text-center wow fadeInLeft delay-02s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<img  src="img/mall_main_hand2.png">
            </figure>            
      </div>
	</div>
</section><!--main-section-end-->

<!--main-section client-part-start-->
<!--section class="main-section client-part" id="services">
	<div class="container">
   		<h1>Development Process</h1>
        <h6> End-to-end development and deployment for location, navigation, and access control solutions.</h6>
        <div class="about_txt">
		<p style="margin-bottom:30px">
			From concept to release, our team has streamlined the development and quality assurance process ensuring you to receive a product that exceeds your expectations and delivers an optimal user experience. Unlike other companies, our support doesn't end with the sale. At Docent, we know that understanding a new platform can be daunting. You can rest easy knowing that with Docent, you can expect, fast, reliable, comprehensive support even <em>after</em> the sale.</p>
      </div>
   	  <div class="row">
          <div class="web_img mar_b_20">
            <figure class="wow fadeInDown delay-03 animated" style="animation-name: fadeInLeft;">
              <img  src="img/icon_service.png" usemap="#serviceMapWeb">
							<map name="serviceMapWeb" id="serviceMapWeb" data-toggle="modal" data-target="#serviceModal">
								<area alt="Concept" title="Concept" href="#" shape="rect" coords="68,94,4,1" />
								<area alt="Prototyping" title="Prototyping" href="#" shape="rect" coords="115,92,189,176" />
								<area alt="Development" title="Development" href="#" shape="rect" coords="229,4,315,88" />
								<area alt="Testing" title="Testing" href="#" shape="rect" coords="358,92,427,178" />
								<area alt="Deployment" title="Deployment" href="#" shape="rect" coords="474,2,555,88" />
								<area alt="Release" title="Release" href="#" shape="rect" coords="590,90,653,176" />
							</map>
            </figure>
          </div>
        <div class="mobile_img">  
              <figure class="wow fadeInDown delay-03 animated" style="animation-name: fadeInLeft;">
                  <img  src="img/icon_service_mobile.png" width="240" usemap="#serviceMapMobile" data-toggle="modal" data-target="#serviceModal">
									<map name="serviceMapMobile" id="serviceMapMobile">
										<area alt="Concept" title="Concept" href="#" shape="rect" coords="90,103,7,3" />
										<area alt="Prototyping" title="Prototyping" href="#" shape="rect" coords="162,2,238,103" />
										<area alt="Development" title="Development" href="#" shape="rect" coords="156,179,240,275" />
										<area alt="Testing" title="Testing" href="#" shape="rect" coords="9,181,83,284" />
										<area alt="Deployment" title="Deployment" href="#" shape="rect" coords="5,348,86,431" />
										<area alt="Release" title="Release" href="#" shape="rect" coords="167,347,234,432" />
                                    </map>    
              </figure>
        </div>
        <div class="col-sm-12 wow fadeInUp delay-05s animated client" style="visibility: visible; animation-name: fadeInUp; font-size:14px">
        	<div class="col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
	          <div class="about_txt">Our development process is streamlined to fit exactly the scope of your project. Our developers spend not only time in creation, but in extensive quality assurance to provide you with the best user experience. We understand that a new platform can seem daunting. That is why we also provide you with fast and comprehensive support even after the sale.</div>
              <ul class="list_style">
                  <li>Custom discovery and evaluation</li>
                  <li>Well-rehearsed design and development</li>
                  <li>Cloud management and control</li>
                  <li>Indoor positioning system provisioning</li>
                  <li>Post-sale maintenance and support</li>
              </ul>
            </div>          
        <figure class="col-sm-6 text-center wow fadeInLeft delay-02s animated" style="visibility: visible; animation-name: fadeInLeft;">
           	<img  src="img/mall_store_location.png" style="width:498px">
        </figure>
        </div>
      </div>    	
    </div>
</section-->

<section class="main-section use-cases" id="use-cases">
	<div class="container">
    	<h1><a href="/use-cases/">Use Cases</a></h1>
    	<div style="margin-bottom:30px; color:#ffffff">
        	<p class="text-center">The business environment is changing fast. Businesses should adopt location based services now to cope with the fast changing environment.<br> Here we describe some core use cases for indoor location based services.</p>
        </div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/tracking/warehouse-asset-tracking/"><img src="/img/img_use_cases_1.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					ASSET TRACKING
				</div>
				<ul class="m_case_list">
					<li><a href="/tracking/warehouse-asset-tracking/">Warehouse &amp; Asset Tracking</a></li>
					<li><a href="/tracking/employee-tracking/">Crew, Personnel &amp; Employee Management</a></li>
					<li><a href="/tracking/patient-tracking-system/">Patient Management</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/people-counter/customer-counter/"><img src="/img/img_use_cases_2.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					RETAIL TRAFFIC &amp; PEOPLE COUNTERS
				</div>
				<ul class="m_case_list">
					<li><a href="/people-counter/customer-counter/">Customer Counter</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/heatmap/visual-analytics/"><img src="/img/img_use_cases_3.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					VISUAL ANALYTICS &amp; HEAT MAPS
				</div>
				<ul class="m_case_list">
					<li><a href="/heatmap/visual-analytics/">Visual Analytics</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/id/tracking-tags-keychain/"><img src="/img/img_use_cases_4.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					TRACKING TAGS &amp; ID CARDS
				</div>
				<ul class="m_case_list">
					<li><a href="/id/tracking-tags-keychain/">Tracking Tags</a></li>
					<li><a href="/id/tracking-bracelet/">Tracking Bracelets</a></li>
					<li><a href="/id/rfid-tag-reader/">RFID Cards &amp; Readers</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>	

<section class="main-section m-solution" id="m-solution">
	<div class="container">
    	<h1><a href="/solutions/">Solutions</a></h1>
    	<div style="margin-bottom:30px; color:#ffffff">
        	<p class="text-center">Our team has been developing solutions for many different industries for more than fifteen years.<br>Docent supplies world-class readymade solutions that facilitate, locate, manage and engage your personnel, customers and products.</p>
        </div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/pls/uniqounter/"><img src="/img/img_solution_1.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					PLS - PERSONAL LOCATING SYSTEM
				</div>
				<ul class="m_case_list">
					<li><a href="/pls/uniqounter/">Uniqounter™</a></li>
					<li><a href="/pls/chromap/">Chromap™</a></li>
					<li><a href="/pls/securitrack/">Securitrack™</a></li>
					<li><a href="/pls/accufencing/">Accufencing™ (beta)</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/cms/cms-for-shopping-malls/"><img src="/img/img_solution_2.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					CMS - CONTENT MANAGEMENT SYSTEM
				</div>
				<ul class="m_case_list">
					<li><a href="/cms/cms-for-shopping-malls/">CMS for Shopping Malls</a></li>
					<li><a href="/cms/cms-for-retail/">CMS for Chain Stores</a></li>
					<li><a href="/cms/cms-for-museums/">CMS for Museums</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/indoor-positioning-system/"><img src="/img/img_solution_3.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					IPS - INDOOR POSITIONING SYSTEM
				</div>
				<ul class="m_case_list">
					<li><a href="/indoor-positioning-system/">Indoor Positioning System</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 wow fadeInLeft delay-02s animated m-use-cases">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
				<div class="case_img"><a class="hvr-float-shadow" href="/indoor-map-platform/"><img src="/img/img_solution_4.jpg"></a></div>
			</figure>			
			<div class="m_case">				
				<div class="m_case_stitle">
					<div class="m_case_topline"></div>
					INDOOR MAP PLATFORM
				</div>
				<ul class="m_case_list">
					<li><a href="/indoor-map-platform/">Indoor Map Platform</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--main-Alliances-start-->
<!--section class="main-section alliances" id="alliances">
	<div class="container">
    	<h1>Case Studies</h1>
    	<div style="margin-bottom:30px; color:#ffffff">
        	<p>Docent is backed by a strong lineage that includes our sister company, Culturetech. Founded in 2002, Culturetech has over 14 years of successful alliances, partnerships, and client relationships with over 400 public and private companies, nonprofits, and government institutions. With offices around the world, our international team is able to produce solutions in multiple languages and process payments in various currencies.</p>
        </div>
<?

$xml = simplexml_load_file("https://ip2c.org/".getRealIpAddr());


$sampCode = $xml->geoplugin_countryCode;
if ($sampCode!='') {
	$sampCode='PH';
}

if ($sampCode!='PH') {
?>
		<div class="row bottom_line">
        	<a href="/case_studies_05/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_05.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">Foot Traffic and Shopper Movement Analysis for SM Store</h5>
            	<div class="case_txt">
            	Docent conducted a foot traffic and shopper movement analysis for the SM Store located in the SM Mall of Asia complex, which is one of the most popular attractions in Manila. 
				</div>
            </div>
            </a>
        </div>

<?
}
?>
<script>
var sampCode = '<?=$tmpstr?>';
</script>
        <div class="row bottom_line">
        	<a href="/case_studies_01/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_01.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">App Development for YTL Group Shopping Mall</h5>
            	<div class="case_txt">
            	This project included the development of a mobile app and content management system using our indoor map platform for one of Kuala Lumpur’s premier shopping malls. 
				</div>
            </div>
            </a>
        </div>
        <div class="row bottom_line">
        	<a href="/case_studies_02/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_02.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">App Development for a Private Museum</h5>
               	<div class="case_txt">
            		This project included an app development with our Indoor Map Platform and Indoor Positioning System augmented by our patented Camview™ feature. The app features ticket reservations, membership registrations, real-time navigation, and integration of a virtual reality gallery for paid users.
				</div>
            </div>
            </a>
        </div>
        <div class="row bottom_line">
        	<a href="/case_studies_03/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_03.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">App Development for the National Museum of Indonesia</h5>
            	<div class="case_txt">
            		The first deployment of its kind in Indonesia, this project included the use of our Indoor Positioning System integrated with the museum’s digital floor maps.
				</div>
            </div>
            </a>            
        </div>
		<div class="row mobile_bottom_margin">
        	<a href="/case_studies_04/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_04.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">National Museum of Korea</h5>
            	<div class="case_txt">
            		Docent’s sister company, Culturetech, developed and deployed an online ticket reservation system and a box office ticketing system for the National Museum of Korea.
				</div>
            </div>
            </a>            
        </div>
	</div>
</section--><!--main-Alliances-end-->

<section class="main-section contact" id="contact"><!--main-section contact-start-->
	<div class="container">
        <h1>Contact Us</h1>
        <div class="contact-leader-block clearfix">            
           <div class="contact-leader-box" style="float:none; margin:0 auto">
            	<h6 class="wow fadeInDown delay-03s">LOS ANGELES</h6>
                <div class="contact-leader wow fadeInDown delay-03s">                 	
                    <div class="contact-leader-shadow"><a href="https://goo.gl/maps/xj2NxobYuHG2" target="_blank"></a></div>
                    <img src="img/contact_img_3.jpg" alt="">
                    <ul>
                        <li><a href="https://goo.gl/maps/xj2NxobYuHG2" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-03s">3580 Wilshire Blvd. STE 1460 Los Angeles, CA 90010, USA</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+1-818-396-3336&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+1-818-396-3337</i>
                </div>
            </div>
            
            <!--div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-04s">BANGKOK</h6>
                <div class="contact-leader wow fadeInDown delay-04s">                 	
                    <div class="contact-leader-shadow"><a href="https://goo.gl/maps/36BA4f8W9R52" target="_blank"></a></div>
                    <img src="img/contact_img_7.jpg" alt="">
                    <ul>
                        <li><a href="https://goo.gl/maps/36BA4f8W9R52" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-04s">Athenee Tower, 23rd Fl 63 Wireless Road, Lumpini, Pathumwan Bangkok 10330, Thailand</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; padding-top:10px">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+66-2-126-8000&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+66-2-126-8080</i>
                </div>
            </div>
            
            <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-05s">MANILA</h6>
                <div class="contact-leader wow fadeInDown delay-05s">                 	
                    <div class="contact-leader-shadow"><a href="https://goo.gl/maps/wCAm3xLbxjS2" target="_blank"></a></div>
                    <img src="img/contact_img_8.jpg" alt="">
                    <ul>
                        <li><a href="https://goo.gl/maps/wCAm3xLbxjS2" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-05s">37th Floor, LKG Tower 6801 Ayala Avenue, Makati City 1226 Philippines</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; padding-top:10px">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+63-2-859-2871&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+63-2-859-2882</i>
                </div>
            </div-->
            
            <!--div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-06s">SEOUL</h6>
                <div class="contact-leader wow fadeInDown delay-06s">                 	
                    <div class="contact-leader-shadow"><a href="https://goo.gl/maps/QicdcQJFE732" target="_blank"></a></div>
                    <img src="img/contact_img_4.jpg" alt="">
                    <ul>
                        <li><a href="https://goo.gl/maps/QicdcQJFE732" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-06s">97-4 Chongdam 3rd Fl. Gangnam Seoul 135-100 Republic of Korea</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+82-2-3452-1100&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+82-2-3452-1109</i>
                </div>
            </div-->
        </div>    
            

        <section class="main-section" id="contact" style="border:none">	
                <div class="row">
                    <h6 class="col-sm-12 wow fadeInDown delay-03s">Email us below or call us directly at 1-818-396-3336</h6>
                    <div class="col-sm-12 wow fadeInUp delay-05s">
                        <center><div class="form" style="width: 50%;">
                            <div id="errormessage"></div>
                            <form action="mail.php" method="post" role="form" class="contactForm" onSubmit="return validateForm()" id="contactForm" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <!--<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />-->
									<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>   
                                <div class="row">                     
                                    <div class="g-recaptcha col-sm-12 col-lg-8" id="captcha" data-sitekey="6LfgnxoUAAAAAAz4r3MojbMZo6O6Tc77ytjqt1us" data-theme="dark"></div>
									<div class="text-center col-sm-12 col-lg-4"  align=right><button type="submit" class="input-btn">Send Message</button></div>                                    
                                </div>
                            </form>
							
                        </div></center>
                    </div>
                </div>
        </section>
    </div>
    <!-- Modal -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="serviceModal" style="overflow-y: hidden;">
			<div class="modal-dialog" style="top: 20%;">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div style="margin:0 auto; text-align:center" class="modal-img"><img src="" width="80" height="80"></div>
						<h4 class="modal-title">TITLE</h4>
					</div>
					<div class="modal-body">
						<p>BODY CONTENTS</p>
					</div>
					<!--div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div-->
				</div>
			</div>
		</div>

		<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="solutionModal" >
			<div class="modal-dialog modal-lg">
				<div class="modal-content solution-modal">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<!--h4 class="modal-title">TITLE</h4-->
					</div>
					<div class="modal-body">
						
					</div>
				</div>
			</div>
		</div>

</section><!--main-section contact-end-->

<footer class="footer">
    <div class="container">
        <span class="copyright">Copyright ⓒ 2015-2018 Docent Corp | All Rights Reserved.</span>
    </div>
</footer>

		<script type="text/javascript">
		wow = new WOW({
			animateClass: 'animated',
			offset:       100
		});
		wow.init();

		$(window).load(function(){
			$('.main-nav li a').bind('click',function(event){
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500,'easeInOutExpo');
				
				$('.main-nav').slideUp();
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				event.preventDefault();
			});

			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;
			$container.isotope({
			// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function(){
				// check if columns has changed
				var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
				if ( currentColumns !== columns ) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width( columns * colW )
					.isotope('reLayout');
				}
			}).smartresize(); // trigger resize to set container width

			$('.portfolioFilter a').click(function(){
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
				});
				return false;
			});
		});

		$(document).ready(function() {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function(){
				$('.main-nav').slideToggle();
				return false;
			});

			// Configure/customize these variables.
			var showChar = 280;  // How many characters are shown by default
			var ellipsestext = "";
			var moretext = "Show more";
			var lesstext = "Show less";
			
			$('.more').each(function() {
				var content = $(this).html();
				 if(content.length > showChar) {
					var c = content.substr(0, showChar);
					var h = content.substr(showChar, content.length - showChar);

					var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

					$(this).html(html);
				}
			});
		 
			$(".morelink").click(function(){
				if($(this).hasClass("less")) {
					$(this).removeClass("less");
					$(this).html(moretext);
				} else {
					$(this).addClass("less");
					$(this).html(lesstext);
				}
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
				return false;
			});
			
			$("#serviceMapWeb > area, #serviceMapMobile > area").on("click",function(){
				$('#serviceModal').modal('toggle');
				var _text = "";
				switch($(this).index()) {
					case 0:
						_text = "Upon engagement, we will develop a custom solution to specifically meet your needs and achieve your objectives. ";
						break;
					case 1:
						_text = "After obtaining your feedback and approval, our development team will craft a prototype based on your specs. ";
						break;
					case 2:
						_text = "When prototyping, our graphic designers, database architects, and mobile app developers spring into action to bring your custom solution to life. ";
						break;
					case 3:
						_text = "Led by your project's Quality Assurance Engineer, our quality assurance team will continuously test your solution every step of the way assuring our, and your, high standards are met and your solution is ready for deployment. ";
						break;
					case 4:
						_text = "When the product is ready and fully-tested, our team will present it to you for approval. Only when you are fully satisfied will your product be ready for deployment. If needed, our team is able to provide personalized  go-to-market and placement strategy advising.";
						break;
					case 5:
						_text = "Following release of the product, our team will be there to provide support and iensure your solution is one of your organization's most valuable assets. ";
						break;
				}
				$("#serviceModal > .modal-dialog > .modal-content > .modal-header > h4").html($(this).attr("title"));
				$("#serviceModal > .modal-dialog > .modal-content > .modal-body > p").html(_text);
				$("#serviceModal > .modal-dialog > .modal-content > .modal-header > .modal-img > img").attr("src", "img/icon_m_service_"+($(this).index()+1).toString()+".png");
				return false;
			});

			$(document).on("click",".solution-content a",function(){
				var callUrl = "";
				if ($(this).parent("div").index() == 2){
					switch($(this).index()) {
						case 0:
							callUrl = "solution_cms.php";
							break;
						case 1:
							callUrl = "solution_loyalty.php";
							break;
						case 2:
							callUrl = "solution_access_ctl.php";
							break;
						case 3:
							callUrl = "solution_kiosks.php";
							break;
					}
				}else if ($(this).parent("div").index() == 3){
					switch($(this).index()) {
						case 0:
							callUrl = "solution_indoor.php";
							break;
						case 1:
							callUrl = "solution_mobile_dev.php";
							break;
						case 2:
							callUrl = "solution_web_dev.php";
							break;
						case 3:
							callUrl = "solution_pls.php";
							break;
					}
				}
				$(".solution-modal > .modal-body").children().remove();
				$.ajax({
					url : callUrl,
					dataType : "html",
					cache : true,
					method : "GET",
					success : function(data){
						$(".solution-modal > .modal-body").append(data);
						$("#solutionModal").modal("show");
					},
					error : function(data,stat,err){
						console.log(data,stat,err);
					}				
				});
				
				return false;
			});
		});


		function validateForm()
		{
		  var fields = ["name", "email", "subject", "message"]

		  var i, l = fields.length;
		  var fieldname;
		  for (i = 0; i < l; i++) {
			fieldname = fields[i];
			if (document.forms["contactForm"][fieldname].value === "") {
			  var str;

			  if(i === 0)
				  str = "Name";
			  else if(i === 1)
				  str = "Email";
			  else if(i === 2)
				  str = "Subject";
			  else if(i === 3) 
				  str = "Message";
			  else 
				  str = "";
			  
			  alert(str + " can not be empty");  
			  
			  fieldnameq = "#" + fieldname;
			  $(fieldnameq).focus();
			  return false;
			}
		  }
			
		  /*if(isEmail(document.forms["contactForm"]["email"].value)!==1){
				alert("Please enter a valid mail address.");				
				$("#email").focus();
				return false;
			}*/
		  return true;
		}

		/*function isEmail(email) {
		  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  return regex.test(email);
		}*/
	</script>
</body>
</html>
