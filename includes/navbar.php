<?php 
function PrintNavbar ($highlight, $root) {
	$ACTIVE = "class='active'";
	
	# ---------------- Print Header / Collapse Button ----------------
	
	echo <<<EOD
	<nav role="navigation" class="navbar navbar-fixed-top navbar-inverse">
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
	$path  = $root . '/index.php';
	echo ("<li {$class}> <a href='{$path}' class='navbar-brand'>MPC</a> </li>");

	# ---------------- Print Standard Buttons ----------------
	
	echo <<<EOD
			</ul>
		</div> 
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav"> 
EOD;
	
	$class = ($highlight == "contact") ? $ACTIVE : "";
	$path  = $root . '/contact/index.php';
	echo "<li {$class} > <a href='{$path}'>Contact</a> </li>";
	
	$class = ($highlight == "members") ? $ACTIVE : "";
	$path  = $root . '/members/index.php';
	echo "<li {$class} > <a href='{$path}'>Members</a> </li>";
	
	$class = ($highlight == "forum") ? $ACTIVE : "";
	$path  = $root . '/forum/index.php';
	echo "<li {$class} > <a href='{$path}'>Forum</a> </li>";
	
	$class = ($highlight == "gaming") ? $ACTIVE : "";
	$path  = $root . '/gaming/index.php';
	echo "<li {$class} > <a href='{$path}'>Gaming Room</a> </li>";
	
	# ---------------- Print Login Button ----------------
	
	echo <<<EOD
			</ul>
			<ul class="nav navbar-nav navbar-right">
EOD;
	
	if (isset($_SESSION["USER"])) {
		$text = $_SESSION["USER"];
		$path = $root . '/profile/index.php';
		$class = ($highlight == "profile") ? $ACTIVE : "";
		$icon="<span class='glyphicon glyphicon-user'></span>";
		echo "<li {$class}> <a href='{$path}'>{$icon} {$text}</a></li>";
	} else {
		$text = "Login";
		$path = $root . '/login/index.php';
		$class = ($highlight == "login") ? $ACTIVE : "";
		$icon="<span class='glyphicon glyphicon-log-in'></span>";
		echo "<li {$class}> <a href='{$path}'>{$icon} {$text}</a> </li>";
		
		$text = "Register";
		$path = $root . '/login/signup/index.php';
		$class = ($highlight == "signup") ? $ACTIVE : "";
		$icon="<span class='glyphicon glyphicon-new-window'></span>";
		echo "<li {$class}> <a href='{$path}'>{$icon} {$text}</a> </li>";
	}	
		
	# ---------------- Close HTML Tags ----------------
	
	echo <<<EOD
			</ul>
		</div>
	</nav>
EOD;

	# ---------------- End Function ----------------
	
}

 ?>