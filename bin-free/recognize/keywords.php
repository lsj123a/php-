<?php return array(
	array (
		'name'		=>	'Zend(2003120702-1) PHP 5.2',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2003120702\x00\x021"
		)
	),
	array (
		'name'		=>	'Zend(2004072203-3) PHP 5.2',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2004072203\x00\x023"
		)
	),
	array (
		'name'		=>	'Zend(2006022801-3) PHP 5.2',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2006022801\x00\x023"
		)
	),
	array (
		'name'		=>	'Zend(2004072203-65540) PHP 5.3',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2004072203\x00\x0665540"
		)
	),
	array (
		'name'		=>	'Zend(2006022801-65540) PHP 5.3',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2006022801\x00\x0665540"
		)
	),
	array (
		'name'		=>	'Zend(2004072203-65541) PHP 5.4',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2004072203\x00\x0665541"
		)
	),
	array (
		'name'		=>	'Zend(2006022801-65541) PHP 5.4',
		'startwith'	=>	array (
			'<?php @Zend',
			'Zend',
		),
		'substr'	=>	array (
			"2006022801\x00\x0665541"
		)
	),
	array (
		'name'		=>	'phpjm',
		'startwith'	=>	array (
			'<?php',
		),
		'subreg'	=>	array(
			'/if\s*\(\s*\!defined\([\'"]([A-F]{8,20})[\'"]\s*\)\s*\)\s*{\s*define\s*\(\s*[\'"]\\1[\'"]\s*,.*?\)/s'
		),
	),
	array (
		'name'	=>	'tianyiw',
		'startwith'	=>	array (
			'<?php @201',
		),
		'subreg'	=>	array (
			'/__FILE__.*?eval\(gzuncompress\(.*__halt_compiler\(\)/s'
		)
	),
	array (
		'name'		=>	'vidun',
		'startwith'	=>	array (
			'<?php',
		),
		'substr'	=>	array (
			"www.vidun.com"
		)
	),
	array (
		'name'		=>	'phpc',
		'startwith'	=>	array (
			'<?php',
		),
		'substr'	=>	array (
			'http://phpc.sinaapp.com*/'
		)
	),
	array (
		'name'		=>	'phpdp',
		'startwith'	=>	array (
			'<?php',
		),
		'substr'	=>	array (
			iconv('utf-8','gbk','PHP神盾 Var')
		)
	),
);