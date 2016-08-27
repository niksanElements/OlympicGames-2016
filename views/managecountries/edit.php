<h3>Edit countries</h3>
<form method="post">
    <table>
        <tr>
            <th>
                ID:
            </th>
            <th>
                <?=$this->country["id"]?>
            </th>
        </tr>
        <tr>
            <th>
                Short name:
            </th>
            <th>
                <input type="text" name="short_name" value="<?=$this->country["short_name"]?>" />
            </th>
        </tr>
        <tr>
            <th>
                Full name:
            </th>
        <th>
            <input type="text" name="full_name" value="<?=$this->country["full_name"]?>" />
        </th>
        </tr>
            <th colspan="2">
                <input type="submit" name="submit-edit" value="Save" />
            </th>
        </tr>
    </table>
</form>
