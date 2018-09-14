<!-- ******************************  Footer  ************************************-->

<div id="footer" class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 p2">
                <h3>Web Technologies</h3>
                <p id="web-technologies">
                    <a href="http://www.w3.org/TR/html5/" data-toggle="tooltip" data-placement="auto" title="HTML5"><span class="pr15"><i class="fa fa-html5 fa-lg"></i></span></a>
                    <a href="http://www.w3.org/Style/CSS/Overview.en.html" data-toggle="tooltip" title="CSS3"><span class="pr15"><i class="fa fa-css3 fa-lg"></i></span></a>
                    <a href="http://php.net/" data-toggle="tooltip" title="PHP"><span class="pr15"><img class="gray-convert" src="images/php-47x25.png" alt="PHP"></span></a>
                    <a href="http://www.mysql.com/" data-toggle="tooltip" title="MySQL"><span class="pr15"><img class="gray-convert" src="images/mysql-37x25.png" alt="MySQL"></span></a>
                    <a href="http://www.jquery.com/" data-toggle="tooltip" title="jQuery"><span class="pr15"><img class="gray-convert" src="images/jquery_40x40.png" alt="jQuery"></span></a>
                    <a href="https://en.wikipedia.org/wiki/Ajax_(programming)" data-toggle="tooltip" title="ajax"><span class="pr15"><img class="gray-convert" src="images/ajax_40x18.jpg" alt="ajax"></span></a>
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" data-toggle="tooltip" title="javascript"><span class="pr15"><img class="gray-convert" src="images/javascript_35x49.png" alt="javascript"></span></a>
                    <a href="https://wordpress.org/" data-toggle="tooltip" title="WordPress"><span class="pr15"><i class="fa fa-wordpress fa-lg"></i></span></a>
                </p>                          
            </div>

            <div class="col-sm-5 p2">
                <h3><a  data-toggle="tooltip" title="Complete contact form" href="contact.php">Contact Us</a></h3>
                <ul class="contact">
                    <li><p><i class="fa fa-map-marker"></i> <strong></strong> &nbsp;Ponte Vedra, FL</p></li>
                    <li><p><i class="fa fa-phone"></i>&nbsp;<a  data-toggle="tooltip" title="Press to dial" href="telephone:9043427437">904.342.7437</a></p></li>
                    <li><p><i class="fa fa-envelope"></i>&nbsp;<a data-toggle="tooltip" title="Email sales" href="mailto:sales@webmediapartners.com">sales@webmediapartners.com</a></p></li>
                </ul>
            </div>

            <div class="col-sm-2">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="http://www.facebook.com/webmediapartners" data-toggle="tooltip" title="Facebook" target="_blank"><span style="color:#fff;"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i style="color:#3b5998;" class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></span></a></li>
                    <li><a href="http://www.twitter.com/webmediapartner" data-toggle="tooltip" title="Twitter" target="_blank"><span style="color:#fff;"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i style="color:#4099FF;" class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></span></a></li>                               
                </ul>

            </div>                     
        </div> <!-- // row -->                                     
    </div>
</div>

<!-- ******************************  Bottom  ************************************-->

<div id="bottom" class="bg-bottom text-center">
    <div class="container">
        <div>&copy; 2012 - <script>var today = new Date();
            document.write(today.getFullYear());</script> 
            Web Media Partners &nbsp; 
            | &nbsp; www.webmediapartners.com &nbsp;
            | &nbsp; All Rights Reserved &nbsp;
            | &nbsp; Ponte Vedra, FL USA
            <br>
            | &nbsp; <a href="terms-and-conditions.php">Terms and Conditions</a> &nbsp;
            | &nbsp; <a href="privacy-policy.php"> Privacy Policy</a> &nbsp;                                     
            | &nbsp; <a href="mailto:sales@webmediapartners.com?subject=Please%20contact%20me"><i class="fa fa-envelope"></i> Email</a> &nbsp;
            | &nbsp; <a href="tel:9043427437"><i class="fa fa-phone"></i> 904-342-7437</a>&nbsp;
            |
        </div>
    </div>
</div>

<!-- *****************************************************************************-->

<!-- http://owlgraphic.com/owlcarousel/index.html -->
<script>
    $(document).ready(function() {
        $("#portfolio").owlCarousel({
            items: 3,
            lazyLoad: true,
            navigation: true
        });
    });
</script>
<script>
    $(document).ready(function() {

        $("#logo-carousel").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    $(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
<script>
    $('.more-less').click(function() {
        var $this = $(this);
        $this.toggleClass('more-less');
        if ($this.hasClass('more-less')) {
            $this.text('Read more');
        } else {
            $this.text('Collapse');
        }
    });
</script>
<script>
    $('class or id here').click(function() {
        if ($('class or id to hide or show here').is(':hidden')) {
            $('class or id to hide or show here').slideDown(1000);
        } else {
            $('class or id to hide or show here').slideUp('slow');
        }
    });
</script> 
<script>
<?php
if (isset($title) && $title === 'Portfolio') {
    include 'js/project-highlights.js';
}
?>
</script>
<?php include 'google-analytics.php' ?>
<?php include 'quantcast.php' ?>
</body>
</html>  