<?php
require_once "/var/www/html/application/backend/voyage.inc";
require_once "/var/www/html/application/krumo/class.krumo.php";



//$voyage_info = Voyage::get(4);


$voyage_info = new Voyage();
echo "print array of voyagers getVoyagers";
$voyage_main = $voyage_info->getVoyagers(1);
krumo($voyage_main);
echo "get main voyage object - getVoyage";
$voyage_main = $voyage_info->getVoyage(1);
krumo($voyage_main);
