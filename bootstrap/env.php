<?php

$envPath = __DIR__ . '/../.env';
if (!file_exists($envPath)) {
	return;
}

foreach (file($envPath) as $line) {
	if (preg_match('/^\s*([\w_]+)\s*=\s*(.+?)\s*$/', $line, $matches)) {
		putenv("{$matches[1]}={$matches[2]}");
	}
}