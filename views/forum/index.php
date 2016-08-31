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
    <?php foreach ($this->posts as $post):?>
        <div class="ui violet segment">
            <article class="panel panel-group news center-block">
                <a  href="<?=APP_ROOT?>/forum/read/<?=$post['id']?>">

                    <h4 class="panel panel-heading"><?= htmlspecialchars($post['title']) ?></h4>

                <p class="body panel panel-body"><?= htmlspecialchars($post['body']) ?></p>
                <div class="date panel panel-info">Post on:
                    <?= (new DateTime($post['date']))->format('d-M-Y') ?>
                    <i>by</i> <?= htmlspecialchars($post['full_name']) ?>
                </div>
                    <div class="pull-right">
                    <span class="glyphicon glyphicon-comment"> <b>Comment</b></span>
                     </div>
                </a>
            </article>
        </div>
    <?php endforeach ?>
                    </div>
    </form>

    </div>
</main>