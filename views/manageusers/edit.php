<form method="post">
    <table>
        <tr>
            <th>
                ID:
            </th>
            <th>
                <?=$this->user["id"]?>
            </th>
        </tr>
        <tr>
            <th>
                Username:
            </th>
            <th>
                <input type="text" name="username" value="<?=$this->user["username"]?>" />
            </th>
        </tr>
        <tr>
            <th>
                Full name:
            </th>
            <th>
                <input type="text" name="full_name" value="<?=$this->user["full_name"]?>" />
            </th>
        </tr>
        <tr>
            <th>
                E-mail:
            </th>
            <th>
                <input type="text" name="email" value="<?=$this->user["email"]?>" />
            </th>
        </tr>
        <tr>
            <th>
                Status:
            </th>
            <th>
                <?php if($this->user["status"] == "A"): ?>
                    <input type="radio" name="status" value="A" checked="checked" />
                    Admin
                    <input type="radio" name="status" value="U" />
                    User
                <?php else: ?>
                    <input type="radio" name="status" value="A" />
                    Admin
                    <input type="radio" name="status" value="U" checked="checked" />
                    User
                <?php endif ?>
            </th>
        </tr>
        <tr>
            <th>
                Password:
            </th>
            <th>
                <input type="password" name="password" />
            </th>
        </tr>
        <tr>
            <th>
               Confirm password:
            </th>
            <th>
                <input type="password" name="password_confirm" />
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit" name="submit-edit" value="Save" />
            </th>
        </tr>
    </table>
</form>