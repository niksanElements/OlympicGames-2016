<?php $this->title = 'Comments'; ?>

<h4 xmlns="http://www.w3.org/1999/html"><?=htmlspecialchars($this->title)?></h4>

<ul class="comments">
    <?php foreach ($this->comments as $comment): ?>
        <li>
            <div class="cdata"><?= (new DateTime($comment['date']))->format('d-M-Y') ?> </div>
            <div class="content-2"><?=$comment['body']?></div>
        </li>
    <?php endforeach; ?>
</ul>

<form class="form-horizontal"  method="post" accept-charset="UTF-8">
    <textarea class="content-2" name="comment"></textarea><br/>
    <input class="input-sm" type="submit" name="submit" value="commenting"/>

</form>

