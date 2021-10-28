<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     wp_head();
     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="<?php echo get_theme_root_uri(); ?>/fr-thems/style.css" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <section class="topo">
        <div class="center">

            <div class="logo">
                <img src="<?php echo get_theme_root_uri(); ?>/fr-thems/images/logo.png" alt="">
            </div>
            <!--logo-->
            <ul class="menu-desktop">
                <li>
                    <a href="">Home</a>
                    <a href="">Sobre</a>
                    <a href="">Contatos</a>

                </li>
            </ul>
            <!--menu-desktop-->
            <div class="menu-mobile">
                <i class="fas fa-bars" style="color: white;font-size: 30px; margin-right: 10px;"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contatos</a></li>
                </ul>
            </div>
            <!--menu mobile-->