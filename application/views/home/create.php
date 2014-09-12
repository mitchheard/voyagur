<div>
        <h3>Add a Voyage</h3>
        <form action="<?php echo URL; ?>home/addvoyage" method="POST">
            <label>Name of Trip</label>
            <input type="text" name="name" value="" required />
            <label>Where</label>
            <input type="text" name="where" value="" required />
            <label>When</label>
            <input type="text" name="when" value="" required />
            <label>Who</label>
            <input type="text" name="who" value="" />
            <label>How will you get there</label>
            <input type="text" name="how" value="" />
            <label>Are you celebrating an event or purpose for voyage</label>
            <input type="text" name="event_type" value="" />
            <label>You the fearless leader</label>
            <input type="checkbox" name="leader" value="" />

            <input type="submit" name="submit_add_voyage" value="Submit" />
        </form>
    </div>


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
    <br />
    <br />
    <br />
    <br />







<div id="container">
  <form role="form" action="created.php" method="post">
    <div class="form-group">
      <label for="inputDestination">Where do you want to go?</label>
      <input type="destination" class="form-control" id="destination" placeholder="Where do you want to go?">
    </div>
    <div class="form-group">
      <label for="inputDeparture">When are you going?</label>
      <input type="departure" class="form-control" id="departure" placeholder="When are you going?">
    </div>
    <div class="form-group">
      <label for="inputVoyagurs">Who is coming with you</label>
      <input type="voyagurs" class="form-control" id="voyagurs" placeholder="Who is coming with you?">
    </div>
    <div class="form-group">
      <label for="inputTransportation">How will you get there?</label>
      <input type="transportation" class="form-control" id="transportation" placeholder="How will you get there?">
    </div>
    <div class="form-group">
      <label for="inputPurpose">Are you celebrating an event or is there a theme/puprpose for the Voyage?</label>
      <input type="purpose" class="form-control" id="purpose" placeholder="Are you celebrating an event or is there a theme/puprpose for the Voyage?">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Are you the Voyagur Leader?
      </label>
    </div>
    <button type="submit" class="btn btn-default">Create Voyage</button>
  </form>
</div>
