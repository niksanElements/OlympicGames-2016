<div class="container-fluid">
    <div class="dropdown col-lg-2 col-md-2 col-sm-2">
        <button class=" btn-block dropdown-toggle" data-toggle="dropdown">recent</button>
        <ul class="dropdown-menu">
            <?php foreach ($this->recentPosts as $post) : ?>
                <li>
                    <a href="<?= APP_ROOT ?>/forum/read/<?=$post['id']?>">
                        <?= $post['title'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="dropdown col-lg-2 col-md-2 col-sm-2">
        <button class=" btn-block dropdown-toggle" data-toggle="dropdown">dictionary</button>
        <ul class="dropdown-menu">
            <?php for ($i = 65;$i <= 90;$i++) { ?>
                <li>
                    <a href="<?= APP_ROOT ?>/forum/dictionary/<?= chr($i) ?>"><?= chr($i) ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>