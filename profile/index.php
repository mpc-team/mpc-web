<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/profile/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	session_start();
	
	if (!isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/login/index.php");
	} else {
		$db = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
		$db->connect();
		$user = $_SESSION["USER"];
		
		$sql = "SELECT userID FROM User WHERE userName='{$user}'";
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
		$id = $row['userID'];
		$result->close();
		
		$sql="SELECT userAlias FROM UserAlias WHERE userID={$id}";
		$result=$db->query($sql);
		$row = $result->fetch_assoc();
		$alias = $row['userAlias'];
		$result->close();
		$db->disconnect();
	} 
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
 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("profile", $ROOT); ?>
	</div>
	<div id="wrapper" class="container">
		<?php PrintSidebar("overview", $ROOT); ?>
		<div id="page-content-wrapper">
			<?php
				echo "<h1>{$alias}</h1>";
				echo "<p>{$user}</p>";
			 ?>
		</div>
        <div class="well" id="userprofile-edit-form">
            <form role="form">
                <div class="row">
									<div class="page-header pull-left">
										<?php echo "<h3>Update {$alias}'s Account:</h3></br>"; ?>
									</div>
                    <div class="col-xs-6">
											<div class="page-header pull-left">
												<h3><b>Manditory for all Accounts</b></h3>
											</div>
											<div class="form-group">
                        <label for="alias-profile"><p>Profile Name:</p></label>
                        <input type="text" class="form-control" id="alias-profile" title="Change Profile Name" placeholder="Change Name">
                      </div>
											</br>
                      <div class="form-group">
												<label for="password-profile"><p>New Password:</p></label>
                        <input type="text" class="form-control" id="password-profile" title="Change Profile Password" placeholder="Change Password">
                        <label for="password-profile"><p>Re-Enter Password:</p></label>
                        <input type="text" class="form-control" id="password-profile" title="Re-Enter Password" placeholder="Re-Enter Password">
                      </div>
                      </br>
                      <div class="form-group">
												<label for="email-profile"><p>Change Email:</p></label>
                        <input type="email" class="form-control" id="email-profile" title="Change Profile Email" placeholder="Change Email">
                       </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="page-header pull-right"><h3><i>Optional!</i></h3></div>
                        <div class="radio">
                            <label><input type="radio" name="mr-profile" value="mr"><p>MR.</p></label>
                            <label><input type="radio" name="mrs-profile" value="mrs"><p>MRS.</p></label>
                            <label><input type="radio" name="ms-profile" value="ms"><p>MS.</p></label>
                        </div>
                        <div class="form-group">
                            <label for="fname-profile"><p>First Name</p></label>
                            <input type="text" class="form-control" id="fname-profile" title="Enter First Name" placeholder="First Name">
                        </div>
                        <br />
                        <div class="form-group">
                            <label for="lname-profile"><p>Last Name</p></label>
                            <input type="text" class="form-control" id="lname-profile" title="Enter Last Name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <div id="spend_filter" class="btn-group">
                                <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-filter"></i>
                                Filter By
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
																	<li><a href="#">Test</a></li>
																	<li><a href="#">Test 2</a></li>
																	<li><a href="#">Test 3</a></li>
																	<li><a href="#">Test 4</a></li>
																</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>