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
				<div class="col-xs-3">
					<img src="../pics/starcraft2blizzardlogo.PNG" id="sc2logo-gaming" alt="starcraft2blizzardlogo.PNG" class="img-reponsive" style="max-width: 75%; max-height: 75%; margin-top: 15px;" />
				</div>
				<div class="col-xs-3">
					<img src="../pics/cs-go-logo.png" id="csgologo-img" alt="cs-go-logo.png" class="img-reponsive" style="max-width: 100%; max-height: 100%; margin-top: 15px;" />
				</div>
				<div class="col-xs-3" style="margin-bottom: 45px;">
					<img src="../pics/blizzardwowlogo.PNG" id="blizzardwowlogo-img" alt="blizzardwowlogo.PNG" class="img-responsive" />
				</div>
				<div class="col-xs-3">
					<img src="../pics/leagueoflegendslogo.png" id="leagueofleagends-img" alt="leagueoflegendslogos.png" class="img-responsive" style="margin-top: 5px;" />
				</div>
			</div>
            <div class="row" style="max-width: 600px;">
			<center>
				<img src="../pics/mpcgamingbanner.png" alt="mpcgamingbanner.png" title="mpc gaming" class="img-responsive img-rounded" style="height: 200; width: 600px; padding: 25px; border: solid;"/>
			</center>
			<br />
			<small>
				<p>&ensp;&ensp;&ensp;&ensp;&ensp;MPC is a multi-level gaming clan that specializes on one main concept... Team. We would like to develope a community that engages both the players, and the games they play. We try to provide the essential fundamentals of gaming, and that includes: ventrilo, website domain, a foundation of solid core members, training, stream zone, and more. It's a friendly environment for all ages, and disrespect to either members, or to public community will not be tolerated. Please be advised that the people streaming on this website have complete control of the language filter. Do not be offended, just walk away from that streamer's cast on this website.</p>
			</small>
                <br />
                <p>&ensp;&ensp;&ensp;&ensp;&ensp;Use this page as a tool to get a head start on reaching out to our members, and provide all the tools that will help your gaming experience. Don't be afraid to reach out, and give us a shot at becoming a well developed organization. MPC is a non profit, and purpose is reacreational only. Yes there are some expenses, but nothing serious. We wish to meet new people and gather more information about the games everyone is playing as of today. We would like to break the games into science, and provide an education to new members, or current members that are trying a new game, this will create friends along the process, and as to a growing organization, specifically, from the help of this website. We are members who like to help other members, and maintain a nice relationship between gamers, and the games they play. We are a Multi Player Clan, and we share the respect for the community (non clan memmbers), as much as regular members, or officers. MPC's vision is to reach a high volume of members, and very interactive with the game, and the clan itself...</p>
		      </div>
            <br />
            <div class="row">
                <div class="btn-group">
                    <a href="ventrilolive.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                        Ventrilo Live
                    </a>
                    <a href="mpcstream.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                        Stream Members
                    </a>
                    <a href="../forum/index.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                        Forums
                    </a>
                    <a href="gamelist.php" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                        Games
                    </a>
                    <a type="button" href="gamingservice.php" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                        Games Services
                    </a>
                </div>
            </div>
	</div>
</div>

<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>
</body>

</html>
