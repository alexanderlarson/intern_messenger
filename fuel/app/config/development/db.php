<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=fuel_intro',
			'username'   => 'root',
			'password'   => 'root',
		),
	),
);
