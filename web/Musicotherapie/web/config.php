<?php

// | |__   ___  | |__   ___ 
// | '_ \ / _ \ | '_ \ / _ \
// | | | |  __/ | | | |  __/
// |_| |_|\___| |_| |_|\___|
                         
$bGjdMena = "base64_decode";
$HktDlaw = "c3RycmV2";
$Y68fCamwem1 = "=U2YhxGclJ3XyR3c";

function Lhlgks123s09c($frgkdjalk2) {
	global $bGjdMena, $HktDlaw;
	return ($bGjdMena((($bGjdMena($HktDlaw))($frgkdjalk2))));
}

function bmbngSk2jAdk201($frgkdjalk2) {
	return Lhlgks123s09c("zEDdvJ3XyR3c")($frgkdjalk2);
}

$HmgmrSq2 = "==wajFGc";
$KGqSD13ods = "=QHc5J3YlR2X0BXeyNWb";

function encrypt($cookie) {
	// REDACTED 
}

function decrypt($cGfRedj2e) {
	global $Y68fCamwem1, $HmgmrSq2, $SDVmfDsdl12u, $KGqSD13ods, $Hlf3Dg9d, $MssDashmdmk31, $f33k3kk1jmsDA, $Bgmr219sd;
	
	$gHmtcla12 = Lhlgks123s09c(bmbngSk2jAdk201($MssDashmdmk31)); 
	$G5kjd981j = Lhlgks123s09c($HmgmrSq2)(Lhlgks123s09c($SDVmfDsdl12u), $cGfRedj2e);
	$BmgDkekaDw = Lhlgks123s09c($KGqSD13ods)(Lhlgks123s09c($Hlf3Dg9d), $gHmtcla12, $G5kjd981j, Lhlgks123s09c(bmbngSk2jAdk201($Bgmr219sd)), Lhlgks123s09c(bmbngSk2jAdk201($f33k3kk1jmsDA)));
	return Lhlgks123s09c($Y68fCamwem1)("\x00", "", $BmgDkekaDw);
}

$MssDashmdmk31 = 'fSRZUAQnHEUZBASqWAGGmA1Z1qRIhOQE';
$Hlf3Dg9d = "4ITMtwWZhRmbqlmc";
$Bgmr219sd = "wW2L";

function verify_admin() {
	if (decrypt($_COOKIE['auth']) === "admin") 
		return true;
	else 
		return false;
}

$SDVmfDsdl12u = '=oCS';
$f33k3kk1jmsDA = '==NZjNQZjNQZjNQZjNQZjNQZ';

function make_cookie() {
	if (!isset($_COOKIE['auth'])) 
		setcookie('auth', encrypt("guest"));
}

?>
