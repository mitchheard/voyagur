<?php
// get params from the URL
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
	

} // end if
?>


<h2>list of all voyages</h2>
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
                    <td><?php if (isset($voyage->name)) echo $voyage->name; ?></td>
                    <td><?php if (isset($voyage->who)) echo $voyage->who; ?></td>
                    <td><?php if (isset($voyage->where)) echo $voyage->where; ?></td>
                    <td><?php if (isset($voyage->when)) echo $voyage->when; ?></td>
                    <td><?php if (isset($voyage->how)) echo $voyage->how; ?></td>
              
                    <td><a href="<?php echo URL . 'home/deletevoyage/' . $voyage->id; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>



        <h2> end end end </h2>
<style>
#container-view {min-height: 300px;}
#container-view .container-left {width: 70%; float: left;}
#container-view .container-right {width: 30%; float: left;}
#container-view h2 {font-size: 2em; margin: 0;}
#container-view .container-right h3 {text-align: center;}
#voyagurs ul {margin-left: 40px;}
.voyage-header {height: 30px;}
#voyage-title {float: left;}
#voyage-dates {float: right;}
.voyage-header .dates-title {font-weight: bold;}
.voyage-leader {font-weight: bold; font-style: italic;}
</style>
<div id="container-view" class="home-container">
	<div class="voyage-header">
		<div id="voyage-title">
			<h2>Voyage Destination</h2>
		</div>
		<div id="voyage-dates">
			<span class="dates-title">Dates</span> August 1-8, 2014
		</div>
	</div>
	<hr>
	<div class="container-left">
		<div id="voyage-details">
			<h3>Voyage Outline</h3>
			<?php echo "trip_id = ".$trip_id;
			?>
		</div>
	</div>
	<div class="container-right">
		<div id="voyagurs">
			<h3>Voyagurs</h3>
			<ul>
				<?php 
					foreach($voyagers as $voyager) {
						// if leader, <li class="voyage-leader">
						// TODO: link to their profile page with their voyager info
						if($voyager->user_id == $voyage->leader_id) echo "<li class='voyage-leader'>";
						else echo "<li>";
						echo "<a href=".URL."home/profile?user_id=".$voyager->user_id.">".$voyager->username."</li>";
					}
				?>
			</ul>
		</div>
	</div>
</div>