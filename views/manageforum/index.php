<h3>Manage countries list</h3>
<table>
    <tr>
        <th>ID:</th><th>Titile:</th><th>User Id</th><th>Date</th><th>Actions:</th>
    </tr>
    <?php foreach($this->posts as $post): ?>
        <tr>
            <td>
                <?=$post["id"]?>
            </td>
            <td>
                <?=$post["title"]?>
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
</table>
