<?php

declare(strict_types=1);

namespace App\Interfaces\Http\Controllers;

abstract class BaseController
{
    protected function render(string $template, array $data = []): void
    {
        // Smarty render logika
    }
}
