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
            </div><!--row-->     

            <div class="row" style="height: 100px;">
            </div>
        </div> 
            
            
            
            
        </div>
        </div>
             <div class="container-fluid">
    <?php PrintFooter($ROOT); ?>
</div>