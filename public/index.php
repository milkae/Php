<?php
	session_start();
	require '../lib/loader.php';
	
	if (isset($_GET['page'])) {
		new Loader($_GET['page']);	
	} else {
		new Loader('home');
	}
	
