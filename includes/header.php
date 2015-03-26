<?php
function JavaScriptResource($path) {
	return "<script src='{$path}' type='text/javascript'></script>";
}

function StyleResource($path) {
	return "<link href='{$path}' rel='stylesheet'/>";
}
 ?>