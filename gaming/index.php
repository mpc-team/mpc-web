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
		<div class="row">
			<div class="page-header text-center">
				<h1>What do we play?</h1>
			</div>
			<small>
				<p>MPC is a multi-level gaming clan that specializes on one main concept... Team. We would like to develope a community that engages both the players, and the games they play. We try to provide the essential fundamentals of gaming, and that includes: ventrilo, website domain, a foundation of solid core members, training, stream zone, and more. It's a friendly environment for all ages, and disrespect to either members, or to public community will not be tolerated.</p>
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
                    <div class="col-xs-6" style="height: 600px;">
                        <img src="../pics/ventrilobanner.png" alt="ventrilobanner.png" class="img-responsive" style="height: auto; width: auto;" />
                        <script type="text/javascript" src="//www.typefrag.com/Server-Status/script.aspx?id=fff26f56-d6ef-457d-bd8c-1feae7278595"></script>
                    </div>
                    <div class="col-xs-6">
        <div class="page-header text-center"><h3>Ventrilo Download</h3></div>
        <small><p>Download at <a href="http://www.ventrilo.com/download.php">www.ventrilo.com/download.php</a></p></small>
            <br />
        <small class="text-center"><p>*NOTE* make sure you download "client" and not the "server"</p></small><br />
        <div class="page-header text-center"><h3>Installation Guide to our Server.</h3></div>
            <small class="text-center"><p>Once you finish the installation,</p></small><br />
            <ol class="list-group">
            <li class="active">Launch the program.</li>
            <li class="active">At the top of the program next to User Name. Click the "->" symbol and fill in the information about your user name, and then click "ok"</li>
            <li class="active">Do the same thing for Server. Click the "->" symbol and fill in the information provided on the right side of this webpage, and then click "ok"</li>
            <li class="active">Click "Connect"</li>
            <li class="active">Click "set up", and then check the box "enable outgoing voice communications".</li>
            <li class="active">IF you wish to use push-to-talk, then select the checkbox for "push to talk hotkey", and then look for the hotkey section that is next to a white box for you to enter the key you wish to use.</li>
            <li class="active">If you wish to use Voice Activated, then make sure "use push to talk hotkey" is deselected and adjust the Silence time and the sensitivity. The closer to 0 on the sensitivity the more sensitive the microphone will react. Silence time is the duration from when you stop speaking to your next pick up for voice chat.</li>
            </ol>
        </div>
        <div class="col-xs-6">
        <div class="page-header text-center"><h3>MPC's Ventrilo Information</h3></div>
        <small class="text-center"><p>Host Name/IP : lead.typefrag.com</p></small><br />
        <small class="text-center"><p>Port: 7920</p></small><br />
        <small class="text-center"><p>No Password required for public joining.</p></small>
        <br />
        <div class="page-header text-center"><h3>Ventrilo Rules!</h3></div>
        <small class="text-center">
            <ol class="list-group text-center">
            <li class="active">No Screaming.</li>
            <li class="active">No Voice Spamming.</li>
            <li class="active">No Chat/Message Spamming.</li>
            <li class="active">No Disrespecting ANY of MPC or Players.</li>
            <li class="active">No Extensive Foul Language.</li>
            <li class="active">No Hacking or Exploiting the server or ventrilo.</li>
            <li class="active">No Foul or Inappropriate User Names.</li>
            <li class="active">Guests idoling will be gently removed.</li>
            <li class="active">No Soliciting.</li>
            </ol>
            <br />
            <small class="text-center">
            <div class="page-header text-center"><h3>Consequences and Regulations!</h3></div>
            <ul class="text-center">
                <li class="active">Violation is a warning (excempt hacking or exploiting.)</li>
                <li class="active">Violation is a kicked for the day.</li>
                <li class="active">Violation is a ban for a week.</li>
                <li class="active">Violation is a ban for a month.</li>
                <li class="active">Violation is a ban for a 3 months.</li>
                <li class="active">Violation is a ban for a 6 months.</li>
                <li class="active">Violation is a ban for a 9 months.</li>
                <li class="active">Violation is a ban for a Year.</li>
                <li class="active">Hacking and exploiting is perminent ban.</li>
                </ul>
            </small>
            </small>
        </div>
        </div>        
    <div class="well">
    <div class="row">
    <div class="page-header text-center"><h3>Trouble Shooting Ventrilo</h3></div>
    <div class="col-xs-6">
        <div class="page-header text-center"><h3>Set up Tutorial/Troubleshooting Guide</h3></div>
        <br />
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/vW4_NxdT9AQ"></iframe>
        </div>
        </div>
    <div class="col-xs-6">
        <div class="page-header text-center"><h3>Microphone</h3></div>
        <br />
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/SMM3gqOoe6M"></iframe>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
        <div class="page-header text-center"><h3>MSG Contacting Server Troubleshooting</h3></div>
        <br />
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/eQ7naGaOPbM"></iframe>
        </div>
        </div>
        <div class="col-xs-6">
        <div class="page-header text-center"><a href="http://www.ventrilo.com/faq.php"><h3>Ventrilo FAQ</h3></a></div>
        </div>
        </div>
    </div><!--well-->
                    </div>
						
				 
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
