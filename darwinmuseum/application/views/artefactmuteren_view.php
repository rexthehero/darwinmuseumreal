<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>DarwinMuseum <?php echo $e_mailadres; ?> Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/config.js"></script>
		<script src="../assets/js/skel.min.js"></script>
		<script src="../assets/js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="../assets/css/skel-noscript.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
		<link rel="stylesheet" href="../assets/css/style-desktop.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../assets/js/html5shiv.js"></script><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="../assets/css/ie7.css" /><![endif]-->
	</head>
	<body>
		<header id="header">
			<div class="logo">
				<div>
					<h1><a href="homepage" id="logo">Darwinmuseum</a></h1>
					<span class="byline">Home</span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='Home'>DarwinMuseum</a></li>
				<?php echo $links; ?>
			</ul>
		</nav>
		
		<div id="main-wrapper">
			<div id="main" class="container">
				<div class="row">
					<div class="3u">
				
						
											</div>
					<div class="9u skel-cell-mainContent">
						<div class="content content-right">
						
							<article class="is-page-content">
								<header>
									<h2>Home</h2>
									
								</header>
										<h1>artefacten muteren</h1>
		<table border = 1>
			<tr>
				<td>naam</td>
				<td>omschrijfing</td>
				<td>afbeelding</td>
				<td>Wijzigen</td>
				<td>verwijderen</td>
			</tr>
			<?php echo $table; ?>
		</table>

							</article>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer id="footer" class="container">
			<div class="row">

				<div id="copyright">
					&copy; 2012 Untitled Something | Images: <a href="http://fotogrph.com">fotogrph</a> + <a href="http://iconify.it">Iconify.it</a> | Design: <a href="http://html5up.net/">HTML5 UP</a>
				</div>

			</div>
		</footer>
		
	</body>
</html>