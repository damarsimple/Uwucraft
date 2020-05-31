<?php
include('session.class.php');

class Shopdb extends Session{
	public function detectPlayerBalanceEnough($money, $price)
	{
		$result = $money - $price;
		if($result < 0){
			$b = False;
		}else{
			$b = True;
		}
		return $b;
	}
	public function getPrice($items){
		$price = $this->mysqli->query("SELECT * FROM `$this->ItemsIndex` WHERE `name` = '$items' ")->fetch_assoc();
		return $price['price'];
	}
	public function getItemID($items){
		$price = $this->mysqli->query("SELECT * FROM `$this->ItemsIndex` WHERE `name` = '$items' ")->fetch_assoc();
		return $price['minecraft_item_id'];
	}
	public function detectPlayerBalance($uuid){
		$money = $this->mysqli->query("SELECT * FROM $this->MysqlEcoBridge WHERE player_uuid = '$uuid'")->fetch_assoc();
		return $money['money'];
	}
	public function savePlayerLogs($players,$uuid,$item,$amounts,$ip){
		$query = "INSERT INTO `$this->TransactionHistory` (`id`, `date`, `username`, `UUID`, `item`, `amounts`, `ip`)
		VALUES (NULL, '$this->time', '$players', '$uuid', '$item', '$amounts', '$ip'); ";
		return $this->mysqli->query($query);
	}
	public function addCart($username,$items,$amount){
		$UUID = $this->giveUUID($username);
		$ID = $this->getItemID($items);
		return $this->mysqli->query("INSERT INTO `$this->Items_Cart` (`id`, `username`, `UUID`, `items_name`, `minecraft_item_id`, `amounts`, `date`)
		VALUES (NULL, '$username', '$UUID', '$items', '$ID', '$amount', '$this->time'); ");
	}
	public function seeCart($UUID){
		return $this->mysqli->query("SELECT * FROM `$this->Items_Cart` WHERE `$this->Items_Cart`.`UUID` = '$UUID';")->fetch_all(MYSQLI_ASSOC);
	}
	public function removeCart($UUID,$item){
		return $this->mysqli->query("DELETE FROM `$this->Items_Cart` WHERE `$this->Items_Cart`.`items_name` = '$item' AND `$this->Items_Cart`.`UUID` = '$UUID';");
	}
	public function clearCart($UUID){
		$this->mysqli->query("DELETE FROM `$this->Items_Cart` WHERE  `$this->Items_Cart`.`UUID` = '$UUID';");
		unset($_SESSION['cart']);
		return True;
	}
	public function itemsIndex(){
		return $this->mysqli->query("SELECT * FROM $this->ItemsIndex")->fetch_all(MYSQLI_ASSOC);
	}
	public function itemsIndexCounter(){
		return $this->mysqli->query("SELECT * FROM `$this->ItemsIndex` ORDER BY `$this->ItemsIndex`.`counter` DESC LIMIT $this->Limit")->fetch_all(MYSQLI_ASSOC);
	}
	public function itemWhere($item){
		return $this->mysqli->query("SELECT * FROM `$this->ItemsIndex` WHERE `name` = '$item' ")->fetch_assoc();
	}
}