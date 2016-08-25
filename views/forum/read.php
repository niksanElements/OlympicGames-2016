<h1><?= htmlspecialchars($this->title) ?></h1>

<?php
    include("_layout\actions.php");
?>


<article class="panel panel-group center-block news">
    <h4 class="panel panel-heading"><?= htmlspecialchars($this->post['title']) ?></h4>
    <div class="date panel panel-info">Post on:
        <?= (new DateTime($this->post['date']))->format('d-M-Y') ?>
        <i>by</i> <?= htmlspecialchars($this->post['full_name']) ?>
    </div>
    <p class="body panel panel-body"><?= $this->post['body']?></p>
    
</article>
 <?php include ("_layout\comments.php"); ?>