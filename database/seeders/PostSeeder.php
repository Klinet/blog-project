<?php

namespace Database\Seeders;

use App\Infrastructure\Database;
use App\Infrastructure\EventLogger;
use Database\Factories\PostFactory;
use PDO;

final class PostSeeder
{
	public static function run(int $count = 5): void
	{
		$pdo = Database::connect();

		$userIds = $pdo->query("SELECT id FROM users")->fetchAll(PDO::FETCH_COLUMN);
		if (empty($userIds)) {
			throw new \RuntimeException("Nincs elérhető user a posts seedeléshez.");
		}

		$stmt = $pdo->prepare("
            INSERT INTO posts (user_id, title, content, publish_at, created_at, updated_at)
            VALUES (:user_id, :title, :content, :publish_at, datetime('now'), datetime('now'))
        ");

		foreach (range(1, $count) as $_) {
			$data = PostFactory::make([
				'user_id' => $userIds[array_rand($userIds)],
			]);
			$stmt->execute($data);
		}

		EventLogger::log('PostSeeded', ['title' => $data['title']]);
	}
}