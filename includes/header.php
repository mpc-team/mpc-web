<?php
function JavaScriptResource($path) {
	return "<script src='{$path}' type='text/javascript'></script>";
}

function StyleResource($path) {
	return "<link href='{$path}' rel='stylesheet'/>";
}

$htmlheader = function() {
	return <<<EOD
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width initial-scale=1"/>
	<meta name="keywords" content="multiplayer clan, multi player clan, mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
EOD;
};
