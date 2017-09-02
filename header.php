<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="description" content="UsedMed.com is a medical and hospital equipment classified advertising site for new and used medical equipment for sale or wanted, we also list refurbished medical equipment. We also offer a medical equipment related Services Directory.">
<meta name="keywords" content="used medical equipment, refurbished, medical, mammography, laproscopy, laboratory, imaging, hospital equipment, gastroscope,equipment, ENT, endoscopy, endoscopic, EKG, ECG, doctor, dialysis, diagnostic, dental, defibrillator, dealers, CT scanner, centrifuge, c-arm,,bone-densitometer, biomedical, bed, autoclave, anesthesiology, anesthesia, x-ray, veterinary, ultrasound, surgical, surgery, sterilizer, scanner, sales,respiratory, reseller, remarketer, rehabilitation, radiology, physicians office, physical therapy, photographic, pharmacy, orthopedics, ophthalmology,operating room, OBGYN, nuclear, neurology, neonatal, microscope">

<title>UsedMed</title>
	<?php wp_head(); ?>

</head>

	<?php
	// body_class takes array of params = body_class(array('class','class'))
	?>
<body <?php body_class(); ?>>
<div id="wrap">

<header class="site-header">
	<div class="row header-row">
		<nav class="navbar navbar-default" id="header-navbar-container">
			<div class="container-fluid">
				<div class="navbar-header">
					<div class="header-logo">
						<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"" alt="UsedMed" />
					</div>
				</div>
				<div class="header-nav-list">
						<ul class="nav navbar-right">
							<li role="presentation"><a class="post-pills" href="#">Login</a></li>
							<li role="presentation"><a class="post-pills" href="#">Register</a></li>
							<li role="presentation"><a class="post-pills" href="#">Post Listing</a></li>
							<li role="presentation"><a class="post-pills" href="#">Post Auction</a></li>
						</ul>
				</div>
	<!-- Seach Bar !-->
				</div>
<form class="navbar-form navbar-left" role="search" action="/equipment/search.html" id="search-form" itemprop="potentialAction" itemscope="" itemtype="">
						<div class="dropdown" id="search-dropdown">
							<button class="btn dropdown-toggle btn-default" type="button" id="search-menu" data-toggle="dropdown"><i class="fa fa-plug fa-fw"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="search-menu">
								<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-plug fa-fw"></i>Equipment</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-cogs fa-fw"></i> Parts</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-wrench fa-fw"></span> Services/Companies</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-users fa-fw"></i> People</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-list-alt fa-fw"></span> Equipment Guide</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-comments fa-fw"></i>Forums</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-newspaper-o fa-fw"></i>News</a></li>
							</ul>
						</div>

						<div class="input-group" id="search-input">
							<input type="text" class="form-control" placeholder="Search" name="key" value="" id="top-search" itemprop="query-input" required="">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-md btn-default" id="search-btn-submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
		</nav>
			
	</div>

</header>

