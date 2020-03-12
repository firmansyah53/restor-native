<?php

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'Restoo'

	];

	public function data(){
		return $this->db;
	}
}