<!DOCTYPE html>
<html>
<head>
    <title>Olympic Games 2016</title>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/layout.css"/>
    <script src="<?=APP_ROOT?>/content/styles/js/jquery-3.1.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/styles/js/bootstrap.min.js"></script>
    <script src="<?=APP_ROOT?>/content/styles/js/blog-scripts.js"></script>
<!--    //<link rel="stylesheet" type="text/css" href="--><?//=APP_ROOT?><!--/content/styles/nav-icons.css">-->
    <mata charset="utf-8"></mata>
</head>
<body>
<header>
    <nav class="navbar navbar-collapse" style="background-color: black;">
        <header>
            <div>
                <h3 class="col-lg-4 col-md-4 col-sm-4"><a href="<?=APP_ROOT?>">
                    <img src="<?=APP_ROOT?>/content/styles/images/logo.jpg" height="50" width="80"></a>
                </h3>
            </div>
        </header>
        <div class="container-fluid col-lg-6 col-md-6 col-sm-12">
            <ul class="nav navbar-nav" style="font-family: 'Harlow Solid Italic';font-size:1.15em;font-weight: 500">
                <li class="text-center"><a href="<?=APP_ROOT?>/">Home</a></li>
                <li class="text-center"><a href="#">History</a></li>
                <li class="text-center"><a href="<?=APP_ROOT?>/news/">News</a></li>
                <li class="dropdown text-center"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Olympic Info</a>
                    <ul class="dropdown-menu" style="font-size:1.15em;font-weight: 500;color: #1C5E82">
                        <li class="special"><a style="color: #1C5E82" href="<?=APP_ROOT?>/countries/" >Countries</a></li>
                        <li class="special"><a style="color: #1C5E82" href="<?=APP_ROOT?>/medals/">Medals</a></li>
                        <li class="special"><a style="color: #1C5E82" href="<?=APP_ROOT?>/sports/">Sports</a></li>
                        <li class="special"><a style="color: #1C5E82" href="#">Athletes</a></li>
                        <li class="special"><a style="color: #1C5E82" href="<?=APP_ROOT?>/venues/">Venues</a></li>
                    </ul>
                </li>

                <?php if($this->isLoggedIn): ?>
                    <li class="text-center"><a href="<?=APP_ROOT?>/user/account">Account</a></li>
                <?php endif ?>
                <?php if($this->isAdmin): ?>
                    <li class="text-center"><a href="<?=APP_ROOT?>/adminpanel/">Admin panel</a></li>
                <?php endif; ?>
                <li class="text-center"><a href="<?=APP_ROOT?>/forum/">Forum</a></li>
                <li class="last text-center"><a href="<?=APP_ROOT?>/contactus">Contact Us</a></li>
                <li class="dropdown text-center"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">
                        <span class="[ glyphicon glyphicon-search ]"></span></a>
                    <form action="<?=APP_ROOT?>/search" method="post" class="pull-right dropdown-menu">
                        <input type="text" name="search" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                        <input type="submit" name="go" id="go" value="Search" />
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12 text-center">
            <?php if(!$this->isLoggedIn): ?>
                <ul class="nav navbar-right">
                    <li><a href="<?=APP_ROOT?>/user/login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    <li><a href="<?=APP_ROOT?>/user/registration"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                </ul>
            <?php else: ?>
                <div style="display: inline-block;">
                    <div style="display: block;color: #1C5E82;font-size: x-large;font-family: 'Harlow Solid Italic';"
                         class="col8"><b>Hello,<?=htmlspecialchars($_SESSION['username'])?></b></div>
                    <form  style="display: block;" class="col-lg-1" method="post" action="<?=APP_ROOT?>/user/logout">
                        <button type="submit" class="btn btn-primary btn-sm">Logout</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</header>
<?php require_once('show-notify-messages.php'); ?>
<?php require_once('show-validation-errors.php'); ?>
