<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

	$ROOT = '..';
	
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
 ?>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
    <link href="css/roster.css" rel="stylesheet" />
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>

<body>
	<div class="container-fluid">
		
		<?php PrintNavbar("roster", $ROOT); ?>
		
	</div>
    <div class="row">
    </div>
    <div class="row">
            <div class="col-xs-3 well">
                <div id="search-btn">
                    <div class="btn-group">
                        <button class="btn btn-success dropdown-toggle" type="button" id="searchbypub" data-toggle="dropdown" aria-expanded="false">
                            Search
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="searchbypub">
                            <li role="presentation" class="dropdown-header">Search By:</li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="games.php" role="menuitem" tabindex="-1">Game</a></li>
                            <li role="presentation"><a href="mpcid.php" role="menuitem" tabindex="-1">MPC ID</a></li>
                            <li role="presentation"><a href="emailad.php" role="menuitem" tabindex="-1">Email Address</a></li>
                            <li role="presentation"><a href="clan-name-or-id.php" role="menuitem" tabindex="-1">Clan Name/ID</a></li>
                        </ul>
                     </div>  
                </div>      
           </div>
            <div class="col-xs-9 well">
                <div id="dynamicinfo">
                    <div class="row">
                        <div class="col-xs-6 well"></div>
                        <div class="col-xs-6 well"></div>
                    </div>
                    <div class="well"></div>
                    <div class="well"></div>
                </div>            
           </div>
    </div>

    <div class="container-fluid">
		
		<?php PrintFooter(); ?>

	</div><!--container--> 
</body>

</html>
