<?php $this->title = 'Forum Dictionary'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<?php
    include("_layout\actions.php");
?>


<section>
    <?php foreach ($this->posts as $post):?>
        <a href="<?=APP_ROOT?>/forum/read/<?=$post['id']?>">
            <article class="center-block center">
                <h4><?= htmlspecialchars($post['title']) ?></h4>
            </article>
        </a>
    <?php endforeach ?>
</section>