<?php

namespace app\views;

use app\models\Template;

class OtherProject
{
    public function show($text): void
    {
        ob_start();
?>
<div class="page">
<h1>yoo</h1>
</div>
        <?php
        (new Template('Other Project', ob_get_clean(),'other_project'))->show();
    }
}