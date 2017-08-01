<!DOCTYPE HTML>
<!--
	Dopetrope 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<?php include_once('header.php'); ?>

	<script src="js/schedule.js" type="text/javascript">

	</script>
</head>

<body class="homepage">

	<!-- Header Wrapper -->
	<div id="header-wrapper">
		<div class="container">
			<div class="row">
				<div class="12u">

					<?php include_once('navbar.php'); ?>

				</div>
			</div>
		</div>
	</div>
	<!-- Main Wrapper -->
	<div id="main-wrapper">
		<div class="container">
			<div class="row">
				<div class="12u">

					<!-- Intro -->
					<section>
						<ul id="filters_gallery" class="option-set clearfix" data-option-key="filter">
							<!-- <li><a href="#filter" data-option-value=".2017" class="selected">2017</a></li> -->
							<li><a href="#filter" data-option-value=".2016" class="selected">2016</a></li>
							<li><a href="#filter" data-option-value=".2015">2015</a></li>
							<li><a href="#filter" data-option-value=".2014">2014</a></li>
							<li><a href="#filter" data-option-value=".2013">2013</a></li>
							<li><a href="#filter" data-option-value=".2012">2012</a></li>
							<li><a href="#filter" data-option-value=".2011">2011</a></li>
							<li><a href="#filter" data-option-value=".2010">2010</a></li>
						</ul>
						<img src="images/loading.gif" class="loadGallery" />
						<div class="galleryImages">

							<!-- 2017 Schedule -->
							<!-- <ul id="17"></ul>   -->

							<!-- 2016 Schedule -->
							<ul id="16"></ul>

							<!-- 2015 Schedule -->
							<ul id="15"></ul>

							<!-- 2014 Schedule -->
							<ul id="14"></ul>

							<!-- 2013 Schedule -->
							<ul id="13"></ul>

							<!-- 2012 Schedule -->
							<ul id="12"></ul>

							<!-- 2011 Schedule -->
							<ul id="11"></ul>

							<!-- 2010 Schedule -->
							<ul id="10"></ul>

						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<?php include_once('footer.php');?>

</body>

</html>