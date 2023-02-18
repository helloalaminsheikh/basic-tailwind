<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- font awesome -->
        <link rel="stylesheet" href="css/all.css">
        <!-- tailwind js -->
        <script src="https://cdn.tailwindcss.com"></script>
		
		<script defer src="js/alpine.min.js"></script>
		
        <title>AL-AMIN SHEIKH</title>
		<style>
			section{
				padding-top:100px;
				padding-bottom:80px;
			}
		</style>
		
    </head>
    <body >
		<!-- Header Part -->
		<?php include('home-header.php'); ?>
		<!-- Main Part -->
        <main>
            <!-- slide part -->
			<?php include('home-slider.php'); ?>
            <!-- About Me -->
            <?php include('home-about.php'); ?>
            <!-- Services Part-->
            <?php include('home-services.php'); ?>
            <!-- Projects/Portfolio -->
            <?php include('home-projects.php'); ?>
            <!-- Review -->
            <?php include('home-review.php'); ?>
            <!-- Contact Us -->
            <?php include('home-contact.php'); ?>                 
        </main>
		<!-- Footer Part -->
		<?php include('home-footer.php'); ?>


    </body>
</html>