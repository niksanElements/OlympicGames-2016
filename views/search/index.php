<h4>Search results for "<?=$this->search?>"</h4>
<?php if(is_array($this->searchResult)): ?>
  <table>
  <?php foreach($this->searchResult as $result): ?>
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
  </table>
<?php else: ?>
Nothing found
<?php endif ?>
