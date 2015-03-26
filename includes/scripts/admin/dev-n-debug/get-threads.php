<?php
	$ROOT = "../../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	session_start();
	
	$STATEMENT=
<<<EOD
	SELECT * FROM ForumThreads
EOD;
	
	$authenticated=FALSE;
	if( isset($_SESSION["USER"]) ){
		$user=$_SESSION["USER"];
		$authenticated=($user=="b0rg3r@gmail.com"||$user=="keatingc88@gmail.com");
	}
	$threads = array( );
	if( $authenticated ){
		$db = DB_CreateDefault( );
		$db->connect();
		$result = $db->query($STATEMENT);
		if( $result ){
			while($row=$result->fetch_row()) {
				$thread = array( );
				$count = count($row);
				for( $i=0; $i<$count; $i++ ){
					array_push($thread,$row[$i]);
				}
				array_push($threads,$thread);
			}
			$result->close( );
		}
		$db->disconnect();
	}
 ?>
<html>
	<head>
		<title>Development</title>
	</head>
	<body>
		<h1>Threads <small>dev</small></h1>
		<?php
			$count=count($threads);
			for($i=0; $i<$count; $i++){
				$count2=count($threads[$i]);
				for($j=0; $j<$count2; $j++){
					echo $threads[$i][$j] . ", ";
				}
				echo "<br>";
			}
		?>
	</body>
</html>