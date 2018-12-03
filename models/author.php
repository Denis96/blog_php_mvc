<?php
class Author {
	// definimos tres atributos
	public $id;
	public $nick;
	public $name;
	public $lastName;
	public function __construct($id, $nick, $name, $lastName) {
		$this->id = $id;
		$this->nick = $nick;
		$this->name = $name;
		$this->lastName = $lastName;
	}
	public function insert($nick, $name, $lastName) {
                $db = Db::getInstance();

                $req = $db->prepare('INSERT INTO author SET nick = :nick, name = :name, lastName = :lastName');
                $req->execute(array('nick' => $nick,
                                    'name' => $name,
                                    'lastName' => $lastName));
	}
	public function update($nick, $name, $lastName){
                $db = Db::getInstance();

                $req = $db->prepare('UPDATE author SET nick = :nick, name = :name, lastName = :lastName WHERE id = :id');
                $req->execute(array('nick' => $nick,
                                    'name' => $name,
                                    'lastName' => $lastName));
	}
	public function delete($id){
            
                $db = Db::getInstance();
                $id = intval($id);
                $req = $db->prepare('DELETE FROM author WHERE id = :id');
                $req->execute(array('id' => $id));
                
	}
	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM author');

		// creamos una lista de objectos author y recorremos la respuesta de la consulta
		foreach($req->fetchAll() as $author) {
                    $list[] = new Author($author['id'], $author['nick'], $author['name'], $author['lastName']);
		}
		return $list;
	}
	public static function find($id) {
		$db = Db::getInstance();
		// nos aseguramos que $id es un entero
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM author WHERE id = :id');
		// preparamos la sentencia y reemplazamos :id con el valor de $id
		$req->execute(array('id' => $id));
		$author = $req->fetch();
		return new Author($author['id'], $author['nick'], $author['name'], $author['lastName']);
	}
}
?>