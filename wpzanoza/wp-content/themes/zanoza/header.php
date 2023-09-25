<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>sait document</title>
    <?php
    wp_head();
    ?>
</head>
<body>

<!--Header-->
<header class="header" id="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a href="index">LoGo</a>
            </div>
<!--Nav-->
            <nav class="nav">
                <a class="nav__link" href="wpzanoza" data-scroll="#features">Главная</a>
                <a class="nav__link" href="service" data-scroll="#works">Наши услуги</a>
                <a class="nav__link" href="contacts" data-scroll="contacts.html">Контакты</a>
            </nav>
<!--
            <button class="burger">
                <span class="burger__item">

                </span>
            </button>
-->
 <div class="hamburger-menu">
  <input id="menu__toggle" type="checkbox" />
  <label class="menu__btn" for="menu__toggle">
    <span></span>
  </label>
  <ul class="menu__box">
    <li><a class="menu__item" href="/index">Главная</a></li>
    <li><a class="menu__item" href="/service">Наши услуги</a></li>
    <li><a class="menu__item" href="/contacts">Контакты</a></li>
  </ul>
</div>



        </div>
    </div>
</header>
<!--END Header-->
