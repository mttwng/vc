<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Matthew Wong, Felix Liu">
	<meta name="fb_admins_meta_tag" content="VC.Berkeley"/>
	<meta name="keywords" content="Berkeley Consulting Club, Voyager Consulting"/>
	<meta name="description" content="VC is a UC Berkeley based non-profit, student business organization that provides consulting services to growth and technology companies in the Bay area."/>
	<meta property="og:title" content="Voyager Consulting"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content="Voyager Consulting"/>
	<meta property="fb:admins" content="VC.Berkeley"/>
	<meta property="og:description" content="VC is a UC Berkeley based non-profit, student business organization that provides consulting services to growth and technology companies in the Bay area."/>
	<meta name="google-site-verification" content="Q02EfEqjQ6BooHasXSHtebbGIWinfO6xVjCPAxqUnOw" />
	
	<title>Voyager Consulting</title>

	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500|Raleway:100,200,300,400,500">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom styles -->
	<!-- <link rel="stylesheet" media="screen and (max-width: 500px)" href="assets/css/mobile.css" /> -->
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Google Analytics Tracking -->
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-37315759-1', 'auto');
  		ga('send', 'pageview');
	</script>

	<!-- Facebook Pixel  -->
	<script>(function() {
		var _fbq = window._fbq || (window._fbq = []);
		if (!_fbq.loaded) {
		var fbds = document.createElement('script');
		fbds.async = true;
		fbds.src = '//connect.facebook.net/en_US/fbds.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(fbds, s);
		_fbq.loaded = true;
		}
		_fbq.push(['addPixelId', '727213910719134']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=727213910719134&amp;ev=PixelInitialized" /></noscript>

	<!-- Facebook Conversion Code for Apply -->
	<script>(function() {
	var _fbq = window._fbq || (window._fbq = []);
	if (!_fbq.loaded) {
	var fbds = document.createElement('script');
	fbds.async = true;
	fbds.src = '//connect.facebook.net/en_US/fbds.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(fbds, s);
	_fbq.loaded = true;
	}
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', '6021097818450', {'value':'0.01','currency':'USD'}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6021097818450&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

	<?php if ($page == 'apply.php') { ?>
			<meta http-equiv="refresh" content="0; url=https://voyager-consulting.workable.com/jobs/31573" />
		<?php } 

	?>

</head>

<body class="home">
	<!-- Fixed navbar -->

	<?php if ($page == 'index.php') { ?>
			<div class="navbar navbar-inverse navbar-fixed-top headroom navbar-active">
		<?php } else { ?>
			<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<?php } 

	?>
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/VClogo.png" id="logo-brand"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li <?php if ($page == 'index.php') { ?>class="active"<?php } ?>><a href="index.php">Home</a></li>
					<li <?php if ($page == 'about.php') { ?>class="active"<?php } ?>><a href="about.php">About</a></li>
					<li <?php if ($page == 'careers.php') { ?>class="active"<?php } ?>><a href="careers.php">Careers</a></li>
					<li <?php if ($page == 'services.php') { ?>class="active"<?php } ?>><a href="services.php">Services</a></li>
					<li <?php if ($page == 'recruiting.php') { ?>class="active"<?php } ?>><a href="recruiting.php">Recruiting</a></li>
					<li <?php if ($page == 'contact.php') { ?>class="active"<?php } ?>><a href="contact.php">Contact</a></li>
					<li><a class="btn" target="_blank" href="apply.php">APPLY</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

