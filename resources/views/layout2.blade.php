<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html> 
	<head>
		<title>ZeroFour by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/fourfirst/assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
                        <header id="header">
                            <div class="inner">

                                <!-- Logo -->
                                    <h1><a href="/offer" id="logo">ZeroFour</a></h1>

                                <!-- Nav -->
                                    <nav id="nav">
                                        <ul>
                                            <li class="current_page_item"><a href="/">Home</a></li>
                                            <li>
                                                <a href="/service">Services</a>
                                                <ul>
                                                    <li><a href="#">Web Development</a></li>
													<li><a href="#">Consulting</a></li>
													<li><a href="#">Training</a></li>
												 	<!--   
													<li>
                                                        <a href="/post">Posts </a>
                                                        <ul>
                                                            <li><a href="#">Lorem ipsum dolor</a></li>
                                                            <li><a href="#">Phasellus consequat</a></li>
                                                            <li><a href="#">Magna phasellus</a></li>
                                                            <li><a href="/">Etiam dolore nisl</a></li>
                                                        </ul>
                                                    </li>
													<li><a href="/schedule">Solutions</a></li>
													-->
                                                </ul>
                                            </li>
                                            <li><a href="/post">Posts</a></li>
                                            <li><a href="/schedule">Solutions</a></li>
                                           <li><a href="/show">Community Events</a></li>
                                        </ul>
                                    </nav>

                            </div>
                        </header>
                    </div>
				</div>

						@yield('offer')

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">

			
                            <!-- Feature 1 service -->
    
@yield('service')

                            <!-- Feature 2 schedule -->       


@yield('schedule')
			
                            <!-- Feature 3 content- post -->  

                                   
                                
                    
@yield ('content')

@yield ('posts')

                          
            </div>

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section>
										<h2>Portafolio</h2>
										<ul class="divided">
											<li><a href="#">Ecomaidy.com</a></li>
											<li><a href="#">Amet ornare in hendrerit </a></li>
											<li><a href="#">Semper mod quisturpis nisi</a></li>
											<li><a href="#">Consequat etiam phasellus</a></li>
											<li><a href="#">Amet turpis, feugiat et</a></li>
											<li><a href="#">Ornare hendrerit lectus</a></li>
											<li><a href="#">Semper mod quis et dolore</a></li>
											<li><a href="#">Amet ornare in hendrerit</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
											<li><a href="#">Amet turpis, feugiat amet</a></li>
											<li><a href="#">Semper mod quisturpis</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section>
										<h2>More Filler</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare in in lectus</a></li>
											<li><a href="#">Semper mod sed tempus nisi</a></li>
											<li><a href="#">Consequat etiam phasellus</a></li>
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Even More Filler</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare hendrerit lectus</a></li>
											<li><a href="#">Semper quisturpis nisi</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
										</ul>
									</section>

							</div>
							<div class="col-6 col-12-medium imp-medium">

								<!-- About -->
									<section>
										<h2><strong>Web1st</strong> by Jose Borquez</h2>
										<p>Hi! This is <strong>Jose</strong>, a tehcnology entusiast, Fully commited to the sharing of knowledge for the benefits of the communities. <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
										Reach us at :  <a href="http://html5up.net/license/">Creative Commons Attribution</a>
										licensed so use it for any personal or commercial project (just credit us
										for the design!).</p>
										<a href="#" class="button alt icon solid fa-arrow-circle-right">Learn More</a>
									</section>

								<!-- Contact -->
									<section>
										<h2>Get in touch</h2>
										<div>
											<div class="row">
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="#">@untitled-corp</a></dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/untitled</a></dd>
														<dt>WWW</dt>
														<dd><a href="#">untitled.tld</a></dd>
														<dt>Email</dt>
														<dd><a href="#">user@untitled.tld</a></dd>
													</dl>
												</div>
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Address</dt>
														<dd>
															1234 Fictional Rd<br />
															Nashville, TN 00000-0000<br />
															USA
														</dd>
														<dt>Phone</dt>
														<dd>(000) 000-0000</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

            </div>
		<!-- Scripts -->
			<script src="/fourfirst/assets/js/jquery.min.js"></script>
			<script src="/fourfirst/assets/js/jquery.dropotron.min.js"></script>
			<script src="/fourfirst/assets/js/browser.min.js"></script>
			<script src="/fourfirst/assets/js/breakpoints.min.js"></script>
			<script src="/fourfirst/assets/js/util.js"></script>
			<script src="/fourfirst/assets/js/main.js"></script>

	</body>
</html>