<?php 

class shop {
	// show all items
	public function allMethod() {
		echo "all method";

		$conn = new DBConnection();
		$all = $conn->getAllItemsReturnObj();
		echo $all;
	}

	// show item where id=3
	public function itemMethod($id) {
		echo "item method" . $id;

		$id = $_POST['id'];
		$conn = new DBConnection();
		// $stmt = $conn->query("SELECT * FROM Item where ")
	}
	public function indexMethod() {
		echo "Using Default Method";
	}
}

 ?>