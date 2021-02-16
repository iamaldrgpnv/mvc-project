<?php

namespace Web\Project\Controllers;

use Web\Project\Core\Controller;

class IndexController extends Controller
{
	public function IndexAction()
	{
		$template = 'template.php';
		$content = 'main.php';
		$data = [
			'title' => 'Главная',
		];
		echo $this->render_page($content, $template, $data);
	}
}
