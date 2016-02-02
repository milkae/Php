<?php
class Loader {
	private $pages = ['contact' => ['title' => 'Contact', 'content' => 'contact.php'], 'home' => ['title' => 'Home', 'content' => 'home.php'],'turlututu' => ['title' => 'Turlututu', 'content' => 'turlututu.php'], 'add' => ['title' => 'Add', 'content' => '/posts/add.php'], 'edit' => ['title' => 'Edit', 'content' => '/posts/edit.php'], 'list' => ['title' => 'List', 'content' => '/posts/list.php'], 'show' => ['title' => 'Show', 'content' => '/posts/show.php']];

	private $Post;

	public function __construct() {
		if (isset($_GET['page'])) {
			$this->Post = new Post();

			$this->generatePage($_GET['page']);	

			if ($_GET['page'] == 'add' && isset($_POST['titre'])) {
				$this->Post->add($_POST['titre'], $_POST['contenu']);
			}
			if ($_GET['page'] == 'edit' && isset($_POST['titre'])) {
				$this->Post->edit($_POST['titre'], $_POST['contenu'], $_POST['id']);
			}
		}
		else {
			$this->generatePage('home');
		}
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
		if ($p == 'list') {
			$result = $this->Post->all();
		}
		if(isset($_GET['id'])) {
			$post = $this->Post->get($_GET['id']);
		}
		ob_start();
		require $currentPage;
		$content = ob_get_contents();
		ob_end_clean();
		include '../partials/template.php';
	}
}
