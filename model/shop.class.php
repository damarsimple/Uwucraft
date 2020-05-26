<?php
include('WebsenderAPI.class.php');
class Shop extends WebsenderAPI{
	// Fungsi beli mulai dari sini
	public function buyItem($player, $item, $amount, $price){
		$this->connect();
		$this->sendCommand("economy take $player $price");
		$this->sendCommand("give $player $item $amount");
		$this->sendCommand("say $player has purchased $amount $item for $price");
		$this->sendCommand("whisper $player Thank you for purchasing $item!");
		$this->disconnect(); //Close connection.
	}
	public function test(){
		echo "test";
		return "te";
	}
}

?>