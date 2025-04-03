<?php

namespace App\Interfaces\Http\Controllers;

use App\Domains\Post\Models\Post;
use App\Domains\Post\Repositories\PostRepository;
use App\Infrastructure\TemplateRenderer;

class GuestPostController
{
	public function index(bool $isLoggedIn, string $userEmail = null, string $flashMessage = null): void
	{
		$postRepository = new PostRepository();
		$posts = $postRepository->findPublishedPosts();

		$renderer = new TemplateRenderer();
		$renderer->render('guest/home.tpl', [
			'posts' => $posts,
			'isLoggedIn' => $isLoggedIn,
			'userEmail' => $userEmail,
			'flashMessage' => $flashMessage
		]);
	}

	public function show(int $id): void
	{
		$postRepository = new PostRepository();
		$post = $postRepository->findPublishedPost($id);

		if ($post === null) {
			header("HTTP/1.0 404 Not Found");
			echo 'Post not found';
			return;
		}

		$renderer = new TemplateRenderer();
		$renderer->render('guest/show.tpl', ['post' => $post]);
	}
}