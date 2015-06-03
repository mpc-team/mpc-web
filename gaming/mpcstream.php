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
    <script src="https://ttv-api.s3.amazonaws.com/twitch.min.js"></script>
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
				<img src="../pics/twitchlogo.png" class="img-rounded img-responsive" style="width: 600px; height: 225;" />
				</center>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-pills">
					<li role="presentation">
						<a href="#">
							<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
								MPCGaming
						</a>
						</li>
						<li role="presentation">
							<a href="#">
							<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
								Ventrilo
							</a>
						</li>
						<li role="presentation" class="disabled">
							<a href="#">
								<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
								Streaming
							</a>
						</li>
						<li role="presentation">
							<a href="#">
								<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
								Forum
							</a>
						</li>
						<li role="presentation">
							<a href="#">
								<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
								PC Games
							</a>
						</li>
						<li role="presentation">
							<a href="#">
								<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								GSP
							</a>
						</li>
						<li role="presentation">
							<a href="#"> 
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
								Game Developers
							</a>
						</li>
						<li role="presentation">
							<a href="#">
								<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
								The Dojo
							</a>
						</li>
					</ul>
					<small><p>To use ALL of twitch's features on MPCgaming.com, you must, therefore, sign into twitch directly. 
						<br />
							You may browse and access Twitch's Chat, and Video Feed, but the following is required for you to sign into your Twitch account:
					</p></small>
				<ul class="list-group" style="margin-left: 15px;">
					<li class="presentation">Follow the Caster</li>
					<li class="presentation">Share the Caster</li>
					<li class="presentation">Change Themes</li>
					<li class="presentation">And More...</li>
				</ul>
				<a class="twitch-connect" href="https://api.twitch.tv/kraken/oauth2/authorize?response_type=code&client_id=g4qafa4yhcjcub0wcicrom1dyfdgn4d&redirect_uri=http://www.mpcgaming.com/gaming/mpcstream.php&scope=user_read+user_blocks_edit+user_follows_edit+channel_read+channel_editor+channel_commercial+channel_stream+channel_subscriptions+channel_check_subscription+chat_login"><img src="http://ttv-api.s3.amazonaws.com/assets/connect_dark.png" /></a>
			</div>
		<div class="panel-body">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  MPC(SC2)The_Lungy
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					<h4 class="modal-title" id="myModalLabel">The Lungy</h4>

				  </div>
				  <div class="modal-body">
					<div class="row">
					  <div class="col-xs-12">
						<iframe src="http://www.twitch.tv/the_lungy/embed" frameborder="0" scrolling="no" height="378" width="620"></iframe>
						</div>
					</div>
					  <div class="row">
						<div class="col-xs-10">
							<iframe src="http://www.twitch.tv/the_lungy/chat?popout=" frameborder="0" scrolling="no" height="350" width="400"></iframe>
						</div>  
						<div class="col-xs-2">
							<img src="../pics/imagebanner.png" alt="imagebanner.png" class="img-rounded img-responsive" style="width: 400px; height: 368px;" />
						  </div>  
					  </div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close Stream</button>
				  </div>
				</div>
			  </div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="page-header text-center"><h3>How to be placed on our website?</h3></div>
				<div class="panel panel-default">
				  <div class="panel-body">
					<p>Options are posted below, and all you have to do is select an options, then follow directions provided. Thank you very much for allowing MPC to help promote your twitch account subscriber's list.</p>
					  <br />
					  <div class="page-header text-center"><h3>Rules for Stream:</h3></div>
						<br />
					  <small>People can report, or request for your removal... Be respectful.<br /> Failure to comply will result in ban. This is your warning.</small>
					  <br />
					  <ul class="list-group">
						<li class="presentation">Obey all Twitch Rules, and Terms of Service Contract.</li>
						<li class="presentation">No Flaming, also known as, insults towards: viewers, clans, people, or anything at all.</li>
						<li class="presentation">No Racial Slurs / Words.</li>
						<li class="presentation">No Adultry Words or Visuals.</li>
						<li class="presentation">Keep Profanity to a minimum.</li>
					  </ul>
				  </div>
				</div>
			<br />
			 <ul class="nav nav-pills">
				<li role="presentation">
					<a href="#" title="Email Us a Request">
						<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
							Via Email
						</a>
					</li>
				<li role="presentation">
					<a href="#" title="Ventrilo Visit">
						<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
							Via Ventrilo
						</a>
					</li>
					<li role="presentation">
					<a href="#" title="Find us in Game">
						<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
							Via In Game
						</a>
					</li>
					<li role="presentation">
					<a href="#" title="Ventrilo Visit">
						<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
							Via Ventrilo
						</a>
					</li>
					<li role="presentation">
					<a href="#" title="Connect through GSP">
						<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
							Via GSP
					</a>
				</li>
			</ul>
		</div>
	</div>
<script>
  Twitch.init({clientId: 'g4qafa4yhcjcub0wcicrom1dyfdgn4d'}, function(error, status) {
	// the sdk is now loaded
  });
</script>
<script>
$('.twitch-connect').click(function() {
  Twitch.login({
	scope: ['user_read', 'channel_read', 'user_blocks_edit', 'user_follows_edit', 'channel_read', 'channel_editor', 'channel_commercial', 'channel_stream', 'channel_subscriptions', 'channel_check_subscription', 'chat_lgoin',]
  });
})
</script>
		<script>
          Twitch.init({clientId: 'g4qafa4yhcjcub0wcicrom1dyfdgn4d'}, function(error, status) {
            // the sdk is now loaded
          });
        </script>
        <script>
        $('.twitch-connect').click(function() {
          Twitch.login({
            scope: ['user_read', 'channel_read', 'user_blocks_edit', 'user_follows_edit', 'channel_read', 'channel_editor', 'channel_commercial', 'channel_stream', 'channel_subscriptions', 'channel_check_subscription', 'chat_lgoin',]
          });
        })
        </script>
        <div class="container-fluid">
            <?php PrintFooter($ROOT); ?>
        </div>
    </body>
</html>
