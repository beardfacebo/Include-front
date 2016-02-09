<!DOCTYPE html>
<html lang='en'>
<head>
	<!--the php tag to include head.php -->
	<?php
	include('template/head.php');
	?>

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/zebra_tooltips.css">
	<!-- // Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" href="css/links.css">


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="js/testimonial/modernizr.js"></script>
	<script type="text/javascript" src="js/zebra_tooltips.js"></script>

	<script type="text/javascript" src="js/main.js"></script>
</head>
<!-- //////////////////////////////////// NAVBAR-->
<body>
	<?php
	include('template/header.php');
	?>


	 <!-- CONTENT -->
	<div class="container">
	  	<div class="row">
	 		<div class="col-sm-8 col-sm-offset-2">
	 			<div id="title"><h1>Useful Links</h1></div>
			    <ul id="links-list">
		    		<?php
					// read the json file
					$jsonFile = file_get_contents('content/links.json');
					$arrLinks = json_decode($jsonFile, true);
					$arrLinks = $arrLinks['links'];
					foreach($arrLinks as $arrLink){
						$str = '<li>';
						$str .= '<a target="_blank" href="'.$arrLink['link'].'">'.$arrLink['title'].'</a>';
						$str .= '<p>'.$arrLink['text'].'</p>';
						$str .= '</li>'.PHP_EOL;
						echo $str;
					}
					?>
			    </ul>
			 </div>
		</div>
		
	 </div>

	 <!-- FOOTER -->
	<?php
	include('template/footer.php');
	?>
</body>
</html>