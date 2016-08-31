<h1><?= htmlspecialchars($this->title) ?></h1>
<main>
    <article class="panel panel-group center-block news">
        <h4 class="panel panel-heading"><?= htmlspecialchars($this->news['title']) ?></h4>
        <div class="date panel panel-info">Post on:
            <?= (new DateTime($this->news['date']))->format('d-M-Y') ?>
            <i>by</i> <?= htmlspecialchars($this->news['full_name']) ?>
        </div>
        <p class="body panel panel-body"><?= $this->news['body']?></p>
    </article>
    <article class="panel panel-group center-block news">
    <?php
        if($this->isRedactor) {
            ?>
            <div class="action">
                <div>[<a href="<?= APP_ROOT ?>/news/edit/<?= $this->news['id'] ?>">edit</a>]</div>
                <div>[<a href="<?= APP_ROOT ?>/news/remove/<?= $this->news['id'] ?>">delete</a>]</div>
            </div>
            <?php
        }
        include ("_layout/comments.php");
        ?>
    </article>
</main>
