
<div id="container">
    <h2>Add a Voyage</h2>
  <form role="form" action="<?php echo URL; ?>on/addvoyage" method="POST">
    <div class="form-group">
      <label for="inputName">What is the name of your Trip?</label>
      <input type="text" class="form-control" id="name" name ="name " placeholder="ex: Suits and Thai, Austin City Limits, Tays Bachelor" required />
    </div>
    <div class="form-group">
      <label for="inputName">Where are you going?</label>
      <input type="text" class="form-control" id="name" name ="name " placeholder="ex: Austin, Vegas, New York" required />
    </div>
    <div class="form-group">
      <label for="inputName">Who is coming with you?</label>
      <input type="text" class="form-control" id="name" name ="name " placeholder="email addresses seperated by comma" required />
    </div>
    <div class="form-group">
      <label for="inputName">How will you get there?</label>
      <input type="text" class="form-control" id="name" name ="name " placeholder="Planes, drive, hotel" required />
    </div>
    <div class="form-group">
      <label for="inputName">Are you celebrating an event or is there theme?</label>
      <input type="text" class="form-control" id="name" name ="name " placeholder="ex: Bachelors Party, Wedding, Reunion" required />
    </div>
    <input type="submit" class="btn btn-default" name="submit_add_voyage" value="Create Voyage" />
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






