<?php $this->title = 'news'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main>
    <section class="">

        <?php foreach ($this->news as $element):?>

            <article class="panel panel-group col-lg-6 col-md-6 col-sm-6">
                <h4 class="panel panel-heading"><?= htmlspecialchars($element['title']) ?></h4>
                <div class="date panel panel-info">Post on:
                    <?= (new DateTime($element['date']))->format('d-M-Y') ?>
                    <i>by</i> <?= htmlspecialchars($element['full_name']) ?>
                </div>
                <p class="body panel panel-body"><?= cutLongText($element['body'])?></p>
                <a href="<?=APP_ROOT?>/news/read/<?=$element['id']?>">red more</a>
            </article>
            
        <?php endforeach ?>
    </section>
</main>
