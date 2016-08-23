<?php $this->title = 'ContactUs'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<section>
    <h2>Email Address : <a>tukate@abv.bg</a></h2>
</section>
<main>
    <form>
        <h4>Profils:</a></h4>
            <div class="asd">
                <ul class="icons">
                    <?php foreach ($this->contactus as $contact):?>
                    <li>
                        <a href="<?=APP_ROOT?>/contactus/profil/<?=$contact['id']?>">
                            <img src="
                            <?php
                            if(isset($contact['id'])){
                                if($contact['id'] == 1){
                                    echo APP_ROOT.'/content/styles/images/fav.png';
                                }if($contact['id'] == 2){
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }if($contact['id'] == 3){
                                    echo APP_ROOT.'/content/styles/images/fav.png';
                                }if($contact['id'] == 4){
                                    echo APP_ROOT.'/content/styles/images/fav.png';
                                }if($contact['id'] == 5){
                                    echo APP_ROOT.'/content/styles/images/fav.png';
                                }if($contact['id'] == 6){
                                    echo APP_ROOT.'/content/styles/images/fav.png';
                                }
                            }
                            ?>" class="img-responsive img-rounded" alt="Ne Zarejda PICTURE" width="100%" height="100%">
                            <table class="table table-responsive">
                                <thead style="color: orangered;">
                                <th style="background-color: #0f0f0f">Name:</th>
                                <th style="background-color: #0f0f0f">Age:</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="color: orangered"><?= htmlspecialchars($contact['name']) ?></td>
                                    <td style="color: orangered"><?= htmlspecialchars($contact['age']) ?></td>
                                </tr>
                                </tbody>

                            </table>
                        </a>
                        </li>
                        <?php endforeach ?>
                </ul>
            </div>
    </form>
    <h2><a href="<?= APP_ROOT ?>/contactus/create">ADD MEMBER</a></h2>
</main>