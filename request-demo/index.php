<?php $seo_title  = "request demo";?>
<?php $meta_descrip  = "request a demo for products from Docent Corp.";?>
<?php $meta_keyword  = "warehouse, factory, asset, tracking, employee, patient, children, pet, tag, people, counter, visitor, customer, shopper, foot, traffic, analytics, analysis, heatmap, heat, map, counting, staff, hospital, mall,department, store, grocery, indoor, positioning, system, geofencing, traceable, rfid, card, id, bracelet";?>
<?php include ("../inc/inc_header.php");?>
<link href="/css/window-date-picker.css?2" rel="stylesheet" type="text/css">
<style>
.wdp {position:absolute; top:0px}
.input-text::placeholder {color:#555555}
</style>
<script type="text/javascript" src="/js/window-date-picker.js"></script>
<body>

<?php include ("../inc/inc_s_navi.php");?>
<section class="s-section alliances" id="about"><!--main-section-start-->
	<div class="container" style="height:600px">
		<div class="text-center">
			<div class="dep1_title wow fadeInUp delay-01s animated">request a free demo
				<div class="dep1_title_line"></div>
			</div>			
		</div>
    	<div style="margin-bottom:30px; color:#ffffff">
        	<p style="text-align:center">Request a free demo by filling out the form below and we will contact you shortly.<BR><BR>This is a simple email form. We won't be storing your information. You need to resubmit if you want to change your request.</p>
        </div>
		<div class="col-sm-12 wow fadeInUp delay-05s animated" style="visibility: visible; animation-name: fadeInUp;">			
			<center>

				<form action="mail.php" method="post" role="form" class="contactForm" id="contactForm" enctype="multipart/form-data">
				<div class="form" style="width:60%">					
					<div class="form-group">
						<input type="text" name="email" class="form-control input-text" id="email" placeholder="Your Email" data-rule="minlen:4" data-msg="Please enter a valid email">
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<textarea class="form-control input-text text-area" name="message" id="message" rows="14" data-rule="required" data-msg="Please write something for us">Company : 

Preferred dates and times for demo (time zone) : 

Comments : 


</textarea>
						<div class="validation"></div>
					</div>
					<div class="row">                     
						<div class="g-recaptcha col-sm-12 col-lg-8" id="captcha" data-sitekey="6LfgnxoUAAAAAAz4r3MojbMZo6O6Tc77ytjqt1us" data-theme="dark"></div>
						<div class="text-center col-sm-12 col-lg-4" align=right><button type="submit" class="input-btn">Submit</button></div>                                    
						<!--div class="text-center col-sm-12" align="center"><button type="submit" class="input-btn" onClick="location.href='/request-demo-submitted/'">Submit</button></div-->
					</div>
				</div>
				</form>

			</center>
		</div>					
	</div>
</section>

<br><br><br><br><br><br><br><br>





<?php include ("../inc/inc_footer.php");?>
<script>
	const picker = new WindowDatePicker({
		el: '#picker',
		toggleEl: '#toggle',
		inputEl: '#demo',
		type: 'DATEHOUR'
	});
</script>
</body>
</html>