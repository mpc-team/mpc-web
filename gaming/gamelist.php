
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
					<li role="presentation" class="active">
						<a href="#">
							<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
							PC Games
						</a>
					</li>
					<li role="presentation">
						<a href="gamingservice.php">
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
			<div id="page-content-wrapper">
				<div class="panel panel-default">
					<div class="panel-heading">
							<center>
							<img src="../pics/games.png" class="img-rounded img-responsive text-center" style="width: 490px; height: 100px;" />
							</center>
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
							<li role="presentation" class="disabled">
								<a href="#">
									<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
									PC Games
								</a>
							</li>
							<li role="presentation">
								<a href="gamingservice.php">
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
				<div class="panel-body">
					<h1>?????</h1>
				</div>
				</div>
			</div>
		</div>

<!--footer-->				
<div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>