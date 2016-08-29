<h1>Manage Team Members</h1>
<a class="btn btn-lg btn-primary"  href="<?=APP_ROOT?>/managecontactus/add">
  <span class="glyphicon glyphicon-plus"> Add-New</span> </a><br /><br />
<main>
  <div class="container">
    <form>

      <table class="table table-responsive" cellpadding="0" border="0" cellspacing="0">
        <thead>
        <th>ID:</th>
        <th>Team Member Name:</th>
        <th>Age:</th>
        <th>Body:</th>
        <th>Education:</th>
        <th>Passion:</th>
        <th>Work:</th>
        <th>Actions:</th>
        </thead>
        <?php foreach($this->contactus as $contact): ?>
          <tr>
            <td><?=$contact["id"]?></td>
            <td><?=$contact["name"]?></td>
            <td><?=$contact["age"]?></td>
            <td><?=$contact["body"]?></td>
            <td><?=$contact["education"]?></td>
            <td><?=$contact["passion"]?></td>
            <td><?=$contact["work"]?></td>
            <td>
              <ul class="list-group">
                <li class="list-group-item-text">
                  <a class="text-success" href="<?=APP_ROOT?>/managecontactus/edit/<?=$contact["id"]?>">
                    <span class="glyphicon glyphicon-edit"></span> Edit</a>
                </li>
                <li class="list-group-item-text">
                  <a class="text-danger" href="<?=APP_ROOT?>/managecontactus/delete/<?=$contact["id"]?>"
                     onclick="return confirm('Are you sure?')">
                    <span class="glyphicon glyphicon-minus-sign text-danger"></span> Delete</a>
                </li>
              </ul>
            </td>
          </tr>
        <?php endforeach ?>
      </table>
      </form>
    <a class="btn btn-primary pull-right" href="<?=APP_ROOT?>/adminpanel" >
      <span class="glyphicon glyphicon-backward"> <b>Back</b></span></a>
    </div>
  </main>
