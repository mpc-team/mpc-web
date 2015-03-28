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
                    <center>
                        <img src="../pics/mpccommunitybanner.png" alt="mpccommunitybanner.png" title="mpc community banner" class="img-responsive img-rounded" style="width: 600px; height: 100px;" />
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".StreamVae">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        YourName
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
                    <div class="page-header text-center"><h3>How to be placed on our website?</h3></div>
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <p>Options are posted below, and all you have to do is select an options, then follow directions provided. Thank you very much for allowing MPC to help promote your twitch account subscriber's list.</p>
                              <br />
                              <div class="page-header text-center"><h3>Rules for Stream:</h3></div>
                                <br />
                              <small>People can repor, or request for your removal... Be respectful.<br /> Failure to comply will result in ban. This is your warning.</small>
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
                    <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group">
                                <a href="mailto:" title="Email Us a Request" type="button" class="btn btn-success">Via Email</a>
                                <a type="button" class="btn btn-success" href="ventrilolive.php" title="Email Us a Request">Via Ventrilo</a>
                                <a type="button" class="btn btn-success" href="gamelist.php" title="Email Us a Request">Via In Game</a>
                                <a type="button" class="btn btn-success" href="gamingservice.php" title="Email Us a Request">Via Game Service</a>
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
