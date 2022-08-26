
<?php

if (!ini_get('date.timezone')) {

        ini_set('date.timezone', 'America/New_York');

}

?>
<?php 
ini_set('SMTP', 'smtp.zoho.com'); 
ini_set('smtp_port', 465); 

if(isset($_POST['submit'])){
    $to = "noreply@pyo.kr"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<!--<title><?php print $_SERVER['SERVER_NAME']; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>

<body>


<br><br><br>
<center> <img src="main_.jpg">
</body>

</html>
-->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Docent</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css?2" rel="stylesheet" type="text/css">
<link href="css/style.css?2" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css?2" rel="stylesheet" type="text/css">
<link href="css/responsive.css?3" rel="stylesheet" type="text/css">
<link href="css/animate.css?" rel="stylesheet" type="text/css">



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
</head>
<body>
<!--div id="google_translate_element" style="text-align:right"></div-->
<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<figure class="logo animated fadeInDown delay-07s">
       	<a href="#header"><img src="img/logo.png" alt=""></a>	
    </figure>
	<div class="container">
    <div class="top_left_txt">
    	<span style="font-size:14px; font-weight:bold; color:#fff">One Stop Solutions<br>for Indoor and Outdoor Spaces</span><br>SoftwareㆍHardwareㆍManagement Tools
    </div>
        <ul class="main-nav" >
        	<li><a href="#about">About Docent</a></li>
            <li><a href="#why">Why Docent</a></li>
            <li><a href="#services">Process</a></li>
            <!-- li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li-->
            <li><a href="#solutions">Solutions</a></li>
            <li><a href="#alliances">Case Studies</a></li>
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
        <h3 class="animated fadeInDown delay-07s" style="font-size:24px">Bring Your Customer Experience to the Real World!</h3>
		<br><br>
		  <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
                	<div class="about_txt">
                        <p>Today, customers expect more. They want you to find where things are, facilitate their navigation, empower them with instant recommendation according to their preferences, and alert them to special sales, points of interest, and events based on their location.<br />
						Docent provides one stop comprehensive solutions for Indoor and Outdoor Spaces with SoftwareㆍHardwareㆍManagement Tools which can help you to give your customers what they want and more.</p><br>
                    </div>
            <div class="about_txt">
            <P><h3>Among many other solutions, we provide :</h3>
                <ul>
                    <li>Interactive Map Platform with Camview(TM)</li>
                    <li>CMS (Content Management System) for Stores/Objects and Promotions</li>
                    <li>High-Precision IPS (Indoor Position System)</li>
                    <li>Real-Time Tracking System</li>
                    <li>Location-Based Game</li>
                </ul>
             </P>
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
    	<h2>About Docent</h2>
        <h6>Docent is a leading international developer of indoor/outdoor navigation solutions used in major public venues.</h6>
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
<!--section class="team" id="team">
	<div class="container">
        <h2>team</h2>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-01s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic.png" alt="">
                    <ul>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-01s">DK Lim</h3>
                <span class="wow fadeInDown delay-01s">Founder &amp; CEO</span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-02s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic.png" alt="">
                    <ul>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-02s">Paul Ahrens</h3>
                <span class="wow fadeInDown delay-02s">Co-CEO</span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic.png" alt="">
                    <ul>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Controller</h3>
                <span class="wow fadeInDown delay-03s"></span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-04s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic.png" alt="">
                    <ul>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-04s">Business Development</h3>
                <span class="wow fadeInDown delay-04s">Jakarta, Indonesia</span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-05s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic.png" alt="">
                    <ul>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
                 <h3 class="wow fadeInDown delay-05s">Business Development</h3>
                 <span class="wow fadeInDown delay-05s">Dubai, UAE</span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic.png" alt="">
                    <ul>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
                 <h3 class="wow fadeInDown delay-06s">Project Manager</h3>
                 <span class="wow fadeInDown delay-06s">Jakarta, Indonesia</span>
            </div>
        </div>
    </div>
	</section-->
</section>


<section class="main-section way_docent paddind" id="why"><!--main-section-start-->
	<div class="container">
    	<h2>Why Choose Us</h2>
        <h6>A docent is a guide and educator for the institution he or she serves, and with Docent, you will have a partner that will guide you every step of the way</h6>
    	<div class="row">
			<div class="col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<div class="about_txt">
            	<P>With Docent you will get :
					<ul>
						<li>A client-minded team that will start with your goals in mind </li>
						<li>A team that loves technology, has a passion for excellence, and understands the importance of user-experience</li>
						<li>State-of-the-art, patented technologies no one else can offer </li>
						<li>A company with over 14 years of lineage serving hundreds of satisfied clients</li>
						<li>Proven methods and tested best practices </li>
						<li>On-time and on-budget delivery</li>
						<li>A partner to guide you every step of the way</li>
					</ul>
				</P>
				</div>
            </div>
            <figure class="col-sm-6 text-center wow fadeInLeft delay-02s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<img  src="img/mall_main_hand.png">
            </figure>            
      </div>
	</div>
</section><!--main-section-end-->

<section class="main-section client-part" id="services"><!--main-section client-part-start-->
	<div class="container">
   		<h2>Development Process</h2>
        <h6> End-to-end development and deployment for location, navigation, and access control solutions.</h6>
        <div class="about_txt">
		<p style="margin-bottom:30px">
			From concept to release, our team has streamlined the development and quality assurance process ensuring that you receive an end-product that exceeds your expectations, achieves your goals, and delivers an optimum user experience. But our support doesn't end with the sale. At Docent, we know that understanding a new platform can be daunting. You can rest easy knowing that with Docent, you will be able to count on continued, fast, and comprehensive support after the sale for ongoing peace of mind. 
		</p>
        </div>
   	  <div class="row">
          <div class="web_img">
            <figure class="wow fadeInDown delay-03 animated " style="animation-name: fadeInLeft;">
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
        <div class="col-sm-12 wow fadeInUp delay-05s animated client mar_b_30" style="visibility: visible; animation-name: fadeInUp; font-size:14px">
        	<div class="col-sm-6 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
	          <div class="about_txt">Our development process is streamlined to fit exactly the scope of your project. Our developers spend not only time in creation, but extensive quality assurance to provide you with the best user experience. We understand that a new platform can seem daunting, and we also provide you with fast and comprehensive support post-sale as well.</div>
              <ul>
                  <li>Custom discovery and evaluation</li>
                  <li>Well rehearsed design and development</li>
                  <li>Cloud management and control</li>
                  <li>Indoor positioning system provisioning</li>
                  <li>Post sale maintenance and support</li>
              </ul>
            </div>          
        <figure class="col-sm-6 text-center wow fadeInLeft delay-02s animated" style="visibility: visible; animation-name: fadeInLeft;">
           	<img  src="img/mall_store_location.png" style="width:498px">
        </figure>
        </div>
      </div>    	
    </div>
</section><!--main-section client-part-end-->

<section class="main-section solutions paddind" id="solutions"><!--main-section-start-->
	<div class="container solution-content">
    	<h2>Solutions</h2>
        <h6 class="item more">Docent offers entertainment and lifestyle venues, shopping malls, attractions, and facilities of every type an end-to-end suite of world-class management and consumer-facing location, navigation, and access control solutions. 

        </h6>
    	<div class="row">
        	<a href="solution_cms.php" style="display:block">
        	<div class="solutions-list col-sm-3">            	
		      	<figure class="wow fadeInDown delay-02s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_1.png" width="80"></figure>
                <h6 class="fadeInDown delay-02s animated">Content Management System</h6>                
            </div>
            </a>
            <a href="solution_loyalty.php" style="display:block">
            <div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_2.png" width="80"></figure>
              <h6 class="fadeInDown delay-03s animated">Loyalty Program Management System</h6>
            </div>
            </a>
            <a href="solution_access_ctl.php" style="display:block">
            <div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-04s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_3.png" width="80"></figure>
                <h6 class="fadeInDown delay-04s animated">Access Control</h6>
            </div>
            </a>
            <a href="solution_kiosks.php" style="display:block">
            <div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-05s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_4.png" width="80"></figure>
                <h6 class="fadeInDown delay-05s animated">Kiosks</h6>
            </div>
            </a>
      </div>
        <div class="row">
        	<a href="solution_indoor.php" style="display:block">
        	<div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_5.png" width="80"></figure>
                <h6 class="fadeInDown delay-06s animated">Indoor Navigation System</h6>
            </div>
            </a>
            <a href="solution_mobile_dev.php" style="display:block">
            <div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-07s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_6.png" width="80"></figure>
                <h6 class="fadeInDown delay-07s animated">Mobile Application Development</h6>
            </div>
            </a>
            <a href="solution_web_dev.php" style="display:block">
            <div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-08s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_7.png" width="80"></figure>
                <h6 class="fadeInDown delay-08s animated">Website Development</h6>
            </div>
            </a>
            <a href="solution_pls.php" style="display:block">
            <div class="solutions-list col-sm-3">
		      	<figure class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;"><img src="img/icon_m_solutions_8.png" width="80"></figure>
                <h6 class="fadeInDown delay-09s animated">Personal Locating System</h6>
            </div>
            </a>
        </div>
	</div>
</section><!--main-section-end-->

<section class="main-section alliances" id="alliances"><!--main-Alliances-start-->
	<div class="container">
    	<h2>Case Studies</h2>
    	<div style="margin-bottom:30px; color:#ffffff">
        	<h6>Docent is backed by a strong lineage that includes our sister company, Culturetech. Founded in 2002, Culturetech has over 14 years of successful alliances, partnerships, and client relationships with over 400 public and private companies, nonprofits, and government institutions. Thanks to our offices around the world, our international team is able to produce solutions in multiple languages and process payments in various currencies. </h6>
        </div>
        <div class="row bottom_line">
        	<a href="case_detail_01.php" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_01.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">App Development for YTL Group Shopping Mall</h5>
            	<div class="case_txt">
            	This project included the development of a mobile app and content management system using our indoor map platform for one of Kuala Lumpur's premier shopping malls. 
				</div>
            </div>
            </a>
        </div>
        <div class="row bottom_line">
        	<a href="case_detail_02.php" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_02.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">App Development for a Private Museum</h5>
                <h7>For Art:1 Museum and Art Gallery</h6>
            	<div class="case_txt">
            		This project included app development with our Indoor Map Platform and Indoor Positioning System augmented by our patented Camview™ feature. The app features ticket reservations, membership registrations, real-time navigation, and integration of a virtual reality gallery for paid users.
				</div>
            </div>
            </a>
        </div>
        <div class="row bottom_line">
        	<a href="case_detail_03.php" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_03.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">App Development for the National Museum of Indonesia</h5>
            	<div class="case_txt">
            		The first deployment of its kind in Indonesia, this project included the use of our Indoor Positioning System integrated with the museum's digital floor maps.
				</div>
            </div>
            </a>            
        </div>
		<div class="row mobile_bottom_margin">
        	<a href="case_detail_04.php" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="img/img_case_list_04.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">National Museum of Korea</h5>
            	<div class="case_txt">
            		Docent's sister company, Culturetech, developed and deployed an online ticket reservation system and a box office ticketing system for the National Museum of Korea.
				</div>
            </div>
            </a>            
        </div>
	</div>
</section><!--main-Alliances-end-->

<section class="main-section contact" id="contact"><!--main-section contact-start-->
	<div class="container">
        <h2>Contact Us</h2>
        <div class="contact-leader-block clearfix">
            <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-03s">PARIS</h6>
                <div class="contact-leader wow fadeInDown delay-03s">                 	
                    <div class="contact-leader-shadow"><a href="https://www.google.co.kr/maps/place/1+Le+Parvis,+92800+Puteaux,+France/@48.8910067,2.2383924,17z/data=!4m2!3m1!1s0x47e665037708426f:0xf54ff5b039181867?hl=en" target="_blank"></a></div>
                    <img src="img/contact_img_1.jpg" alt="">
                    <ul>
                        <li><a href="https://www.google.co.kr/maps/place/1+Le+Parvis,+92800+Puteaux,+France/@48.8910067,2.2383924,17z/data=!4m2!3m1!1s0x47e665037708426f:0xf54ff5b039181867?hl=en" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-03s">La Grande Arche – Paroi Nord 15ème Étage 92044 Paris La Défense France</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+33-1-85-76-28-07&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+33-1-84-10-54-52</i>
                    <i class="fa fa-envelope"> fr@culturetech.com</i>
                </div>
            </div>
            
            <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-04s">JAKARTA</h6>
                <div class="contact-leader wow fadeInDown delay-04s">                 	
                    <div class="contact-leader-shadow"><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" target="_blank"></a></div>
                    <img src="img/contact_img_2.jpg" alt="">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-04s">AXA Tower 45th Fl – Jl Prof Dr Satrio, Setiabudi, Jakarta 12940, Indonesia</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+62-21-3005-3707&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+62-21-3005-3600</i>
                    <i class="fa fa-envelope"> id@culturetech.com</i>
                </div>
            </div>
            
           <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-05s">LOS ANGELES</h6>
                <div class="contact-leader wow fadeInDown delay-05s">                 	
                    <div class="contact-leader-shadow"><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" target="_blank"></a></div>
                    <img src="img/contact_img_3.jpg" alt="">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-05s">3580 Wilshire Blvd. STE 1460 Los Angeles, CA 90010, USA</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+1-818-396-3336&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+1-818-396-3337</i>
                    <i class="fa fa-envelope"> mandir@culturetech.com</i>
                </div>
            </div>
            
            <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-06s">SEOUL</h6>
                <div class="contact-leader wow fadeInDown delay-06s">                 	
                    <div class="contact-leader-shadow"><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" target="_blank"></a></div>
                    <img src="img/contact_img_4.jpg" alt="">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-06s">97-4 Chongdam 3rd Fl. Gangnam Seoul 135-100 Republic of Korea</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+82-2-3452-1100&nbsp;&nbsp;</i>
                    <i class="fa fa-fax">&nbsp;&nbsp;+82-2-3452-1109</i>
                    <i class="fa fa-envelope"> info@culturetech.co.kr</i>
                </div>
            </div>
            
            <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-07s">DUBAI</h6>
                <div class="contact-leader wow fadeInDown delay-07s">                 	
                    <div class="contact-leader-shadow"><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" target="_blank"></a></div>
                    <img src="img/contact_img_5.jpg" alt="">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-07s">Level 23, Tower 2, Boulevard Plaza Dubai - UAE</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-mobile">&nbsp;&nbsp;+971-55-849-0184&nbsp;&nbsp;</i>
                    <i class="fa fa-mobile">&nbsp;&nbsp;+971-56-442-0824</i>
                    <i class="fa fa-envelope"> maria.lien@culturetech.com</i>
                </div>
            </div>
            
            <div class="contact-leader-box">
            	<h6 class="wow fadeInDown delay-07s">KUALA LUMPUR</h6>
                <div class="contact-leader wow fadeInDown delay-07s">                 	
                    <div class="contact-leader-shadow"><a href="https://www.google.com/maps/place/AXA+Tower/@-6.2247246,106.8286974,18z/data=!4m6!1m3!3m2!1s0x0000000000000000:0x4ee34281bd70fb30!2sAXA+Tower!3m1!1s0x0000000000000000:0x4ee34281bd70fb30!6m1!1e1" target="_blank"></a></div>
                    <img src="img/contact_img_6.jpg" alt="">
                    <ul>
                        <li><a href="https://www.google.co.kr/maps/place/Maxis+Tower,+Kuala+Lumpur+City+Centre,+50450+Kuala+Lumpur,+Wilayah+Persekutuan+Kuala+Lumpur,+%EB%A7%90%EB%A0%88%EC%9D%B4%EC%8B%9C%EC%95%84/@3.1582317,101.7118289,18z/data=!3m1!4b1!4m5!3m4!1s0x31cc37d12e5c8669:0xc577fd968087018d!8m2!3d3.1582317!4d101.7129232?shorturl=1" class="fa fa-map-marker" target="_blank"></a></li>
                    </ul>
                </div>                
                <span class="wow fadeInDown delay-07s">Menara Maxis, 26th Floor, Kuala Lumpur City Center, Kuala Lumpur 50088, Malaysia</span>
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	              	<i class="fa fa-phone">&nbsp;&nbsp;+60-3-2615-2688&nbsp;&nbsp;</i>
                    <i class="fa fa-mobile">&nbsp;&nbsp;+60-17-307-3372</i>
                    <i class="fa fa-envelope"> info@culturetech.com</i>
                </div>
            </div>
        </div>
        <section class="main-section" id="contact" style="border:none">	
                <div class="row">
                    <h6 class="col-sm-12 wow fadeInDown delay-03s">Email us below or call us directly at 1-818-396-3336</h6>
                    <div class="col-sm-12 wow fadeInUp delay-05s">
                        <div class="form">
                            <div id="errormessage"></div>
                            <form action="mail2.php" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
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
                                <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                            </form>
                        </div>	
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
        <span class="copyright">Copyright ⓒ 2017 Docent | All Rights Reserved.</span>
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
						_text = "From prototyping, our graphic designers, database architects, and web, user-interface, and mobile app developers spring into action to bring your custom solution to life. ";
						break;
					case 3:
						_text = "Led by your project's Quality Assurance Engineer, our quality assurance team will continuously test your solution every step of the way ensuring our, and your, high standards are met and your solution is ready for deployment. ";
						break;
					case 4:
						_text = "When the product is ready and fully-tested, our team will present to you for approval. Upon approval your product will be ready for deployment. If needed, our team is able to provide counsel on your go-to-market or placement strategy.";
						break;
					case 5:
						_text = "Following release of the product, our team will be there to provide support and ensure your solution is one of your organization's most valuable assets. ";
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
							callUrl = "solution_cms_.php";
							break;
						case 1:
							callUrl = "";
							break;
						case 2:
							callUrl = "";
							break;
						case 3:
							callUrl = "";
							break;
					}
				}else if ($(this).parent("div").index() == 3){
					switch($(this).index()) {
						case 0:
							callUrl = "";
							break;
						case 1:
							callUrl = "";
							break;
						case 2:
							callUrl = "";
							break;
						case 3:
							callUrl = "";
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
	</script>
</body>
</html>
