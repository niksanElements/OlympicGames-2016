<h1>Manage Forum</h1>
<main>
    <div class="container">
        <form>
            <table class="table table-responsive">
                <thead>
                <th>ID:</th>
                <th>Titile:</th>
                <th>Comments:</th>
                <th>User Id</th>
                <th>Date</th>
                <th>Actions:</th>
                </thead>
                <tbody>
                <?php foreach($this->posts as $post): ?>
                    <tr>
                        <td><?=$post["id"]?></td>
                        <td><?=$post["title"]?></td>
                        <td >
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comments</a>
                                <ul class="dropdown-menu" >
                                    <?php foreach($post['comments'] as $comment): ?>
                                        <li class>
                                            &nbsp;<a href="<?=APP_ROOT?>/comments/delete/post_comments/<?=$comment["id"]?>"
                                                     onclick="return confirm('Are you sure?')">Delete this
                                                <b><?=$comment["body"]?></b>
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <?=$post["user_id"]?>
                        </td>
                        <td>
                            <?= $post["Date"] ?>
                        </td>
                        <td>
                            <ul class="list-group">
                                <li class="list-group-item-text">
                                    <a class="text-success"href=" <?=APP_ROOT?>/manageforum/edit/<?=$post["id"]?>">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="list-group-item-text">
                                    <a class="text-danger" href="<?=APP_ROOT?>/manageforum/delete/<?=$post["id"]?>"
                                       onclick="return confirm('Are you sure?')">
                                        <span class="glyphicon glyphicon-minus-sign text-danger"></span> Delete</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </form>
        <a class="btn btn-primary pull-right" href="<?=APP_ROOT?>/adminpanel" >
            <span class="glyphicon glyphicon-backward"> <b>Back</b></span></a>
    </div>
</main>