<?php
session_start();
$page_id = 'contact';
$title = 'Contact Us';
$description = 'Contact Web Media Partners';

if (isset($_POST['action']) && $_POST['action'] === 'submit_contact_info') {
    
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $telephone = sanitize($_POST['telephone']);
    $form_message = sanitize($_POST['message']);
    
    // Store visitor name in SESSION variable for use @thankyou
        $_SESSION['name'] = $name;    
    
    if(empty($name))
    {
        $errMsg['name'] = '*Please enter your name.';
    }
    elseif(empty($email))
    {
        $errMsg['email'] = '*Please enter your email address.';
    }
    elseif(empty($telephone)) 
    {
        $errMsg['telephone'] = '*Please enter your telephone number.';
    } 
    else
    {         
        // Prepare message for e-mail; set e-mail recipient  
        $jim_gmail = 'jim.burns14@gmail.com';

        $to = $jim_gmail;
        $subject = 'Web site visitor';
        $from = $email;
        $message = '
        <html>
        <head></head>
        <body>
        <h2>Web site message via Contact Form</h2>
        <p>Name: ' . $name . '<br>
           Email: ' . $email . '<br>
           Telephone: ' . $telephone . '<br>
           Message: ' . $form_message . '<br>
        </body>
        </html>
        '; // end of message
        // To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";      // code to send HTML on UNIX
        $headers .= 'Content-type:text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'From: ' . $from . "\r\n";
        //$headers .= 'Bcc: ' . $mary . "\r\n";         
        //$headers .= 'Bcc: ' . $jim_gmail . "\r\n"; 
             
        // Send message using mail() function 
        mail($to, $subject, $message, $headers);

        header('Location: thankyou.php');
        exit();
    }
}

// Function used
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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
                <div class="panel-body">
                                                          
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="contact-form" method="post">
                        <div class="form-group has-feedback">
                            <p class="errMsg"><?php if(isset($errMsg['name'])) {echo htmlspecialchars($errMsg['name']);} ?></p>
                            <label class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php if(isset($name)) echo htmlspecialchars($name); ?>" autofocus="autofocus">
                            <i class="glyphicon glyphicon-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <p class="errMsg"><?php if(isset($errMsg['email'])) {echo htmlspecialchars($errMsg['email']);} ?></p>
                            <label class="control-label">Email address </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($email)) echo htmlspecialchars($email); ?>">
                            <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <p class="errMsg"><?php if(isset($errMsg['telephone'])) {echo htmlspecialchars($errMsg['telephone']);} ?></p>
                            <label class="control-label">Telephone</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" value="<?php if(isset($telephone)) echo htmlspecialchars($telephone); ?>">
                            <i class="glyphicon glyphicon-earphone form-control-feedback"></i>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="5">How did you hear about us?</textarea>
                        </div>
                            <!--<div class="g-recaptcha p1" data-sitekey="6LexqRITAAAAAP67hXkttAi13Y6xVJ57m4FiU9NO" data-theme="dark"></div>-->
                        <button type="submit" class="btn btn-wmp1 btn-lg btn-block" name="action" value="submit_contact_info">Submit</button>                        
                    </form>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="p1 wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="50" data-wow-iteration="1">Locate Us</h1>
                    <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55232.043391540254!2d-81.45017135675742!3d30.094108669137356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e4315139647453%3A0xcd8b52dcc45709f5!2sPonte+Vedra+Beach%2C+FL+32081!5e0!3m2!1sen!2sus!4v1446490327354" height="450" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div> 
           
        <?php include 'includes/side-navbar.php'; ?>

    </div>
</div>
</div> <!-- // container --><!-- ignore warning; necessary div -->

<?php
include 'includes/footer.php';