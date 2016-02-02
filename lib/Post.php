<?php
class Post extends Bdd {
	public $table = 'posts';
	public function __construct() {
		parent::__construct();
		$this -> db = ORM::for_table($this -> table);
	}
	public function add($titre, $contenu) {
		$post = $this->db->create();
		$post->titre = $titre;
		$post->contenu = $contenu;
		$post->save();
	}
	public function edit($titre, $contenu, $id) {
		$post = $this->db->where('id', $id)->find_one();
		if($post) {
			$post->titre = $titre;
			$post->contenu = $contenu;
			$post->save();
		}
	}
	public function all() {
		$result = $this->db->find_array();
		return $result;
	}
	public function get($id) {
		$post = $this->db->where('id', $id)->find_one();
		return ['titre' => $post['titre'], 'contenu' => $post['contenu']];
	}
}