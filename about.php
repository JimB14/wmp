<?php
$page_id = 'about';
$title = 'About Us';
$description = 'About Web Media Partners';
include 'includes/header.php';
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active"><?php echo htmlspecialchars($title); ?></li>
    </ol>
    <div class="row p1"><div class="col-sm-12"><h1 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="50" data-wow-iteration="1"><?php echo htmlspecialchars($title); ?></h1></div></div>
    <div class="row p2">        
        <div class="col-md-8 col-sm-8">           
            <div class="panel panel-default wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="50" data-wow-iteration="1">
                <div class="panel-heading"></div>

                <div class="panel-body p2" id="web-design">
                    <div class="media">
                        <div class="media-left">
                            <div class="about-img-box">
                                <!--<a href="#">-->
                                <img class="img-circle media-object wow slideInLeft" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="50" data-wow-iteration="1" src="images/jburns-400x354.jpg" width="140" alt="Jim Burns">
                                <!--</a>-->
                            </div>
                        </div>
                        <div class="media-body no-border-bottom">
                            <h3 class="media-heading wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="50" data-wow-iteration="1"><span class="glyphicon glyphicon-user"></span> Jim Burns, President</h3>
                            <p>
                                Web Media Partners was launched in April 2012 with the aim to assist small businesses in the development, growth and maintenance of an online presence, and
                                to help them gain a better understanding of the benefits and opportunities of Web technologies. Our goal is to earn the confidence of clients that we might serve them as 
                                their Webmaster or Web Media Partner.
                                <a class="btn btn-wmp1 btn-xs more-less" role="button" data-toggle="collapse" href="#more-about-jim" aria-expanded="false" aria-control="more-about-jim">
                                    Read more
                                </a> 
                            </p>
                            <div class="collapse" id="more-about-jim">
                                <p class="p2">
                                    My background includes a lengthy career in small business. Before that I studied theology, earning two Masters degrees from Ashland Theological Seminary. I have enjoyed 
                                    a successful career as an entrepreneur, owning and operating successful businesses since 1989. Computer hardware, software, graphics and the Internet 
                                    interested me prior to discovering I had a passion for writing code and doing Web development. I wish that I had known long ago what I know now.
                                    <br><br>
                                    My goal is to help others like myself who have an interest and a sense that there&#39;s a lot there, that perhaps they are &ldquo;missing out.&rdquo; The Web offers far more
                                    benefits and opportunities than I can enumerate here. I am, however, anxious to share what I know to help small businesses make better use of these tremendous tools. The innovation
                                    behind the Web is itself a complex universe of creativity and ideas coming from all over the world. 
                                    <br><br>
                                    In this field, every project is a new adventure with its own set of challenges. It&#39;s never boring. That&#39;s why it is important for me to learn as much as possible from clients what they want to 
                                    accomplish, and what obstacles they perceive. Though this phase can be time-consuming, in the end it saves time and money that otherwise can be wasted reworking code. It is wise 
                                    to exercise caution when a Web developer leads with low prices, or is very anxious to start right away. 
                                    <br><br>
                                    Creating, developing and maintaining a healthy and successful online presence requires work in four interdependent areas: (1) Build, (2) Develop, (3) Protect, and (4) Market. 
                                    <br><br>
                                    A brand or company&#39;s success is in proportion to the attention or neglect given to these components. What value is a visually stunning and highly functional Web site that
                                    no one sees or is invisible to Google? What value is such a site if blacklisted by Google because of malware? What value is a site with code that 
                                    violates search engine requirement best practices, leaving it with no chance of success in search results? What value is a site populated with the wrong keywords, making it impossible 
                                    to display on page one for its critical keywords?
                                    <br><br>
                                    A Web site is like a human body; its health requires a holistic approach. Launching a Web site does not mean <em>ipso facto</em> that it will attract visitors. A digital presence
                                    or footprint requires the ongoing execution of thought-out, developed strategies over time and across all available channels, and follow-up analysis to guard against waste. 
                                    <br><br>
                                    All successful people understand that there is no short-cut to success in their business. The same principle applies in the digital sphere. As one pundit said, &ldquo;There is no business 
                                    of any size that wouldn&#39;d be dramatically and permanently changed if it were to appear at the top of Google&#39;s search results.&rdquo; As described <a href="services.php#ppc">elsewhere</a>
                                    in the Pay-Per-Click section, a number one position in Google&#39;s search results for the keywords &ldquo;toaster oven&rdquo; could generate 49,500 visitors in one month.
                                    <br><br>
                                    Business is about resolving problems. We welcome the opportunity to learn about your challenges and what you hope to achieve, in order that we might help you with solutions. 
                                    We promise outstanding work performed with reliable professionalism wrapped up in integrity and gratitude.
                                </p>
                                <div class="text-center"><a href="mailto:jim.burns@webmediapartners.com?subject=Please%20contact%20me" class="btn btn-wmp1" role="button">Email Jim Burns</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- // panel -->
        </div><!-- // col-md-8 col-sm-8 -->

        <?php include 'includes/side-navbar.php'; ?>

    </div>

</div><!-- // row -->
</div><!-- // container --><!-- ignore warning; necessary div -->


<?php
include 'includes/footer.php';
?>