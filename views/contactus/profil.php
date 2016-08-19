<h1><?= htmlspecialchars($this->title) ?></h1>

<main>
    <table class="table table-strip table-inverse">
        <thead>

        <th>Name</th>
        <th>Age</th>
        <th>Body</th>
        <th>Education</th>
        <th>Work</th>
        <th>Passion</th>

        </thead>
        <tbody>
            <tr>
                <td><?= htmlspecialchars($this->contactus['name']) ?></td>
                <td><?= htmlspecialchars($this->contactus['age']) ?></td>
                <td><?= htmlspecialchars($this->contactus['body']) ?></td>
                <td><?= htmlspecialchars($this->contactus['education']) ?></td>
                <td><?= htmlspecialchars($this->contactus['work']) ?></td>
                <td><?= htmlspecialchars($this->contactus['passion']) ?></td>
            </tr>
        </tbody>
    </table>
</main>