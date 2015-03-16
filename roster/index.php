
<?php

	$ROOT = '..';
	
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$SIDEBAR);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
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
            <div class="col-xs-5 well"> 
                <br />
                <div class="alias-default">
            <?php
        
                $db = new dbutil (dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
                $db->connect ();
                $result = $db->query ("SELECT * FROM User");
                echo ("<h3 style='color: black'>Search</h3>");
                include('php/clanroster-srch.php');
    $name = $_POST['search'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM User
    WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{
        echo $row['first_name'] . " " . $row['last_name'];
        echo "<br>";
}
    mysqli_close($con); 
                    ?>
                </div>
           </div>
            <div class="col-xs-7 well">
                <div id="dynamicinfo">
                    <div class="row">
                        <div class="col-xs-6 well">Player Alias</div>
                        <div class="col-xs-6 well">Player Game(s)</div>
                    </div>
                    <div class="row">Player Profile Buttons</div>
                    <div class="row">Player Group(s) / Clan(s) / Ranking(s)</div>
                </div>            
           </div>
    </div>

	<div id="wrapper" class="container">
		
		<?php PrintSidebar("none", $ROOT); ?>
	
		<div id="page-content-wrapper">
		
			<h1>Members</h1>
			
		</div>
	
	</div>
    <div class="container-fluid">
		
		<?php PrintFooter($ROOT); ?>

	</div>
</body>

</html>
