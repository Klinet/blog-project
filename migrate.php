<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Infrastructure\Database;

$pdo = Database::connect();

$migrations = glob(__DIR__ . '/migrations/*.php');

foreach ($migrations as $file) {
	echo "Futtatás: " . basename($file) . "\n";
	$sql = require $file;
	$pdo->exec($sql);
	echo "Kész: " . basename($file) . "\n\n";
}

echo "Összes migráció lefutott.\n";