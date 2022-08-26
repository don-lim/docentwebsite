<?php $seo_title  = "CASE STUDIES";?>
<?php $meta_descrip  = "Docent is backed by a strong lineage that includes our sister company";?>
<?php $meta_keyword  = "Docent is backed by a strong lineage that includes our sister company";?>
<?php include ("../inc/inc_header.php");?>
<body>
<?php include ("../inc/inc_s_navi.php");?>
<section class="s-section alliances" id="about"><!--main-section-start-->
	<div class="container">
		<div class="text-center">
			<div class="dep1_title wow fadeInUp delay-01s animated">Case Studies
				<div class="dep1_title_line"></div>
			</div>			
		</div>
    	<div style="margin-bottom:30px; color:#ffffff">
        	<p>Docent is backed by a strong lineage that includes our sister company, Culturetech. Founded in 2002, Culturetech has over 14 years of successful alliances, partnerships, and client relationships with over 400 public and private companies, nonprofits, and government institutions. With offices around the world, our international team is able to produce solutions in multiple languages and process payments in various currencies.</p>
        </div>
<?

if (strpos($tmpstr, 'Philippine') == true) {
	$sampCode ='PH';
}
//$xml = simplexml_load_file("http://www.geoplugin2.net/xml.gp?ip=".getRealIpAddr());

//$sampCode = $xml->geoplugin_countryCode;

if ($sampCode!='PH') {
?>
		<div class="row bottom_line">
        	<a href="/case_studies_05/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="/img/img_case_list_05.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">S Mall: Making Foot Traffic Count</h5>
            	<div class="case_txt">
            	The popular S Mall is the thirteenth largest in the world. Its showpiece S department store is one of the most active department stores in the city.  
				</div>
            </div>
            </a>
        </div>

<?
}
?>
<script>
var sampCode = '<?=$sampCode?>';
</script>
        <div class="row bottom_line">
        	<a href="/case_studies_01/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="/img/img_case_list_01.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">Lot 10 Mall: Tap the App for Customer Convenience &amp; Loyalty</h5>
            	<div class="case_txt">
            	A pioneer in central Kuala Lumpur's shopping and entertainment district, the landmark Lot 10 mall recognized two key obstacles to its future growth:
				</div>
            </div>
            </a>
        </div>
        <div class="row bottom_line">
        	<a href="/case_studies_02/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="/img/img_case_list_02.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">Art:1 New Museum: Virtual Gallery Attracts Real Visitors</h5>
               	<div class="case_txt">
            		As the biggest private museum in Jakarta, the Art:1 New Museum showcases art acquired over 30 years. Its ﬂagship collection includes works by Indonesian Old Masters, Indo Euro, Modern Masters and Contemporary artists.
				</div>
            </div>
            </a>
        </div>
        <div class="row bottom_line">
        	<a href="/case_studies_03/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="/img/img_case_list_03.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">National Museum of Indonesia: Listening to History</h5>
            	<div class="case_txt">
            		Since its opening in 1868, the National Museum of Indonesia in Central Jakarta has built one of the richest and most complete collections of its kind in all of Southeast Asia.
				</div>
            </div>
            </a>            
        </div>
		<div class="row mobile_bottom_margin">
        	<a href="/case_studies_04/" style="display:block">
        	<figure class="col-sm-3  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="/img/img_case_list_04.jpg" style="border:#ffffff 2px solid; width:200px">
            </figure>
			<div class="col-sm-9 wow fadeInLeft delay-03s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<h5 class="mobile_case_stitle">National Museum of Korea: Ticket (System) to Success</h5>
            	<div class="case_txt">
            		As its name suggests, the National Museum of Korea is the ﬂagship museum of Korean history, art and archaeology.
				</div>
            </div>
            </a>            
        </div>
	</div>
</section>
<?php include ("../inc/inc_footer.php");?>
</body>
</html>