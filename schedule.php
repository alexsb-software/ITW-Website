<!DOCTYPE HTML>
<html>

<head>
	<?php include_once('header.php'); ?>
	<script src="js/schedule.js?v=<?php echo uniqid(); ?>" type="text/javascript"></script>
	<link rel="stylesheet" href="css/custom.css" type="text/css" />
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
			<!-- <div class="row"> -->
			<!-- <div class="12u"> -->

			<!-- Intro -->
			<section>
				<div class="row">
					<!-- Centered Pills -->
					<ul class="nav nav-pills nav-justified">
						<li class="active"><a data-toggle="tab" href="#tab2016">2016</a></li>
						<li><a data-toggle="tab" href="#tab2015">2015</a></li>
						<li><a data-toggle="tab" href="#tab2014">2014</a></li>
						<li><a data-toggle="tab" href="#tab2013">2013</a></li>
						<li><a data-toggle="tab" href="#tab2012">2012</a></li>
						<li><a data-toggle="tab" href="#tab2011">2011</a></li>
						<li><a data-toggle="tab" href="#tab2010">2010</a></li>
					</ul>
				</div>

				<div class="row">
					<div class="tab-content">
						<div class="tab-pane active" id="tab2016">
							<!-- 2016 Schedule -->
							<div id="16" class="row imagetiles"></div>
						</div>
						<div class="tab-pane" id="tab2015">
							<!-- 2015 Schedule -->
							<div id="15" class="row imagetiles"></div>
						</div>
						<div class="tab-pane" id="tab2014">
							<!-- 2014 Schedule -->
							<div id="14" class="row imagetiles"></div>
						</div>
						<div class="tab-pane" id="tab2013">
							<!-- 2013 Schedule -->
							<div id="13" class="row imagetiles"></div>
						</div>
						<div class="tab-pane" id="tab2012">
							<!-- 2012 Schedule -->
							<div id="12" class="row imagetiles"></div>
						</div>
						<div class="tab-pane" id="tab2011">
							<!-- 2011 Schedule -->
							<div id="11" class="row imagetiles"></div>
						</div>
						<div class="tab-pane" id="tab2010">
							<!-- 2010 Schedule -->
							<div id="10" class="row imagetiles"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>

	<?php include_once('footer.php');?>

</body>

</html>