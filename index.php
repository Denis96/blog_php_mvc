<?php
	define('URL','http://localhost/2daw/M07UF2/teoria/blog_php_mvc/');

	require_once('connection.php');

	echo $_GET['url'];

	if(isset($_GET['url'])){
		$url = $_GET['url']; // 'posts/index'

		// Quita / innecesarias a la derecha.
		$url = rtrim($url, '/');

		// Devuelve un array utilizando la / como delimitador.
		$url = explode('/', $url); // ['posts', 'index']

		$controller = $url[0];
		$action = $url[1];

	} else {
		$controller = 'pages';
		$action = 'home';
	}
	require_once('views/layout.php');
?>