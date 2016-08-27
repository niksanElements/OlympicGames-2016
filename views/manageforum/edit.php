<?php $this->title = 'edit'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>


<form class="form-horizontal" method="post" accept-charset="UTF-8">
    <label class="control-label" for="title">Title</label>
    <input class="form-control" type="text" name="title"
           value="<?=htmlspecialchars($this->post['title'])?>" maxlength="300"/><br/>

    <textarea class="content" name="body"><?=htmlspecialchars($this->post['body'])?></textarea>
    <br/>

    <input class="submit" type="submit" name="submit" value="submit"/>

</form>
