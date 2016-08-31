<?php $this->title = 'create'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <div class="container">
        <script src="<?=APP_ROOT?>/content/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

        <form class="form-horizontal" method="post" accept-charset="UTF-8">
            <h5>Place Create News!</h5>

            <label class="control-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" maxlength="300"/><br/>

            <textarea class="content" name="body"></textarea>
            <br/>

            <input class="submit" type="submit" name="submit" value="submit"/>

        </form>
        <div class="action pull-right">[<a href="<?= APP_ROOT ?>/news">back</a>]</div>
    </div>
</main>



