
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
				<div class="well">
					<ul class="nav nav-pills">
						<li role="presentation">
							<a href="../gaming/index.php">
								<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
									MPCGaming
							</a>
						</li>
						<li role="presentation">
							<a href="../gaming/ventrilolive.php">
								<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
									Ventrilo
							</a>
						</li>
						<li role="presentation">
							<a href="../gaming/mpcstream.php">
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
							<a href="../gaming/gamelist.php">
								<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
									PC Games
							</a>
						</li>
						<li role="presentation">
							<a href="../gaming/gamingservice.php">
								<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								GSP
							</a>
						</li>
						<li role="presentation">
							<a href="../gaming/developers.php"> 
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
									Game Developers
							</a>
						</li>
						<li role="presentation" class="disabled">
							<a href="#">
								<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
									The Dojo
							</a>
						</li>	
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#dojoinfo" aria-controls="dojoinfo" role="tab" data-toggle="tab">
								MPC Dojo
							</a>
						</li>
						<li role="presentation">
							<a href="#dojorts" aria-controls="dojorts" role="tab" data-toggle="tab">
								Real Time Strategies
							</a>
						</li>
						<li role="presentation">
							<a href="#dojofps" aria-controls="dojofps" role="tab" data-toggle="tab">
								First Person Shooter
							</a>
						</li>
						<li role="presentation">
							<a href="#dojommorpg" aria-controls="settings" role="tab" data-toggle="tab">
								MMORPGs
							</a>
						</li>
						<!-- <li role="presentation"><a href="#" aria-controls="#" role="tab" data-toggle="tab"></a></li>-->
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="dojoinfo">
							<div class="page-header">
								<h1 style="margin-left: 15px">
									MPC Dojo - Sharpening Skills, and Knowledge.
								</h1>
								<small>
								<p>&ensp;&ensp;&ensp;&ensp;&ensp;The role of the dojos is to help MPC members develop their skill, and practice their talents with a wide range of friends. This community will have a station known as the dojo to keep track of information about a particular game. The dojo will host tournaments, and serve as a school purpose to teach new students. MPC is known for teaching because it's our code to help others. This section you will see some of the games we play, and some brief information that the dojo will have to offer the user. The Dojo will consist of the types of games, and information about the game, but MPC members will have access to more information such as: strategies, guides, information, group practices, instructor, team strategy, and colleagues. Join MPC's team, and  get the access.</p>
								</small>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dojorts">
							<div class="page-header text-center">
								<h1>
									RTS
								</h1>
								<small>
									<p>Learn the basics to FPS with hot-keys, macros, and concepts of the characters in the game. Build up the knowledge for better performance of the game, and clan practices for tournaments, or leagues. After selecting the game, newer options will appear as topics of all the aspects of the game. Communication skills, and team strategies, or how teams are speaking in chat during the tournament, or league game; each word takes up a useful millisecond, and confusion during combat. This will include maps, screen shot, video examples, and MPC team strategy guides. Find the clan leader, and get enlisted for war. Godspeed.<a name="infodojobattlefield4top"><a/></p>
								</small>
								<center>
								<div class="btn-group" role="group" aria-label="...">
									<!--<a type="button" class="btn btn-default" href="#infodojobattlefield4top">Battlefield 4</a>-->
									<a type="button" class="btn btn-default" href="#infodojosc24top">Starcraft 2</a>
									<!--<a type="button" class="btn btn-default" href="#infodojohalo4top">Another Link</a>-->
								</div>
								</center>
							</div>
							<!--<div class="row"><!--media
								<div class="media">
									<div class="media-left" style="margin-left: 25px;">
										<img src="../pics/b4icon.PNG" class="img-responsive img-rounded media-object" alt="bf4.png"  style="width: 200px; height: 100px;" />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">Clan Wars</li>
											<li class="list-group-item list-group-item-success">Instructors</li>
											<li class="list-group-item list-group-item-success">Daily Players</li>
											<li class="list-group-item list-group-item-success">Team Games</li>
											<li class="list-group-item list-group-item-success">Large Active Clan</li>
											<li class="list-group-item list-group-item-success">Friendly Atmosphere</li>
											<li class="list-group-item list-group-item-success">Ventrilo Room</li>
										</ul>
									</div>
									<div class="media-body">
										<div class="well">
											<div class="page-header">
												<h1>
													Battlefield 4
												</h1>
											</div>
											<small>
												content goes here
											</small>
											<br />
											<div class="btn-group" role="group" aria-label="...">
												<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
												<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
												<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
												<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
												<div class="btn-group" role="group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															 MPC Videos
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Heists</a></li>
															<li><a href="#">Armored Robbery</a></li>
															<li><a href="#">Races</a></li>
															<li><a href="#">and more.</a></li>
														</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>-->
							<div class="row">
								<div class="media">
									<div class="media-body">
										<div class="well">
											<div class="row">
												<div class="page-header">
													<h1>
														StarCraft 2
													</h1>
												</div>
												<small>
													<p>&ensp;&ensp;&ensp;&ensp;&ensp; Starcraft 2: Wings of Liberty was the second game MPC enrolled into, and grew within.
														<a name="infodojohalo4top"></a>
													</p>
												</small>
											</div>
											<div class="row">
												<div role="tabpanel">
													<div class="panel panel-default">
														<div class="panel-heading">
															  <ul class="nav nav-tabs" role="tablist">
																<li role="presentation" class="active">
																	<a href="#infodojowoltab" aria-controls="infodojowoltab" role="tab" data-toggle="tab">
																		WOL
																	</a>
																</li>
																<li role="presentation">
																	<a href="#infodojohotstab" aria-controls="infodojohotstab" role="tab" data-toggle="tab">
																		HOTS
																	</a>
																</li>
																<li role="presentation">
																	<a href="#infodojolotvtab" aria-controls="infodojolotvtab" role="tab" data-toggle="tab">
																		LOTV
																	</a>
																</li>
																<li role="presentation">
																	<a href="#infodojosc2mpctab" aria-controls="infodojosc2mpctab" role="tab" data-toggle="tab">
																		MPC
																	</a>
																</li>
															</ul>
														 </div>
														<div class="panel-body">
															<div class="tab-content">
																<div role="tabpanel" class="tab-pane fade in active" id="infodojowoltab">
																	<div class="well">
																		<div class="row">
																			<div class="page-header">
																				<h4>
																					StarCraft 2: Wings of Liberty
																				</h4>
																			</div>
																			<div class="panel panel-success">
																				<div class="panel panel-heading">
																					<div class="embed-responsive embed-responsive-16by9 text-center">
																						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/r7d5XheWiBk"></iframe>
																					</div>
																				</div>
																				<div class="panel-body panel-success">
																					<small>
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp; Starcraft 2: Wings of Liberty was the first version to be released on PC. The Multiplayer is a reactionary, and competitive game of strategy, timing, and "micro" intense situations.</p>
																						<br />
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp; MPC is willing to help any player develop their skills. Find the officer, or request to be recruited on the forums for the SC2 section by leaving the player's email, or in game ID. It will display a number like "123", and to find a player's character code.</p>
																						<br />																							
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp; Wings of Liberty covers up most of the game, and a player is allowed three different races to select. Terran, and which is known as the human race. Zerg, a slimy superior in numbers race. Protoss, a high-tech advance alien race from another galaxy.</p>
																					</small>
																					<small>
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp; MPC doesn't participate in Wings of libery anymore, but get a hold of us and we shall invite you into Heart of the Swarm.</p>
																					</small>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="panel panel-success">		
																				<div class="panel-body">
																					<div class="well">
																						<center>
																						<div class="btn-group" role="group" aria-label="...">
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoterranunitwolbtn">Terran</a>
																							<div class="modal fade" id="infodojoterranunitwolbtn" tabindex="-1" role="dialog" aria-labelledby="infodojoterranunitwollabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojoterranunitwollabel">Terran Units (WOL)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OTVgBKDSgtw"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>																								
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojozergunitwolbtn">Zerg</a>
																							<div class="modal fade" id="infodojozergunitwolbtn" tabindex="-1" role="dialog" aria-labelledby="infodojozergunitwollabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojozergunitwollabel">Zerg Units (HOTS)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7lxdd5inCYU"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>																								
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoprotossunitwolbtn">Protoss</a>
																							<div class="modal fade" id="infodojoprotossunitwolbtn" tabindex="-1" role="dialog" aria-labelledby="infodojoprotossunitwollabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojoprotossunitwollabel">Protoss (HOTS)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZKqV0NvbiXI"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>
																						</div>
																						</center>
																					</div>																						
																				</div>
																			</div>
																		</div>
																	</div>																																																																						
																</div>
																<div role="tabpanel" class="tab-pane fade" id="infodojohotstab">
																	<div class="well">
																		<div class="row">
																			<div class="page-header">
																				<h4>
																					StarCraft 2: Heart of the Storm
																				</h4>
																			</div>
																			<div class="panel panel-success">
																				<div class="panel panel-heading">
																					<div class="embed-responsive embed-responsive-16by9 text-center">
																						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MVbeoSPqRs4"></iframe>
																					</div>
																				</div>
																				<div class="panel-body panel-success">
																					<small>
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp;This is the most active game in Starcraft 2 series. Find us on the forums, and begin playing with MPC Members for competition, or ally up for team league games. The Dojo will consist of training videos, map positioning, unit composition, prioritizing targets, calculating risks, managing income, theories, meta tactics, and more.</p>
																						<br />
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp;Get trained, and practice frequently for clan wars for MPC. Clan wars is live on stream, and hosted weekly. Get signed up, and get trained through the MPC dojo today. Find members to gain experience, and learn what they have to offer. It's going to make a huge impact on a player's gaming skill.</p>
																						<br />
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp;For starters, learn the new units, and how they operate during combat. Here's some brief videos of the new units in Heart of the Swarm.</p>
																					</small>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="panel panel-success">		
																				<div class="panel-body">
																					<div class="well">
																						<center>
																						<div class="btn-group" role="group" aria-label="...">
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoterranunithotsbtn">Terran</a>
																							<div class="modal fade" id="infodojoterranunithotsbtn" tabindex="-1" role="dialog" aria-labelledby="infodojoterranunithotslabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojoterranunithotslabel">Terran Units (HOTS)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bQ3A7i3Vpxk"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>																								
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojozergunithotsbtn">Zerg</a>
																							<div class="modal fade" id="infodojozergunithotsbtn" tabindex="-1" role="dialog" aria-labelledby="infodojozergunithotslabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojozergunithotslabel">Zerg Units (HOTS)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BW6ycxol5kI"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>																								
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoprotossunithotsbtn">Protoss</a>
																							<div class="modal fade" id="infodojoprotossunithotsbtn" tabindex="-1" role="dialog" aria-labelledby="infodojoprotossunithotslabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojoprotossunithotslabel">Protoss (HOTS)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9lmQAJvpFl8"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>
																						</div>
																						</center>
																					</div>																						
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane fade" id="infodojolotvtab">
																	<div class="well">
																		<div class="row">
																			<div class="page-header">
																				<h4>
																					StarCraft 2: Legacy of the Void (Beta)
																				</h4>
																			</div>
																			<div class="panel panel-success">
																				<div class="panel panel-heading">
																					<div class="embed-responsive embed-responsive-16by9 text-center">
																						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RjQ5gKbof_A"></iframe>
																					</div>
																				</div>
																				<div class="panel-body panel-success">
																					<small>
																						<p>&ensp;&ensp;&ensp;&ensp;&ensp; Starcraft 2: Legacy of the Void is still in beta testing, and MPC has been selected to participate.</p>																			
																					</small>																					
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="panel panel-success">		
																				<div class="panel-body">
																					<div class="well">
																						<center>
																						<div class="btn-group" role="group" aria-label="...">
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoterranunitlotvbtn">Terran</a>
																							<div class="modal fade" id="infodojoterranunitlotvbtn" tabindex="-1" role="dialog" aria-labelledby="infodojoterranunitlotvlabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojoterranunitlotvlabel">Terran Units (LotV)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NaKT0YQSJ9I"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>																								
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojozergunitlotvbtn">Zerg</a>
																							<div class="modal fade" id="infodojozergunitlotvbtn" tabindex="-1" role="dialog" aria-labelledby="infodojozergunitlotvlabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojozergunitlotvlabel">Zerg Units (LotV)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LkVMd1-ZyM8"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>																								
																							<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoprotossunitlotvbtn">Protoss</a>
																							<div class="modal fade" id="infodojoprotossunitlotvbtn" tabindex="-1" role="dialog" aria-labelledby="infodojoprotossunitlotvlabel" aria-hidden="true">
																								 <div class="modal-dialog">
																									<div class="modal-content">
																										 <div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																												<h4 class="modal-title" id="infodojoprotossunitlotvlabel">Protoss (LotV)</h4>
																										 </div>
																										 <div class="modal-body">
																											<div class="well">
																												<div class="embed-responsive embed-responsive-16by9">
																													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3tKHSrkilGY"></iframe>
																												</div>
																											</div>
																										 </div>
																										 <div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																										 </div>
																									</div>
																								</div>
																							</div>
																						</div>
																						</center>
																					</div>																						
																				</div>
																			</div>
																		</div>
																	</div>	
																</div>
																<div role="tabpanel" class="tab-pane fade" id="infodojosc2mpctab">
																	<div class="row">
																		<div class="well">
																			<div class="page-header">
																				<h4>
																					Finding The Owner's Battle-Tag ID
																				</h4>
																			</div>
																			<ul class="list-group">
																				<li role="presentation">
																					Look bottom right of screen near the time clock.
																				</li>
																				<li role="presentation">
																					Two button to the right is the "friends" tab.
																				</li>
																				<li role="presentation">
																					Click on the "add friend" button.
																				</li>
																				<li role="presentation">
																					Click on "character friend".
																				</li>
																				<li role="presentation">
																					At the bottom of that window, the player's character is a number.
																				</li>
																				<li role="presentation">
																					I.E. "Acidsnake#1298
																				</li>
																			</ul>
																			<small>
																				<p>&ensp;&ensp;&ensp;&ensp;&ensp; Pass around the Player ID, and same for reaching out to MPC. Look for the MPC Page to add them to the buddy list system for Battle.net Launcher. Keep in touch, and have some fun.</p>
																			</small>
																		</div>																
																	</div>
																</div>
															</div>
														</div>
													 </div>
												</div>
											</div>
											<div class="btn-group" role="group" aria-label="...">
												<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
												<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
												<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
												<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
												<div class="btn-group" role="group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															 MPC Videos
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Heists</a></li>
															<li><a href="#">Armored Robbery</a></li>
															<li><a href="#">Races</a></li>
															<li><a href="#">and more.</a></li>
														</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="media-right" style="margin-right: 25px;">
										<img src="../pics/starcraft2-heart-of-the-swarm-logo.jpg" class="img-responsive img-rounded media-object" alt="starcraft2-heart-of-the-swarm-logo" style="width: 200px; height: 100px;"  />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">Clan Wars</li>
											<li class="list-group-item list-group-item-success">Instructors</li>
											<li class="list-group-item list-group-item-success">Daily Players</li>
											<li class="list-group-item list-group-item-success">Team Games</li>
											<li class="list-group-item list-group-item-success">Large Active Clan</li>
											<li class="list-group-item list-group-item-success">Friendly Atmosphere</li>
											<li class="list-group-item list-group-item-success">Ventrilo Room</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dojommorpg">
							<div class="page-header text-center">
								<h1>
									Massive Multi-player Online Role Playing Game
								</h1>
								<small>
									<p>Learn the basics to mmorpg's with hotkeys, macros, and concepts of the characters in the game. Build up the knowledge for better performance of the game, and the mini-games in the M.M.O.R.P.G. Game. After selecting the game, newer options will appear as topics of all the aspects of the game. Communication skills, and abbreviations found, or spoken in chat of the game. Team minimized communication to preserve time, and confusion during battles. This will include maps, screen shot, video examples, and MPC team strategy guides. Assigned Game World Jobs, and Professions to produce income for the clan. Using the in game currency to help new members develop their skills, or income rate for that character to help the guild support additional members.<a name="infodojogtavtop"><a/></p>
								</small>
								<center>
									<div class="btn-group" role="group" aria-label="...">
										<a type="button" class="btn btn-default" href="#infodojogtavtop">Grand Theft Auto V: Online</a>
										<!--<a type="button" class="btn btn-default" href="#infodojoswor">StarWars: Old Republic</a>-->
										<a type="button" class="btn btn-default" href="#infodojowow">World of Warcraft</a>
									</div>
								</center>
							</div>
							<div class="row"><!--media-->
								<div class="media">
									<div class="media-body">
										<div class="well">
											<div class="page-header">
												<h1>
													Grand Theft Auto V: (GTA Online)
												</h1>
											</div>
											<div role="tabpanel">
												  <!-- GTAV tabs -->
												<div class="panel panel-default">
													 <ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active">
															<a href="#infodojogtavgeneraltab" aria-controls="infodojogtavgeneraltab" role="tab" data-toggle="tab">
																GTAV Online
															</a>
														</li>
														<li role="presentation">
															<a href="#infodojogtavassaulttab" aria-controls="infodojogtavassaulttab" role="tab" data-toggle="tab">
																Assault
															</a>
														</li>
														<li role="presentation">
															<a href="#infodojogtavaheist" aria-controls="infodojogtavaheist" role="tab" data-toggle="tab">
																Heist Robbery
															</a>
														</li>
														<li role="presentation">
															<a href="#infodojogtavracetab" aria-controls="settings" role="tab" data-toggle="tab">
																Racing
															</a>
														</li>
													</ul>
													<div class="tab-content">
														<div role="tabpanel" class="tab-pane active fade in" id="infodojogtavgeneraltab">
															<div class="row">
																<div class="well">
																	<div class="page-header">
																		<h4>
																			Grand Theft Auto: Online
																		</h4>
																	</div>
																	<small>
																		<p>&ensp;&ensp;&ensp;&ensp;&ensp;Grand Theft Auto Online, consists of open joining other friends into groups to form "sessions" based in the same map of GTA V. These sessions are made up of 30 players for the PC, and used to select the players for the groups, and earn in game funds to make additional purchases in the game. Players may:</p>
																	</small>
																		<ul class="list-group" style="margin-left: 25px;">
																			<li role="presentation">Travel around the World</li>
																			<li role="presentation">Interact with the Map at will</li>
																			<li role="presentation">Take part in many game play activities.</li>
																			<li role="presentation">Assaults on Local Gangs</li>
																			<li role="presentation">Robbing armored trucks</li>
																			<li role="presentation">Challenging others in street races</li>
																			<li role="presentation">Team work.</li>
																		</ul>
																	<small style="margin-right: 55px;">
																		<p>&ensp;&ensp;&ensp;&ensp;&ensp;Aside from the free roam aspect, the online feature also includes several localized performances, also known as "jobs" inside the game, and that are played in separate sessions independent from the larger open world; players partaking in these jobs will not be visible to, and cannot interact with players occupying the open world, even if they inhabit the same location at the same time, and they are not part together in a single group, or secession... then they will not be able to help each other. These jobs include: death-matches, races, sports activities, and battle-royal survival game, or cooperative missions that were list above. As players increase the rank of their character in GTAVOnline, more items will be unlocked for purchase with the in game currency system. Special bonuses are also available for players who reach Rank 100, or higher. Be sure to meet up, and join MPC to gain experience, knowledge, and assistance for successful job for more income for the character. The game allows the players to plan, prepare, and execut the multi-tiered Heists across Los Santos, and the Blaine County through a series of new missions organized by Lester Crest, Ron Jakowski, and a new character only known as Agent 14.<a name="infodojoswor"></a></p>
																	</small>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="infodojogtavassaulttab">
															<div class="row">
																<div class="well">
																		<div class="page-header">
																			<h4>
																				Grand Theft Auto Online: Assault
																			</h4>
																		</div>
																		<div class="row">
																		<small>
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;There are around 52 gang attacks on the map, and a player can make around $2000 per attack picking up crates. Along with the cash, you also get RP, ammo, and weapons. Party up with friends, and let the rival gangs know how to show little respect. GTAV Online released Gang Attacks as a side mission, and can be seen in during the free mode. There are various enemies to face from street gangs, and then to mercenaries personnel. Defeating the gangs will result in the gang's leader sending the player a threatening text message for a bounty fund. The gang attacks are released after level 18, and done through a phone call from Martin Madrazo. Simple task mission, and after it's completed then the player may do side missions for them.</p>
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;When the player runs to a wide red circle on the mini-map, then enemies will come towards the players, and then if the player pulls a fire-arm, and begins to shoot, the gang will begin to defend themselves. The Gang Attack mode is now triggered, and can be noticed easily as the icons on the radar will disappear, and the battle begins. Some zones will only have a certain trigger of event, and walking into a edge of the perimeter. Players must kill about 15-30 gang members, and counter clock will time the event; and the amount of enemies remaining. During the event the player will come across weapons and ammo, snacks for health restoration, and money crates. They can be used during battle, or sometimes high level weaponry that'll really pack a punch.</p>
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;enemy strength, and weapon spawn will change on the rank of the player that started the gang attack. The higher the rank, the more challenging the enemy will become with stronger attack power from the weapons they carry. Players from the outside in the free world will not be able to help the player that is in the gang attack at any time until that player has concluded the result of that gang attack side mission. The player in the gang war is free to leave the situation at any time by stepping outside the boundaries, and a message will pop up stating that leaving will result in a forfeit. Each win will result increase of RP by 500, and if other players join together to start a gang attack as a group, then the RP will rise along with the amount of players.</p>
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;Gang Attack can be replayed as often as the player(s) chooses, and on the radar will display wide red circles indicating locations at certain times of the day; green dots represent that the player has completed that Gang Attack before. 1 Gang is triggered between one of the following times:</p>
																			<ul class="list-group">
																				<li role="presentation">20:00 to 04:00</li>
																				<li role="presentation">04:00 to 12:00</li>
																				<li role="presentation">12:00 to 20:00</li>
																			</ul>
																		</small>
																	</div>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="infodojogtavaheist">
															<div class="row">
																<div class="well">
																	<div class="page-header">
																		<h4>
																			Grand Theft Auto Online: Heists
																		</h4>
																	</div>
																	<small>
																	<p>&ensp;&ensp;&ensp;&ensp;&ensp;Heists came out with Grand Theft Auto V as a four player cooperative experience for GTA Online, and giving the players the chance to team up for a robbery that requires teamwork. Each role has a specific task, and strategic approach to complete the over-all mission of the Heist. This is a fun part of the game, and can be foiled if one of the team members makes an accident move, or the police to catch the players in a tight situation to get out of. With good communication, and coordination is the key for a successful mission, and the players are awarded large lump some of money.</p>
																	<p><b>Plan, Prepare, Execute</b> - Online Heist span numerous missions featuring new game-play, vehicles, weapons, and scenarios to test a team’s full set of skills: from computer hacking to stealth infiltration, precision driving to aerial dogfighting, sniping, skydiving and much more.</p>
																	<p><b>Player Teams, Ways to Play</b> - Choose your roles and strategic to complete each stage of a Heist, with tight communication and coordination the key to success. Some missions will require the team to work as a single unit, while others will break the team into separate roles to complete key objectives. Replay each Heist to experience a different perspective on the action, and complete Elite Challenges for extra cash.</p>
																	<p><b>Additional New Adversary Modes</b> - Brings new kinds of competition to GTA Online  while new Daily Objectives, and other Freemode activities bring chaos to the streets of Los Santos, and Blaine County.</p>
																	<p><b>Assemble The Team</b> - Create a Crew, or join existing Crews at the RockStar "Social Club" to earn additional RP rewards during the game play.</p>
																	</small>
																	
																	<div class="row">
																		<div class="panel panel-default">
																			<div class="col-xs-6">
																				<div class="embed-responsive embed-responsive-16by9">
																				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R9FKgfjxPZ4"></iframe>
																				</div>
																			</div>
																			<div class="col-xs-6">
																				<img src="../pics/gtavheistimg.png" alt="gtavheistimg.png" class="img-responsive img-rounded" style="height: 225px; width: 400px;" />
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="infodojogtavracetab">
															<div class="row">
																<div class="well">
																	<div class="page-header">
																		<h4>
																			Grand Theft Auto Online: Racing
																		</h4>
																		<small>
																			<p>Testing....</p>
																		</small>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="btn-group" role="group" aria-label="...">
												<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
												<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
												<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
												<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
												<div class="btn-group" role="group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															 MPC Videos
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Heists</a></li>
															<li><a href="#">Armored Robbery</a></li>
															<li><a href="#">Races</a></li>
															<li><a href="#">and more.</a></li>
														</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="media-right" style="margin-left: 25px;">
										<img src="../pics/gtavicon.png" class="img-responsive img-rounded media-object" alt="../pics/gtavicon.png"  style="width: 100px; height: 100px;" />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">Training</li>
											<li class="list-group-item list-group-item-success">Rewards</li>
											<li class="list-group-item list-group-item-success">MPC Colleagues</li>
											<li class="list-group-item list-group-item-success">Welcoming Community</li>
											<li class="list-group-item list-group-item-success">Coordinated Ops</li>
											<li class="list-group-item list-group-item-success">Fun and Entertainment</li>
										</ul>
									</div>
								</div>
							</div>
								<!--<div class="row">
									<div class="media">
										<div class="media-body">
											<div class="well">
												<div class="page-header">
													<h1>
														StarWars: The Old Republic
													</h1>
												</div>
												<small>
													<p>A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.<a name="infodojowow"></a></p>
													
												</small>
												<br />
												<div class="btn-group" role="group" aria-label="...">
													<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
													<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
													<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
													<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
													<div class="btn-group" role="group">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																 MPC Videos
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Heists</a></li>
																<li><a href="#">Armored Robbery</a></li>
																<li><a href="#">Races</a></li>
																<li><a href="#">and more.</a></li>
															</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="media-right" style="margin-right: 25px;">
											<img src="../pics/starwarsoldrepublicicon.png" class="img-responsive img-rounded media-object" alt="starwarsoldrepublicicon.png" style="width: 100px; height: 100px;"  />
											<small>
												<p>MPC Member</p>
												<p><b>Benefits</b></p>
											</small>
											<ul class="list-group">
												<li class="list-group-item list-group-item-success">text</li>
												<li class="list-group-item list-group-item-success">text</li>
												<li class="list-group-item list-group-item-success">text</li>
												<li class="list-group-item list-group-item-success">text</li>
												<li class="list-group-item list-group-item-success">text</li>
											</ul>
										</div>
									</div>
								</div>-->
							<div class="row">
								<div class="media">
									<div class="media-left" style="margin-left: 25px;">
										<img src="../pics/wowicon.png" class="img-responsive img-rounded media-object" alt="wowicon.png" style="width: 100px; height: 100px;" />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">Training for PVP</li>
											<li class="list-group-item list-group-item-success">Guild Rewards</li>
											<li class="list-group-item list-group-item-success">Guild "Buffs"</li>
											<li class="list-group-item list-group-item-success">MPC Colleagues</li>
											<li class="list-group-item list-group-item-success">RBG Synchronized Strategies</li>
											<li class="list-group-item list-group-item-success">Welcoming Community</li>
											<li class="list-group-item list-group-item-success">Coordinated Arena Teams</li>
										</ul>
									</div>
									<div class="media-body">
										<div class="well">
											<div class="page-header">
												<h1>
													World of Warcraft
												</h1>
											</div>
											<div class="row" style="padding-bottom: 15px;">
												<small>
													<p>What is World of Warcraft? World of Warcraft is an online game where players from around the world assume the roles of heroic fantasy characters and explore a virtual world full of mystery, magic, and endless adventure. So much for the short answer! If you’re still looking for a better understanding of what World of Warcraft is, this page and the Beginner’s Guide are the right place to start.</p>
													<p>So, what is this game? Among other things,</p><p>World of Warcraft is…</p>
												</small>
											</div>
											<div class="panel panel-success">
												<div class="panel-heading">
													<h3 class="panel-title">
														a Massively Multiplayer Online Role Playing Game!
													</h3>
												</div>
												<div class="tabpanel">
													<div class="panel-body">
														<ul class="nav nav-tabs" role="tablist">
															<li role="presentation" class="active">
																<a href="#generalinfodojoteam" aria-controls="generaldojowowteamtab" role="tab"
															data-toggle="tab">
																Teams:
																</a>
															</li>
															<li role="presentation">
																<a href="#allianceteam" aria-controls="generaldojoallianceteamtab" role="tab"
															data-toggle="tab">
																Alliance
																</a>
															</li>
															<li role="presentation">
																<a href="#hordeteam" aria-controls="generaldojohordeteamtab" role="tab"
															data-toggle="tab">
																Horde
																</a>
															</li>
														</ul>
													</div>
													<div class="tab-content">
														<div role="tabpanel" class="tab-pane fade in active" id="generalinfodojoteam">
															<div class="well">
																<div class="page-header">
																	<h3>
																		Fractions in Azeroth, and PVP Games.
																	</h3>
																</div>
																<div class="row">
																	<div class="media">	
																		<div class="media-body" style="padding: 5px;">
																		<small>
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;Azeroth is the name of the world in which the majority of the Warcraft series is set. The world of Azeroth is the birthplace of many races, most notable being elves (night elves, high elves, and blood elves), humans, dwarves, tauren, goblins, trolls, gnomes, pandarens and dragons. At its birth, Azeroth was blessed by the titans. One day, the demonic armies of the Burning Legion came and shattered the peace and led the night elves to sunder their world. Gradually, races were dragged to Azeroth (such as the orcs, draenei, and ogres), others evolved, and others were brought up from the dust itself. </p>
																			<br />
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;The peoples of Azeroth have fought brutally against the demons and their servants, and much blood was and is still being shed. After the Third War, three major powers emerged: the Scourge, Horde, and Alliance. Other major powers include the naga, qiraji, and Scarlet Crusade. Although ravaged by conflict, somehow through trickery, betrayal, and sheer blood, Azeroth has survived the Burning Legion four times. However, Azeroth is still torn by conflict, hate, and war. </p>
																			<br />
																			<p>&ensp;&ensp;&ensp;&ensp;&ensp;Azeroth is a world brimming with conflict, especially on PVP servers. This means that, sooner or later, you will encounter members of the opposite faction. If you are in Friendly Territory, they won't be able to attack you unless you decide to strike first, but be ready to fight to the death in contested territories, and most certainly in War game scenarios. Good Luck, and Have Fun. </p>
																		</small>
																		</div>
																		<div class="media-right">
																			<center>
																			<img src="../pics/azeroth.jpg" alt="azeroth.jpg" class="img-responsive img-rounded" style="height: 100px; width: 100px;" />
																			<br />
																			<img src="../pics/wowallianceicon.jpg" alt="wowallianceicon.jpg" class="img-responsive img-rounded" style="height: 100px; width: 100px;" />
																			<br />
																			<img src="../pics/wowhordeicon.jpg" alt="wowhordeicon.jpg" class="img-responsive img-rounded" style="height: 100px; width: 100px;" />
																			</center>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="panel-group" id="infodojopvpaccordion" role="tablist" aria-multiselectable="true">
																		<div class="panel panel-default">
																			<div class="panel-heading" role="tab" id="infodojoworldpvp">
																			  <h4 class="panel-title">
																				<a data-toggle="collapse" data-parent="#infodojopvpaccordion" href="#infodojoworldpvpcollapse" aria-expanded="true" aria-controls="infodojoworldpvpcollapse">
																				  World PVP
																				</a>
																			  </h4>
																			</div>
																			<div id="infodojoworldpvpcollapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="infodojoworldpvp">
																				  <div class="panel-body">
																						<p>Random encounters against other players can be very exciting -- as are massive raids into enemy capital cities -- and constitute a nice change of pace from the structured combat found in Battlegrounds and Arenas. Walk softly, carry a big sword, and bring backup... yea, lots of backup. Call MPC to come when having horde infestations, and we will exterminate the pests from the lands. Look for AcidSnake, executive branches, or the top officers of the guild. We will save you!</p>
																						<br />
																						<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoworldpvpexamplemodal">
																							World PVP
																						</a>
																						<div class="modal fade" id="infodojoworldpvpexamplemodal" tabindex="-1" role="dialog" aria-labelledby="infodojoworldpvpexamplemodalModalLabel" aria-hidden="true">
																						  <div class="modal-dialog">
																							<div class="modal-content">
																							  <div class="modal-header">
																								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																								<h4 class="modal-title" id="infodojoworldpvpexamplemodalModalLabel">World PVP</h4>
																							  </div>
																							  <div class="modal-body">
																								...
																							  </div>
																							  <div class="modal-footer">
																								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																							  </div>
																							</div>
																						  </div>
																						</div>		
																						<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoduelpvpexamplemodal">
																							Dueling PVP
																						</a>
																						<div class="modal fade" id="infodojoduelpvpexamplemodal" tabindex="-1" role="dialog" aria-labelledby="infodojoduelpvpexamplemodalModalLabel" aria-hidden="true">
																						  <div class="modal-dialog">
																							<div class="modal-content">
																							  <div class="modal-header">
																								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																								<h4 class="modal-title" id="infodojoduelpvpexamplemodalModalLabel">Dueling PVP</h4>
																							  </div>
																							  <div class="modal-body">
																								...
																							  </div>
																							  <div class="modal-footer">
																								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																							  </div>
																							</div>
																						  </div>
																						</div>
																						<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoduelpvpexamplemodal">
																							Interest of Conflict PVP
																						</a>
																						<div class="modal fade" id="infodojoconflictpvpexamplemodal" tabindex="-1" role="dialog" aria-labelledby="infodojoconflictpvpexamplemodalModalLabel" aria-hidden="true">
																						  <div class="modal-dialog">
																							<div class="modal-content">
																							  <div class="modal-header">
																								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																								<h4 class="modal-title" id="infodojoconflictpvpexamplemodalModalLabel">Interest of Conflict PVP</h4>
																							  </div>
																							  <div class="modal-body">
																								...
																							  </div>
																							  <div class="modal-footer">
																								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																							  </div>
																							</div>
																						  </div>
																						</div>
																						<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojotargetoppvpexamplemodal">
																							Targets of Opportunity PVP
																						</a>
																						<div class="modal fade" id="infodojotargetoppvpexamplemodal" tabindex="-1" role="dialog" aria-labelledby="infodojotargetoppvpexamplemodalModalLabel" aria-hidden="true">
																						  <div class="modal-dialog">
																							<div class="modal-content">
																							  <div class="modal-header">
																								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																								<h4 class="modal-title" id="infodojotargetoppvpexamplemodalModalLabel">Targets of Opportunity PVP</h4>
																							  </div>
																							  <div class="modal-body">
																								...
																							  </div>
																							  <div class="modal-footer">
																								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																							  </div>
																							</div>
																						  </div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="panel panel-default">
																			<div class="panel-heading" role="tab" id="infodojorbgpvp">
																			  <h4 class="panel-title">
																				<a class="collapsed" data-toggle="collapse" data-parent="#infodojopvpaccordion" href="#infodojorbgpvpcollapse" aria-expanded="false" aria-controls="infodojorbgpvpcollapse">
																				  Rated BattleGrounds
																				</a>
																			  </h4>
																			</div>
																			<div id="infodojorbgpvpcollapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="infodojorbgpvp">
																			    <div class="panel-body">
																					<p>The BGs, where half the battle is stayin’ alive, are points of strategic importance to both the Alliance and the Horde. In the trenches, forests, and plains of these instanced areas, players fight members of the opposite faction while completing a wide range of objectives. Don’t get carried away in the heat of battle, focus on the mission and stick to your battle brothers and sisters. Keep what you capture, don’t leave anything undefended and never, EVER, fight on the roads (to hell). Remember, there are more honor points in victory; all else is dust, easily swept away.</p>																																								
																					<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoresourceracepvpmapmodal">
																						Resource Race
																					</a>
																					<div class="modal fade" id="infodojoresourceracepvpmapmodal" tabindex="-1" role="dialog" aria-labelledby="infodojoresourceracepvpmaplabel" aria-hidden="true">
																						 <div class="modal-dialog">
																							<div class="modal-content">
																								<div class="modal-header">
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">
																											&times;
																										</span>
																									</button>
																									<h4 class="modal-title" id="infodojoresourceracepvpmaplabel">
																										Resource Battleground Maps
																									</h4>
																								</div>
																								<div class="modal-body">
																									<div class="well">
																										<div role="tabpanel">
																											<ul class="nav nav-tabs" role="tablist">
																												<li role="presentation" class="active">
																													<a href="#infodojoarathibasinpvptab" aria-controls="infodojoarathibasinpvptab" role="tab" data-toggle="tab">
																														AB
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojobattleforgilneaspvptab" aria-controls="infodojobattleforgilneaspvptab" role="tab" data-toggle="tab">
																														BG
																													</a>
																												</li>																											
																											</ul>
																											<div class="tab-content">
																												<div role="tabpanel" class="tab-pane active" id="infodojoarathibasinpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Arathi Basin(AB): (5 Nodes)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoarenapvpcarouselarathibasin" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoarenapvpcarouselarathibasin" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoarenapvpcarouselarathibasin" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>																																						
																												<div role="tabpanel" class="tab-pane" id="infodojobattleforgilneaspvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Eye of the Storm(Eots): (5 Node + 1 Flag)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																	<h4>
																																		Photos:
																																	</h4>
																															</div>
																															<div id="infodojoratedbattlegroundpvpcarouseleyeofthestorm" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/dalaransewers1.jpg" alt="dalaransewers1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/dalaransewers2.jpg" alt="dalaransewers2" class="img-responsive img-rounded text-center" />																										 
																																	</div>
																																	<div class="item">
																																			<img src="../pics/dalaransewers3.jpg" alt="dalaransewers3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																			<img src="../pics/dalaransewers4.jpg" alt="dalaransewers4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																															  <a class="left carousel-control" href="#infodojoratedbattlegroundpvpcarouseleyeofthestorm" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															  </a>
																															  <a class="right carousel-control" href="#infodojoratedbattlegroundpvpcarouseleyeofthestorm" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															  </a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>																												
																											</div>
																										</div>
																									</div>
																									<div class="modal-footer">
																										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>																									
																					<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojocapturetheflagwowpvpmapmodal">
																						Capture the Flag
																					</a>
																					<div class="modal fade" id="infodojocapturetheflagwowpvpmapmodal" tabindex="-1" role="dialog" aria-labelledby="infodojocapturetheflagwowpvpmaplabel" aria-hidden="true">
																						 <div class="modal-dialog">
																							<div class="modal-content">
																								<div class="modal-header">
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">
																											&times;
																										</span>
																									</button>
																									<h4 class="modal-title" id="infodojocapturetheflagwowpvpmaplabel">
																										Capture the Flag Maps
																									</h4>
																								</div>
																								<div class="modal-body">
																									<div class="well">
																										<div role="tabpanel">
																											<ul class="nav nav-tabs" role="tablist">
																												<li role="presentation" class="active">
																													<a href="#infodojowarsonggultchpvptab" aria-controls="infodojoarwarsonggultchpvptab" role="tab" data-toggle="tab">
																														WSG
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojotwinpeakspvptab" aria-controls="infodojotwinpeakspvptab" role="tab" data-toggle="tab">
																														TP
																													</a>
																												</li>																											
																											</ul>
																											<div class="tab-content">
																												<div role="tabpanel" class="tab-pane active" id="infodojowarsonggultchpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	WarSong Gulch (WSG): (1 Flag 3 Caps)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselwarsonggultch" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselwarsonggultch" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselwarsonggultch" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>																																						
																												<div role="tabpanel" class="tab-pane" id="infodojotwinpeakspvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Twin Peaks(TP): ( 1 Flag 3 Caps)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																	<h4>
																																		Photos:
																																	</h4>
																															</div>
																															<div id="infodojoratedbattlegroundpvpcarouseltwinpeaks" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/dalaransewers1.jpg" alt="dalaransewers1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/dalaransewers2.jpg" alt="dalaransewers2" class="img-responsive img-rounded text-center" />																										 
																																	</div>
																																	<div class="item">
																																			<img src="../pics/dalaransewers3.jpg" alt="dalaransewers3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																			<img src="../pics/dalaransewers4.jpg" alt="dalaransewers4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																															  <a class="left carousel-control" href="#infodojoratedbattlegroundpvpcarouseltwinpeaks" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															  </a>
																															  <a class="right carousel-control" href="#infodojoratedbattlegroundpvpcarouseltwinpeaks" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															  </a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>																												
																											</div>
																										</div>
																									</div>
																									<div class="modal-footer">
																										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>	
																					<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoresourceflagracewowpvpmapmodal">
																						Resource + Flag Race
																					</a>
																					<div class="modal fade" id="infodojoresourceflagracewowpvpmapmodal" tabindex="-1" role="dialog" aria-labelledby="infodojoresourceflagracewowpvpmaplabel" aria-hidden="true">
																						 <div class="modal-dialog">
																							<div class="modal-content">
																								<div class="modal-header">
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">
																											&times;
																										</span>
																									</button>
																									<h4 class="modal-title" id="infodojoresourceflagracewowpvpmaplabel">
																										Resource + Flag Race
																									</h4>
																								</div>
																								<div class="modal-body">
																									<div class="well">
																										<div role="tabpanel">
																											<ul class="nav nav-tabs" role="tablist">
																												<li role="presentation" class="active">
																													<a href="#infodojoeyeofthestormpvptab" aria-controls="infodojoeyeofthestormpvptab" role="tab" data-toggle="tab">
																														Eye of the Storm
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojodeepwindgorgepvptab" aria-controls="infodojodeepwindgorgepvptab" role="tab" data-toggle="tab">
																														Deepwind Gorge
																													</a>
																												</li>					
																												<li role="presentation">
																													<a href="#infodojosilvershardminespvptab" aria-controls="infodojosilvershardminespvptab" role="tab" data-toggle="tab">
																														Silvershard Mines
																													</a>
																												</li>																														
																											</ul>
																											<div class="tab-content">
																												<div role="tabpanel" class="tab-pane active" id="infodojoeyeofthestormpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Eye of the Storm (EotS): (1 Flag; 4 Node Caps.)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouseleyeofthestorm" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouseleyeofthestorm" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouseleyeofthestorm" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																												<div role="tabpanel" class="tab-pane" id="infodojotempleofkotmogupvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Temple of Kotmogu (TK): (4 Flags/Orbs)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouseltempleofkotmogu" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouseltempleofkotmogu" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouseltempleofkotmogu" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>																				
																												<div role="tabpanel" class="tab-pane" id="infodojosilvershardminespvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	SilverShard Mines (SM): (3 Cap Carts)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselsilvershardmines" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselsilvershardmines" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselsilvershardmines" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>																													
																												<div role="tabpanel" class="tab-pane" id="infodojodeepwindgorgepvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	DeepWind Gorge(DG): ( 2 Flag; 3 Node Caps.)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;The verdant Valley of the Four Winds has long enriched the continent of Pandaria with bountiful fruit, fields of grains grandiose vegetables, and ...gold?</p>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp; Deepwind Gorge dips below even the Valley's normal depth, and it's here that the pandaren have turned the earth, exposing rich veins of gold. Ever since they freed themselves from the tyrannical mogu, the inhabitants of the Valley have made careful, cautious use of these riches, taking only what they need, and paying attention to the limits of their land.</p>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;But the Alliance and the Horde have their own plans for the gleaming metals of the Gorge. Amidst the quarry, filled with dislodged rock, and connected by makeshift wooden bridges, both factions will rush for bonanza of riches that only one can walk away with.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																	<h4>
																																		Photos:
																																	</h4>
																															</div>
																															<div id="infodojoratedbattlegroundpvpcarouseldeepwindgorge" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/wow/deepwind-gorge-1-thumbnail.jpg" alt="deepwind-gorge-1-thumbnail.jpg" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/wow/deepwind-gorge-2-thumbnail.jpg.jpg" alt="deepwind-gorge-2-thumbnail.jpg" class="img-responsive img-rounded text-center" />																										 
																																	</div>
																																	<div class="item">
																																			<img src="../pics/wow/deepwind-gorge-3-thumbnail.jpg.jpg" alt="deepwind-gorge-3-thumbnail.jpg" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																			<img src="../pics/wow/deepwind-gorge-4-thumbnail.jpg.jpg" alt="deepwind-gorge-4-thumbnail.jpg" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																			<img src="../pics/wow/deepwind-gorge-5-thumbnail.jpg.jpg" alt="deepwind-gorge-5-thumbnail.jpg" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																															  <a class="left carousel-control" href="#infodojoratedbattlegroundpvpcarouseldeepwindgorge" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															  </a>
																															  <a class="right carousel-control" href="#infodojoratedbattlegroundpvpcarouseldeepwindgorge" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															  </a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A6diLP18bl4"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																													
																												</div>																												
																											</div>
																										</div>
																									</div>
																									<div class="modal-footer">
																										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>	
																					<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoconquestwowpvpmapmodal">
																						Warfare Conquest
																					</a>
																					<div class="modal fade" id="infodojoconquestwowpvpmapmodal" tabindex="-1" role="dialog" aria-labelledby="infodojoresourceflagracewowpvpmaplabel" aria-hidden="true">
																						 <div class="modal-dialog">
																							<div class="modal-content">
																								<div class="modal-header">
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">
																											&times;
																										</span>
																									</button>
																									<h4 class="modal-title" id="infodojoconquestwowpvpmaplabel">
																										Warfare Conquest
																									</h4>
																								</div>
																								<div class="modal-body">
																									<div class="well">
																										<div role="tabpanel">
																											<ul class="nav nav-tabs" role="tablist">
																												<li role="presentation" class="active">
																													<a href="#infodojoisleofconquestpvptab" aria-controls="infodojoisleofconquestpvptab" role="tab" data-toggle="tab">
																														IoC
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojoalteracvalleypvptab" aria-controls="infodojoalteracvalleypvptab" role="tab" data-toggle="tab">
																														AV
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojostrandoftheancientspvptab" aria-controls="infodojostrandoftheancientspvptab" role="tab" data-toggle="tab">
																														SotA
																													</a>
																												</li>			
																												<li role="presentation">
																													<a href="#infodojowintergrasppvptab" aria-controls="infodojowintergrasppvptab" role="tab" data-toggle="tab">
																														WG
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojotolbaradpvptab" aria-controls="infodojotolbaradpvptab" role="tab" data-toggle="tab">
																														Tol Barad
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojoashranpvptab" aria-controls="infodojoashranpvptab" role="tab" data-toggle="tab">
																														Ashran
																													</a>
																												</li>
																											</ul>
																											<div class="tab-content">
																												<div role="tabpanel" class="tab-pane fade in active" id="infodojoisleofconquestpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Isle of Conquest (IoC): (Warfare Conquest)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselisleofconquest" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselisleofconquest" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselisleofconquest" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																												<div role="tabpanel" class="tab-pane fade" id="infodojotolbaradpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Tol Barad (TB): (Warfare Conquest)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouseltolbarad" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouseltolbarad" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouseltolbarad" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>	
																												<div role="tabpanel" class="tab-pane fade" id="infodojoashranpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Ashran  (Ash): (Warfare Conquest)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselashran" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselashran" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselashran" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>	
																												<div role="tabpanel" class="tab-pane fade" id="infodojowintergrasppvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Wintergrasp (WG): (Warfare Conquest)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselwintergrasp" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselwintergrasp" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselwintergrasp" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>	
																												<div role="tabpanel" class="tab-pane fade" id="infodojostrandoftheancientspvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Strand of the Ancients (SotA): (Warfare Conquest)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselstrandoftheancients" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselstrandoftheancients" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselstrandoftheanciets" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>	
																												<div role="tabpanel" class="tab-pane fade" id="infodojoalteracvalleypvptab">																							
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Alterac Valley (AV): (Warfare Conquest)
																																</h4>
																															</div>
																															<small>
																																<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																															</small>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoratedbattlegroundspvpcarouselalteracvalley" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																	</div>
																																	<div class="item">
																																		<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoratedbattlegroundspvpcarouselalteracvalley" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																	</span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																 </a>
																																 <a class="right carousel-control" href="#infodojoinfodojoratedbattlegroundspvpcarouselalteracvalley" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
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
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="panel panel-default">
																			<div class="panel-heading" role="tab" id="infodojoarenapvp">
																			  <h4 class="panel-title">
																				<a class="collapsed" data-toggle="collapse" data-parent="#infodojopvpaccordion" href="#infodojoarenapvpcollapse" aria-expanded="false" aria-controls="infodojoarenapvpcollapse">
																				  Arena
																				</a>
																			  </h4>
																			</div>
																			<div id="infodojoarenapvpcollapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="infodojoarenapvp">
																				<div class="panel-body"> 
																					<p>&ensp;&ensp;&ensp;&ensp;&ensp;Two groups enter, only one leaves. This is the ultimate bloodsport, ladies and gentlemen! Fighters from all walks of life—bred for the rigors of war but seeking riches and recognition—end up here. You won´t be leading your brothers (or sisters) in arms to a hill in the middle of nowhere; there’s only combat, up close and personal, against an opposing team of two, three or five combatants. Get ready to rumble!</p>
																					<br />
																					<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoarenastagepvpexamplemodal">
																						Arena Stages
																					</a>
																					<div class="modal fade" id="infodojoarenastagepvpexamplemodal" tabindex="-1" role="dialog" aria-labelledby="infodojoarenastagepvpexamplemodalModalLabel" aria-hidden="true">
																						 <div class="modal-dialog">
																							<div class="modal-content">
																								<div class="modal-header">
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																									<h4 class="modal-title" id="infodojoarenastagepvpexamplemodalModalLabel">Arena Maps</h4>
																								</div>
																								<div class="modal-body">
																									<div class="well">
																										<div role="tabpanel">
																											<ul class="nav nav-tabs" role="tablist">
																												<li role="presentation" class="active">
																													<a href="#infodojobladesedgearenapvptab" aria-controls="infodojobladesedgearenapvptab" role="tab" data-toggle="tab">		Blade's Edge Arena
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojodalaransewersarenapvptab" aria-controls="infodojodalaransewersarenapvptab" role="tab" data-toggle="tab">
																														Dalaran Sewers
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojonagrandarenapvptab" aria-controls="infodojonagrandarenapvptab" role="tab" data-toggle="tab">
																														Nagrand Arena
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojoruinsoflordaeronpvptab" aria-controls="infodojoruinsoflordaeronpvptab" role="tab" data-toggle="tab">
																														Ruins of Lordaeron
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojotigerspeakpvptab" aria-controls="infodojotigerspeakpvptab" role="tab" data-toggle="tab">
																														Tiger's Peak
																													</a>
																												</li>
																												<li role="presentation">
																													<a href="#infodojotolvironarenapvptab" aria-controls="infodojotolvironarenapvptab" role="tab" data-toggle="tab">
																														Tol'Viron Arena
																													</a>
																												</li>
																											</ul>
																											<div class="tab-content">
																											<div role="tabpanel" class="tab-pane active" id="infodojobladesedgearenapvptab">
																												<div class="row">
																													<div class="col-xs-7">
																														<div class="page-header">
																															<h4>
																																Blade's Edge:
																															</h4>
																														</div>
																														<small>
																															<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																														</small>
																													</div>
																													<div class="col-xs-5">
																														<div class="page-header">
																															<h4>
																																Photos:
																															</h4>
																														</div>
																														<div id="infodojoarenapvpcarouselbladesedge" class="carousel slide" data-ride="carousel" data-interval="false">
																															<div class="carousel-inner" role="listbox">
																																<div class="item active">
																																	<img src="../pics/bladesedge1.jpg" alt="bladesedge1" class="img-responsive img-rounded text-center" />
																																</div>
																																<div class="item">
																																	<img src="../pics/bladesedge2.jpg" alt="bladesedge2" class="img-responsive img-rounded text-center" />																						 
																																</div>
																																<div class="item">
																																	<img src="../pics/bladesedge3.jpg" alt="bladesedge3" class="img-responsive img-rounded text-center" />
																																</div>
																																<div class="item">
																																	<img src="../pics/bladesedge4.jpg" alt="bladesedge4" class="img-responsive img-rounded text-center" />
																																</div>
																															</div>
																															<a class="left carousel-control" href="#infodojoarenapvpcarouselbladesedge" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
																																</span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															 </a>
																															 <a class="right carousel-control" href="#infodojoarenapvpcarouselbladesedge" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															</a>
																														</div>
																														<div class="row">
																															<div class="page-header">
																																<h4>
																																	Video Clips:
																																</h4>
																															</div>
																														</div>
																														<div class="row">
																															<div class="embed-responsive embed-responsive-16by9">
																																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>																																						
																											<div role="tabpanel" class="tab-pane" id="infodojodalaransewersarenapvptab">
																												<div class="row">
																													<div class="col-xs-7">
																														<div class="page-header">
																															<h4>
																																Dalaran Sewers:
																															</h4>
																														</div>
																														<small>
																															<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																														</small>
																													</div>
																													<div class="col-xs-5">
																														<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																														</div>
																														<div id="infodojoarenapvpcarouseldalaransewers" class="carousel slide" data-ride="carousel" data-interval="false">
																															<div class="carousel-inner" role="listbox">
																																<div class="item active">
																																	<img src="../pics/dalaransewers1.jpg" alt="dalaransewers1" class="img-responsive img-rounded text-center" />
																																</div>
																																<div class="item">
																																	<img src="../pics/dalaransewers2.jpg" alt="dalaransewers2" class="img-responsive img-rounded text-center" />																										 
																																</div>
																																<div class="item">
																																		<img src="../pics/dalaransewers3.jpg" alt="dalaransewers3" class="img-responsive img-rounded text-center" />
																																</div>
																																<div class="item">
																																		<img src="../pics/dalaransewers4.jpg" alt="dalaransewers4" class="img-responsive img-rounded text-center" />
																																</div>
																															</div>
																														  <a class="left carousel-control" href="#infodojoarenapvpcarouseldalaransewers" role="button" data-slide="prev">
																															<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																															<span class="sr-only">
																																Previous
																															</span>
																														  </a>
																														  <a class="right carousel-control" href="#infodojoarenapvpcarouseldalaransewers" role="button" data-slide="next">
																															<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																															<span class="sr-only">
																																Next
																															</span>
																														  </a>
																														</div>
																														<div class="row">
																															<div class="page-header">
																																<h4>
																																	Video Clips:
																																</h4>
																															</div>
																														</div>
																														<div class="row">
																															<div class="embed-responsive embed-responsive-16by9">
																																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div role="tabpanel" class="tab-pane" id="infodojonagrandarenapvptab">
																												<div class="row">
																													<div class="col-xs-7">
																														<div class="page-header">
																															<h4>
																																 Nagrand Arena:
																															</h4>
																														</div>
																														<small>
																															<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																														</small>
																													</div>
																													<div class="col-xs-5">
																														<div class="page-header">
																															<h4>
																																Photos:
																															</h4>
																														</div>
																														<div id="infodojoarenapvpcarouselnagrand" class="carousel slide" data-ride="carousel" data-interval="false">
																															<div class="carousel-inner" role="listbox">
																																<div class="item active">
																																	<img src="../pics/nagrand1.jpg" alt="nagrand1" class="img-responsive img-rounded text-center" />
																																</div>
																																<div class="item">
																																	<img src="../pics/nagrand2.jpg" alt="nagrand2" class="img-responsive img-rounded text-center" />																						 
																																</div>
																																<div class="item">
																																		<img src="../pics/nagrand3.jpg" alt="nagrand3" class="img-responsive img-rounded text-center" />
																																</div>
																																<div class="item">
																																		<img src="../pics/nagrand4.jpg" alt="nagrand4" class="img-responsive img-rounded text-center" />
																																</div>
																															</div>
																															<a class="left carousel-control" href="#infodojoarenapvpcarouselnagrand" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															 </a>
																															 <a class="right carousel-control" href="#infodojoarenapvpcarouselnagrand" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															</a>
																														</div>
																														<div class="row">
																															<div class="page-header">
																																<h4>
																																	Video Clips:
																																</h4>
																															</div>
																														</div>
																														<div class="row">
																															<div class="embed-responsive embed-responsive-16by9">
																																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div role="tabpanel" class="tab-pane" id="infodojoruinsoflordaeronpvptab">
																												<div class="row">
																													<div class="col-xs-7">									
																														<div class="page-header">
																															<h4>
																																Ruins of Lordaeron:
																															</h4>
																														</div>
																															<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																													</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>																													
																															</div>
																															<div id="infodojoarenapvpcarouselruinsoflordaeron" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																		<img src="../pics/ruinsoflordaeron1.jpg" alt="ruinsoflordaeron1" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/ruinsoflordaeron2.jpg" alt="ruinsoflordaeron2" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/ruinsoflordaeron3.jpg" alt="ruinsoflordaeron3" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/ruinsoflordaeron4.jpg" alt="ruinsoflordaeron4" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/ruinsoflordaeron5.jpg" alt="ruinsoflordaeron5" class="img-responsive img-rounded" />
																																	</div>
																																</div>
																																<a class="left carousel-control" href="#infodojoarenapvpcarouselruinsoflordaeron" role="button" data-slide="prev">
																																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Previous
																																	</span>
																																</a>
																																<a class="right carousel-control" href="#infodojoarenapvpcarouselruinsoflordaeron" role="button" data-slide="next">
																																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																	<span class="sr-only">
																																		Next
																																	</span>
																																</a>																														  
																															</div>
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUrjnWaaPlo"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																												<div role="tabpanel" class="tab-pane" id="infodojotigerspeakpvptab">
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	The Tiger's Peak:
																																</h4>
																															</div>
																															<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoarenapvpcarouseltigerspeak" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																	  <img src="../pics/tigerspeak1.jpg" alt="tigerspeak1" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tigerspeak2.jpg" alt="tigerspeak2" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tigerspeak3.jpg" alt="tigerspeak3" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tigerspeak4.jpg" alt="tigerspeak4" class="img-responsive img-rounded" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tigerspeakloading.jpg" alt="tigerspeakloading" class="img-responsive img-rounded" />
																																	</div>
																																</div>
																															  <a class="left carousel-control" href="#infodojoarenapvpcarouseltigerspeak" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															  </a>
																															  <a class="right carousel-control" href="#infodojoarenapvpcarouseltigerspeak" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															  </a>
																															</div>																														
																															<div class="row">
																																<div class="page-header">
																																	<h4>
																																		Video Clips:
																																	</h4>
																																</div>
																																<div class="embed-responsive embed-responsive-16by9">
																																  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U7TZ_xD1-yY"></iframe>
																																</div>
																																<div class="embed-responsive embed-responsive-16by9">
																																  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YNgUAfUgSvA"></iframe>
																																</div>
																															</div>																													
																														</div>
																													</div>
																												</div>
																												<div role="tabpanel" class="tab-pane" id="infodojotolvironarenapvptab">	
																													<div class="row">
																														<div class="col-xs-7">
																															<div class="page-header">
																																<h4>
																																	Tol'Viron Arena:
																																</h4>
																															</div>
																															<p style="padding: 5px;">&ensp;&ensp;&ensp;&ensp;&ensp;A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.A paragraph (from the Ancient Greek παράγραφος paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.</p>
																														</div>
																														<div class="col-xs-5">
																															<div class="page-header">
																																<h4>
																																	Photos:
																																</h4>
																															</div>
																															<div id="infodojoarenapvpcarouseltolvironarena" class="carousel slide" data-ride="carousel" data-interval="false">
																																<div class="carousel-inner" role="listbox">
																																	<div class="item active">
																																	  <img src="../pics/tolviron5.jpg" alt="tolviron5.jpg" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tolviron3.jpg" alt="tolviron3.jpg" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tolviron2.jpg" alt="tolviron2.jpg" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tolviron1.jpg" alt="tolviron1.jpg" />
																																	</div>
																																	<div class="item">
																																	  <img src="../pics/tolvironmap1.jpg" alt="tolvironmap1.jpg" />
																																	</div>
																																</div>
																															  <a class="left carousel-control" href="#infodojoarenapvpcarouseltolvironarena" role="button" data-slide="prev">
																																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Previous
																																</span>
																															  </a>
																															  <a class="right carousel-control" href="#infodojoarenapvpcarouseltolvironarena" role="button" data-slide="next">
																																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																																<span class="sr-only">
																																	Next
																																</span>
																															  </a>
																															</div>
																															<div class="page-header">
																																<h4>
																																</h4>
																															</div>
																															<div class="row">
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/so-E8YxSRyE"></iframe>
																																</div>
																																<div class="embed-responsive embed-responsive-16by9">
																																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fIDIw1asVLc"></iframe>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="modal-footer">
																										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>																
																					<p>&ensp;&ensp;&ensp;&ensp;&ensp;Adventuring has helped you learn your class and chosen specialization, but fighting players—especially in the Arenas—is a very different experience. Before you indulge in this form of no-holds-barred carnage, you should get acquainted with the pace and timing of PvP combat by facing off against other players in friendly duels, and participating in the Battlegrounds. Victory in the latter will also allow you to upgrade your weapons and armor, which will serve you well on the path of the Gladiator. Enhance your time with MPC, and the daily Arena teams that are performing, an increasing level of implementation.</p>
																					<br />
																					<p>&ensp;&ensp;&ensp;&ensp;&ensp; Winning takes you up the ladder through personal and team rating increases. You will also earn Conquest Points, high-end currency to purchase epic quality armor, weapons, and accessories to meet the onslaught head on. These finely crafted armor suits are designed to boost your stats and withstand copious amounts of punishment. Be aware, however, that you won’t be able to purchase the most powerful pieces until you attain the required rating. Fight hard, train harder, go bust some skulls, and look good while doing so; because without gear then survival is minimal in Arena.</p>
																				</div>
																			</div>
																		</div>
																	</div>										
																</div>
															</div>
														</div>											
														<div role="tabpanel" class="tab-pane fade" id="allianceteam">
															<div class="well">
																<div class="row">
																	<div class="col-xs-8">
																		<div class="page-header">
																			<h3>
																				Alliance Races:
																			</h3>
																		</div>
																		<small>
																			<p style="padding-right: 5px;">In Warcraft, there are two large, opposing factions. On one side is the noble Alliance, which comprises then valiant <b>Humans</b>; youngest race on Azeroth, they have faced many challenges with fortitude and resilience. The stalwart <b>Dwarves</b>, yet the bold, and courageous; an ancient race descended from the earth-beings of living stone created by the titans when the world was very young. The ingenious <b>Gnomes</b>,  the clever, spunky, and often-times eccentric gnomes present a unique paradox among the civilized races of Azeroth. The spiritual <b>Night Elves</b>, the ancient and reclusive, have played a pivotal role in shaping Azeroth's rate though-outs its history. The mystical <b>Draenei</b>, powerful and armed with their unshakeable faith in the Light, the draenei ventured to their embattled former home as steadfast members of the Alliance and defeated their ancient de monist rivals. Lastly, the bestial <b>Worgen</b>, a Greymane Wall, a terrible curse has spread throughout the isolated human nation of Gilneas, transforming many of its stalwart citizens into a nightmarish beasts known as <b>Worgen</b>.</p>
																		</small>
																		<div class="row">
																			<img src="../pics/alliancecustomdesign.png" class="img-responsive img-rounded" alt="alliancecustomdesign.png"  style="padding: 25px;" />
																		</div>
																	</div>
																	<div class="col-xs-4">
																		<center>
																			<img src="../pics/wowallianceicon.png" alt="wowallianceicon.png" class="media-object img-responsive img-rounded" style="height: 100px; width: 200px;" />
																		</center>
																		<small>
																			<p>Race Information</p>
																		</small>
																		<ul class="nav nav-pills nav-stacked">
																			<li role="presentation">
																			<!--alliance role--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojowowalliancemodal">Alliance</a>
																				<div class="modal fade" id="infodojowowalliancemodal" tabindex="-1" role="dialog" aria-labelledby="#infodojowowallianceracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojowowalliancemodallabel">
																									Alliance Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--human race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojohumanmodal">Humans</a>
																				<div class="modal fade" id="infodojohumanmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojohumanracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojohumanracemodallabel">
																									Human Race
																								</h4>
																							</div>
																							<div class="modal-body">																					
																								<div class="embed-responsive embed-responsive-4by3">																					
																									<iframe class="embed-responsive" width="560" height="315" src="https://www.youtube.com/embed/pX7Ra3ZQTsI?list=PLEE19202CC1CDFE01" frameborder="0" allowfullscreen></iframe>																							
																								</div>								
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--dwarf race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojodwarfmodal">Dwarves</a>
																				<div class="modal fade" id="infodojodwarfmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojodwarfracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojodwarfracemodallabel">
																									Dwarf Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--gnome race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojognomemodal">Gnomes</a>
																				<div class="modal fade" id="infodojognomemodal" tabindex="-1" role="dialog" aria-labelledby="#infodojognomeracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojognomeracemodallabel">
																									Gnome Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--night elf race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojonightelfmodal">Night Elves</a>
																				<div class="modal fade" id="infodojonightelfmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojonightelfracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojonightelfracemodallabel">
																									Night Elf Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--draenei race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojodraeneimodal">Draenei</a>
																				<div class="modal fade" id="infodojodraeneimodal" tabindex="-1" role="dialog" aria-labelledby="#infodojodraeneiracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojodraeneimodallabel">
																									Draenei Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--Pandaren race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojopandarenmodal">Pandaren</a>
																				<div class="modal fade" id="infodojopandarenmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojopandarenracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojopandarenmodallabel">
																									Pandaren Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--worgen race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoworgenmodal">Worgens</a>
																				<div class="modal fade" id="infodojoworgenmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojoworgenracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojoworgenmodallabel">
																									Worgen Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="row">
																	<div class="page-header">
																		<h3>
																			How the Race specializes in Person Vs Person (PVP):
																		</h3>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/human.png" alt="human.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojohumanpvpmodal" >Human</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojohumanpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojohumanpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojohumanpvpmodallabel">
																							Human + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Human and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/dwarf.png" alt="dwarf.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojodwarfpvpmodal">Dwarves</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojodwarfpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojodwarfpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojodwarfpvpmodallabel">
																							Dwarf + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Dwarf and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/gnome.png" alt="gnome.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojognomepvpmodal" class="btn btn-default btn-sm" role="button" data-toggle="modal">Gnomes</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojognomepvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojognomepvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojognomepvpmodallabel">
																							Gnome + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Gnome and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/nightelf.png" alt="nightelf.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojonightelfpvpmodal" class="btn btn-default btn-sm" data-toggle="modal" role="button">Night Elf</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojonightelfpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojonightelfpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojonightelfpvpmodallabel">
																							Night Elf + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test night elf and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/draenei.png" alt="draenei.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojodraeneipvpmodal" class="btn btn-default btn-sm" data-toggle="modal" role="button">Draenei</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojodraeneipvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojodraeneipvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojodraeneipvpmodallabel">
																							Draenei + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Draenei and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/pandarien.png" alt="pandarien.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojopandarenalliancepvpmodal">Pandaren</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojopandarenalliancepvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojopandarenalliancepvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojopandarenalliancepvpmodallabel">
																							Pandaren Alliance + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Pandaren Alliance and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/worgan.png" alt="worgan.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																					<p><a href="#infodojoworgenmodal" data-toggle="modal" class="btn btn-sm btn-default" role="button">Worgen</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojoworgenpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojoworgenpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojoworgenpvpmodallabel">
																							worgen + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test worgen and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div style="height: 100px; width: 100px;"></div>
																	</div>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="hordeteam">
															<div class="well">
																<div class="row">
																	<div class="col-xs-8">
																		<div class="page-header">
																			<h3>
																				Horde Races:
																			</h3>
																		</div>
																			<small>
																				<p style="padding-right: 5px;">In Warcraft, there are two large, opposing factions. On one side the Horde is a union made up of <b>Orcs</b>,  the green-skinned, or "greenskins" -- are one of the most prolific races of Azeroth.<b>Foresaken Undead</b> are humans, and elves freed from the Lich King's control.<b>Tauren</b>, the huge normadic creatures who live on the grassy, open plains of Mulgore.<b>Trolls</b>,  the savage of Azeroth, and infamous for their cruelty, dark mysticism, and seething hatred for all other races. <b>Blood Elves</b>,  the race composed of former high elves who renamed themselves in honor of their people who were killed during the siege of Quel'thalas by the Scourge during the Third War.<b>Goblins</b>  were originally the slaves of the jungle trolls on the Isle of Kezan, and were forced to mine ore, and gained power from constant exposure towards potent minerals.The most recently the added to the horde, were <b>Pandaren (Houjin)</b>, and couched in myth and legend, rarely seen, and even more rarely understood, the enigmatic Pandaren have long been a mystery to the other races of Azeroth, and some of them favored the Horde... Misunderstood and cast aside, these diverse, and powerful races strive to overcome their differences, and unite as one in order to win freedom for their people, prosper in a land that has come to hate them. In the horde, action, and strength are valued above diplomacy, and its leaders earn respect by the blade, wasting no time with politics. The brutality of the Horde's champions is focused, giving a voice to those who fight for survival.</p>
																			</small>
																			<div class="row">
																				<img src="../pics/alliancecustomdesign.png" class="img-responsive img-rounded" alt="alliancecustomdesign.png"  style="padding: 25px;" />
																			</div>
																	</div>
																	<div class="col-xs-4">
																		<center>
																		<img src="../pics/wowhordeicon.png" alt="wowhordeicon.png" class="media-object img-responsive img-rounded" style="height: 100px; width: 200px;" />
																		</center>
																		<small>
																			<p>Race Information:</p>
																		</small>
																		<ul class="nav nav-pills nav-stacked">
																			<li role="presentation">
																			<!--Horde role--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojowowhordemodal">Horde</a>
																				<div class="modal fade" id="infodojowowhordemodal" tabindex="-1" role="dialog" aria-labelledby="#infodojowowhorderacemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojowowhordemodallabel">
																									Horde Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--orc race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoorcmodal">Orcs</a>
																				<div class="modal fade" id="infodojoorcmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojoorcracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojohumanracemodallabel">
																									Orc Race
																								</h4>
																							</div>
																							<div class="modal-body">
																							
																							....
										
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--forsaken race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoundeadmodal">Forsakens</a>
																				<div class="modal fade" id="infodojoundeadmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojoundeadracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojodwarfracemodallabel">
																									Forsaken Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--trolls race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojotrollmodal">Trolls</a>
																				<div class="modal fade" id="infodojotrollmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojotrollracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojotrollracemodallabel">
																									Troll Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--tauren race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojotaurenmodal">Taurens</a>
																				<div class="modal fade" id="infodojotaurenmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojotaurenfracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojotaurenracemodallabel">
																									Tauren Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--blood elf race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojobloodelfmodal">Blood Elf</a>
																				<div class="modal fade" id="infodojobloodelfmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojobloodelfracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojobloodelfmodallabel">
																									Blood Elf Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--Pandaren race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojopandarenhordemodal">Pandaren</a>
																				<div class="modal fade" id="infodojopandarenhordemodal" tabindex="-1" role="dialog" aria-labelledby="#infodojopandarenhorderacemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojopandarenhordemodallabel">
																									Pandaren Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li role="presentation">
																			<!--goblins race--modal information-->
																				<a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojogoblinmodal">Goblins</a>
																				<div class="modal fade" id="infodojogoblinmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojogoblinracemodallabel" aria-hidden="true">
																					<div class="modal-dialog">	
																						<div class="modal-content">
																							<div class="modal-header">
																								<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																									<span aria-hidden="true">&times;</span>
																								</a>
																								<h4 class="modal-title" id="infodojogoblinmodallabel">
																									Goblin Race
																								</h4>
																							</div>
																							<div class="modal-body">
																									...
																							</div>
																							<div class="modal-footer">
																								<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="row">
																	<div class="page-header">
																		<h3>
																			How the Race specializes in Person Vs Person (PVP):
																		</h3>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/orc.png" alt="orc.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoorcpvpmodal" >Orcs</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojoorcpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojoorcpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojoorcpvpmodallabel">
																							Tauren + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Orc and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/undead.png" alt="undead.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojoundeadpvpmodal">Forsakens</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojoundeadpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojoundeadpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojoundeadpvpmodallabel">
																							Undead + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Undead and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/troll.png" alt="troll.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojotrollpvpmodal" class="btn btn-default btn-sm" role="button" data-toggle="modal">Trolls</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojotrollpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojotrollpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojotrollpvpmodallabel">
																							Trolls + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Troll and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/tauren.png" alt="tauren.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojotaurenpvpmodal" class="btn btn-default btn-sm" data-toggle="modal" role="button">Taurens</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojotaurenpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojotaurenpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojotaurenpvpmodallabel">
																							Tauren + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Tauren and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/bloodelf.png" alt="bloodelf.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojobloodelfpvpmodal" class="btn btn-default btn-sm" data-toggle="modal" role="button">Blood Elves</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojobloodelfpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojobloodelfpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojobloodelfpvpmodallabel">
																							Blood Elf + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test Blood Elf and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/pandarien.png" alt="pandarien.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#infodojopandarenhordepvpmodal">Pandaren</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojopandarenhordgepvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojopandarenhordepvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojopandarenhordepvpmodallabel">
																							Pandaren Horde + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Testing pandas horde and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div class="thumbnail">
																			<img src="../pics/goblin.png" alt="goblin.png" class="img-responsive img-rounded" style="height: 150px; width: 150px;" />
																			<div class="caption">
																				<center>
																				<p><a href="#infodojogoblinpvpmodal" data-toggle="modal" class="btn btn-sm btn-default" role="button">Goblins</a></p>
																				</center>
																			</div>
																		</div>
																		<div class="modal fade" id="infodojogoblinpvpmodal" tabindex="-1" role="dialog" aria-labelledby="#infodojogoblinpvpracemodallabel" aria-hidden="true">
																			<div class="modal-dialog">	
																				<div class="modal-content">
																					<div class="modal-header">
																						<a type="button" class="close btn-default" data-dismiss="modal" aria-label="close">
																							<span aria-hidden="true">&times;</span>
																						</a>
																						<h4 class="modal-title" id="infodojogoblinpvpmodallabel">
																							Goblins + PVP
																						</h4>
																					</div>
																					<div class="modal-body">
																							... Test goblins and pvp
																					</div>
																					<div class="modal-footer">
																						<a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-3">
																		<div style="height: 100px; width: 100px;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="btn-group" role="group" aria-label="...">
													<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
													<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
													<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
													<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
													<div class="btn-group" role="group">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																 MPC Videos
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Heists</a></li>
																<li><a href="#">Armored Robbery</a></li>
																<li><a href="#">Races</a></li>
																<li><a href="#">and more.</a></li>
															</ul>
													</div>
												</div>
												<ul class="nav nav-tabs" role="tablist">
													<li role="presentation" class="active">
														<a href="#generalinfodojoteam" aria-controls="generaldojowowteamtab" role="tab"
													data-toggle="tab">
														Teams:
														</a>
													</li>
													<li role="presentation">
														<a href="#allianceteam" aria-controls="generaldojoallianceteamtab" role="tab"
													data-toggle="tab">
														Alliance
														</a>
													</li>
													<li role="presentation">
														<a href="#hordeteam" aria-controls="generaldojohordeteamtab" role="tab"
													data-toggle="tab">
														Horde
														</a>
													</li>
												</ul>
											</div>										
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="dojofps">
							<div class="page-header text-center">
								<h1>
									First Person Shooter (Hip-Fire, Aiming Down Sights)
								</h1>
								<small>
									<p>Learn the basics to fps's with hotkeys, macros, and concepts of the characters in the game. Build up the knowledge for better performance of the game, and clan practices for tournaments, or leagues. After selecting the game, newer options will appear as topics of all the aspects of the game. Communication skills, and team strategies, or how teams are speaking in chat during the tournament, or league game; each word takes up a useful millisecond, and confusion during combat. This will include maps, screen shot, video examples, and MPC team strategy guides. Find the clan leader, and get enlisted for war. Godspeed.<a name="infodojobattlefield4top"><a/></p>
								</small>
								<center>
								<div class="btn-group" role="group" aria-label="...">
									<a type="button" class="btn btn-default" href="#infodojobattlefield4top">Battlefield 4</a>
									<a type="button" class="btn btn-default" href="#infodojocallofduty4top">Call of Duty</a>
									<a type="button" class="btn btn-default" href="#infodojohalo4top">Halo</a>
								</div>
								</center>
							</div>
							<div class="row"><!--media-->
								<div class="media">
									<div class="media-left" style="margin-left: 25px;">
										<img src="../pics/b4icon.PNG" class="img-responsive img-rounded media-object" alt="bf4.png"  style="width: 100px; height: 100px;" />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">Text</li>
											<li class="list-group-item list-group-item-success">Text</li>
											<li class="list-group-item list-group-item-success">Text</li>
											<li class="list-group-item list-group-item-success">Text</li>
											<li class="list-group-item list-group-item-success">Text</li>
											<li class="list-group-item list-group-item-success">Text</li>
										</ul>
									</div>
									<div class="media-body">
										<div class="well">
											<div class="page-header">
												<h1>
													Battlefield 4
												</h1>
											</div>
											<small>
												content goes here
											</small>
											<br />
											<div class="btn-group" role="group" aria-label="...">
												<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
												<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
												<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
												<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														 MPC Videos
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Heists</a></li>
														<li><a href="#">Armored Robbery</a></li>
														<li><a href="#">Races</a></li>
														<li><a href="#">and more.</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="media">
									<div class="media-body">
										<div class="well">
											<div class="page-header">
												<h1>
													Call of Duty
												</h1>
											</div>
											<small>
												<p>Content goes here.<a name="infodojohalo4top"></a></p>
												
											</small>
											<br />
											<div class="btn-group" role="group" aria-label="...">
												<button type="button" class="btn btn-default"><a href="#">Streamers</a></button>
												<button type="button" class="btn btn-default"><a href="#">MPC Members</a></button>
												<button type="button" class="btn btn-default"><a href="#">Screen Shots</a></button>
												<button type="button" class="btn btn-default"><a href="#">Trailers</a></button>
												<div class="btn-group" role="group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															 MPC Videos
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Heists</a></li>
															<li><a href="#">Armored Robbery</a></li>
															<li><a href="#">Races</a></li>
															<li><a href="#">and more.</a></li>
														</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="media-right" style="margin-right: 25px;">
										<img src="../pics/callofdutyicon.png" class="img-responsive img-rounded media-object" alt="callofdutyicon.png" style="width: 100px; height: 100px;"  />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="media">
									<div class="media-left" style="margin-left: 25px;">
										<img src="../pics/haloicon.png" class="img-responsive img-rounded media-object" alt="wowicon.png" style="width: 100px; height: 100px;" />
										<small>
											<p>MPC Member</p>
											<p><b>Benefits</b></p>
										</small>
										<ul class="list-group">
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
											<li class="list-group-item list-group-item-success">text</li>
										</ul>
									</div>
									<div class="media-body">
										<div class="well">
											<div class="page-header">
												<h1>
													Halo
												</h1>
											</div>
											<small>
												<p>content goes here...</p>
											</small>
											<div class="btn-group" role="group" aria-label="...">
												<button type="button" class="btn btn-default"><a href="#">Button1</a></button>
												<button type="button" class="btn btn-default"><a href="#">Button1</a></button>
												
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														 Dropdown
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Dropdown link</a></li>
														<li><a href="#">Dropdown link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation">
							<a href="#dojoinfo" aria-controls="dojoinfo" role="tab" data-toggle="tab">
								MPC Dojo
							</a>
						</li>
						<li role="presentation">
							<a href="#dojorts" aria-controls="dojorts" role="tab" data-toggle="tab">
								Real Time Strategies
							</a>
						</li>
						<li role="presentation">
							<a href="#dojofps" aria-controls="dojofps" role="tab" data-toggle="tab">
								First Person Shooter
							</a>
						</li>
						<li role="presentation">
							<a href="#dojommorpg" aria-controls="settings" role="tab" data-toggle="tab">
								MMORPGs
							</a>
						</li>
						<!-- <li role="presentation"><a href="#" aria-controls="#" role="tab" data-toggle="tab"></a></li>-->
					  </ul>
				</div>
			</div>
		</div>
<!--footer-->				
<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>