<?php

namespace App\Interfaces\Http\Controllers;

use App\Infrastructure\Database;
use App\Infrastructure\TemplateRenderer;

class AdminController
{
	public function users(): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
		$users = $stmt->fetchAll();

		$renderer = new TemplateRenderer();
		$renderer->render('admin/users.tpl', ['users' => $users]);
	}

	public function posts(): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
		$posts = $stmt->fetchAll();

		$renderer = new TemplateRenderer();
		$renderer->render('admin/posts.tpl', ['posts' => $posts]);
	}

	public function createPost(): void
	{
		$renderer = new TemplateRenderer();
		$renderer->render('admin/create-post.tpl');
	}

	public function createUser(): void
	{
		$renderer = new TemplateRenderer();
		$renderer->render('admin/create-user.tpl');
	}

	public function editPost(int $id): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
		$stmt->execute([':id' => $id]);
		$post = $stmt->fetch();

		if (!$post) {
			header("HTTP/1.0 404 Not Found");
			echo 'Post not found';
			return;
		}

		$renderer = new TemplateRenderer();
		$renderer->render('admin/edit-post.tpl', ['post' => $post]);
	}

	public function editUser(int $id): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
		$stmt->execute([':id' => $id]);
		$user = $stmt->fetch();

		if (!$user) {
			header("HTTP/1.0 404 Not Found");
			echo 'User not found';
			return;
		}

		$renderer = new TemplateRenderer();
		$renderer->render('admin/edit-user.tpl', ['user' => $user]);
	}

	public function updatePost(int $id): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("UPDATE posts SET title = :title, content = :content, publish_at = :publish_at WHERE id = :id");
		$stmt->execute([
			':id' => $id,
			':title' => $_POST['title'],
			':content' => $_POST['content'],
			':publish_at' => $_POST['publish_at'] ?? null,
		]);

		header('Location: /admin/posts');
		exit;
	}

	public function deletePost(int $id): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
		$stmt->execute([':id' => $id]);

		header('Location: /admin/posts');
		exit;
	}

	public function updateUser(int $id): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("UPDATE users SET email = :email WHERE id = :id");
		$stmt->execute([
			':id' => $id,
			':email' => $_POST['email']
		]);

		header('Location: /admin/users');
		exit;
	}

	public function deleteUser(int $id): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
		$stmt->execute([':id' => $id]);

		header('Location: /admin/users');
		exit;
	}

	public function dashboard(): void
	{
		session_start();

		if (!isset($_SESSION['email'])) {
			$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
			header('Location: /');
			exit;
		}

		$pdo = Database::connect();

		$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");
		$posts = $stmt->fetchAll();

		$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC LIMIT 5");
		$users = $stmt->fetchAll();

		$renderer = new TemplateRenderer();
		$renderer->render('admin/dashboard.tpl', ['posts' => $posts, 'users' => $users]);
	}
}