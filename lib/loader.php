<?php
class Loader {
	private $pages = ['contact' => ['title' => 'Contact', 'content' => 'contact.php'], 'home' => ['title' => 'Home', 'content' => 'home.php'],'turlututu' => ['title' => 'Turlututu', 'content' => 'turlututu.php']];

	public function __construct($p) {
		$this->generatePage($p);
	}
	public function generatePage($p){
		$config = require '../config.php';
		if(array_key_exists($p, $this->pages)) {
			$currentPage = '../partials/'.$this->pages[$p]['content'];
			$title = $this->pages[$p]['title'];
		} else {
			$currentPage ='../partials/loveTroll.php';
			$title = "You're a troll";
		}
		ob_start();
		require $currentPage;
		$content = ob_get_contents();
		ob_end_clean();
		include '../partials/template.php';
	}
}
