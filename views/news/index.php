<?php $this->title = 'news'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main>
    <section>

        <?php foreach ($this->news as $element):?>

        <article>
            <h4><?= htmlspecialchars($element['title']) ?></h4>
            <div class="date">Post on:
                <?= (new DateTime($element['date']))->format('d-M-Y') ?>
                <i>by</i> <?= htmlspecialchars($element['full_name']) ?>
            </div>
            <p class="body"><?= $element['body'] ?></p>

            <?php endforeach ?>

        </article>
    </section>
</main>
