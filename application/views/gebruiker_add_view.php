<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>inschrijven</title>
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
					<h1><a href="homepage" id="logo">DarwinMusuem</a></h1>
					<span class="byline">inschrijven</span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='addgebruiker'>inschrijven quiz</a></li>
				
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
									<h2>Darwin Museum inschrijven quiz</h2>
									
								</header>
								
								<section>
									
										<h1>inschrijven </h1>
		<?php echo validation_errors(); ?>
		<?php echo form_open('verify_gebruiker_add'); ?>
			<label for="naam">Naam:</label>
			<input type="text" size="20" id="naam" name="naam"/>
			<br/>
			<label for="tussenvoegsel">tussenvoegsel:</label>
			<input type="text" size="20" id="tussenvoegsel" name="tussenvoegsel"/>
			<br/>
			<label for="achternaam">achternaam:</label>
			<input type="text" size="20" id="achternaam" name="achternaam"/>
			<br/>
                        <label for="telefoonnummer">telefoonnummer:</label>
			<input type="text" size="20" id="telefoonnummer" name="telefoonnummer"/>
			<br/>
                        <label for="email">email:</label>
			<input type="text" size="20" id="email" name="email"/>
			<br/>
			<input type="submit" value="Add"/>
		</form>	
										
								</section>
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