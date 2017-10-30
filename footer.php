<?php
if (isset($_POST['quick-msg-send-btn'])) {
    $footer_name = "";
    $footer_email = "";
	$footer_contact_number = "";
    $footer_message = "";
    if (isset($_POST['footer_name']) && !empty($_POST['footer_name'])) {
        $footer_name = $_POST['footer_name'];
    }
    if (isset($_POST['footer_email']) && !empty($_POST['footer_email'])) {
        $footer_email = $_POST['footer_email'];
    }
	if (isset($_POST['footer_contact_number']) && !empty($_POST['footer_contact_number'])) {
        $footer_contact_number = $_POST['footer_contact_number'];
    }
    if (isset($_POST['footer_message']) && !empty($_POST['footer_message'])) {
        $footer_message = $_POST['footer_message'];
    }
    $mail_content = "Name:" . $footer_name . ",\r\nEmail:" . $footer_email . ",\r\nContact Number:" . $footer_contact_number . ",\r\nMessage:" . $footer_message;
    $headers = "From: " . $footer_email;
    mail("info@ukenergybusiness.com", $footer_email, $mail_content, $headers);
}
?>
<div class="container margin-bottom-10px">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center supplier-title wow fadeInDown" data-wow-duration="1s">UK Energy Business Suppliers</h1>
        </div>
    </div>
    <div class="suppliers">
        <div class="row margin-top-25px wow fadeInLeftBig" data-wow-duration="1s">
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a1.jpg" alt="a1"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a2.jpg" alt="a2"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a3.jpg" alt="a3"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a4.jpg" alt="a4"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a5.jpg" alt="a5"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a6.jpg" alt="a6"/>
            </div>
        </div>
        <div class="row wow fadeInRightBig" data-wow-duration="1s">
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a7.jpg" alt="a7"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a8.jpg" alt="a8"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a9.jpg" alt="a9"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a10.jpg" alt="a10"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a11.jpg" alt="a11"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a12.jpg" alt="a12"/>
            </div>
        </div>
        <div class="row wow fadeInLeftBig" data-wow-duration="1s">
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a13.jpg" alt="a13"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a14.jpg" alt="a14"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a15.jpg" alt="a15"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a16.jpg" alt="a16"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a17.jpg" alt="a17"/>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <img src="images/suppliers/a18.jpg" alt="a18"/>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="footer-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="sme.php">SME</a></li>
                            <li><a href="join-us.php">Join Us</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="footer-text text-center">UK Energy Business © 2012. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="msg-panel-box">
    <div class="quick-msg-img in-out"> 
        <img src="images/enquiry-here.png"/>
    </div>
    <form class="form-class" action="#" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p>Leave a message and we'll get back to you.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Name</label>
                <input class="form-control" type="text" placeholder="Your Name" id="footer_name" name="footer_name">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Email</label>
                <input class="form-control" type="text" placeholder="Your Email" id="footer_email" name="footer_email">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Conatct Number</label>
                <input class="form-control" type="text" placeholder="Your Conatct Number" id="footer_contact_number" name="footer_contact_number">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Message</label>
                <textarea rows="3" class="form-control" placeholder="Your Message" id="footer_message" name="footer_message"></textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button class="form-control custom-button" id="quick-msg-send-btn" name="quick-msg-send-btn">Send</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<script>
    $(document).ready(function () {
        $(".quick-msg-img").click(function (event) {
            event.preventDefault();
            if ($(this).hasClass("in-out")) {
                $(".msg-panel-box").stop().animate({left: "0px"}, 500);
            } else {
                $(".msg-panel-box").stop().animate({left: "-300px"}, 500);
            }
            $(this).toggleClass("in-out");
            return false;
        });
    });
</script>
