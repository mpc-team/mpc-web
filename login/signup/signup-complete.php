<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<?php

	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
 ?>
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
	<div class="container">
	
		<div class="page-header text-center">
			<h1>Signup Processing...</h1>
		</div>
		
		<div class="text-center">
		
<?php
	$dbhandle = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
	$dbhandle->connect();
	$result = $dbhandle->query('SELECT * FROM User');
	
	printf("<p>Query returned %d rows.</p>", $result->num_rows);
	
	echo '<table width="100%">';
	while ($row = $result->fetch_row()) {
		echo '<tr>';
		foreach ($row as $column) {
			echo '<td>' . $column . '</td>';
		}
		echo '</tr>';
	}
	$result->close();
	echo '</table>';
	
 ?>
		
			<p> Hello 			<?php echo $_POST["alias"]; ?> </p>
			<p> Email Address:  <?php echo $_POST["email"]; ?> </p>
			<p> Password:  		<?php echo $_POST["password"]; ?> </p>
		
			
		</div>

		<?php PrintFooter(); ?>

	</div>
</body>

</html>
