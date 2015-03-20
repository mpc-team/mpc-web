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
			<div class="row" style="height: 600px;">
				<div class="col-xs-5">
					<div class="well">
						<script type="text/javascript" src="http://www.typefrag.com/Server-Status/script.aspx?id=4b427159-13f2-489f-806c-ac705e84d73e"></script>
						<br />
						<small>
							<p style="color: #ffffff">Need Help Setting up Ventrilo?</p>    
						</small>                        
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ventrilo-installment-video">Get Started</button>
						<div class="modal fade ventrilo-installment-video" tabindex="-1" role="dialog" aria-labelledby="Get-Started-Ventrilo" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="//www.youtube.com/embed/tzPtst-tpJc"></iframe>
									</div>
								</div>
							</div>
						</div>
						<a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-primary">FAQ</button></a>
					</div>    
				</div>
				<div class="col-xs-7">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Ventrilo Information</h3>
						</div>
						<div class="panel-body">
							<p> Hostname: "lead.typefrag.com" <br />
								Port Number: 7920 <br />
								No - Password <br /></p>
						</div>
						<div class="panel-footer">
							<a href="http://www.ventrilo.com" title="Ventrilo.com">www.ventrilo.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<<<<<<< HEAD
        <div class="row">
            <div class="col-xs-5">
                <div class="well">
                    <script type="text/javascript" src="http://www.typefrag.com/Server-Status/script.aspx?id=4b427159-13f2-489f-806c-ac705e84d73e"></script>
                <br />
                    <small>
                        <p style="color: #ffffff">Need Help Setting up Ventrilo?</p>    
                    </small> 
                <br />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ventrilo-installment-video" data-placement="left" title="Youtube Video" data-toggle="tooltip">Getting Started</button>
                            <div class="modal fade ventrilo-installment-video" tabindex="-1" role="dialog" aria-labelledby="Get-Started-Ventrilo" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/tzPtst-tpJc"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-primary" data-placement="left" title="Ventrilo Frequently Asked Questions" data-toggle="tooltip">FAQ</button></a>
                            <a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-primary" data-placement="right" title="ventrilo forums" data-toggle="tooltip">Forum</button></a>
                            <a href="http://www.ventrilo.com/faq.php" target="_blank"><button type="button" class="btn btn-primary" data-placement="right" title="Ventrilo/setup.php" data-toggle="tooltip">Additional Setup</button></a>

                </div>    
            </div>
            <div class="col-xs-7">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ventrilo Information</h3>
                        </div>
                        <div class="panel-body">
                            <p> Hostname: "lead.typefrag.com" <br />
                                Port Number: 7920 <br />
                                No - Password <br /></p>
                        </div>
                        <div class="panel-footer">
                            <a href="http://www.ventrilo.com" title="Ventrilo.com">www.ventrilo.com</a>
                        </div>
                    </div>
            </div>
        </div>  
        <br />
        <div class="row">
                <div class="modal fade" role="dialog" aria-labelledby="Streamlist" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" data-target=".Streamlist" >&times;</span></button>
                                    <h4 class="modal-title" id="Streamlist">Select an MPC Member's Stream</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p>link 1</p>
                                    </div>
                                    <div class="row">
                                        <p>link 2</p>
                                    </div>
                                    <div class="row">
                                        <p>link 3</p>
                                    </div>
                                    <div class="row">
                                        <p>link 4</p>
                                    </div>
                                    <div class="row">
                                        <p>link 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
	</div><!--container-->
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
