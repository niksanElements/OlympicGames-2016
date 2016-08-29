<h1>Manage Countries</h1>
<a class="btn btn-lg btn-primary"  href="<?=APP_ROOT?>/managecountries/add">
    <span class="glyphicon glyphicon-plus">Add Country</span> </a><br /><br />
<main>
    <div class="container">
        <form>
            <table class="table table-responsive">
                <tr>
                    <th>ID:</th>
                    <th>Short name:</th>
                    <th>Full name:</th>
                    <th>Actions:</th>
                </tr>
                <?php foreach($this->countries as $country): ?>
                    <tr>
                        <th><?=$country["id"]?></th>
                        <th><?=$country["short_name"]?></th>
                        <th><?=$country["full_name"]?></th>
                        <th>
                            <ul class="list-group">
                                <li class="list-group-item-text">
                                    <a class="text-success" href="<?=APP_ROOT?>/managecountries/edit/<?=$country["id"]?>">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="list-group-item-text">
                                    <a class="text-danger" href="<?=APP_ROOT?>/managecountries/delete/<?=$country["id"]?>"
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