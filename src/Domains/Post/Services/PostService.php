<?php

namespace App\Domains\Post\Services;

use App\Domains\Post\Models\Post;
use App\Domains\Post\Repositories\PostRepository;

final class PostService
{
	private PostRepository $repo;

	public function __construct()
	{
		$this->repo = new PostRepository();
	}

	public function findPublishedPosts(): array
	{
		return $this->repo->findPublishedPosts();
	}

	public function findUnpublishedPosts(): array
	{
		return $this->repo->findUnpublishedPosts();
	}

	public function findOnePublishedPost(int $id): ?Post
	{
		return $this->repo->findOnePublishedPost($id);
	}
}