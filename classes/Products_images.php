<?php

class Products_images implements ICRUD {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}

	
	public function update($id, IItem $item) {

		$sql = '
			UPDATE products_images
			SET 
			name = "' . $item->name . '",
			products_id = "' . $item->products_images . '",
			
			WHERE id = ' . $products_id;

		mysqli_query($this->db, $sql);

	}

	public function get($id) {

		$sql = '
			SELECT *
			FROM products_images 
			WHERE products_id = '.$id;

		$res = mysqli_query($this->db, $sql);
		
		$result = array();
		while ($row = mysqli_fetch_assoc($res)) {
			$result[] = $row;
		}
		return $result;

	}

	public function add(IItem $item) {
		$sql = '
			INSERT INTO products_images (name, products_id) 
			VALUES (
				"'.$item->name.'",
				"'.$item->products_id.'"
				
			)';
		
		mysqli_query($this->db, $sql);
	}

	

	public function delete($id) {

		$sql = '
			DELETE FROM products_images
			WHERE id = '. $id;

		mysqli_query($this->db, $sql);

	}


	public function getAll() {

		$sql = '
		SELECT * 
		FROM products_images
		'
		;

		$res = mysqli_query($this->db, $sql);

		$result = array();

		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}

		return $result;

	}
}
	