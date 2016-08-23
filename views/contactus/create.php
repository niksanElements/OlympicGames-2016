<?php $this->title = 'create'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">

    <div>Name</div>
    <input type="text" name="name"/>
    <div>Body:</div>
    <textarea rows="10" name="body"></textarea>
    <div>Age</div>
    <input type="number" name="age"/>
    <div>Education</div>
    <input type="text" name="education"/>
    <div>Work</div>
    <input type="text" name="work"/>
    <div>Passion</div>
    <input type="text" name="passion"/>

    <div><input type="submit" value="Create"/>
        <a href="<?=APP_ROOT?>/contactus">[Cancel]</a></div>
</form>