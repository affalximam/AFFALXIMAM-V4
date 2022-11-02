<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/admin/login.php');
	exit;
?>

<script>
	function wrong() {

var a = 'HAI ';
var b = 'HEKER ';
var c = 'BYPASS ';
var d = 'ADMIN ';

alert( a + b + c + d );

};
</script>