<?php
	session_start();
	require 'loader.php';
	
	if (isset($_GET['page'])) {
		new Loader($_GET['page']);	
	} else {
		new Loader('home');
	}
	
