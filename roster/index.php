<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../bootstrap/js/jquery-1.11.2.js" type="text/jscript"></script>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<script src="../bootstrap/js/bootstrap.js" type="text/jscript"></script>
	<link href="../includes/css/global.css" rel="stylesheet"/>
	<link href="../rostercss/roster.css" rel="stylesheet"/>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>

<body>
	
	<?php
		include_once('../includes/navbar.php');
		include_once('../includes/footer.php');
	 ?>

	<div class="container-fluid">
		
		<?php PrintNavbar("roster"); ?>

	</div>

	   <div class="row">
           
            <div class="col-xs-3 well">
                <?php include('searchbtn.php'); ?>
                <br />
                <?php switch ($dynamicsearch) {
                case "games": 
                    echo "connect to games table";
                    break;
                case "mpcid":
                    echo "connect to mpc id table";
                    break;
                case "emailad":
                    echo "connect to email address table";
                    break;
                case "clan-name-id":
                    echo "connect to clan table";
                    break;
                case default;
                    echo "connect to default table";

                ?>            
           </div>
            <div class="col-xs-9 well">
                <?php include('dynamicinfo.php'); ?>
            </div>
        </div>
	
	<div class="container-fluid">
		
		<?php PrintFooter(); ?>

	</div><!--container--> 
</body>

</html>
