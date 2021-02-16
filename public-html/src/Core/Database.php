<?php

class Database
{
	private $link;
	private $statement;
	private $result;
	public function __construct()
	{
		$this->connect();
	}
	public function connect()
	{
		$config = require_once 'config.php';
		$dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name']; // ';charset='.$config['charset'];
		$username = $config['username'];
		$password = $config['pwd'];
		$this->link = new PDO($dsn, $username, $password);
		return $this->link;

	}
	public function queryselector($sql, $data)
	{
		if ($data !== 0) {
			$this->statement = $this->link->prepare($sql);
			$this->statement->execute($data);
			$this->result = $this->statement->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		} else {
			$this->statement = $this->link->query($sql);
			if($this->statement === false){
				return var_dump("Ошибка выполнения запроса: $sql");
			} else {
				$this->result = $this->statement->fetchAll(PDO::FETCH_ASSOC);
				return $this->result;
			}
	
		}
	}
}

// $db = new Database();
// $db->connect();
// $db->queryselector('INSERT INTO book(title, page_count) VALUES (:title, :page_count)', [
// 	'title' => 'JS',
// 	'page_count' => '600'
// ]);
// $db->queryselector('SELECT * FROM book', 0);