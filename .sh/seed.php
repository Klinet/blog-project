<?php

declare(strict_types=1);

use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;

chdir(__DIR__ . '/..');
require_once 'bootstrap.php';


if (php_sapi_name() !== 'cli') {
	exit("CLI only.\n");
}

try {
	UserSeeder::run(2);
	echo "Tesztadatok beszúrva a users táblába.\n";
	PostSeeder::run(10);
	echo "Tesztadatok beszúrva a posts táblába.\n";
	exit(0);
} catch (Throwable $e) {
	echo "Hiba: " . $e->getMessage() . "\n";
	exit(1);
}