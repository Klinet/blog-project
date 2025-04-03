<?php

namespace App\Interfaces\Http\Controllers;

use App\Infrastructure\Database;
use App\Infrastructure\TemplateRenderer;

class UserController
{
	public function show(int $id): void
	{
		if (!isset($_SESSION['email'])) {
			$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
			header('Location: /');
			exit;
		}

		$pdo = Database::connect();

		$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
		$stmt->execute([':id' => $id]);
		$user = $stmt->fetch();

		if (!$user) {
			header("HTTP/1.0 404 Not Found");
			echo "Felhasználó nem található";
			return;
		}

		$stmt = $pdo->prepare("SELECT * FROM posts WHERE user_id = :id ORDER BY created_at DESC");
		$stmt->execute([':id' => $id]);
		$posts = $stmt->fetchAll();

		$renderer = new TemplateRenderer();
		$renderer->render('user/show.tpl', ['user' => $user, 'posts' => $posts]);
	}
}