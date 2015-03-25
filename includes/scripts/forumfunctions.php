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
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="category">
						<div class="row">
							<div class="col-xs-6">
								<a class="btn" href="{$PG_INDEX}?c_id={$cid}&c_tag={$ctagenc}">
									<h4>{$glyph} {$ctag} {$glyph}<br><br><small>{$descr}</small></h4>
								</a>
							</div>
							<div class="col-xs-1">
								<h4><b>{$count}</b><br><small>Replies</small></h4>
							</div>
							<div class="col-xs-5">
								
							</div>
						</div>
					</div>
				</div>
			</div>
EOD;
	}
	
	function HtmlThread($cid,$ctag,$tid,$ttag,$glyph,$alias,$time,$count) {
		global $PG_INDEX;
		$ctagenc=urlencode($ctag);
		$ttagenc=urlencode($ttag);
		return <<<EOD
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="row">
						<div class="col-xs-6">
							<a class="btn" href="{$PG_INDEX}?c_id={$cid}&c_tag={$ctagenc}&t_id={$tid}&t_tag={$ttagenc}">
								<h4>{$glyph} {$ttag} {$glyph}<br><br><small>
								<span class="glyphicon glyphicon-user"></span> {$alias} </br>
								<span class="glyphicon glyphicon-time"></span> {$time}</small></h4>
							</a>
						</div>
						<div class="col-xs-1">
							<h4><b>{$count}</b><br><small>Threads</small></h4>
						</div>
						<div class="col-xs-5">
						
						</div>
					</div>
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
	
	function HtmlMsgDeleteFormOpen($query) {
		global $PG_MSG_DEL;
		return "<form role='form' action='{$PG_MSG_DEL}?{$query}' method='post'>";
	}
	
	function HtmlMsgEditFormOpen($query) {
		global $PG_MSG_UPD;
		return "<form role='form' action='{$PG_MSG_UPD}?{$query}' method='post'>";
	}
	
	function HtmlMsgDeleteFormClose($msgid) {
		return <<<EOD
			<div class="row">														
				<button type="submit" class="btn btn-delete pull-right" data-id='${msgid}'>
					<span class="glyphicon glyphicon-remove"></span>
					Delete
				</buton>
				<input type="hidden" name='message' value='{$msgid}'/>
			</div>
		</form>
EOD;
	}
	
	function HtmlMsgEditFormClose($i, $msgid) {
		return <<<EOD
			<div class="row" id='r{$i}'>
				<button type="button" class="btn btn-edit" id='e{$i}' data-id='${msgid}'>
					<span class="glyphicon glyphicon-edit"></span>
					Edit
				</button>
			</div>
		</form>
EOD;
	}
	
	function UserToolPanelJavaScript() {
		return <<<EOD
			<script type="text/javascript">
				$(document).ready(function(){
					$(".btn-edit").click(function(){
						var editbtn=$(this);
						editbtn.hide();
						
						var id=editbtn.attr('id');
						id=id.substring(1,id.length);
						msgid=editbtn.data("id");
						
						var msgcontent=$("#c"+id).html();
						editcontent=msgcontent.trim();
						editcontent=editcontent.replace("\t","");
						editcontent=br2nl(editcontent);
						editcontent="<textarea name='content' class='form-control' rows='6'>"+editcontent+"</textarea>";
						
						$("#r"+id).append("<button id='d"+id+"' type='button' class='btn btn-edit pull-right'><span class='glyphicon glyphicon-trash'></span> Discard</button>");
						$("#r"+id).append("<button id='s"+id+"' type='submit' class='btn btn-edit pull-right'><span class='glyphicon glyphicon-check'></span> Confirm</button>");
						
						var hiddenform="<input type='hidden' id='h"+id+"' name='msgid' value='" + msgid + "'></input>";
						editcontent=editcontent+hiddenform;
						
						$("#c"+id).html(editcontent);
						$("#d"+id ).click(function(){
							$("#d"+id).remove();
							$("#s"+id).remove();
							$("#h"+id).remove();
							editbtn.show();
							$("#c"+id).html(msgcontent);
						});
					});
				});
			</script>
EOD;
	}
	
	function HtmlReplyForm($query,$alias) {
		global $PG_MSG_ADD;
		return <<<EOD
			<form role="form" class="form-horizontal" action="{$PG_MSG_ADD}?{$query}" method="post">
				<div class="panel panel-default">
					<div class="page-header">
						<h3>Reply to thread</h3>
					</div>
					<div class="panel-reply">
						<div class="form-group">
							<div class="row">
								<h4>&nbsp<span class="glyphicon glyphicon-user"></span> {$alias}:</h4>
							</div>
							<div class="row">
								<div class="input-group">
									<textarea name="content" id="content" class="form-control" required></textarea>
								</div>
							</div>
							<div class="row btn-reply-row">
								<div class="input-group">
									<button type="submit" class="btn btn-reply">
										<span class="glyphicon glyphicon-send"></span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
EOD;
	}
	
 ?>