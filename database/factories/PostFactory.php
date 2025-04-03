<?php

namespace Database\Factories;

use App\Infrastructure\FakerGenerator;

final class PostFactory
{
	private static $currentDate = null;

	public static function make(array $override = []): array
	{
		if (self::$currentDate === null) {
			self::$currentDate = new \DateTime();
		}

		self::$currentDate->modify('+1 day');

		$faker = FakerGenerator::get();

		return array_merge([
			'title' => $faker->sentence,
			'content' => $faker->paragraph(2),
			'publish_at' => self::$currentDate->format('Y-m-d H:i:s'),
		], $override);
	}
}