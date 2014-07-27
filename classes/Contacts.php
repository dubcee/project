<?php

class Contacts implements ICRUD {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}


	public function add(IItem $item) {
		$sql = '
			INSERT INTO contacts (first_name, last_name, email, phone, title, content) 
			VALUES (
				"' .$item->first_name. '",
				"' .$item->last_name. '",
				"' .$item->email. '",
				"' .$item->phone. '",
				"' .$item->title. '",
				"' .$item->content. '"
			)
		';
		mysqli_query($this->db, $sql);
	}

	public function update($id, IItem $item) {

		$sql = '
			UPDATE contacts 
			SET 
				"' .$item->first_name. '",
				"' .$item->last_name. '",
				"' .$item->email. '",
				"' .$item->phone. '",
				"' .$item->title. '",
				"' .$item->content. '"
			WHERE id = ' . $id;

		mysqli_query($this->db, $sql);

	}


	public function delete($id) {

		$sql = '
			DELETE FROM contacts 
			WHERE id = '. $id;

		mysqli_query($this->db, $sql);

	}

	public function get($id) {

		$sql = '
			SELECT *
			FROM contacts 
			WHERE id = '.$id;

		$res = mysqli_query($this->db, $sql);
		
		$result = array();
		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}

		return mysqli_fetch_assoc($res);

	}

	public function getAll() {

		$sql = '
		SELECT * 
		FROM contacts';
		$res = mysqli_query($this->db, $sql);
		$result = array();
		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}

		return $result;

	}


}

?>