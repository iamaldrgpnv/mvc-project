<?php

namespace Web\Project\Dao;
include_once __DIR__ . '/../Core/Database.php';
use Database;

class BooksDao
{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}
	public function get_all_books()
	{
		$sql = 'SELECT * FROM book';
		$data = 0;
		return $this->db->queryselector($sql, $data);
		
	}
	public function get_db()
	{
	
	}
}
$db = new BooksDao();
var_dump($db->get_all_books());