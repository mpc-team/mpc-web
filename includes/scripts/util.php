<?php
	function ValidateInput($content){
		if($content==null) return FALSE;
		if(strlen($content)==0) return FALSE;
		if(strlen(trim($content))==0) return FALSE;
		return TRUE;
	}

	function ShredLinefeeds($content){
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
 ?>