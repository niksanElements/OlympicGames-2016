<h1>Manage Medals</h1>
<a class="btn btn-lg btn-primary"  href="<?=APP_ROOT?>/managemedals/add">
  <span class="glyphicon glyphicon-plus">Add Medals</span> </a><br /><br />
<main>
  <div class="container">
    <form>
      <table class="table table-responsive">
        <tr>
          <th>ID:</th>
          <th>Medal:</th>
          <th>Type:</th>
          <th>Winner:</th>
          <th>Actions:</th>
        </tr>
        <?php foreach($this->medals as $medal): ?>
          <tr>
            <th><?=$medal["id"]?></th>
            <th><?=$medal["name"]?></th>
            <th>
              <?php if ($medal["type"] == 1): ?>
                Gold
              <?php elseif ($medal["type"] == 2):?>
                Silver
              <?php else:?>
                Bronze
              <?php endif?>
            </th>
            <th><?=$medal["winner"]?></th>
            <th>
             <ul class="list-group">
              <li class="list-group-item-text">
                <a class="text-success" href="<?=APP_ROOT?>/managemedals/edit/<?=$medal["id"]?>">
                  <span class="glyphicon glyphicon-edit"></span> Edit</a>
              </li>
              <li class="list-group-item-text">
                <a class="text-danger" href="<?=APP_ROOT?>/managemedals/delete/<?=$medal["id"]?>"
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