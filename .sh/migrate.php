<?php

declare(strict_types=1);

chdir(__DIR__ . '/..');
require_once 'bootstrap.php';

use App\Infrastructure\Database;

$pdo = Database::connect();

$migrations = glob('migrations/*.php');

foreach ($migrations as $file) {
	echo "Futtatás: " . basename($file) . "\n";
	$sql = require $file;
	$pdo->exec($sql);
	echo "Kész: " . basename($file) . "\n\n";
}

echo "Összes migráció lefutott.\n";