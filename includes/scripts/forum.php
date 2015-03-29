<?php
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	REQUIREMENTS
//
//////////////////////////////////////////////////////////////////////////////////////////////// 
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$UTILITY);
	
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	GLOBALS
//
////////////////////////////////////////////////////////////////////////////////////////////////
	$ALLOWED_HTML_TAGS = "<b></b><i></i><u></u><strike></strike><center></center>"
											."<h1></h1><h2></h2><h3></h3><h4></h4><h5></h5>"
											."<sub></sub><sup></sup><p></p><blockquote></blockquote><cite></cite><q></q>"
											."<ul></ul><li></li><img></img></br><br><br/><a></a><small></small>";
	
	$PG_INDEX = $ROOT . '/forum/index.php';
	$PG_THR_ADD = $ROOT.'/forum/thread/create.php';
	$PG_THR_DEL = $ROOT.'/forum/thread/delete.php';
	$PG_MSG_DEL = $ROOT.'/forum/message/delete.php';
	$PG_MSG_ADD = $ROOT.'/forum/message/create.php';
	$PG_MSG_UPD = $ROOT.'/forum/message/update.php';
	
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	FORUM FUNCTIONS
//
////////////////////////////////////////////////////////////////////////////////////////////////
	function CheckPagePermissions($db,$cid,$ctag,$signed,$user) {
		if($cid != NULL && $ctag != NULL){
			if(DBF_CheckCategory($db,$cid,$ctag)) {
				$cperms = DBF_GetCategoryPermissions($db,$cid);
				if($cperms[0] == 'public') return TRUE;
				if($signed) {
					$perms = DB_GetUserPermissionsByEmail($db,$user);
					return in_array($cperms[0],$perms);
				}else{
					return FALSE;
				}
			}
			return FALSE;
		}
		return TRUE;
	}
 
	function GetForumPageType($db,$cid,$ctag,$tid,$ttag) {
		if($cid == NULL || $ctag == NULL) {
			return "categories";
		}
		if(DBF_CheckCategory($db,$cid,$ctag)) {
				if($tid == NULL || $ttag == NULL) {
					return "threads";
				}else{
					if(DBF_CheckThread($db,$tid,$ttag)) {
						return "messages";
					}else{
						return "threads";
					}
				}
		}
		return "default";
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
	
	function GetForumPageContent($db,$cid,$ctag,$tid,$ttag,$type,$user) {
		$content=array();
		switch($type) {
			case "messages":
				$content=DBF_GetThreadContents($db,$tid);
				break;
			case "threads":
				$content=DBF_GetCategoryThreads($db,$cid);
				break;
			case "categories":
				$content=DBF_GetCategories($db,$user);
				break;
		}
		return $content;
	}
	
	function GetForumRecentFeed($db) {
		return DBF_GetRecentPosts($db);
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	FORUM MESSAGE FUNCTIONS
//
////////////////////////////////////////////////////////////////////////////////////////////////
	function CreateMessage($cid,$ctag,$tid,$ttag,$content,$user) {
		global $ALLOWED_HTML_TAGS;
		$msg=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$content=cleanmessage($content,$ALLOWED_HTML_TAGS);
			if(validateinput($content)){
				$msg=DBF_CreateMessage($db,$tid,$content,$user);
			}
		}
		$db->disconnect();
		return $msg;
	}
	
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
				$perms=DB_GetUserPermissionsByEmail($db,$user);
				$update=-3;
				if($minfo[0] == $user || in_array('admin',$perms)) {
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
			$perms=DB_GetUserPermissionsByEmail($db,$user);
			$del=-3;
			if($minfo[0] == $user || in_array('admin',$perms)) {
				$cnt=DBF_GetThreadMessageCount($db,$tid);
				if($cnt == 1) {
					$del=DeleteThread($cid,$ctag,$tid,$ttag,$user);
				}else{
					$del=DBF_DeleteMessage($db,$msgid);
				}
			}
		}
		$db->disconnect();
		return $del;
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	FORUM THREAD FUNCTIONS
//
////////////////////////////////////////////////////////////////////////////////////////////////
	function CreateThread($cid,$ctag,$title,$user) {
		global $ALLOWED_HTML_TAGS;
		$tid=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag)){
			$title = cleantitle($title);
			$tid=-3;
			if(validateinput($title)){
				$tid=DBF_CreateThread($db,$cid,$title,$user);
			}
		}
		$db->disconnect();
		$result = array();
		array_push($result, $tid, $title);
		return $result;
	}
	
	function DeleteThread($cid,$ctag,$tid,$ttag,$user) {
		$del=-2;
		$db=DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)){
			$info=DBF_GetThreadInfo($db,$tid);
			$perm=DB_GetUserPermissionsByEmail($db,$user);
			$del=-3;
			if($info[3] == $user || in_array('admin',$perm)) {
				$del=DBF_DeleteThread($db,$tid);
			}
		}
		$db->disconnect();
		return $del;
	}
	
	function UpdateThread($cid,$ctag,$tid,$ttag,$user,$rename) {
		$up= -2;
		$db= DB_CreateDefault();
		$db->connect();
		if(DBF_CheckCategory($db,$cid,$ctag) && DBF_CheckThread($db,$tid,$ttag)) {
			$rename= cleantitle($rename);
			$perm= DB_GetUserPermissionsByEmail($db,$user);
			$info= DBF_GetThreadInfo($db,$tid);
			$up= -3;
			if(validateinput($rename)) {
				if($info[3] == $user || in_array('admin',$perm)) {
					$up= DBF_UpdateThread($db,$tid,$rename);
				}
			}
		}
		$db->disconnect();
		return $up;
	}
	
	
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	FORUM HTML COMPONENTS
//
////////////////////////////////////////////////////////////////////////////////////////////////
	function HtmlPageTitle($title,$sub) {
		return "<div class='page-header'>"
			."<h1>{$title}<br><small>{$sub}</small></h1></div>";
	}
	
	function HtmlPageFooter() {
		return "<div class='page-footer'></div>";
	}
	
	function HtmlPageTitleAuthorDate($title,$sub,$alias,$timestamp) {
		$date = new DateTime($timestamp);
		$timestamp = $date->format(DateTime::RFC1123);
		return <<<EOD
			<div class='row'>
				<div class='page-header'>
					<h1>{$title}<br><small>{$sub}</small></h1>
					<div class='row thread-info'>
						<div class='col-xs-6'>
							Created by <span class='glyphicon glyphicon-user'></span> {$alias}
						</div>
						<div class='col-xs-6'>
							<div class='pull-right'>
								Created on <span class='glyphicon glyphicon-time'></span> {$timestamp}
							</div>
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
	
	function HtmlRecentFeed($mid,$cid,$ctag,$tid,$ttag,$author,$content,$date) {
		global $PG_INDEX; 
		$datetime = new DateTime($date);
		$datetime = $datetime->format(DateTime::RFC1123);
		$feedcontent=strip_tags($content,"<br>");
		$ctagenc=urlencode($ctag);
		$ttagenc=urlencode($ttag);
		
		$feedlink="{$PG_INDEX}?c_id={$cid}&c_tag={$ctagenc}&t_id={$tid}&t_tag={$ttagenc}#forum-thread-message-{$mid}";
		return <<<EOD
			<div class='col-md-4'>
				<div class='panel-group'>
					<div class='panel panel-default'>
						<a class='btn' href='{$feedlink}'>
							<div class='panel-recentfeed-content'>
								<div class='row'>
									<h5>{$ttag}<br><small>{$ctag}</small></h5>
								</div>
								<div class='row'>
									<i style='font-size:8pt;'>{$feedcontent}</i>
								</div>
							</div>
							<div class='panel-recentfeed-footer'>
								<div class='row'>
									<div class='col-xs-6'>
										<span class='glyphicon glyphicon-user'></span> {$author}
									</div>
									<div class='col-xs-6 pull-right'>
										<span class='glyphicon glyphicon-time'></span> {$datetime}
									</div>
								</div>
							</div>						
						</a>
					</div>
				</div>
			</div>
EOD;
	}
	
	function HtmlCategory($cid,$ctag,$descr,$glyph,$count) {
		global $PG_INDEX;
		$ctagenc=urlencode(stripslashes($ctag));
		return <<<EOD
			<div class="panel-category">
				<div class="row">
					<div class="col-xs-6">
						<a class="btn" href="{$PG_INDEX}?c_id={$cid}&c_tag={$ctagenc}">
							<h5>{$glyph} {$ctag} {$glyph}<small><br>{$descr}</small></h5>
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
						<h5>{$glyph} {$ttag} {$glyph}<br><small>
						<span class="glyphicon glyphicon-user"></span> {$alias} </br>
						<span class="glyphicon glyphicon-time"></span> {$time}</small></h5>
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
						<span class='glyphicon glyphicon-trash'></span> Delete
					</button>
				</form>
			</div>
EOD;
	}
	
	function HtmlMessage($first,$msgid,$msg,$author,$alias,$time,$query) {
		$headerleft=HtmlMessageAuthor($alias);
		$headerright=HtmlMessageDate($time);
		$body=HtmlMessageContent($msg,$msgid,$first);
		return<<<EOD
			<a id='forum-thread-message-{$msgid}'></a>
			<div class='panel-messages'>
				<div class='panel-messages-header'>
					<div class='row'>
						<div class='col-xs-6'>
							{$headerleft}
						</div>
						<div class='col-xs-6'>
							{$headerright}
						</div>
					</div>
				</div>
				<div class='row'>
					{$body}
				</div>
			</div>
EOD;
	}
	
	function HtmlMessageContent($msg,$msgid,$first) {
		$taghelper = HtmlTagHelper($msgid);
		$rename= ($first) ? "<input type='text' class='form-control edit-content-rename' placeholder='Type here to edit title' data-id='{$msgid}'/>" : "";
		return <<<EOD
			<div class='content-message edit-content' data-id='{$msgid}'>
				{$msg}
			</div>
			<div class='content-message edit-content-toggle' data-id='{$msgid}'>
				<div class='row'>
					{$rename}
				</div>
				<div class='row'>
					{$taghelper}
				</div>
				<div class='row'>
					<textarea class='form-control editmessage edit-content-text' data-id='{$msgid}'>
						{$msg}
					</textarea>
				</div>
			</div>
EOD;
	}
	
	function HtmlMessageOptions($msgid,$query) {
		global $PG_MSG_DEL;
		global $PG_MSG_UPD;
		return <<<EOD
			<div class='row usertool'>
				<div class='col-xs-2'>
					<button type='button' class='btn btn-edit pull-left edit-content-btn-edit' data-id='{$msgid}'>
						<i class='fa fa-pencil-square-o'></i>
						Edit
					</button>
				</div>
				<div class='col-xs-2'>
					<form role='form' action='{$PG_MSG_DEL}?{$query}' method='post'>
						<button type='submit' class='btn btn-edit edit-content-btn-delete' data-id='{$msgid}'>
							<i class='fa fa-trash-o'></i>
							Delete
						</button>
						<input type='hidden' name='msgid' value='{$msgid}'/>
					</form>
				</div>
				<div class='col-xs-8'>
					<button type='button' class='btn btn-edit pull-right content-quote-btn' data-id='{$msgid}'>
						<i class='fa fa-quote-right'></i>
						Quote
					</button>
					<button type='button' class='btn btn-edit pull-right edit-content-btn-cancel' data-id='{$msgid}'>
						<i class='fa fa-times'></i>
						Cancel
					</button>
					<form class='edit-content-form' data-id='{$msgid}' role='form' action='{$PG_MSG_UPD}?{$query}' method='post'>
						<button type='button' class='btn btn-edit pull-right edit-content-btn-update' data-id='{$msgid}'>
							<i class='fa fa-check-square-o'></i>
							Confirm
						</button>
						<input type='hidden' name='rename' class='edit-content-rename-hidden' data-id='{$msgid}' value=''/>
						<input type='hidden' name='message' class='edit-content-hidden' data-id='{$msgid}'/>
						<input type='hidden' name='msgid' value='{$msgid}'/>
					</form>
				</div>
			</div>	
EOD;
	}
	
	function HtmlTagHelper($id) {
		return<<<EOD
			<span class='dropdown'>
				<button type='button' class='btn btn-edit dropdown-toggle' data-toggle='dropdown'>
					<i class="fa fa-header"></i>
				</button>
				<ul class='dropdown-menu' role='menu'>
					<li><button type='button' class='btn btn-edit edit-tag-header1' data-id='{$id}'>
						<h1>Heading 1</h1>
					</button></li>
					<li><button type='button' class='btn btn-edit edit-tag-header2' data-id='{$id}'>
						<h2>Heading 2</h2>
					</button></li>
					<li><button type='button' class='btn btn-edit edit-tag-header3' data-id='{$id}'>
						<h3>Heading 3</h3>
					</button></li>
				</ul>
			</span>
			<button title='Bold' type='button' class='btn btn-edit edit-tag-bold' data-id='{$id}'>
				<i class="fa fa-bold"></i>
			</button>
			<button title='Italic' type='button' class='btn btn-edit edit-tag-italic' data-id='{$id}'>
				<i class="fa fa-italic"></i>
			</button>
			<button title='Underline' type='button' class='btn btn-edit edit-tag-underline' data-id='{$id}'>
				<i class="fa fa-underline"></i>
			</button>
			<button title='Strikethrough' type='button' class='btn btn-edit edit-tag-strike' data-id='{$id}'>
				<i class="fa fa-strikethrough"></i>
			</button>
			<button title='Subscript' type='button' class='btn btn-edit edit-tag-subscript' data-id='{$id}'>
				<i class="fa fa-subscript"></i>
			</button>
			<button title='Superscript' type='button' class='btn btn-edit edit-tag-superscript' data-id='{$id}'>
				<i class="fa fa-superscript"></i>
			</button>
			<button title='List' type='button' class='btn btn-edit edit-tag-ulist' data-id='{$id}'>
				<i class="fa fa-list-ul"></i>
			</button>
			<button title='List Item' type='button' class='btn btn-edit edit-tag-ulist-item' data-id='{$id}'>
				<i class="fa fa-asterisk"></i>
			</button>
			<button title='Paragraph' type='button' class='btn btn-edit edit-tag-paragraph' data-id='{$id}'>
				<i class="fa fa-paragraph"></i>
			</button>
			<button title='Center Alignment' type='button' class='btn btn-edit edit-tag-center' data-id='{$id}'>
				<i class="fa fa-align-center"></i>
			</button>
			<button title='Internet Link' type='button' class='btn btn-edit edit-tag-link' data-id='{$id}'>
				<i class="fa fa-link"></i>
			</button>
			<button title='Image Reference' type='button' class='btn btn-edit edit-tag-image' data-id='{$id}'>
				<i class="fa fa-picture-o"></i>
			</button>
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
	
	function HtmlMessageDate($timestamp){
		$date = new DateTime($timestamp);
		$timestamp = $date->format(DateTime::RFC1123);
		return <<<EOD
			<div class="row">
				<div class="pull-right">
					<span class="glyphicon glyphicon-time"></span>													
					{$timestamp}
				</div>
			</div>
EOD;
	}
	
	function HtmlReplyForm($query,$alias) {
		global $PG_MSG_ADD;
		$id = "submit-forum-message";
		$taghelper = HtmlTagHelper($id);
		return <<<EOD
			<a id='reply-to-thread'></a>
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
							<div class='row'>
								{$taghelper}
							</div>
							<div class="row">
								<div class="input-group">
									<textarea name="content" id='input-reply-text' class="form-control edit-content-text" data-id='{$id}' required></textarea>
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
		
	function NewThreadModal($query){
		global $PG_THR_ADD;
		$id = "new-thread-message";
		$taghelper = HtmlTagHelper($id);
		return <<<EOD
			<div class="panel-group panel-newthread">
				<div class="panel-newthread">
					<div class="panel panel-default">
						<a class="btn" data-toggle="modal" data-target="#modal-newthread">
							<span class="glyphicon glyphicon-share-alt"></span>
							Create Thread
						</a>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-newthread" tabindex="-1" role="dialog" aria-labelledby="modal-newthread" aria-hidden="true">
				<div class="modal-dialog">
					<form action="{$PG_THR_ADD}?{$query}" method="post">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h1 class="modal-title" id="modal-label" style="color:rgb(122, 183, 51)">
									Create Thread
								</h1>
							</div>
							<div class="modal-body">
								<div class="panel panel-default">
									<div class="form-group">
										<label class="control-label" for="title">
											<h3>Title</h3>
										</label>
										<input type="text" name="title" class="form-control" placeholder="Title..." required/>
									</div>
									<div class="form-group">						
										<div class='row'>
											<label class="control-label" for="title">
												<h3>Content</h3>
											</label>
										</div>
										<div class='row'>
											{$taghelper}
										</div>
										<div class='row'>
											<textarea name="content" class="form-control edit-content-text" placeholder="Post content..." data-id={$id} required></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-default" value="Create"/>
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
EOD;
	}
	
 ?>