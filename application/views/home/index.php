<div class="jumbotron">
  <h1>Where to?</h1>
  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo.</p>
  <p><a class="btn btn-primary btn-lg" role="button" href="<?php echo URL; ?>home/view">View a Voyage<a/></p>
  <p><a class="btn btn-primary btn-lg" role="button" href="<?php echo URL; ?>home/create">Create a Voyage</a></p>
  <p><a class="" href="<?php echo URL; ?>home/signIn">Sign in</a> | <a class="" href="#">Register</a></p>
</div>

<hr>

<div class="row-fluid marketing">
  <div class="span6">
    <h4>Subheading</h4>
    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

    <h4>Subheading</h4>
    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

  </div>

  <div class="span6">
    <h4>Subheading</h4>
    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

    <h4>Subheading</h4>
    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

  </div>
</div>

<h2>list of all voyages</h2>
  <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>

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
                  <td>
                        <?php if (isset($voyage->id)) { ?>
                            <a href="<?php echo URL . "home/view/".$voyage->id; ?>"><?php echo $voyage->id . " "; if (isset($voyage->name)) echo $voyage->name; ?></a>
                        <?php } ?>
                    </td>
          
                    <td><?php if (isset($voyage->who)) echo $voyage->who; ?></td>
                    <td><?php if (isset($voyage->where)) echo $voyage->where; ?></td>
                    <td><?php if (isset($voyage->when)) echo $voyage->when; ?></td>
                    <td><?php if (isset($voyage->how)) echo $voyage->how; ?></td>
              
                    <td><a href="<?php echo URL . 'home/deletevoyage/' . $voyage->id; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
