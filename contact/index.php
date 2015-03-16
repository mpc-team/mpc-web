<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	
	session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Miacro Power Clan - MPC Gaming.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php 
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
    <meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
    <meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>

<body>

	<div class="container-fluid">

		<?php PrintNavbar("contact", $ROOT); ?>

	</div>	

	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<img style="vertical-align: middle;"
					src="../pics/mpclogo.png" alt="mpclogo.png" class="img-responsive" id="contactlogo" />
			</div>
			<div class="col-xs-8">
				<div class="page-header">
					<h3>Contact Us!</h3>
				</div>
				<small class="pull-right">
					<p>We want to hear from you!</p>
				</small>
				</br>
				<small class="pull-right">
					<p>We would love to hear from you. Don't be afraid to interact with MPC's admin board for an  y particular reasons such as: suggestions, reporting, comments, testimonials, events, tournaments, clan wars, clan try-outs, or to simply say hello. We promise we will accept who you are, and don't be afraid to speak up a few words, so we then can be gladly to respond.</p>
				</small>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<div class="page-header">
					<h3>How to get ahold of us?</h3>
				</div>
				<ul class="list-group">
					<li role="presentation">Use our Chat System, and when an operator is present.(Bottom of screen)</li>
					<li role="presentation">Send us an Email.</li>
					<li role="presentation">Send a Personal Message through MPCgaming.com</li>
					<li role="presentation">Click on a support ticket.</li>
				</ul>
			</div>
			<div class="col-xs-4">
				<ul class="list-group">
					<li class="list-group-item">Send us an Email</li>
					<li class="list-group-item">Report a Player</li>
					<li class="list-group-item">Send a P.M. to the Officers</li>
					<li class="list-group-item">Support Ticket for Technical Help</li>
				</ul>
			</div>
		</div>
	</div><!--container--> 

	<div class="container-fluid">
	
		<?php PrintFooter($ROOT); ?>
		
	</div>
	
</body>

</html>
