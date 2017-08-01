<!-- Header -->
<section id="header">
    <!-- Logo -->
    <h1><a href="index.php"><img src="images/logo.png" /></a></h1>
    <!-- Nav -->
    <header>
        <h1 style="color: #1b6498;">Interact with Today's World</h2>
            <h3 style="font-weight: bold;">ITW</span>
    </header>
    <nav id="nav">

        <?php 
            $current_page = basename($_SERVER['PHP_SELF']);;
        ?>

        <ul>
            <li <?php if ($current_page == "index.php") echo 'class="current_page_item"'; ?>><a href="index.php">Home</a></li>
            <li <?php if ($current_page == "gallery.php") echo 'class="current_page_item"'; ?>><a href="gallery.php">Gallery</a></li>
            <li <?php if ($current_page == "schedule.php") echo 'class="current_page_item"'; ?>><a href="schedule.php">Schedule</a></li>
            <li <?php if ($current_page == "speakers.php") echo 'class="current_page_item"'; ?>><a href="speakers.php">Speakers</a></li>
            <li <?php if ($current_page == "articles.php") echo 'class="current_page_item"'; ?>><a href="articles.php">Articles</a></li>
            <li <?php if ($current_page == "announcements.php") echo 'class="current_page_item"'; ?>><a href="announcements.php">Announcements</a></li>
        </ul>
    </nav>
</section>