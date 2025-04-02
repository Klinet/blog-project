<?php

declare(strict_types=1);

namespace App\Infrastructure;

use PDO;

final class Database
{
	public static function connect(): PDO
	{
		$config = require __DIR__ . '/../../config/database.php';
		$path = $config['sqlite']['database'];
		return new PDO("sqlite:$path");
	}
}