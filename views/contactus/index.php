<?php $this->title = 'Fresh Team Contacts'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<section >
    <h2>Email Address: <a>tukate@abv.bg</a></h2>
</section>
<main style="background-color: #1F1F1F">
    <form >
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
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }if($contact['id'] == 2){
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }if($contact['id'] == 3){
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }if($contact['id'] == 4){
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }if($contact['id'] == 5){
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }if($contact['id'] == 6){
                                    echo APP_ROOT.'/content/styles/images/dawe.jpg';
                                }
                            }
                            ?>" class="img-responsive img-rounded" alt="Ne Zarejda PICTURE" width="50%" height="50%">
                            <div style="color: orangered">
                                <div>Name : <?= htmlspecialchars($contact['name']) ?></div>
                                <div>Age : <?= htmlspecialchars($contact['age']) ?></div>
                            </div>
                        </a>
                        </li>
                        <?php endforeach ?>

                </ul>
            </div>
    </form>
    <!-- <h2><a href="<?= APP_ROOT ?>/contactus/create">ADD MEMBER</a></h2>-->
</main>