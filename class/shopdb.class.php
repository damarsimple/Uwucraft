<?php
include('session.class.php');

class Shopdb extends Session{
    public function dGants(){
        echo "Bae";
        return "bae";
    }
    public function giveUUID($crack, $username)
	{
		if($crack === True){
			return $this->offlinePlayerUuid($username);
		}else{
			return $this->mojangApi($username);
		}
	}
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
	public function getPrice($item){
		$price_query = "SELECT * FROM `items_index` WHERE `items_index`.`name` = '$item';";
		$fetch_price = mysqli_query($this->mysqli, $price_query);
		$row_price = mysqli_fetch_array($fetch_price);
		$price = $row_price['price'];
		return $price;
		}
	public function detectPlayerBalance($uuid){
		$query = "SELECT * FROM eco_accounts WHERE player_uuid = '$uuid'";
        $fetch = mysqli_query($this->mysqli, $query);
        $row = mysqli_fetch_array($fetch);
		$money = $row['money'];
		return $money;
	}
	public function savePlayerLogs($time, $players,$uuid,$item,$amounts,$ip){
		$query = "INSERT INTO `transaction_history` (`id`, `date`, `username`, `UUID`, `item`, `amounts`, `ip`)
        VALUES (NULL, '$time', '$players', '$uuid', '$item', '$amounts', '$ip'); ";
        return mysqli_query($this->mysqli, $query);
	}
}