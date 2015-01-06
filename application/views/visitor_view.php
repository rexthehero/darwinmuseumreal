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
<section>
									<h1>Alle bezoekers per dag</h1>
									<table cellspacing="10">
										<form action="show_visitors" method="post">
											<tr>
												<td>Dag</td>
												<td>
													<select name="created_at">
														<?php foreach ($created_at as $c) { ?>
															<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
														<?php } ?>
													</select >
												</td >
												<td ><input type = "submit" name = "submit" value = "Selecteer" ></td >
											</tr >
										</form >
                                                                        </table>
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