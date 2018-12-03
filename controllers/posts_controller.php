<?php
class PostsController {
	public function index() {
		// Guardamos todos los posts en una variable
		$posts = Post::all();
		require_once('views/posts/index.php');
	}
	public function add() {
                if (!empty($_POST['id'])) {
                    Post::insert($_POST['author'], $_POST['title'], $_POST['post']);
                }
                require_once('views/posts/add.php');
	}
	public function updateForm() {
		if (!isset($_POST['id'])) {
			return call('pages', 'error');
		}
                
		$post = Post::find($_GET['id']);
                
                require_once('views/posts/update.php');
	}
	public function updateDB() {
		if (!isset($_POST['id'])) {
			return call('pages', 'error');
		}
                
                Post::update($_POST['author'], $_POST['title'], $_POST['post']);
                
                require_once('views/posts/index.php');
	}
	public function delete() {
                if (!empty($_GET['id'])) {
                    Post::delete($_GET['id']);
                }
                require_once('views/posts/index.php');
	}
	public function show() {
		// esperamos una url del tipo ?controller=posts&action=show&id=x
		// si no nos pasan el id redirecionamos hacia la pagina de error, el id
		// tenemos que buscarlo en la BBDD
		if (!isset($_GET['id'])) {
			return call('pages', 'error');
		}
		// utilizamos el id para obtener el post correspondiente
		$post = Post::find($_GET['id']);
                $image = "";
                if (is_null($post->image)){
                    $image="Is null";
                } else  {
                    $image="Is null2";
                }
		require_once('views/posts/show.php');
	}
}
?>
