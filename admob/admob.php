<!DOCTYPE html> 
<html> 
 <head> 
	<title>Page Title</title> 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
<script src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
 	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<style type="text/css">
		.custom_header { position:fixed;}
	</style>
 </head> 
 

<body> 
 <div data-role="page" data-theme="a" id="index" data-backbtn="false"> 
 	<div data-role="header" data-theme="a" class="custom-header">
			<h1>Pinehead.tv</h1>
	</div>
	<div data-role="content" data-theme="b"> 


		<a href="#index1" data-role="button">Hash Link</a>
		<a href="admob2.php" data-role="button">Next Page via Ajax</a>
		
		<?php include('admob_js.php'); ?>
		
		</div> 
	
	
</div> 
 <div data-role="page" data-theme="a" id="index1" data-backbtn="false"> 
 	<div data-role="header" data-theme="a" class="custom-header">
			<h1>Pinehead.tv</h1>
	</div>
	<div data-role="content">
	
	<?php include('admob_js.php'); ?>

</div>
</div>



</body>
</html>
