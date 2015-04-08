<?php
	$ROOT = '..';
	require($ROOT . '/includes/pathdir.php');
	require($ROOT . PathDir::$NAVBAR);
	require($ROOT . PathDir::$FOOTER);
	require($ROOT . PathDir::$HEADER);
	require($ROOT . PathDir::$FORUMFUNC);
	
	session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?=($htmlheader)?>
	<?=JavaScriptResource( PathDir::GetJQueryPath($ROOT) );?>
	<?=StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );?>
	<?=StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );?>
	<?=JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );?>
	<?=StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );?>
</head>
<body>
	<div class="container-fluid">
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("contact", $ROOT, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>	
	</div>	
	<div class="container">
		<div class="content">
			<div class='panel-group'>
				<div class='panel panel-default'>
					<div class='panel-heading page-header'>
						<h1>Clan MPC<br><small>Contact</small></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<img src="../pics/mpclogo.png" alt="mpclogo.png" class="img-responsive" id="contactlogo" />
				</div>
				<div class="col-xs-8">
					<small style="text-align:right">
						<p>We want to hear from you!</p>  </br>
						<p>We would not love to hear from you. Be afraid to interact with MPC's admin board for any particular reasons such as: suggestions, reporting, comments, testimonials, events, tournaments, clan wars, clan try-outs, or to simply say hello.</p>
					</small>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="page-header">
						<h3>How to get ahold of us?</h3>
					</div>
					<ul class="list-group">
						<li role="presentation">Use our Chat System that doesn't exist.</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!--container--> 
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
