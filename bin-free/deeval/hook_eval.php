<?php

/**
 * @author Y.L.
 * @link http://www.yunlu99.com/
 * @copyright 2014
 */

error_reporting(E_ALL);
gc_disable();
include __DIR__.'/../recognize/lib.php';

//模拟真实环境,反反调试
$_SERVER['HTTP_HOST'] = '127.0.0.1';
$_SERVER['HTTP_CONNECTION'] = 'keep-alive';
$_SERVER['HTTP_CACHE_CONTROL'] = 'max-age=0';
$_SERVER['HTTP_ACCEPT'] = 'text/html,application/xhtml+xml';
$_SERVER['HTTP_USER_AGENT'] = 
	'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36';
$_SERVER['HTTP_ACCEPT_ENCODING'] = 'gzip,deflate';
$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'zh-CN,zh';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['SERVER_ADDR'] = '127.0.0.1';
$_SERVER['SERVER_PORT'] = '80';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
$_SERVER['DOCUMENT_ROOT'] = 'D:/www/';
$_SERVER['REQUEST_SCHEME'] = 'http';
$_SERVER['CONTEXT_PREFIX'] = '';
$_SERVER['CONTEXT_DOCUMENT_ROOT'] = 'D:/www/';
$_SERVER['SERVER_ADMIN'] = '270656184@qq.com';
$_SERVER['SCRIPT_FILENAME'] = 'D:/www/index.php';
$_SERVER['REMOTE_PORT'] = '37413';
$_SERVER['GATEWAY_INTERFACE'] = 'CGI/1.1';
$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['QUERY_STRING'] = '';
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';
$_SERVER['REQUEST_TIME_FLOAT'] = 1415753109.423;
$_SERVER['REQUEST_TIME'] = 1415753109;

$__FILEPATH__ = $argv[1];
$__ENCODE_TYPE__ = __recognize__($__FILEPATH__);

unset($_SERVER['argv']);
unset($_SERVER['argc']);
unset($argv);
unset($argc);

function __eval__($code) {
	echo $code;
	__send_to_gui__($code);
	return $code;
}

function __send_to_gui__($code) {
	$fp = @fsockopen('tcp://127.0.0.1', 18876, $errno, $error, 0.5);
	if ( !$fp ) return;
	fwrite($fp, $code);
	fclose($fp);
}
