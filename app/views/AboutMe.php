<?php

namespace app\views;

use app\models\Template;

class AboutMe
{
    public function show($text): void
    {
        ob_start();
        ?>
        <div class="page">
            <h1>yoow</h1>
        </div>
        <?php
        (new Template('About me', ob_get_clean(),'about_me'))->show();
    }
}