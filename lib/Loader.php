<?php
class Loader {
	private $pages = [
						'contact' => ['title' => 'Contact', 'content' => 'contact.php'],
						'home' => ['title' => 'Home', 'content' => 'home.php'],
						'turlututu' => ['title' => 'Turlututu', 'content' => 'turlututu.php'],
						'add' => ['title' => 'Add', 'content' => '/posts/add.php'],
						'edit' => ['title' => 'Edit', 'content' => '/posts/edit.php'],
						'show' => ['title' => 'Show', 'content' => '/posts/show.php']
					];
	private $Post;

	public function __construct() {
		//Chargement classe Post
		$this->Post = new Post();
		//Page défaut, si appel via get changement de la page
		$page = 'home';	
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}
		//Créa page
		$this->generatePage($page);	
		//Appel de la méthode add ou edit de la classe Post avec les données formulaires
		if ($page == 'add' && isset($_POST['titre'])) {
			$this->Post->add($_POST['titre'], $_POST['contenu'], $_POST['font']);
		}
		if ($page == 'edit' && isset($_POST['titre'])) {
			$this->Post->edit($_POST['titre'], $_POST['contenu'], $_POST['font'], $id);
		}
	}

	public function generatePage($p){
		//Fonts par défault
		$font = 'Open+Sans';
		$fontcss = 'Open Sans';
		//Appel de Faker
		$faker = Faker\Factory::create();
		//Liste des posts
		$result = $this->Post->all();
		//Si le param page existe dans le tableau, insertion des données sinon 404
		if(array_key_exists($p, $this->pages)) {
			$currentPage = '../partials/'.$this->pages[$p]['content'];
			$title = $this->pages[$p]['title'];
		} else {
			$currentPage ='../partials/loveTroll.php';
			$title = "You're a troll";
		}
		//Si param id envoyé appel du get de la classe Post et polices persos
		if(isset($_GET['id'])) {
			$post = $this->Post->get($_GET['id']);
			if(isset($post['font'])) {
				$font = $post['font'];
				//Remplacement des '+' des google font par des espaces pour leur utilisation css
				$fontA = explode('+', $font);
				$fontcss = join(' ', $fontA);
			}
		}
		//Mise en cache des données
		ob_start();
		//chargement contenu page
		require $currentPage;
		//Recup du cache puis fermeture
		$content = ob_get_contents();
		ob_end_clean();
		//Appel template
		include '../partials/template.php';
	}
}
