<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/profile/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	
	session_start();
	
	if (!isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/login/index.php");
	} else {
		$db = DB_CreateDefault();
		$db->connect();
		$email = $_SESSION["USER"];
		$alias = DB_GetUserAliasByEmail($db, $email);
		$db->disconnect();
	} 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapDateCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapDateJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("profile", $ROOT); ?>
	</div>
	<div class="container">
		<div id="wrapper">
			<?php PrintSidebar("update", $ROOT); ?>
			<div id="page-content-wrapper">
				<div class="content">
					<div class="panel panel-default">
						<ul class="nav nav-tabs" data-tabs="tabs">
							<li class="active"><a href="#profile-account" data-toggle="tab">Account</a></li>
							<li><a href="#profile-public" data-toggle="tab">Public Information</a></li>
							<li><a href="#profile-prefs" data-toggle="tab">Preferences</a></li>
						</ul>
							
						<div class="tab-content">
							<div id="profile-account" class="tab-pane active">
								<div class="page-header">
									<h1>Account Settings</h1>
								</div>								 
								<div class="col-xs-6">
									<div class="form-group">
										<label for="alias-profile"><p>Profile Name (Alias):</p></label>
										<input type="text" class="form-control" id="alias-profile" title="Change Profile Name" placeholder="Change Name">
									</div>
									<div class="form-group">
										<label for="password-profile"><p>New Password:</p></label>
										<input type="text" class="form-control" id="password-profile" title="Change Profile Password" placeholder="Change Password">
										<label for="password-profile"><p>Re-Enter Password:</p></label>
										<input type="text" class="form-control" id="password-profile" title="Re-Enter Password" placeholder="Re-Enter Password">
									</div>
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
									<div class="form-group">
										<label for="lname-profile"><p>Last Name:</p></label>
										<input type="text" class="form-control" id="lname-profile" title="Enter Last Name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<label for="location-profile"><p>Location:</p></label>
										<input type="text" class="form-control" id="location-profile" title="Enter Location" placeholder="City, State, Province, Country">
				
									</div>
								</div>
							</div>
							<div class="row" style="width:80%">			
								<div class="col-md-9 col-md-offset-3">
									<div class="form-group">
										<label for="comment-profile"><p>Comments:</p></label>
										<textarea style="max-width: 100%;" class="form-control" rows="3" id="profile-comments"></textarea>
									</div>
								</div>
							</div>
							
							<div id="profile-public" class="tab-pane">
								<div class="page-header">
									<h1>Public Information</h1>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="input-group">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="sc2hot-profile">Starcraft 2 Heart of the Swarm
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">									
										</div>
										<div class="input-group">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="wow-profile">World of WarCraft
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">
										</div>
										<div class="input-group">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="hearthstone-profile">Hearth Stone
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">
										</div>
									</div>
									<div class="col-xs-6">
										<div class="input-group">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="csgo-profile">Counter Strike Global Offensive
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">
										</div>
										<div class="input-group">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="herosofthestorm-profile">Heroes of the Storm
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">
										</div>
										<div class="input-group">									
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="leagueoflegends-profile">League of Legends
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">
										</div>
										<div class="input-group">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="mgsvonline-profile" disabled>Metal Gear Solid V: Multiplayer
												</label>
											</div>
											<input type="text" class="form-control" placeholder="Character Code">
										</div>
									</div>
								</div>
								</br>
								<div class="row" style="width:80%">
									<div class="col-xs-10 col-xs-offset-2">
										<div class="input-group">
											<span class="input-group-addon" style="width:100px;" id="sizing-addon2">Steam</span>
											<input type="text" class="form-control" placeholder="Steam Name" aria-describedby="sizing-addon2">
										</div>
										<div class="input-group">
											<span class="input-group-addon" style="width:100px;" id="sizing-addon2">Battle.net</span>
											<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
										</div>
										<div class="input-group">
											<span class="input-group-addon" style="width:100px;" id="sizing-addon2">Origin</span>
											<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
										</div>
									</div>
								</div>
							</div>
							<div id="profile-prefs" class="tab-pane">
								<div class="page-header">
									<h1>Preferences</h1>
								</div>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
    <script type="text/javascript">
        addboxevents();
        var active = false;
        $("#countryselect").click(function () {
            active = true;
        });
        $("#countryselect").blur(function () {
            active = false;
        });
        function addboxevents () {
            $("#select-wrapper").mouseout(function (){
                if (!active){
                    $("#select-wrapper").setStyle("visibility","hidden");
            
                }  
            
            });
            $("#countryselect").mouseover(function (){
                if (!active){
                    $("#countryselect").setStyle("visibility","visible");
                    $("#countryselect-btn").setStyle("visibility","visible");
                    
                }  
            
            });
            
        }
    </script>
</body>