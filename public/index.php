<?php

declare(strict_types=1);

chdir(__DIR__ . '/..');
require_once 'bootstrap.php';

use App\Interfaces\Http\Controllers\GuestPostController;
use App\Interfaces\Http\Controllers\AdminController;
use App\Interfaces\Http\Controllers\LoginController;
use App\Interfaces\Http\Controllers\UserController;

session_start();

$flashMessage = $_SESSION['flash_message'] ?? null;
unset($_SESSION['flash_message']);

$userEmail = $_SESSION['email'] ?? null;
$isLoggedIn = isset($_SESSION['email']);

$controller = new GuestPostController();
$adminController = new AdminController();
$loginController = new LoginController();
$userController = new UserController();

if ($_SERVER['REQUEST_URI'] === '/') {
	$controller->index($isLoggedIn, $userEmail, $flashMessage);
} elseif (preg_match('/^\/post\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	$controller->show((int)$matches[1]);
} elseif (preg_match('/^\/admin\/users\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	if (!$isLoggedIn) {
		$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
		header('Location: /');
		exit;
	}
	$userController->show((int)$matches[1]);
} elseif (preg_match('/^\/admin\/posts\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	if (!$isLoggedIn) {
		$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
		header('Location: /');
		exit;
	}
	$adminController->showPost((int)$matches[1]); // Post show route for admin
} elseif ($_SERVER['REQUEST_URI'] === '/login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
	$loginController->login();
} elseif ($_SERVER['REQUEST_URI'] === '/login' && $_SERVER['REQUEST_METHOD'] === 'GET') {
	$loginController->loginForm();
} elseif ($_SERVER['REQUEST_URI'] === '/logout') {
	$loginController->logout();
} elseif ($_SERVER['REQUEST_URI'] === '/admin/users') {
	if (!$isLoggedIn) {
		$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
		header('Location: /');
		exit;
	}
	$adminController->users();
} elseif ($_SERVER['REQUEST_URI'] === '/admin/posts') {
	if (!$isLoggedIn) {
		$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
		header('Location: /');
		exit;
	}
	$adminController->posts();
} elseif ($_SERVER['REQUEST_URI'] === '/admin/create-user') {
	$adminController->createUser();
} elseif ($_SERVER['REQUEST_URI'] === '/admin/create-post') {
	$adminController->createPost();
} elseif (preg_match('/^\/admin\/edit-post\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	$adminController->editPost((int)$matches[1]);
} elseif (preg_match('/^\/admin\/edit-user\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	$adminController->editUser((int)$matches[1]);
} elseif (preg_match('/^\/admin\/delete-post\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	$adminController->deletePost((int)$matches[1]);
} elseif (preg_match('/^\/admin\/delete-user\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
	$adminController->deleteUser((int)$matches[1]);
} elseif ($_SERVER['REQUEST_URI'] === '/admin/dashboard') {
	if (!$isLoggedIn) {
		$_SESSION['flash_message'] = 'Kérjük, jelentkezzen be a hozzáféréshez!';
		header('Location: /');
		exit;
	}
	$adminController->dashboard();
} else {
	header("HTTP/1.0 404 Not Found");
	echo 'Page not found';
}