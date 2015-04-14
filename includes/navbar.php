<?php 
function PrintNavbar ($highlight, $root, $signed, $user, $querystr) {
	$ACTIVE = "class='active'";
	if($querystr != NULL && strlen($querystr) > 0) {
		$querystr='?'.$querystr;
	}
	
	# ---------------- Print Header / Collapse Button ----------------
	
	echo <<<EOD
	<nav role="navigation" class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-header">
			<button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
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
	
	$class = ($highlight == "members") ? ' active' : "";
	$search= $root . '/members/index.php';
	$searchglyph = "<span class='glyphicon glyphicon-search'></span>";
	$membersglyph = "<i class='fa fa-users'></i>";
	echo "<li class='dropdown {$class}'>",
				"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'>",
				"{$membersglyph} Members ", "<span class='caret'></span> </a>",
				"<ul class='dropdown-menu' role='menu'>",
        "<li><a href='{$search}'>{$searchglyph} Search</a></li>",
				"</ul></li>";
	
	$class = ($highlight == "forum") ? $ACTIVE : "";
	$path  = $root . '/forum/index.php';
	$glyph = "<span class='glyphicon glyphicon-th-list'></span>";
	echo "<li {$class} > <a href='{$path}'>{$glyph} Forums</a> </li>";
	
	$class = ($highlight == "gaming") ? ' active' : "";
    $gaming = $root . '/gaming/index.php';
    $vlive = $root . '/gaming/ventrilolive.php';
    $stream = $root . '/gaming/mpcstream.php';
    $gservice = $root . '/gaming/gamingservice.php';
    $glist = $root . '/gaming/gamelist.php';

	echo "<li class='dropdown {$class}'>",
				"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'>",
				"Gaming Room", "<span class='caret'></span> </a>",
				"<ul class='dropdown-menu' role='menu'>",
        "<li><a href='{$gaming}'>Gaming Home</a></li>",
        "<li><a href='{$vlive}'>Game Communication</a></li>",
        "<li><a href='{$stream}'>Live Video Stream</a></li>",
        "<li><a href='{$glist}'>Games We Play</a></li>",
        "<li><a href='{$gservice}'>Game Service Providers</a></li>",
				"</ul></li>";
    	
	# ---------------- Print Login Button ----------------
	
	echo <<<EOD
			</ul>
			<ul class="nav navbar-nav navbar-right">
EOD;
	
	if ($signed) {
		$summary = $root . "/profile/index.php{$querystr}";
		$update = $root . "/profile/update.php{$querystr}";
		$signout = $root . "/login/signout.php{$querystr}";
		$class = ($highlight == "profile") ? ' active' : "";
		$icon="<span class='glyphicon glyphicon-user'></span>";
		echo "<li class='dropdown {$class}'>",
					"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'>{$icon} {$user}",
					" <span class='caret'></span></a>",
					"<ul class='dropdown-menu' role='menu'>",
          "<li><a href='{$summary}'>Account</a></li>",
          "<li><a href='{$update}'>Edit Profile</a></li>",
          "<li class='divider'></li>",
          "<li><a href='{$signout}'><span class='glyphicon glyphicon-log-out'></span> Sign Out</a></li>",
          "</ul></li>";
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
		echo "<li {$class}> <a href='{$path}'>{$icon} {$text} </a> </li>";
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