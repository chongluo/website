<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="cufon-active cufon-ready" xmlns="http://www.w3.org/1999/xhtml"><head>

	<title>:: CV / RESUME Template ::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="description" content=" ... add description here ... ">
	<meta name="keywords" content=" ... add keywords here ... ">
	
	<!-- //////// Favicon ////////  -->
	
	<link rel="shortcut icon" type="image/x-icon" href="http://www.bitpublimedia.ro/themeforest/resume/favicon.ico">
	
	<!-- //////// Css StyleSheets ////////  -->
	
	<link href="_%20CV%20_%20RESUME%20Template%20__files/screen-style.css" rel="stylesheet" type="text/css">
	<link href="_%20CV%20_%20RESUME%20Template%20__files/print-style.css" rel="stylesheet" type="text/css" media="print">
	
	<!-- //////// DD_belatedPNG - Png Fix for IE 6 ////////  -->
	
	<!--[if lt IE 7]>
	<script type="text/javascript" src="_layout/js/DD_belatedPNG_0.0.7a-min.js"></script>
	<script type="text/javascript">

	</script>
	<![endif]-->
	
	<!-- //////// jQuery ////////  -->
	
	<script src="_%20CV%20_%20RESUME%20Template%20__files/jquery-1.js" type="text/javascript"></script>

	<!-- //////// Cufon Font Replacement ////////  -->
	
	<script src="_%20CV%20_%20RESUME%20Template%20__files/cufon-yui.js" type="text/javascript"></script><style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>
	<script src="_%20CV%20_%20RESUME%20Template%20__files/Aller.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1');
		Cufon.replace('.item h2');
		Cufon.replace('h2.cv-section-name');
	</script>
	
	<!-- //////// FancyBox - jQuery powered Lightbox ////////  -->
	
	<link rel="stylesheet" type="text/css" href="_%20CV%20_%20RESUME%20Template%20__files/jquery.css" media="screen">
	<script type="text/javascript" src="_%20CV%20_%20RESUME%20Template%20__files/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.lightbox").fancybox({
				'overlayOpacity': 0.7,
				'overlayColor'	: '#333'
			});
		});
	</script>
	 
	<!-- //////// Tipsy - custom Tooltips ////////  -->
	
	<link rel="stylesheet" type="text/css" href="_%20CV%20_%20RESUME%20Template%20__files/tipsy.css">
	<script type="text/javascript" src="_%20CV%20_%20RESUME%20Template%20__files/jquery_002.js"></script>
	<script type="text/javascript">
	  $(function() {
		$('.tip').tipsy({gravity: 'n'});
	  });
	</script>
	
	<!-- //////// Email Me Panel Animation ////////  -->
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".emailme").click(function(){
				$(".panel").toggle("fast");
				$(this).toggleClass("active");
				return false;
			});
		});
	</script>
	
	<!-- //////// Contact Form ////////  -->
	
	<script type="text/javascript">                                         
	/* <![CDATA[ */
		$(document).ready(function(){ // sends the data filled in the contact form to the php file and shows a message
			$("#contact-form").submit(function(){
				var str = $(this).serialize();
				$.ajax({
				   type: "POST",
				   url: "_layout/php/send.php",
				   data: str,
				   success: function(msg)
				   {
						$("#formstatus").ajaxComplete(function(event, request, settings){
							if(msg == 'OK'){ // Message Sent? Show the 'Thank You' message and hide the form
								result = '<div class="formstatusok">Your message has been sent. Thank you!</div>';
								$("#fields").hide();
							}
							else{
								result = msg;
							}
							$(this).html(result);
						});
					}
				
				 });
				return false;
			});
		});
	/* ]]> */	
	</script>  
		
</head>
<body>

<!--
Code is compressed only in the preview version for security resons
The html files in the download are nicely formated and commented. 
Check out the screenshots section for a look at the code
--> 
	
<script language="Javascript">
<!--
document.write(unescape('%3C%64%69%76%20%69%64%3D%22%63%76%22%3E%0A%09%0A%09%09%3C%21%2D%2D%20%2F%2F%20%41%42%4F%55%54%20%4D%45%20%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%20%2D%2D%3E%0A%09%09%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%20%66%69%72%73%74%2D%63%76%2D%73%65%63%74%69%6F%6E%20%66%69%78%65%64%22%3E%0A%09%09%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%70%65%72%73%6F%6E%22%3E%0A%09%09%09%09%3C%61%20%63%6C%61%73%73%3D%22%6C%69%67%68%74%62%6F%78%22%20%72%65%6C%3D%22%6D%79%70%69%63%73%22%20%68%72%65%66%3D%22%5F%63%6F%6E%74%65%6E%74%2F%36%34%30%78%35%35%30%2D%70%6C%61%63%65%68%6F%6C%64%65%72%2E%6A%70%67%22%20%74%69%74%6C%65%3D%22%64%65%73%63%72%69%70%74%69%6F%6E%20%69%74%65%6D%20%31%22%20%3E%0A%09%09%09%09%09%3C%69%6D%67%20%73%72%63%3D%22%5F%63%6F%6E%74%65%6E%74%2F%31%30%30%78%31%30%30%2D%70%6C%61%63%65%68%6F%6C%64%65%72%2E%6A%70%67%22%20%77%69%64%74%68%3D%22%31%30%30%22%20%68%65%69%67%68%74%3D%22%31%30%30%22%20%61%6C%74%3D%22%6A%6F%68%6E%20%73%6D%69%74%68%22%20%2F%3E%0A%09%09%09%09%3C%2F%61%3E%0A%09%09%09%09%3C%68%31%3E%4A%6F%68%6E%20%53%6D%69%74%68%3C%2F%68%31%3E%0A%09%09%09%09%3C%68%32%3E%46%72%6F%6E%74%20%45%6E%64%20%44%65%76%65%6C%6F%70%65%72%3C%2F%68%32%3E%0A%09%09%09%3C%2F%64%69%76%3E%0A%09%09%09%0A%09%09%09%3C%64%69%76%20%69%64%3D%22%63%6F%6E%74%61%63%74%2D%69%6E%66%6F%22%3E%0A%09%09%09%09%3C%75%6C%20%69%64%3D%22%73%6F%63%69%61%6C%2D%6D%65%64%69%61%22%3E%0A%09%09%09%09%09%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%74%69%74%6C%65%3D%22%46%6C%69%63%6B%72%20%50%72%6F%66%69%6C%65%22%20%63%6C%61%73%73%3D%22%74%69%70%22%3E%3C%69%6D%67%20%73%72%63%3D%22%5F%6C%61%79%6F%75%74%2F%69%6D%61%67%65%73%2F%73%6F%63%69%61%6C%2D%69%63%6F%6E%73%2F%66%6C%69%63%6B%72%2E%70%6E%67%22%20%61%6C%74%3D%22%66%6C%69%63%6B%72%20%69%63%6F%6E%22%20%2F%3E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%74%69%74%6C%65%3D%22%54%77%69%74%74%65%72%20%50%72%6F%66%69%6C%65%22%20%63%6C%61%73%73%3D%22%74%69%70%22%3E%3C%69%6D%67%20%73%72%63%3D%22%5F%6C%61%79%6F%75%74%2F%69%6D%61%67%65%73%2F%73%6F%63%69%61%6C%2D%69%63%6F%6E%73%2F%74%77%69%74%74%65%72%2E%70%6E%67%22%20%61%6C%74%3D%22%74%77%69%74%74%65%72%20%69%63%6F%6E%22%20%2F%3E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%74%69%74%6C%65%3D%22%46%61%63%65%62%6F%6F%6B%20%50%72%6F%66%69%6C%65%22%20%63%6C%61%73%73%3D%22%74%69%70%22%3E%3C%69%6D%67%20%73%72%63%3D%22%5F%6C%61%79%6F%75%74%2F%69%6D%61%67%65%73%2F%73%6F%63%69%61%6C%2D%69%63%6F%6E%73%2F%66%61%63%65%62%6F%6F%6B%2E%70%6E%67%22%20%61%6C%74%3D%22%66%61%63%65%62%6F%6F%6B%20%69%63%6F%6E%22%20%2F%3E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%74%69%74%6C%65%3D%22%4C%69%6E%6B%65%64%20%49%6E%50%72%6F%66%69%6C%65%22%20%63%6C%61%73%73%3D%22%74%69%70%22%3E%3C%69%6D%67%20%73%72%63%3D%22%5F%6C%61%79%6F%75%74%2F%69%6D%61%67%65%73%2F%73%6F%63%69%61%6C%2D%69%63%6F%6E%73%2F%6C%69%6E%6B%65%64%69%6E%2E%70%6E%67%22%20%20%61%6C%74%3D%22%6C%69%6E%6B%65%64%69%6E%20%69%63%6F%6E%22%2F%3E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%74%69%74%6C%65%3D%22%53%65%6E%64%20%6D%65%20%61%20%6D%65%73%73%61%67%65%22%20%63%6C%61%73%73%3D%22%74%69%70%22%3E%3C%69%6D%67%20%73%72%63%3D%22%5F%6C%61%79%6F%75%74%2F%69%6D%61%67%65%73%2F%73%6F%63%69%61%6C%2D%69%63%6F%6E%73%2F%79%61%68%6F%6F%2E%70%6E%67%22%20%20%61%6C%74%3D%22%63%6F%6E%74%61%63%74%20%6D%65%22%2F%3E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%3C%2F%75%6C%3E%0A%09%09%09%09%3C%75%6C%3E%0A%09%09%09%09%09%3C%6C%69%3E%65%3A%20%3C%61%20%68%72%65%66%3D%22%6D%61%69%6C%74%6F%3A%6A%6F%68%6E%40%73%69%74%65%2E%63%6F%6D%22%3E%6A%6F%68%6E%40%73%69%74%65%6E%61%6D%65%2E%63%6F%6D%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%6C%69%3E%77%3A%20%3C%61%20%68%72%65%66%3D%22%6A%6F%68%6E%73%6D%69%74%68%2E%63%6F%6D%22%3E%6A%6F%68%6E%73%6D%69%74%68%73%73%69%74%65%2E%63%6F%6D%3C%2F%61%3E%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%6C%69%3E%70%3A%20%3C%73%74%72%6F%6E%67%3E%28%31%32%33%29%20%34%35%36%2D%37%38%39%30%3C%2F%73%74%72%6F%6E%67%3E%3C%2F%6C%69%3E%0A%09%09%09%09%3C%2F%75%6C%3E%0A%09%09%09%3C%2F%64%69%76%3E%0A%09%0A%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%20%2D%2D%3E%0A%09%09%0A%09%09%3C%21%2D%2D%20%2F%2F%20%50%52%4F%46%45%53%49%4F%4E%41%4C%20%50%52%4F%46%49%4C%45%20%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%20%2D%2D%3E%0A%09%09%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%20%66%69%78%65%64%22%3E%0A%09%09%0A%09%09%09%3C%68%32%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%6E%61%6D%65%22%3E%50%72%6F%66%65%73%73%69%6F%6E%61%6C%20%50%72%6F%66%69%6C%65%3C%2F%68%32%3E%0A%09%09%09%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%22%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%20%6C%61%73%74%2D%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%70%3E%50%65%6C%6C%65%6E%74%65%73%71%75%65%20%73%6F%6C%6C%69%63%69%74%75%64%69%6E%20%63%6F%6E%67%75%65%20%64%69%61%6D%2C%20%65%74%20%67%72%61%76%69%64%61%20%6C%65%6F%20%70%6F%73%75%65%72%65%20%61%74%2E%20%4E%75%6E%63%0A%09%09%09%09%09%20%66%65%72%6D%65%6E%74%75%6D%20%65%72%61%74%20%61%74%20%64%69%61%6D%20%63%6F%6E%76%61%6C%6C%69%73%20%76%65%6C%20%70%6F%72%74%74%69%74%6F%72%20%70%75%72%75%73%20%63%6F%6E%67%75%65%2E%20%50%72%6F%69%6E%20%62%6C%61%6E%64%69%74%2C%0A%09%09%09%09%09%20%6F%64%69%6F%20%61%63%20%61%6C%69%71%75%65%74%20%66%65%72%6D%65%6E%74%75%6D%2C%20%6C%65%63%74%75%73%20%65%73%74%20%64%69%63%74%75%6D%20%6E%69%73%6C%2C%20%61%63%20%65%6C%65%6D%65%6E%74%75%6D%20%64%75%69%20%61%6E%74%65%0A%09%09%09%09%09%20%65%74%20%69%70%73%75%6D%2E%20%4E%75%6C%6C%61%20%63%6F%6E%67%75%65%20%66%65%72%6D%65%6E%74%75%6D%20%64%69%63%74%75%6D%2E%20%43%75%6D%20%73%6F%63%69%69%73%20%6E%61%74%6F%71%75%65%20%70%65%6E%61%74%69%62%75%73%0A%09%09%09%09%09%20%65%74%20%6D%61%67%6E%69%73%20%64%69%73%20%70%61%72%74%75%72%69%65%6E%74%20%6D%6F%6E%74%65%73%2C%20%6E%61%73%63%65%74%75%72%20%72%69%64%69%63%75%6C%75%73%20%6D%75%73%2E%20%49%6E%74%65%67%65%72%20%61%63%0A%09%09%09%09%09%20%74%72%69%73%74%69%71%75%65%20%65%6E%69%6D%2E%20%4E%75%6E%63%20%66%72%69%6E%67%69%6C%6C%61%2C%20%65%6E%69%6D%20%76%65%6C%20%61%63%63%75%6D%73%61%6E%20%74%69%6E%63%69%64%75%6E%74%2C%20%6C%61%63%75%73%0A%09%09%09%09%09%20%74%75%72%70%69%73%20%76%65%73%74%69%62%75%6C%75%6D%20%6E%69%62%68%2C%20%76%65%6C%20%6D%61%74%74%69%73%20%61%6E%74%65%20%64%69%61%6D%20%75%74%20%6E%69%73%6C%2E%20%53%65%64%20%73%69%74%20%61%6D%65%74%0A%09%09%09%09%09%20%6D%61%75%72%69%73%20%6A%75%73%74%6F%2E%3C%2F%70%3E%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%20%2D%2D%3E%0A%09%09%09%0A%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%20%2D%2D%3E%0A%09%09%0A%09%09%3C%21%2D%2D%20%2F%2F%20%57%4F%52%4B%20%45%58%50%45%52%49%4E%43%45%20%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%20%2D%2D%3E%0A%09%09%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%20%66%69%78%65%64%22%3E%0A%09%09%0A%09%09%09%3C%68%32%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%6E%61%6D%65%22%3E%57%6F%72%6B%20%45%78%70%65%72%69%65%6E%63%65%3C%2F%68%32%3E%0A%09%09%09%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%22%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%68%34%3E%4A%75%6C%20%32%30%30%38%20%2D%20%50%72%65%73%65%6E%74%3C%2F%68%34%3E%0A%09%09%09%09%09%3C%68%32%3E%53%65%6E%69%6F%72%20%50%72%6F%6A%65%63%74%20%4D%61%6E%61%67%65%72%3C%2F%68%32%3E%0A%09%09%09%09%09%3C%68%33%3E%57%65%62%20%44%65%73%69%67%6E%20%53%74%75%64%69%6F%73%2C%20%46%75%6C%6C%2D%54%69%6D%65%3C%2F%68%33%3E%0A%09%09%09%09%09%3C%62%72%20%2F%3E%0A%09%09%09%09%09%3C%75%6C%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%4C%6F%72%65%6D%20%69%70%73%75%6D%20%64%6F%6C%6F%72%20%73%69%74%20%61%6D%65%74%2C%20%63%6F%6E%73%65%63%74%65%74%75%72%20%61%64%69%70%69%73%63%69%6E%67%20%65%6C%69%74%3C%2F%6C%69%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%56%69%76%61%6D%75%73%20%76%69%74%61%65%20%6C%69%62%65%72%6F%20%6F%64%69%6F%2C%20%65%75%20%69%6E%74%65%72%64%75%6D%20%65%6C%69%74%3C%2F%6C%69%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%44%6F%6E%65%63%20%64%69%67%6E%69%73%73%69%6D%20%70%75%72%75%73%20%76%65%6C%20%6C%65%6F%20%61%63%63%75%6D%73%61%6E%20%69%6E%74%65%72%64%75%6D%3C%2F%6C%69%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%50%72%6F%69%6E%20%73%69%74%20%61%6D%65%74%20%6D%61%73%73%61%20%6D%69%2C%20%69%6E%20%76%6F%6C%75%74%70%61%74%20%61%6E%74%65%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%2F%75%6C%3E%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%20%6C%61%73%74%2D%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%68%34%3E%41%70%72%20%32%30%30%37%20%2D%20%41%75%67%20%32%30%30%38%3C%2F%68%34%3E%0A%09%09%09%09%09%3C%68%32%3E%46%72%6F%6E%74%20%45%6E%64%20%44%65%76%65%6C%6F%70%65%72%3C%2F%68%32%3E%0A%09%09%09%09%09%3C%68%33%3E%41%63%6D%65%20%41%64%76%65%72%74%69%73%69%6E%67%2C%20%46%75%6C%6C%2D%54%69%6D%65%3C%2F%68%33%3E%0A%09%09%09%09%09%3C%62%72%20%2F%3E%0A%09%09%09%09%09%3C%75%6C%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%4E%75%6E%63%20%69%6E%20%64%6F%6C%6F%72%20%69%64%20%6C%61%63%75%73%20%64%69%63%74%75%6D%20%65%75%69%73%6D%6F%64%20%6D%6F%6C%65%73%74%69%65%20%75%74%20%74%6F%72%74%6F%72%3C%2F%6C%69%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%44%6F%6E%65%63%20%65%67%65%74%20%6E%75%6E%63%20%70%75%6C%76%69%6E%61%72%20%74%6F%72%74%6F%72%20%73%6F%6C%6C%69%63%69%74%75%64%69%6E%20%63%6F%6E%73%65%63%74%65%74%75%72%20%69%64%20%65%67%65%74%20%65%72%6F%73%3C%2F%6C%69%3E%0A%09%09%09%09%09%09%3C%6C%69%3E%4C%6F%72%65%6D%20%69%70%73%75%6D%20%64%6F%6C%6F%72%20%73%69%74%20%61%6D%65%74%2C%20%63%6F%6E%73%65%63%74%65%74%75%72%20%61%64%69%70%69%73%63%69%6E%67%20%65%6C%69%74%3C%2F%6C%69%3E%0A%09%09%09%09%09%3C%2F%75%6C%3E%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%20%2D%2D%3E%0A%09%09%09%0A%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%20%2D%2D%3E%0A%09%09%0A%09%09%3C%21%2D%2D%20%2F%2F%20%54%45%48%4E%49%43%41%4C%20%53%4B%49%4C%4C%53%20%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%20%2D%2D%3E%0A%09%09%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%20%66%69%78%65%64%22%3E%0A%09%09%0A%09%09%09%3C%68%32%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%6E%61%6D%65%22%3E%54%65%63%68%6E%69%63%61%6C%20%53%6B%69%6C%6C%73%3C%2F%68%32%3E%0A%09%09%09%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%22%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%68%34%3E%45%78%70%65%72%74%2C%20%34%20%79%65%61%72%73%3C%2F%68%34%3E%0A%09%09%09%09%09%3C%68%32%3E%3C%61%20%68%72%65%66%3D%22%23%22%3E%58%48%54%4D%4C%20%26%61%6D%70%3B%20%43%53%53%3C%2F%61%3E%3C%2F%68%32%3E%0A%09%09%09%09%09%3C%62%72%20%2F%3E%0A%09%09%09%09%09%3C%70%3E%43%72%61%73%20%6E%6F%6E%20%6E%75%6E%63%20%6E%69%73%6C%2E%20%4D%61%75%72%69%73%20%70%72%65%74%69%75%6D%20%61%75%63%74%6F%72%20%6F%72%6E%61%72%65%2E%20%50%72%6F%69%6E%20%73%69%74%20%61%6D%65%74%20%65%72%61%74%0A%09%09%09%09%09%20%63%6F%6E%73%65%63%74%65%74%75%72%20%6D%61%73%73%61%20%73%75%73%63%69%70%69%74%20%63%6F%6E%67%75%65%2E%20%50%65%6C%6C%65%6E%74%65%73%71%75%65%20%63%6F%6E%76%61%6C%6C%69%73%20%72%68%6F%6E%63%75%73%20%6D%61%73%73%61%0A%09%09%09%09%09%20%76%69%74%61%65%20%73%61%67%69%74%74%69%73%2E%20%3C%2F%70%3E%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%68%34%3E%41%64%76%61%6E%63%65%64%2C%20%32%20%79%65%61%72%73%3C%2F%68%34%3E%0A%09%09%09%09%09%3C%68%32%3E%3C%61%20%68%72%65%66%3D%22%23%22%3E%4A%61%76%61%73%63%72%69%70%74%3C%2F%61%3E%3C%2F%68%32%3E%0A%09%09%09%09%09%3C%62%72%20%2F%3E%0A%09%09%09%09%09%3C%70%3E%43%75%6D%20%73%6F%63%69%69%73%20%6E%61%74%6F%71%75%65%20%70%65%6E%61%74%69%62%75%73%20%65%74%20%6D%61%67%6E%69%73%20%64%69%73%20%70%61%72%74%75%72%69%65%6E%74%20%6D%6F%6E%74%65%73%2C%20%6E%61%73%63%65%74%75%72%0A%09%09%09%09%09%20%72%69%64%69%63%75%6C%75%73%20%6D%75%73%2E%20%50%72%6F%69%6E%20%73%65%64%20%65%6C%69%74%20%61%20%6D%61%75%72%69%73%20%70%72%65%74%69%75%6D%20%6D%6F%6C%65%73%74%69%65%2E%3C%2F%70%3E%0A%09%09%09%09%09%3C%70%3E%41%6C%69%71%75%61%6D%20%66%72%69%6E%67%69%6C%6C%61%20%75%6C%6C%61%6D%63%6F%72%70%65%72%20%73%6F%6C%6C%69%63%69%74%75%64%69%6E%2E%20%4E%75%6E%63%20%70%68%61%72%65%74%72%61%20%66%65%72%6D%65%6E%74%75%6D%20%0A%09%09%09%09%09%73%75%73%63%69%70%69%74%2E%3C%2F%70%3E%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%20%6C%61%73%74%2D%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%68%34%3E%42%65%67%69%6E%6E%65%72%2C%20%31%20%79%65%61%72%3C%2F%68%34%3E%0A%09%09%09%09%09%3C%68%32%3E%3C%61%20%68%72%65%66%3D%22%23%22%3E%6A%51%75%65%72%79%20%46%72%61%6D%65%77%6F%72%6B%3C%2F%61%3E%3C%2F%68%32%3E%0A%09%09%09%09%09%3C%62%72%20%2F%3E%0A%09%09%09%09%09%3C%70%3E%49%6E%20%6D%61%75%72%69%73%20%75%72%6E%61%2C%20%63%75%72%73%75%73%20%65%67%65%74%20%63%6F%6E%64%69%6D%65%6E%74%75%6D%20%61%63%2C%20%76%65%73%74%69%62%75%6C%75%6D%20%6E%65%63%20%6D%61%67%6E%61%2E%0A%09%09%09%09%09%20%4D%61%65%63%65%6E%61%73%20%6C%75%63%74%75%73%20%69%6E%74%65%72%64%75%6D%20%6D%61%75%72%69%73%2C%20%70%65%6C%6C%65%6E%74%65%73%71%75%65%20%73%65%6D%70%65%72%20%71%75%61%6D%20%73%6F%6C%6C%69%63%69%74%75%64%69%6E%20%65%75%2E%0A%09%09%09%09%09%20%43%6C%61%73%73%20%61%70%74%65%6E%74%20%74%61%63%69%74%69%20%73%6F%63%69%6F%73%71%75%20%61%64%20%6C%69%74%6F%72%61%20%74%6F%72%71%75%65%6E%74%20%70%65%72%20%63%6F%6E%75%62%69%61%20%6E%6F%73%74%72%61%2E%3C%2F%70%3E%0A%09%09%09%09%09%3C%70%3E%50%65%6C%6C%65%6E%74%65%73%71%75%65%20%65%6C%65%6D%65%6E%74%75%6D%20%68%65%6E%64%72%65%72%69%74%20%70%72%65%74%69%75%6D%2E%20%4E%61%6D%20%61%20%6C%61%63%75%73%20%72%69%73%75%73%2E%20%55%74%20%70%75%72%75%73%0A%09%09%09%09%09%6C%65%6F%2C%20%66%65%75%67%69%61%74%20%69%6E%20%76%6F%6C%75%74%70%61%74%20%6E%6F%6E%2C%20%75%6C%74%72%69%63%69%65%73%20%76%69%74%61%65%20%6C%65%63%74%75%73%2E%3C%2F%70%3E%09%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%20%2D%2D%3E%0A%09%09%09%0A%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%20%2D%2D%3E%0A%09%09%0A%09%09%3C%21%2D%2D%20%2F%2F%20%45%44%55%43%41%54%49%4F%4E%20%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%20%2D%2D%3E%0A%09%09%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%20%6C%61%73%74%2D%63%76%2D%73%65%63%74%69%6F%6E%20%66%69%78%65%64%22%3E%0A%09%09%0A%09%09%09%3C%68%32%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%6E%61%6D%65%22%3E%45%64%75%63%61%74%69%6F%6E%3C%2F%68%32%3E%0A%09%09%09%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%22%3E%0A%09%09%09%09%0A%09%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%74%65%6D%20%6C%61%73%74%2D%69%74%65%6D%22%3E%0A%09%09%09%09%09%3C%68%32%3E%42%6F%73%74%6F%6E%20%53%74%61%74%65%20%55%6E%69%76%65%72%73%69%74%79%3C%2F%68%32%3E%0A%09%09%09%09%09%3C%68%33%3E%44%75%61%6C%20%4D%61%6A%6F%72%2C%20%57%65%62%20%44%65%73%69%67%6E%20%61%6E%64%20%45%6E%67%6C%69%73%68%20%2D%20%33%2E%39%20%47%50%41%3C%2F%68%33%3E%0A%09%09%09%09%09%3C%62%72%20%2F%3E%0A%09%09%09%09%09%3C%70%3E%41%65%6E%65%61%6E%20%61%20%70%65%6C%6C%65%6E%74%65%73%71%75%65%20%74%6F%72%74%6F%72%2E%20%50%72%61%65%73%65%6E%74%20%6A%75%73%74%6F%20%6E%69%62%68%2C%20%74%65%6D%70%75%73%20%76%65%6C%0A%09%09%09%09%09%20%73%63%65%6C%65%72%69%73%71%75%65%20%65%67%65%74%2C%20%74%65%6D%70%75%73%20%69%64%20%71%75%61%6D%2E%20%50%72%61%65%73%65%6E%74%20%65%67%65%73%74%61%73%20%6E%75%6C%6C%61%20%73%69%74%20%61%6D%65%74%0A%09%09%09%09%09%20%6E%75%6C%6C%61%20%63%75%72%73%75%73%20%61%20%6C%6F%62%6F%72%74%69%73%20%6C%6F%72%65%6D%20%70%75%6C%76%69%6E%61%72%2E%20%4D%61%65%63%65%6E%61%73%20%76%65%6E%65%6E%61%74%69%73%2C%20%65%6C%69%74%0A%09%09%09%09%09%20%65%74%20%76%69%76%65%72%72%61%20%75%6C%74%72%69%63%65%73%2C%20%6D%61%75%72%69%73%20%6A%75%73%74%6F%20%72%75%74%72%75%6D%20%6F%72%63%69%73%2E%3C%2F%70%3E%09%0A%09%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%69%74%65%6D%20%2D%2D%3E%0A%09%09%09%09%0A%09%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%2D%69%74%65%6D%73%20%2D%2D%3E%0A%09%09%09%0A%09%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%63%76%2D%73%65%63%74%69%6F%6E%20%2D%2D%3E%0A%09%09%0A%09%09%3C%21%2D%2D%20%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%20%2D%2D%3E%0A%09%0A%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%23%63%76%20%2D%2D%3E%0A%09%0A%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%70%61%6E%65%6C%22%3E%0A%09%09%0A%09%09%3C%70%20%69%64%3D%22%66%6F%72%6D%73%74%61%74%75%73%22%3E%3C%2F%70%3E%0A%09%09%3C%66%6F%72%6D%20%69%64%3D%22%63%6F%6E%74%61%63%74%2D%66%6F%72%6D%22%20%61%63%74%69%6F%6E%3D%22%6A%61%76%61%73%63%72%69%70%74%3A%61%6C%65%72%74%28%27%73%75%63%63%65%73%73%21%27%29%3B%22%3E%0A%09%09%09%3C%66%69%65%6C%64%73%65%74%3E%0A%09%09%09%09%3C%70%3E%0A%09%09%09%09%09%3C%69%6E%70%75%74%20%63%6C%61%73%73%3D%22%74%65%78%74%62%6F%78%22%20%74%79%70%65%3D%22%74%65%78%74%22%20%6E%61%6D%65%3D%22%6E%61%6D%65%22%20%76%61%6C%75%65%3D%22%4E%61%6D%65%2A%22%0A%09%09%09%09%09%6F%6E%66%6F%63%75%73%3D%22%69%66%28%74%68%69%73%2E%76%61%6C%75%65%3D%3D%27%4E%61%6D%65%2A%27%29%74%68%69%73%2E%76%61%6C%75%65%3D%27%27%3B%22%20%6F%6E%62%6C%75%72%3D%22%69%66%28%74%68%69%73%2E%76%61%6C%75%65%3D%3D%27%27%29%74%68%69%73%2E%76%61%6C%75%65%3D%27%4E%61%6D%65%2A%27%3B%22%20%2F%3E%0A%09%09%09%09%3C%2F%70%3E%0A%09%09%09%09%3C%70%3E%0A%09%09%09%09%09%3C%69%6E%70%75%74%20%63%6C%61%73%73%3D%22%74%65%78%74%62%6F%78%22%20%74%79%70%65%3D%22%74%65%78%74%22%20%6E%61%6D%65%3D%22%65%6D%61%69%6C%22%20%76%61%6C%75%65%3D%22%45%6D%61%69%6C%2A%22%0A%09%09%09%09%09%6F%6E%66%6F%63%75%73%3D%22%69%66%28%74%68%69%73%2E%76%61%6C%75%65%3D%3D%27%45%6D%61%69%6C%2A%27%29%74%68%69%73%2E%76%61%6C%75%65%3D%27%27%3B%22%20%6F%6E%62%6C%75%72%3D%22%69%66%28%74%68%69%73%2E%76%61%6C%75%65%3D%3D%27%27%29%74%68%69%73%2E%76%61%6C%75%65%3D%27%45%6D%61%69%6C%2A%27%3B%22%20%2F%3E%0A%09%09%09%09%3C%2F%70%3E%0A%09%09%09%09%3C%70%3E%0A%09%09%09%09%09%3C%69%6E%70%75%74%20%63%6C%61%73%73%3D%22%74%65%78%74%62%6F%78%22%20%74%79%70%65%3D%22%74%65%78%74%22%20%6E%61%6D%65%3D%22%73%75%62%6A%65%63%74%22%20%76%61%6C%75%65%3D%22%53%75%62%6A%65%63%74%2A%22%20%20%0A%09%09%09%09%09%6F%6E%66%6F%63%75%73%3D%22%69%66%28%74%68%69%73%2E%76%61%6C%75%65%3D%3D%27%53%75%62%6A%65%63%74%2A%27%29%74%68%69%73%2E%76%61%6C%75%65%3D%27%27%3B%22%20%6F%6E%62%6C%75%72%3D%22%69%66%28%74%68%69%73%2E%76%61%6C%75%65%3D%3D%27%27%29%74%68%69%73%2E%76%61%6C%75%65%3D%27%53%75%62%6A%65%63%74%2A%27%3B%22%2F%3E%0A%09%09%09%09%3C%2F%70%3E%0A%09%09%09%09%3C%70%3E%0A%09%09%09%09%09%3C%74%65%78%74%61%72%65%61%20%63%6C%61%73%73%3D%22%74%65%78%74%62%6F%78%22%20%6E%61%6D%65%3D%22%6D%65%73%73%61%67%65%22%20%72%6F%77%73%3D%22%33%22%20%63%6F%6C%73%3D%22%32%35%22%3E%3C%2F%74%65%78%74%61%72%65%61%3E%0A%09%09%09%09%3C%2F%70%3E%0A%09%09%09%09%3C%70%3E%0A%09%09%09%09%09%3C%69%6E%70%75%74%20%63%6C%61%73%73%3D%22%62%74%6E%22%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%6E%61%6D%65%3D%22%73%75%62%6D%69%74%22%20%76%61%6C%75%65%3D%22%53%65%6E%64%21%22%20%2F%3E%0A%09%09%09%09%09%3C%21%2D%2D%3C%69%6E%70%75%74%20%63%6C%61%73%73%3D%22%62%74%6E%22%20%74%79%70%65%3D%22%72%65%73%65%74%22%20%6E%61%6D%65%3D%22%73%75%62%6D%69%74%22%20%76%61%6C%75%65%3D%22%52%65%73%65%74%22%20%2F%3E%2D%2D%3E%0A%09%09%09%09%3C%2F%70%3E%0A%09%09%09%3C%2F%66%69%65%6C%64%73%65%74%3E%0A%09%09%3C%2F%66%6F%72%6D%3E%3C%21%2D%2D%20%65%6E%64%20%23%63%6F%6E%74%61%63%74%2D%66%6F%72%6D%20%2D%2D%3E%0A%0A%09%3C%2F%64%69%76%3E%3C%21%2D%2D%20%65%6E%64%20%2E%70%61%6E%65%6C%20%2D%2D%3E%0A%09%0A%09%3C%62%72%20%2F%3E%0A%09%3C%62%72%20%2F%3E%0A%09%0A%09%3C%61%20%63%6C%61%73%73%3D%22%65%6D%61%69%6C%6D%65%22%20%68%72%65%66%3D%22%23%22%3E%45%6D%61%69%6C%20%4D%65%3C%2F%61%3E'));
//-->
</script><div id="cv">
	
		<!-- // ABOUT ME /////////////////////////////////////////////////////////////////// -->
		
		<div class="cv-section first-cv-section fixed">
		
			<div class="person">
				<a class="lightbox" rel="mypics" href="http://www.bitpublimedia.ro/themeforest/resume/_content/640x550-placeholder.jpg" title="description item 1">
					<img src="_%20CV%20_%20RESUME%20Template%20__files/100x100-placeholder.jpg" alt="john smith" height="100" width="100">
				</a>
				<h1><cufon style="width: 111px; height: 48px;" alt="John " class="cufon cufon-canvas"><canvas style="width: 187px; height: 59px; top: -8px; left: -9px;" height="59" width="187"></canvas><cufontext>John </cufontext></cufon><cufon style="width: 123px; height: 48px;" alt="Smith" class="cufon cufon-canvas"><canvas style="width: 183px; height: 59px; top: -8px; left: -9px;" height="59" width="183"></canvas><cufontext>Smith</cufontext></cufon></h1>
				<h2>Front End Developer</h2>
			</div>
			
			<div id="contact-info">
				<ul id="social-media">
					<li><a href="#" title="Flickr Profile" class="tip"><img src="_%20CV%20_%20RESUME%20Template%20__files/flickr.png" alt="flickr icon"></a></li>
					<li><a href="#" title="Twitter Profile" class="tip"><img src="_%20CV%20_%20RESUME%20Template%20__files/twitter.png" alt="twitter icon"></a></li>
					<li><a href="#" title="Facebook Profile" class="tip"><img src="_%20CV%20_%20RESUME%20Template%20__files/facebook.png" alt="facebook icon"></a></li>
					<li><a href="#" title="Linked InProfile" class="tip"><img src="_%20CV%20_%20RESUME%20Template%20__files/linkedin.png" alt="linkedin icon"></a></li>
					<li><a href="#" title="Send me a message" class="tip"><img src="_%20CV%20_%20RESUME%20Template%20__files/yahoo.png" alt="contact me"></a></li>
				</ul>
				<ul>
					<li>e: <a href="mailto:john@site.com">john@sitename.com</a></li>
					<li>w: <a href="http://www.bitpublimedia.ro/themeforest/resume/johnsmith.com">johnsmithssite.com</a></li>
					<li>p: <strong>(123) 456-7890</strong></li>
				</ul>
			</div>
	
		</div><!-- end .cv-section -->
		
		<!-- // PROFESIONAL PROFILE //////////////////////////////////////////////////////// -->
		
		<div class="cv-section fixed">
		
			<h2 class="cv-section-name"><cufon style="width: 123px; height: 24px;" alt="Professional " class="cufon cufon-canvas"><canvas style="width: 163px; height: 29px; top: -4px; left: -5px;" height="29" width="163"></canvas><cufontext>Professional </cufontext></cufon><cufon style="width: 63px; height: 24px;" alt="Profile" class="cufon cufon-canvas"><canvas style="width: 96px; height: 29px; top: -4px; left: -5px;" height="29" width="96"></canvas><cufontext>Profile</cufontext></cufon></h2>
			
			<div class="cv-section-items">
				
				<div class="item last-item">
					<p>Pellentesque sollicitudin congue diam, et gravida leo posuere at. Nunc
					 fermentum erat at diam convallis vel porttitor purus congue. Proin blandit,
					 odio ac aliquet fermentum, lectus est dictum nisl, ac elementum dui ante
					 et ipsum. Nulla congue fermentum dictum. Cum sociis natoque penatibus
					 et magnis dis parturient montes, nascetur ridiculus mus. Integer ac
					 tristique enim. Nunc fringilla, enim vel accumsan tincidunt, lacus
					 turpis vestibulum nibh, vel mattis ante diam ut nisl. Sed sit amet
					 mauris justo.</p>
				</div><!-- end .item -->
				
			</div><!-- end .cv-section-items -->
			
		</div><!-- end .cv-section -->
		
		<!-- // WORK EXPERINCE /////////////////////////////////////////////////////////// -->
		
		<div class="cv-section fixed">
		
			<h2 class="cv-section-name"><cufon style="width: 56px; height: 24px;" alt="Work " class="cufon cufon-canvas"><canvas style="width: 96px; height: 29px; top: -4px; left: -5px;" height="29" width="96"></canvas><cufontext>Work </cufontext></cufon><cufon style="width: 105px; height: 24px;" alt="Experience" class="cufon cufon-canvas"><canvas style="width: 137px; height: 29px; top: -4px; left: -5px;" height="29" width="137"></canvas><cufontext>Experience</cufontext></cufon></h2>
			
			<div class="cv-section-items">
				
				<div class="item">
					<h4>Jul 2008 - Present</h4>
					<h2><cufon style="width: 64px; height: 22px;" alt="Senior " class="cufon cufon-canvas"><canvas style="width: 99px; height: 27px; top: -4px; left: -4px;" height="27" width="99"></canvas><cufontext>Senior </cufontext></cufon><cufon style="width: 69px; height: 22px;" alt="Project " class="cufon cufon-canvas"><canvas style="width: 104px; height: 27px; top: -4px; left: -4px;" height="27" width="104"></canvas><cufontext>Project </cufontext></cufon><cufon style="width: 80px; height: 22px;" alt="Manager" class="cufon cufon-canvas"><canvas style="width: 113px; height: 27px; top: -4px; left: -4px;" height="27" width="113"></canvas><cufontext>Manager</cufontext></cufon></h2>
					<h3>Web Design Studios, Full-Time</h3>
					<br>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
						<li>Vivamus vitae libero odio, eu interdum elit</li>
						<li>Donec dignissim purus vel leo accumsan interdum</li>
						<li>Proin sit amet massa mi, in volutpat ante</li>
					</ul>
				</div><!-- end .item -->
				
				<div class="item last-item">
					<h4>Apr 2007 - Aug 2008</h4>
					<h2><cufon style="width: 53px; height: 22px;" alt="Front " class="cufon cufon-canvas"><canvas style="width: 88px; height: 27px; top: -4px; left: -4px;" height="27" width="88"></canvas><cufontext>Front </cufontext></cufon><cufon style="width: 39px; height: 22px;" alt="End " class="cufon cufon-canvas"><canvas style="width: 75px; height: 27px; top: -4px; left: -4px;" height="27" width="75"></canvas><cufontext>End </cufontext></cufon><cufon style="width: 97px; height: 22px;" alt="Developer" class="cufon cufon-canvas"><canvas style="width: 129px; height: 27px; top: -4px; left: -4px;" height="27" width="129"></canvas><cufontext>Developer</cufontext></cufon></h2>
					<h3>Acme Advertising, Full-Time</h3>
					<br>
					<ul>
						<li>Nunc in dolor id lacus dictum euismod molestie ut tortor</li>
						<li>Donec eget nunc pulvinar tortor sollicitudin consectetur id eget eros</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
					</ul>
				</div><!-- end .item -->
				
			</div><!-- end .cv-section-items -->
			
		</div><!-- end .cv-section -->
		
		<!-- // TEHNICAL SKILLS /////////////////////////////////////////////////////////// -->
		
		<div class="cv-section fixed">
		
			<h2 class="cv-section-name"><cufon style="width: 97px; height: 24px;" alt="Technical " class="cufon cufon-canvas"><canvas style="width: 136px; height: 29px; top: -4px; left: -5px;" height="29" width="136"></canvas><cufontext>Technical </cufontext></cufon><cufon style="width: 51px; height: 24px;" alt="Skills" class="cufon cufon-canvas"><canvas style="width: 85px; height: 29px; top: -4px; left: -5px;" height="29" width="85"></canvas><cufontext>Skills</cufontext></cufon></h2>
			
			<div class="cv-section-items">
				
				<div class="item">
					<h4>Expert, 4 years</h4>
					<h2><a href="#"><cufon style="width: 69px; height: 22px;" alt="XHTML " class="cufon cufon-canvas"><canvas style="width: 105px; height: 27px; top: -4px; left: -4px;" height="27" width="105"></canvas><cufontext>XHTML </cufontext></cufon><cufon style="width: 21px; height: 22px;" alt="&amp; " class="cufon cufon-canvas"><canvas style="width: 56px; height: 27px; top: -4px; left: -4px;" height="27" width="56"></canvas><cufontext>&amp; </cufontext></cufon><cufon style="width: 35px; height: 22px;" alt="CSS" class="cufon cufon-canvas"><canvas style="width: 64px; height: 27px; top: -4px; left: -4px;" height="27" width="64"></canvas><cufontext>CSS</cufontext></cufon></a></h2>
					<br>
					<p>Cras non nunc nisl. Mauris pretium auctor ornare. Proin sit amet erat
					 consectetur massa suscipit congue. Pellentesque convallis rhoncus massa
					 vitae sagittis. </p>
				</div><!-- end .item -->
				
				<div class="item">
					<h4>Advanced, 2 years</h4>
					<h2><a href="#"><cufon style="width: 90px; height: 22px;" alt="Javascript" class="cufon cufon-canvas"><canvas style="width: 123px; height: 27px; top: -4px; left: -4px;" height="27" width="123"></canvas><cufontext>Javascript</cufontext></cufon></a></h2>
					<br>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
					 ridiculus mus. Proin sed elit a mauris pretium molestie.</p>
					<p>Aliquam fringilla ullamcorper sollicitudin. Nunc pharetra fermentum 
					suscipit.</p>
				</div><!-- end .item -->
				
				<div class="item last-item">
					<h4>Beginner, 1 year</h4>
					<h2><a href="#"><cufon style="width: 66px; height: 22px;" alt="jQuery " class="cufon cufon-canvas"><canvas style="width: 102px; height: 27px; top: -4px; left: -4px;" height="27" width="102"></canvas><cufontext>jQuery </cufontext></cufon><cufon style="width: 103px; height: 22px;" alt="Framework" class="cufon cufon-canvas"><canvas style="width: 133px; height: 27px; top: -4px; left: -4px;" height="27" width="133"></canvas><cufontext>Framework</cufontext></cufon></a></h2>
					<br>
					<p>In mauris urna, cursus eget condimentum ac, vestibulum nec magna.
					 Maecenas luctus interdum mauris, pellentesque semper quam sollicitudin eu.
					 Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
					<p>Pellentesque elementum hendrerit pretium. Nam a lacus risus. Ut purus
					leo, feugiat in volutpat non, ultricies vitae lectus.</p>	
				</div><!-- end .item -->
				
			</div><!-- end .cv-section-items -->
			
		</div><!-- end .cv-section -->
		
		<!-- // EDUCATION ////////////////////////////////////////////////////////////////// -->
		
		<div class="cv-section last-cv-section fixed">
		
			<h2 class="cv-section-name"><cufon style="width: 97px; height: 24px;" alt="Education" class="cufon cufon-canvas"><canvas style="width: 128px; height: 29px; top: -4px; left: -5px;" height="29" width="128"></canvas><cufontext>Education</cufontext></cufon></h2>
			
			<div class="cv-section-items">
				
				<div class="item last-item">
					<h2><cufon style="width: 68px; height: 22px;" alt="Boston " class="cufon cufon-canvas"><canvas style="width: 104px; height: 27px; top: -4px; left: -4px;" height="27" width="104"></canvas><cufontext>Boston </cufontext></cufon><cufon style="width: 52px; height: 22px;" alt="State " class="cufon cufon-canvas"><canvas style="width: 87px; height: 27px; top: -4px; left: -4px;" height="27" width="87"></canvas><cufontext>State </cufontext></cufon><cufon style="width: 93px; height: 22px;" alt="University" class="cufon cufon-canvas"><canvas style="width: 122px; height: 27px; top: -4px; left: -4px;" height="27" width="122"></canvas><cufontext>University</cufontext></cufon></h2>
					<h3>Dual Major, Web Design and English - 3.9 GPA</h3>
					<br>
					<p>Aenean a pellentesque tortor. Praesent justo nibh, tempus vel
					 scelerisque eget, tempus id quam. Praesent egestas nulla sit amet
					 nulla cursus a lobortis lorem pulvinar. Maecenas venenatis, elit
					 et viverra ultrices, mauris justo rutrum orcis.</p>	
				</div><!-- end .item -->
				
			</div><!-- end .cv-section-items -->
			
		</div><!-- end .cv-section -->
		
		<!-- ////////////////////////////////////////////////////////////////////////////// -->
	
	</div><!-- end #cv -->
	
	<div class="panel">
		
		<p id="formstatus"></p>
		<form id="contact-form" action="javascript:alert('success!');">
			<fieldset>
				<p>
					<input class="textbox" name="name" value="Name*" onfocus="if(this.value=='Name*')this.value='';" onblur="if(this.value=='')this.value='Name*';" type="text">
				</p>
				<p>
					<input class="textbox" name="email" value="Email*" onfocus="if(this.value=='Email*')this.value='';" onblur="if(this.value=='')this.value='Email*';" type="text">
				</p>
				<p>
					<input class="textbox" name="subject" value="Subject*" onfocus="if(this.value=='Subject*')this.value='';" onblur="if(this.value=='')this.value='Subject*';" type="text">
				</p>
				<p>
					<textarea class="textbox" name="message" rows="3" cols="25"></textarea>
				</p>
				<p>
					<input class="btn" name="submit" value="Send!" type="submit">
					<!--<input class="btn" type="reset" name="submit" value="Reset" />-->
				</p>
			</fieldset>
		</form><!-- end #contact-form -->

	</div><!-- end .panel -->
	
	<br>
	<br>
	
	<a class="emailme" href="#">Email Me</a>

	<script type="text/javascript"> Cufon.now(); </script>
	<!-- analytics here -->
	

<div id="fancy_overlay"></div><div id="fancy_loading"><div></div></div><div id="fancy_outer"><div id="fancy_inner"><div id="fancy_close"></div><div id="fancy_bg"><div class="fancy_bg" id="fancy_bg_n"></div><div class="fancy_bg" id="fancy_bg_ne"></div><div class="fancy_bg" id="fancy_bg_e"></div><div class="fancy_bg" id="fancy_bg_se"></div><div class="fancy_bg" id="fancy_bg_s"></div><div class="fancy_bg" id="fancy_bg_sw"></div><div class="fancy_bg" id="fancy_bg_w"></div><div class="fancy_bg" id="fancy_bg_nw"></div></div><a href="javascript:;" id="fancy_left"><span class="fancy_ico" id="fancy_left_ico"></span></a><a href="javascript:;" id="fancy_right"><span class="fancy_ico" id="fancy_right_ico"></span></a><div id="fancy_content"></div></div></div><div id="fancy_title"><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="fancy_title" id="fancy_title_left"></td><td class="fancy_title" id="fancy_title_main"><div></div></td><td class="fancy_title" id="fancy_title_right"></td></tr></tbody></table></div></body></html>