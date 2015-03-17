<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/roster/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
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
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'roster.css') );
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
				<div class="row">
					<h3 class="well-text">Search</h3>
				</div>
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
				<h3 class="well-text">Results</h3>
				<div title="helper">
					<p class="well-text"> 
We can use JavaScript and search already-loaded content, and use more JavaScript to manipulate the display as the text in the above inputs change.
					</p>
					<p class="well-text">
						<h4 class="page-header" style="font-size:11pt; color:black">Here is an example:</h4>
					</p>
				</div>
				<div id="search-results">
					<!-- This section is populated by JavaScript -->
					<div id="search-alias"> </div>
					<div id="search-email"> </div>
					<div id="search-games"> </div>
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
			$db = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
			$db->connect();
			$sql = "SELECT userName, userAlias FROM User LEFT JOIN UserAlias ON User.userID=UserAlias.userID";
			$json = array();
			$result = $db->query($sql);
				while ($set = $result->fetch_row()) {
					$entry = array();
					array_push($entry, $set[0], $set[1]);
					array_push($json, $entry); 
				}
				$result->close();
			$db->disconnect();
			echo 'var userList = ', json_encode($json), ';';
		 ?>
		//wait for document to load before referencing page elements
		$( document ).ready(function() {
			$('#email').keyup(function() { update("email", userList) });
		});
	</script>
</body>
</html>
