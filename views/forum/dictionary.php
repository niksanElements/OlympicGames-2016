<?php $this->title = 'Forum'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <div class="container">
        <div class="ui three attached buttons">
            <?php
            include("_layout/actions.php");
            ?>
        </div>

        <form>
            <div class="ui attached segment">
                <div class="comments">
                    <div class="ui vertical steps stepin">
        <?php foreach ($this->posts as $post):?>

                <a href="<?=APP_ROOT?>/forum/read/<?=$post['id']?>">
                    <div class="ui active step teal segment">
                        <i class="newspaper icon"></i>
                        <div class="center-block">
                            <div class="title"><?= htmlspecialchars($post['title']) ?></div>
                        </div>
                    </div>
                </a>

        <?php endforeach ?>
                    </div>
                </div>
        </form>

    </div>
</main>
