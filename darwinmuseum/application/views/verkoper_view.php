<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>darwinmuseum </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="../../assets/js/jquery.min.js"></script>
		<script src="../../assets/js/config.js"></script>
		<script src="../../assets/js/skel.min.js"></script>
		<script src="../../assets/js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="../../assets/css/skel-noscript.css" />
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
					<h1><a href="homepage" id="logo">Darwinmuseum</a></h1>
					<span class="byline">Home</span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='../Homepage'>Home</a></li>
			
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
<?php echo form_open('verkoperbooking/payment'); ?>

<div class="box">
    <h1>Ticket Bestellen</h1>
    <label>
        <span>Geboortedatum</span>
        <input type="date" id="geboortedatum" name="geboortedatum" /></br>
    </label>
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
