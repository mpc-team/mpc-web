
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
<?php
    echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
    echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
    echo StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
    echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
    echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
?>
    <meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
    <meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
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
     <center>
        <img src="../pics/games.png" alt="games.png" title="Games Banner" class="img-reponsive img-rounded" style="width: 490px;" />
     </center>
     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Starcraft 2 Heart of the Swarm</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                <div class="col-xs-3">
                                <img src="../pics/starcraft2blizzardlogo.PNG" alt="starcraft2blizzardlogo.PNG" title="Starcraft 2 Heart of the Swarm" class="img-responsive img-rounded" style="height: 85px; width: 200px;" /><br />
                                <img src="../pics/capmpcsc2icon.PNG" alt="capmpcsc2icon.PNG" title="MPC Starcraft 2 Logo" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                                </div>
                                    <div class="col-xs-9">
                                    <div class="page-header"><h4>Star Craft 2 Heart of the Swarm - Battle.net -Blizzard Entertainment.</h4></div>
                                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;Starcraft is the core foundation of MPC as of current time. The original founders were developing a clan that will stablize based on a mobile web, and communcations to keep the clan in recruiting status, amongst providing fun for the members, and the people they recruit. Starcraft is based on an Real Time Strategy game engine, and very intense when it comes to prioritizing, and performance. Be sure to visit in game with us, and work together in team battles. We do offer 1 vs 1 observer training, and do leagues often to increase our ranks. Learn how to Find out us on Starcraft by Clicking the button Here.</p>
                                    <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                                    MPC SC2 INFO
                                    </a>
                                    <div class="modal fade mpcsc2info-gaming" id="mpcsc2info-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="mpcsc2info-gaming">MPC Sc2 Information</h4>
                                    </div>
                                    <div class="modal-body">
                                    <img src="../pics/sc2bannermpc.PNG" alt="sc2bannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                                    <h3 class="modal-title">How to find us?</h3>
                                    <p> &ensp;&ensp;&ensp;&ensp;&ensp;<b>Copy Link Method:</b> Copy this link and paste it into your chat box, then click on it to reach our in-game HQ to reach out to us. battlenet://starcraft/clan/1/9466 (Tip: Use Control + C to copy this link, and use Control + V to paste it into your starcraft 2 game. See the example photo.</p><br />
                                    <center><img src="../pics/examplelinksc2mpc.PNG" alt="examplelinksc2mpc.PNG" class="img-responsive img-rounded" title="example photo" style="height:100pxl; width:400px;"/></center>
                                    <br />
                                    <h3 class="modal-title pull-right">Search In Game Group Channels</h3>
                                    <p class="pull-right">&ensp;&ensp;&ensp;&ensp;&ensp;Log on to your account, and access the main menu dashboard, and next to the timer, click on the button that shows 2 people icon. This is the group channel section that displays the history, and the allows to do a search.Click on Find, then type in "MPC" in the search field, and changing "featured" to "strategies and coaching", and to send the search, click on the magnifying glass icon. See example photo.</p>
                                    <br />
                                    <img src="../pics/findgroupsc2mpc.PNG" alt="findgroupsc2mpc.PNG" title="Search" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                                    </div>
                                    <br />
                                    <h3 class="modal-title">These are all of our channels</h3>
                                    <p>Feel Free to find us, using the Game Links Button on the previous page. See example photo on what to look for during the search.</p>
                                    <br />
                                    <img src="../pics/foundgroupsc2mpc.PNG" alt="foundgroupsc2mpc.PNG" title="found example" class="img-responsive img-rounded" style="height:100px; width:600px;" />
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2links" >
                                    GAME LINKS
                                    </a>
                                        <div class="modal fade mpcsc2links" id="mpcsc2info-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="mpcsc2links">Link Information:</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="../pics/sc2bannermpc.PNG" alt="sc2bannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                                                    <br />

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2screenshots" >
                                    Screen Shots
                                    </a>
                                    <div class="modal fade mpcsc2screenshots" id="mpcsc2screenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="mpcsc2links">Screen Shots</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="../pics/sc2bannermpc.PNG" alt="sc2bannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                                                <br />

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2video" >
                                    Videos
                                    </a>
                                    <div class="modal fade mpcsc2video" id="mpcsc2screenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="mpcsc2video">Video</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="../pics/sc2bannermpc.PNG" alt="sc2bannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                                                <br />

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2members" >
                                    
                                        MPC Members
                                        
                                    </a>
                                        <div class="modal fade mpcsc2members" id="mpcsc2member-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="mpcsc2members">Video</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="../pics/sc2bannermpc.PNG" alt="sc2bannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                                                    <br />
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Counter Strike Global Offensive
                        </a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
                        <img src="../pics/cs-go-logo.png" alt="cs-go-logo.png" title="Counter Strike Global Offensive" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                        <img src="../pics/capmpcsc2icon.PNG" alt="capmpcsc2icon.PNG" title="MPC Cs-Go Logo" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />    
                        </div>
                        <div class="col-xs-10">
                        <div class="page-header"><h4 class="media-heading">Counter Strike Global Offensive - Stream - Valve Corp.</h4></div>
                        <p>&ensp;&ensp;&ensp;&ensp;&ensp;Counter-Strike: Global Offensive is an online tactical first-person shooter developed by Valve Corporation and Hidden Path Entertainment, who also maintained Counter-Strike: Source after its release</p>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                        MPC CSGO INFO
                        </a>
                        <div class="modal fade mpcsc2info-gaming" id="mpcsc2info-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcsc2info-gaming">MPC CSGO Information</h4>
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
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2links" >
                        GAME LINKS
                        </a>
                        <div class="modal fade mpccsgolinks" id="mpcsc2info-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc CS Go Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpccsgolinks">Link Information:</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="csgobannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpccsgoscreenshots" >
                        Screen Shots
                        </a>
                        <div class="modal fade mpccsgoscreenshots" id="mpcsc2screenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpccsgolinks">Screen Shots</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="csgobannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpccsgovideo" >
                        Videos
                        </a>
                        <div class="modal fade mpccsgovideo" id="mpccsgoscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpccsgovideo">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="../pics/csgobannermpc.PNG" alt="csgobannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpccsgomembers" >
                        MPC Members
                        </a>
                        <div class="modal fade mpccsgomembers" id="mpccsgomember-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Counter Strike Global Offensive Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcsc2members">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="sc2bannermpc.PNG" title="sc2 mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        World of WarCraft Warlords of Draenor
                        </a>
                        </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
                        <img src="../pics/blizzardwowlogo.PNG" alt="wow.PNG" title="World of Warcraft" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                        <img src="../pics/mpcwow.PNG" alt="mpcwow.PNG" title="Worlf of Warcraft" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                        </div>
                        <div class="col-xs-10">
                        <div class="page-header"><h4>World of WarCraft - Battle.net -Blizzard Entertainment.</h4> </div>
                        <p>&ensp;&ensp;&ensp;&ensp;&ensp;Warcraft is the oldest game MPC partcipates in, but yet one of the best games to support the community. World of Warcraft offers a great guild interface to keep the clan united as one during the experiences of this game. Organization, team work, self geared, and good decision making is required to operate in "pvp" (player vs player) environment. MPC doesn't take part into raids, or role playing, but does love to operate the strategic multiplayer mode for battle grounds, and arena combat. This is a new section for MPC to endorse, and can use as much help that is given.</p>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                        MPC WOW INFO
                        </a>
                        <div class="modal fade mpcwowinfo-gaming" id="mpcwowinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Starcraft 2 Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcsc2info-gaming">MPC WoW Information</h4>
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
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
                        GAME LINKS
                        </a>
                        <div class="modal fade mpcwowlinks" id="mpcwowinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc WOW Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcwowlinks">Link Information:</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="wowbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowscreenshots" >
                        Screen Shots
                        </a>
                        <div class="modal fade mpcwowscreenshots" id="mpcsc2screenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Wow Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcwowlinks">Screen Shots</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="wowbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                        Videos
                        </a>
                        <div class="modal fade mpcwowvideo" id="mpcwowscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc World of Warcraft Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcwowvideo">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="../pics/wowbannermpc.PNG" alt="wowbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowmembers" >
                        MPC Members
                        </a>
                        <div class="modal fade mpcwowmembers" id="mpcwowmember-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc World of Warcraft Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcwowmembers">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="wowbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Heroes of the Storm
                        </a>
                        </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
                        <img src="../pics/hotslogo.png" alt="hotslogo.PNG" title="Heroes of the Storm Logo" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                        <img src="../pics/heroesimg.jpg" alt="heroesimg.jpg" title="Heros of the Storm" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                        </div>
                        <div class="col-xs-10">
                        <div class="page-header"><h3>Header</h3></div>
                            <p>text text text</p>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchotsinfo-gaming" >
                        MPC HEROES INFO
                        </a>
                        <div class="modal fade mpchotsinfo-gaming" id="mpchotsinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchotsinfo-gaming">MPC hots Information</h4>
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
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
                        GAME LINKS
                        </a>
                        <div class="modal fade mpchotslinks" id="mpchotsinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc hots Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchotslinks">Link Information:</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="hotsbannermpc.PNG" title="hots mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchotsscreenshots" >
                        Screen Shots
                        </a>
                        <div class="modal fade mpchotsscreenshots" id="mpchotsscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc hots Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchotslinks">Screen Shots</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="hotsbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                        Videos
                        </a>
                        <div class="modal fade mpchotsvideo" id="mpchotsscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcleaguevideo">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="../pics/hotsbannermpc.PNG" alt="hotsbannermpc.PNG" title="hots mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchotsmembers" >
                        MPC Members
                        </a>
                        <div class="modal fade mpchotsmembers" id="mpchotsmember-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchotsmembers">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="hotsbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        League of Legends
                        </a>
                        </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
                        <img src="../pics/leagueoflegendslogo.png" alt="leagueoflegendslogo.PNG" title="League of Legends" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                        <img src="#" alt="#" title="League of Legends" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                            </div>    
                        <div class="col-xs-10">
                        <div class="page-header"><h3>Text Header</h3></div> 
                        <p>text text text</p>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                        MPC LOL INFO
                        </a>
                        <div class="modal fade mpclolinfo-gaming" id="mpclolinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpclolinfo-gaming">MPC LOL Information</h4>
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
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
                        GAME LINKS
                        </a>
                        <div class="modal fade mpclollinks" id="mpclolinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc LOL Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpclollinks">Link Information:</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="lolbannermpc.PNG" title="lol mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpclolscreenshots" >
                        Screen Shots
                        </a>
                        <div class="modal fade mpclolscreenshots" id="mpclolscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Lol Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpclollinks">Screen Shots</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="lolbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                        Videos
                        </a>
                        <div class="modal fade mpclolvideo" id="mpclolscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcleaguevideo">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="../pics/lolbannermpc.PNG" alt="lolbannermpc.PNG" title="lol mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpclolmembers" >
                        MPC Members
                        </a>
                        <div class="modal fade mpclolmembers" id="mpclolmember-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpclolmembers">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="lolbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Hearth Stone
                        </a>
                        </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
                        <img src="../pics/leagueoflegendslogo.png" alt="leagueoflegendslogo.PNG" title="League of Legends" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                        <img src="#" alt="#" title="League of Legends" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                            </div>    
                        <div class="col-xs-10">
                        <div class="page-header"><h3>Text Header</h3></div> 
                        <p>text text text</p>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchearthinfo-gaming" >
                        MPC Hearth Stone INFO
                        </a>
                        <div class="modal fade mpchearthinfo-gaming" id="mpchearthinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Hearth Stone Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchearthinfo-gaming">MPC Hearth Stone Information</h4>
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
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchearthlinks" >
                        GAME LINKS
                        </a>
                        <div class="modal fade mpchearthlinks" id="mpchearthinfo-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc Hearth Stone Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchearthlinks">Link Information:</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="hearthbannermpc.PNG" title="hearth mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchearthscreenshots" >
                        Screen Shots
                        </a>
                        <div class="modal fade mpchearthscreenshots" id="mpchearthscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc hearth Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchearthlinks">Screen Shots</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="hearthbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchearthvideo" >
                        Videos
                        </a>
                        <div class="modal fade mpchearthvideo" id="mpchearthscreenshot-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpcleaguevideo">Video</h4>
                        </div>
                        <div class="modal-body">
                        <img src="../pics/hearthbannermpc.PNG" alt="hearthbannermpc.PNG" title="hearth mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <a type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".mpchearthmembers" >
                        MPC Members
                        </a>
                        <div class="modal fade mpchearthmembers" id="mpchearthmember-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="mpchearthmembers">MPC Hearth Stone Members</h4>
                        </div>
                        <div class="modal-body">
                        <img src="#" alt="hearthbannermpc.PNG" title="Hearth Stone MPC" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                        <br />

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
            
                         <div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>