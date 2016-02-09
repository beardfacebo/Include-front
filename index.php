<!DOCTYPE html>
<html lang='en'>
<head>
	<!--the php tag to include head.php -->
	<?php
	include('template/head.php');
	?>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" href="css/zebra_tooltips.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/testimonial/style.css">
	<link rel="stylesheet" href="css/design.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/testimonial/modernizr.js"></script>
	<script type="text/javascript" src="js/testimonial/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="js/testimonial/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/testimonial/main.js"></script>
	<script type="text/javascript" src="js/zebra_tooltips.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/index.js"></script>

</head>
<!-- //////////////////////////////////// NAVBAR-->
<body>
	<?php
	include('template/header.php');
	?>
	<!-- //////////////////////////////////// MAIN BODY  -->
	<div class="container">
		<div id="fullpage">
			<!-- //////////////////////////////////// ABOUT PAGE -->
			<section id="second-page" class="section">
				<?php
				include('content/fp-about-us.php');
				?>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<header class="lead" id="second-header"><?php echo $arrFPAboutUs['header'];?></header>
						<div id="second-text" class="hidden-xs">
							<?php
							echo $arrFPAboutUs['body'];
							?>
                        </div>
                        <header class="lead visible-xs" id="second-header-xs"><?php echo $arrFPAboutUs['header'];?></header>
                        <div id="second-text-xs" class="visible-xs">
	                        <?php
							echo $arrFPAboutUs['body-xs'];
							?>
                        </div>
                    </div>
                    <!-- <div class="col-sm-1"></div> -->
                </div>
            </section>
			<!-- //////////////////////////////////// WHY PAGE -->
			<section id="third-page" class="section">
				<?php
				include('content/why-us.php');
				?>
				<div id="why-container">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<header class="lead hidden-xs" id="third-header"><?php echo $arrFPWhyUs['header'];?></header>
                        	<div id="third-text" class="hidden-xs">
                        		<div class="row">
                        		<div class="col-sm-6">
                        			<!-- this is the php code to call variables in the why-us.php file -->
	                        		<h2><?php echo $arrFPWhyUs['FirstColTitle'];?></h2>	
									<ul class="ul-orange">
										<?php
											echo $arrFPWhyUs['FirstColBody'];
										?>
									</ul>
							    </div>
							    <div  class="col-sm-6">
									<h2><?php echo $arrFPWhyUs['SecondColTitle'];?></h2>	
									<ul class="ul-blue">
										<?php
											echo $arrFPWhyUs['SecondColBody'];
										?>
									</ul>
							    </div>
							</div>
                        	</div><!-- end of third-text -->
                        	<header class="lead visible-xs" id="third-header-xs">Why Use IncludeME?</header>
                        	<div id="third-text-xs" class="visible-xs">
                        		<h2><?php echo $arrFPWhyUs['FirstColTitle'];?></h2>	
								<ul class="ul-orange">
									<?php
										echo $arrFPWhyUs['FirstColBody'];
									?>
								</ul>
								<h2 id="clinic"><?php echo $arrFPWhyUs['SecondColTitle'];?></h2>	
								<ul class="ul-blue">
									<?php
										echo $arrFPWhyUs['SecondColBody'];
									?>
								</ul>
                        	</div><!-- end of third-text -->
						</div><!-- end of col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 -->
					</div><!-- end of row -->
				</div><!-- end of "why-container" -->
			</section><!-- end of section third-page -->
			<!-- //////////////////////////////////// TOOLS PAGE -->
			<section id="fourth-page" class="section">
				<?php
								// read the json file
				$jsonFile = file_get_contents('content/fp-tools.json');
				$arrFPTools = json_decode($jsonFile, true);
				?>
				<div id="tools-container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
							<header class="lead hidden-xs" id="fourth-header"><?php echo $arrFPTools['title'];?></header>
							<header class="lead visible-xs" id="fourth-header-xs"><?php echo $arrFPTools['title'];?></header>
                    		<div id="fourth-text">
                    			<div class="responsive">
								  	<?php
									$arrFPTools = $arrFPTools['tools'];
									foreach($arrFPTools as $arrFPTool){
										$str = '<div>';
										$str .= '<h3>'.$arrFPTool['title'].'</h3>';
										$str .= '<img class="toolsIcons" src="images/ToolsIcons/'.$arrFPTool['image'].'">';
										$str .= '<div class="tool-text">'.$arrFPTool['text'].'</div>';
										$str .= '</div>'.PHP_EOL;
										echo $str;
									}
									?>
								</div> <!-- end of responsive -->
                    		</div><!-- end of fourth-text -->
					   	</div><!-- end of class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 -->
					</div><!-- end of row -->
				</div><!-- end of tools-container" -->
			</section><!-- end of secsion fourth-page -->

			<!-- //////////////////////////////////// TESTIMONIALS PAGE -->
			<section id="fifth-page" class="section" style="position: relative;">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="cd-testimonials-wrapper cd-container">
							<ul class="cd-testimonials">
								<?php
								// read the json file
								$jsonFile = file_get_contents('content/fp-testimonials.json');
								$arrFPTestimonials = json_decode($jsonFile, true);
								$arrFPTestimonials = $arrFPTestimonials['testimonials'];
								foreach($arrFPTestimonials as $arrFPTestimonial){
									$str = '<li>';
									$str .= '<p>“'.$arrFPTestimonial['text'].'”</p>';
									$str .= '<div class="cd-author">';
									$str .= '<img alt="Author image" src="images/testimonials/'.$arrFPTestimonial['image'].'">';
									$str .= '<ul class="cd-author-info">';
									$str .= '<li>'.$arrFPTestimonial['title'].'</li>';
									$str .= '</ul>';
									$str .= '</div>';
									$str .= '</li>'.PHP_EOL;
									echo $str;
								}
								?>
							</ul> <!-- cd-testimonials -->
						</div> <!-- cd-testimonials-wrapper -->
					</div><!-- end of col-md-10 col-md-offset-1 -->
				</div><!-- end of row -->
			</section><!-- end of section fifth-page -->
		<!-- Fullpage end div here below -->
		</div><!-- end of fullpage -->
	</div><!-- end of container -->
			<!-- FOOTER -->				
	
	<?php
	include('template/footer.php');
	?>

	</body>
	</html>