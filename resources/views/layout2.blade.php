<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html> 
	<head>
		<title>Internet technology services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" href={{ asset('assets/images/web1st_icon.svg') }} />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link href= {{ ('/assets/css/main.css') }} rel="stylesheet" />
		
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
                                    <h1><a href="/offer" id="logo">Web1st</a></h1>

                                <!-- Nav -->
                                    <nav id="nav">
                                        <ul>
                                           <!-- <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/">Home</a></li> -->
                                            <li class="{{ Request::path() === 'service' ? 'current_page_item' : ''}}" ><a href="/service">Services</a>
                                                <ul>
                                                    <li><a href="/development">Web Development</a></li>
													<!-- <li><a href="#">Consulting</a></li>-->
													<!--<li><a href="#">Training</a></li>-->
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
											<li class="{{ Request::path() === 'schedule' ? 'current_page_item' : ''}}"><a href="/schedule">Portafolio</a></li>
                                            <li class="{{ Request::path() === 'post' ? 'current_page_item' : ''}}"><a href="/post">Posts</a></li>
                                           
                                           <li class="{{ Request::path() === 'community' ? 'current_page_item' : ''}}"><a href="/community">Community Events</a></li>
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
@yield('community') 

                          
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
											<li><a href="#">Add your name here </a></li>
											<li><a href="#">Let's team up</a></li>
										
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section>
										<h2>Community Links</h2>
										<ul class="divided">
											<li><a href="#">Web1st Lab</a></li>
											<li><a href="#">Plant a Tree</a></li>
											<li><a href="#">Parents & Web1st</a></li>
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Partner Services</h2>
										<ul class="divided">
											<li><a href="#">YOur business here </a></li>
											<li><a href="#">Add yor Name here</a></li>
										</ul>
									</section>

							</div>
							<div class="col-6 col-12-medium imp-medium">

								<!-- About -->
									<section>
										<h2><strong>Affordable Web</strong> for all !</h2>
										<p>Hi! We are <strong>Web1st.solutions</strong>, tehcnology entusiasts, bringing together professionals commited to work for the benefits of the communities. <a href="http://twitter.com/web1st2"></a> For shchedule <a href="http://html5up.net/">Consulting</a>.
										Reach us at :  <a href="http://web1st.solutions/shchedule">Web Development & Internet Technolgy Consulting Services</a>
							</p>
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
															2841 E Lincoln Ave<br />
															Anaheim, CA 92806<br />
															USA
														</dd>
														<dt>Phone</dt>
														<dd>(714) 865-8542</dd>
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
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.dropotron.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>