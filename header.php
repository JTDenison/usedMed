<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="description" content="UsedMed.com is a medical and hospital equipment classified advertising site for new and used medical equipment for sale or wanted, we also list refurbished medical equipment. We also offer a medical equipment related Services Directory.">
<meta name="keywords" content="used medical equipment, refurbished, medical, mammography, laproscopy, laboratory, imaging, hospital equipment, gastroscope, 
        equipment, ENT, endoscopy, endoscopic, EKG, ECG, doctor, dialysis, diagnostic, dental, defibrillator, dealers, CT scanner, centrifuge, c-arm, cardiology, 
        bone-densitometer, biomedical, bed, autoclave, anesthesiology, anesthesia, x-ray, veterinary, ultrasound, surgical, surgery, sterilizer, scanner, sales, 
        respiratory, reseller, remarketer, rehabilitation, radiology, physicians office, physical therapy, photographic, pharmacy, orthopedics, ophthalmology, 
        operating room, OBGYN, nuclear, neurology, neonatal, microscope">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<title>UsedMed</title>
	<?php wp_head(); ?>

</head>

	<?php
	// body_class takes array of params = body_class(array('class','class'))
	?>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="row header-row">
		<nav class="navbar navbar-default" id="header-navbar-container">
			<div class="container-fluid">
				<div class="navbar-header">
					<div class="header-logo">
						<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"" alt="UsedMed" />
					</div>
				</div>
						<ul class="nav navbar-nav navbar-right">
							<li role="presentation"><a class="post-pills" href="#">Login</a></li>
							<li role="presentation"><a class="post-pills" href="#">Register</a></li>
							<li role="presentation"><a class="post-pills" href="#">Post Listing</a></li>
							<li role="presentation"><a class="post-pills" href="#">Post Auction</a></li>
						</ul>
				</div>
		</nav>
	</div>
</header>