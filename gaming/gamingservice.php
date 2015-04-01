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
        <div class="well">
            <div class="row">
    <div class="container-fluid">
    </div>
                <center>
                    <img src="../pics/gamingservices.png" alt="gamingservices.png" class="img-responsive img-rounded" style="height: 100px; width: 700px;" name="top" />
                    <br />
                    <small><p>These are some of the ways to keep track of MPC, and the games they play. These are known as gaming service providers, and distribute software through their company program. Feel free to connect with MPC through these companies. Use any of the information posted below to help in your search. These are some of the actives games we participate in.</p></small>
                     </center>
                    <br />
                </div>
                <div class="row">
                    <div class="col-xs-3">
                        <div class="panel-group" id="mpcblizzardaccordion-gaming" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="mpcblizzardseries-gaming">
                              <h4 class="panel-title">
                               <a class="collapsed" data-toggle="collapse" data-parent="#mpcblizzardaccordion-gaming" href="#mpcblizzardcollapse-gaming" aria-expanded="false" aria-controls="mpcblizzardcollapse-gaming">
                                  MPC Blizzard
                                </a>
                              </h4>
                            </div>
                            <div id="mpcblizzardcollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="mpcblizzardseries-gaming">
                              <div class="list-group">
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">Starcraft 2</a>
                                </li>
                                  
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">World of Warcraft</a>
                                </li>
                                  
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">Hearth Stone</a>
                                </li>
                                  
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">Heroes of the Storm</a>
                                </li>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-xs-9">
                        <center>
                            <img src="../pics/activegames.png" alt="activegames.png" title="Active Games Banner" class="img-responsive img-rounded" style="width: 800px;" />
                            <br />
                        </center>
                    
                <br />
                    </div>
                </div>
            <div class="row">
                <div class="col-xs-9">
                    <img src="../pics/activegames.png" alt="activegames.png" title="Active Games Banner" class="img-responsive img-rounded" style="width: 800px;" />
                </div>
                <div class="col-xs-3">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#mpcothergamescollapse-gaming" aria-expanded="false" aria-controls="mpcothergamescollapse-gaming">
                                  MPC Other Games... 
                                </a>
                              </h4>
                            </div>
                            <div id="mpcothergamescollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="list-group">
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">League of Legends</a>
                                </li>
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">Clash of Clans</a>
                                </li>
                                <li class="presentation list-group-item list-group-item-default">
                                    <a href="">Counter Strike GO</a>
                                </li>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>               
                <div class="panel panel-default">
                    <div class="panel-title">
                        <h3>Battle.net - Blizzard Ent. - Founded 11/30/1996</h3>
                    </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <center>
                                    <img src="../pics/bnet.PNG" alt="bnt.PNG" class="img-responsive img-rounded media-object" style="height: 200px; width: 300px;" />
                                    <br />
                                    <img src="../pics/blizzardentlogo.png" alt="blizzardentlogo.png" class="img-responsive img-rounded media-object" style="width:300px;" title="blizzard entertainment" />
                                    <br />
                                    <img src="../pics/blizzardhq.jpg" alt="blizzardhq.jpg" title="Blizzard HeadQuarters" class="img-responsive img-rounded media-object" style="width: 300px;" />
                                    <small>
                                        <p>
                                        Blizzard Head Quarters
                                        </p>
                                    </small>
                                </center>
                            <br />
                            <div class="page-header">
                                <h4>
                                Currently Active:
                                </h4>
                            </div>
                            <br />
                                <center>
                            <img src="../pics/wowactive.jpg" alt="wowactive.jpg" title="World of Warcraft" class="img-responsive img-rounded" style="width: 200px; height: 100px;" />
                                <br />
                                
                                </center>
                                <div class="page-header">
                                    <h4>Series Videos:</h4>
                                </div>
                                <div class="btn-group">
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Warcraft
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Starcraft
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Diablo
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Hearth Stone
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Heroes of the Storm
                                    </a>
                                        </div>
                                </div>
                                <br />
                                <div class="page-header">
                                    <h4>Screen Shots: [Buttons]</h4>
                                </div>
                                <br />
                                 <div class="btn-group">
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Warcraft
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Starcraft
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Diablo
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Hearth Stone
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Heroes of the Storm
                                    </a>
                                        </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="btn-group">
                                    <a type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Sign into Battle.net" href="https://us.battle.net/account/creation/tos.html" target="_blank">
                                    <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
                                    <!---->Battle.net Site<!---->
                                    </a>
                                    <a type="button" class="btn   btn-default" data-toggle="tooltip" data-placement="left" title="View Battle.net MPC Accounts" href="#">
                                    <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                    <!---->MPC Battle.net<!---->
                                    </a>
                                </div>
                                <br />
                                <div class="page-header"><h3>MPC Briefing:</h3></div>
                                <br />
                                <small><p>&ensp;&ensp;&ensp;&ensp;&ensp;Here you will find the tools for playing on battle.net. Battle.net server that their products use to connect to. This connection allows players to play their games, and any interaction through the internet. The links provider here will take you to battle net's website, and allow you to create a login, or purchase downloadable games. There are other things included when visiting <a name="diablobtn" href="http://us.battle.net/en/" target="_blank"> battle.net</a>, but definitly going to need to create a login, or purchase one of their games, then submitting your email as an account. Be sure to have this set up, if you wish to play with MPC, with one of Blizzard's product gaming software. Everything can be purchased through <a name="starcraftbtn"></a>      battle.net.<a name="warcraftbtn"></a>
</p></small>
                                <br />
                                <div class="page-header"><h4>Games Developed:</h4></div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="warcraftseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#warcraftcollapse-gaming" aria-expanded="false" aria-controls="warcraftcollapse-gaming">
                                            Warcraft Series 1994 - 2015
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="warcraftcollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="warcraftseries-gaming">
                                      <div class="panel-body">
                                          <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Warcraft(RTS) - 11/24/1994 </h4>
                                            <p class="list-group-item-text">Published by Blizzard, and Interplay Entertainment. This game was the kick off to a popular game today... World of Warcraft.</p>
                                          </a>
                                        </div>
                                        <div class="list-group">
                                          <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Warcraft 2(RTS) - 12/09/1995 </h4>
                                            <p class="list-group-item-text">Sequel to Warcraft 1, and was released a year after the original. A popular game in 1996, won most of the major PC gaming awards, and sold over 2 million copies.</p>
                                          </a>
                                        </div>  
                                          <div class="list-group">
                                              <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">Warcraft 2(RTS) - 12/09/1995 </h4>
                                                <p class="list-group-item-text">Sequel to Warcraft 1, and was released a year after the original. A popular game in 1996, won most of the major PC gaming awards, and sold over 2 million copies.</p>
                                              </a>
                                            </div>
                                          <div class="list-group">
                                              <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">Warcraft 2(RTS) - 12/09/1995 </h4>
                                                <p class="list-group-item-text">Sequel to Warcraft 1, and was released a year after the original. A popular game in 1996, won most of the major PC gaming awards, and sold over 2 million copies.</p>
                                              </a>
                                          </div> 
                                          <div class="list-group">
                                              <a href="http://us.blizzard.com/en-us/games/legacy/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">Warcraft 2(RTS) - 12/09/1995 </h4>
                                                <p class="list-group-item-text">Sequel to Warcraft 1, and was released a year after the original. A popular game in 1996, won most of the major PC gaming awards, and sold over 2 million copies.</p>
                                              </a>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="diabloseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#diablocollapse-gaming" aria-expanded="false" aria-controls="diablocollapse-gaming">
                                          Diablo 1996 - 2012
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="diablocollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="diabloseries-gaming">
                                      <div class="panel-body">
                                        <div class="list-group">
                                          <a href="http://diablo.wikia.com/wiki/Diablo_Wiki" class="list-group-item list-group-item-default" target="_blank">
                                            <h4 class="list-group-item-heading">Diablo - 11/30/1996 </h4>
                                            <p class="list-group-item-text">When the service initially launched with Diable, battle.net offered only a few basic services like chatting, and listing. This was the begining of battle net's server operation, and multi player gaming. Find everything about diablo here.</p>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="starcraftseries-gaming">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#starcraftcollapse-gaming" aria-expanded="false" aria-controls="starcraftcollapse-gaming">
                                            Starcraft Series 1998 - 2013
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="starcraftcollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="starcraftseries-gaming">
                                      <div class="panel-body">
                                         <div class="list-group">
                                            <a href="http://us.blizzard.com/en-us/games/sc/" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Starcraft(RTS) - 03/31/1998
                                                </h4>
                                                <p class="list-group-item-text">Real Time Strategy video game developed late 90's. Was the first of the Starcraft series, and Mac OS version released in 1999, then a Nintendo 64 adaptation co-developed with a mass media released on June 13 2000. This was the starting of Blizzard's developing franchise.</p>
                                            </a>
                                        </div>
                                        <div class="list-group">
                                            <a href="http://starcraft.wikia.com/wiki/StarCraft:_Brood_War" class="list-group-item list-group-item-default" target="_blank">
                                                <h4 class="list-group-item-heading">
                                                Starcraft: Brood War(RTS) - 11/30/1998
                                                </h4>
                                                <p class="list-group-item-text">
                                                    Expansion software for the original game, Starcraft, introduced new campaigns, map tilesets, music,, extra units for each race, and upgrade advancements. Sold almost 10 million copies. Especially popular in South Korea.
                                                </p>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                                </div><!--tablist-->
                              <small class="pull-right"><a href="#top">Back to Top</a></small>
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
                                 <div class="btn-group">
                                    <a type="button" class="btn   btn-default" data-toggle="tooltip" data-placement="left" title="Sign into Steam href=" href="http://store.steampowered.com/about/" target="_blank">
                                    <span class="glyphicon glyphicon-hdd" aria-hidden="false"></span>
                                    <!---->Steam Site<!---->
                                    <a type="button" class="btn   btn-default" data-toggle="tooltip" data-placement="bottom" title="View Steam MPC Accounts" href="https://store.steampowered.com/login/?redir=checkout%2F%3Fpurchasetype%3Dupdatebillinginfo&purchasetype=updatebillinginfo&checkout=1&redir_ssl=1" target="_blank">
                                    <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                    <!---->MPC Steam<!---->
                                    </a>
                                </div>
                                     <br />
                                <div class="page-header">
                                    <h3>MPC Briefing:</h3>     
                                </div>
                                <small><p>Ultilizing Steam will allow yourself to connect with MPC through Steam buddy system. Locate our members, and begin playing the simliar games. Learn our tatics, and learn how to perform better as a team, or as a player. You can get the steam software from the original website at www.steam.com. Steam offers alot of downloadable games, and servers to connect to play these games. They offer some really good deals, and make sure to take advantage on the promotions that steam has to provider. They usually offer these deals in the Xmas, and Summer Seasons.</p></small>
                                    <br />
                                <div class="page-header"><h4>Games Developed:</h4></div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="gameseries-gaming">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#gamecollapse-gaming" aria-expanded="false" aria-controls="gamecollapse-gaming">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="gamecollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="gameseries-gaming">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
                                    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="game2series-gaming">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#game2collapse-gaming" aria-expanded="false" aria-controls="game2collapse-gaming">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="game2collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="game2series-gaming">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
                                    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="game3series-gaming">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#game3collapse-gaming" aria-expanded="false" aria-controls="game3collapse-gaming">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="game3collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="game3series-gaming">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
                            </div>
                            <div class="media-right">
                                <img src="../pics/steam.png" alt="steam.png" class="img-responsive img-rounded media-object" style=" width: 285px;" />
                                <br />
                                <img src="../pics/valvelogo.jpg" alt="valvelogo.jpg" class="img-responsive img-rounded media-object" style="width: 300px;" />
                                <br />
                                <img src="../pics/valve-offices.jpg" alt="valve-offices.jpg" class="img-responsive img-rounded media-object" style="width: 300px;" />
                                <br />
                                <small class="text-center"><p>Valve Office Lobby.</p></small>
                                <br />
                                <div class="page-header">
                                <h4>
                                Currently Active:
                                </h4>
                            </div>
                            <br />
                                <div class="page-header">
                                    <h4>Series Videos:</h4>
                                </div>
                                <div class="btn-group">
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 1
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 2 
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 3
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 4
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 5
                                    </a>
                                        </div>
                                </div>
                                <br />
                                <div class="page-header">
                                    <h4>Screen Shots: [Buttons]</h4>
                                </div>
                                <br />
                                 <div class="btn-group">
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 1
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 2
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 3
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 4
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 5
                                    </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-heading">
                            <h3>Origin - EA Corp. - Founded - 08/24/1996</h3>
                    </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="../pics/originlogo.PNG" alt="originlogo.PNG" class="img-responsive img-rounded media-object" style=" width: 285px;" />
                                <br />
                                <img src="../pics/valvelogo.jpg" alt="valvelogo.jpg" class="img-responsive img-rounded media-object" style="width: 300px;" />
                                <br />
                                <img src="../pics/valve-offices.jpg" alt="valve-offices.jpg" class="img-responsive img-rounded media-object" style="width: 300px;" />
                                <br />
                                <small class="text-center"><p>Origin Office Lobby.</p></small>
                                <br />
                                <div class="page-header">
                                <h4>
                                Currently Active:
                                </h4>
                            </div>
                            <br />
                                <div class="page-header">
                                    <h4>Series Videos:</h4>
                                </div>
                                <div class="btn-group">
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 1
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 2 
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 3
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 4
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 5
                                    </a>
                                        </div>
                                </div>
                                <br />
                                <div class="page-header">
                                    <h4>Screen Shots: [Buttons]</h4>
                                </div>
                                <br />
                                 <div class="btn-group">
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 1
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 2
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 3
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 4
                                    </a>
                                        </div>
                                    <div class="btn btn-default">
                                    <a href="video/warcraft.php" type="button" role="group" aria-label="...">
                                        Game 5
                                    </a>
                                        </div>
                                </div>
                            </div>
                            <div class="media-body">
                                 <div class="btn-group">
                                    <a type="button" class="btn   btn-default" data-toggle="tooltip" data-placement="left" title="Sign into Steam href=" href="http://store.steampowered.com/about/" target="_blank">
                                    <span class="glyphicon glyphicon-hdd" aria-hidden="false"></span>
                                    <!---->Steam Site<!---->
                                    <a type="button" class="btn   btn-default" data-toggle="tooltip" data-placement="bottom" title="View Steam MPC Accounts" href="https://store.steampowered.com/login/?redir=checkout%2F%3Fpurchasetype%3Dupdatebillinginfo&purchasetype=updatebillinginfo&checkout=1&redir_ssl=1" target="_blank">
                                    <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                    <!---->MPC Steam<!---->
                                    </a>
                                </div>
                                     <br />
                                <div class="page-header">
                                    <h3>MPC Briefing:</h3>     
                                </div>
                                <small><p>Ultilizing Steam will allow yourself to connect with MPC through Steam buddy system. Locate our members, and begin playing the simliar games. Learn our tatics, and learn how to perform better as a team, or as a player. You can get the steam software from the original website at www.steam.com. Steam offers alot of downloadable games, and servers to connect to play these games. They offer some really good deals, and make sure to take advantage on the promotions that steam has to provider. They usually offer these deals in the Xmas, and Summer Seasons.</p></small>
                                    <br />
                                <div class="page-header"><h4>Games Developed:</h4></div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="gameseries-gaming">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#gamecollapse-gaming" aria-expanded="false" aria-controls="gamecollapse-gaming">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="gamecollapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="gameseries-gaming">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
                                    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="game2series-gaming">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#game2collapse-gaming" aria-expanded="false" aria-controls="game2collapse-gaming">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="game2collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="game2series-gaming">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
                                    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="game3series-gaming">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#game3collapse-gaming" aria-expanded="false" aria-controls="game3collapse-gaming">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="game3collapse-gaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="game3series-gaming">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
    </body>
    </html>
