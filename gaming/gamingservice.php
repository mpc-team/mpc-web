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
	<div id="wrapper">
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li role="presentation">
					<a href="index.php">
						<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
							MPCGaming
					</a>
				</li>
				<li role="presentation">
					<a href="ventrilolive.php">
					<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
						Ventrilo
					</a>
				</li>
				<li role="presentation">
					<a href="mpcstream.php">
						<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
						Streaming
					</a>
				</li>
				<li role="presentation">
					<a href="../forum/index.php">
						<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
						Forum
					</a>
				</li>
				<li role="presentation">
					<a href="gamelist.php">
						<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
						PC Games
					</a>
				</li>
				<li role="presentation" class="active">
					<a href="#">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
						GSP
					</a>
				</li>
				<li role="presentation">
					<a href="developers.php"> 
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						Game Developers
					</a>
				</li>
				<li role="presentation">
					<a href="../dojo/index.php">
						<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
						The Dojo
					</a>
				</li>
				</ul>
			</div>
    <div id="page-content-wrapper" style="padding-top: 55px; padding-bottom: 55px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<center>
						<img src="../pics/gamingservices.png" alt="gamingservices.png" class="img-responsive img-rounded" style="height: 100px; width: 700px;" name="top" />
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-pills">
					<li role="presentation">
						<a href="index.php">
							<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
								MPCGaming
						</a>
						</li>
						<li role="presentation">
							<a href="ventrilolive.php">
							<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
								Ventrilo
							</a>
						</li>
						<li role="presentation">
							<a href="mpcstream.php">
								<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
								Streaming
							</a>
						</li>
						<li role="presentation">
							<a href="../forum/index.php">
								<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
								Forum
							</a>
						</li>
						<li role="presentation">
							<a href="gamelist.php">
								<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
								PC Games
							</a>
						</li>
						<li role="presentation" class="disabled">
							<a href="#" >
								<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								GSP
							</a>
						</li>
						<li role="presentation">
							<a href="developers.php"> 
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
								Game Developers
							</a>
						</li>
						<li role="presentation">
							<a href="../dojo/index.php">
								<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
								The Dojo
							</a>
						</li>
					</ul>
				<small><p>Search the games, and learn more about them with this page. Maybe there will be some interest in another game that MPC plays in. Find the MPC group in that game, and begin creating new friends, or learning more about that game from the MPC community.</p></small>
				 </center>
				</div>
				<div class="panel-body">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="#">GSP's</a>
						</div>
						  <div class="collapse navbar-collapse" id="gspbtn-blizzard">
							  <ul class="nav navbar-nav">
								<li class="dropdown">
								  <a href="#blizzardinfo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										Blizzard
								  <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="#sc2info">Star Craft 2</a></li>
									<li><a href="#wowinfo">Warcraft Series</a></li>
									<li><a href="#hearthstoneinfo">Hearth Stone</a></li>
									<li><a href="#herosofthestorminfo">Heroes of the Storm</a></li>
								  </ul>
								</li>
								<li class="dropdown">
								  <a href="#steaminfo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										Valve(Steam)
								  <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="#sc2info">Star Craft 2</a></li>
									<li><a href="#counterstrikeinfo">Counter Strike: GO</a></li>
									<li><a href="#gtavinfo">GTAV</a></li>
									<li><a href="#mgsvinfo">MGSV: Phantom Pain</a></li>
								  </ul>
								</li>
								<li class="dropdown">
								  <a href="#origininfo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										EA Games(Origin)
								  <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="#simcityinfo">Sim City</a></li>
									<li><a href="#battlefieldinfo">Battlefield</a></li>
								  </ul>
								</li>
								<li class="dropdown">
								  <a href="#othercoinfo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										Others
								  <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="#leagueoflegendsinfo">League of Legends</a></li>
									<li><a href="#clashofclansinfo">Clash of Clans</a></li>
								  </ul>
								</li>
							  </ul>
							</div>
						</div>
					</nav>
				</div>
		</div>
                <div class="panel panel-default">
                    <div class="panel-title">
                        <h3>Battle.net - Blizzard Ent. - Founded 11/30/1996</h3>
                    </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <div class="row">
                                    
                                        <img src="../pics/bnet.PNG" alt="bnt.PNG" class="img-responsive img-rounded media-object" id="gaming_blizzardpix" />
                                        <br />
                                        <img src="../pics/blizzardentlogo.png" alt="blizzardentlogo.png" class="img-responsive img-rounded media-object" id="gaming_blizzardpix"  title="blizzard entertainment" />
                                        <br />
                                        <img src="../pics/blizzardhq.jpg" alt="blizzardhq.jpg" title="Blizzard HeadQuarters" class="img-responsive img-rounded media-object" id="gaming_blizzardpix"  />
                                        <small>
                                            <p>
                                            Blizzard Head Quarters
                                            </p>
                                        </small>
                                </div>
                                <div class="row">
                                    <div class="page-header">
                                    <h4><span class="label label-default">Game Play Clips</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Warcraft
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Starcraft
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Diablo
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Hearth Stone
                                    </a>
									</li>
                                    <li role="presentation">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Heroes of the Storm
                                    </a>
									</li>
                                </ul>
                                <div class="page-header">
                                    <h4><span class="label label-default">Game Trailers</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Warcraft
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Starcraft
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Diablo
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Hearth Stone
                                    </a>
									</li>
                                    <li role="presentation">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Heroes of the Storm
                                    </a>
									</li>
                                </ul>
                                <br />
                                <div class="page-header">
                                    <h4><span class="label label-default">Game Images</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Warcraft
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Starcraft
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Diablo
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
                                        Hearth Stone
                                    </a>
									</li>
                                    <li role="presentation">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Heroes of the Storm
                                    </a>
									</li>
                                </ul>
								<a name="steaminfo"></a>
                            </div>
							</div>
                            <div class="media-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a type="button" data-toggle="tooltip" data-placement="left" title="Go to Battle.net" href="https://us.battle.net/account/creation/tos.html" target="_blank">
										<span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
										<!---->Battle.net<!---->
										</a>
									<li>
									<li role="presentation">
										<a type="button" data-toggle="tooltip" data-placement="left" title="View Battle.net MPC Accounts" href="#">
										<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
										<!---->MPC Members<!---->
										</a>
									</li>
                                </ul>
                                <br />
                                <div class="page-header"><h3>MPC Briefing:</h3></div>
                                <br />
                                <small><p>&ensp;&ensp;&ensp;&ensp;&ensp;Here you will find the tools for playing on battle.net. Battle.net server that their products use to connect to. This connection allows players to play their games, and any interaction through the internet. The links provider here will take you to battle net's website, and allow you to create a login, or purchase downloadable games. There are other things included when visiting battle.net, but definitly going to need to create a login, or purchase one of their games, then submitting your email as an account. Be sure to have this set up, if you wish to play with MPC, with one of Blizzard's product gaming software. Everything can be purchased through battle.net.
</p></small>
                                <br />
                                <div class="page-header"><h4>Games Developed:</h4><a name="wowinfo"></a></div>
                                <div class="panel-group" id="blizzardaccordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="warcraftseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#blizzardaccordion" href="#warcraftcollapse-gaming" aria-expanded="false" aria-controls="warcraftcollapse-gaming">
                                            Warcraft Series 1994 - 2015
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="warcraftcollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="warcraftseries-gaming">
                                      <div class="panel-body">
                                          <div class="list-group">
                                          <a href="https://us.battle.net/account/creation/wow/signup/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft: 2004</h4>
                                            <p class="list-group-item-text">World of Warcraft is a massively multiplayer online role-playing game created in 2004 by Blizzard Entertainment. It is the fourth released game set in the fantasy Warcraft universe, which was first introduced by Warcraft: Orcs & Humans in 1994.</p>
                                          </a>
                                        </div>
                                          <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/burningcrusade/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft - The Burning Crusade: 2007</h4>
                                            <p class="list-group-item-text">Often referred to as TBC or BC, is the first expansion pack for the MMORPG World of Warcraft.</p>
                                          </a>
                                        </div>
                                          <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/wrath/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft - Wrath of the Lich King: 2008</h4>
                                            <p class="list-group-item-text">Often referred to as WotLK or Wrath, is the second expansion set for the Massively Multiplayer Online Role-Playing Game World of Warcraft, following The Burning Crusade</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/cataclysm/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft - Cataclysm: 2010</h4>
                                            <p class="list-group-item-text">Often referred to as Cataclysm or Cata, is the third expansion pack for the massively multiplayer online role-playing game World of Warcraft, following Wrath of the Lich King.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/mists/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft - Mist of Pandaria: 2012</h4>
                                            <p class="list-group-item-text">Colloquially referred to as Mists or MoP, is the fourth expansion set for the massively multiplayer online role-playing game World of Warcraft, following Cataclysm.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://us.battle.net/wow/en/warlords-of-draenor/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft - Warlords of Draenor: 2015</h4>
                                            <p class="list-group-item-text">It is the era of an Old Horde, forged with steel rather than fel blood. A union of great orc clans, the Iron Horde, tramples the planet Draenor beneath terrifying war machines. Azeroth falls next. Worlds uncounted will follow.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://us.battle.net/wow/en/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">World of Warcraft Official Website</h4>
                                            <p class="list-group-item-text">The official site containing news, trailers, gameplay videos, wallpapers, screen shots, and the official forums.</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="diabloseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#blizzardaccordion" href="#diablocollapse-gaming" aria-expanded="false" aria-controls="diablocollapse-gaming">
                                          Diablo 1996 - 2012<a name="sc2info"></a>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="diablocollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="diabloseries-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="https://us.battle.net/account/download/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Diablo 3 2012 </h4>
                                              <p class="list-group-item-text">Diablo III is an action role-playing video game developed and published by Blizzard Entertainment. It is the third installment in the Diablo franchise</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://us.battle.net/d3/en/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Diablo 3 Official Website </h4>
                                              <p class="list-group-item-text">Official site from Blizzard. Game information, news, screenshots, faq, videos and lore</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="starcraftseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#blizzardaccordion" href="#starcraftcollapse-gaming" aria-expanded="false" aria-controls="starcraftcollapse-gaming">
                                            Starcraft Series 1998 - 2015<a name="hearthstoneinfo"></a>
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="starcraftcollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="starcraftseries-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                            <a href="http://starcraft.wikia.com/wiki/StarCraft:_Brood_War" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Starcraft 2 - Hearth of the Swarm: 2013
                                                </h4>
                                                <p class="list-group-item-text">
                                                    StarCraft II: Heart of the Swarm is an expansion pack to the military science fiction real-time strategy game StarCraft II: Wings of Liberty by Blizzard Entertainment.
                                                </p>
                                            </a>
                                        </div>
                                        <div class="list-group">
                                            <a href="http://us.battle.net/sc2/en/legacy-of-the-void/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Starcraft 2 - Legacy of the Void (Beta): 2015
                                                </h4>
                                                <p class="list-group-item-text">
                                                    StarCraft II: Legacy of the Void is a planned stand alone expansion pack to the military science fiction real-time strategy game StarCraft II: Wings of Liberty, and the third part of the StarCraft II trilogy developed by Blizzard Entertainment.
                                                </p>
                                            </a>
                                        </div>
                                          <div class="list-group">
                                            <a href="http://us.battle.net/sc2/en/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Starcraft 2 Official Website
                                                </h4>
                                                <p class="list-group-item-text">
                                                   Wage war across the galaxy with three unique and powerful races. StarCraft II is a real-time strategy game from Blizzard Entertainment for the PC and Mac.
                                                </p>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="hearthstoneseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#blizzardaccordion" href="#hearthstonecollapse-gaming" aria-expanded="false" aria-controls="hearthstonecollapse-gaming">
                                            Hearth Stone Heroes of Warcraft: 2014<a name="herosofthestorminfo"></a>
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="hearthstonecollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hearthstoneseries-gaming">
                                      <div class="panel-body">
                                         <div class="list-group">
                                            <a href="https://eu.battle.net/account/download/?show=hearthstone" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                HearthStone Heroes of Warcraft: 2014
                                                </h4>
                                                <p class="list-group-item-text">Hearthstone: Heroes of Warcraft is a digital collectible card game developed by Blizzard Entertainment. It is free-to-play with unlimited paid content, and limited free content.</p>
                                            </a>
                                        </div>
                                        <div class="list-group">
                                            <a href="https://eu.battle.net/account/download/?show=hearthstone" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                HearthStone Official Website
                                                </h4>
                                                <p class="list-group-item-text">Hearthstone: Heroes of Warcraft is a digital collectible card game developed by Blizzard Entertainment. It is free-to-play with unlimited paid content, and limited free content.</p>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heroesofthestormseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#blizzardaccordion" href="#heroesofthestormcollapse-gaming" aria-expanded="false" aria-controls="heroesofthestormcollapse-gaming">
                                            Heroes of the Storm: 2015
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="heroesofthestormcollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heroesofthestormseries-gaming">
                                      <div class="panel-body">
                                         <div class="list-group">
                                            <a href="https://us.battle.net/shop/en/product/heroes-of-the-storm-founders-pack?-" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Heroes of the Storm: 2015
                                                </h4>
                                                <p class="list-group-item-text">Prepare for battle deep within the Nexus, the swirling trans-dimensional storm at the heart of all Blizzard games. Whether you’re already in the Heroes of the Storm beta test or you're a fresh recruit to the front lines, the Founder’s Pack is the perfect opportunity to enter a bold new realm of team-based hero brawls.</p>
                                            </a>
                                        </div>
                                        <div class="list-group">
                                            <a href="http://us.battle.net/heroes/en/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Heroes of the Storm Official Website
                                                </h4>
                                                <p class="list-group-item-text">
                                                    Enter Heroes of the Storm, a team brawler of heroic proportions starring your favorite Blizzard characters. Sign up for a chance to play in the beta test for PC/Mac.
                                                </p>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--tablist-->
                              <ul class="nav nav-pills pull-right">
								  <li role="presentation">
									<a href="#top">Streamers</a>
								  </li>
								  <li role="presentation">
									<a href="#top">Back to Top</a>
								  </li>
							  </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-heading">
                            <h3>Steam.com - Valve Corp. - Founded - 08/24/1996</h3>
						</div>
                        <div class="media">
                            <div class="media-body">
                                 <ul class="nav nav-pills">
								 <li role="presentation">
											<a type="button" data-toggle="tooltip" data-placement="left" title="Go to Steam" href="http://store.steampowered.com/about/" target="_blank">
												<span class="glyphicon glyphicon-hdd" aria-hidden="false"></span>
												<!---->Steam Site<!---->
											</a>
										</li>
								<li role="presentation">
										<a type="button" data-toggle="tooltip" data-placement="bottom" title="View Steam MPC Accounts" href="https://store.steampowered.com/login/?redir=checkout%2F%3Fpurchasetype%3Dupdatebillinginfo&purchasetype=updatebillinginfo&checkout=1&redir_ssl=1" target="_blank">
											<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
											<!---->MPC Steam<!---->
										</a>
									</li>
                                </ul>
                                     <br />
                                <div class="page-header">
                                    <h3>MPC Briefing:</h3>     
                                </div>
                                <small><p>Ultilizing Steam will allow yourself to connect with MPC through Steam buddy system. Locate our members, and begin playing the simliar games. Learn our tatics, and learn how to perform better as a team, or as a player. You can get the steam software from the original website at www.steam.com. Steam offers alot of downloadable games, and servers to connect to play these games. They offer some really good deals, and make sure to take advantage on the promotions that steam has to provider. They usually offer these deals in the Xmas, and Summer Seasons.</p></small>
                                    <br />
                                <div class="page-header"><h4>Games Developed:<a name="counterstrikeinfo"></a></h4></div>
                                <div class="panel-group" id="steamaccordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="gameseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#steamaccordion" href="#gamecollapse-gaming" aria-expanded="false" aria-controls="gamecollapse-gaming">
                                          Counter Strike: 1999 - 2012
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="gamecollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="gameseries-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="http://store.steampowered.com/app/730/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Counter Strike Global Offensive</h4>
                                            <p class="list-group-item-text">Counter-Strike: Global Offensive is an online tactical first-person shooter developed by Valve Corporation and Hidden Path Entertainment, who also maintained Counter-Strike: Source after its release.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://blog.counter-strike.net/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Counter Strike Official Website</h4>
                                            <p class="list-group-item-text">Counter-Strike progressed from a beta to a full release, it refined the classic gameplay that has come to define competitive shooters and produced a dedicated community that has followed the game for over a decade.</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="game2series-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#steamaccordion" href="#game2collapse-gaming" aria-expanded="false" aria-controls="game2collapse-gaming">
                                          Game number 2
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="game2collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="game2series-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Warcraft(RTS) - 11/24/1994 </h4>
                                            <p class="list-group-item-text">Published by Blizzard, and Interplay Entertainment. This game was the kick off to a popular game today... World of Warcraft.</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="game3series-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#steamaccordion" href="#game3collapse-gaming" aria-expanded="false" aria-controls="game3collapse-gaming">
                                          Game number 3
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="game3collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="game3series-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Warcraft(RTS) - 11/24/1994 </h4>
                                            <p class="list-group-item-text">Published by Blizzard, and Interplay Entertainment. This game was the kick off to a popular game today... World of Warcraft.</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--tablist-->
								<ul class="nav nav-pills pull-left">
								  <li role="presentation">
									<a href="#top">Streamers</a>
								  </li>
								  <li role="presentation">
									<a href="#top">Back to Top</a>
								  </li>
							  </u	l>
							  </div>
                            <div class="media-right">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
										<center>
                                        <img src="../pics/steam.png" alt="steam.png" class="img-responsive img-rounded media-object" id="gaming_valvepix" />
                                        <img src="../pics/valvelogo.jpg" alt="valvelogo.jpg" class="img-responsive img-rounded media-object" id="gaming_valvepix"/>
                                        <img src="../pics/valve-offices.jpg" alt="valve-offices.jpg" class="img-responsive img-rounded media-object" id="gaming_valvepix" />
                                        <small class="text-center"><p>Valve Office Lobby.</p></small>
										</center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div class="page-header">
                                            <h4>
                                            Currently Active:
                                            </h4>
                                        </div>
										<center>
                                        <img src="../pics/counterstrikegologo.PNG" alt="counterstrikegologo.PNG" class="img-responsive img-rounded" id="gaming_valvepix" />
										</center>
                                    </div>
                                </div>
                                <div class="row pull-right">
                                      <div class="page-header">
                                    <h4><span class="label label-default pull-right">Game Play Clips</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Counter Strike Global Offensive
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Grand Theft Auto V
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Metal Gear Solid V: The Phantom Pain
                                    </a>
                                    </li>
                                </ul>
                                </div>
                                <div class="row pull-right">
                                    <div class="page-header">
                                    <h4><span class="label label-default pull-right">Game Trailers</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Counter Strike Global Offensive
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Grand Theft Auto V
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Metal Gear Solid V: The Phantom Pain
                                    </a>
                                    </li>
                                </ul>
                                </div>
								<div class="row pull-right">
                                      <div class="page-header">
                                    <h4><span class="label label-default pull-right">Game Images</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Counter Strike Global Offensive
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Grand Theft Auto V
                                    </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Metal Gear Solid V: The Phantom Pain
                                    </a>
                                    </li>
                                </ul>
								<a name="origin"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-title">
                            <h3>Origin - EA Corp. - Founded - 08/24/1996</h3>
                        </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <div class="row text-center">
                                    <div class="col-lg-12">
                                        <center>
                                        <img src="../pics/eahq.PNG" alt="eahq.PNG" class="img-responsive img-rounded media-object" id="gaming_originpix" />
                                        <small class="text-center"><p>Origin Office Lobby.</p></small>
                                        <img src="../pics/originlogo.PNG" alt="originlogo.PNG" class="img-responsive img-rounded media-object" id="gaming_originpix" />
                                        <img src="../pics/victorygameslogo.jpg" alt="victorygameslogo.jpg" class="img-responsive img-rounded media-object" id="gaming_originpix" />
                                        </center>
                                        </div>
                                </div>
                                <div class="row text-center">
                                        <div class="page-header">
                                            <h4>
                                            Currently Active:
                                            </h4>
                                        </div>
                                    <div class="col-lg-12">
                                        <center>
                                        <img src="../pics/simcityimg.PNG" alt="simcityimg.PNG" class="img-responsive img-rounded media-object" id="gaming_originpix" />
                                        <img src="../pics/bf4img.PNG" alt="bf3img.PNG" class="img-responsive img-rounded media-object" id="gaming_originpix" />
                                        </center>
                                    </div>
                                </div>
                                      <div class="row">
                                      <div class="page-header">
                                    <h4><span class="label label-default pull-left">Game Play Clips</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Sim City
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Battlefield
                                    </a>
                                    </li>
                                </ul>
                                </div>
                                    <br />
										<div class="row">
                                      <div class="page-header">
                                    <h4><span class="label label-default pull-left">Game Trailers</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Sim City
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Battlefield 4
                                    </a>
                                    </li>
                                </ul>
                                </div>
								<div class="row">
                                      <div class="page-header">
                                    <h4><span class="label label-default pull-left">Game Images</span></h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
										<a href="#" type="button" role="group" aria-label="...">
											Sim City
										</a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#" type="button" role="group" aria-label="...">
											Battlefield 4
                                    </a>
                                    </li>
                                </ul>
								<a name="othercoinfo"></a>
                                </div>
                                    </div>
                            <div class="media-body">
                                 <ul class="nav nav-pills">
									<li role="presentation">
										<a type="button"  data-toggle="tooltip" data-placement="left" title="Go to Origin" href="https://www.origin.com/en-us/store/" target="_blank">
										<span class="glyphicon glyphicon-hdd" aria-hidden="false"></span>
										<!---->Origin Site<!---->
										</a>
									</li>
									<li role="presentation">
										<a type="button" data-toggle="tooltip" data-placement="bottom" title="View Steam MPC Accounts" href="#" target="_blank">
										<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
										<!---->MPC Origin<!---->
										</a>
									</li>
                                </ul>
                                     <br />
                                <div class="page-header">
                                    <h3>MPC Briefing:</h3>     
                                </div>
                                <small><p>Some text about Origin... Goes here in place for text to fill up the space in this room... rah rah rah rah.</p></small>
                                    <br />
                                <div class="page-header"><h4>Games Developed:<a name="simcityinfo"></a></h4></div>
                                <div class="panel-group" id="originaccordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="origingameseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#originaccordion" href="#origingamecollapse-gaming" aria-expanded="false" aria-controls="origingamecollapse-gaming">
                                          Sim City Series: 1989 - 2014<a name="battlefieldinfo"></a>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="origingamecollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="origingameseries-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="https://www.origin.com/en-us/store/buy/simcity-2013-/mac-pc-download/base-game/standard-edition?utm_campaign=origin-search-us-pbm-g-sim13-b&utm_medium=cpc&utm_source=google&utm_term=+sim%20+city%20+origins&sourceid=origin-search-us-pbm-g-sim13-b&gclid=Cj0KEQjwl_6oBRDHxNGz6ueJufMBEiQAvm_k_uJvX9o5c-t7M968lWZew3sRunctg8C7Sm-hGhigmcMaAk088P8HAQ" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Sim City: 2014</h4>
                                            <p class="list-group-item-text">SimCity is an open-ended city-building computer and console video game series originally designed by developer Will Wright. It is published by Maxis.(simcity.com)</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://www.simcity.com/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Sim City Official Website</h4>
                                            <p class="list-group-item-text">SimCity is an open-ended city-building computer and console video game series originally designed by developer Will Wright. It is published by Maxis.(simcity.com)</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="origingame2series-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#originaccordion" href="#origingame2collapse-gaming" aria-expanded="false" aria-controls="origingame2collapse-gaming">
                                          Battlefield Series: 2002 - 2015
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="origingame2collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="origingame2series-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="https://www.origin.com/en-us/store/buy/battlefield-3/pc-download/base-game/standard-edition" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Battlefield 3: 2011</h4>
                                            <p class="list-group-item-text">Battlefield 3 is a first-person shooter video game developed by EA Digital Illusions CE and published by Electronic Arts. It is a direct sequel to 2005's Battlefield 2, and the eleventh installment in the Battlefield franchise.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="https://www.origin.com/en-us/store/buy/battlefield-4/pc-download/base-game/standard-edition?utm_campaign=origin-search-us-pbm-g-bf4-e&utm_medium=cpc&utm_source=google&utm_term=battlefield%204%20origin&sourceid=origin-search-us-pbm-g-bf4-e&gclid=Cj0KEQjwl_6oBRDHxNGz6ueJufMBEiQAvm_k_u4ShbLgzM6RBc02iolwjFt7gGDEMSJGBoZdCDz2aEAaAhaY8P8HAQ" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Battlefield 4: 2013</h4>
                                            <p class="list-group-item-text">Battlefield 3 is a first-person shooter video game developed by EA Digital Illusions CE and published by Electronic Arts. It is a direct sequel to 2005's Battlefield 2, and the eleventh installment in the Battlefield franchise.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://www.battlefield.com/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Battlefield Official Website</h4>
                                            <p class="list-group-item-text">The official Battlefield franchise site. Find the latest news, blogs, trailers, and images from all of the Battlefield games from DICE and EA.</p>
                                          </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div><!--tablist-->
									<ul class="nav nav-pills pull-right">
									  <li role="presentation">
										<a href="#top">Streamers</a>
									  </li>
									  <li role="presentation">
										<a href="#top">Back to Top</a>
									  </li>
								  </ul>
							  </div>
                        </div>
                    </div>
                </div>  
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-heading">
                            <h3>Other Games, Other Companies</h3>
                    </div>
                        <div class="media">
                            <div class="media-body">
                                 <ul class="nav nav-pills">
									<li role="presentation">
										<a type="button"  data-toggle="tooltip" data-placement="left" title="Find us on other games!" href="http://store.steampowered.com/about/" target="_blank">
										<span class="glyphicon glyphicon-hdd" aria-hidden="false"></span>
										<!---->Other Games Site<!---->
										</a>
									</li>
									<li role="presentation">
										<a type="button" data-toggle="tooltip" data-placement="bottom" title="View Our MPC Accounts" href="https://store.steampowered.com/login/?redir=checkout%2F%3Fpurchasetype%3Dupdatebillinginfo&purchasetype=updatebillinginfo&checkout=1&redir_ssl=1" target="_blank">
										<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
										<!---->MPC Other Games<!---->
										</a>
									</li>
								</ul>
                                     <br />
                                <div class="page-header">
                                    <h3>MPC Briefing:</h3>     
                                </div>
                                <small><p>MPC participates in other mobile, and third party software developing companies that create video games for the home computer. Check out here what else is available that MPC can help you with.</p></small>
                                    <br />
                                <div class="page-header"><h4>Games Developed:<a name="leagueoflegendsinfo"></a></h4>
                                </div>
                                <div class="panel-group" id="otheraccordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="gameseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#otheraccordion" href="#othergamecollapse-gaming" aria-expanded="false" aria-controls="othergamecollapse-gaming">
                                          League of Legends: 2009<a name="clashofclansinfo"></a>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="othergamecollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="othergameseries-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="https://signup.leagueoflegends.com/en/signup/redownload" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">League of Legends: 2009</h4>
                                            <p class="list-group-item-text">League of Legends is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and Mac OS X.</p>
                                          </a>
                                      </div>
                                         <div class="list-group">
                                          <a href="http://na.leagueoflegends.com/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">League of Legends Offical Website</h4>
                                            <p class="list-group-item-text">Official site. Features, media, screenshots, FAQs, and forums</p>
                                          </a>
										</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="othergame2series-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#otheraccordion" href="#othergame2collapse-gaming" aria-expanded="false" aria-controls="othergame2collapse-gaming">
                                          Clash of Clans: 2012
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="othergame2collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="othergame2series-gaming">
                                      <div class="panel-body">
                                           <div class="list-group">
                                              <a href="http://cdn.getgamesdomain.com/c?x=BoQZhRKFPzh2Ns7KNQUJGkaGpGz9sGCcN0CP3PDWz00%3D&c=UcMVfkcC9vnnVvy%2BzcCdxdo58f6eQ7Q7djMC7fHAVjznDXvZdq4D6fb394z74RpKNw096fhFpgdjOwyyNCRMkg%3D%3D&downloadAs=Clash-of-Clans.exe&fallback_url=http%3A%2F%2Fsoftdownload3.com%2Fs4m%2Fsoft%2FClash-of-Clans.exe" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">Clash of Clans</h4>
                                                <p class="list-group-item-text">Clash of Clans is a well animated addictive strategy game where your aim is to build a village, train troops and battle with thousands of other players online. </p>
                                              </a>
                                          </div>
                                          <div class="list-group">
                                              <a href="http://clashofclanspcfree.com/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">Clash of Clans Offical Website</h4>
                                                <p class="list-group-item-text">
Clash of Clans is a 2012 freemium mobile MMO strategy video game developed and published by Supercell, a video game company based in Helsinki, Finland. The game was released for iOS platforms on August 2, 2012</p>
                                              </a>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--tablist-->
								<ul class="nav nav-pills pull-left">
									  <li role="presentation">
										<a href="#top">Streamers</a>
									  </li>
									  <li role="presentation">
										<a href="#top">Back to Top</a>
									  </li>
								  </ul>
								</div>
                            <div class="media-right">
                                <div class="row">
                                    <div class="page-header text-center">
                                        <h4>
                                        Currently Active:
                                        </h4>
                                    </div>
									<center>
                                    <img src="../pics/leagueoflegendspic.png" alt="leagueoflegendspic.png" class="img-responsive img-rounded media-object" id="gaming_otherpix" />
                                    <img src="../pics/clashofclanspic.PNG" alt="clashofclanspic.PNG" class="img-responsive img-rounded media-object" id="gaming_otherpix" />
									</center>
                                </div>
								<br />
                                    <div class="row">
                                      <div class="page-header">
										<h4><span class="label label-default pull-right">Game Play Clips</span></h4>
										</div>
										<ul class="nav nav-pills nav-stacked">
											<li role="presentation">
												<a href="#" type="button" role="group" aria-label="...">
													League of Legends
												</a>
											</li>
											<li role="presentation">
											<a href="#" type="button" role="group" aria-label="...">
													Clash of Clans
											</a>
											</li>
										</ul>
                                </div>
								<div class="row">
                                      <div class="page-header">
											<h4><span class="label label-default pull-right">Game Trailers</span></h4>
										</div>
									<ul class="nav nav-pills nav-stacked">
										<li role="presentation">
											<li role="presentation">
												<a href="#" type="button" role="group" aria-label="...">
													League of Legends
												</a>
											</li>
											<li role="presentation">
											<a href="#" type="button" role="group" aria-label="...">
													Clash of Clans
											</a>
											</li>
									</ul>
                                </div>
								<div class="row">
                                      <div class="page-header">
											<h4><span class="label label-default pull-right">Game Images</span></h4>
										</div>
									<ul class="nav nav-pills nav-stacked">
										<li role="presentation">
											<li role="presentation">
												<a href="#" type="button" role="group" aria-label="...">
													League of Legends
												</a>
											</li>
											<li role="presentation">
											<a href="#" type="button" role="group" aria-label="...">
													Clash of Clans
											</a>
											</li>
									</ul>
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
    </body>
    </html>
