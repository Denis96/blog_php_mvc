<DOCTYPE html>
<html>

	<head>
			<link rel="stylesheet" href="assets/css/base.css" />
	</head>

	<body>
		<div class="container">
			<header class="header">
				<a href='/daw/blog_php_mvc'>Home</a>
				<a href='?controller=posts&action=index'>Posts</a>
				<a href='?controller=author&action=index'>Author</a>
			</header>
					
			<hr>
				
			<div class="data">
				<?php require_once('routes.php'); ?>
			</div>	

			<hr>

			<footer class="footer">
				Copyright
			</footer>
		</div>
	</body>
</html>