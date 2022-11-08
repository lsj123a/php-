<?php
function __recognize__($file) {
	static $keywords;
	if ( empty($keywords) ) {
		$keywords = include __DIR__.'/keywords.php';
	}
	$data = file_get_contents($file);
	foreach ( $keywords as $keyword ) {
		$substr  = $keyword['substr']  ? $keyword['substr']  : array();
		$denystr = $keyword['denystr'] ? $keyword['denystr'] : array();
		$subreg  = $keyword['subreg']  ? $keyword['subreg']  : array();
		$denyreg = $keyword['denyreg'] ? $keyword['denyreg'] : array();
		$startwith = $keyword['startwith'] ? $keyword['startwith'] : array();
		if ( ( count($substr)  == 0 || __matchStrings__($data, $substr)  == count($substr)  ) &&
			 ( count($denystr) == 0 || __matchStrings__($data, $denystr) == 0 ) &&
			 ( count($subreg)  == 0 || __matchRegs__($data, $subreg)  == count($subreg) ) &&
			 ( count($denyreg) == 0 || __matchRegs__($data, $denyreg) == 0 ) &&
			 ( count($startwith) == 0 || __startwith__($data, $startwith) ) )
		{
			return $keyword['name'];
		}
	}
	return 'unknown';
}

function __matchStrings__($data, $strings) {
	$count = 0;
	foreach ( $strings as $string ) {
		if ( strpos($data, $string) !== false ) {
			$count ++ ;
		}
	}
	return $count;
}

function __matchRegs__($data, $regs) {
	$count = 0;
	foreach ( $regs as $reg ) {
		if ( preg_match($reg, $data) ) {
			$count ++ ;
		}
	}
	return $count;
}

function __startwith__($data, $strings) {
	foreach ( $strings as $string ) {
		if ( strpos($data, $string) === 0 ) {
			return true;
		}
	}
	return false;
}