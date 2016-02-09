<!DOCTYPE html>
<html lang= 'en'>
<head>

	<!--the php tag to include head.php -->
	<?php
	include('template/head.php');
	?>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/zebra_tooltips.css">
	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" href="css/faq.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/zebra_tooltips.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/faq.js"></script>

</head>

<body>
	<?php
	include('template/header.php');
	?>

	 <section id="faqs-page">
     <div class="container">
	  	<div class="row">
	 		<div class="col-sm-8 col-sm-offset-2">
	 			<div id="title"><h1 class="hidden-xs">IncludeME FAQs</h1></div>
	 			<div id="title"><h1 class="visible-xs">IncludeME FAQs</h1></div>
	 			<div id="tabs-container">
		 			<ul class="tabs-menu">
				        <li id="tab-yp" class="current"><a href="#tab-1" class="tooltips" title="Young&nbsp;People"><img src="images/Young-Avatar.svg" height="32"></a></li>
				        <li id="tab-clinician"><a href="#tab-2" class="tooltips" title="Clinicians"><img src="images/clinician.svg" height="32"></a></li>
				        <li id="tab-parents"><a href="#tab-3" class="tooltips" title="Parents"><img src="images/parent.svg" height="32"></a></li>
	    			</ul>

				 	<div class="tab">
				 		<div id="tab-1" class="tab-content">
							<ul class="faqList"> 
								<?php
								include('content/faq-young.php');
								foreach($arrFAQs as $arrFAQ){
									$str = '<li>';
									$str .= '<span class="faqItem">'.$arrFAQ['question'].'</span>';
									$str .= '<div class="faqDiv">'.$arrFAQ['answer'].'</div>';
									$str .= '</li>'.PHP_EOL;
									echo $str;
								}
								?>
							</ul>
						</div>

	 					<div id="tab-2" class="tab-content">
		 					<ul class="faqList" id="tab-2-ul">
		 						<?php
								include('content/faq-clinician.php');
								for($iCnt = 0, $cnt = count($arrFAQs); $iCnt < $cnt; $iCnt++){
									$jCnt = 0;
									$str = '<li>';
			 						$str .= '<span class="faqItem">'.$arrFAQs[$iCnt]['topic'].'</span>';
			 						$str .= '<div class="faqDiv">';
			 						$str .= '<ul class="clinicianSubLists">';
			 						foreach($arrFAQs[$iCnt] as $arrFAQ){
			 							if($jCnt > 0){
											$str .= '<li>';
											$str .= '<span class="faqItem">'.$arrFAQ['question'].'</span>';
											$str .= '<div class="faqSubDiv">'.$arrFAQ['answer'].'</div>';
											$str .= '</li>'.PHP_EOL;
										}
										$jCnt++;
									}
									$str .= '</ul>';
									$str .= '</div>';

									echo $str;
									
								}
								?>
			 				</ul>
		 				</div>

	 					<div id="tab-3" class="tab-content">
							<ul class="faqList"> 
									<?php
								include('content/faq-parents.php');
								foreach($arrFAQs as $arrFAQ){
									$str = '<li>';
									$str .= '<span class="faqItem">'.$arrFAQ['question'].'</span>';
									$str .= '<div class="faqDiv">'.$arrFAQ['answer'].'</div>';
									$str .= '</li>'.PHP_EOL;
									echo $str;
								}
								?>
							</ul>
	 					</div>
	 				</div>
	 			</div>
 			</div>
 		</div>
	 </div> 
	 </section>

	<?php
	include('template/footer.php');
	?>


</body>
</html>