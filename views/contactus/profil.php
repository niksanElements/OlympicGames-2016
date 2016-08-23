<h1><?= htmlspecialchars($this->title) ?></h1>

<main>

<form style="">
    <div style="display: inline-block; width: 100%;">
        <h1><?= htmlspecialchars($this->contactus['name']) ?></h1>
        <div class="img-responsive" style="display: block; background-color: #1F1F1F; width: 100%; text-align: center">
               <img src="<?=APP_ROOT?>/content/styles/images/dawe.jpg" class="img-circle" width="300em">

        </div>

        <div style="display: block">
                <table class="table table-bordered" id="vertical" style="width: 100%;">
                               <tr style="background-color: #1F1F1F">
                                   <th style="width: 10%; text-align: center">
                                       <img src="<?=APP_ROOT?>/content/styles/images/educ.png" style="align-items: center"></th>
                                   <td style="text-align: center ;color: #1C5E82">EDUCATION: </td>
                                   <td style="text-align: center ;color: #1C5E82"><?= htmlspecialchars($this->contactus['education']) ?></td>
                               </tr>
                               <tr style="background-color: #1F1F1F">
                                   <th style="text-align: center"><img src="<?=APP_ROOT?>/content/styles/images/work.png"></th>
                                   <td style="text-align: center;color: #1C5E82">WORK: </td>
                                   <td style="text-align: center;color: #1C5E82"><?= htmlspecialchars($this->contactus['work']) ?></td>
                               </tr>
                               <tr style="background-color: #1F1F1F">
                                   <th style="text-align: center"><img src="<?=APP_ROOT?>/content/styles/images/fav.png"></th>
                                   <td style="text-align: center;color: #1C5E82">PASSION: </td>
                                   <td style="text-align: center;color: #1C5E82;font-size: x-large"><?= htmlspecialchars($this->contactus['passion']) ?></td>
                               </tr>
                </table>
        </div>
        <h2>AGE</h2>
        <div style="display: block">
               <textarea class="content" name="body" style="align-content: flex-end">
                   <?= htmlspecialchars($this->contactus['body']) ?>
               </textarea>
        </div>
        <h2>[<a href="<?= APP_ROOT ?>/contactus/edit/<?=$this->contactus['id']?>">edit</a>]</h2>
    </div>
</form>



</main>