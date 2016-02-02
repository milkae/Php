<?php
class Bdd {
	public function __construct(){
		ORM::configure(array(
			'connection_string' => 'mysql:host=127.0.0.1.;dbname=dummy',
			'username' => 'root',
			'password' => 'root'
			));
	}
}





