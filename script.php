<?php
header("Content-Type: application/javascript");

$headers = apache_request_headers();
if (stripos($headers['Accept-Encoding'], 'gzip') >= 0) {
	header("Content-Encoding: gzip");
	echo gzencode(file_get_contents($_GET['file']));
} else {
	echo file_get_contents($_GET['file']);
}
