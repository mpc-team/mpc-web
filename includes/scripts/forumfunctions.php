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
	$ALLOWED_HTML_TAGS = "<b></b><i></i><u></u><center></center><h1></h1><h2></h2><h3></h3><h4></h4><p></p><ul></ul><li></li><img></img></br><br><br/><a></a><small></small>";
	
	$PG_INDEX = 'index.php';
	$PG_THR_ADD = $ROOT.'/forum/thread/create.php';
	$PG_THR_DEL = $ROOT.'/forum/thread/delete.php';
	$PG_MSG_DEL = $ROOT.'/forum/message/delete.php';
	$PG_MSG_ADD = $ROOT.'/forum/message/create.php';
	$PG_MSG_UPD = $ROOT.'/forum/message/update.php';
	
//###############################################################
//#
//#		DATABASE QUERY SECTION (1.0)
//#
//###############################################################
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
 *		Gives us easy access to functions typically performed in the
 *	forum. These functions rely on database access through 'db.php'.
 */ 
	function UpdateMessage($cid,$ctag,$tid,$ttag,$msgid,$content,$user) {
		global $ALLOWED_HTML_TAGS;
		$update=-1;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$content=cleanmessage($content,$ALLOWED_HTML_TAGS);
			$update=-2;
			if(validateinput($content)){
				$minfo=DBF_GetMessageInfo($db,$msgid);
				$update=-3;
				if($minfo[0] == $user) {
					$update=DBF_UpdateMessage($db,$msgid,$content);
				}
			}
		}
		$db->disconnect();
		return $update;
	}
	
	function DeleteMessage($cid,$ctag,$tid,$ttag,$msgid,$user) {
		$del=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$minfo=DBF_GetMessageInfo($db,$msgid);
			$del=-3;
			if($minfo[0] == $user) {
				$del=array( );
				$delmsg=DBF_DeleteMessage($db,$msgid);
				array_push($del,$delmsg);
				$cnt=DBF_GetThreadMessageCount($db,$tid);
				if($del[0] > 0 && $cnt == 0) {
					$delthr=DeleteThread($cid,$ctag,$tid,$ttag,$user);
				}
				array_push($del,$delthr);
			}
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
	
	function DeleteThread($cid,$ctag,$tid,$ttag,$user) {
		$del=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$info=DBF_GetThreadInfo($db,$tid);
			$del=-3;
			if($info[3] == $user) {
				$del=DBF_DeleteThread($db,$tid);
			}
		}
		$db->disconnect();
		return $del;
	}
	
//###############################################################
//#
//#		FORUM PAGE HANDLING SECTION (2.0)
//#
//###############################################################

	function HtmlPageTitle($title,$sub) {
		return "<div class='page-header'>"
			."<h1>{$title}<br><small>{$sub}</small></h1></div>";
	}
	
	function HtmlPageFooter() {
		return "<div class='page-footer'></div>";
	}
	
	function HtmlPageTitleAuthorDate($title,$sub,$alias,$time) {
		$result="<div class='row'>";
		$result.="<div class='page-header'><h1>{$title}<br><small>{$sub}</small></h1>";
		$result.="<div class='row'>";
		$result.="<div class='col-xs-6'>";
		$result.="Created by <span class='glyphicon glyphicon-user'></span> {$alias}";
		$result.="</div><div class='col-xs-6'>";
		$result.="<div class='pull-right'>";
		$result.="Created on <span class='glyphicon glyphicon-time'></span> {$time}";
		$result.="</div></div></div></div></div>";
		return $result;
	}
	
	function HtmlCategory($cid,$ctag,$descr,$glyph,$count) {
		global $PG_INDEX;
		$ctagenc=urlencode($ctag);
		return <<<EOD
			<div class="category">
				<div class="row">
					<div class="col-xs-6">
						<a class="btn" href="{$PG_INDEX}?c_id={$cid}&c_tag={$ctagenc}">
							<h4>{$glyph} {$ctag} {$glyph}<br><br><small>{$descr}</small></h4>
						</a>
					</div>
					<div class="col-xs-1">
						<h4><b>{$count}</b><br><small>threads</small></h4>
					</div>
					<div class="col-xs-5">
						
					</div>
				</div>
			</div>
EOD;
	}
	
	function HtmlThread($cid,$ctag,$tid,$ttag,$glyph,$alias,$time,$count) {
		global $PG_INDEX;
		global $PG_THR_DEL;
		$ctagenc=urlencode($ctag);
		$ttagenc=urlencode($ttag);
		return <<<EOD
			<div class="row">
				<div class="col-xs-6">
					<a class="btn" href="{$PG_INDEX}?c_id={$cid}&c_tag={$ctagenc}&t_id={$tid}&t_tag={$ttagenc}">
						<h4>{$glyph} {$ttag} {$glyph}<br><br><small>
						<span class="glyphicon glyphicon-user"></span> {$alias} </br>
						<span class="glyphicon glyphicon-time"></span> {$time}</small></h4>
					</a>
				</div>
				<div class="col-xs-1">
					<h4><b>{$count}</b><br><small>replies</small></h4>
				</div>
				<div class="col-xs-5">
				</div>
			</div>
EOD;
	}
	
	function HtmlThreadOptions($cid,$ctag,$tid,$ttag) {
		global $PG_THR_DEL;
		$ctagenc=urlencode($ctag);
		$ttagenc=urlencode($ttag);
		return <<<EOD
			<div class='row usertool'>
				<form role='form' action='{$PG_THR_DEL}?c_id={$cid}&c_tag={$ctagenc}&t_id={$tid}&t_tag={$ttagenc}' method='post'>
					<button type='submit' class='btn btn-edit pull-right'>
						Delete
					</button>
				</form>
			</div>
EOD;
	}
	
	function HtmlMessage($canDelete,$id,$content,$author,$alias,$time,$query,$i) {
		$headerleft=HtmlMessageAuthor($alias);
		$headerright=HtmlMessageDate($time);
		$body=HtmlMessageContent($i,$content);
		return<<<EOD
			<div class='panel-messages'>
				<div class='row'>
					<div class='col-xs-6'>
						{$headerleft}
					</div>
					<div class='col-xs-6'>
						{$headerright}
					</div>
				</div>
				<div class='row'>
					{$body}
				</div>
			</div>
EOD;
	}
	
	function HtmlMessageOptions($i,$msgid,$query) {
		global $PG_MSG_DEL;
		global $PG_MSG_UPD;
		return <<<EOD
			<div class='row usertool' id='r{$i}'>
				<div class='col-xs-2'>
					<button type='button' class='btn btn-edit pull-left' id='e{$i}' data-id='{$msgid}'>
						<span class='glyphicon glyphicon-edit'></span>
						Edit
					</button>
				</div>
				<div class='col-xs-3'>
					<form role='form' action='{$PG_MSG_DEL}?{$query}' method='post'>
						<button type='submit' class='btn btn-edit' id='x{$i}' data-id={$msgid}>
							<span class='glyphicon glyphicon-trash'></span>
							Delete
						</button>
						<input type='hidden' name='msgid' value='{$msgid}'/>
					</form>
				</div>
				<div class='col-xs-7'>
					<button type='button' class='btn btn-edit pull-right' id='d{$i}'>
						<span class='glyphicon glyphicon-remove'></span>
						Cancel
					</button>
					<form id='f{$i}' role='form' action='{$PG_MSG_UPD}?{$query}' method='post'>
						<button type='button' class='btn btn-edit pull-right' id='s{$i}'>
							<span class='glyphicon glyphicon-check'></span>
							Confirm
						</button>
						<input type='hidden' name='message' id='h{$i}'/>
						<input type='hidden' name='msgid' value='{$msgid}'/>
					</form>
				</div>
			</div>	
EOD;
	}
	
	function HtmlLoginNotice($loginpath,$query) {
		if(strlen($query) > 0) $query='?'.$query;
		return <<<EOD
			<div class="alert alert-info" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				You must <a class="alert-link" href="{$loginpath}{$query}">Login/Register</a> before posting on the Forum
			</div>
EOD;
	}
	
	function HtmlMessageAuthor($author) {
		return <<<EOD
			<div class="col-xs-6">
				<span class="glyphicon glyphicon-user"></span>
				{$author}
			</div>
EOD;
	}
	
	function HtmlMessageDate($timestamp) {
		return <<<EOD
			<div class="row">
				<div class="pull-right">
					<span class="glyphicon glyphicon-time"></span>													
					{$timestamp}
				</div>
			</div>
EOD;
	}
	
	function HtmlMessageContent($i,$msg) {
		return <<<EOD
			<div class='content-message' id='c{$i}'>
				{$msg}
			</div>
			<div class='content-message' id='a{$i}'>
				<textarea name='content' class='form-control editmessage' id='t{$i}'>{$msg}</textarea>
			</div>
EOD;
	}
	
	function HtmlReplyForm($query,$alias) {
		global $PG_MSG_ADD;
		return <<<EOD
			<div class="panel panel-default">
				<div class="page-header">
					<h3>Reply to thread</h3>
				</div>
				<div class="panel-reply">
					<form role='form' class='form-horizontal' action='{$PG_MSG_ADD}?{$query}' method='post'>
						<div class="form-group">
							<div class="row">
								<h4>&nbsp<span class="glyphicon glyphicon-user"></span> {$alias}:</h4>
							</div>
							<div class="row">
								<div class="input-group">
									<textarea name="content" id='input-reply-text' class="form-control" required></textarea>
								</div>
							</div>
							<div class="row btn-reply-row">
								<div class="input-group">
									<button title="Submit Reply" type="submit" class="btn btn-reply">
										<span class="glyphicon glyphicon-send"></span>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
EOD;
	}
	
 ?>