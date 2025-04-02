<?php

namespace App\Infrastructure;

use Faker\Factory;
use Faker\Generator;

final class FakerGenerator
{
	private static ?Generator $faker = null;

	public static function get(): Generator
	{
		if (!self::$faker) {
			$locale = getenv('FAKER_LOCALE') ?: 'en_US';
			self::$faker = Factory::create($locale);
		}

		return self::$faker;
	}
}