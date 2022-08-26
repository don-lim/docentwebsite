<html xmlns="http://www.w3.org/1999/xhtml">
<!--<title><?php print $_SERVER['SERVER_NAME']; ?></title>-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1">
<meta name="theme-color" content="#000000">

<link href="/css/style.css?2" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.css?2" rel="stylesheet" type="text/css">
<link href="/css/responsive.css?3" rel="stylesheet" type="text/css">
<link href="/css/animate.css?2" rel="stylesheet" type="text/css">
<link href="/css/hover.css?4" rel="stylesheet" type="text/css">


</head>


<form action="mailtodb.php" method="post" role="form" class="contactForm" onSubmit="return validateForm()" id="contactForm" enctype="multipart/form-data">
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

									<div class="text-center col-sm-12 col-lg-4"  align=right><button type="submit" class="input-btn">Send Message</button></div>                                    
                                </div>
</form>


<script>
function validateForm()
{
	var fields = ["name", "email", "subject", "message"]
	var i, l = fields.length;
	var fieldname;
	for (i = 0; i < l; i++) 
	{
		fieldname = fields[i];
		if (document.forms["contactForm"][fieldname].value === "") 
		{
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