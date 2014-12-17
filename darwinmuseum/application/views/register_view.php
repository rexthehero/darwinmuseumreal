<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>darwinmuseum  Home</title>
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
					<h1><a href="homepage" id="logo">dariwinmuseum</a></h1>
					<span class="byline">Home</span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='Home'>Home</a></li>
				
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
									<h1>Register</h1>
		<?php echo validation_errors(); ?>
		<?php echo form_open('verifyregister'); ?>
			<label for="voornaam">Voornaam:</label>
			<input type="text" size="20" id="voornaam" name="voornaam"/>
			<br/>
                        <label for="tussenvoegsel">tussenvoegsel:</label>
			<input type="text" size="20" id="tussenvoegsel" name="tussenvoegsel"/>
			<br/>
			<label for="achternaam">Achternaam:</label>
			<input type="text" size="20" id="achternaam" name="achternaam"/>
			<br/>
			<label for="emailadres">Emailadres:</label>
			<input type="text" size="20" id="emailadres" name="emailadres"/>
			<br/>
			<label for="wachtwoord">Wachtwoord:</label>
			<input type="password" size="20" id="wachtwoord" name="wachtwoord"/>
			<br/>
			<label for="gebruikersrol">Gebruikersrol:</label>
                        <select name="gebruikersrol" >
                            <option value="admin">admin</option>
                             <option value="manager">manager</option>
                             <option value="quizmaster">quizmaster</option>
                        </select>                                      
			<br/>
			<input type="submit" value="Register"/>
		</form>

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