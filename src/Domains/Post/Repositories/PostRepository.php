<?php

namespace App\Domains\Post\Repositories;

use App\Domains\Post\Models\Post;
use App\Infrastructure\Database;
use PDO;

final class PostRepository
{
	public function findPublishedPosts(): array
	{
		$pdo = Database::connect();

		$stmt = $pdo->query("SELECT * FROM posts WHERE publish_at IS NOT NULL ORDER BY publish_at DESC");
		$stmt->setFetchMode(\PDO::FETCH_CLASS, Post::class);

		return $stmt->fetchAll();
	}

	public function findPublishedPost(int $id): ?Post
	{
		$pdo = Database::connect();

		$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id AND publish_at IS NOT NULL");
		$stmt->execute([':id' => $id]);
		$stmt->setFetchMode(\PDO::FETCH_CLASS, Post::class);

		return $stmt->fetch() ?: null;
	}

	public function findOnePublishedPost(int $id): ?Post
	{
		$pdo = Database::connect();

		$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id AND publish_at IS NOT NULL");
		$stmt->execute([':id' => $id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, Post::class);

		return $stmt->fetch() ?: null;
	}

}