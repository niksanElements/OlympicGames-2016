<h1>Manage Users</h1>
<main>
    <div class="container">
        <form>
            <table class="table table-responsive">
                <tr>
                    <th>ID:</th>
                    <th>Username:</th>
                    <th>Full name:</th>
                    <th>E-mail:</th>
                    <th>Status:</th>
                    <th>Actions:</th>
                </tr>
                <?php foreach($this->users as $user): ?>
                    <tr>
                        <th><?=$user["id"]?></th>
                        <th><?=$user["username"]?></th>
                        <th><?=$user["full_name"]?></th>
                        <th><?=$user["email"]?></th>
                        <th>
                            <?php if($user["status"] == "A"){ ?>
                                Admin
                            <?php }else if($user["status"] == "U") { ?>
                                User
                            <?php } else { ?>
                                Redactor
                            <?php } ?>
                        </th>
                        <th>
                            <ul class="list-group">
                                <li class="list-group-item-text">
                                    <a class="text-success"  href="<?=APP_ROOT?>/manageusers/edit/<?=$user["id"]?>">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="list-group-item-text">
                                    <a class="text-danger" href="<?=APP_ROOT?>/manageusers/delete/<?=$user["id"]?>"
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