<?php
// get params from the URL

//$trip_id = $_GET['tripid'];

//$trip_id = $_GET['tripid'];
//$voyager_id = $_GET['voyager_id'];

$trip_id = 0;
$voyager_id = 0;


// if trip id exists
if($trip_id) {

	// $voyage_info = Voyage::get(4);

	$voyage_info = new Voyage();
	$voyage = $voyage_info->getVoyage($trip_id);
	$voyagers = $voyage_info->getVoyagers($trip_id);
	// TODO: php page for functions like "get leader"
	krumo($voyagers);
	krumo($voyage);

	$begin_date = date('F j, Y', strtotime($voyage->begin_date));
	$end_date = date('F j, Y', strtotime($voyage->end_date));
	

} 

?>




<h2>List of Voyages You are on the Manifest For</h2>
  <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name </td>
                <td>who </td>
                <td>where </td>
                <td>when </td>
                <td>how </td>
                <td>DELETE </td>
            </tr>
            </thead>
            <tbody>
<?php foreach ($voyages as $voyage) { ?>
                <tr>
                    <td><?php if (isset($voyage->id)) echo $voyage->id; ?></td>
                    <td><a href="<?php echo URL . 'on/main/' . $voyage->id; ?>"><?php if (isset($voyage->name)) echo $voyage->name; ?></a></td>
                  
                    <td><?php if (isset($voyage->who)) echo $voyage->who; ?></td>
                    <td><?php if (isset($voyage->where)) echo $voyage->where; ?></td>
                    <td><?php if (isset($voyage->when)) echo $voyage->when; ?></td>
                    <td><?php if (isset($voyage->how)) echo $voyage->how; ?></td>
              
                    <td><a href="<?php echo URL . 'home/deletevoyage/' . $voyage->id; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

