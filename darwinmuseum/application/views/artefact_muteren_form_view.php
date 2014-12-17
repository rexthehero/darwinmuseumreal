<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>muteren</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="../../../assets/js/jquery.min.js"></script>
		<script src="../../../assets/js/config.js"></script>
		<script src="../../../assets/js/skel.min.js"></script>
		<script src="../../../assets/js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="../../../assets/css/skel-noscript.css" />
		<link rel="stylesheet" href="../../../assets/css/style.css" />
		<link rel="stylesheet" href="../../../assets/css/style-desktop.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../../../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../assets/js/html5shiv.js"></script><link rel="stylesheet" href="../../../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="../../../assets/css/ie7.css" /><![endif]-->
	</head>
	<body>
		<header id="header">
			<div class="logo">
				<div>
					<h1><a href="" id="logo">darwin museum</a></h1>
					<span class="byline"></span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='../../Home'>Home</a></li>
		
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
									<h2>Muteren</h2>
								
											<h1>artefact muteren</h1>
		<?php echo validation_errors(); ?>
		<?php echo form_open('verify_artefact_muteren_form'); ?>
			<label for="naam">naam:</label>
			<input type="text" size="20" id="naam" name="naam" value="<?php echo $naam; ?>"/>
			<br/>
                        <label for="omschrijfing">omschrijfing:</label></br>
                        <textarea  rows="5" cols="50"  id="omschrijfing" name="omschrijfing"><?php echo $omschrijfing; ?></textarea>
			<br/>
			<label for="afbeelding">afbeelding:</label>
			<input type="text" size="20" id="" name="afbeelding" value="<?php echo $afbeelding; ?>"/>
			<br/>
			<label for="punten">punten:</label>
			<input type="text" size="20" id="punten" name="stemmen" value="<?php echo $stemmen; ?>"/>		
			<input type="hidden" id="id" name="id" value="<?php echo $id; ?>"/>
			<br/>
			<input type="submit" value="Muteren"/>
		</form>
								</header>
								
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
