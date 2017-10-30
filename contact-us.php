<?php
if (isset($_POST['contact-send-btn'])) {
    $options = "";
	foreach ($_POST['check_list'] as $check_list_value) {
		if($check_list_value == 1)
		{
			$options = $options. "I am interested in a price comparison for my business energy.";
		}
		if($check_list_value == 2)
		{
			$options = $options. "I want to reduce my business energy consumption.";
		}
		if($check_list_value == 3)
		{
			$options = $options. "I am interested to join UK Energy Business.";
		}
		if($check_list_value == 4)
		{
			$options = $options. "I need help to understand my bills.";
		}
	}
	
	$name = "";
    $email = "";
	$company_name = "";
	$phone = "";
    $message = "";
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
	if (isset($_POST['company_name']) && !empty($_POST['company_name'])) {
        $company_name = $_POST['company_name'];
    }
	if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $message = $_POST['message'];
    }
    $mail_content = "Name:" . $name . ",\r\nEmail:" . $email . ",\r\nCompany Name:" . $company_name . ",\r\nPhone:" . $phone . ",\r\nOptions:" . $options . ",\r\nMessage:" . $message;
    $headers = "From: " . $email;
    mail("info@ukenergybusiness.com", $email, $mail_content, $headers);
}
?>
<?php include './header.php'; ?>
<div id="header" class="container-fluid">
    <div class="container">
        <div class="row margin-top-bottom-adjust">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                <a href="index.php"><img src="images/logo.png" class="img-responsive logo" alt="Logo" ></a>
                <label class="company-country">UK</label> <label class="company-business">Energy Business</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <ul class="phone-number-ul">
                    <li><h1>0207 1129 189</h1></li>
                    <li><img class="img-responsive phone" src="images/phone.png" alt="phone"/></li>
                    <li><a href="contact-us.php"><img class="img-responsive free-quote" src="images/request-a-free-quote.jpg" alt="request"/></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="menu">
    <div class="container-fluid">
        <div class="header-bg">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <nav class="navbar navbar-default header-navbar-custom margin-top-bottom-50px">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle navbar-toggle-custom collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-collapse-custom " id="header-navbar-collapse">
                            <ul class="nav navbar-nav nav-custom">
                                <li><a class="hvr-rectangle-out" href="index.php">Home</a></li>
                                <li><a class="hvr-rectangle-out" href="about-us.php">About Us</a></li>
                                <li><a class="hvr-rectangle-out" href="sme.php">SME</a></li>
                                <li><a class="hvr-rectangle-out" href="join-us.php">Join Us</a></li>
                                <li class="active"><a class="hvr-rectangle-out" href="contact-us.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container contact-us">
        <div class="row form-group">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                <div class="form wow fadeInLeftBig" data-wow-duration="1s">
                    <form action="#" method="post">
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>Please take a moment to fill in the form</h3>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <label class="control_label">Name</label>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <label class="control_label">Email <span class="color-red">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <label class="control_label">Company Name <span class="color-red">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <label class="control_label">Phone Number <span class="color-red">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                                <div class="check-box">
                                    <label>
                                        <input type="checkbox" name="check_list[]" value="1"> <span>I am interested in a price comparison for my business energy</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                                <div class="check-box">
                                    <label>
                                        <input type="checkbox" name="check_list[]" value="2"> <span>I want to reduce my business energy consumption</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                                <div class="check-box">
                                    <label>
                                        <input type="checkbox" name="check_list[]" value="3"> <span>I am interested to join UK Energy Business </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                                <div class="check-box">
                                    <label>
                                        <input type="checkbox" name="check_list[]" value="4"> <span>I need help to understand my bills</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                                <textarea class="form-control" rows="5" placeholder="How we can Help?" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                                <button class="anchor-holder custom-button margin-top-20px" id="contact-send-btn" name="contact-send-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5">
                <div class="our-office wow fadeInRightBig" data-wow-duration="1s">
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Our Office</h3>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <i class="fa fa-home"></i>  <span>UK ENERGY BUSINESS </span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <i class="fa fa-address-book"></i>  <span>98-102, Cranbrook Road(1st FL) Ilford Essex IG1 4NH</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <i class="fa fa-phone"></i>  <span>0207 1129 189</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <i class="fa fa-envelope"></i>  <a>info@ukenergybusiness.com</a>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img src="images/Contact-us.jpg" class="img-responsive" alt="contact us image"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="push"></div>
</div>
<?php include './footer.php'; ?>