<?php
	include "Database/Database.php";

	class profile{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}


		public function getUserData(){
			$sql = "SELECT * FROM sttufinfo ORDER BY id DESC";
			$query = $this->db->pdo->prepare($sql);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
	}
?>