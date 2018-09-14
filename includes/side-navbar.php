<div class="col-md-4 col-sm-4">
    <div class="list-group">
        <a href="index.php" class="list-group-item <?php if (isset($page_id) && $page_id === 'home') echo ' active'; ?>">Home</a>
        <a href="about.php" class="list-group-item <?php if (isset($page_id) && $page_id === 'about' ||  $page_id === 'testimonials') echo ' active'; ?>">About Us</a>
        <a href="services.php" class="list-group-item <?php if (isset($page_id) && $page_id === 'services') echo ' active'; ?>">Services</a>
        <a href="portfolio.php" class="list-group-item <?php if (isset($page_id) && $page_id === 'portfolio') echo ' active'; ?>">Portfolio</a>
        <a href="contact.php" class="list-group-item <?php if (isset($page_id) && $page_id === 'contact') echo ' active'; ?>">Contact</a>
    </div>

    <!-- BS Custom Content -->
    <div class="daily-dog t3">
        <h2 class="text-center wow bounceInRight" data-wow-duration="1s" data-wow-delay=".75" data-wow-offset="50" data-wow-iteration="1"><em>News<small> to stay informed</small></em></h2>
        <div class="tminus05 wow fadeInRight p1 text-center" data-wow-duration="1s" data-wow-delay=".75s" data-wow-offset="50" data-wow-iteration="1"><img src="images/pup-reading-250x185.png"></div>           
        <div class="list-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="50" data-wow-iteration="1">
            <a id="daily-dog" data-toggle="tooltip" title="comScore report (click to read)" href="http://bit.ly/1k5tPha" target="_blank" class="list-group-item">
                <h4 class="list-group-item-heading "><span class="glyphicon glyphicon-pencil"></span> Web Design <em> (Think mobile-first)</em></h4>
                <p class="list-group-item-text">Number of mobile-only Internet users now exceeds desktop-only users in US</p>
            </a>
            <a id="daily-dog" data-toggle="tooltip" title="cnet article (click to read)" href="http://cnet.co/1O2yYSO" target="_blank" class="list-group-item">
                <h4 class="list-group-item-heading "><span class="glyphicon glyphicon-th"></span> Web Development <em> (Think mobile-first)</em></h4>
                <p class="list-group-item-text">Google mobile searches now outstrip those from PCs</p>
            </a>
            <a data-toggle="tooltip" title="CNN report (click to read)" href="http://cnnmon.ie/1ND7FQ9" target="_blank" class="list-group-item">
                <h4 class="list-group-item-heading"><span class="glyphicon glyphicon-warning-sign"></span> Web site Security <em>(Lock the door)</em></h4>
                <p class="list-group-item-text">Nearly 1 million new malware threats released every year</p>
            </a>
            <a data-toggle="tooltip" title="Search Engine Land report (click to read)" href="http://selnd.com/1J4qOlX" target="_blank" class="list-group-item">
                <h4 class="list-group-item-heading"><span class="glyphicon glyphicon-globe"></span> Social Media <em>(Post, post, post)</em></h4>
                <p class="list-group-item-text">Google now indexing 466% more tweets</p>
            </a>
        </div>
    </div><!-- // daily-dog -->