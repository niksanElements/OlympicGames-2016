<main xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="<?= APP_ROOT ?>/venues">
                        <img src="<?= APP_ROOT ?>/content/styles/images/rio-olympics.jpg"
                                         alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Place</h3>
                            <p>See Where Olympic Games Will Take Place</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?=APP_ROOT ?>/sports">
                        <img src="<?= APP_ROOT ?>/content/styles/images/sports.jpg"
                             alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Sports</h3>
                            <p>See The Sports</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="<?=APP_ROOT ?>/athletes">
                        <img src="<?= APP_ROOT ?>/content/styles/images/Athletes.jpg"
                             alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Athletes</h3>
                            <p>See All Athletes In Olympic Games</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="<?= APP_ROOT ?>/news">
                        <img src="<?= APP_ROOT ?>/content/styles/images/News.gif"
                             alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>News</h3>
                            <p>Follow All News From Olympic Games</p>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="col-lg-12 col-md-12 col-sm-12">
        <aside class="col-lg-4 col-md-4 col-sm-6">
            <h4>News</h4>
            <ul>
                <?php foreach ($this->news as $el): ?>
                    <li class="news">
                        <a href="<?= APP_ROOT?>/news/read/<?= $el['id']?>"><?= $el['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <aside class="col-lg-4 col-md-4 col-sm-6">
            <h4>Forum</h4>
            <ul>
                <?php foreach ($this->posts as $el): ?>
                    <li class="posts">
                        <a href="<?= APP_ROOT?>/forum/read/<?= $el['id']?>"><?= $el['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <aside class="col-lg-4 col-md-4 col-sm-6">
            <h4>Countries</h4>
            <ul>
                <?php foreach ($this->countries as $el): ?>
                    <li class="countries">
                        <div><?= $el['countryShort'] ?></div> -
                        <div><?= $el['medalsTotal'] ?> </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </section>
</main>
