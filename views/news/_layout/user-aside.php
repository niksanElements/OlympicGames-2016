<aside>
    <ul class="scroll navbar navbar-inverse col-lg-2 col-md-2 col-sm-2">
        <li><a href="<?= APP_ROOT?>/news/create">Create</a></li>
        <h4 class="publications">Yours publications:</h4>
        <?php foreach ($this->userNews as $element) : ?>
            <li class="news">
                <a href="<?= APP_ROOT?>/news/read/<?=$element['id']?>"><?= $element['title'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>