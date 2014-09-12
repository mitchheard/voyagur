<?php
require_once "/var/www/html/application/backend/voyage.inc";
require_once "/var/www/html/application/krumo/class.krumo.php";



//$voyage_info = Voyage::get(4);

$voyage_info = new Voyage();
$voyage_main = $voyage_info->getVoyagers(1);
krumo($voyage_main);

echo "<br />";
echo "<br />";
print_r($voyage_main);