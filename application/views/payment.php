<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>darwinmuseum</title>
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
					<h1><a href="homepage" id="logo">darwinmuseum</a></h1>
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
	<h1>Betaling aan het Darwin Museum</h1>
<div class="payment_bank">
    <table>
        <tr>
            <strong>Bank</strong>
            <div class="select_styled">
                <select>
                        <option value="rabo">Rabobank</option>
                        <option value="abn">ABN AMRO</option>
                        <option value="ing">ING</option>
                        <option value="sns">SNS Bank</option>
                    </select>

            </div>
            <td>
                <a onclick="open_in_new_tab_and_reload('add_ticket')" href="index">
                    <button>Betalen</button>
                </a>
            </td>
        </tr>

    </table>

</div>
<div class="payment_data">
    <table>
        <tr>
            <td><strong>Naam</strong></td>
            <td class="second_td">
                <?php echo $this->session->userdata["ticket_data"]["voornaam"]; ?>
                <?php echo $this->session->userdata["ticket_data"]["tussenvoegsel"]; ?>
                <?php echo $this->session->userdata["ticket_data"]["achternaam"]; ?>
            </td>
        </tr>
        <tr>
            <td><strong>Leeftijd</strong></td>
            <td class="second_td">
                <?php echo $this->session->userdata["ticket_data"]["age"]->format('%y jaar'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Prijs</strong></td>
            <td class="second_td">
                &euro;<?php echo $this->session->userdata["ticket_data"]["price"]; ?>
            </td>
        </tr>
    </table>
</div>

<script>
    function open_in_new_tab_and_reload(url)
    {
        //Open in new tab
        window.open(url, '_blank');
        //focus to that window
        window.focus();
        //reload current page
        location.reload();
    }
</script>
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