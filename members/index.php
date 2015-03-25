<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/members/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	
	session_start( );
	$db = DB_CreateDefault( );
	$db->connect( );
	
	$perm = array( );
	array_push($perm, "public");
	if (isset($_SESSION["USER"])) {
		$perm = DB_GetUserPermissionsByEmail($db, $_SESSION["USER"]);
		if ($perm == null) { 
			$perm = array( );
			array_push($perm, 'public');
		}
	}
	
	$json = array( );
	if (in_array('member', $perm) || in_array('admin', $perm)) {
		$json = DB_GetUserMembersList($db);
	} else {
		$json = DB_GetUserPublicList($db);
	}
	
	$db->disconnect();
	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	PrintJavaScriptResource( PathDir::GetJSPath($ROOT, 'util.js') );
 ?>
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("members", $ROOT); ?>
	</div>
	<div class="container">
		<div id="wrapper">
			<?php PrintSidebar("search", $ROOT); ?>
			<div id="page-content-wrapper">
				<div class="content">
				
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading page-header">
								<h1>Clan MPC<br><small>Members</small></h1>
								Currently <?php echo count($json); ?> members have registered.
							</div>
						</div>
					</div>
					
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								Search
							</div>
							<form role="form">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">Alias</span>
										<input type="text" class="form-control" name="alias" id="alias" placeholder="Search by player alias..."/>				
									</div>
								</div>
								<?php
									if (in_array("admin", $perm)) {
										echo <<<EOD
										<div class="form-group">
											<div class="input-group">	
												<span class="input-group-addon">Email</span>
												<input type="text" class="form-control" name="email" id="email" placeholder="Search by player email..."/>
											</div>
										</div>
EOD;
									}
								 ?>
							</form>
						</div>
					</div>
					
					<div class="panel-group">
						<div class="panel panel-default">
							<table class="table">
								<thead>
									<tr>
										<?php 
											if (in_array("admin", $perm)) {
												echo '<th>Email</th>'; 
											}
										 ?>
										<th>Alias</th>
									</tr>
								</thead>
								<tbody id="search-results">
									<!--JavaScript Here-->
								</tbody>
							</table>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>

	
	
	<!-- Here is our JavaScript, loaded after the page loads -->
	<script type="text/javascript">
		<?php	echo 'var userList = ', json_encode($json), ';'; ?>
		<?php echo 'var permissions = ', json_encode($perm), ';'; ?>
		//wait for document to load before referencing page elements
		$( document ).ready(function() {
			updateList(userList, permissions);
		
			$('#email').keyup(function() { updateList(userList, permissions) });
			$('#alias').keyup(function() { updateList(userList, permissions) });
		});
	</script>
</body>
</html>
