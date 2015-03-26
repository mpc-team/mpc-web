<?php
	$ROOT = "../../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	session_start();

	$clean = TRUE;
	if(isset($_GET["action"])) {
		$clean = ($_GET['action'] == 'clean');
	}
	
	$CLEAN_STATEMENT=
<<<EOD
	DELETE FROM ThreadMessages
	WHERE ThreadMessages.tmsgID NOT IN
	(SELECT ThreadMessageContent.tmsgID FROM ThreadMessageContent)
EOD;
	
	$authenticated=FALSE;
	if( isset($_SESSION["USER"]) ){
		$user=$_SESSION["USER"];
		$authenticated=($user=="b0rg3r@gmail.com"||$user=="keatingc88@gmail.com");
	}
	$content = array( );
	$messages = array( );
	if( $authenticated ){
		$db = DB_CreateDefault( );
		$db->connect();
		$sql =
<<<EOD
			SELECT ThreadMessages.tmsgID
			FROM ThreadMessages
EOD;
		$result = $db->query($sql);
		if( $result ){
			while( $row = $result->fetch_row() ){
				array_push( $messages,$row[0] );
			}
		}
		$sql =
<<<EOD
			SELECT ThreadMessages.tmsgID
			FROM ThreadMessages
				JOIN ThreadMessageContent
					ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID
EOD;
		$result = $db->query($sql);
		if( $result ){
			while( $row = $result->fetch_row() ){
				array_push( $content,$row[0] );
			}
		}
		
		$action=FALSE;
		if( $clean ) {
			$action = $db->query($CLEAN_STATEMENT);
		}
		$db->disconnect();
	}
 ?>
<html>
	<head>
		<title>Development</title>
	</head>
	<body>
		<?php
			if($action){
				echo "<h1>Done</h1>";
			}else{
				echo "<h1>Error</h1>";
			}
		?>
		<h2>Dev-</h2><p>These are message IDs regardless of content.</p>
		<?php
			$count = count($messages);
			for( $i=0; $i<$count; $i++ ){
				$m = $messages[$i];
				echo $m[0], "<br>";
			}
		?>
		<h2>Dev-</h2><p>These are message IDs that have an entry in content.</p>
		<?php
			$count = count($content);
			for( $i=0; $i<$count; $i++ ){
				$c = $content[$i];
				echo $c[0], "<br>";
			}
		?>
	</body>
</html>