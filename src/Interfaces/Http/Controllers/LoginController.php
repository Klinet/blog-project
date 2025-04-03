<?php

namespace App\Interfaces\Http\Controllers;

use App\Infrastructure\Database;
use App\Infrastructure\TemplateRenderer;

class LoginController
{
	public function loginForm(): void
	{
		$renderer = new TemplateRenderer();
		$renderer->render('guest/home.tpl');
	}

	public function login(): void
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$email = $_POST['email'] ?? '';
			$password = $_POST['password'] ?? '';

			$pdo = Database::connect();
			$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
			$stmt->execute([':email' => $email]);
			$user = $stmt->fetch();

			if ($user && password_verify($password, $user['password'])) {
				session_start();
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['is_logged_in'] = true;
				header('Location: /admin/dashboard');
				exit;
			} else {
				$_SESSION['flash_message'] = 'Hibás email vagy jelszó!';
				header('Location: /');
				exit;
			}
		}
	}


	public function logout(): void
	{
		unset($_SESSION['email']);
		unset($_SESSION['role']);

		header('Location: /');
		exit;
	}
}