<h1>Manage Venues</h1>
<a class="btn btn-lg btn-primary"  href="<?=APP_ROOT?>/managevenues/add">
  <span class="glyphicon glyphicon-plus">Add Venue</span> </a><br /><br />
<main>
  <div class="container">
    <form>
      <table class="table table-responsive">
        <tr>
          <th>ID:</th>
          <th>Venue Name:</th>
          <th>Sports:</th>
          <th>Capacity:</th>
          <th>Actions:</th>
        </tr>
        <?php foreach($this->venues as $venue): ?>
          <tr>
            <th><?=$venue["id"]?></th>
            <th><?=$venue["venue_name"]?></th>
            <th><?=$venue["sport"]?></th>
            <th><?=$venue["capacity"]?></th>
            <th>
              <ul class="list-group">
                <li class="list-group-item-text">
                  <a class="text-success"  href="<?=APP_ROOT?>/managevenues/edit/<?=$venue["id"]?>">
                    <span class="glyphicon glyphicon-edit"></span> Edit</a>
                </li>
                <li class="list-group-item-text">
                  <a class="text-danger" <a href="<?=APP_ROOT?>/managevenues/delete/<?=$venue["id"]?>"
                     onclick="return confirm('Are you sure?')">
                    <span class="glyphicon glyphicon-minus-sign text-danger"></span> Delete</a>
                </li>
              </ul>
            </th>
          </tr>
        <?php endforeach ?>
      </table>
    </form>
    <a class="btn btn-primary pull-right" href="<?=APP_ROOT?>/adminpanel" >
      <span class="glyphicon glyphicon-backward"> <b>Back</b></span></a>
  </div>
</main>
