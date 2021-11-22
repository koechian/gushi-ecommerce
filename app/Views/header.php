<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Number One Fashion Store | GUSHI</title>
    <link rel="stylesheet" href="/CSS/pages.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Rampart+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/jquery-ui.min.css">
    <link rel="stylesheet" href="/CSS/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/CSS/jquery-ui.theme.min.css">

</head>

<body>
    <section class="header">
        <header id="top_bar">
            <div class="logo">
                <a href="<?= site_url('Pages/index') ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="178" height="65" viewBox="0 0 178 65">
                        <text id="GUSHI" transform="translate(0 52)" font-size="58" font-family="Philosopher-Bold, Philosopher" font-weight="700" letter-spacing="0.01em">
                            <tspan x="0" y="0">GUSHI</tspan>
                        </text>
                    </svg>
                </a>
            </div>
            <div>
                <form name="homepage_search" action="" method="get">
                    <input class="searchbox" name="search_term" type="text" placeholder="Search" />
                </form>
            </div>
            <div class="links">
                <ul>
                    <li><a href="<?= site_url('Pages/About') ?>">About Us</a></li>
                    <li><a href="<?= site_url('Pages/Children') ?>">Children</a></li>
                    <li><a href="<?= site_url('Pages/Men') ?>">Men</a></li>
                    <li><a href="<?= site_url('Pages/Women') ?>">Women</a></li>
                    <li><a href="">Pets</a></li>

                </ul>
            </div>
            <div class="cart">
                <span><a href="<?= site_url('Login') ?>">Sign In/Register</a></span>
                <hr />
                <a class="icon" href="<?= site_url('Pages/Cart') ?>"><span class="iconify shopping_icon" data-icon="ph:shopping-bag-light"></span></a>
            </div>
        </header>
    </section>