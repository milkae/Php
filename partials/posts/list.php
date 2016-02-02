<button class="post"><a href="?page=add">New Post</a></button>
<ul class="list">
<?php
foreach ($result as $key => $value) {
	echo "<li><a href='?page=show&id=" . $value['id'] . "'>" . $value['titre'] . "</a><button class='list-btn'><a href='?page=edit&id=" . $value['id'] . "'>Edit</a></button></li>";
}
?>
</ul>
