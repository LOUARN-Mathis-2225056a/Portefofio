<?php

namespace app\views;

class Navbar
{
    public function show($text): string
    {
        ob_start();
?>
        <link rel="stylesheet" href="/assets/styles/navbar.css">
        <nav class="menu">
            <input id="menu__button" type="checkbox" checked />
            <a class="menu__item" href="#"><?= $text['option_1']?></a>
            <a class="menu__item" href="#"><?= $text['option_2']?></a>
            <a class="menu__item" href="#"><?= $text['option_3']?></a>
            <a class="menu__item" href="#"><?= substr($text['option_4'],-5)?></a>
            <label class="menu__close" for="menu__button"></label>
        </nav>
        <nav class="page__menu page__custom-settings menu">
                <ul class="menu__list r-list">
                    <li class="menu__group"><a href="/home" class="menu__link r-link text-underlined"><?= $text['option_1']?></a></li>
                    <li class="menu__group"><a href="/it-project" class="menu__link r-link text-underlined"><?= $text['option_2']?></a></li>
                    <li class="menu__group"><a href="/other-project" class="menu__link r-link text-underlined"><?= $text['option_3']?></a></li>
                    <li class="menu__group"><a href="/about-me" class="menu__link r-link text-underlined"><?= $text['option_4']?></a></li>
                </ul>
        </nav>


        <?php
        return ob_get_clean();
    }
}