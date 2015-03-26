<?php
	$ROOT = "../../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	session_start();
	
	$action='default';
	if(isset($_GET['action'])) {
		$action=$_GET['action'];
	}
	
	$CLEAN_STATEMENT=
<<<EOD
	DELETE ft, fi 
	FROM ForumThreads AS ft
		JOIN ForumThreadInfo AS fi
			ON ft.fthreadID=fi.fthreadID
	WHERE ft.fthreadID
		NOT IN (SELECT ThreadMessages.fthreadID FROM ThreadMessages)
EOD;

	$GET_STATEMENT=
<<<EOD
	SELECT * 
	FROM ForumThreads AS ft
		JOIN ForumThreadInfo AS fi
			ON ft.fthreadID=fi.fthreadID
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
		
		if($action == "clean"){
			$result = $db->query($CLEAN_STATEMENT);
		}else{
			$result = $db->query($GET_STATEMENT);
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