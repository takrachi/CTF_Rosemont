<?php  
session_start();

$iv = '0000000000000000';
$key = 'D0nTGu3SsM3ItSN0tTh3G0Al';

function encrypt($token) {                                                                            
	global $iv, $key;
	return array_shift(unpack('H*', mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $token, MCRYPT_MODE_CBC, $iv)));                                                                              
}                                                                                                                   

function decrypt() {
	global $iv, $key;
	return str_replace("\x00", "", mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, pack('H*', $_COOKIE['auth']), MCRYPT_MODE_CBC, $iv));
}

function verify_admin() {
	if (decrypt($_COOKIE['auth']) === "admin")
		return true;
	else
		return false;
}

function make_cookie() {
	if (!isset($_COOKIE['auth']))
		setcookie('auth', encrypt("guest"));
}

if (isset($_GET['debug'])) {
	highlight_file('config.php');
}

make_cookie();
include_once 'templates/header.html';

?>

<!-- DEBUGGER : admin.php?debug -->

<table align="center" width="638"><tr><td valign="top" align="center">
<?php if (isset($_COOKIE['auth']) && verify_admin() === true): ?>
<img src="Un_FlAg_iNTrrOuuVaablE.png" height="315" width="560">
<?php else: ?>
<img src="images/accesdenied.png" height="315" width="560">
<?php endif; ?>
</td></tr>

<?php include_once 'templates/end.html'; ?>
