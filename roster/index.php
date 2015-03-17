<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/roster/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
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
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'roster.css') );3
 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("roster", $ROOT); ?>
	</div>
	<div id="wrapper">	
		<?php PrintSidebar("members", $ROOT); ?>
		<div class="container" id="page-content-wrapper">
			<div class="well rstr-srch-well">
				<h3 class="well-text">Search</h3>
				<form role="form">
					<div class="form-group">
						<div class="input-group rstr-srch-input">
							<span class="input-group-addon rstr-srch-label">Alias</span>
							<input type="text" class="form-control" name="alias" id="alias" placeholder="Search by player alias..."/>				
						</div>
					</div>
					<div class="form-group">
						<div class="input-group rstr-srch-input">	
							<span class="input-group-addon rstr-srch-label">Email</span>
								<input type="text" class="form-control" name="email" id="email" placeholder="Search by player email..."/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group rstr-srch-input">
							<span class="input-group-addon rstr-srch-label">Games</span>
							<input type="text" class="form-control" name="games" id="games" placeholder="Search by player games..."/>
						</div>
					</div>
				</form>
			</div>
			<div class="well rstr-srch-well">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="well-text">Results</h3>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Email</th>
								<th>Alias</th>
							</tr>
						</thead>
						<tbody id="search-results">
							<!-- This section is modified by JavaScript -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
	<!-- Here is our JavaScript, loaded after the page loads -->
	<script src="./includes/js/util.js" type="text/javascript"></script>
	<script type="text/javascript">
		<?php
			$db = DB_CreateDefault();
			$db->connect();
			$json = DB_GetUserInfoList($db);
			$db->disconnect();
			echo 'var userList = ', json_encode($json), ';';
		 ?>
		//wait for document to load before referencing page elements
		$( document ).ready(function() {
			update(userList);
		
			$('#email').keyup(function() { update(userList) });
			$('#alias').keyup(function() { update(userList) });
		});
	</script>
</body>
</html>
