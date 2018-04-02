<?php 

require_once('item.php');


class DBConnection{

	private $connection;

	private function getConnection(){
		if( !$this->connection ){
			$this->connection=new PDO('mysql:host=localhost;dbname=Shop;charset=utf8mb4', 'root', 'root');
		}else{
			return $this->connection;		
		}
	}

	//get array items
	 public function getAllItemsReturnArr(){
		//$this->getConnection();
		
		$stmt=$this->getConnection()->query("SELECT * FROM Item");
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	//get object items
	 public function getAllItemsReturnObj(){
		$this->getConnection();
		$sql="SELECT * FROM Item";
		$stmt=$this->connection->query($sql);
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$items=array();
		foreach ($result as $row) {
			$item= new Item();
			//把每个row放在obj里，把obj放在array里，如果没有arrayAdapter就需要一个一个set。$item->setName($row['name']);
			//arr[]=$data就是往index array里放东西
			$items[]=$item->arrayAdapter($row);
			
		}
		//return index array of obj
		return $result;

	}
	


		
}

?>
 

