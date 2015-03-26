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
    <?php PrintNavbar("gaming", $ROOT); ?>
    </div>
        <div class="container">
            <div class="content">
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
            </div>
            </div>
            
<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>
</body>

</html>