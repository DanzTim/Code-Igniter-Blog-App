<html>
    <head>
        <title>CI Blog</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Code Igniter</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="#navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarColor02" style="">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="my-4"><?= $title ?></h2>