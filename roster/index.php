<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

	$ROOT = '..';
	
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	
	$JQUERY = $ROOT . PathDir::$JQUERY;
	$BS_CSS = $ROOT . PathDir::$BS_CSS;
	$BS_JS  = $ROOT . PathDir::$BS_JS;
	$CSS_GLOBAL = $ROOT . PathDir::$CSS . 'global.css';
 ?>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php
		$print = 
	   "<script src='{$JQUERY}' type='text/jscript'></script>
		<link href='{$BS_CSS}' rel='stylesheet'/>
		<script src='{$BS_JS}' type='text/jscript'></script>
		<link href='{$CSS_GLOBAL}' rel='stylesheet'/>";
		echo ($print);
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
        <?php 
    $DB_HOST = "clanmpc.db.9825370.hostedresource.com";
	$DB_USER = "clanmpc";
	$DB_PASS = "W3W!NGames";
	$DB_NAME = "clanmpc";
    // Create connection
        $conn = if { new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);}
    
            elseif {
                $conn = new PDO("mysql:host=$DB_HOST;dbname=myDB", $DB_USER, $DB_PASS, $DB_NAME);
            // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully"; 
                }
                    catch(PDOException $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }
            end if;
    // Check Connection.
                    if { ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } end if;
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    echo "Connected successfully";
                    } 
                    catch(PDOException $e)
                    {
                    echo "Connection failed: " . $e->getMessage();
                    }
    // Create database.
                    //object-oriented
                    $sql = "CREATE DATABASE myDB";
                    if{ ($conn->query($sql) === TRUE) {
                        echo "Database created successfully";
                    } else {
                        echo "Error creating database: " . $conn->error;
                    }
                      } end if;
                    //PDO style --
                        if {$sql = "CREATE DATABASE myDB";
                        if (mysqli_query($conn, $sql)) {
                            echo "Database created successfully";
                        } else {
                            echo "Error creating database: " . mysqli_error($conn);
                        }
                           } end if;
                    
     //Closing Connection. 
                    $conn->close();
                    else {
                    mqsqli_close($conn);
                    } else {
                    $conn = null;
                    }
            ?>
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
