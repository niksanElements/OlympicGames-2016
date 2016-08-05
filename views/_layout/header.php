<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Olympic Games 2016</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="content/styles/css/layout.css" type="text/css" />
    <link rel="stylesheet" href="content/styles/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="content/styles/css/bootstrap-theme.min.css"/>
    <script src="content/styles/js/jquery-3.1.0.min.js"></script>
    <script src="content/styles/js/bootstrap.min.js"></script>

</head>
<body id="top">
<div class="wrapper col1 span4">
    <div id="header">
        <div class="fl_left">
            <h1><a href="index.html">Olympic Games 2016</a></h1>
        </div>
        <div class="fl_right">
            <a href="#">Login</a>
            <a href="#">Registrete</a>
        </div>
        <br class="clear" />
    </div>
</div>

<div class="wrapper col2">
    <div id="topbar">
        <div id="topnav">
            <ul class="row">
                <li ><a href="index.html">Home</a></li>
                <li ><a href="../../pages/style-demo.html">History</a></li>
                <li ><a href="../../pages/full-width.html">News</a></li>
                <li ><a href="#">Olympic Info</a>
                    <ul>
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
        <div id="search">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                    <input type="submit" name="go" id="go" value="Search" />
                </fieldset>
            </form>
        </div>
        <br class="clear" />
    </div>
</div>

<?php require_once('show-notify-messages.php'); ?>