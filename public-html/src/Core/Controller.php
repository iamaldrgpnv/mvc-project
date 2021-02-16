<?php

namespace Web\Project\Core;

class Controller
{
	protected function render_page($content, $template, array $data=[]) // встраиваемые данные, шаблон, доп. инфа для template
	{
		extract($data); // разбор массива на переменные
		// создает переменную $title = 'Главная'
		ob_start(); // буфеизация в память
		include_once __DIR__ . '/../Views/' .$template;
		$page = ob_get_contents();
		ob_end_clean();
		return $page;
	}
}
