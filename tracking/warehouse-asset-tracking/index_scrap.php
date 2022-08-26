<?php include "../../inc/scrap.php";?>
<?php $seo_title  = "Warehouse & Asset Tracking - Location-based Solutions";?>
<?php $meta_descrip  = "Docent Corp’s Warehouse & Asset Tracking System provides around the clock monitoring of valuable inventory or assets.";?>
<?php $meta_keyword  = "warehouse,factory,asset,tracking,employee,patient,children,pet,tag,ble";?>
<?php include ("../../inc/inc_header.php");?>
<body>
<?php include ("../../inc/inc_s_navi.php");?>
<section class="s-section service" id="about"><!--main-section-start-->
	<div class="container">
		<div class="text-center">
			<div class="dep1_title">USE CASES
				<div class="dep1_title_line"></div>
			</div>
		</div>
		<h1>ASSET TRACKING</h1>
		<?php include ("../../inc/inc_case_1.php");?>
		<div class="portfolioFilter">
			<ul class="Portfolio-nav wow fadeIn delay-02s animated" style="visibility: visible; animation-name: fadeIn;">
				<!--li><a href="#" data-filter="/tracking/indoor-positioning-system/" >Indoor Positioning Packages</a></li-->
				<li><a href="/tracking/warehouse-asset-tracking/" data-filter="/tracking/warehouse-asset-tracking/" class="current">Warehouse &amp; Asset Tracking</a></li>
				<li><a href="/tracking/employee-tracking/" data-filter="/tracking/employee-tracking/">Crew, Personnel &amp; Employee Management</a></li>
				<li><a href="/tracking/patient-tracking-system/" data-filter="/tracking/patient-tracking-system/">Patient Management</a></li>
			</ul>
		</div>
    	<div class="row">
			<figure class="col-sm-12 wow fadeInUp delay-02s animated text-center">
           	  <img  src="/img/img_use_cases_1_1_1.png">
            </figure>
			<div class="col-sm-12 wow fadeInLeft delay-05s animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<div class="about_txt">
				<h1 class="dep3_stitle">Warehouse &amp; Asset Tracking</h1>
            	<P>Docent’s off the shelf solution gets your warehouse &amp; asset tracking up and running quickly.  The Warehouse &amp; Asset Tracking application shows the precise location for every item.  It can be deployed over any number of offices, retail outlets, and warehouses.  It can be utilized in any environment where inventory, artwork, tools, machinery and robots need to be accounted for. <br><br>
Combined with tracking tags our warehouse &amp; asset tracking application provides around the clock monitoring of valuable inventory or assets. Our tag signals travel up to 100 meters (300 ft) providing our application with real-time monitoring with a small number of nodes.<br><br>
In factories, location information will greatly enhance just-in-time inventory systems. The location information of each item could be analyzed against supply chain turnaround times and sales projections.<br><br>
To enhance the utility of our Warehouse &amp; Asset Tracking application, the data can be used with our Content Management System for Museums, Retail or Supermarkets that facilitate fulfillment of inventory or assets for events, displays, tradeshows, or other activities requiring cataloging and deployment.
				</P>
				</div>
            </div>			
			<div class="mar_t_20">
				<?
				$url1 = "https://shop.docentcorp.com/packages/asset-tracking-kit";
				$obj1 = new Scrap;
				$obj1::setUrl($url1);
				?>
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-02s">
					<div class="link_preview">
						<div class="l_p_item">
							<div class="l_p_img"><img src="<?php echo $obj1::getImg(); ?>" width="80" height="80"></div>
							<div class="l_p_meta">
								<div class="l_p_title"><?php echo $obj1::getTitle(); ?></div>
								<div class="l_p_descrip"><?php echo $obj1::getMeta('description'); ?></div>
								<div class="l_p_url"><a href="<?php echo $url1 ?>" target="_blank" style="color:#999"><?php echo $url1; ?></a></div>
							</div>
						</div>
					</div>
				</div>
				<?
				$url2 = "https://shop.docentcorp.com/software-modules/securitrack-software-monthly";
				$obj2 = new Scrap;
				$obj2::setUrl($url2);
				?>
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-02s">
					<div class="link_preview">
						<div class="l_p_item">
							<div class="l_p_img"><img src="<?php echo $obj2::getImg(); ?>" width="80" height="80"></div>
							<div class="l_p_meta">
								<div class="l_p_title"><?php echo $obj2::getTitle(); ?></div>
								<div class="l_p_descrip"><?php echo $obj2::getMeta('description'); ?></div>
								<div class="l_p_url"><a href="<?php echo $url2 ?>" target="_blank" style="color:#999"><?php echo $url2; ?></a></div>
							</div>
						</div>
					</div>
				</div>
				<?
				$url3 = "https://shop.docentcorp.com/software-modules/securitrack-software-yearly";
				$obj3 = new Scrap;
				$obj3::setUrl($url3);
				?>
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-02s">
					<div class="link_preview">
						<div class="l_p_item">
							<div class="l_p_img"><img src="<?php echo $obj3::getImg(); ?>" width="80" height="80"></div>
							<div class="l_p_meta">
								<div class="l_p_title"><?php echo $obj3::getTitle(); ?></div>
								<div class="l_p_descrip"><?php echo $obj3::getMeta('description'); ?></div>
								<div class="l_p_url"><a href="<?php echo $url3 ?>" target="_blank" style="color:#999"><?php echo $url3; ?></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--div class="col-sm-12 wow fadeInUp delay-06s animated text-center"><a class="link" href="">Link</a></div-->
            <!--figure class="col-sm-6  text-center wow fadeInUp delay-01s animated" style="visibility: visible; animation-name: fadeInUp;">
            	<img  src="/img/iphone.png">
            </figure-->
        </div>
	</div>
</section>
<?php include ("../../inc/inc_footer.php");?>
</body>
</html>