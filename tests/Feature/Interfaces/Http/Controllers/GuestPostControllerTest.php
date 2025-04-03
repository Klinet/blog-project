<?php

namespace Tests\Feature\Interfaces\Http\Controllers;

use App\Interfaces\Http\Controllers\GuestPostController;
use PHPUnit\Framework\TestCase;

final class GuestPostControllerTest extends TestCase
{
	public function test_guest_home_shows_published_posts(): void
	{
		$controller = new GuestPostController();
		$post = $controller->show(1);

		$this->assertInstanceOf(\App\Domains\Post\Models\Post::class, $post);

		$this->assertIsInt($post->id);
		$this->assertIsString($post->title);
		$this->assertIsString($post->content);
		$this->assertNotNull($post->publish_at);
	}
}