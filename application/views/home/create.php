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
  <form role="form" action="<?php echo URL; ?>home/addvoyage" method="POST">
    <div class="form-group">
      <label for="inputDestination">What is the name of your trip?</label>
      <input type="text" class="form-control" name="where" value="" placeholder="Trip Name">
    </div>
    <div class="form-group">
      <label for="inputDestination">Where do you want to go?</label>
      <input type="text" class="form-control" name="where" value="" placeholder="Chiang Mai, Thailand">
    </div>
    <div class="form-group">
      <label for="inputDeparture">When are you going?</label>
      <input type="text" class="form-control" name="when" value="" placeholder="11/3/2015?">
    </div>
    <div class="form-group">
      <label for="inputVoyagurs">Who is coming with you</label>
      <input type="text" class="form-control" name="who" value="" placeholder="Your Butt?">
    </div>
    <div class="form-group">
      <label for="inputTransportation">How will you get there?</label>
      <input type="text" class="form-control" name="how" value="" placeholder="Plane, Train, Automobile?">
    </div>
    <div class="form-group">
      <label for="inputPurpose">Are you celebrating an event or is there a theme/puprpose for the Voyage?</label>
      <input type="text" class="form-control" name="event_type" value="" placeholder="Partying Hard">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="leader" value=""> Are you the Voyagur Leader?
      </label>
    </div>
    <button type="submit" name="submit_add_voyage" value="Submit" class="btn btn-default">Create Voyage</button>
  </form>
</div>
