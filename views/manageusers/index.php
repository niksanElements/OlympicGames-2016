<table>
    <tr>
        <th>
            ID:
        </th>
        <th>
            Username:
        </th>
        <th>
            Full name:
        </th>
        <th>
            E-mail:
        </th>
        <th>
            Status:
        </th>
        <th>
            Actions:
        </th>
    </tr>
    <?php
    $users = $this->model->getAllUsers();
    $content = "";
    foreach ($users as $user)
    {
        $content .= "<tr>";
        $content .= "<th>" . $user["id"] . "</th>";
        $content .= "<th>" . $user["username"] . "</th>";
        $content .= "<th>" . $user["full_name"] . "</th>";
        $content .= "<th>" . $user["email"] . "</th>";
        if($user["status"] == "A")
        {
            $content .= "<th>Admin</th>";
        }
        else
        {
            $content .= "<th>User</th>";
        }
        $content .= "<th>";
        $content .= "<a href='" . APP_ROOT . "/manageusers/edit/" . $user["id"] . "'>Edit</a>";
        $content .= "</th>";
        $content .= "</tr>";
    }
    echo $content;
    ?>
</table>