<DOCTYPE html>
<html>

	<head>
			<link rel="stylesheet" href="assets/css/base.css" />
	</head>

	<body>
		<div class="container">
			<header class="header">
				<a href='<?php echo constant('URL'); ?>'>Home</a>
				<a href='<?php echo constant('URL'); ?>posts/index'>Posts</a>
				<a href='<?php echo constant('URL'); ?>authors/index'>Authors</a>
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