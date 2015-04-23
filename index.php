<?php
	/* The ROOT should be specified on ALL pages. We don't seem to have
		access to know what the ROOT folder is by conventional PHP (due to server situation).
		
		For single-nested folders, ".." is the root. For double-nested, "../..", and so on. */
	$root = '.';
	require($root . '/includes/pathdir.php');
	require($root . PathDir::$NAVBAR);
	require($root . PathDir::$FOOTER);
	require($root . PathDir::$HEADER);
	require($root . '/includes/session.php');
	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?=$htmlheader()?>
	<?=JavaScriptResource( PathDir::GetJQueryPath($root) );?>
	<?=StyleResource( PathDir::GetBootstrapCSSPath($root) );?>
	<?=StyleResource( PathDir::GetBootstrapSidebarCSSPath($root) );?>
	<?=JavaScriptResource( PathDir::GetBootstrapJSPath($root) );?>
	<?=StyleResource( PathDir::GetCSSPath($root, 'global.css') );?>
</head>
<body>
	<div class="container-fluid">	
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("index", $root, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>		
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-8">
					<img src="pics/mpclogo.png" class="img-responsive" alt="mpclogo.png" />			
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="page-header text-center">
							<h1>Website Under Construction</h1>
							<center>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
								">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
							</center>
						</div>
					</div>
					<div class="panel panel-default">
						<?=phpversion();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($root); ?>
	</div>
</body>
</html>
