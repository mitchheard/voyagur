<?php

/** 
*
*
*
*
* This is the main voyage class that has all the connections to DB
*
*/

class voyage{

	//const HARD_NUM = 3;
	//public $just_a_rand = "hello_private_parts";
	//private $constructed ;
	//private static $try;

	public function __construct(){
		//in case we need to construct
		
	}
	public static function getVoyage($voyage_id) {
		$hel = self::get_main_voyage($voyage_id);
		return $hel;
		//return self::getInfo(4);
	}
	public static function get($voyage_id) {
		return new voyage($voyage_id);
	}

	private static function get_main_voyage($id) {
		$main_sql = "select * from voyage where id = " . $id;
		$voyage_data = self::query($main_sql);

		return $voyage_data;
	}

	private static function query($query) {
		$con=mysqli_connect("localhost","root","root", "voyagur");
		
		// Check connection
		if (mysqli_connect_errno()) {
  			echo "	Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$result = mysqli_query($con,$query);
		return $result->fetch_object();
	}

}