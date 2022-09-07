<?php

	function cifra_cesar($message, $k){
		$msgCifrada = "";
		for($i=0; $i< strlen($message) ; $i++){
			$codNovoChar = ord($message[$i])+ $k;
			//echo( chr($codNovoChar) . "<br/>" );
			$msgCifrada = $msgCifrada . chr($codNovoChar);
		}		

		return $msgCifrada;
	}

	$msg = "xam";
	//echo ("Original: ".$msg."<br/>");
	echo( "Cifrada: ".cifra_cesar($msg, 3) );
	echo( "Decifrada: ".cifra_cesar($msg, 3) );

?>