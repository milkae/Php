<div>
	<h2> Modifier une entrée </h2>
	<form method="post" action="">
		<label for="titre">Titre : </label><input type="text" id="titre" name="titre" value="<?= $post['titre'] ?>" required>
		<label for="contenu">Contenu : </label><textarea id="contenu" name="contenu" required><?= $post['contenu'] ?></textarea>
		<select name="font">
			<option value="Open+Sans">Open Sans</option>
			<option value="Roboto">Roboto</option>
			<option value="Lato">Lato</option>
			<option value="Slabo">Slabo</option>
			<option value="Oswald">Oswald</option>
		</select>
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
		<input id="submit" type="submit" value="Nope">
	</form>
</div>