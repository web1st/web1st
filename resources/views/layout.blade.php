<!DOCTYPE HTML>
<html>
	<head>
		<title>Web1st-Solutions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
                <header id="header">
                    <h1>JOSE BORQUEZ</h1>
                    <p>Web Project Manager &nbsp;&bull;&nbsp; Internet Solutions Consultant &nbsp;&bull;&nbsp; Adventure Seeker</p>
            @yield('content')
                </header>
            </div>
            </div>
<!-- Footer -->
        <footer id="footer">
            <span class="copyright">&copy; Aria. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>
        </footer>
    </div>
    <script>
        window.onload = function() { document.body.classList.remove('is-preload'); }
        window.ontouchmove = function() { return false; }
        window.onorientationchange = function() { document.body.scrollTop = 0; }
    </script>
	</body>
</html>