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
<div class="row" style="height: 100px;">
    &nbsp;
    </div>
</div>  <!--row-->     
</div>  <!--well-->
    <div class="well">
        <div class="row">
            <div class="col-xs-6">
                
            </div>
            <div class="col-xs-6">
                <div class="row">
                    <div class="modal" id="starcraft2">
                        <div class="modal-header">
                            <h3 class="modal-title">
                                MPC on Starcraft 2 Series
                            </h3>    
                        </div>
                        <div class="modal-content">
                            <div>
                                <p>This is a window. It has 3 main elements</p>
                                <ul>
                                    <li>header</li>
                                    <li>body</li>
                                    <li>footer</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="modal-close button alpha primary">Close Me!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div><!--container-->

    <div class="container-fluid">
        <?php PrintFooter($ROOT); ?>
    </div>
</body>

</html>
