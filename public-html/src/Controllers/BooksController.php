<?php

namespace Web\Project\Controllers;

use Web\Project\Dao\BooksDao;
use Web\Project\Core\Controller;

class BooksController extends Controller
{
	private $books_dao;
	public function __construct()
	{
		$this->books_dao = new BooksDao();
	}

	function indexAction()
	{
		$template = 'template.php';
		$content = 'books.php';
		$data = [
			'title' => 'Книги',
			'books' => $this->books_dao->get_all_books(),
			// 'db' => $this->books_dao->get_db()
		];
		echo $this->render_page($content, $template, $data);
	}

	function showAction($id)
	{
		$template = 'template.php';
		$content = 'books.php';
		$data = [
			'title' => 'Книги',
			'id' => "$id"
		];
		echo $this->render_page($content, $template, $data);
	}
}
