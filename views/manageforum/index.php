<h3>Manage forum list</h3>

<table class="table-responsive">
    <thead>
        <th>ID:</th><th>Titile:</th><th>Comments:</th><th>User Id</th><th>Date</th><th>Actions:</th>
    </thead>
    <tbody>
        <?php foreach($this->posts as $post): ?>
            <tr>
                <td>
                    <?=$post["id"]?>
                </td>
                <td>
                    <?=$post["title"]?>
                </td>
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
                    <a href="<?=APP_ROOT?>/manageforum/edit/<?=$post["id"]?>">Edit</a>
                    &nbsp;<a href="<?=APP_ROOT?>/manageforum/delete/<?=$post["id"]?>"
                             onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
