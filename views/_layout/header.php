<!DOCTYPE html>
<html>
<head>
    <title>Olympic Games 2016</title>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/layout.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles/css/fix-tinymce.css"/>

    <script src="<?=APP_ROOT?>/content/styles/js/jquery-3.1.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/semantic/semantic.min.js"></script>
    <script src="<?=APP_ROOT?>/content/styles/js/bootstrap.min.js"></script>
    <script src="<?=APP_ROOT?>/content/styles/js/blog-scripts.js"></script>
    <meta charset="utf-8"></meta>
    <style>
      .navbar-inverse {background-color: #EEE;}
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-form" style="box-shadow: 3px 3px 2px rgba(0,0,0,0.4)">
        <header>
            <div class="nav navbar-left">
                <h3 class="col-lg-1 col-md-1 col-sm-1 img-center"><a href="<?=APP_ROOT?>">
                        <img src="<?=APP_ROOT?>/content/styles/images/sprite.png" height="70" width="auto"></a>
                </h3>
            </div>
        </header>
        <div class="container-fluid col-lg-8 col-md-6 col-sm-10 col-xs-12">
            <ul class="nav navbar-nav custom-hover" style="font-family: 'Roboto', sans-serif;font-size:1.2em;font-weight: 700;">
                <li class="text-center"><a href="<?=APP_ROOT?>/">Home</a></li>
                <li class="text-center"><a href="<?=APP_ROOT?>/news/">News</a></li>
                <li class="dropdown text-center "><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Olympic Info</a>
                    <ul class="dropdown dropdown-menu">
                        <li class="special"><a  href="<?=APP_ROOT?>/countries/" >Countries</a></li>
                        <li class="special"><a  href="<?=APP_ROOT?>/sports/">Sports</a></li>
                        <li class="special"><a  href="<?=APP_ROOT?>/athletes/">Athletes</a></li>
                        <li class="special"><a  href="<?=APP_ROOT?>/venues/">Venues</a></li>
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
                    <form action="<?=APP_ROOT?>/search" method="post" class="dropdown-menu search">
                        <div>
                        <input class="form-control" type="text" name="search" value="Search"
                               onfocus="this.value=(this.value=='Search')? '' : this.value ;" style="width:150px;" /><br />
                        <input type="checkbox" name="news" value="1" checked="checked" />News &nbsp;
                        <input type="checkbox" name="posts" value="1" checked="checked" />Posts<br />
                        <input type="submit" name="go" id="go" value="Search" />

                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 nav navbar-right">
            <?php if(!$this->isLoggedIn): ?>
                <ul class="list-group list-inline pull-right">
                    <li class="list-group-item-text"><a href="<?=APP_ROOT?>/user/login">
                            <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li class="list-group-item-text"><a href="<?=APP_ROOT?>/user/registration">
                            <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                </ul>
            <?php else: ?>
                <div class="nav navbar-right" >
                    <div class="text-center" >
                        <p class="text-info">Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></p></div>
                    <div class="pull-right" >
                        <a href="<?=APP_ROOT?>/user/logout" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-log-out">Logout</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</header>
<?php require_once('show-notify-messages.php'); ?>
<?php require_once('show-validation-errors.php'); ?>
