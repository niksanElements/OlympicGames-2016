<h4>Search results for "<?=$this->search?>"</h4>
<?php if(count($this->newsResults) > 0 or count($this->postsResults) > 0): ?>
  <table>
    <?php if(count($this->newsResults) > 0): ?>
      <tr>
        <td>
          <h4>News:</h4>
        </td>
      </tr>
      <?php foreach($this->newsResults as $result): ?>
        <tr>
          <th>
            <a href="<?=APP_ROOT?>/news/read/<?=$result["id"]?>" target="_blank"><?=$result["title"]?></a>
          </th>
        </tr>
        <tr>
          <th>
            <?php echo cutLongText(strip_tags(htmlspecialchars_decode($result["body"]))); ?>
          </th>
        </tr>
      <?php endforeach ?>
    <?php endif ?>

    <?php if(count($this->postsResults) > 0): ?>
      <tr>
        <td>
          <h4>Posts:</h4>
        </td>
      </tr>
      <?php foreach($this->postsResults as $result): ?>
        <tr>
          <th>
            <a href="<?=APP_ROOT?>/news/read/<?=$result["id"]?>" target="_blank"><?=$result["title"]?></a>
          </th>
        </tr>
        <tr>
          <th>
            <?php echo cutLongText(strip_tags(htmlspecialchars_decode($result["body"]))); ?>
          </th>
        </tr>
      <?php endforeach ?>
    <?php endif ?>
  </table>
<?php else: ?>
Nothing found
<?php endif ?>
