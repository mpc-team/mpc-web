
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
<div class="panel panel-default">
	<div class="panel-heading">
			<center>
			<img src="../pics/games.png" class="img-rounded img-responsive text-center" style="width: 490px; height: 100px;" />
			</center>
		</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<ul class="nav nav-pills">
			<li role="presentation">
				<a href="#">
					<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
						MPCGaming
				</a>
			</li>
				<li role="presentation">
					<a href="#">
					<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
						Ventrilo
					</a>
				</li>
				<li role="presentation">
					<a href="#">
						<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
						Streaming
					</a>
				</li>
			<li role="presentation">
				<a href="#">
					<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
					Forum
				</a>
			</li>
			<li role="presentation" class="disabled">
				<a href="#">
					<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
					PC Games
				</a>
			</li>
			<li role="presentation">
				<a href="#">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					GSP
				</a>
			</li>
			<li role="presentation">
				<a href="#"> 
					<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
					Game Developers
				</a>
			</li>
			<li role="presentation">
				<a href="#">
						<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
						The Dojo
				</a>
			</li>
		</ul>
	</div>
	<div class="panel-body">
		<div role="tabpanel">
			<ul id="GameListDevelopersTab" class="nav nav-tabs">
				<li><a href="#btnblizzard" data-toggle="tab">Blizzard Ent.</a></li>
				<li><a href="#btnvalve" data-toggle="tab">Valve</a></li>
				<li><a href="#btneaorigin" data-toggle="tab">EA Games</a></li>
				<li><a href="#btnindi" data-toggle="tab">Indi-Games</a></li>
			</ul>
			<div id="GameListDeveloperTabContent" class="tab-content">
				<div class="tab-pane fade" id="btnblizzard">
					<div class="panel panel-default">
						<ul id="GameListGamesTab" class="nav nav-tabs">
							<li class="active"><a href="#btnhearthstonegamelist" data-toggle="tab">HearthStone</a></li>
							<li><a href="#btnheroesgamelist" data-toggle="tab">Heroes of the Storm</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Starcraft <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#drpdnwolgamelist" data-toggle="tab">Wings of Liberty</a></li>
								<li><a href="#drpdnhotsgamelist" data-toggle="tab">Heart of the Swarm</a></li>
								<li><a href="#drpdnlotvgamelist" data-toggle="tab">Legacy of the Void <span class="badge">Coming Soon!</span></a></li>
							</ul>
							</li>
						</ul>
						<div id="GameListGamesTabContent" class="tab-content">
							<div class="tab-pane fade" id="drpdnwolgamelist">
								<h3>Starcraft 2: <span class="label label-default">Wings of Liberty</span></h3>
							</div>
							<div class="tab-pane fade" id="drpdnhotsgamelist">
								<h3>Starcraft 2: <span class="label label-default">Heart of the Swarm</span></h3>
							</div>
							<div class="tab-pane fade" id="drpdnlotvgamelist">
								<h3>Starcraft 2: <span class="label label-default">Legacy of the Void</span></h3>
							</div>
							<div class="tab-pane fade" id="btnheroesgamelist">								
								<h3>Heroes of the Storm: <span class="label label-default">New!</span></h3>
							</div>
							<div class="tab-pane fade in active" id="btnhearthstonegamelist">
								<h3>HearthStone: <span class="label label-default">Heroes of Warcraft</span></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="btnvalve">
					<div class="panel panel-default">
						<ul id="GameListGamesTab" class="nav nav-tabs">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Counter Strike<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#drpdncsgogamelist" data-toggle="tab">Global Offensive <span class="badge">Active</span></a></li>
								<li><a href="#drpdnsourcegamelist" data-toggle="tab">Source <span class="badge">Old</span></a></li>
								<li><a href="#drpdnversion16gamelist" data-toggle="tab">Version 1.6 <span class="badge">Old</span></a></li>
							</ul>
							</li>
						</ul>
						<div id="GameListGamesTabContent" class="tab-content">
							<div class="tab-pane fade" id="drpdncsgogamelist">
								<h3>Counter Strike: <span class="label label-default"> Global Offensive</span></h3>
							</div>
							<div class="tab-pane fade" id="drpdnsourcegamelist">
								<h3>Counter Strike: <span class="label label-default">Source</span></h3>
							</div>
							<div class="tab-pane fade" id="drpdnversion16gamelist">
								<h3>Counter Strike: <span class="label label-default">Version 1.6</span></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="btneaorigin">
					<div class="panel panel-default">
						<ul id="GameListGamesTab" class="nav nav-tabs">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">CNC: Series<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li class="disabled text-center"><p>Command and Conquer Series</p></li>
								<li class="divider"></li>
								<li class="disabled text-center"><p>Westwood Studios <span class="label label-default">Sold 2003</span></p></li>
								<li class="divider"></li>
								<li><a href="#drpdncncdngamelist" data-toggle="tab">Tiberian Dawn</a></li>
								<li><a href="#drpdncnctcogamelist" data-toggle="tab">The Covert OPS</a></li>
								<li><a href="#drpdncnctsgamelist" data-toggle="tab">Tiberian Sun</a></li>
								<li><a href="#drpdncnctsfsgamelist" data-toggle="tab">Tiberian Sun: <span class="label label-default">FireStorm</span></a></li>
								<li><a href="#drpdncncrengamelist" data-toggle="tab">Renegade</a></li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Red Alert:<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#drpdncncragamelist" data-toggle="tab">Red Alert</a></li>
								<li><a href="#drpdncncra2gamelist" data-toggle="tab">Red Alert 2</a></li>
								<li><a href="#drpdncncra3gamelist" data-toggle="tab">Red Alert 3<span class="badge">EA Games</span></a></li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Generals<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li class="divider"></li>
								<li class="disabled text-center"><p>EA Games</p></li>
								<li><a href="#drpdncncgeneralsgamelist" data-toggle="tab">Generals</a></li>
								<li><a href="#drpdncncgeneralszhgamelist" data-toggle="tab">Generals: <span class="label label-default"> Zero Hour</span></a></li>
								<li><a href="#drpdncncgenerals2gamelist" data-toggle="tab">Generals 2<span class="badge">Cancelled!</span></a></li>
							</ul>
							</li>
						</ul>
						<div id="GameListGamesTabContent" class="tab-content">
							<div class="tab-pane fade" id="drpdncnctdgamelist"><h3>Command and Conquer: <span class="label label-default">Tiberian Dawn</span></h3></div>
							<div class="tab-pane fade" id="drpdncnctcogamelist"><h3>Command and Conquer: <span class="label label-default">Tiberian Dawn</span></h3></div>
							<div class="tab-pane fade" id="drpdncncgamelist"><h3>Command and Conquer: <span class="label label-default">Tiberian Dawn</span></h3></div>
							<div class="tab-pane fade" id="drpdncnctsgamelist"><h3>Command and Conquer: <span class="label label-default">Tiberian Sun</span></h3></div>
							<div class="tab-pane fade" id="drpdncnctsfsgamelist"><h3>Command and Conquer: Tiberian Sun <span class="label label-default">Fire Storm</span></h3></div>
							<div class="tab-pane fade" id="drpdncncragamelist"><h3>Command and Conquer: <span class="label label-default">Red Alert</span></h3></div>
							<div class="tab-pane fade" id="drpdncncra2gamelist"><h3>Command and Conquer: <span class="label label-default">Red Alert 2</span></h3></div>
							<div class="tab-pane fade" id="drpdncncra3gamelist"><h3>Command and Conquer: <span class="label label-default">Red Alert 3</span></h3></div>
							<div class="tab-pane fade" id="drpdncncrengamelist"><h3>Command and Conquer: <span class="label label-default">Renegade</span></h3></div>
							<div class="tab-pane fade" id="drpdncncgeneralsgamelist"><h3>Command and Conquer: <span class="label label-default">Generals</span></h3></div>
							<div class="tab-pane fade" id="drpdncncgenerals2gamelist"><h3>Command and Conquer: <span class="label label-default">Generals 2</span></h3></div>
							<div class="tab-pane fade" id="drpdncncgeneralszhgamelist"><h3>Command and Conquer:  Generals<span class="label label-default">Zero Hour</span></h3></div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="btnindi">
					<div class="panel panel-default">
						<ul id="GameListGamesTab" class="nav nav-tabs">
							<li><a href="#btnleagueoflegendsgamelist" data-toggle="tab">League of Legends</a></li>
							<li><a href="#btnclashofclansgamelist" data-toggle="tab">Clash of Clans</a></li>
						</ul>
						<div id="GameListGamesTabContent" class="tab-content">
							<div class="tab-pane fade" id="btnleagueoflegendsgamelist"><h3>League of Legends</h3></div>
							<div class="tab-pane fade" id="btnclashofclansgamelist"><h3>Clash of Clans</h3></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--footer-->				
<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>