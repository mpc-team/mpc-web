<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/profile/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	
	session_start();
	
	if (!isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/login/index.php");
	} else {
		$user = $_SESSION["USER"];
		$alias = $_SESSION["ALIAS"];
	} 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php
	echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapDateCSSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapDateJSPath($ROOT) );
	echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container-fluid">
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("profile", $ROOT, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>	
	</div>
	<div class="container">
		<div id="wrapper">
			<?php PrintSidebar("update", $ROOT); ?>
			<div id="page-content-wrapper">
				<div class="content">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class='panel-heading page-header'>
								<h1>Account<br><small> Edit</small></h1>
							</div>
						</div>
					</div>
					
					<div class='panel-group'>
						<div class='panel panel-default'>
						
							<div class='row'>
								<div class='col-xs-6'>
									<div class="form-group">
										<h1><small>Alias</small><br>
											<div id='edit-alias-text'>
												<input type='text' name='alias' value='<?php echo $alias; ?>'/>
											</div>
											<div id='edit-alias-btn'>
												<a id='edit-alias'><?php echo $alias; ?></a>
											</div>
										</h1>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
	
	<script type='text/javascript'>
		var alias=<?php echo json_encode($alias); ?>;
		var user=<?php echo json_encode($user); ?>;
		$(document).ready(function(){
			$('#edit-alias-text').hide();
			$('#edit-alias').mouseenter(function(){
				$('#edit-alias').hide();
				$('#edit-alias-text').show();
			});
			$('#edit-alias-text').focusout(function(){
				$('#edit-alias').show();
				$('#edit-alias-text').hide();
			});
		});
	</script>
</body>
</html>