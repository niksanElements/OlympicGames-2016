<?php $this->title = 'Forum'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<?php
    include("_layout\actions.php");
?>


<section>
    <?php foreach ($this->posts as $post):?>
        <a  href="<?=APP_ROOT?>/forum/read/<?=$post['id']?>">
            <article class="panel panel-group">

                    <h4 class="panel panel-heading"><?= htmlspecialchars($post['title']) ?></h4>

                <p class="body panel panel-body"><?= htmlspecialchars($post['body']) ?></p>
                <div class="date panel panel-info">Post on:
                    <?= (new DateTime($post['date']))->format('d-M-Y') ?>
                    <i>by</i> <?= htmlspecialchars($post['full_name']) ?>
                </div>
            </article>
        </a>
    <?php endforeach ?>
</section>