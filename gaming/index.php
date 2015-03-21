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
			<div class="page-header text-center">
			<h1>MPC - Gaming Room - "Digitized"</h1>
			</div>
			<small>
			<p style="margin-left: 15px;">MPC is a multi-level gaming clan that specializes on one main concept... Team. We would like to develope a community that engages both the players, and the games they play. We try to provide the essential fundamentals of gaming, and that includes: ventrilo, website domain, a foundation of solid core members, training, stream zone, and more. It's a friendly environment for all ages, and disrespect to either members, or to public community will not be tolerated.</p>
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
        <div class="row">
                <div class="well">
<script type="text/javascript" src="//www.typefrag.com/Server-Status/script.aspx?id=34656fb0-2938-46d9-a1b0-001bef8e4793"></script>      
                    <br />
                    <small>
                        <p style="color: #ffffff">Need Help Setting up Ventrilo?</p>    
                    </small> 
                <br />
                     <center>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".ventrilo-installment-video" data-placement="left" title="Youtube Video" data-toggle="tooltip">Getting Started</button>
                            <div class="modal fade ventrilo-installment-video" tabindex="-1" role="dialog" aria-labelledby="Get-Started-Ventrilo" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/tzPtst-tpJc"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-success" data-placement="left" title="Ventrilo Frequently Asked Questions" data-toggle="tooltip">FAQ</button></a>
                            <a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-success" data-placement="top" title="ventrilo forums" data-toggle="tooltip">Forum</button></a>
                            <a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-success" data-placement="right" title="Ventrilo/setup.php" data-toggle="tooltip">Additional Setup</button></a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".ventinfo">Ventrilo Information</button>
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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".rules">Rules</button>
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
                                </ol></p>
                            <br />
                            <p> Violation Penalty:<br />
                                <ol class="list-group">
                                    <li class="list-group-item list-group-item-danger"><p>Verbal Warning</p></li>
                                    <li class="list-group-item list-group-item-danger"><p>No response, or failure to act - kicked</p></li>
                                    <li class="list-group-item list-group-item-danger"><p>Returning, and still no comply - banned</p></li>
                                </ol></p>
                        </div>
                    </div>
                  </center>  
                    </div>
                </div>
                <div class="well">
                    <center>
                    <img src="../pics/twitchlogo.png" alt="twitchlogo.png" class="img-responsive img-rounded" style="height:100px;"  />
                    <br />
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".Streamjoe">KillerJoe</button>
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
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target=".Streamlungy">TheLungy</button>
            <div class="modal fade Streamlungy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="row">
                    <div class="col-xs-6">
                        <br />
                        <iframe src="http://www.twitch.tv/the_lungy/embed" frameborder="0" scrolling="no" height="400px" width="300"></iframe><br /><p>https://support.twitter.com/articles/20164833-adding-a-follow-button-to-your-website#</p>
                      </div>
                    <div class="col-xs-6 pull-right">
                        <br />
                        <iframe src="http://www.twitch.tv/the_lungy/chat?popout=" frameborder="0" scrolling="no" height="400" width="285"></iframe>
                      </div>
                    </div>
                </div>
              </div>
            </div>
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target=".StreamVae">VaeVictus</button>
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
        </div>  
	</div><!--container-->

	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
