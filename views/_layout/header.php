<!DOCTYPE html>
<html>
<head>
    <title>Olympic Games 2016</title>
    <mata charset="utf-8"></mata>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles/css/bootstrap.min.css" type="text/css"/>
    <script src="<?=APP_ROOT?>/content/styles/js/jquery-3.1.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/styles/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <header>
            <div>
                <h3 class="col-lg-4 col-md-4 col-sm-4"><a href="<?=APP_ROOT?>">Olympic Games 2016</a></h3>
            </div>
            <div class="pull-right">
                <a href="#">Login</a>
                <a href="#">Registrete</a>
            </div>
        </header>
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="<?=APP_ROOT?>/">Home</a></li>
                <li><a href="#">History</a></li>
                <li><a href="<?=APP_ROOT?>/news/">News</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Olympic Info</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Stadions</a></li>
                        <li><a href="#">Veneues</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Shedule</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
                <li class="last"><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <form action="#" method="post" class="pull-right">
            <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
            <input type="submit" name="go" id="go" value="Search" />
        </form>
    </nav>
</header>
<?php require_once('show-notify-messages.php'); ?>
