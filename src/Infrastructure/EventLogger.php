<?php

namespace App\Infrastructure;

final class EventLogger
{
	public static function log(string $eventType, array $payload): void
	{
		$pdo = Database::connect();
		$stmt = $pdo->prepare("
            INSERT INTO event_log (event_type, payload, created_at)
            VALUES (:event_type, :payload, datetime('now'))
        ");
		$stmt->execute([
			'event_type' => $eventType,
			'payload' => json_encode($payload),
		]);
	}
}