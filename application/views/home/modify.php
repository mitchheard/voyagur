<?php


require_once "/var/www/html/application/backend/voyage.inc";



//$voyage_info = Voyage::get(4);

$voyage_info = new Voyage();
$voyage_main = $voyage_info->getVoyagers(1);


echo "<br />";
echo "<br />";
print_r($voyage_main);