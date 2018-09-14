<?php
$page_id = 'home';
$title = 'Home';
$description = 'Web Media Partners: Web Design, Web Development, Web Security, Web Marketing';
include 'includes/header.php';
?>

<!--************************ Carousel slider ***************************************-->
<div style="margin-top:0px;" class="top-margin-marker"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover"> <!-- data-pause="false" removes slide carousel pausing on hover -->
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
           <li data-target="#myCarousel" data-slide-to="3"></li>
           <li data-target="#myCarousel" data-slide-to="4"></li>
           <li data-target="#myCarousel" data-slide-to="5"></li>
       </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/img01b-slider-960x540.png" alt="Web Design">
            <div class="carousel-caption">
                <h1>Website Design</h1>
                <p></p>
            </div>      
        </div>

        <div class="item">
            <img src="images/img02b-slider-960x540.png" alt="Web Development">
            <div class="carousel-caption">
                <h1>Website Development</h1>
                <p></p>
            </div>      
        </div>

        <div class="item">
            <img src="images/img03b-slider-960x540.png" alt="Website Security">
            <div class="carousel-caption">
                <h1>Website Security</h1>
                <p></p>
            </div>      
        </div>

        <div class="item">
            <img src="images/img04-slider-960x540.png" alt="Website Marketing" >
            <div class="carousel-caption">
                <h1>Website Marketing</h1>
                <p></p>
            </div>      
        </div>

        <div class="item">
            <img src="images/img05-slider-960x540.png" alt="Web Design">
            <div class="carousel-caption">
                <h1>Website Design</h1>
                <p></p>
            </div>      
        </div>

        <div class="item">
            <img src="images/img06-slider-960x540.png" alt="Web Development">
            <div class="carousel-caption">
                <h1>Website Development</h1>
                <p></p>
            </div>      
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



<!-- ***********************  Section1  ************************* -->        

<div id="section1" class="bg-section1">
    <div class="container text-center">
        <h2>To be effective, you need to run on all cylinders</h2>
        <h3 class="wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="50" data-wow-iteration="1">Make your digital footprint <em>Count</em> </h3>
    </div>
</div>

<!-- ***********************  Section2 - Who We Are  ************************* -->

<div id="section2" class="bg-section2">
    <div class="container text-center">
        <h1 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="200"  data-wow-iteration="1"><strong>Who</strong> We Are</h1>
        <p>Web Media Partners provides complete Webmaster services to advance your online presence.</p>
        <ul class="list-inline" id="service-category-list">
            <li><span class="glyphicon glyphicon-ok green text-size80"></span> Design </li> 
            <li><span class="glyphicon glyphicon-ok green text-size80"></span> Development </li> 
            <li><span class="glyphicon glyphicon-ok green text-size80"></span> Security </li>
            <li><span class="glyphicon glyphicon-ok green text-size80"></span> Marketing </li>
        </ul>
        <p class="p1"><em>We can help you grow your digital footprint!</em></p>
        <a href="contact.php" class="btn btn-wmp1" role="button">Contact Us</a>
    </div>
</div>

<!-- ***********************  Section3 - Our Services  ************************* -->

<div id="section3" class="bg-section3">
    <div class="container text-center">
        <h1 class="wow bounceInLeft" data-wow-duration=".75s" data-wow-delay="0s" data-wow-offset="50"  data-wow-iteration="1">Our <strong>Services</strong></h1>
        <div class="row text-center">
            <div class="wow bounceInDown" data-wow-duration="1s" data-wow-delay=".5s" data-wow-offset="50"  data-wow-iteration="1">
                <div class="col-md-6 col-sm-6 p3 services">
                    <span class="glyphicon glyphicon-pencil glyph-h2 blue"></span>
                    <h2>Design</h2>
                    <p class="text-justify">
                        We build new sites and improve existing ones. <a href="https://www.comscore.com/Insights/Blog/Number-of-Mobile-Only-Internet-Users-Now-Exceeds-Desktop-Only-in-the-U.S" target="_blank" data-toggle="tooltip" title="Mobile-only Internet Users now exceed desktop-only">Mobile-first</a>,
                        SEO friendly, custom HTML5 or CMS platforms like WordPress. The latest web technologies like 
                        CSS3 animation, jQuery and Bootstrap, so your site looks great on every device: smartphone, tablet, laptop and desktop. Static or 
                        dynamic database-driven content featuring PHP and MySQL.
                    </p>
                    <div class="t2">
                        <a href="services.php" class="btn btn-wmp1" role="button">Read More</a>
                    </div>                            
                </div>

                <div class="col-md-6 col-sm-6 p3 services">
                    <span class="glyphicon glyphicon-th glyph-h2 blue"></span>
                    <h2>Develop</h2>
                    <p class="text-justify">
                        Online forms to collect data for transmission or storage, login and registration systems, content management systems.
                        New pages, content, videos, images. HTML to PHP conversion. E-commerce solutions. Structure audits to identify search engine conflicts.
                        Solutions to improve a Web site&lsquo;s deliverables by improving functionality and utilization of digital resources. 
                    </p>
                    <div class="t2">
                        <a href="services.php#web-development" class="btn btn-wmp1" role="button">Read More</a>
                    </div>
                </div>
            </div>

            <div class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.75s" data-wow-offset="50"  data-wow-iteration="1">
                <div class="col-md-6 col-sm-6 services">
                    <span class="glyphicon glyphicon-warning-sign glyph-h2 blue"></span>
                    <h2>Security</h2>
                    <p class="text-justify">
                        Digital assets need protection from malware, viruses and malicious hackers. 
                        <!--More than 317 million new pieces of malware were created in 2014. -->
                        <!--<a href="http://money.cnn.com/2015/04/14/technology/security/cyber-attack-hacks-security/" target="_blank" title="Read April 14, 2015 CNN post"> Resource link.</a>-->
                        If your Web site crashes from an infection, what are you going to do? Is it already infected? Has Google blacklisted your site? How do you find out? 
                        Do you employ a Webmaster to monitor your site? Digital assets need protection. We have cost-effective solutions to protect your Web site.

                    <div class="t2">
                        <a href="services.php#website-security" class="btn btn-wmp1" role="button">Read More</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 services">
                    <span class="glyphicon glyphicon-globe glyph-h2 blue"></span>
                    <h2>Marketing</h2>
                    <p class="text-justify">
                        Increase traffic and conversions through strategic marketing campaigns. Leverage social media, 
                        <a data-toggle="tooltip" title="Pay-Per-Click" >PPC</a>, email and 
                        <a data-toggle="tooltip" title="Search Engine Optimization" >SEO</a> to grow brand awareness. Collect and store email addresses
                        and engage clients and prospects. Increase Facebook Likes and Twitter Followers with daily, relevant posts. Become search engine friendly and improve
                        organic ranking for critical keywords.
                    </p>
                    <div class="t2">
                        <a href="services.php#web-marketing" class="btn btn-wmp1" role="button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***************************** Section4 - Our Clients' Voices *************************************-->

<div id="section4" class="bg-section4">
    <div class="container text-center">
        <div class="row">                        
            <h1 class="wow bounceInRight">Our <strong>Clients&#39; Voices</strong></h1>
            <div class="col-md-6 p2">
                <div class="testimonial-block wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="50"  data-wow-iteration="1">
                    <img class="pr15 pull-left" src="images/quote-left-15x15.png">
                    <blockquote class="testimonial-text text-justify">                                   
                        As a business owner in need of Internet exposure, <b>I highly recommend Jim Burns for Web development.</b> Mr. Burns is a delight
                        to work with and is a skilled wordsmith. Since engaging Jim to redesign our Web site, we have experienced exponential growth. 
                        Proof in the pudding was when a competitor said he wanted to copy our site. Mr. Burns has also designed an intricate
                        database content management system with our Company&#39;s growth in mind, which expands the capacity and usefulness of our Web site.
                        <img class="pl15" src="images/quote-right-15x15.png">
                    </blockquote>
                    <div class="author text-left">
                        <p>
                            <span class="bold">Connie Robertson</span>
                            <br><small>President
                                <br><a href="http://www.rivercitysecurity.com">River City Security Services, Inc.</a></small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="testimonial-block wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="50"  data-wow-iteration="1">
                    <img class="pr15 pull-left" src="images/quote-left-15x15.png">
                    <blockquote class="testimonial-text text-justify">                                   
                        If you are considering having your web site created by Jim Burns of Web Media Partners then <strong>you are making an excellent choice.</strong> 
                        Jim completely redesigned AmericanGymTrader.com in just two weeks. Given that we are a database driven site this was no easy task. 
                        We have received numerous compliments from around the country. We average over three million hits a year and have the number one listing 
                        on Google for Fitness Centers for Sale.
                        <img class="" src="images/quote-right-15x15.png">
                    </blockquote>
                    <div class="author text-left">
                        <p>
                            <span class="bold">David Didion</span>
                            <br><small>President
                                <br><a href="http://www.americangymtrader.com">American Gym Trader</a></small>
                        </p>
                    </div>
                </div>
            </div>                       
        </div> 
        <a href="testimonials.php" class="btn btn-wmp1">More testimonials</a>
    </div>
</div>

<!-- ****************************** Section5 - Our Portfolio  ************************************-->

<div id="section5" class="bg-section5 text-center">
    <div class="container">
        <a href="portfolio.php" style="color:#606060;" title="See portfolio"><h1 class="p1 wow rollIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="50" data-wow-iteration="1">Our <strong>Portfolio</strong></h1></a>
        <div id="portfolio" class="owl-carousel p2">
            <div class="item">
                <div>
                    <a href="http://www.armalaser.com" title="Visit: ArmaLaser" rel="follow" target="_blank">
                        <img class="img-responsive lazyOwl" data-src="images/armalaser-400x600.png" alt="ArmaLaser.com">
                    </a>
                </div>
                <a class="text-tooltip" data-toggle="tooltip" title="www.ArmaLaser.com">ArmaLaser</a><br>
                Florida
            </div>
            
            <div class="item">
                <div>
                    <a href="http://www.dcan.us" rel="follow" target="_blank" title="Dedicated Care Always Nearby">
                        <img class="img-responsive lazyOwl" data-src="images/dcan-400x600.png" alt="DCAN.us">
                    </a>
                    <a class="text-tooltip" data-toggle="tooltip" title="www.DCAN.us">Dedicated Care Always Nearby</a><br>
                    Florida
                </div>
            </div>
            
            <div class="item">
                <div>
                    <a href="http://www.newjerseystructural.engineer" title="Visit: R &amp; R Structural Engineering" rel="follow" target="_blank">
                        <img class="img-responsive lazyOwl" data-src="images/new-jersey-structural-engineer-400x600.png" alt="NewJerseyStructural.engineer">
                    </a>
                </div>
                <a class="text-tooltip" data-toggle="tooltip" title="www.NewJerseyStructural.engineer">R &amp; R Structural Engineering</a><br>
                New Jersey
            </div>
            
            <div class="item">
                <div>
                    <a href="http://www.rivercitysecurity.com"  rel="follow" target="_blank" title="Visit: RiverCitySecurity.com">
                        <img class="img-responsive lazyOwl" data-src="images/river-city-security-400x600.png" alt="RiverCitySecurity.com">
                    </a>
                </div>
                <a class="text-tooltip" data-toggle="tooltip" title="www.RiverCitySecurity.com"> River City Security Services, Inc</a><br>
                Florida
            </div>
            
            <div class="item">
                <div>
                    <a href="http://www.americangymtrader.com" rel="follow" target="_blank" title="Visit: AmericanGymTrader.com">
                        <img class="img-responsive lazyOwl" data-src="images/american-gym-trader-400x600.png" alt="AmericanGymTrader.com">
                    </a>
                </div>
                <a class="text-tooltip" data-toggle="tooltip" title="www.AmericanGymTrader.com">American Gym Trader</a><br>
                Virginia
            </div>
            
            <div class="item">
                <div>
                    <a href="http://www.bizkast.com" rel="follow" target="_blank" title="Visit: BizKast.com">
                        <img class="img-responsive lazyOwl" data-src="images/bizkast-400x600.png" alt="BizKast.com">
                    </a>
                </div>
                <a class="text-tooltip" data-toggle="tooltip" title="www.BizKast.com">BizKast</a><br>
                Florida
            </div>                     
            
            <div class="item">
                <div>
                    <a href="http://www.craneheli.com" rel="follow" target="_blank" title="Visit: CraneHeli.com">
                        <img class="img-responsive lazyOwl" data-src="images/craneheli-400x600.png" alt="CraneHeli.com">
                    </a>
                    <a class="text-tooltip" data-toggle="tooltip" title="www.CraneHeli.com">Crane Corporation</a><br>
                    Oregon
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ******************************  Section6 - Twitter Feed  ************************************-->

<div id="section6" class="bg-section6 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">                       
                <h1 class="p1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="50" data-wow-iteration="1">Our <strong>Tweets</strong></h1>                                     
                <div id="twitter-box">
                    <a class="twitter-timeline"  href="https://twitter.com/WebMediaPartner" data-widget-id="660568370987663360">Tweets by @WebMediaPartner</a>
                    <script>!function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>                         
                </div>                           
            </div>                       
        </div> 
    </div>
</div>

<!-- ******************************  Section7 - Logo Carousel  ************************************-->

<div id="section7" class="bg-section7 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="logo-carousel">
                    <div class="item"><a href="http://www.womenofworshipus.com"><img class="img-responsive" alt="Women of Worship US" src="images/logo/wow_250x250.png" title="Women of Worship"/></a></div>
                    <div class="item"><a href="http://www.dcan.us"><img class="img-responsive" alt="Dedicated Care Always Nearby" src="images/logo/dcan-250x250.png" title="DCAN"/></a></div>
                    <div class="item"><a href="http://www.armalaser.com"><img class="img-responsive" alt="ArmaLaser" src="images/logo/armalaser-250x250.png" title="ArmaLaser"/></a></div>
                    <div class="item"><a href="http://www.rivercitysecurity.com"><img class="img-responsive" alt="River City Security" src="images/logo/logo-rcs-250x250.png" title="River City Security Services"/></a></div>
                    <div class="item"><a href="http://www.americangymtrader.com" data-toggle="tooltip" title="American Gym Trader"><img class="img-responsive" alt="American Gym Trader" src="images/logo/agt-250x250.png" title="American Gym Trader"></a></div>
                    <div class="item"><a href="http://www.newjerseystructural.engineer" data-toggle="tooltip" title="R &amp; R Structural Engineering"><img class="img-responsive" alt="R &amp; R Structural Engineering" src="images/logo/rr-structural-250x250.png" title="R&R Structural Engineering" /></a></div>
                    <div class="item"><a href="http://www.craneheli.com" data-toggle="tooltip" title="Crane Corporation"><img class="img-responsive" alt="CraneHeli.com" src="images/logo/crane-heli-250x250.png" title="CraneHeli"/></a></div>
                    <div class="item"><a href="http://www.bizkast.com" data-toggle="tooltip" title="BizKast: Social Media Marketing"><img class="img-responsive" alt="BizKast" src="images/logo/bizkast-250x250.png" title="BizKast" /></a></div>
                    <!--<div class="item"><a href="#" data-toggle="tooltip" title="Blush Boutique: Ladies Fashion Clothing"><img class="img-responsive" alt="Blush Boutique" src="images/logo/blush-boutique-250x250.png" /></a></div>
                    <div class="item"><a href="http://www.epik.com" data-toggle="tooltip" title="Epik: Domain Management Legendary Service"><img class="img-responsive" alt="Epik" src="images/logo/epik-250x250.png" /></a></div>-->
                    <div class="item"><a href="http://www.leaderquest.org/" data-toggle="tooltip" title="LeaderQuest: Challenging the Church"><img class="img-responsive" alt="ken neff author" src="images/logo/leaderquest-250x250.png" title="LeaderQuest"/></a></div>
                </div>
            </div><!-- //  col-md-12 -->
        </div><!-- // row -->
    </div>
</div>

<?php
include 'includes/footer.php';