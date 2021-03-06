<?php

class Products implements ICRUD {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}


	public function add(IItem $item) {
		$sql = '
			INSERT INTO products (title, content, promotion, price) 
			VALUES (
				"'.$item->title.'",
				"'.$item->content.'",
				"'. $item->promotion .'",
				"'.$item->price.'"
				
			)
		';
		mysqli_query($this->db, $sql);
	}

	public function update($id, IItem $item) {

		$sql = '
			UPDATE products 
			SET 
			title = "' . $item->title . '",
			content = "' . $item->content . '",
			price = "' . $item->price . '",
			promotion = "' . $item->promotion . '"
			WHERE id = ' . $id;
	
		mysqli_query($this->db, $sql);

	}


	public function delete($id) {

		$sql = '
			DELETE FROM products
			 WHERE id = '. $id;

		mysqli_query($this->db, $sql);

	}

	public function get($id) {

		$sql = '
			SELECT * FROM products 
			WHERE id = '.$id;

		$res = mysqli_query($this->db, $sql);
		return mysqli_fetch_assoc($res);

	}

	public function getAll() {

		$sql = '
		SELECT a.*, b.name as image 
		FROM products a
		LEFT JOIN products_images b ON a.id = b.products_id
		GROUP BY a.id';
		$res = mysqli_query($this->db, $sql);
		$result = array();
		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}

		return $result;

	}
}