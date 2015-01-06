<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Darwin museum</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="../../assets/js/jquery.min.js"></script>
		<script src="../../assets/js/config.js"></script>
		<script src="../../assets/js/skel.min.js"></script>
		<script src="../../assets/js/skel-panels.min.js"></script>
                 
		<link rel="stylesheet" href="../../assets/css/skel-noscript.css" />
               <link rel="stylesheet" href="<?= base_url(); ?>assets/js/fancybox/source/jquery.fancybox.css"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCwKEmADn_J97zp7jHP5x41LIBeM00ngnE"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.battatech.excelexport.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/fancybox/source/jquery.fancybox.pack.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.battatech.excelexport.js"></script>

		<link rel="stylesheet" href="../../assets/css/style.css" />
		<link rel="stylesheet" href="../../assets/css/style-desktop.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../assets/js/html5shiv.js"></script><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="../assets/css/ie7.css" /><![endif]-->
	</head>
	<body>
		<header id="header">
			<div class="logo">
				<div>
					<h1><a href="home" id="logo">Darwin museum</a></h1>
					<span class="byline">Home</span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='../Home'>Home</a></li>
			
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
							
 <ul class="style2">
									<li>
										<article class="is-post-summary">
											General <a href="mailto:info@darwin.museum.ru">info@darwin.museum.ru<a/> <br />
											For press <a href="mailto:pr@darwin.museum.ru">pr@darwin.museum.ru<a/> <br />
											Fax +007 499 7632254 <br />
											<br />
											Phone +007 499 783-2253 <br />
											(administration) <br />
											Phone +007 499 132-0202 <br />
											(international relations) <br />
											<br />
											Getting here <br />
											117292, Russia, Moscow, <br />
											57/1 Vavilova st. <br />
											<br />
											Metro "Akademicheskaya", <br />
											then a 10-15-minute walk. <br />
											<br />
											Metro "Universitet", <br />
											then trams 39, 14 <br />
											<br />
											(tram stop "Ulitsa Dmitriya Ulyanova")
										</article>
									</li>
								</ul>
								<a href="visit" class="button button-alt">More &rarr;</a>
							</section>
						
						</div>
					</div>
					<div class="9u skel-cell-mainContent">
						<div class="content content-right">
						
							<article class="is-page-content">
								<header>
									<h2>Ticket Bestellen</h2>
									<span class="byline">Welcome!</span>
								</header>
								
								<section>
									<div class="prices">
										<h1>Prijzen</h1>
										<table>
											<tr>
												<td>Prijs kind (0 t/m 11 jr):</td>
												<td>Gratis</td>
											</tr>
											<tr>
												<td>Prijs jongeren (12 t/m 17 jr):</td>
												<td>2,50</td>
											</tr>
											<tr>
												<td>Prijs volwassenen (18 t/m 59 jr):</td>
												<td>4,00</td>
											</tr>
											<tr>
												<td>Prijs ouderen (60+):</td>
												<td>2,50</td>
											</tr>
										</table>

									</div>
									<?php echo validation_errors(); ?>
									<?php echo form_open('booking/payment'); ?>

									<div class="box">
										<label>
											<span>Voornaam</span>
											<input type="text" class="input_text" name="voornaam" id="voornaam"/>
										</label>
										<label>
											<span>Tussenvoegsel</span>
											<input type="text" class="input_text" name="tussenvoegsel" id="tussenvoegsel"/>
										</label>
										<label>
											<span>Achternaam</span>
											<input type="text" class="input_text" name="achternaam" id="achternaam"/>
										</label>
										<label>
											<span>E-mailadres</span>
											<input type="text" class="input_text" name="email" id="email"/>
										</label>
										<label>
											<span>Geboortedatum</span>
											<input type="date" id="geboortedatum" name="geboortedatum" />
										</label>
										<label>
											<span>Postcode</span>
											<input type="text" class="input_text" name="postcode" id="postcode"/>
										</label>
										<label>
											<span>Woonplaats</span>
											<input type="text" class="input_text" name="woonplaats" id="woonplaats"/>
										<label>
											<input type='hidden' name='id' id="id" />
										</label>
											<input type="submit" class="button" value="Bestellen" />
										</label>


									</div>
									<?php echo form_close(); ?>

									<!--
									<script>
										var currentTime = new Date();
										var picker = new Pikaday({
											field: document.getElementById('geboortedatum'),
											format: 'DD-MM-YYYY',
											minDate: new Date('01-01-1910'),
											maxDate: currentTime,
											onSelect: function() {
												console.log(this.getMoment().format('Do MMMM YYYY'));
											}
										});
									</script>
									-->	
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