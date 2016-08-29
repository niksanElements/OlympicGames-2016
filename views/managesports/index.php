<h1>Manage Sports</h1>
<a class="btn btn-lg btn-primary"   href="<?=APP_ROOT?>/managesports/add">
  <span class="glyphicon glyphicon-plus">Add Sport</span> </a><br /><br />
<main>
  <div class="container">
    <form>
      <table class="table table-responsive">
        <tr>
          <th>ID:</th>
          <th>Sport:</th>
          <th>Venue:</th>
          <th>Actions:</th>
        </tr>
        <?php foreach($this->sports as $sport): ?>
          <tr>
            <th><?=$sport["id"]?></th>
            <th><?=$sport["name"]?></th>
            <th><?=$sport["venue"]?></th>
            <th>
              <ul class="list-group">
                <li class="list-group-item-text">
                  <a class="text-success"  href="<?=APP_ROOT?>/managesports/edit/<?=$sport["id"]?>">
                    <span class="glyphicon glyphicon-edit"></span> Edit</a>
                </li>
                <li class="list-group-item-text">
                  <a class="text-danger" href="<?=APP_ROOT?>/managesports/delete/<?=$sport["id"]?>"
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
