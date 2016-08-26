<h3>Edit countries</h3>
<form method="post">
    <table>
        <tr>
            <th>
                ID:
            </th>
            <th>
                <?=$this->countries["id"]?>
            </th>
        </tr>
        <tr>
            <th>
                Medal name:
            </th>
            <th>
                <input type="text" name="name" value="<?=$this->medals["name"]?>" />
            </th>
        </tr>
        <tr>
            <th>
                Winner
            </th>
            <th>
                <select name="playerID">
                    <?php foreach($this->athletes as $athlete): ?>
                        <?php if($athlete["id"] == $this->medals["playerID"]): ?>
                            <option value="<?=$athlete["id"]?>" selected="selected"><?=$athlete["full_name"]?></option>
                        <?php else: ?>
                            <option value="<?=$athlete["id"]?>"><?=$athlete["full_name"]?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
            </th>
        </tr>
        <tr>
            <th>
                Medal type:
            </th>
            <th>
                <select name="type">
                    <?php if($this->medals["type"] == 1): ?>
                        <option value="1" selected="selected">Gold</option>
                    <?php else: ?>
                        <option value="1">Gold</option>
                    <?php endif ?>
                    <?php if($this->medals["type"] == 2): ?>
                        <option value="2" selected="selected">Silver</option>
                    <?php else: ?>
                        <option value="2">Silver</option>
                    <?php endif ?>
                    <?php if($this->medals["type"] == 3): ?>
                        <option value="3" selected="selected">Bronze</option>
                    <?php else: ?>
                        <option value="3">Bronze</option>
                    <?php endif ?>
                </select>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit" name="submit-edit" value="Save" />
            </th>
        </tr>
    </table>
</form>
