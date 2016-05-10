<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Learning Laravel 5</title>

    <!-- Bootstrap -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
    <link rel="stylesheet" href={{asset("assets/css/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/animate.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/overwrite.css")}}>
    <link href={{asset("assets/css/animate.min.css")}} rel="stylesheet">
    <link href={{asset("assets/css/style.css")}} rel="stylesheet"/>

</head>
<body>
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.blade.php">Learn Laravel 5</a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.blade.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->