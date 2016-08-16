<?php $this->title = 'edit'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<script src="<?=APP_ROOT?>/content/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<form class="form-horizontal" method="post" accept-charset="UTF-8">
    <label class="control-label" for="title">Title</label>
    <input class="form-control" type="text" name="title"
           value="<?=htmlspecialchars($this->news['title'])?>" maxlength="300"/><br/>

    <textarea class="content" name="body"><?=htmlspecialchars($this->news['body'])?></textarea>
    <br/>

    <label class="control-label" for="tags">Tags</label>
    <input class="form-control" type="text" name="tags"/><br/>

    <input class="submit" type="submit" name="submit" value="submit"/>

</form>
<div class="action pull-right">[<a href="<?= APP_ROOT ?>/news">back</a>]</div>
