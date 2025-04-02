<?php

namespace Database\Factories;

use App\Infrastructure\FakerGenerator;

final class UserFactory
{
	public static function make(array $override = []): array
	{
		$faker = FakerGenerator::get();

		return array_merge([
			'email' => $faker->unique()->safeEmail,
			'password' => password_hash('secret', PASSWORD_DEFAULT),
			'is_active' => 1,
		], $override);
	}
}