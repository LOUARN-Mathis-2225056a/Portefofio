<?php

namespace app\views;

class Navbar
{
    public function show(): string
    {
        ob_start();
?>
        <nav class="menu">
            <input id="menu__button" type="checkbox" checked />
            <a class="menu__item" href="#">Home</a>
            <a class="menu__item" href="#">About</a>
            <a class="menu__item" href="#">Contact</a>
            <a class="menu__item" href="#">Help</a>
            <label class="menu__close" for="menu__button"></label>
        </nav>
        <h1>Triangular mobile navigation</h1>
<?php
        return ob_get_clean();
    }
}