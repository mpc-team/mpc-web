<?php
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$UTILITY);

	$ALLOWED_HTML_TAGS = "<b></b><i></i><u></u><center></center><h1></h1><h2></h2><h3></h3><h4></h4><p></p><ul></ul><li></li><img></img></br><br><br/><a></a>";

	function UpdateMessage($cid,$ctag,$tid,$ttag,$msgid,$content) {
		global $ALLOWED_HTML_TAGS;
		$update=-1;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$content=cleanmessage($content,$ALLOWED_HTML_TAGS);
			$update=-2;
			if(validateinput($content)){
				$update=DBF_UpdateMessage($db,$msgid,$content);
			}
		}
		$db->disconnect();
		return $update;
	}

	function CreateMessage($cid,$ctag,$tid,$ttag,$content,$user) {
		global $ALLOWED_HTML_TAGS;
		$msg=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$content=cleanmessage($content,$ALLOWED_HTML_TAGS);
			$msg=-3;
			if(validateinput($content)){
				$msg=DBF_CreateMessage($db,$tid,$content,$user);
			}
		}
		$db->disconnect();
		return $msg;
	}
	
	function CreateThread($cid,$ctag,$title,$user) {
		global $ALLOWED_HTML_TAGS;
		$tid=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag)){
			$tid=-3;
			if(validateinput($title)){
				$tid=DBF_CreateThread($db,$cid,$title,$user);
			}
		}
		$db->disconnect();
		return $tid;
	}
 ?>