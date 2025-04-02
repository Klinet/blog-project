<?php

return [
	'driver' => getenv('DB_DRIVER') ?: 'sqlite',
	'sqlite' => [
		'database' => getenv('DB_DATABASE') ?: __DIR__ . '/../database/database.sqlite',
	],
];