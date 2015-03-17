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
    <link href="includes/profile.css" rel="stylesheet" />
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
        <div class="well">
            <form role="form">
                <div class="row">
                        <div class="page-header">
                            <?php echo "<h3>Update {$alias}'s Account:</h3></br>"; ?>
                        </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                        <label for="alias-profile"><p>Profile Name:</p></label>
                        <input type="text" class="form-control" id="alias-profile" title="Change Profile Name" placeholder="Change Name">
                      </div>
				        <br />
                      <div class="form-group">
				        <label for="password-profile"><p>New Password:</p></label>
                        <input type="text" class="form-control" id="password-profile" title="Change Profile Password" placeholder="Change Password">
                          <br />
                        <label for="password-profile"><p>Re-Enter Password:</p></label>
                        <input type="text" class="form-control" id="password-profile" title="Re-Enter Password" placeholder="Re-Enter Password">
                      </div>
                      <br />
                      <div class="form-group">
				        <label for="email-profile"><p>Change Email:</p></label>
                        <input type="email" class="form-control" id="email-profile" title="Change Profile Email" placeholder="Change Email">
                       </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="fname-profile"><p>First Name:</p></label>
                            <input type="text" class="form-control" id="fname-profile" title="Enter First Name" placeholder="First Name">
                        </div>
                        <br />
                        <div class="form-group">
                            <label for="lname-profile"><p>Last Name:</p></label>
                            <input type="text" class="form-control" id="lname-profile" title="Enter Last Name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="location-profile"><p>Location:</p></label>
                            <input type="text" class="form-control" id="location-profile" title="Enter Location" placeholder="City, State, Province, Country">
                        </div>
                        <div class="form-group">
                            <label for="comment-profile">Comment:</label>
                            <textarea class="form-control" rows="1" id="comment-profile"></textarea>
                    </div>
                    </div>
            </div>
                        <br />
            <div class="well">
                    <div class="page-header"><h3>Games Played with MPC:</h3></div><small>Use Checkboxes to Share Alias</small><br /><small>X = Enable Setting</small>
                    <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox-inline">
                            <label><input type="checkbox" name="sc2hot-profile"><p>Starcraft 2 Heart of the Swarm</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                        <div class="checkbox-inline">
                            <label><input type="checkbox" name="wow-profile"><p>World of WarCraft</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                        <div class="checkbox-inline">
                            <label><input type="checkbox" name="hearthstone-profile"><p>Hearth Stone</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                        <br />
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon2">Steam</span>
                          <input type="text" class="form-control" placeholder="Steam Name" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon2">Battle.net</span>
                          <input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon2">Origin</span>
                          <input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="checkbox-inline">
                            <label><input type="checkbox" name="csgo-profile"><p>Counter Strike Global Offensive</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                        <div class="checkbox-inline">
                            <label><input type="checkbox" name="herosofthestorm-profile"><p>Heroes of the Storm</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                        <div class="checkbox-inline">
                            <label><input type="checkbox" name="leagueoflegends-profile"><p>League of Legends</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                        <div class="checkbox-inline">
                        <label><input type="checkbox" name="mgsvonline-profile" disabled><p>Metal Gear Solid V: Multiplayer</p></label>
                        </div>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Character Code">
                        </div>
                    </div>
                    </div>
                </div>
            <br />
            <div class="well">
                <div class="page-header"><h3>Preference Settings</h3></div><small>X = enable Setting</small>
                <div class="row">
                <div class="col-xs-6">
                    <div class="checkbox">
                        <label><input type="checkbox" name="display-email-profile"><p>Share Email</p></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="display-games-profile"><p>Share Games</p></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="display-location-profile"><p>Share Location</p></label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="checkbox">
                        <label><input type="checkbox" name="display-gametag-profile"><p>Share In-Game Character Codes/Alias</p></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="display-gametag-profile"><p>Share Steam/Battle.net/Origin Accounts</p></label>
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