<h2> Modifier une entrée </h2>
<form method="post" action="">
	<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
	<label for="titre">Titre : </label><input type="text" id="titre" name="titre" value="<?= $post['titre'] ?>" required>
	<label for="contenu">Contenu : </label><textarea id="contenu" name="contenu" required><?= $post['contenu'] ?></textarea>
	<input type="submit" value="Nope">
</form>