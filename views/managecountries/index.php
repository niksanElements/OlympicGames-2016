<h3>Manage countries list</h3>
<a href="<?=APP_ROOT?>/managecountries/add">Add new country</a><br /><br />
<table>
    <tr>
        <th>
            ID:
        </th>
        <th>
            Short name:
        </th>
        <th>
            Full name:
        </th>
        <th>
            Actions:
        </th>
    </tr>
    <?php foreach($this->countries as $country): ?>
        <tr>
            <th>
                <?=$country["id"]?>
            </th>
            <th>
                <?=$country["short_name"]?>
            </th>

            <th>
                <?=$country["full_name"]?>
            </th>
            <th>
                <a href="<?=APP_ROOT?>/managecountries/edit/<?=$country["id"]?>">Edit</a>
                &nbsp;<a href="<?=APP_ROOT?>/managecountries/delete/<?=$country["id"]?>" onclick="return confirm('Are you sure?')">Delete</a>
            </th>
        </tr>
    <?php endforeach ?>
</table>
