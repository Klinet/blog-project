<?php

namespace App\Infrastructure;

use Smarty\Smarty;

final class TemplateRenderer
{
	private Smarty $smarty;

	public function __construct()
	{
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir(__DIR__ . '/../../templates');
		$this->smarty->setCompileDir(__DIR__ . '/../../var/smarty/compile');
		$this->smarty->setCacheDir(__DIR__ . '/../../var/smarty/cache');
    }

	public function render(string $template, array $data = []): void
    {
		foreach ($data as $key => $value) {
			$this->smarty->assign($key, $value);
		}
		$this->smarty->display($template);
    }
}