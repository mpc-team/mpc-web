<?php 
function PrintNavbar ($highlight, $root_path) 
{
	$ACTIVE = "class='active'";
	
	# ---------------- Print Header / Collapse Button ----------------
	
	echo <<<EOD
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
	$class = ($highlight == "index") ? $ACTIVE : "";
	$path  = $root_path . '/index.php';
	echo ("<li {$class}> <a href='{$path}' class='navbar-brand'>MPC</a> </li>");

	# ---------------- Print Standard Buttons ----------------
	
	echo <<<EOD
			</ul>
		</div> 
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav"> 
EOD;
	
	$class = ($highlight == "contact") ? $ACTIVE : "";
	$path  = $root_path . '/contact/index.php';
	echo "<li {$class} > <a href='{$path}'>Contact</a> </li>";
	
	$class = ($highlight == "roster") ? $ACTIVE : "";
	$path  = $root_path . '/roster/index.php';
	echo "<li {$class} > <a href='{$path}'>Clan Roster</a> </li>";
	
	$class = ($highlight == "gaming") ? $ACTIVE : "";
	$path  = $root_path . '/gaming/index.php';
	echo "<li {$class} > <a href='{$path}'>Gaming Room</a> </li>";
	
	# ---------------- Print Login Button ----------------
	
	echo <<<EOD
			</ul>
			<ul class="nav navbar-nav navbar-right">
EOD;
	
	if (isset($_SESSION["USER"])) {
		$text = $_SESSION["USER"];
		$path = $root_path . '/profile/index.php';
		$class = ($highlight == "profile") ? $ACTIVE : "";
		$usertext = "<li {$class}> <a class='logintext' href='{$path}'>{$text}</a></li>";
	} else {
		$text = "Login";
		$path = $root_path . '/login/index.php';
		$class = ($highlight == "login") ? $ACTIVE : "";
		$usertext = "<li {$class}> <a class='logintext' href='{$path}'>{$text}</a> </li>";
	}	
	echo $usertext; 
		
	# ---------------- Close HTML Tags ----------------
	
	echo <<<EOD
			</ul>
		</div>
	</nav>
EOD;

	# ---------------- End Function ----------------
	
}

 ?>