<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team Drutha</title>
	<link rel="shortcut icon" href="img/favicon.png">


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script src="https://d2xwmjc4uy2hr5.cloudfront.net/im-embed/im-embed.min.js"></script>
	
	
</head>

<body id="page-top">
	<?php
		$payid = "1";
		$stat = "1";
		if( $_GET["payment_id"] || $_GET["status"] ) {
			$payid = $_GET["payment_id"];
			$stat = $_GET["status"];
		}
		
	?>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo_grey.png" style="margin-left: 10px; margin-top:-35px;" class="img-responsive" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#support">Support Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#packages">Sponsorship Packages</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#sponsors">Sponsors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <section class="bg-primary" id="thankyou" style= "background-image: url(img/teamdrutha.jpg); background-size: cover;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center" >
					 
					<?php if($payid != "1" && $stat == "success"):?>
					<h2 class="section-heading">Thank You for Supporting Us</h2>
                    <hr class="light">
                    <p class="text-faded">Payment successful, your Payment ID is <?= $payid ?><br>Kindly note down the payment id for future reference.<br>Your help is greatly appreciated. Stay tuned and we'll let you know if you are the lucky donor who gets to come race with us at the Buddh International Circuit. </p>
					<a class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".1s" style="text-decoration: none;" ></a>	
					<?php endif; ?>
					<?php if($payid != "1" && $stat == "failure"): ?>
					<h2 class="section-heading">Payment Failed!</h2>
                    <hr class="light">
                    <p class="text-faded">Your Payment ID: <?= $payid ?><br>Kindly note down the payment id for future reference.<br>Please try again.</p>
					<a class="fa fa-4x fa-exclamation-triangle wow bounceIn text-primary" data-wow-delay=".1s" style="text-decoration: none;" ></a>
					<?php endif; ?>
				</div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <hr class="primary">
                    <p>If you wish to support us or know more, give us a call or send us an email and we will get back to you right away!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+91-8281182258<br>+91-9567394777</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">teamdrutha@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
	<footer>
    <div class="container">
        <div class="raw">
            <div class="col-sm-6">
            <p class="navbar-text pull-left">© Team Drutha 2016 | Site Maintained By 
                <a href="#" target="_blank" >DevTera</a>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="15" height="15" data-icon="lightbulb" data-container-transform="translate(1)" viewBox="0 0 8 8">
					<g transform="translate(1)">
						<path d="M3.406 0a.5.5 0 0 0-.125.063l-3 1.5a.5.5 0 1 0 .438.875l3-1.5a.5.5 0 0 0-.313-.938zM1.5 5.5" />
						<path d="M4.406 3.5a.5.5 0 0 0-.125.063l-3 1.5a.5.5 0 0 0 .219.938h2a.502.502 0 1 0 .094-1l1.125-.563a.5.5 0 0 0-.313-.938zM4.406 1.5a.5.5 0 0 0-.125.063l-4 2a.5.5 0 1 0 .438.875l4-2a.5.5 0 0 0-.313-.938zM1.906 7a.502.502 0 1 0 .094 1h1a.5.5 0 1 0 0-1h-1a.5.5 0 0 0-.094 0z" />
					</g>
				</svg>
            </p>
          </div>

            <div class="col-sm-6">
             <p class="navbar-text pull-right"><a href="http://www.ceadoor.ihrd.ac.in/" target="_blank"> College of Engineering Adoor</a> | Drutha </p>
            </div>

        </div>
    </div>  
</footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
	
	
</body>

</html>
