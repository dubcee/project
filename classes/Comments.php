<?php

class Comments implements ICRUD {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}


	public function add(IItem $item) {
		$sql = '
			INSERT INTO comments (name, content, date_added, news_id) 
			VALUES (
				"' .$item->name. '",
				"' .$item->content. '",
				"' .$item->date_added. '",
				"' .$item->news_id. '"
			)
		';
		mysqli_query($this->db, $sql);
	}

	public function update($id, IItem $item) {

		$sql = '
			UPDATE comments 
			SET 
			name = "' . $item->name . '",
			content = "' . $item->content . '",
			date_added = "' . $item->date_added . '"
			WHERE id = ' . $id;
	
		mysqli_query($this->db, $sql);

	}


	public function delete($id) {

		$sql = '
			DELETE FROM comments 
			WHERE id = '. $id;

		mysqli_query($this->db, $sql);

	}

	public function get($news_id) {

		$sql = '
		SELECT name, content, date_added
        FROM comments
        WHERE news_id = '.$news_id;

		$res = mysqli_query($this->db, $sql);
		$result = array();
		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}
		return $result;
		
		
	}

	public function getAll() {

		$sql = '
		SELECT * 
		FROM comments';
		$res = mysqli_query($this->db, $sql);
		$result = array();
		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}

		return $result;

	}

}