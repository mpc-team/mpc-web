<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);

	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php
	echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
?>
</head>
<body>
	<div class="container-fluid">
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("gaming", $ROOT, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>	
	</div>
	<div class="container">
		<div class="content">
            <div class="row">
				<div class="col-xs-3 pull-right">
					<img src="../pics/starcraft2blizzardlogo.PNG" id="sc2logo-gaming" alt="starcraft2blizzardlogo.PNG" class="img-reponsive" style="max-width: 75%; max-height: 75%; margin-top: 15px; margin-left: 15px;" />
                    <br />
					<img src="../pics/cs-go-logo.png" id="csgologo-img" alt="cs-go-logo.png" class="img-reponsive" style="max-width: 75%; max-height: 75%; margin-top: 15px; margin-left: 15px;" />
					<img src="../pics/blizzardwowlogo.PNG" id="blizzardwowlogo-img" alt="blizzardwowlogo.PNG" class="img-responsive" style="max-width: 75%; max-height: 75%; margin-top: 15px; margin-left: 15px;" />
					<img src="../pics/leagueoflegendslogo.png" id="leagueofleagends-img" alt="leagueoflegendslogos.png" class="img-responsive" style="margin-top: 15px; max-height: 75%; max-width: 75%; margin-left: 15px;" />
                </div>
            <div class="col-xs-9 pull-left">
                <div id="gamingindex-carousel" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="http://www.mpcgaming.com/gaming/ventrilolive.php">
                            <img src="../pics/captureventrilo.PNG" alt="captureventrilo.png" class="img-responsive img-rounded" style="width: 800px; height: 250px;" />
                        </a>
                    </div>
                    <div class="item">
                      <img src="../pics/twitchlogo.jpg" alt="twitchlogo.jpg" class="img-responsive img-rounded" style="width: 800px; height: 250px;" />
                      <div class="carousel-caption">
                          <h4 style="color: lime; margin-right: 225px;"><b>Streaming Members:</b></h4><br />
                          <a type="button" class="btn btn-default">KillerJoe</a>
                          <a type="button" class="btn btn-default">Lungy</a>
                          <a type="button" class="btn btn-default">VaeVic</a>
                        </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#gamingindex-carousel" role="button" data-slide="prev" style="color: green;">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#gamingindex-carousel" role="button" data-slide="next" style="color: green;">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <h3>Here you will find:</h3>
                    <ul class="list-group" style="margin-left: 55px;">
                        <li class="presentation">Setting Ventrilo to communicate with MPC.</li>
                        <li class="presentation">Watching MPC, or Community Members with live video broadcasting.</li>
                        <li class="presentation">Posting Messages on our website through our forums.</li>
                        <li class="presentation">Learn more about the games MPC engages.</li>
                        <li class="presentation">Connect with Gaming Service Providers (GSP), for purchasing new downloadable games, or to link up with MPC members.</li>
                    </ul>
                  </div>
                </div>
            <div class="row">
                <div class="btn-group">
                    <a href="ventrilolive.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        Ventrilo Live
                    </a>
                    <a href="mpcstream.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Stream Members
                    </a>
                    <a href="../forum/index.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                        Forums
                    </a>
                    <a href="gamelist.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        Games
                    </a>
                    <a type="button" href="gamingservice.php" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        GSP
                    </a>
                </div>
            </div>
    </div>
<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>
</body>

</html>
