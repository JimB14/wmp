<?php
$page_id = 'purchase-thankyou';
$title = 'Thank you';
$description = 'Thank you | Web Media Partners';
include 'includes/header.php';
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active"><?php echo htmlspecialchars($title); ?></li>
    </ol>
    <div class="row p1"><div class="col-sm-12"><h1 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="50" data-wow-iteration="1"><?php echo htmlspecialchars($title); ?></h1></div></div>
    <div class="row p2">        
        <div class="col-md-12 col-sm-12">           
            <div class="panel panel-default wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="50" data-wow-iteration="1">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <h2>Thank you for purchasing a new Web site from Web Media Partners. We are excited to begin working with you. You will hear from us shortly.</h2>
                    
                    <h2 class="wow flash errMsg" data-wow-duration="1s" data-wow-delay="2s" data-wow-offset="10" data-wow-iteration="2">Thank you!</h2>
                </div>
            </div>   
    </div>
</div>
</div> <!-- // container --><!-- ignore warning; necessary div -->

<?php
include 'includes/footer.php';
?>