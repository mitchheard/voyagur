<?php


echo "gonna print profile";
$user_id = $_GET['user_id'];

$voyage_info = new Voyage();
$voyage_main = $voyage_info->getUserData($user_id);
krumo($voyage_main);

foreach($voyage_main as $per) {
	echo $per . " <br />";
}