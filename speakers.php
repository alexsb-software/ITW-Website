<!DOCTYPE HTML>
<html>

<head>
	<?php include_once('header.php'); ?>

    <script src="js/speakers.js" type="text/javascript"></script>
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
                            <li><a href="#filter" data-option-value=".2017" class="selected">2017</a></li>
                            <li><a href="#filter" data-option-value=".2016">2016</a></li>
                            <li><a href="#filter" data-option-value=".2015">2015</a></li>
                            <li><a href="#filter" data-option-value=".2014">2014</a></li>
                            <li><a href="#filter" data-option-value=".2013">2013</a></li>
                            <li><a href="#filter" data-option-value=".2012">2012</a></li>
                            <li><a href="#filter" data-option-value=".2011">2011</a></li>
                        </ul>
                        <img src="images/loading.gif" class="loadGallery" />
                        <div class="galleryImages">
                            <!-- 2017 Speakers -->
                            <ul id="17"></ul>

                            <!-- 2016 Speakers -->
                            <ul id="16"></ul>

                            <!-- 2015 Speakers -->
                            <ul id="15"></ul>

                            <!-- 2014 Speakers -->
                            <ul id="14"></ul>

                            <!-- 2013 Speakers -->
                            <ul id="13"></ul>

                            <!-- 2012 Speakers -->
                            <ul id="12"></ul>

                            <!-- 2011 Speakers -->
                            <ul id="11"></ul>

                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>

    <?php include_once('footer.php');?>

</body>

</html>