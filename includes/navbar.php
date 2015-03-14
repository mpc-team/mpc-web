<?php 


############################################################################
#
#
# 	PrintNavbar (highlight):
#
#		Prints the NavBar with the appropriate UI highlighting, 
#		any processing on the NavBar that modifies it should take place
# 		here (such as Login credentials for user-identification).
#
#
#############################################################################

function PrintNavbar ($navbar_highlight) {


	$active = "class='active'";
	$unactive = "";
	
	
	# ---------------- Print Header / Collapse Button ----------------
	
	$print = <<<EOD
	
	<nav role="navigation" class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="navbar-header">
			<button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		
			<ul class="nav navbar-nav">	
			
EOD;
	echo ($print);
	
	$class = ($navbar_highlight == "index") ? $active : $unactive;
	$navig = "<li {$class}> <a href='../index.php' class='navbar-brand'>MPC</a> </li>";
	echo ($navig);






	# ---------------- Print Standard Buttons ----------------
	
	$print = <<<EOD
	
			</ul>
		</div> 
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav"> 
			
EOD;
	echo $print;
	
	$class = ($navbar_highlight == "contact") ? $active : $unactive;
	$navig = "<li {$class} > <a href='../contact/index.php'>Contact</a> </li>";
	echo $navig;
	
	$class = ($navbar_highlight == "roster") ? $active : $unactive;
	$navig = "<li {$class} > <a href='../roster/index.php'>Clan Roster</a> </li>";
	echo $navig;
	
	$class = ($navbar_highlight == "gaming") ? $active : $unactive;
	$navig = "<li {$class} > <a href='../gaming/index.php'>Gaming Room</a> </li>";
	echo $navig;
	
	
	
	
	
	
	# ---------------- Print Login Button ----------------
	
	$print = <<<EOD
	
			</ul>
			<ul class="nav navbar-nav navbar-right">
			
EOD;
	echo $print;

	$class = ($navbar_highlight == "login") ? $active : $unactive;
	$navig = "<li {$class}> <a class='logintext' href='../login/index.php'>Login</a> </li>";
	
	echo $navig; 
	
	
	
	
	
	
	# ---------------- Close HTML Tags ----------------
	
	$print = <<<EOD
			
			</ul>
		</div>
	</nav>
	
EOD;
	echo $print;
	
	
	
	
}

 ?>


				