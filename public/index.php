<?php

declare(strict_types=1);

chdir(__DIR__ . '/..');
require_once 'bootstrap.php';

use App\Infrastructure\TemplateRenderer;

$renderer = new TemplateRenderer();

// Tesztadat
$posts = [
	[
		'id' => 1,
		'title' => 'Teszt bejegyzés',
		'content' => 'Ez egy demó poszt tartalma...',
		'author' => 'Admin',
		'publish_at' => date('Y-m-d H:i'),
	]
];

$renderer->render('guest/home.tpl', ['posts' => $posts]);