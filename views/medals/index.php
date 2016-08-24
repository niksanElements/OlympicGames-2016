<?php $this->title = 'medals'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <table class="table table-striped table-inverse">
        <thead>
        <tr>
            <th>Country</th>
            <th>Gold</th>
            <th>Silver</th>
            <th><img src="<?=APP_ROOT?>/content/styles/images/fav.png" alt="here is a PICTURE"><div>Bronze</div></th>
            <th>Total</th>
        </tr>
        </thead>
        <?php foreach ($this->medals as $medal):?>
            <tr>
                <td><?= htmlspecialchars($medal['name']) ?></td>
                <td><?= htmlspecialchars($medal['type']) ?></td>
            </tr>
        <?php endforeach ?>
</main>