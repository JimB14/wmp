<?php
$page_id = 'error';
$title = 'Error';
$description = 'Error | Web Media Partners';
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
                    <h2>Oops! Sorry, page not found!</h2>
                    
                    <h3 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="2s" data-wow-offset="10" data-wow-iteration="1">Please try again.</h3>
                </div>
            </div>   
    </div>
</div>
</div> <!-- // container --><!-- ignore warning; necessary div -->

<?php
include 'includes/footer.php';
?>