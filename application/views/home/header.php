<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="uicookies.com" />

    <title>
        <?= $title; ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">OrganizePro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="probootstrap-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url(); ?>home/index" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url(); ?>about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?= base_url(); ?>contact" class="nav-link">Contact</a></li>
                    <li class="nav-item probootstrap-cta probootstrap-seperator"><a href="<?= base_url(); ?>auth/registration" class="nav-link">Register</a></li>
                    <li class="nav-item probootstrap-cta"><a href="<?= base_url(); ?>auth" class="nav-link">Log In</a></li>
                </ul>

            </div>
        </div>
    </nav>