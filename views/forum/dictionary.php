<?php $this->title = 'Forum Dictionary'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<?php
    include("_layout\actions.php");
?>


<section>
    <?php foreach ($this->posts as $post):?>
        <a href="<?=APP_ROOT?>/forum/read/<?=$post['id']?>">
            <article class="panel panel-group">
                <h6 class="panel panel-heading"><?= htmlspecialchars($post['title']) ?></h6>
            </article>
        </a>
    <?php endforeach ?>
</section>