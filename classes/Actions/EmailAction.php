<?php

namespace tobimori\DreamForm\Actions;

class EmailAction extends Action
{
	public static $type = 'email';

	public static function blueprint(): array
	{
		return [
			'title' => t('send-email-action'),
			'preview' => 'fields',
			'wysiwyg' => true,
			'icon' => 'email',
			'tabs' => []
		];
	}

	public function run(): void
	{
	}
}
