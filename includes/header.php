<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo htmlspecialchars($title); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
        <meta name="msvalidate.01" content="6E7729FEBA94E8B2574AE1606EF95B0A" /> <!-- verify ownership to Bing -->
        <meta name="google-site-verification" content="hUGKce4iUEKWhOOLG2XAqJ-WY8TEOpYWvOSETnDWjAo" />  <!-- verify ownership to Google  -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!--<link href='https://fonts.googleapis.com/css?family=News+Cycle|Molengo|Text+Me+One|Cagliostro|Mandali|Open+Sans' rel='stylesheet' type='text/css'>-->
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|News+Cycle:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- testimonial carousel -->
        <link rel="stylesheet" href="css/testimonial-carousel.css">

        <!-- WOW -->
        <script src="js/wow.js"></script>
        <script>
            new WOW().init();
        </script>

        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Default Theme -->
        <link rel="stylesheet" href="css/owl.theme.css">
        <!-- Include js plugin -->
        <script src="js/owl.carousel.js"></script>
        <style>
            .hidden{opacity:0;}
            .visible{opacity:1;}
        </style>
        <!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
		<![endif]-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <?php include 'freefind.inc.php'; ?>

        <div class="bg-top-header">
            <div class="container">
                <div class="pull-right">
                    <?php include 'freefind-searchbox.inc.php'; ?>
                    <!--
                    <a href="telephone:9043427437">
                        <span class="glyphicon glyphicon-earphone">
                        </span>
                        904.342.7437
                    </a>-->
                </div>
            </div>
        </div>

        <!-- Add data-spy="affix" to the element you want affixed. -->
        <nav style="margin-bottom:0;" class="navbar navbar-inverse" data-spy="affix" data-offset-top="20">
            <div class="container-fluid">
                <div class="container header-height">
                    <div class="navbar-header">
                        <div class="header-row-logo">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="http://webmediapartners.com">
                                <img id="logo" src="images/wmp_logo.png" width="50">
                                <span class="company-name-header">Web Media Partners</span>
                            </a>
                        </div>
                    </div>

                    <div class="header-row">
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="testimonials.php">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.php">Services</a></li>
                                <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Services submenu 1</a></li>
                                        <li><a href="#">Services submenu 2</a></li>
                                    </ul>
                                </li>-->
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="portfolio.php">Portfolio</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="drag-and-drop.php">Drag and Drop</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fun Stuff<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
<!--                                        <li><a href="movie_api.php">Movie API</a></li>
                                        <li><a href="color_game.php">RGB Color Game</a></li>-->
                                        <li><a href="pig-game.html">PIG GAME</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Templates<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="templates/101/">Special Offer</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                <!--<li><?php// include 'freefind-searchbox.inc.php'; ?></li>-->
                            </ul>
                            <!--
                            <ul class="nav navbar-nav">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
