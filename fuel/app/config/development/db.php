<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'active' => 'default',
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=so_report',
			'username'   => 'root',
			'password'   => 'qwerty',
		),
	),
	'jkanri' => array(
		'type'        => 'pdo',
		'table_prefix' => '',
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=jkanri',
			'username'   => 'root',
			'password'   => 'qwerty',
		),
	),
);
