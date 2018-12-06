<!doctype html>
<html lang="en-GB" class="no-js">
	<head>
		<meta charset="UTF-8">
		<title>Welcome to LA ICT.com - LA ICT Services Limited : LA ICT Services Limited</title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon">
        <link href="{{ asset('img/touch.png') }}" rel="apple-touch-icon-precomposed">
		<link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Education and Corporate ICT Services">
		<script src="//code.jquery.com/jquery-2.2.4.js"></script>

		<link rel='stylesheet' id='normalize-css'  href="{{ asset('css/normalize.css') }}" media='all' />
		<link rel='stylesheet' id='html5blank-css'  href="{{ asset('css/style.css') }}" media='all' />
		<script type='text/javascript' src="{{ asset('js/conditionizr-4.3.0.min.js') }}"></script>
		<script type='text/javascript' src="{{ asset('js/modernizr-2.7.1.min.js') }}"></script>
		<script type='text/javascript' src="{{ asset('js/scripts.js') }}"></script>

	</head>
	<body class="">

	<!-- header -->
	<header class="header clear" role="banner">
		<!-- nav -->
		<nav class="navbar navbar-default navbar-fixed-top shadow-bottom" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button> 
				  <a class="navbar-brand" href="http://la-ict.com">
					<img src="{{ asset('img/logo-small.png') }}" class="logo" alt="LA ICT Services">
				  </a>
				</div>
				<div class="navbar-collapse collapse"> 
					<ul id="menu-primary" class="nav navbar-nav navbar-right">
						<li id="menu-item-38" class="menu-item current-menu-item active">
							<a title="Home" href="http://la-ict.com/">Home</a>
						</li>
						<li id="menu-item-40" class="menu-item dropdown">
							<a title="Services" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Services 
							<span class="caret"></span>
						</a>
							<ul role="menu" class=" dropdown-menu">
								<li id="menu-item-42" class="menu-item">
									<a title="General Support" href="/services/general-support/">General Support</a>
								</li>
								<li id="menu-item-44" class="menu-item">
									<a title="Server Support" href="/services/server-support/">Server Support</a>
								</li>
								<li id="menu-item-43" class="menu-item">
									<a title="Remote Backup" href="/services/remote-backup/">Remote Backup</a>
								</li>
								<li id="menu-item-45" class="menu-item">
									<a title="Web Development" href="/services/web-development/">Web Development</a>
								</li>
								<li id="menu-item-41" class="menu-item">
									<a title="Connectivity" href="/services/connectivity/">Connectivity</a>
								</li>
							</ul>
						</li>
						<li id="menu-item-39" class="menu-item">
							<a title="Our Promise" href="/our-promise/">Our Promise</a>
						</li>
						<li id="menu-item-37" class="menu-item">
							<a title="Contact Us" href="/contact-us/">Contact Us</a>
						</li>
						<li id="menu-item-46" class="menu-item">
							<a title="Support" href="/support-info/">Support</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /nav -->
	</header>
	<!-- /header -->
	
	<!-- wrapper -->
	<div class="wrapper">
		<div class="row">
			<main role="main">
				@yield('content')
			</main>
		</div>
			
		<!-- footer -->
		<footer class="footer" role="contentinfo">
			<div class="container">
			<!-- copyright -->
			<p class="copyright alignleft">
				Copyright <a href="http://la-ict.com">LA ICT Services Limited</a> 2012 - 2017
			</p>
			<!-- /copyright -->
			<p class="copyright alignright">
				<a href="/terms-and-conditions" >Terms and Conditions</a> | <a href="/privacy">Privacy Policy</a>
			</p>
			</div>

		</footer>	
	</div>
	<!-- /wrapper -->

	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>
