<?php
class Post extends Bdd {
	//Nom de la table dans la BDD
	public $table = 'posts';
	//Appel construct de BDD (connect base) et insertion appel base dans $db
	public function __construct() {
		parent::__construct();
		$this -> db = ORM::for_table($this -> table);
	}
	//Ajout à la base
	public function add($titre, $contenu, $font) {
		$post = $this->db->create();
		$post->titre = htmlspecialchars($titre);
		$post->contenu = htmlspecialchars($contenu);
		$post->font = htmlspecialchars($font);
		$post->save();
	}
	//Modif de l'entrée dans la base
	public function edit($titre, $contenu, $font, $id) {
		$post = $this->db->where('id', $id)->find_one();
		if($post) {
			$post->titre = htmlspecialchars($titre);
			$post->contenu = htmlspecialchars($contenu);
			$post->font = htmlspecialchars($font);
			$post->save();
		}
	}
	//Renvoie de toutes les entrées
	public function all() {
		$result = $this->db->find_array();
		return $result;
	}
	//Renvoie entrée spécifique
	public function get($id) {
		$post = $this->db->where('id', $id)->find_one();
		return ['titre' => $post['titre'], 'contenu' => $post['contenu'], 'font' => $post['font']];
	}
}
