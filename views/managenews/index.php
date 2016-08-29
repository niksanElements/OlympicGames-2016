<h1>Manage News</h1>
<a class="btn btn-lg btn-primary"  href="<?=APP_ROOT?>/news/create">
    <span class="glyphicon glyphicon-plus">Add News</span> </a><br /><br />
<main>
    <div class="container">
        <form>
        <table class="table table-responsive">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Comments:</th>
                <th>User Id</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php foreach($this->news as $element): ?>
                <tr>
                    <td><?=$element["id"]?></td>
                    <td><?=$element["title"]?></td>
                    <td >
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comments</a>
                            <ul class="dropdown-menu" >
                                <?php foreach($element['comments'] as $comment): ?>
                                    <li>
                                        &nbsp;<a href="<?=APP_ROOT?>/comments/delete/news_comments/<?=$comment["id"]?>"
                                                 onclick="return confirm('Are you sure?')">Delete this
                                            <b><?=$comment["body"]?></b>
                                        </a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </td>
                    <td><?=$element["users_id"]?></td>
                    <td><?=$element["date"]?></td>
                    <th>
                        <ul class="list-group">
                            <li class="list-group-item-text">
                                <a class="text-success"  href="<?=APP_ROOT?>/news/edit/<?=$element["id"]?>">
                                    <span class="glyphicon glyphicon-edit"></span> Edit</a>
                            </li>
                            <li class="list-group-item-text">
                                <a class="text-danger" href="<?=APP_ROOT?>/news/remove/<?=$element["id"]?>"
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

