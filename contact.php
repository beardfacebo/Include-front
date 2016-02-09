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
	<link rel="stylesheet" href="css/contact.css">
	
	<style>
	/* Fixed header and footer.
	* --------------------------------------- */
	</style>

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
	include('content/contact-about.php');
	?>
	 <div class="container">
	  	<div class="row">
	  		<div class="col-sm-8 col-sm-offset-2">
	  		<div id="about-us"><h1><?php echo $arrContactAbout['header'];?></h1></div>
				<div id="about-us-text">
					<?php echo $arrContactAbout['aboutText'];?>
				</div>
			<div id="contact-us"><h1>Contact Us</h1></div>
	  		</div>
	  		<div class="col-sm-4 col-sm-offset-2">
	  			<div id="contact-us-input">
	  			<?php
	  			extract($_POST);
	  			if(isset($action)){
					$to = "includeme@annafreud.org";
					$subject = "Website Contact Form";
					$message = '
					<html>
					<body>
					<p>Wesite Contact Form</p>
					<b>Name:</b>'.$name.'<br />
					<b>Email:</b>'.$email.'<br />
					<b>Subject:</b>'.$subject.'<br />
					<b>Message:</b>'.nl2br($message).'<br />
					</body>
					</html>
					';
					$headers = "From: contact@annafreud.org" .PHP_EOL;
					$headers .= "CC: marji_sound@yahoo.com" .PHP_EOL;
					$headers .= "MIME-Version: 1.0" .PHP_EOL;
					$headers .= "Content-type:text/html;charset=UTF-8" .PHP_EOL;


					mail($to,$subject,$message,$headers);

	  				echo '<span style="color:red;">Message sent successfully.</span>';
	  			}
	  			?>
	  			<form class="contactUs" action="" method="POST">
			    <input name="action" value="submit" type="hidden">
			    Name:<br>
			    <input name="name" size="30" type="text"><br>
			    Email:<br>
			    <input name="email" size="30" type="text"><br>
			    Subject:<br>
			    <input name="subject" size="30" type="text"><br>
			    Message:<br>
			    <textarea name="message" rows="7" cols="30"></textarea><br>
			    <input value="Send email" type="submit">
			    </form>
			    </div>
			</div>
	 		<div class="col-sm-4 col-sm-offset-0">
	 			<div id="contact-us-text">
			    <p><b>Address:</b> <?php echo $arrContactAbout['address'];?>
				<br><b>Email:</b> <a href="mailto:<?php echo $arrContactAbout['email'];?>"><?php echo $arrContactAbout['email'];?></a>
				<br><b>Tel:</b> <?php echo $arrContactAbout['tel'];?>
				<br><b>Web:</b> <a href="<?php echo $arrContactAbout['web'];?>"><?php echo $arrContactAbout['web'];?></a>
				<br><b>Twitter:</b> <a href="https://twitter.com/<?php echo $arrContactAbout['twitter'];?>">@<?php echo $arrContactAbout['twitter'];?></a></p>
				<?php echo $arrContactAbout['map'];?>
				</div>
			</div>
			</div>
		</div>
	</div>
	 <!-- FOOTER -->
	<?php
	include('template/footer.php');
	?>
</body>
</html>