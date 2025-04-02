<?php

namespace Database\Factories;

use Faker\Factory;

final class PostFactory
{
	public static function make(array $override = []): array
	{
		$faker = Factory::create(getenv('FAKER_LOCALE') ?: 'en_US');

		return array_merge([
			'title' => $faker->sentence,
			'content' => $faker->paragraph(4),
			'publish_at' => date('Y-m-d H:i:s'),
		], $override);
	}
}