<?php
/*
 *
 *	Dependencies
 *	¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
 */ 
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$UTILITY);
/*
 *
 *	Global Definitions
 *  ¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
 */ 
	$ALLOWED_HTML_TAGS = "<b></b><i></i><u></u><center></center><h1></h1><h2></h2><h3></h3><h4></h4><p></p><ul></ul><li></li><img></img></br><br><br/><a></a>";
/*
 *
 *	Forum Functions
 *	¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
 *		These functions may be called frequently so the database
 *	handle should be passed around to avoid reconnecting to the
 *	database server.
 *
 */ 
	function GetForumPageType($db,$cid,$ctag,$tid,$ttag) {
		$default="categories";
		if($cid==null || $ctag==null) {	return $default; }
		if(DBF_CheckCategory($db,$cid,$ctag)) {
			if($tid==null || $ttag==null) { return "threads"; }
			if(DBF_CheckThread($db,$tid,$ttag)) {
				return "messages";
			}
		}	return $default;
	}
	
	function GetForumPagePath($db,$cid,$ctag,$tid,$ttag,$type) {
		$path=array();
		switch($type) {
			case "threads":
				$dir=array("id"=>$cid, "name"=>$ctag);
				array_push($path,$dir);
				break;
			case "messages":
				$dir=array("id"=>$cid, "name"=>$ctag);
				array_push($path,$dir);
				$dir=array("id"=>$tid, "name"=>$ttag);
				array_push($path,$dir);
				break;
		}
		return $path;
	}
	
	function GetForumPageContent($db,$cid,$ctag,$tid,$ttag,$type) {
		$content=array();
		switch($type) {
			case "messages":
				$content=DBF_GetThreadContents($db,$tid);
				break;
			case "threads":
				$content=DBF_GetCategoryThreads($db,$cid);
				break;
			case "categories":
				$content=DBF_GetCategories($db);
				break;
		}
		return $content;
	}
/*
 *
 *	Thread Message Forum Functions
 *	¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
 */ 
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
	
	function DeleteMessage($cid,$ctag,$tid,$ttag,$msgid) {
		$del=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$del=DBF_DeleteMessage($db,$msgid);
		}
		$db->disconnect();
		return $del;
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
/*
 *
 *	Thread Forum Functions
 *	¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
 */ 
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