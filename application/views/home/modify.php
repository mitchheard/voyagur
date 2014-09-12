<?php


require_once "/var/www/html/application/backend/voyage.inc";



//$voyage_info = Voyage::get(4);

$voyage_info = new Voyage();
$voyage_main = $voyage_info->getVoyage(1);


echo "<br />";
echo "<br />";
echo "Voyage name: " . $voyage_main->name ;
echo "<br />";
echo "begin: " . $voyage_main->begin_date ;
echo "<br />";
echo "end: " . $voyage_main->end_date ;