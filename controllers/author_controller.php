<?php
class AuthorController {
	public function index() {
		$authors = Author::all();
		require_once('views/author/index.php');
	}
	public function add() {
                if (!empty($_POST['id'])) {
                    Author::insert($_POST['nick'], $_POST['name'], $_POST['lastName']);
                }
                require_once('views/author/add.php');
	}
	public function updateForm() {
		if (!isset($_POST['id'])) {
			return call('pages', 'error');
		}
                
		$author = Author::find($_GET['id']);
                
                require_once('views/author/update.php');
	}
	public function updateDB() {
		if (!isset($_POST['id'])) {
			return call('pages', 'error');
		}
                
                Author::update($_POST['nick'], $_POST['name'], $_POST['lastName']);
                
                require_once('views/author/index.php');
	}
	public function delete() {
                if (!empty($_GET['id'])) {
                    Author::delete($_GET['id']);
                }
                require_once('views/author/index.php');
	}
	public function show() {
		if (!isset($_GET['id'])) {
			return call('pages', 'error');
		}
		$author = Author::find($_GET['id']);
		require_once('views/author/show.php');
	}
}
?>
