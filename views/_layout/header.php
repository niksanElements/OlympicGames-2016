<!DOCTYPE html>
<html>
<head>
    <title>Olympic Games 2016</title>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/layout.css"/>
    <script src="<?=APP_ROOT?>/content/styles/js/jquery-3.1.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/styles/js/bootstrap.min.js"></script>
    <mata charset="utf-8"></mata>
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <header>
            <div>
                <h3 class="col-lg-4 col-md-4 col-sm-4"><a href="<?=APP_ROOT?>">Olympic Games 2016</a></h3>
            </div>
        </header>
        <div class="container-fluid col-lg-6 col-md-6 col-sm-12">
            <ul class="nav navbar-nav">
                <li class="text-center"><a href="<?=APP_ROOT?>/">Home</a></li>
                <li class="text-center"><a href="#">History</a></li>
                <li class="text-center"><a href="<?=APP_ROOT?>/news/">News</a></li>
                <li class="dropdown text-center"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Olympic Info</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=APP_ROOT?>/countries/">Countries</a></li>
                        <li><a href="<?=APP_ROOT?>/medals/">Medals</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Athlets</a></li>
                        <li><a href="#">Stadions</a></li>
                    </ul>`
                </li>
                <?php if($this->isAdmin): ?>
                    <li class="text-center"><a href="<?=APP_ROOT?>/manageusers/">Users</a></li>
                <?php endif; ?>
                <li class="last text-center"><a href="<?=APP_ROOT?>/contactus">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12 text-center">
            <?php if(!$this->isLoggedIn): ?>
                <a class="col-lg-offset-1 col-md-offset-1 "href="<?=APP_ROOT?>/user/login">Login</a>
                <a class="col-lg-offset-1 col-md-offset-1 " href="<?=APP_ROOT?>/user/registration"">Registrete</a>
            <?php else: ?>
                <span class="col8">Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
                <form class="col-lg-1" method="post" action="<?=APP_ROOT?>/user/logout">
                    <input type="submit" value="Logout"/>
                </form>
            <?php endif; ?>
        </div>
        <form action="#" method="post" class="pull-right">
            <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
            <input type="submit" name="go" id="go" value="Search" />
        </form>
    </nav>
</header>
<?php require_once('show-notify-messages.php'); ?>
