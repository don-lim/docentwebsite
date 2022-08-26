<footer class="footer">
    <div class="container">
        <span class="copyright">Copyright ⓒ 2015-2019 Docent Corp | All Rights Reserved.</span>
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
				/*$container.isotope({
					filter: selector,
				});*/
				location.href= selector;
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

			$(document).on("click","#alliances a",function(){
				var callUrl = "";
				if ($(this).parent("div").index() == 2){ //YTLGroupShoppingMall
					callUrl = "case_detail_01.php";
				}else if ($(this).parent("div").index() == 3){//PrivateMuseum
					callUrl = "case_detail_02.php";
				}else if ($(this).parent("div").index() == 4){//NatinalMuseumoOfIndonesia
					callUrl = "case_detail_03.php";
				}else if ($(this).parent("div").index() == 5){//NatinalMuseumoOfKorea
					callUrl = "case_detail_04.php";
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


		function toggleSlideMenu() {
			if ($('#slideMenuArrow').attr('class').indexOf('fa-angle-down')>0)
			{
				$('#slideMenuArrow').removeClass('fa-angle-down').addClass('fa-angle-up');
				$('#slideMenu').slideDown(500);
		
			} else {
				$('#slideMenuArrow').removeClass('fa-angle-up').addClass('fa-angle-down');
				$('#slideMenu').slideUp(500);
			}
		}


		
		
</script>