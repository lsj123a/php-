<?php
include __DIR__ . '/lib.php';
$server = stream_socket_server('tcp://127.0.0.1:18877', $errno, $error);
if ( !$server ) return;

while ( $client = stream_socket_accept($server) ) {
	$file = fgets($client);
	$file = rtrim($file);
	$type = __recognize__($file);
	if ( $type != 'unknown' ) {
		$ret = htmlspecialchars(iconv('gbk','utf-8',$file)) . ' ---> <font color="blue">' . $type . "</font>";
		fwrite($client, $ret);
	}
	fclose($client);
}
