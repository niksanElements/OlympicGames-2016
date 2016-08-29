<h1>Profil</h1>

<main>
    <div class="container">
        <form>
            <div class="panel">
                <div class="img-responsive panel-heading panel-group container-fluid">
                    <div class="col-lg-5">
                        <img src="<?=APP_ROOT?>/content/styles/images/dawe.jpg" class="img-thumbnail " width="auto" height="250">
                    </div>
                    <h1 class="col-lg-7 text-info"><?= htmlspecialchars($this->contactus['name']) ?></h1>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered" id="vertical">
                        <tr class="text-uppercase">
                            <th><img src="<?=APP_ROOT?>/content/styles/images/educ.png"></th>
                            <td>EDUCATION: </td>
                            <td><?= htmlspecialchars($this->contactus['education']) ?></td>
                        </tr>
                        <tr>
                            <th ><img src="<?=APP_ROOT?>/content/styles/images/work.png"></th>
                            <td >WORK: </td>
                            <td ><?= htmlspecialchars($this->contactus['work']) ?></td>
                        </tr>
                        <tr>
                            <th ><img src="<?=APP_ROOT?>/content/styles/images/fav.png"></th>
                            <td>PASSION: </td>
                            <td><?= htmlspecialchars($this->contactus['passion']) ?></td>
                        </tr>
                        <tr>
                            <th ><img src="<?=APP_ROOT?>/content/styles/images/age.png"></th>
                            <td>Age:</td>
                            <td><?= htmlspecialchars($this->contactus['education']) ?></td>
                        </tr>
                    </table>
                </div>
                <h2>Tekst</h2>
                <div>
               <textarea class="content" name="body" readonly>
                   <?= htmlspecialchars($this->contactus['body']) ?>
               </textarea>
                </div>
            </div>
        </form>


    </div>
</main>