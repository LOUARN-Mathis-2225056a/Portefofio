<?php

namespace app\views;

use app\models\Template;

class Home
{
    public function show($text): void
    {
        ob_start();
?>
<div class="page">
    <div>
        <p id="welcome_text">
            <b><?= $text['welcome']?></b> <?= $text['text_1']?> <br>
            <br>
            <?= $text['text_2']?>
        </p>
    </div>
    <div>
        <p id="welcome_text">
            <?= $text['text_3']?>
        </p>
    </div>
</div>

<?php
        (new Template('Home', ob_get_clean(),'home'))->show();
    }
}
?>