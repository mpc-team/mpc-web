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
<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and Toggle get grouped for better mobile display -->
<div claass="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="commenttools">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse" id="commenttools">
<ul class="nav navbar-nav">
<li class="active"><a href="#"><img src="../pics/toolbar/save.PNG" alt="save.PNG" title="Save" class="img-responsive img-rounded" /></a></li>
<li class="active"><a href="#"><img src="../pics/toolbar/cut.PNG" alt="cut.PNG" title="Cut" class="img-responsive img-rounded" /></a></li>
<li class="active"><a href="#"><img src="../pics/toolbar/paste.PNG" alt="paste.PNG" title="Paste" class="img-responsive img-rounded" /></a></li>
<a href="#"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Scrollable Menu <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                </ul></a>
</div>
</div>
</div>
</nav>
</div>
</div>

<div class="container-fluid">
<?php PrintFooter($ROOT); ?>
</div>