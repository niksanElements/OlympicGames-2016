<?php $this->title = 'add'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<?php
    include("_layout\actions.php");
?>


<form class="form-horizontal" method="post" accept-charset="UTF-8">
    <h5>Place Create post!</h5>

    <label class="control-label" for="title">Title</label>
    <input class="form-control" type="text" name="title" maxlength="300"/><br/>

    <textarea class="content" name="body"></textarea>
    <br/>

    <label class="control-label" for="tags">Tags</label>
    <input class="form-control" type="text" name="tags"/><br/>

    <input class="submit" type="submit" name="submit" value="submit"/>

</form>
<div class="action pull-right">[<a href="<?= APP_ROOT ?>/forum">back</a>]</div>