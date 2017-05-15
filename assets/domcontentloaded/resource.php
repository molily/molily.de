<?php

switch ($_GET['type']) {
	case 'js' :
		$content_type = 'application/x-javascript';
		break;
	case 'css' :
		$content_type = 'text/css';
		break;
	default :
		$content_type = 'text/html';
}

header('Content-Type: ' . $content_type);
header('Cache-Control: no-cache');
header('Expires: Thu, 01 Dec 1994 16:00:00 GMT');

$delay = (int)$_GET['delay'];

$i = 0;
for ($i = 0; $i < $delay; $i++) {
	echo('/* ' . $i . ' */');
	flush();
	sleep(1);
}

if ($content_type == 'text/css') {
?>
#element { color: red; }
<?php
} elseif ($content_type == 'application/x-javascript') {
?>
window.__scriptloaded = true;
//console.log('script loaded');
<?php
}

?>