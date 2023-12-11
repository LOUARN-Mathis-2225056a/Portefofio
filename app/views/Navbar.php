<?php

namespace app\views;

class Navbar
{
    public function show($text): string
    {
        ob_start();
?>
        <link rel="stylesheet" href="/assets/styles/navbar.css">
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul class="sidebarMenuInner">
                <li><a href="/home/<?= $_ENV['lang'] ?>" target="_blank"><?= $text['option_1']?></a></li>
                <li><a href="/it-project/<?= $_ENV['lang'] ?>" target="_blank"><?= $text['option_2']?></a></li>
                <li><a href="/other-project/<?= $_ENV['lang'] ?>" target="_blank"><?= $text['option_3']?></a></li>
                <li><a href="/about-me/<?= $_ENV['lang'] ?>" target="_blank"><?= $text['option_4']?></a></li>
            </ul>
        </div>
        <nav class="page__menu page__custom-settings menu">
                <ul class="menu__list r-list">
                    <li class="menu__group"><a href="/home/<?= $_ENV['lang'] ?>" class="menu__link r-link text-underlined"><?= $text['option_1']?></a></li>
                    <li class="menu__group"><a href="/it-project/<?= $_ENV['lang'] ?>" class="menu__link r-link text-underlined"><?= $text['option_2']?></a></li>
                    <li class="menu__group"><a href="/other-project/<?= $_ENV['lang'] ?>" class="menu__link r-link text-underlined"><?= $text['option_3']?></a></li>
                    <li class="menu__group"><a href="/about-me/<?= $_ENV['lang'] ?>" class="menu__link r-link text-underlined"><?= $text['option_4']?></a></li>
                </ul>
        </nav>


        <?php
        return ob_get_clean();
    }
}