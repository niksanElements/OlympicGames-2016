<h3>Edit team member contact</h3>
<script src="<?=APP_ROOT?>/content/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<form class="form-horizontal" method="post" accept-charset="UTF-8">
  <label class="control-label" for="name">Name</label>
  <input class="form-control" type="text" name="name"
         value="<?= htmlspecialchars($this->contactus['name'])?>" maxlength="300"/><br/>

  <label class="control-label" for="age">Age</label>
  <input class="form-control" type="number" name="age"
         value="<?= htmlspecialchars($this->contactus['age'])?>" maxlength="100"/><br/>

  <label class="control-label" for="education">Education</label>
  <input class="form-control" type="text" name="education"
         value="<?= htmlspecialchars($this->contactus['education'])?>" maxlength="100"/><br/>

  <label class="control-label" for="work">Work</label>
  <input class="form-control" type="text" name="work"
         value="<?= htmlspecialchars($this->contactus['work'])?>" maxlength="100"/><br/>

  <label class="control-label" for="passion">Passion</label>
  <input class="form-control" type="text" name="passion"
         value="<?= htmlspecialchars($this->contactus['passion'])?>" maxlength="100"/><br/>

  <label class="control-label" for="body">BODY</label>

  <textarea class="content" name="body"><?= htmlspecialchars($this->contactus['body'])?></textarea>
  <br/>

  <input class="submit" type="submit" name="submit" value="submit"/>

</form>
<div class="action pull-right">[<a href="<?= APP_ROOT ?>/contactus">back</a>]</div>
