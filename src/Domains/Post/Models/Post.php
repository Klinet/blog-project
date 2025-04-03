<?php

namespace App\Domains\Post\Models;

final class Post
{
	public int $id;
	public string $title;
	public string $content;
	public ?string $publish_at;
	public int $user_id;
}