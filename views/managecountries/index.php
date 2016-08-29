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
                        <th>
                            <i class="<?php
                            $str = $country['short_name'];
                            $str = strtolower($str);
                            echo $str;
                            ?> flag"></i>
                            <?=$country["short_name"]?></th>
                        <th><?=$country["full_name"]?></th>
                        <th>
                            <div class="ui small buttons">
                                <a class="ui positive small button" href="<?=APP_ROOT?>/managecontactus/edit/<?=$country["id"]?>">
                                    <span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <div class="or"></div>
                                <a class="ui negative small button" href="<?=APP_ROOT?>/managecontactus/delete/<?=$country["id"]?>"
                                   onclick="return confirm('Are you sure?')">
                                    <span class="glyphicon glyphicon-minus-sign"></span> Delete</a>
                            </div>
                        </th>
                    </tr>
                <?php endforeach ?>
            </table>
        </form>
        <a class="btn btn-primary pull-right" href="<?=APP_ROOT?>/adminpanel" >
            <span class="glyphicon glyphicon-backward"> <b>Back</b></span></a>
    </div>
</main>