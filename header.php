<?php 
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="icon" href="images/logo.png" type="image/icon type">

    <title>John Berean</title>    
    
    <style>
    body{
        background: url("images/csteam.jpg") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
    }
    .navbar{
        padding-top: 2px;
        font: 13px Inconsolata, monospace;
    }
    </style>
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <!-- J.M.B. -->
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">PORTFOLIO</a>
                </li> -->
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="about.php">RESUME</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="resume.php">RESUME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>