<?php

declare(strict_types=1);

namespace App\Infrastructure;

use PDO;

final class Database
{
	private static ?PDO $pdo = null;

	public static function connect(): PDO
	{
		if (self::$pdo === null) {
			$config = require __DIR__ . '/../../config/database.php';
			$path = $config['sqlite']['database'];
			self::$pdo = new PDO("sqlite:$path", null, null, [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]);
		}

		return self::$pdo;
	}
}