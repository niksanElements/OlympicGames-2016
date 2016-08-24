<nav class="forum navbar navbar-default">
    <ul class="container nav navbar-nav">
        <li class="text-center col-lg-2 col-md-2 col-sm-2"><a href="<?=APP_ROOT?>/">Forum</a></li>
        <li class="text-center col-lg-2 col-md-2 col-sm-2"><a href="<?=APP_ROOT?>/">Rowes</a></li>
        <?php if($this->isLoggedIn){ ?>
            <li class="text-center col-lg-2 col-md-2 col-sm-2"><a href="<?=APP_ROOT?>/forum/add">Add</a></li>
        <?php } ?>
    </ul>
</nav>