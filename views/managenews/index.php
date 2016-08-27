<h3>News management</h3>
<table>
    <tr>
        <th>ID</th><th>Titile</th><th>Comments:</th><th>User Id</th><th>Date</th>
    </tr>
    <?php foreach($this->news as $element): ?>
        <tr>
            <td>
                <?=$element["id"]?>
            </td>
            <td>
                <?=$element["title"]?>
            </td>
            <td >
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comments</a>
                    <ul class="dropdown-menu" >
                        <?php foreach($element['comments'] as $comment): ?>
                            <li class>
                                &nbsp;<a href="<?=APP_ROOT?>/comments/delete/news_comments/<?=$comment["id"]?>"
                                         onclick="return confirm('Are you sure?')">Delete this
                                    <b><?=$comment["body"]?></b>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </td>
            <td>
                <?=$element["users_id"]?>
            </td>
            <td>
                <?=$element["date"]?>
            </td>
            <th>
                <a href="<?=APP_ROOT?>/news/edit/<?=$element["id"]?>">Edit</a>
                &nbsp;<a href="<?=APP_ROOT?>/news/remove/<?=$element["id"]?>" onclick="return confirm('Are you sure?')">Delete</a>
            </th>
        </tr>
    <?php endforeach ?>
</table>
