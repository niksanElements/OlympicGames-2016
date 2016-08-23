<?php $this->title = 'edit'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<script src="<?=APP_ROOT?>/content/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<form class="form-horizontal" method="post" accept-charset="UTF-8">
    <label class="control-label" for="name">Title</label>
    <input class="form-control" type="text" name="name"
           value="<?= htmlspecialchars($this->contactus['name'])?>" maxlength="300"/><br/>
    <label class="control-label" for="each">Age</label>
    <input class="form-control" type="text" name="each"
           value="<?= htmlspecialchars($this->contactus['age'])?>" maxlength="300"/><br/>
    <label class="control-label" for="education">Education</label>
    <input class="form-control" type="text" name="education"
           value="<?= htmlspecialchars($this->contactus['education'])?>" maxlength="300"/><br/>
    <label class="control-label" for="work">Work</label>
    <input class="form-control" type="text" name="work"
           value="<?= htmlspecialchars($this->contactus['work'])?>" maxlength="300"/><br/>
    <label class="control-label" for="passion">Passion</label>
    <input class="form-control" type="text" name="passion"
           value="<?= htmlspecialchars($this->contactus['passion'])?>" maxlength="300"/><br/>
    <label class="control-label" for="title">BODY</label>

    <textarea class="content" name="body"><?= htmlspecialchars($this->contactus['body'])?></textarea>
    <br/>
    <label class="control-label" for="tags">Tags</label>
    <input class="form-control" type="text" name="tags"/><br/>
    <input class="submit" type="submit" name="submit" value="submit"/>

</form>
<div class="action pull-right">[<a href="<?= APP_ROOT ?>/news">back</a>]</div>