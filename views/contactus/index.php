<?php $this->title = 'countries'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <section class="col-lg-10 col-md-10 col-sm-10">
        <?php foreach ($this->contactus as $contact):?>
            <div class="panel panel-group col-lg-5 col-md-5 col-sm-5">
                <a href="<?=APP_ROOT?>/contactus/profil/<?=$contact['id']?>">
                <div style=""><img src="<?=APP_ROOT?>/content/styles/images/fav.png" alt="here is a PICTURE"></div>
                <div>
                    <ul>
                        <li><?= htmlspecialchars($contact['name']) ?></li>
                        <li><?=($contact['age']) ?></li>
                        <li>neshto si</li>
                    </ul>
                </div>
                </a>
            </div>
        <?php endforeach ?>
    </section>
</main>
