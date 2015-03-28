<?php
	function validateinput($content){
		if($content==null) return FALSE;
		if(strlen($content)==0) return FALSE;
		if(strlen(trim($content))==0) return FALSE;
		return TRUE;
	}

	function shredlinefeeds($content){
		$expl=explode("\n", $content);
		$len=count($expl);
		$result="";
		foreach($expl as $data){
			$cnt=strlen($data);
			if($cnt > 0){
				$result=$result.$data."\n";
			}
		}
		return $result;
	}
	
	function verifygetvars($verify, $get){
		$n=count($verify);
		for ($i=0; $i<$n; $i++) {
			if (!isset($get[$verify[$i]])) {
				return false;
			}
		}
		return true;
	}
	
	function cleantitle($title) {
		$clean = trim($title);
		$clean = strip_tags($clean);
		$clean = str_replace("\r\n", "", $clean);
		$clean = str_replace("\n", "", $clean);
		$clean = str_replace("\r", "", $clean);
		return $clean;
	}
	
	/** typically used when creating/updating a message on forum **/
	function cleanmessage($message,$allowed){
		$clean=trim($message);
		$clean=strip_tags($clean,$allowed);
		$clean=preg_replace('/(<[^>]+) style=".*?"/i', '$1', $clean);
		$clean=str_replace("\r","",$clean);
		$clean=shredlinefeeds($clean);
		$clean=str_replace("\n","<br>",$clean);
		return($clean);
	}
 ?>