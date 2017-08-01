<!DOCTYPE HTML>
<html>

<head>
	<?php include_once('header.php'); ?>

	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('a[rel^="prettyPhoto"]').prettyPhoto({
				deeplinking: false,
				social_tools: false
			});
		});
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

				<?php
                
                $i = 0;

                foreach (glob("articles/*.php") as $filename) {

                    if ($i % 2 == 0) {
                        echo '<div class="row">';
                    }

                    include $filename;
                    
					if (($i+1) % 2 == 0) {
                        echo '</div>';
                    }

                    $i++;
                }
                ?>

			</div>
		</div>
	</div>

	<?php include_once('footer.php');?>

</body>

</html>