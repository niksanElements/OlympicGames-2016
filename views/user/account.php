<form method="post">
    <table>
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