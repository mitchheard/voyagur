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
	//pass a voyage id to get an array of voyagers 
	public static function getVoyagers($voyage_id) {
		$holder = self::get_voyagers($voyage_id);
		return $holder;
		//return self::getInfo(4);
	}
	public static function get($voyage_id) {
		return new voyage($voyage_id);
	}

	private static function get_main_voyage($voyage_id) {
		$main_sql = "select * from voyage where id = " . $voyage_id;
		$voyage_data = self::query($main_sql);

		return $voyage_data;
	}

	private static function get_voyagers($voyage_id) {
		$main_sql = "select * from voyage_manifest inner join users on voyage_manifest.user_id = users.id and  voyage_manifest.voyage_id = " . $voyage_id;
		$voyagers_data = self::query($main_sql);

		return $voyagers_data;
	}
	private static function query($query) {
		$con=mysqli_connect("localhost","root","root", "voyagur");
		
		// Check connection
		if (mysqli_connect_errno()) {
  			echo "	Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$result = mysqli_query($con,$query);

		$object_send = null;
		$i =0;
		while ($row = $result->fetch_object() ) {
		    $object_send[$i]= $row;
		    $i++; 
		}

		return $object_send;
	}

}