<DOCTYPE html>
<html>

	<head
            <link rel="stylesheet" href="../assets/css/base.css" />
            <style>
                * {
                    margin: 0px;
                    /*border-width: 1px;border-color: grey;border-style: solid;*/
                }
                hr {
                    margin: 1em 0em;
                    border: 1.1px solid black
                    
                }
                .container {
                    padding: 6em;
                }
                .header {
                    margin-bottom: 1em;
                    padding: 1em 1em;
                }
                .footer {
                    text-align: center;
                    padding: 1em 1em;
                }
                .header a {
                    margin: 0em 1em;
                }
                .data {
                    padding: 1em 1em;
                    margin: 0em 1em;
                }
            </style>
	</head>

	<body>
            <div class="container">
		<header class="header">
			<a href='/2daw/M07UF2/teoria/blog_php_mvc'>Home</a>
			<a href='?controller=posts&action=index'>Posts</a>
		</header>
                
                <hr>
                
		<?php require_once('routes.php'); ?>
                
                <hr>

		<footer class="footer">
			Copyright
		</footer>
            </div>
	</body>
</html>