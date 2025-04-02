<?php

namespace Database\Seeders;

use App\Infrastructure\Database;
use Database\Factories\UserFactory;

final class UserSeeder
{
	public static function run(int $count = 5): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("INSERT INTO users (email, password, is_active, created_at, updated_at) VALUES (:email, :password, :is_active, datetime('now'), datetime('now'))");

		for ($i = 0; $i < $count; $i++) {
			$data = UserFactory::make();
			$stmt->execute($data);
		}
	}
}