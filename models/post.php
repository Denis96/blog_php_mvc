<?php
class Post {
	// definimos tres atributos
	// los declaramos como públicos para acceder directamente $post->author
	public $id;
	public $author;
	public $title;
	public $content;
	public $image;
	public $created;
	public $modified;
	public function __construct($id, $author, $title, $content, $image, $created, $modified) {
		$this->id = $id;
		$this->author = $author;
		$this->title = $title;
		$this->content = $content;
		$this->image = $image;
		$this->created = $created;
		$this->modified = $modified;
	}
	public function insert($author, $title, $content) {
                $db = Db::getInstance();

                $req = $db->prepare('INSERT INTO posts SET author = :author, titol = :titol, content = :content');
                $req->execute(array('author' => $author,
                                    'title' => $title,
                                    'content' => $content));
	}
	public function update($author, $title, $content){
                $db = Db::getInstance();

                $req = $db->prepare('UPDATE posts SET author = :author, titol = :titol, content = :content, modified = :modified WHERE id = :id');
                $req->execute(array('author' => $author,
                                    'title' => $title,
                                    'content' => $content,
                                    'modified' => date('Y-m-d H:i:s'),));
	}
	public function delete($id){
            
                $db = Db::getInstance();
                $id = intval($id);
                $req = $db->prepare('DELETE FROM posts WHERE id = :id');
                $req->execute(array('id' => $id));
                
	}
	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM posts');

		// creamos una lista de objectos post y recorremos la respuesta de la consulta
		foreach($req->fetchAll() as $post) {
		$list[] = new Post($post['id'], $post['author'], $post['title'], $post['content'],
                                        $post['image'], $post['created'], $post['modified']);
		}
		return $list;
	}
	public static function find($id) {
		$db = Db::getInstance();
		// nos aseguramos que $id es un entero
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM posts WHERE id = :id');
		// preparamos la sentencia y reemplazamos :id con el valor de $id
		$req->execute(array('id' => $id));
		$post = $req->fetch();
		return new Post($post['id'], $post['author'], $post['title'], $post['content'],
                                        $post['image'], $post['created'], $post['modified']);
	}
}
?>