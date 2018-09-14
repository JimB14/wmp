<!DOCTYPE html>
<html>
    <head>
        <title>Template101</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">              
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
        <!--  animate -->
        <link rel="stylesheet" href="css/animate.css">
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

        <!-- WOW -->    
        <script src="js/wow.js"></script>
        <script>
            wow = new WOW(
                    {
                        boxClass: 'wow', // default
                        animateClass: 'animated', // default
                        offset: 0, // default
                        mobile: false, // default = true
                        live: true        // default
                    }
            );
            wow.init();
            new WOW().init();
        </script>
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
        <style>
            body {
                position: relative; // The element with data-spy="scroll" requires the CSS position property, with a value of "relative" to work properly.
                color: #606060;
            }
            #header,#services{text-align:center;}
            #top{padding-top: 93px;}
            #footer {color: #fff;}
            #services {padding-top: 90px;}

            .navbar-padding{padding: 20px 0;} // to change height of navbar
            .bg-carousel {background-color: #222;}  //#8D8D8D
            .bg-services{background-color: #fff;}
            .bg-about {background-color: #ffffe6;}
            .bg-testimonials {background-color: #fff;}
            .bg-team {background-color: #F4F5EC;}
            .bg-projects {background-color: #fff;}
            .bg-clients {background-color: #ececec;}
            .bg-contact {background-color: #fff;}  
            .bg-footer {background-color: #222;}

            #top .carousel {margin-bottom: -20px;border-bottom: #ac2925 5px solid;}

        </style>
    </head>
    <!-- The scrollable area.
    * Add data-spy="scroll" to the element that should be used as the scrollable area (often this is the <body> element). 
    * Then add the data-target attribute with a value of the id or the class name of the navigation bar (.navbar). 
    * This is to make sure that the navbar is connected with the scrollable area.
    -->
    <body data-spy="scroll" data-target=".navbar" data-offset="10">
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-padding">
            <div class="container-fluid">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#top">Logo &amp; Company Name</a>
                    </div>

                    <div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li><a href="#top">Home</a></li>-->
                                <li><a href="#services">Services</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">About Us <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#about">About Us</a></li>
                                        <li><a href="#testimonials">Testimonials</a></li>
                                        <li><a href="#team">Our Team</a></li>
                                    </ul>
                                </li>
                                <li><a href="#projects">Projects</a></li>
                                <li><a href="#clients">Clients</a></li>
                                <li><a href="#contact">Contact</a></li>                                                           
                            </ul>
                            <!--
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href='#'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- ***********************  Carousel  ************************* --> 

        <div id="top">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="hover">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                    <li data-target="#carousel-slider" data-slide-to="3"></li>
                    <li data-target="#carousel-slider" data-slide-to="4"></li>
                    <li data-target="#carousel-slider" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider/yu-golden-gate-1200x800.jpg" alt="photo by David Yu">
                        <div class="carousel-caption">
                            <h4><a href="https://www.flickr.com/photos/davidyuweb/" target="_blank">Photo credit: David Yu</a></h4>
                            <p><a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/slider/brenn-nature-1200x800.jpg" alt="image"> 
                        <div class="carousel-caption">
                            <h4><a href="https://www.flickr.com/photos/aigle_dore/" target="_blank" data-toggle="tooltip" title="This original image is property of Moyan Brenn and registered to the U.S. Copyright Office">Photo credit: Moyan Brenn</a></h4>
                            <p><a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/slider/chandar-butterfly-1200x800.png" alt="photo by vinoth chandar">
                        <div class="carousel-caption">
                            <h4><a href="https://www.flickr.com/photos/vinothchandar/" target="_blank" data-toggle="tooltip" title="This original image is property of Moyan Brenn and registered to the U.S. Copyright Office">Photo credit: Vinoth Chandar</a></h4>                           
                            <p><a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/slider/karsten-nature-1200x800.jpg" alt="photo by karsten">
                        <div class="carousel-caption">
                            <h4><a href="https://www.flickr.com/photos/pcapemax2007/" target="_blank">Photo credit: Karsten</a></h4>
                            <p><a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/slider/rodler-purple-flowers-1200x800.jpg" alt="photo by Armin Rodler">
                        <div class="carousel-caption">
                            <h4><a href="https://www.flickr.com/photos/arminrodler/" target="_blank">Photo credit: Armin Rodler</a></h4>
                            <p><a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/slider/hetrick-prarie-1200x800.jpg" alt="image">
                        <div class="carousel-caption">
                            <h4><a href="https://www.flickr.com/photos/wesleyhetrick/" target="_blank">Photo credit: Wesley Hetrick</a></h4>
                            <p><a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons</a></p>
                        </div>
                    </div>
                </div><!-- // carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- // #carousel-slider carousel slide -->
        </div><!-- // #top -->


        <!-- *************************************************  Header-bar  ********************************************************* -->        

        <div id="header-bar" class="bg-header-bar p2">
            <div class="container text-center">
                <h1 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="10"  data-wow-iteration="1"><em>Welcome</em> to Company Name</h1>
                <h3 class="wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="10" data-wow-iteration="1">Experience the <em>difference!</em> </h3>
            </div>
        </div>

        <!-- ***********************************************  Modal ********************************************************************-->
        <div class="row">
            <div class="col-md-12">
                <!-- Button trigger modal -->
                <div class="text-center ptop30">
                    <h2>We will customize this visually stunning layout for your business for <strong>ONLY <span class="strikeout">$1,499</span> $899!</strong></h2>
                    <span class="wow flash text-size300 pr20 green-success glyphicon glyphicon-arrow-right" data-wow-iteration="200"></span>
                    <button style="padding:20px 30px;font-weight:bold;font-size:200%;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                        Special Offer
                    </button><span class="wow flash text-size300 pl20 green-success glyphicon glyphicon-arrow-left"  data-wow-iteration="200"></span>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1 class="modal-title bold" id="myModalLabel">Only <span class="strikeout">$1,499</span> $899.00 <small>(expires Sep 30, 2017)</small> </h1>
                            </div>
                            <div id="special299" class="modal-body">
                                <h2 class="text-center">Design specifications</h2>
                                <p>Web design contains the following elements:</p>
                                <div class="row">                                    
                                    <div class="col-md-5">
                                        <ul class="modal-detail-list">
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Responsive - displays on any device</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Leading edge single-page design</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Bootstrap 3.3 framing system</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Animation</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Contact form</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Google Maps</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <ul class="modal-detail-list">

                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Social Media Links</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Font-Awesome</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Image Carousel</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Testimonial Carousel</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Logo Carousel</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="modal-detail-list">
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> HTML5, CSS3</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> PHP coded</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> jQuery</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> JavaScript</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Expandable</li>
                                        </ul>
                                    </div>
                                </div><!-- // row -->

                                <h2 class="text-center">You receive</h2>
                                <p>We will customize this template for your business as follows:</p>
                                <div class="row">
                                    <div class="col-md-6">

                                        <ul class="modal-detail-list">
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Company logo</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Company name</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Company slogan</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Contact information</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Insert up to six images &amp; captions in slider / carousel</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Modify &ldquo;What We Do&rdquo; titles</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Insert your text</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Insert up to three testimonials</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="modal-detail-list">
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Insert staff images, titles and blurb</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Insert up to six project images with field data</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Insert up to seven client logos</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Contact form coded to send form data to one email address</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Change Google map to your location</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Modify footer links</li>
                                            <li><span class="glyphicon glyphicon-ok text-size80"></span> Link social media icons to social media accounts</li>
                                        </ul>
                                    </div>
                                </div><!-- // row -->

                                <h2 class="text-center">Not included in this price</h2>
                                <p><strong>Not to worry</strong> if you need images, photo imaging, color or layout changes, content, or additional customization. <strong>We&#39;re happy to make as many changes 
                                        as you want;</strong> we just have to charge a little for the work. We also offer other 
                                    <a data-toggle="tooltip" title="Web development, Web security and Web (Internet) marketing. Click to learn more." href="http://www.webmediapartners.com/services.php" target="_blank" rel="follow">services.</a></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="modal-detail-list">
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Domain name</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Web hosting service</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Images, photos, logos</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Writing or editing content</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Photo imaging - changing size, aspect ratio, resolution</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="modal-detail-list">                                   
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Color changes - different colors and/or combinations</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Layout changes - move this here or there</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Additional pages - add a page</li>
                                            <li><span class="glyphicon glyphicon-remove text-size80"></span> Upload files to host server</li>
                                        </ul>
                                    </div>
                                </div><!-- // row -->
                            </div>
                            <div class="modal-footer">
                                <div class="btn-paypal pull-left">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="35RBME38X9CQW">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                                <a role="button" href="http://www.webmediapartners.com/contact.php" class="btn btn-info">I need more information</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- // col-md-12 -->
        </div><!-- // row -->


        <!--**************************** SECTION2 - Services **********************************-->

        <div id="services" class="bg-services">
            <div class="container">
                <h1 class="wow bounceInRight" data-wow-duration=".5s" data-wow-delay="1s" data-wow-offset="10"  data-wow-iteration="1">What We Do</h1>
                <hr class="divider-title">
                <div class="row p3">
                    <div class="col-md-4 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h2 class="tag-title"><i class="fa fa-plus-square"></i><br>Quality</h2>
                                <hr />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. </p>
                                <br />
                                <a href="#" class="btn btn-block btn-101">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h2 class="tag-title"><i class="fa fa-pie-chart"></i><br>Value</h2>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. </p>
                                <br>
                                <a href="#" class="btn btn-block btn-101">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h2 class="tag-title"><i class="fa fa-shield"></i><br>Relationships</h2>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. </p>
                                <br>
                                <a href="#" class="btn btn-block btn-101">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div><!-- // row -->          
            </div><!--  // container -->
        </div>


        <!--**************************** Section3 - About Us **********************************-->        

        <div id="about" class="bg-about">
            <div class="white-triangle"></div>
            <div class="container">
                <h1 class="wow flipInY" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="10"  data-wow-iteration="1">About Us</h1>
                <hr class="divider-title">
                <div class="row p3">
                    <div class="col-md-8 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay="1.5s" data-wow-offset="10"  data-wow-iteration="1">

                        <p class="text-justify bold p2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="text-justify p3 text90">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <a href="#contact" role="button" class="btn btn-101 text-center btn-block">Contact Us</a>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-offset="10"  data-wow-iteration="1">
                        <p class="t1"><span class="glyphicon glyphicon-signal "></span></p>
                    </div>
                </div><!-- // row -->
            </div><!-- // container -->           
        </div><!-- // about -->



        <!--**************************** Section4 - Testimonials **********************************-->

        <div id="testimonials" class="bg-testimonials">
            <div class="yellow-triangle"></div>
            <div class="container">
                <div class="row p5">
                    <div class="col-md-12">
                        <h1 class="p1 wow tada" data-wow-duration="4s" data-wow-delay="1.5s" data-wow-offset="10"  data-wow-iteration="1" >From our customers</h1>
                        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <h4>"Great company to work with!"<br><br><span style="font-style:normal;">William Thatcher, Vice President, Walker &amp; Associates</span></h4>
                                </div>
                                <div class="item">
                                    <h4>"Professional at all times."<br><br><span style="font-style:normal;">Linda Carmetti, Director of Marketing, Phillips Manufacturing</span></h4>
                                </div>
                                <div class="item">
                                    <h4>"Without reservations, I highly recommend this company."<br><br><span style="font-style:normal;">Alex Markovich, GM, Freemont Industries</span></h4>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- // col-md-12 -->
                </div><!-- // row -->
            </div><!-- // container -->
        </div><!--  // section4 -->



        <!--**************************** Section5 - Team **********************************-->

        <div id="team" class="bg-team">
            <div class="white-triangle"></div>
            <div class="container">
                <h1 class="wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="10"  data-wow-iteration="1">Our Team</h1>
                <hr class="divider-title">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="2s" data-wow-offset="10"  data-wow-iteration="1">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <img class="img-responsive" src="images/img01-300x360.png" alt="photo">
                            </div>

                            <div class="panel-footer">
                                <p class="bold">Jennifer Drummond</p>
                                <span class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="2.5s" data-wow-offset="10"  data-wow-iteration="1">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <img class="img-responsive" src="images/img02b-300x360.png" alt="photo">
                            </div>

                            <div class="panel-footer">
                                <p class="bold">Felicia Rohrsach</p>
                                <span class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="3s" data-wow-offset="10"  data-wow-iteration="1">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <img class="img-responsive" src="images/img03b-300x360.png" alt="photo">
                            </div>

                            <div class="panel-footer">
                                <p class="bold">Alexa Roman</p>
                                <span class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="3.5s" data-wow-offset="10"  data-wow-iteration="1">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <img class="img-responsive" src="images/img04-300x360.png" alt="photo">
                            </div>

                            <div class="panel-footer">
                                <p class="bold">Julia Brianche</p>
                                <span class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                            </div>

                        </div>
                    </div>                    
                </div><!-- // row -->

            </div><!-- // container -->
        </div><!-- // team -->


        <!--**************************** Section6 - Projects **********************************-->

        <div id="projects" class="bg-projects">
            <div class="beige-triangle"></div>
            <div class="container">
                <h1 class="text-center">Projects</h1>
                <hr class="divider-title">
                <div class="row wow bounceInLeft" data-wow-duration="1s" data-wow-delay="2s" data-wow-offset="10"  data-wow-iteration="1">
                    <div class="col-md-4 col-sm-6">
                        <div class="project">
                            <figure class="img-responsive">
                                <img src="http://lorempixel.com/400/300/sports/6/">
                                <figcaption>
                                    <span class="project-details">Full project name</span>
                                    <span class="project-price"><strong>$$</strong></span>
                                    <span class="project-creator">Leader name</span>
                                </figcaption>
                                <span class="actions">
                                    <button class="btn btn-warning" type="submit" >View </button>
                                </span>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project">
                            <figure class="img-responsive">
                                <img src="http://lorempixel.com/400/300/city/2/">
                                <figcaption>
                                    <span class="project-details">Full project name</span>
                                    <span class="project-price"><strong>$$</strong></span>
                                    <span class="project-creator">Leader name</span>
                                </figcaption>
                                <span class="actions">
                                    <button class="btn btn-warning" type="submit" >View </button>
                                </span>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project">
                            <figure class="img-responsive">
                                <img src="http://lorempixel.com/400/300/fashion/5/">
                                <figcaption>
                                    <span class="project-details">Full project name</span>
                                    <span class="project-price"><strong>$$</strong></span>
                                    <span class="project-creator">Leader name</span>
                                </figcaption>
                                <span class="actions">
                                    <button class="btn btn-warning" type="submit" >View </button>
                                </span>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project">
                            <figure class="img-responsive">
                                <img src="http://lorempixel.com/output/transport-q-c-400-300-9.jpg">
                                <figcaption>
                                    <span class="project-details">Full project name</span>
                                    <span class="project-price"><strong>$$</strong></span>
                                    <span class="project-creator">Leader name</span>
                                </figcaption>
                                <span class="actions">
                                    <button class="btn btn-warning" type="submit" >View </button>
                                </span>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project">
                            <figure class="img-responsive">
                                <img src="http://lorempixel.com/output/technics-q-c-400-300-2.jpg"> <!-- http://lorempixel.com/output/food-q-c-400-300-8.jpg -->
                                <figcaption>
                                    <span class="project-details">Full project name</span>
                                    <span class="project-price"><strong>$$</strong></span>
                                    <span class="project-creator">Leader name</span>
                                </figcaption>
                                <span class="actions">
                                    <button class="btn btn-warning" type="submit" >View </button>
                                </span>
                            </figure>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="project">
                            <figure class="img-responsive">
                                <img src="http://lorempixel.com/output/food-q-c-400-300-10.jpg">
                                <figcaption>
                                    <span class="project-details">Full project name</span>
                                    <span class="project-price"><strong>$$</strong></span>
                                    <span class="project-creator">Leader name</span>
                                </figcaption>
                                <span class="actions">
                                    <button class="btn btn-warning" type="submit" >View </button>
                                </span>
                            </figure>
                        </div>
                    </div>
                </div><!-- // row -->
            </div><!-- // container -->    			                                  
        </div><!-- // #projects -->



        <!--**************************** Section7 - Clients **********************************-->

        <div id="clients" class="bg-clients">
            <div class="white-triangle"></div>
            <div class="container">
                <h1>Clients</h1>
                <hr class="divider-title">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="logo-carousel">
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo01.png"/></a></div>
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo02.png" /></a></div>
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo03.png" /></a></div>
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo04.png" /></a></div>
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo05.png" /></a></div>
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo06.png" /></a></div>
                            <div class="item"><a href="#" title=""><img class="img-responsive" alt="" src="images/logos/logo07.png" /></a></div>
                        </div>
                    </div><!-- //  col-xs-12 -->
                </div><!-- // row -->
            </div>
        </div> 

        <!--**************************** Section8 - Contact **********************************-->

        <div id="contact" class="bg-contact">
            <div class="gray-triangle"></div>
            <div class="container">
                <h1 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="10" data-wow-iteration="1">Contact Us</h1>
                <hr class="divider-title">
                <div class="row p2">        
                    <div class="col-md-6 col-xs-12">
                        <h1 class="wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="10" data-wow-iteration="1"><span class="glyphicon glyphicon-pencil maroon"></span></h1>
                        <div class="panel panel-default wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="10" data-wow-iteration="1">
                            <div class="panel-heading"></div>
                            <div class="panel-body text-left">

                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="contact-form" method="post">
                                    <div class="form-group has-feedback">
                                        <p class="errMsg"><?php
                                            if (isset($errMsg['name'])) {
                                                echo htmlspecialchars($errMsg['name']);
                                            }
                                            ?></p>
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php if (isset($name)) echo htmlspecialchars($name); ?>">
                                        <i class="glyphicon glyphicon-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <p class="errMsg"><?php
                                            if (isset($errMsg['email'])) {
                                                echo htmlspecialchars($errMsg['email']);
                                            }
                                            ?></p>
                                        <label class="control-label">Email address </label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php if (isset($email)) echo htmlspecialchars($email); ?>">
                                        <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <p class="errMsg"><?php
                                            if (isset($errMsg['telephone'])) {
                                                echo htmlspecialchars($errMsg['telephone']);
                                            }
                                            ?></p>
                                        <label class="control-label">Telephone</label>
                                        <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" value="<?php if (isset($telephone)) echo htmlspecialchars($telephone); ?>">
                                        <i class="glyphicon glyphicon-earphone form-control-feedback"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" rows="8"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-101 btn-block" name="action" value="">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div><!-- // col-md-6 --> 

                    <div class="col-md-6 col-xs-12">                        
                        <h1 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="10" data-wow-iteration="1"><span class="glyphicon glyphicon-map-marker maroon"></span></h1>
                        <div class="panel panel-default wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="10" data-wow-iteration="1">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220364.9219050825!2d-81.86088392170613!3d30.34521127469025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e5b716f1ceafeb%3A0xc4cd7d3896fcc7e2!2sJacksonville%2C+FL!5e0!3m2!1sen!2sus!4v1447193613006" height="470" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>                       
                    </div><!-- // col-md-6 -->
                </div><!-- // row -->
            </div><!-- // container -->
        </div><!-- // section8 -->

        <!--**************************** Section9 - Footer **********************************-->

        <div id="footer" class="bg-footer">
            <!-- Origional snipet by msurguy<http://bootsnipp.com/msurguy>, I edited his snippet so that it works with bootstrap 3.3 -->
            <div class="container">
                <div class="row ptop30">
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li class="text-size120">Site<li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#team">Our Team</a></li>
                            <li><a href="#projects">Projects</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li class="text-size120">Web languages<li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">PHP &amp; MySQL</a></li>
                            <li><a href="#">jQuery / JavaScript</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li class="text-size120">Services<li>
                            <li><a href="http://www.webmediapartners.com/services.php" target="_blank" rel="follow">Web design</a></li>
                            <li><a href="http://www.webmediapartners.com/services.php" target="_blank" rel="follow">Web development</a></li>
                            <li><a href="http://www.webmediapartners.com/services.php" target="_blank" rel="follow">Web security</a></li>
                            <li><a href="http://www.webmediapartners.com/services.php" target="_blank" rel="follow">Web marketing</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <p class="text-size120"><i class="fa fa-map-marker"></i> Location</p>
                        <p>1234 Market Street<br>New York, NY 10019</p>
                        <p><i class="fa fa-phone"></i> 212-555-1212
                            <br>
                            <i class="fa fa-envelope"></i><a href="mailto:info@company.com?Subject=Website%20Inquiry"> info@company.com</a>
                        </p>
                        <!--
                        <ul class="list-unstyled">
                            <li class="text-size120">Company Name<li>
                            <li><i class="fa fa-map-marker">1234 Market St</a></li>
                            <li><a href="#">Developer API</a></li>
                            <li><a href="#">Product Markdown</a></li>
                            <li><a href="#">Product Pages</a></li>
                        </ul>-->
                    </div>
                </div><!-- // row -->

                <div id="social-bar" class="row">
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <ul class="tos list-unstyled list-inline pull-left">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="tos text-muted pull-right">© <?php echo htmlspecialchars(date('Y')); ?> Company Name. All rights reserved</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="text-center text-muted text-size85">Web development by <a href="http://www.webmediapartners.com" target="_blank" rel="follow">Web Media Partners</a></p>
                        </div>
                    </div>
                </div><!-- // row -->
            </div><!-- // container -->
        </div><!-- // section9 -->



        <script>
            $(document).ready(function() {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
            });
        </script> 
        <!-- http://owlgraphic.com/owlcarousel/index.html -->
        <script>
            $(document).ready(function() {

                $("#logo-carousel").owlCarousel({
                    autoPlay: 2000, //Set AutoPlay to 3 seconds

                    items: 5,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3]

                });
            });
        </script>
        <script>
            // To force page to reset at the top on refresh / reload 
            //$(document).ready(function() {
            //$(this).scrollTop(0);
            // });
        </script>
        <script>/*
         $(document).ready(function() {
         $('html, body').scrollTop(0);
         
         $(window).on('load', function() {
         setTimeout(function() {
         $('html, body').scrollTop(0);
         }, 0);
         });
         });*/
        </script>
    </body>
</html>
