<?php

function clean($inpt){
	$chr  = array("/", "*", ".", "'", "-", ";", ":", ",", "=");
	$otpt = str_replace($chr, "", $inpt);
	return $otpt;
}

?>
