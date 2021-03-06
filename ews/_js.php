<?php
/*
	David Bray
	BrayWorth Pty Ltd
	e. david@brayworth.com.au

	This work is licensed under a Creative Commons Attribution 4.0 International Public License.
		http://creativecommons.org/licenses/by/4.0/

	*/
namespace dvc\ews;

class _js {
	static function liblocal() {
		print '/* local lib hooks */';

	}

	static function lib() {
		\jslib::viewjs([
			'libName' => 'ews/js',
			'leadKey' => 'ews.js',
			'jsFiles' => sprintf( '%s/js/*.js', __DIR__),
			'libFile' => \config::tempdir()  . '_ews_tmp.js'

		]);

		printf( ';ews.timezone = "%s";', config::$TIMEZONE);

	}

}
