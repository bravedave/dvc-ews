<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 * 
 * This work is licensed under a Creative Commons Attribution 4.0 International Public License.
 * 		http://creativecommons.org/licenses/by/4.0/
 *
 * */

spl_autoload_register(function ($class) {
	if ( $lib = realpath( __DIR__ . '/app/' . str_replace('\\', '/', $class) . '.php')) {
		include_once $lib;
		dvc\sys::logloader( sprintf( 'app: %s', $lib ));

		return ( true);

	}

	return ( false);

});

$autoload = __DIR__ . '/../vendor/bravedave/dvc/autoloader.php';
$autoloadLocal = __DIR__ . '/../../dvc/autoloader-local.php';

if ( file_exists( $autoload)) {
	require_once $autoload;

}
elseif ( file_exists( $autoloadLocal)) {
	require_once $autoloadLocal;

}
else {
	throw new Exception( 'Unable to locate autoloader');

}
