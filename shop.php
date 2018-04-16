<?php 

class shop {
	// show all items
	public function allMethod() {
		echo "all method";
		$conn = new DBConnection();
	}

	// show item where id=3
	public function itemMethod($id) {
		echo "item method" . $id;
	}
	public function indexMethod() {
		echo "Using Default Method";
	}
}

 ?>