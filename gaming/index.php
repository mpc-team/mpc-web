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
    PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
    PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
    PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
    PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
    PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
?>
    <meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
    <meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
    <div class="container-fluid">
    <?php PrintNavbar("gaming", $ROOT); ?>
    </div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <center>
                    <img src="../pics/mpcgamingbanner.png" alt="mpcgamingbanner.png" title="mpc gaming" class="img-responsive img-rounded" style="height: 200; width: 600px; padding: 25px; border: solid;"/>
                    </center>
                    <br />
                    <small>
                        <p>&ensp;&ensp;&ensp;&ensp;&ensp;MPC is a multi-level gaming clan that specializes on one main concept... Team. We would like to develope a community that engages both the players, and the games they play. We try to provide the essential fundamentals of gaming, and that includes: ventrilo, website domain, a foundation of solid core members, training, stream zone, and more. It's a friendly environment for all ages, and disrespect to either members, or to public community will not be tolerated. Please be advised that the people streaming on this website have complete control of the language filter. Do not be offended, just walk away from that streamer's cast on this website.</p>
                    </small>
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
                <div class="row">
                <center>
                    <img src="../pics/ventrilobanner.png" alt="ventrilobanner.png" class="img-responsive" style="height: auto; width: auto;" />
                </center>
                </div>
                    <br />
                    <div class="well">
                        <div class="row" style="height: 300px;">
                            
                        <script type="text/javascript" src="//www.typefrag.com/Server-Status/script.aspx?id=34656fb0-2938-46d9-a1b0-001bef8e4793"></script>      
                        </div>    
                            <br />
                        <small>
                            <p style="color: #ffffff">Need Help Setting up Ventrilo?</p>    
                        </small> 
                            <br />
                    <div class="btn-group">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".ventrilo-installment-video" data-placement="top" title="Youtube Video" data-toggle="tooltip">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Getting Started</button> 
                            <div class="modal fade ventrilo-installment-video" tabindex="-1" role="dialog" aria-labelledby="Get-Started-Ventrilo" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/tzPtst-tpJc"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            <button type="button" class="btn btn-success  " data-target=".downloadventrilo" data-dismiss="modal" aria-label="close" data-placement="top" title="Download Ventrilo Links" data-toggle="modal" data-toggle="tooltip">
                                                <span class="glyphicon glyphicon-download-alt" aria-hidden="true">&times;</span>
                                                    Download
                                                </button>    
                                                    <div class="modal fade downloadventrilo" tabindex="-1" role="dialog" aria-labelledby="Download-Ventrilo" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <h4 class="modal-title">Download Ventrilo</h4>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-xs-6">
                                                                            
                                                                                    <small class="pull-left"><p>Ventrilo can be used for home / personal applications like talking to friends and family, or playing organized online games where Voice Comm can make them more exciting and productive.

It can also be used in an enterprise environment as a productivity tool for conducting long distance group discussions. This would also help when using group collaboration programs that don't provide any kind of voice communication support.

A Ventrilo server could be setup in order to complement a web site that has voice interaction with its creators or for communicating with other people who share a common interest.

For those people that use Windows or Linux based firewall's to connect their internal home LAN's with the Internet can setup a server on the firewall computer so that friends and family can connect to your server and talk for free.

If voice communication isn't your cup of tea then you can always use Ventrilo as a more reliable form of IRC without the hassles or frustration of trying to teach someone how to setup a real IRC client.</p></small>
                                                                            
                                                                            </div>
                                                                            <div class="col-xs-6">
                                                                                <ul class="list-group">
                                                                                  <li class="list-group-item list-group-item-success"><a href="http://ventrilo.com/dlprod.php?id=1">Windows 32bit-XP,Vista,Vindows 7</a></li>
                                                                                  <li class="list-group-item list-group-item-success"><a href="http://ventrilo.com/dlprod.php?id=4">Windows 64bit-All 64bit platforms</a></li>
                                                                                  <li class="list-group-item list-group-item-success"><a href="http://ventrilo.com/dlprod.php?id=5">Windows 9x/2000 - 95 / 98 / ME and Windows 2000</a></li>
                                                                                  <li class="list-group-item list-group-item-success"><a href="http://ventrilo.com/dlprod.php?id=2">Mac OSX 10.4 or Higher - 32bit</a></li>
                                                                                  <li class="list-group-item list-group-item-success"><a href="https://play.google.com/store/apps/details?id=com.jtxdriggers.android.ventriloid&hl=en">Andriod Application</a></li>
                                                                                  <li class="list-group-item list-group-item-success"><a href="https://itunes.apple.com/us/app/ventrilode/id486115720?mt=8">iPhone Application</a></li>
                                                                                </ul>
                                                                                <br />
                                                                                <img src="../pics/ventrilo123.jpg" alt="ventrilo123.jpg" class="img-responsive img-rounded" style="height: 100px; width: 150px; margin-left: 10px;" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success  " data-dismiss="modal">Close</button>
                                            </div>
                                    </div>
                                </div>
                            </div> 
                            <button type="button" class="btn btn-success" data-placement="top" title="ventrilo forums" data-toggle="tooltip" href="../forum/index.php" target="_blank">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                <!---->Forum<!---->
                            </button> 
                            <button type="button" class="btn btn-success" data-placement="right" title="Ventrilo/setup.php" data-toggle="tooltip"  href="http://www.ventrilo.com/faq.php" target="_blank">
                                <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                                <!---->Ventrilo FAQ<!---->
                            </button>
                        <br /> 
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".ventinfo">
                            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                            Ventrilo Information
                        </button> 
                        <div class="modal fade ventinfo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="row">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Ventrilo Information</h3>
                                            </div>
                                                <div class="panel-body">
                                                    <p> Hostname: "lead.typefrag.com" <br />
                                                    Port Number: 7920 <br />
                                                    No - Password <br /></p>
                                                    <br />
                                                </div>
                                                    <div class="panel-footer">
                                                        <a href="http://www.ventrilo.com" title="Ventrilo.com">www.ventrilo.com</a>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".rules">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                                Rules
                        </button> 
                            <div class="modal fade rules" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="row">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Ventrilo Rules</h3>
                                            </div>
                                                <div class="panel-body">
                                                    <p> Rules:<br />
                                                        <ol class="list-group">
                                                            <li class="list-group-item list-group-item-danger"><p>No Spamming</p></li>
                                                            <li class="list-group-item list-group-item-danger"><p>No Screaming</p></li>
                                                            <li class="list-group-item list-group-item-danger"><p>No Disrespecting Members</p></li>
                                                            <li class="list-group-item list-group-item-danger"><p>No Threatening</p></li>
                                                            <li class="list-group-item list-group-item-danger"><p>No Hacking</p></li>
                                                            <li class="list-group-item list-group-item-danger"><p>No Disturbing other players</p></li>
                                                            <li class="list-group-item list-group-item-danger"><p>No Poor Mis-Conduct - be professional</p></li>
                                                            <li class="list-group-item list-group-item-success"><p>Yes be kind, and have fun!</p></li>
                                                            </ol>
                                                    </p>
                                                            <br />
                                                    <p> Violation Penalty:<br />
                                                        <ol class="list-group">
                                                            <li class="list-group-item list-group-item-danger">
                                                                <p>Verbal Warning</p>
                                                            </li>
                                                            <li class="list-group-item list-group-item-danger">
                                                                <p>No response, or failure to act - kicked</p>
                                                            </li>
                                                            <li class="list-group-item list-group-item-danger">
                                                                <p>Returning, and still no comply - banned</p>
                                                            </li>
                                                        </ol>
                                                    </p>
                                                </div>
                                        </div>
                    </div>  
                                    </div>
                                </div>
                </div>
                </div>
            </div>
                <div class="well">
                    <center>
                        <img src="../pics/mpcstream.png" alt="mpcstream.png" class="img-responsive img-rounded" style="height:100px; width: 600px;"  />
                    <br />
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".Streamjoe">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        KillerJoe
                    </button>
                        <div class="modal fade Streamjoe" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <br />
                                                <iframe src="http://www.twitch.tv/killerjoe1231/embed" frameborder="0" scrolling="no" height="400px" width="300px"></iframe><br /><p>https://support.twitter.com/articles/20164833-adding-a-follow-button-to-your-website#</p>
                                        </div>
                                        <div class="col-xs-6 pull-right">
                                            <br />
                                                <iframe src="http://www.twitch.tv/killerjoe1231/chat?popout=" frameborder="4" scrolling="yes" height="400px" width="285px"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".Streamlungy">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        TheLungy
                    </button>
                        <div class="modal fade Streamlungy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="row" id="thelungy-streampopup-bg-image"><!--id global.css-->
                                        <div class="col-xs-6">
                                        <br />
                                            <iframe src="http://www.twitch.tv/the_lungy/embed" frameborder="0" scrolling="no" height="400px" width="300"></iframe><br /><p></p>
                                        </div>
                                        <div class="col-xs-6">
                                        <br />
                                            <iframe src="http://www.twitch.tv/the_lungy/chat?popout=" frameborder="0" scrolling="no" height="400" width="285"></iframe>
                                            <br />
                                            <small class="pull-right">Need a Login to Twitch? &ensp;&ensp;&ensp;<a href="http://www.twitch.tv/" class="btn btn-success btn-sm" target="_blank">www.twitch.tv</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".StreamVae">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        VaeVictus
                    </button>
                        <div class="modal fade StreamVae" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <br />
                                            <iframe src="http://www.twitch.tv/vaevictissc/embed" frameborder="0" scrolling="no" height="400" width="300"></iframe><br /><p>https://support.twitter.com/articles/20164833-adding-a-follow-button-to-your-website#</p>
                                        </div>
                                        <div class="col-xs-6 pull-right">
                                        <br />
                                            <iframe src="http://www.twitch.tv/vaevictissc/chat?popout=" frameborder="0" scrolling="no" height="400" width="285"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            <div class="well">
                <div class="row">
                <center>
                <img src="../pics/gamingservices.png" alt="gamingservices.png" class="img-responsive img-rounded" style="height: 100px; width: 700px;" />
                </center>
                </div>
                <div class="row">
                <div class="col-md-4 text-center">
                <center>
                <img src="../pics/bnet.PNG" alt="bnt.PNG" class="img-responsive img-rounded" style="height: 200px; width: 300px;" />
                </center>
                <br />
                <div class="btn-group">
                <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Sign into Battle.net" href="https://us.battle.net/account/creation/tos.html" target="_blank">
                <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
                <!---->Battle.net Service<!---->
                </button>
                <button type="button" class="btn   btn-success" data-toggle="tooltip" data-placement="left" title="View Battle.net MPC Accounts" href="#">
                <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                <!---->MPC Battle.net<!---->
                </button>
                </div>
                </div>
                <div class="col-md-4 text-center">
                <center>
                <img src="../pics/steam.png" alt="steam.png" class="img-responsive img-rounded" style="min-height: 25px; min-width: 50px; max-height: 200px; width: 300px;" />
                </center>
                <br />
                <div class="btn-group">
                <button type="button" class="btn   btn-success" data-toggle="tooltip" data-placement="left" title="Sign into Steam href=" href="http://store.steampowered.com/about/" target="_blank">
                <span class="glyphicon glyphicon-hdd" aria-hidden="false"></span>
                <!---->Steam Service<!---->
                </a>
                <button type="button" class="btn   btn-success" data-toggle="tooltip" data-placement="bottom" title="View Steam MPC Accounts" href="https://store.steampowered.com/login/?redir=checkout%2F%3Fpurchasetype%3Dupdatebillinginfo&purchasetype=updatebillinginfo&checkout=1&redir_ssl=1" target="_blank">
                <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                <!---->MPC Steam<!---->
                </button>
                </div>
                </div>
                <div class="col-md-4 text-center">
                <center>
                <img src="../pics/originlogo.PNG" alt="originlogo.PNG" class="img-responsive img-rounded" style="min-height: 25px; min-width: 50px; max-height: 200px; width: 300px;" />
                </center>
                <br />
                <div class="btn-group">
                <button type="button" class="btn   btn-success" data-toggle="tooltip" data-placement="bottom" title="Sign into Steam" href="https://www.origin.com/en-us/download" target="_blank">
                <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
                <!---->Origin EA Service<!---->
                </button>
                <button type="button" class="btn   btn-success" data-toggle="tooltip" data-placement="bottom" title="View Origin MPC Accounts" href="https://www.origin.com/en-us/store/?utm_campaign=origin-search-us-pbm-g-origin&utm_medium=cpc&utm_source=google&utm_term=origin%20sign%20in&sourceid=origin-search-us-pbm-g-origin" target="_blank">
                <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                <!---->MPC Origin<!---->
                </button>
                </div>  <!--btn0group-->
                </div>  <!--col-->
            </div><!--row-->     

            <div class="row" style="height: 100px;">
            </div>
        </div> <!--well-->
    <!--<div class="well">
        <div class="row">
            <div class="btn-group">
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#sc2collapse-gaming" aria-expanded="false" aria-controls="sc2collapse-gaming">Star Craft 2</button>
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#wowcollapse-gaming" aria-expanded="false" aria-controls="wowcollapse-gaming">World of WarCraft</button>
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#hotscollapse-gaming" aria-expanded="false" aria-controls="hotscollapse-gaming">Heros of the Storm</button>
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#hearthcollapse-gaming" aria-expanded="false" aria-controls="hearthcollapse-gaming">Hearth Stone</button>
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#csgocollapse-gaming" aria-expanded="false" aria-controls="csgocollapse-gaming">Counter Strike GO</button>
            </div>
        </div>
         <div class="collapse" id="sc2collapse-gaming">
        <div class="well">
            <div class="row">
               <div class="media">
                   <div class="media-left">
                       <a href="#">
                        <img src="../pics/starcraft2blizzardlogo.PNG" alt="starcraft2blizzardlogo.PNG" title="Starcraft 2 Heart of the Swarm" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                           <img src="../pics/capmpcsc2icon.PNG" alt="capmpcsc2icon.PNG" title="MPC Starcraft 2 Logo" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                       </a>
                       </div>
                <div class="media-body">
                    <h4 class="media-heading">Star Craft 2 Heart of the Swarm - Battle.net -Blizzard Entertainment.</h4>
                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;Starcraft is the core foundation of MPC as of current time. The original founders were developing a clan that will stablize based on a mobile web, and communcations to keep the clan in recruiting status, amongst providing fun for the members, and the people they recruit. Starcraft is based on an Real Time Strategy game engine, and very intense when it comes to prioritizing, and performance. Be sure to visit in game with us, and work together in team battles. We do offer 1 vs 1 observer training, and do leagues often to increase our ranks. Learn how to Find out us on Starcraft by Clicking the button Here.</p>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                    MPC SC2 INFO
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2links" >
                    GAME LINKS
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2screenshots" >
                    Screen Shots
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2video" >
                    Videos
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2members" >
                    MPC Members
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
     <div class="collapse" id="csgocollapse-gaming">
        <div class="well">
            <div class="row">
               <div class="media">
                   <div class="media-left">
                       <a href="#">
                        <img src="../pics/cs-go-logo.png" alt="cs-go-logo.png" title="Counter Strike Global Offensive" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                           <img src="../pics/capmpcsc2icon.PNG" alt="capmpcsc2icon.PNG" title="MPC Cs-Go Logo" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                       </a>
                       </div>
                <div class="media-body">
                    <h4 class="media-heading">Star Craft 2 Heart of the Swarm - Battle.net -Blizzard Entertainment.</h4>
                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;Starcraft is the core foundation of MPC as of current time. The original founders were developing a clan that will stablize based on a mobile web, and communcations to keep the clan in recruiting status, amongst providing fun for the members, and the people they recruit. Starcraft is based on an Real Time Strategy game engine, and very intense when it comes to prioritizing, and performance. Be sure to visit in game with us, and work together in team battles. We do offer 1 vs 1 observer training, and do leagues often to increase our ranks. Learn how to Find out us on Starcraft by Clicking the button Here.</p>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                    MPC CSGO INFO
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2links" >
                    GAME LINKS
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpccsgoscreenshots" >
                    Screen Shots
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpccsgovideo" >
                    Videos
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpccsgomembers" >
                    MPC Members
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="collapse" id="wowcollapse-gaming">
        <div class="well">
            <div class="row">
               <div class="media">
                   <div class="media-left">
                       <a href="#">
                        <img src="../pics/blizzardwowlogo.PNG" alt="wow.PNG" title="World of Warcraft" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                           <img src="../pics/mpcwow.PNG" alt="mpcwow.PNG" title="Worlf of Warcraft" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                       </a>
                       </div>
                <div class="media-body">
                    <h4 class="media-heading">World of WarCraft - Battle.net -Blizzard Entertainment.</h4>
                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;Warcraft is the oldest game MPC partcipates in, but yet one of the best games to support the community. World of Warcraft offers a great guild interface to keep the clan united as one during the experiences of this game. Organization, team work, self geared, and good decision making is required to operate in "pvp" (player vs player) environment. MPC doesn't take part into raids, or role playing, but does love to operate the strategic multiplayer mode for battle grounds, and arena combat. This is a new section for MPC to endorse, and can use as much help that is given.</p>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                    MPC WOW INFO
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
                    GAME LINKS
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowscreenshots" >
                    Screen Shots
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                    Videos
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowmembers" >
                    MPC Members
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
     <div class="collapse" id="hearthcollapse-gaming">
        <div class="well">
            <div class="row">
               <div class="media">
                   <div class="media-left">
                       <a href="#">
                        <img src="../pics/leagueoflegendslogo.png" alt="leagueoflegendslogo.PNG" title="League of Legends" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                           <img src="#" alt="#" title="League of Legends" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                       </a>
                       </div>
                <div class="media-body">
                    <h4 class="media-heading">Star Craft 2 Heart of the Swarm - Battle.net -Blizzard Entertainment.</h4>
                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;Starcraft is the core foundation of MPC as of current time. The original founders were developing a clan that will stablize based on a mobile web, and communcations to keep the clan in recruiting status, amongst providing fun for the members, and the people they recruit. Starcraft is based on an Real Time Strategy game engine, and very intense when it comes to prioritizing, and performance. Be sure to visit in game with us, and work together in team battles. We do offer 1 vs 1 observer training, and do leagues often to increase our ranks. Learn how to Find out us on Starcraft by Clicking the button Here.</p>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                    MPC Hearth Stone INFO
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthlinks" >
                    GAME LINKS
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthscreenshots" >
                    Screen Shots
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                    Videos
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthmembers" >
                    MPC Members
                </button>
                <div class="modal fade mpchearthmembers" id="mpchearthmember-gaming" tabindex="-1" role="dialog" aria-labelledby="Mpc League of Legends Information" aria-hidden="true" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="mpchearthmembers">Video</h4>
                            </div>
                        <div class="modal-body">
                            <img src="#" alt="hearthbannermpc.PNG" title="wow mpc" class="img-responsive img-rounded" style="height: 100px; width: 600px;" />
                            <br />
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="collapse" id="hotscollapse-gaming">
        <div class="well">
            <div class="row">
               <div class="media">
                   <div class="media-left">
                       <a href="#">
                        <img src="../pics/hotslogo.png" alt="hotslogo.PNG" title="Heroes of the Storm Logo" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                           <img src="../pics/heroesimg.jpg" alt="heroesimg.jpg" title="Heros of the Storm" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                       </a>
                       </div>
                <div class="media-body">
                    <h4 class="media-heading">Heroes of the Storm - Battle.net -Blizzard Entertainment.</h4>
                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;TextTextTextTextTextTextTextTextTextTextTextTextTextTextText</p>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchotsinfo-gaming" >
                    MPC HEROES INFO
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
                    GAME LINKS
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchotsscreenshots" >
                    Screen Shots
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                    Videos
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchotsmembers" >
                    MPC Members
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="collapse" id="lolcollapse-gaming">
        <div class="well">
            <div class="row">
               <div class="media">
                   <div class="media-left">
                       <a href="#">
                        <img src="../pics/leagueoflegendslogo.png" alt="leagueoflegendslogo.PNG" title="League of Legends" class="img-responsive img-rounded" style="height: 25px; width: 100px;" /><br />
                           <img src="#" alt="#" title="League of Legends" class="img-responsive img-rounded" style="height: 55px; width:100px" /><br />
                       </a>
                       </div>
                <div class="media-body">
                    <h4 class="media-heading">Star Craft 2 Heart of the Swarm - Battle.net -Blizzard Entertainment.</h4>
                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;Starcraft is the core foundation of MPC as of current time. The original founders were developing a clan that will stablize based on a mobile web, and communcations to keep the clan in recruiting status, amongst providing fun for the members, and the people they recruit. Starcraft is based on an Real Time Strategy game engine, and very intense when it comes to prioritizing, and performance. Be sure to visit in game with us, and work together in team battles. We do offer 1 vs 1 observer training, and do leagues often to increase our ranks. Learn how to Find out us on Starcraft by Clicking the button Here.</p>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
                    MPC LOL INFO
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
                    GAME LINKS
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpclolscreenshots" >
                    Screen Shots
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
                    Videos
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpclolmembers" >
                    MPC Members
                </button>
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
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        
        
        
    </div>-->
    <div class="well">
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
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
MPC SC2 INFO
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2links" >
GAME LINKS
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2screenshots" >
Screen Shots
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2video" >
Videos
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2members" >
MPC Members
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
MPC CSGO INFO
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2links" >
GAME LINKS
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpccsgoscreenshots" >
Screen Shots
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpccsgovideo" >
Videos
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpccsgomembers" >
MPC Members
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
MPC WOW INFO
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
GAME LINKS
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowscreenshots" >
Screen Shots
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
Videos
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowmembers" >
MPC Members
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchotsinfo-gaming" >
MPC HEROES INFO
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
GAME LINKS
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchotsscreenshots" >
Screen Shots
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
Videos
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchotsmembers" >
MPC Members
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcsc2info-gaming" >
MPC LOL INFO
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowlinks" >
GAME LINKS
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpclolscreenshots" >
Screen Shots
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpcwowvideo" >
Videos
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpclolmembers" >
MPC Members
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthinfo-gaming" >
MPC Hearth Stone INFO
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthlinks" >
GAME LINKS
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthscreenshots" >
Screen Shots
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthvideo" >
Videos
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".mpchearthmembers" >
MPC Members
</button>
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
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
</div><!--content-->
</div><!--container-->

<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>
</body>

</html>
