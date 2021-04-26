<?php

//CREATED BY: RICARDO ROCHA
//CREATED IN: 10TH OF NOVEMBER
//LAST EDITED IN: 19TH OF NOVEMBER
//EMAIL: me@rrocha.eu

    require("functions/settings.php");

    if(isset($_POST['logout'])) {
        session_destroy();
        header('location: ' . $url);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<title><?=$pagetitle ?></title>
    
    <!-- styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" href="styles/css.css" type="text/css"><!-- main style sheet -->
    <link rel="stylesheet" href="styles/icons.css" type="text/css">
    <link rel="stylesheet" href="styles/bricklayer.css" type="text/css">
    
    <link rel="stylesheet" href="styles/trumbowyg.css" type="text/css">
    
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"><?=$shortname ?></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
<!--                    <a class="nav-link active" href="#">Trading Results</a>-->
                </li>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                        <a class="dropdown-item" href="#">Risk management calculator</a>-->
<!--                        <a class="dropdown-item" href="#">Pip value calculator</a>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>

            <?php if(!isset($_SESSION['id'])) { ?>
            <span class="nav-item">
                <a class="nav-link" href="login.php">Admin Login</a>
            </span>
            <?php } else { ?>

                <form method="post" action="">
                    <button name="logout">LOGOUT</button>
                </form>

            <?php } ?>
        </div>
    </nav>

        <div id="cover" class="mb-4" style="background-image: url(<?=$coverpic ?>);">
            
            <div class="cell-top"></div><!-- to make up space at the top -->
        
            <div class="cell-middle">
                <span class="text-white display-4"><?=$name ?></span><br>
                <span id="slogan" class="text-light lead"><?=$slogan ?></span>
            </div>
            
            <div class="cell-bottom"></div>
            
        </div>