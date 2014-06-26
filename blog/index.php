<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>My Page</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="css/style1.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

		<script src="js/libs/modernizr-2.0.6.min.js"></script>
	</head>
	<body>

		<!-- We've replaced the starter structure from html5boilerplate
		with our own structure, adding aside, section, and article elements. -->

		<div id="container">
			<header>
				<img src="img/acme.png" width="400" height="133" alt="Acme" id="headerimg"><!-- * -->
				<h1>Acme Plumbing</h1>
			</header>

			<nav>
				<ul>
					<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/about">About Us</a>
						<ul>
							<li>
								<a href="/crew">Our Crew</a>
							</li>
							<li>
								<a href="/history">Plumbing History</a>
							</li>
							<li>
								<a href="/vision">Plumbing Vision</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/products">Products</a>
						<ul>
							<li>
								<a href="/pipes">Pipes</a>
							</li>
							<li>
								<a href="/wrenches">Wrenches</a>
							</li>
							<li>
								<a href="/solder">Soldering Tools</a>
							</li>
							<li>
								<a href="/pbc">PVC Joints</a>
							</li>
							<li>
								<a href="/sprockets">Spacely Sprockets</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/services">Services</a>
						<ul>
							<li>
								<a href="/visites">Site Visits</a>
							</li>
							<li>
								<a href="/spot">Spot Welding</a>
							</li>
							<li>
								<a href="/tig">TiG Welding</a>
							</li>
							<li>
								<a href="/mig">MiG Welding</a>
							</li>
							<li>
								<a href="/drain">Drain Service</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/contact">Contact</a>
						<ul>
							<li>
								<a href="/email">Via Email</a>
							</li>
							<li>
								<a href="/contact_form">Web Form</a>
							</li>
							<li>
								<a href="/pigeon">Carrier Pigeon</a>
							</li>
						</ul>
					</li>
				</ul>

			</nav>

			<div id="boxes">
				<!--*-->
				<section id="main" role="main">
					<article>
						<h1>My Headline</h1>

						<div class="article_img">
							<img src="img/wave.png" width="200" height="200" alt="Wave">
							<p>
								A wave of cool plumbing services.
							</p>
						</div>
						<!-- Added filler text -->
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

					</article>
				</section>

				<aside>
					<!-- Added sidebar content -->
					<!--+-->

					<section class="loginform cf">
						<form name="login" action="index_submit" method="post" accept-charset="utf-8">
							<ul>
								<li>
									<label for="usermail">Email</label>
									<input type="email" name="usermail" placeholder="yourname@email.com" required>
								</li>
								<li>
									<label for="password">Password</label>
									<input type="password" name="password" placeholder="password" required>
								</li>
								<li>
									<input type="submit" value="Login">
								</li>
							</ul>
							
						</form>
					</section>

					<!--+-->

				</aside>
			</div>
			<!--*-->
			<footer>
				<p id="about">
					We're a full-service home-visit plumbing and
					welding bureau with service-people in your home town.
					Call for an estimate!
				</p>

				<div id="footerlist">
					<h3>Contact</h3>
					<ul>
						<li>
							<a href="/email">Via Email</a>
						</li>
						<li>
							<a href="/contact_form">Web Form</a>
						</li>
						<li>
							<a href="/pigeon">Carrier Pigeon</a>
						</li>
					</ul>
				</div>

				<p id="footercopy">
					All content © 2011, Acme Plumbing Ltd.
				</p>

			</footer>

		</div>
		<!--! end of #container -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')
		</script>

		<!-- scripts concatenated and minified via ant build script-->
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
		<!-- end scripts-->

	</body>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			/* Make boxes same height */
			$('#boxes').sameHeights();
		});
	</script>
</html>
